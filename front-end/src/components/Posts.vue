<template>
    <div class="flex flex-col justify-center items-center space-y-52 px-6 md:px-6">
        <Post />
        <Post />
        <Post />
        <Post />
    </div>
</template>

<script>
import Post from './Post.vue'
export default{
    name: 'Posts',
    components: {
        Post,
    },
    created(){

    },
    data(){

    },
    methods: {

    }
}
</script>