const app = new Vue({
    el: '#app',
    data: {
        backdoors: ''
    },
    created() {
        fetch('https://www.cray-dev.fr/dev/dev.json')
            .then(response => response.json())
            .then(json => {
                this.backdoors = json.backdoors
            })
    }
})
