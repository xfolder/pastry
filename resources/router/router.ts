import {createRouter, createWebHistory} from "vue-router";
import {RouteRecordRaw} from "vue-router";
const HomePageComponent = () => import('../pages/HomePage.vue');

const routes: RouteRecordRaw[] = [{
    path: '/',
    name: 'home',
    component: HomePageComponent,
}];

const router = createRouter({
    history: createWebHistory(),
    routes,
})

export default router;

