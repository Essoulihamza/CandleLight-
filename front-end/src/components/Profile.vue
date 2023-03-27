<template>
    <div class="hidden flex-col items-center justify-center px-8  bg-stone-800 text-stone-200 rounded-lg h-fit py-6  border border-x-stone-400 border-b border-primary space-y-6     lg:flex">
        <div class="w-48 h-48 rounded-full border bg-center bg-cover bg-no-repeat bg-[url('https://images.unsplash.com/photo-1575936123452-b67c3203c357?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8aW1hZ2V8ZW58MHx8MHx8&w=1000&q=80')]">
        </div>
        <div class="flex flex-col items-center">
            <h2 class="text-xl">User name</h2>
            <p>email@gmail.com</p>
        </div>
    </div>
</template>

<script>
export default {
    name: 'Profile',
    props: {
        User: Object
    },
}
</script>