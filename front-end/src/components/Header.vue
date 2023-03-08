<template>
    <header class="fixed top-0 left-0 w-full z-20  grid grid-cols-3 justify-between content-center items-center border border-slate-50 border-transparent bg-main  py-3 px-5 font-main
                    md:grid-cols-3 md:grid-rows-1 md:px-20 rounded-b-2xl pb-2 border-b-primary">
        <div class="flex justify-between w-full justify-self-start">
            <span class="text-primary">CandleLight</span>
        </div>
        <div class="justify-self-center w-full">
            <input
                class="w-full h-10 bg-stone-800 text-stone-100 border-current hover:border rounded-full py-1 px-3 text-sm outline-none transition-all delay-200 duration-500"
                type="text" 
                placeholder="search Candle"
                name="search"
            >
        </div>
        <div class="hidden justify-self-end md:block">
            <button
                class="bg-stone-100 text-black font-medium px-10 py-1 rounded-full
                        hover:brightness-75"
            >
            Log In
            </button>
        </div>
        <div class="justify-self-end md:hidden">
            <svg width="25" height="25" fill="none" stroke="#41bcff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"></path>
                <path d="m10 17 5-5-5-5"></path>
                <path d="M15 12H3"></path>
            </svg>
        </div>
    </header>
</template>

<script>
export default{
    name: 'Header',
}
</script>