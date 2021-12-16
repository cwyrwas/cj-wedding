import { createApp } from 'vue'
import Navbar from './components/Navbar.vue';
import NavItem from './components/NavItem.vue';
import HeaderImage from './components/HeaderImage.vue';
import TableHeadCell from './components/TableHeadCell.vue';
import TableRowCell from './components/TableRowCell.vue';
import Table from './components/Table.vue';
import Link from './components/Link.vue';

const app = createApp({});

app.component('link', Link);
app.component('nav-item', NavItem)
app.component('nav-menu', Navbar)
app.component('table-head-cell', TableHeadCell)
app.component('table-row-cell', TableRowCell)
app.component('guest-table', Table)
app.component('header-image', HeaderImage)

.mount('#app');

require('./bootstrap');
