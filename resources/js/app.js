require('./bootstrap')

import { createApp } from 'vue';
import * as VueRouter from 'vue-router';

import App from './app.vue';
// import VueContentPlaceholders from 'vue-content-placeholders'





import faq from './components/faq';
import Home from './components/home.vue';
import journal from './components/journal.vue';
import stone_info from './components/stone_info.vue';
import review from './components/review.vue';
import company from './components/company.vue';
import contact from './components/contact.vue';
import stone_category from './components/stone_category.vue';
import journal_info from './components/jounal_info.vue';

const routes = [
    {path: "/faq",name: "faq",component: faq},
    {path: "/",name: "Home",component: Home},
    {path: "/journal",name: "journal",component: journal},
    {path: "/stone-info",name: "stone-info",component: stone_info},
    {path: "/review",name: "review",component: review},
    {path: "/company",name: "company",component: company},
    {path: "/contact",name: "contact",component: contact},
    {path: "/stone-category",name: "stone-category",component: stone_category},
    {path: "/journal-info",name: "journal-info",component: journal_info},
  ];
  


 
const router = VueRouter.createRouter({
    history: VueRouter.createWebHistory(),
    routes,
  });

const app = createApp(App)

// app.use(VueContentPlaceholders)

app.use(router).mount('#app')