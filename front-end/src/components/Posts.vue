<template>
    <div class="flex flex-col justify-center items-center space-y-48">
        <Post v-for="post in Posts" :key="post.id" :data="post" />
    </div>
</template>

<script>
import axios from 'axios'
import Post from './Post.vue'
import { mapState } from 'vuex'
export default{
    name: 'Posts',
    computed: {
        ...mapState(['Authenticated'])
    },
    components: {
        Post
    },
    data(){
        return {
            Posts: [],
            dataLoaded: false
        }
    },
    methods: {
        async getPosts(){
            let response = await axios.get('http://CandleLight.com/api/posts');
            this.Posts = response.data.data;
            this.dataLoaded = true;
        }
    },
    created(){
        this.getPosts()
    },
}
</script>