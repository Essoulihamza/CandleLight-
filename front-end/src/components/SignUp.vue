<template>
    <form @submit.prevent="sendData" class="hidden flex-col items-center bg-stone-800  text-stone-200  space-y-8 py-6 px-6  rounded-lg border border-x-stone-400 border-b border-primary h-fit lg:flex">
        <div class="flex flex-col items-center">
            <h2 class="text-2xl font-bold">SignUp</h2>
            <p class="text-sm">Join us and strat sharing</p>
        </div>
        <div class="w-full space-y-6">
            <div class="flex space-x-3">
                <input v-model="formData.first_name" type="text" name="name" placeholder="First name" class="h-12 w-full bg-stone-900 rounded text-sm text-stone-200 outline-none pl-4">
                <input v-model="formData.last_name" type="text" name="name" placeholder="Last name" class="h-12 w-full bg-stone-900 rounded text-sm text-stone-200 outline-none pl-4">
            </div>
            <div class="flex space-x-3">
                <input v-model="formData.user_name" type="text" name="name" placeholder="User name" class="h-12 w-full bg-stone-900 rounded text-sm text-stone-200 outline-none pl-4">
                <input v-model="formData.birth_date" type="date" name="birthdate" class="h-12 w-full bg-stone-900 rounded text-sm text-stone-200 outline-none pl-4">
            </div>
            <div class="flex flex-col space-y-5">
                <input v-model="formData.email" type="email" name="email" placeholder="Email" class="h-10 bg-stone-900 rounded text-sm text-stone-200 outline-none pl-4">
                <input v-model="formData.password" type="password" name="password" placeholder="Password" class="h-10 bg-stone-900 rounded text-sm text-stone-200 outline-none pl-4" >
                <input v-model="formData.password_confirmation" type="password" name="password" placeholder="Confirm password" class="h-10 bg-stone-900 rounded text-sm text-stone-200 outline-none pl-4" >
            </div>
        </div>
        <div class="w-full">
            <label>image</label>
            <input @change="saveImg" type="file" class="w-full">
        </div>
        <input type="submit" class="bg-stone-50 text-stone-900 py-2 px-12 rounded hover:brightness-75 cursor-pointer" value="SignUp">
    </form>
    <Profile />
</template>

<script>
import Profile from './Profile.vue'
import axios from 'axios'
export default {
    name: 'SignUp',
    components: {
        Profile
    }
    data(){
        return {
            formData: {
                first_name: '',
                last_name: '',
                user_name: '',
                birth_date: '',
                email: '',
                password: '',
                password_confirmation: '',
                image: ''
            }
        }
        
    },
    methods: {
        saveImg(e){
            this.formData.image = e.target.files[0].name;
        },
        async sendData(){
            try{
                let response = await axios.post('http://CandleLight.com/api/SignUp', this.formData);
                console.log(response.data)
            }catch(error){
                console.log(error)
            }
        }
    }
}
</script>