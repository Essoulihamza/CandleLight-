import { createApp } from 'vue'
import axios from 'axios'
import './style.css'
import App from './App.vue'
import { User } from './stores/User'



const app = createApp(App);
app.use(User)
app.mount("#app");
