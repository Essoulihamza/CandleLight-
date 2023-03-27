<template>
    <div class="w-full  px-8  bg-stone-800 text-stone-200 rounded-lg h-fit py-6  border border-x-stone-400 border-b border-primary space-y-4">
        <h2 class="text-2xl font-bold">Add post</h2>
        <form>
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
            <div class="w-full flex justify-end " >
                <input type="submit" class="bg-stone-50 text-stone-900 py-2 px-12 rounded hover:brightness-75 cursor-pointer" 
                   value="Post" >
            </div>
        </form>
    </div>
</template>

<script>
export default {
    name: 'AddPost',
    data(){
        return {
            postData: {
                title: '',
                categories: [],
                content: '',
                image: '',
            }
        }
    },
    methods: {
        storeImage(e){
            this.postData.image = e.target.value;
        },
        sendData(){

        }
    }
}
</script>