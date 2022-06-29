const app = new Vue({
    el: '#app',
    data() {
        return{
            discs: [],
        }
    },
    mounted() {
        axios.get('http://localhost/php-ajax-dischi/data/json.php').then((response) => {
            console.log(response);
            if (response.status === 200) {
                this.discs = response.data;
            }
        }).catch(error => console.log(error));
    }
})