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

const Index = { template: '<h2>Главная</h2>' }
const Contact = { template: '<h2>Наши контакты</h2>' }
const About = { template: '<h2>О нас</h2>' }


const routes = [
    { path: '/', component: Index },
    { path: '/contact', component: Contact },
    { path: '/about', component: About }
];

const router = VueRouter.createRouter({
    history: VueRouter.createWebHistory(),
    routes,
});

const app = Vue.createApp({});
app.use(router);
app.mount('#menu');


const Counter = {
    data() {
        return {
            counter: 0
        }
    },
    mounted() {
        setInterval(() => {
            this.counter++
        }, 1000)
    }
}

Vue.createApp(Counter).mount('#counter')
