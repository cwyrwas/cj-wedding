import { createApp } from 'vue'
import Navbar from './components/Navbar.vue';
import NavItem from './components/NavItem.vue';
import Submit from './components/Submit.vue';
import Input from './components/forms/Input.vue';
import InvalidMessage from './components/forms/InvalidMessage.vue';
import VueAgile from 'vue-agile';
import MemorySlider from './components/MemorySlider.vue'

const app = createApp({})
.use(VueAgile)

app.component('invalid-message', InvalidMessage);
app.component('fancy-input', Input);
app.component('submit-btn', Submit);
app.component('nav-item', NavItem)
app.component('nav-menu', Navbar)
app.component('header-image', HeaderImage)
app.component('memory-slider', MemorySlider)

.mount('#app');

require('./bootstrap');
