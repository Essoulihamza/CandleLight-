<template>
    <div class="w-full  px-8  bg-stone-800 text-stone-200 rounded-lg h-fit py-6  border border-x-stone-400 border-b border-primary space-y-4">
        <h2 class="text-2xl font-bold">Add post</h2>
        <form class="space-y-3">
            <div>
                <label>Post Title</label>
                <input v-model="postData.title" type="text" placeholder="Post title"
                       class="h-12 w-full bg-stone-900 rounded text-sm text-stone-200 outline-none pl-4">
            </div>
            <div>
                <label>Post content</label>
                <textarea v-model="postData.content" placeholder="Post content"
                          class="h-24 w-full bg-stone-900 rounded text-sm text-stone-200 outline-none px-4 py-2  resize-none">
                </textarea>
            </div>
            
            <div>
                <label>Post image</label>
                <input @change="storeImage" type="file">
            </div>
            <div>
                <label>Select categories</label>
                <select v-model="postData.categories" multiple class="w-full bg-stone-900">
                    <option v-for="category in Allcategories" :key="category.id">{{ category.name }}</option>
                </select>
            </div>
            <div class="w-full flex justify-end " >
                <input type="submit" class="bg-stone-50 text-stone-900 py-2 px-12 rounded hover:brightness-75 cursor-pointer" 
                   value="Post" >
            </div>
        </form>
    </div>
</template>

<script>
import axios from 'axios'
export default {
    name: 'AddPost',
    data(){
        return {
            postData: {
                title: '',
                categories: [],
                content: '',
                image: '',
            },
            Allcategories: []
        }
    },
    created(){
        this.fetchCategories()
    },
    methods: {
        storeImage(e){
            this.postData.image = e.target.value;
        },
        async fetchCategories(){
            let request = await axios.get('http://CandleLight.com/api/categories');
            let response = request.data
            this.Allcategories = response.data;
        },
        async sendData(){
            let token = localStorage.getItem('token');
            let config = {
                headers:{
                    'Authorization': 'Bearer ' + token
                }
            }
            const formData = new FormData;
            formData.append('title', this.postData.title)
            formData.append('content', this.postData.content)
            formData.append('categories', this.postData.categories)
            formData.append('image', this.postData.image)

            try{
                let request = await axios.post('http://CandleLight.com/api/posts', formData, config)
                alert(request.data.status)
            }catch(error){
                console.log(error)
            }
            
        }
    }
}
</script>