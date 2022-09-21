require('./bootstrap')


import { createApp } from 'vue';
import * as VueRouter from 'vue-router';

import Header from './common/header.vue';


import Welcome from './components/welcome';
import Home from './components/home.vue';

const routes = [
    {path: "/",name: "welcome",component: Welcome},
    {path: "/home",name: "Home",component: Home},
  ];
  


 
const router = VueRouter.createRouter({
    history: VueRouter.createWebHistory(),
    routes,
  });

const app = createApp(Header)
app.use(router).mount('#app')