<template>
    <div class="hidden flex-col items-center justify-center px-8  bg-stone-800 text-stone-200 rounded-lg h-fit py-6  border border-x-stone-400 border-b border-primary space-y-6     lg:flex">
        <div class="w-48 h-48 rounded-full border bg-center bg-cover bg-no-repeat" 
             :style="{  backgroundImage : `url('../assets/images/User/${User.image}')` }"></div>
        <div class="flex flex-col items-center">
            <h2 class="text-xl">{{ User.user_name }}</h2>
            <p>{{ User.email }}</p>
            <p>{{ User.image }}</p>
        </div>
    </div>
</template>

<script>
import { mapState } from 'vuex';
export default {
    name: 'Profile',
    computed: {
        ...mapState(['User']),
        background(){
            return `@/assets/images/User/${this.User.image}`
        }
    },
}
</script>