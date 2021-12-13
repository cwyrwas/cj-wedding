import { createApp } from 'vue'
import Navbar from './components/Navbar.vue';
import NavItem from './components/NavItem.vue';
import HeaderImage from './components/HeaderImage.vue';

const app = createApp({});

app.component('nav-item', NavItem)
app.component('nav-menu', Navbar)
app.component('header-image', HeaderImage)
    .mount('#app');

require('./bootstrap');
