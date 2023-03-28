<template>
    <header class="fixed top-0 left-0 w-full z-20  grid grid-cols-2  justify-between content-center items-center border border-slate-50 border-transparent bg-main  py-3 px-5 font-main
                    md:grid-cols-2 md:grid-rows-1 md:px-20 rounded-b-2xl pb-2 border-b-primary">
        <div class="flex justify-between w-full justify-self-start">
            <span class="text-primary">CandleLight</span>
        </div>
        <!-- <div class="hidden justify-self-center w-full md:block">
            <input
                class="w-full h-10 bg-stone-800 text-stone-100 border-current hover:border rounded-full py-1 px-3 text-sm outline-none transition-all delay-200 duration-500"
                type="text" 
                placeholder="search Candle"
                name="search"
            >
        </div> -->
        <div class="hidden justify-self-end md:block">
            <button
                v-if="!Authenticated"
                @click="toggleLoginForm"
                class="bg-stone-100 text-black font-medium px-10 py-1 rounded-full
                        hover:brightness-75"
            >
            Log In
            </button>
            <button
                v-if="Authenticated"
                @click="logOut"
                class="bg-stone-100 text-black font-medium px-10 py-1 rounded-full
                        hover:brightness-75"
            >
            LogOut
            </button>
            
        </div>
        <div @click="toggleMobileMenu" class="justify-self-end md:hidden">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="25" height="25" fill="#fff">
                <path d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"/>
            </svg>
        </div>
    </header>
    <LoginForm  v-show="loginPopUp"  @close="toggleLoginForm" />
</template>

<script>
import LoginForm from './Login.vue'
import { mapActions, mapState } from 'vuex'
export default{
    name: 'Header',
    components: {
        LoginForm
    },
    computed: {
        ...mapState(['Authenticated'])
    },
    data(){
        return {
            loginPopUp: false,
            mobileMenu: false,
        }
    },
    emits: {
        PopUp: null
    },
    methods: {
        ...mapActions(['logOut']),
        toggleLoginForm(){
            this.loginPopUp = !this.loginPopUp
            this.$emit('PopUp')
        },
    }
}
</script>