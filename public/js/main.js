Vue.createApp({
        data() {
            return {
                posts: null
            };
        },
    mounted() {
        axios
            .get('http://127.0.0.1:8000/api/posts/')
            .then(response => (this.posts = response.data));
        }
}).mount('#app');

Vue.createApp({
    data() {
        return {
            categories: null
        };
    },
    mounted() {
        axios
            .get('http://127.0.0.1:8000/api/categories/')
            .then(response => (this.categories = response.data.categories));
    }
}).mount('#category');

const Home = { template: '<h2>Главная страница</h2>' }
const About = { template: '<h2>О нас</h2>' }

const routes = [
    { path: '/', component: Home },
    { path: '/about', component: About }
];

const router = VueRouter.createRouter({
    history: VueRouter.createWebHistory(),
    routes,
});

const app = Vue.createApp({});
app.use(router);
app.mount('#menu');
