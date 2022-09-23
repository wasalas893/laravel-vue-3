require('./bootstrap')

import { createApp } from 'vue';
import * as VueRouter from 'vue-router';

import App from './app.vue';



import faq from './components/faq';
import Home from './components/home.vue';
import journal from './components/journal.vue';
import process from './components/process.vue';
import review from './components/review.vue';
import company from './components/company.vue';
import contact from './components/contact.vue';

const routes = [
    {path: "/faq",name: "faq",component: faq},
    {path: "/",name: "Home",component: Home},
    {path: "/journal",name: "journal",component: journal},
    {path: "/process",name: "process",component: process},
    {path: "/review",name: "review",component: review},
    {path: "/company",name: "company",component: company},
    {path: "/contact",name: "contact",component: contact},
  ];
  


 
const router = VueRouter.createRouter({
    history: VueRouter.createWebHistory(),
    routes,
  });

const app = createApp(App)

app.use(router).mount('#app')