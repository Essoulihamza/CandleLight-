<template>
    <div class="flex flex-col justify-center px-8  bg-stone-800 text-stone-200 rounded-lg h-fit py-6  border border-x-stone-400 border-b border-primary">
        <ul class="space-y-3">
            <div class="w-full flex justify-center items-center bg-stone-900 py-3 rounded-lg shadow-md hover:shadow-stone-200  hover:shadow-sm cursor-pointer">
                Sport
            </div>
            <div class="w-full flex justify-center items-center bg-stone-900 py-3 rounded-lg shadow-md hover:shadow-stone-200  hover:shadow-sm cursor-pointer">
                Education
            </div>
            <div class="w-full flex justify-center items-center bg-stone-900 py-3 rounded-lg shadow-md hover:shadow-stone-200  hover:shadow-sm cursor-pointer">
                PRogramming
            </div>
            <div class="w-full flex justify-center items-center bg-stone-900 py-3 rounded-lg shadow-md hover:shadow-stone-200  hover:shadow-sm cursor-pointer">
                Start-Up
            </div>
        </ul>
    </div>
</template>

<script>
export default {
    name: 'SideBar',
    data(){
        return {
            category:{
                name: {
                    type: String
                },
                count: {
                    type: Number
                }
            }
        }
    }
}
</script>