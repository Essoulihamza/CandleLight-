<template>
    <!-- post container -->
    <div class="relative">
        <!-- post inner container -->
        <div
            class="w-full flex flex-col space-y-6 bg-main px-7 pt-1 pb-3 rounded-t-lg  border border-x-stone-400 border-b border-primary relative">
            <!-- post settings -->
            <div class="absolute bg-stone-800 rounded-lg divide-y flex-col text-stone-300 z-10 right-7 top-14" :class="{'hidden': !editPost}">
                <div @click="toggleEditPostMenu" class="flex w-full justify-end cursor-pointer">
                    <svg  width="25" height="25" fill="none" stroke="#d4d4d4" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18 6 6 18"></path>
                        <path d="m6 6 12 12"></path>
                    </svg>
                </div>
                <div class="flex flex-col divide-y">
                    <button class="py-3 px-12">edit</button>
                    <button class="py-3 px-12">delete</button>
                </div>
            </div>
            <!-- user info -->
            <div id="user-info" class="flex w-full justify-between items-center">
                <div class="flex items-center space-x-3">
                    <div class="bg-[url(${User.image})] bg-cover bg-center w-16 h-16 rounded-full border-2  border-stone-50"
                         :style="{ backgroundImage: `url(${User.image})` }"> <!-- user image--> </div>
                    <div>
                        <p class="text-sm  md:text-lg text-stone-300">User.name</p>
                        <p class="text-xs text-stone-300 opacity-60">on {{ Post.creationDate }}</p>
                    </div>
                </div>
                <div @click="toggleEditPostMenu" class="justify-self-end cursor-pointer" :class="{'hidden': editPost}">
                    <svg width="25" height="25" fill="none" stroke="#d4d4d4" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 11a1 1 0 1 0 0 2 1 1 0 1 0 0-2z"></path>
                        <path d="M12 4a1 1 0 1 0 0 2 1 1 0 1 0 0-2z"></path>
                        <path d="M12 18a1 1 0 1 0 0 2 1 1 0 1 0 0-2z"></path>
                    </svg>
                </div>
            </div>
            <!-- post content -->
            <div id="post-info" class="space-y-3">
                <h2 class="text-stone-50 text-2xl font-bold">{{ Post.title }}</h2>
                <p class="text-stone-300 font-light text-sm">{{ Post.content }}</p>
                <img :src="Post.image" alt="Post image" class="rounded">
                <!-- <div class="flex">
                    <div class="flex relative items-center">
                        <div
                            class="w-4 h-4 rounded-full bg-cover bg-center border border-stone-50
                                    bg-[url('https://imageio.forbes.com/specials-images/imageserve/61688aa1d4a8658c3f4d8640/Antonio-Juliano/0x0.jpg?format=jpg&width=960')]">
                        </div>
                        <div
                            class="absolute left-3  w-4 h-4 rounded-full bg-cover bg-center border border-stone-50
                                    bg-[url('https://imageio.forbes.com/specials-images/imageserve/61688aa1d4a8658c3f4d8640/Antonio-Juliano/0x0.jpg?format=jpg&width=960')]">
                        </div>
                        <div
                            class="absolute left-6 w-4 h-4 rounded-full bg-cover bg-center border border-stone-50
                                    bg-[url('https://imageio.forbes.com/specials-images/imageserve/61688aa1d4a8658c3f4d8640/Antonio-Juliano/0x0.jpg?format=jpg&width=960')]">
                        </div>
                        <p class="text-[10px] text-slate-200 pl-7">Hamza and 119 <span
                                class="underline decoration-from-font text-primary cursor-pointer font-semibold">ohters</span>
                            flame this post</p>
                    </div>
                </div> -->

            </div>
            <!-- post reactions -->
            <div id="post-reactions" class="flex justify-around items-center ">
                <div class="flex items-center space-x-3 text-stone-300 cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-flame" width="25"
                        height="25" viewBox="0 0 24 24" stroke-width="1.5" stroke="#d6d3d1" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path
                            d="M12 12c2 -2.96 0 -7 -1 -8c0 3.038 -1.773 4.741 -3 6c-1.226 1.26 -2 3.24 -2 5a6 6 0 1 0 12 0c0 -1.532 -1.056 -3.94 -2 -5c-1.786 3 -2.791 3 -4 2z" />
                    </svg>
                    <p>{{ Post.likeCount }}</p>
                </div>
                <span class="h-5 w-[0.5px] bg-stone-50"></span>
                <div class="flex items-center space-x-3 text-stone-300 cursor-pointer">
                    <p>comments</p>
                    <p>{{ Post.CommentsCount }}</p>
                </div>
            </div>
            
        </div>
        <!-- post comments -->
        <div class="absolute bg-stone-800 w-full px-7  top-[100.1%] left-0 border-b rounded-b-lg z-0 p-2 divide-y divide-stone-50 divide-current space-y-3">
            <!-- comment -->
                <div class="space-y">
                    <div class="flex justify-between items-center">
                        <div class="flex items-center space-x-2">
                            <div class="bg-[url('https://images.unsplash.com/photo-1633332755192-727a05c4013d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8dXNlcnxlbnwwfHwwfHw%3D&w=1000&q=80')] bg-cover bg-center w-10 h-10 rounded-full border-2  border-stone-50"> <!-- user image--> </div>
                            <div class="flex space-x-2 items-center">
                                <p class=" text-sm text-stone-200">user name</p>
                                <p class="text-[10px] text-stone-300 opacity-60">on 27-01-2021</p>
                            </div>
                        </div>
                        <div class="cursor-pointer">
                            <svg width="20" height="20" fill="none" stroke="#d4d4d4" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 11a1 1 0 1 0 0 2 1 1 0 1 0 0-2z"></path>
                                <path d="M19 11a1 1 0 1 0 0 2 1 1 0 1 0 0-2z"></path>
                                <path d="M5 11a1 1 0 1 0 0 2 1 1 0 1 0 0-2z"></path>
                            </svg>
                        </div>


                    </div>
                <p class="text-xs text-stone-200 pl-12">Lorem ipsum,
                    officiis distinctio perspiciar!</p>
                <div class="w-full flex items-center pl-12 space-x-1 cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-heart" width="15" height="15" viewBox="0 0 24 24" stroke-width="1.5" stroke="#d6d3d1" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M19.5 13.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                    </svg>
                    <p class="text-xs text-stone-300">13</p>
                </div>
            </div>
            <AddComment />
    </div>
</div>
</template>

<script>
import AddComment from './AddComment.vue';
export default {
    name: 'Post',
    components: {
        AddComment,
    },
    props: {
        post: Object
    },
    data(){
        return {
            Post: {
                title: this.post.attributes.title,
                content: this.post.attributes.content,
                image: this.post.attributes.image,
                likeCount: this.post.attributes.likes_count,
                CommentsCount: this.post.attributes.Comments_count,
                creationDate: this.post.attributes.created_at,
            },
            User: {
                name: this.post.relationships.user_name,
                image: this.post.relationships.user_image
            },
            editPost: false,
            like: false, 
        }
    },
    methods: {
        toggleEditPostMenu(){
            this.editPost = !this.editPost;
        },
        activeLike(){
            this.like = !this.like;
        }
    }
}
</script>