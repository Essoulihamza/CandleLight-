<template>
    <form class="hidden flex-col items-center bg-stone-800  text-stone-200  space-y-12 py-6 px-6  rounded-lg border border-x-stone-400 border-b border-primary h-fit lg:flex">
        <div class="flex flex-col items-center">
            <h2 class="text-2xl font-bold">SignUp</h2>
            <p class="text-sm">Join us and strat sharing</p>
        </div>
        <div class="w-full space-y-6">
            <div class="flex space-x-3">
                <input type="text" name="name" placeholder="First name" class="h-12 w-full bg-stone-900 rounded text-sm text-stone-200 outline-none pl-4">
                <input type="text" name="name" placeholder="Last name" class="h-12 w-full bg-stone-900 rounded text-sm text-stone-200 outline-none pl-4">
            </div>
            <div class="flex space-x-3">
                <input type="text" name="name" placeholder="User name" class="h-12 w-full bg-stone-900 rounded text-sm text-stone-200 outline-none pl-4">
                <input type="date" name="birthdate" class="h-12 w-full bg-stone-900 rounded text-sm text-stone-200 outline-none pl-4">
            </div>
            <div class="flex flex-col space-y-5">
                <input type="email" name="email" placeholder="Email" class="h-10 bg-stone-900 rounded text-sm text-stone-200 outline-none pl-4">
                <input type="password" name="password" placeholder="Password" class="h-10 bg-stone-900 rounded text-sm text-stone-200 outline-none pl-4" >
                <input type="password" name="password" placeholder="Confirm password" class="h-10 bg-stone-900 rounded text-sm text-stone-200 outline-none pl-4" >
            </div>
        </div>
        <input type="submit" class="bg-stone-50 text-stone-900 py-2 px-12 rounded hover:brightness-75 cursor-pointer" value="SignUp">
    </form>
</template>

<script>
export default {
    name: 'SignUp'
}
</script>