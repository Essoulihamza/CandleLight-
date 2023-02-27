<template>
    <form>
        <input 
            type="text"
            v-model="firstName"
        >
        <button @click.prevent="pageCreated({firstName})" >submit</button>
    </form>
</template>


<script>

export default {
    name: 'registerForm',
    props: ['pageCreated'],
    data() {
        return {
            firstName: '',
        }
    }
}
</script>

