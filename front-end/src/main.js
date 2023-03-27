import { createApp } from 'vue'
import { createStore } from 'vuex'
import axios from 'axios'
import './style.css'
import App from './App.vue'

const User = createStore({
    state() {
        return {
            Authenticated: false,
            User: {}
        }
    },
    mutations: {
        userLoggedIn(state, data){
            state.Authenticated = true;
            state.User = data;
        },
        userLoggedOut(state){
            state.Authenticated = false,
            state.User = {}
        }
    },
    actions: {
        async login(context, loginData){
            try{
                let request = await axios.post('http://CandleLight.com/api/Login', loginData);
                let response = request.data;
                alert(response.status);
                localStorage.setItem('token', response.data.token)
                context.commit("userLoggedIn", response.data)
                return true;
            }catch(error){
                alert(error.response.data.message);
                return false;
            }
        },
        async signUp(context, signUpData){
            const formData = new FormData;
            formData.append('first_name', signUpData.first_name)
            formData.append('last_name', signUpData.last_name)
            formData.append('user_name', signUpData.user_name)
            formData.append('birth_date', signUpData.birth_date)
            formData.append('email', signUpData.email)
            formData.append('password', signUpData.password)
            formData.append('password_confirmation', signUpData.password_confirmation)
            formData.append('image', signUpData.image)
            try{
                let request = await axios.post('http://CandleLight.com/api/SignUp', formData);
                let response = request.data;
                alert(response.status)
                localStorage.setItem('token', response.data.token)
                context.commit("userLoggedIn", response.data)
            }catch(error){
                alert(error)
            }
        },
        async logOut(context){
            let token = localStorage.getItem('token');
            let config = {
                headers:{
                    'Authorization': 'Bearer ' + token
                }
            }
            try{
                let request = await axios.post('http://CandleLight.com/api/Logout',{}, config);
                console.log(request)
                localStorage.removeItem('token')
                context.commit('userLoggedOut')
                alert(request.data.status)
            }catch(error){
                alert(error);
            }

        },
        async getUser(context){
            let token = localStorage.getItem('token');
            let config = {
                headers:{
                    'Authorization': 'Bearer ' + token
                }
            }
            try{
                let request = await axios.get('http://CandleLight.com/api/get', config);
                context.commit('userLoggedIn', request.data)
            }catch(error){
                alert(error);
            }
        }
    }
}) 


const app = createApp(App);
app.use(User)
app.mount("#app");
