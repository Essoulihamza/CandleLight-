<template>
  <Header @PopUp="togglePopUp" @loggedIn="" />
  <div :class="{'blur-md select-none pointer-events-none': popUpActive}">
      <div class="grid grid-cols-1 justify-between mt-20 px-1 lg:px-20 lg:grid-cols-4">
          <SideBar />
          <Posts  class="lg:col-span-2" />
          <SignUp v-if="!loggedIn" />
          <Profile v-if="loggedIn" />
      </div>
      <Navigator />
  </div>  
</template>

<script>
import Header from './components/Header.vue'
import Posts from './components/Posts.vue'
import SideBar from './components/SideBar.vue'
import SignUp from './components/SignUp.vue'
import Navigator from './components/Navigator.vue'
export default{
  name: 'App',
  components: {
    Header,
    Posts,
    SideBar,
    SignUp,
    Navigator,
  },
  data(){
    return {
      popUpActive: false,
      loggedIn: true
    }
  },
  methods: {
    togglePopUp(){
      this.popUpActive = !this.popUpActive
    },
    logged(){
      this.popUpActive = false;

    }
  }
}
</script>
