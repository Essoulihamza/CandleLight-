<template>
  <Header />
  <registerForm  :page-created="pageCreated" />  
</template>

<script>
import registerForm from './components/registerForm.vue';
import Header from './components/Header.vue';
export default {
  name: 'App',
  components: {
    registerForm,
    Header
  },
  methods: {
    pageCreated(pageObj){
        console.log(pageObj);
    } 
  }
}
</script>
