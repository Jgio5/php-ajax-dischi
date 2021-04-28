var app = new Vue({

    el: "#app",

    data: {
        cds : []
    },

    mounted() {
        axios
            .get('http://localhost/php-ajax-dischi/server.php')
            .then((result) => {
                this.cds = result.data;
            });
    }
});

Vue.config.devtools = true;
