<template>
    <div class="hidden fixed right-20  bottom-10 md:block" @mouseout="toggleNav(0)"  >
        <div class="absolute flex transition-all duration-700 ease-out flex-col items-center  w-16  h-14 rounded-full bottom-1 -z-10  bg-stone-200 space-y-8"
             :class="{'h-60 py-4': On}">
            <svg class="cursor-pointer" width="30" height="30" fill="none" stroke="#292524" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 2a10 10 0 1 0 0 20 10 10 0 1 0 0-20z"></path>
                <path d="M12 8v8"></path>
                <path d="M8 12h8"></path>
            </svg>
            <svg class="cursor-pointer" width="30" height="30" fill="none" stroke="#292524" stroke-linecap="round" stroke-linejoin="round"  stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                <path d="M12 3a4 4 0 1 0 0 8 4 4 0 1 0 0-8z"></path>
            </svg>
            <svg class="cursor-pointer" width="30" height="30" fill="none" stroke="#292524" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="m20.59 13.41-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"></path>
                <path d="M7 7h.01"></path>
            </svg>

        </div>
        <div @mouseover="toggleNav(1)" class="w-16 h-16 flex justify-center items-center rounded-full bg-stone-900 border border-stone-100 cursor-pointer">
            <svg width="40" height="40" fill="none" stroke="#41bcff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 2a10 10 0 1 0 0 20 10 10 0 1 0 0-20z"></path>
                <path d="m16.24 7.76-2.12 6.36-6.36 2.12 2.12-6.36 6.36-2.12z"></path>
            </svg>
        </div>
    </div>
    
</template>

<script>
export default {
    name: 'Navigator',
    data() {
        return {
            On: false,
        }
    },
    methods: {
        toggleNav(open){
            if(open) {
                this.On = true;
            }
            else this.On = false;
        }
    }
}
</script>