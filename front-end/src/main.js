import { createApp } from 'vue'
import './style.css'
import App from './App.vue'
import './axios'

const app = createApp(App);

app.mount("#app");





console.log(    x()    );

function x() {
    
    function y(){ return 1 }
    return y();
    function y() {return 0}
}






