<template>
  <Header @PopUp="togglePopUp" />
  <div :class="{ 'blur-md select-none pointer-events-none': popUpActive }">
    <div class="grid grid-cols-1 justify-between mt-20 px-1 lg:px-20 lg:grid-cols-4">
      <SideBar />
      <div class="flex flex-col px-6 space-y-10 lg:col-span-2">
        <AddPost v-if="Authenticated" />
        <Posts />
      </div>
      <div>
        <SignUp  v-if="!Authenticated" />
        <Profile v-if="Authenticated" />
      </div>
      
    </div>
    <Navigator />
  </div>
</template>

<script>
import Header from './components/Header.vue'
import Posts from './components/Posts.vue'
import SideBar from './components/SideBar.vue'
import SignUp from './components/SignUp.vue'
import Profile from './components/Profile.vue'
import Navigator from './components/Navigator.vue'
import AddPost from './components/AddPost.vue'
import { mapActions, mapState } from 'vuex'
export default {
  name: 'App',
  components: {
    Header,
    Posts,
    SideBar,
    SignUp,
    Profile,
    Navigator,
    AddPost
  },
  computed: {
    ...mapState(['Authenticated'])
  },
  data() {
    return {
      popUpActive: false,
    }
  },
  created(){
    this.check();
  },
  methods: {
    ...mapActions(['getUser']),
    togglePopUp() {
      this.popUpActive = !this.popUpActive
    },
    check() {
      if (localStorage.getItem('token')) {
        this.getUser();
      }
    }
  }
}
</script>
