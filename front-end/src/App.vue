<template>
  <Header />
  <div class="grid grid-cols-4 justify-between mt-10 px-20">
    <SideBar />
    <Posts class="col-span-2" />
    <SignUp />
  </div>
</template>

<script>
import Header from './components/Header.vue'
import Posts from './components/Posts.vue'
import SideBar from './components/SideBar.vue'
import SignUp from './components/SignUp.vue'
export default{
  name: 'App',
  components: {
    Header,
    Posts,
    SideBar,
    SignUp
  }
}
</script>