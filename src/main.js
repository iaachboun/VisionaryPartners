import {createApp} from 'vue'
import App from './App.vue'
// router/index.js or where your Vue Router is configured
import {createRouter, createWebHistory} from 'vue-router'
import Contact from "@/components/Contact.vue";
import Hero from "@/components/Hero.vue";
import Waarom from "@/components/Waarom.vue";
import Voordelen from "@/components/Voordelen.vue";
import Pakketten from "@/components/Pakketten.vue";

const router = createRouter({
    history: createWebHistory(),
    routes: [
        {
            path: '/Home',
            name: 'home',
            component: Hero,
        },
        {
            path: '/waarom',
            name: 'waarom ons',
            component: Waarom,
        },
        {
            path: '/pakketten',
            name: 'pakketten',
            component: Pakketten,
        },
        {
            path: '/voordelen',
            name: 'voordelen',
            component: Voordelen,
        },
        {
            path: '/contact',
            name: 'contact',
            component: Contact,
        },
    ],
    scrollBehavior(to) {
        if (to.hash) {
            return {el: to.hash, behavior: 'smooth'};
        } else {
            return {left: 0, top: 0};
        }
    },

});

createApp(App).use(router).mount('#app')
