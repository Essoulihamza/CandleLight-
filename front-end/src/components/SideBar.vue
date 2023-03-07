<template>
    <div class="flex flex-col justify-center pl-3  bg-stone-800 text-stone-200 rounded-lg h-fit py-6  border border-x-stone-400 border-b border-primary">
        <ul class="space-y-6">
            <li class="text-primary ">Sport ( 243 )</li>
            <li>Programming ( 100 )</li>
            <li>Education ( 82 )</li>
            <li>Sport ( 243 )</li>
            <li>Programming ( 100 )</li>
            <li>Education ( 82 )</li>
            <li>Sport ( 243 )</li>
            <li>Programming ( 100 )</li>
            <li>Education ( 82 )</li>
            <li>Education ( 82 )</li>
            <li>Education ( 82 )</li>
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