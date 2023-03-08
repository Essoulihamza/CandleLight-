<template>
    <div class="flex space-x-5 pt-3 items-center justify-between">
        <div class="bg-[url('https://upload.wikimedia.org/wikipedia/commons/thumb/a/a0/Andrzej_Person_Kancelaria_Senatu.jpg/1200px-Andrzej_Person_Kancelaria_Senatu.jpg')] bg-cover bg-center w-10 h-10 rounded-full border-2  border-stone-50"> <!-- user image--> </div>
        <input type="text" name="Comment" placeholder="Add your Comment" class="h-10 w-9/12 rounded-full px-3 bg-stone-900 outline-none text-stone-100">
        <div class="bg-stone-100 rounded-full w-10 h-10 flex justify-center items-center">
            <svg width="25" height="25" fill="none" stroke="#1a1a1a" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="M22 2 11 13"></path>
                <path d="m22 2-7 20-4-9-9-4 20-7z"></path>
            </svg>
        </div>
    </div>
</template>

<script>
export default {
    name: 'AddComment'
}
</script>