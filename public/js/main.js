Vue.createApp({
        data() {
            return {
                info: null
            };
        },
    mounted() {
        axios
            .get('http://127.0.0.1:8000/api/posts/')
            .then(response => (this.info = response));
    }
}).mount('#app');
