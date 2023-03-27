<template>
    <form @submit.prevent="sendData" v-show="active" class="fixed t-10 left-1/2 translate-x-[-50%] flex flex-col items-center bg-stone-800  text-stone-200  space-y-6 py-12 px-16  rounded-lg border border-x-stone-400 border-b border-primary h-fit z-10">
            <div @click="closePopUp" class="absolute top-3 right-3 cursor-pointer">
                <svg class="svg-icon" width="35" height="35" fill="#fff" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg"><path d="M777.856 280.192l-33.92-33.952-231.872 231.872-231.84-231.872-33.984 33.888 231.872 231.904-231.84 231.84 33.888 33.984 231.904-231.904 231.84 231.872 33.952-33.888-231.872-231.904z"  /></svg>
            </div>
    
        <div class="flex flex-col items-center">
            <h2 class="text-2xl font-bold">Login</h2>
            <p class="text-sm">come back and light up the world</p>
        </div>
        <div class="flex flex-col space-y-3 w-full">
            <input v-model="formData.email" type="email" placeholder="Enter your email"
                   class="h-12 w-full bg-stone-900 rounded text-sm text-stone-200 outline-none pl-4">
            <input v-model="formData.password" type="password" placeholder="Enter your password"
                   class="h-12 w-full bg-stone-900 rounded text-sm text-stone-200 outline-none pl-4">
        </div>
        <div class="flex flex-col items-center space-y-1">
            <input type="submit" class="w-full bg-stone-50 text-stone-900 py-2 px-12 rounded hover:brightness-75 cursor-pointer" value="Login">
        </div>
        
    </form>
</template>

<script>
import axios from 'axios'
export default {
    name: 'LoginForm',
    props: ['active'],
    data(){
        return {
            formData:{
                email: '',
                password: ''
            }
        }
        
    },
    methods: {
        closePopUp(){
            this.$emit('close')
        },
        async sendData(){
            try{
                let request = await axios.post('http://CandleLight.com/api/Login', this.formData);
                let response = request.data;
                alert(response.status);
                localStorage.setItem('token', response.data.token)
                this.$emit('loggedIn')
            }catch(error){
                alert(error.response.data.message);
            }
        }
    }
}
</script>