<template>
    <div class="flex flex-col justify-center items-center space-y-52 px-6 md:px-6">
        <Post  />
    </div>
</template>

<script>
import Post from './Post.vue'
import axios from 'axios'
axios.defaults.baseURL = 'http://CandleLight.com/api/';  
axios.defaults.headers.common = {
    "Accept": "application/vnd.api+json",
    "Content-Type": "application/vnd.api+jsonr"
    };
export default{
    name: 'Posts',
    components: {
        Post,
    },
    data(){
        return {
            Posts: [],
        }
    },
    created(){
        this.fetchPosts();
    },
    methods: {
        async fetchPosts() {
            let fetch = await axios.get('posts');
            let response = fetch.data;
            this.Posts = response.data;
            console.log(this.Posts[0]);
        }
    }
}
</script>