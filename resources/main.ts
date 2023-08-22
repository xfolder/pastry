import { createApp } from 'vue'
import './style.css'
import App from './App.vue'
import router from "./router/router";
import {ClickOutside} from 'vuetify/directives'
import { CIcon } from '@coreui/icons-vue';
import { cilLocationPin, cilPhone, cilEnvelopeLetter, cilSearch } from '@coreui/icons';

const icons = {
    cilLocationPin,
    cilPhone,
    cilEnvelopeLetter,
    cilSearch
}

createApp(App)
    .use(router)
    .directive('click-outside', ClickOutside)
    .component('CIcon', CIcon)
    .provide('icons', icons)
    .mount('#app')
