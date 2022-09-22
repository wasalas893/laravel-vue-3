require('./bootstrap')

import { createApp } from 'vue';
import * as VueRouter from 'vue-router';

import App from './app.vue';



import faq from './components/faq';
import Home from './components/home.vue';
import journal from './components/journal.vue';

const routes = [
    {path: "/faq",name: "faq",component: faq},
    {path: "/",name: "Home",component: Home},
    {path: "/journal",name: "journal",component: journal},
  ];
  


 
const router = VueRouter.createRouter({
    history: VueRouter.createWebHistory(),
    routes,
  });

const app = createApp(App)

app.use(router).mount('#app')