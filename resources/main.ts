import { createApp } from 'vue'
import './style.css'
import App from './App.vue'
import router from "./router/router";

import {ClickOutside} from 'vuetify/directives'

createApp(App)
    .use(router)
    .directive('v-click-outside', ClickOutside)
    .mount('#app')
