import {createRouter, createWebHistory} from "vue-router";
import {RouteRecordRaw} from "vue-router";
const HomePageComponent = async () => await import('@/pages/HomePage.vue');

const routes: RouteRecordRaw[] = [
    {
        path: '/',
        name: 'home',
        component: HomePageComponent,
    },
    {
       //match format name.p.id
        path: '/p',
        name: 'product',
        children: [
            {
                path: ':name/:id',
                name: 'product-detail',
                component: async () => await import('@/pages/ProductDetailPage.vue'),
            }
        ]
    }
];

const router = createRouter({
    history: createWebHistory(),
    routes,
})

export default router;

