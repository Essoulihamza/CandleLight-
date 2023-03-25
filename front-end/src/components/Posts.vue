<template>
    <div class="flex flex-col justify-center items-center space-y-52 px-3 lg:px-6">
        <AddPost />
        <Post v-for="post in Posts" :key="post.id" :post="post" />
    </div>
</template>

<script>
import axios from 'axios'
import AddPost from './AddPost.vue'
import Post from './Post.vue'
export default{
    name: 'Posts',
    components: {
        Post,
        AddPost
    },
    data(){
        return {
            Posts: []
        }
    },
    methods: {
        async getPosts(){
            let response = await axios.get('https://jsonplaceholder.typicode.com/posts');
            this.Posts = response.data;
        }
    },
    created(){
        this.getPosts()
    },
}
</script>