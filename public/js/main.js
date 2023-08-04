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
