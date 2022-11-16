<script>
const {
    createApp
} = Vue

createApp({
    data() {
        return {
            details: [],
            items: [],
            infos: [],
            elements: []
        }
    },
    mounted: function() {
        this.getLastAdded();
    },
    methods: {
        getLastAdded() {
            axios.get('http://127.0.0.1/frankobizness/api/lastAdded').then(response =>
                this.details = response.data)
                axios.get('http://127.0.0.1/frankobizness/api/lastSaleAdded').then(response =>
                this.items = response.data)
                axios.get('http://127.0.0.1/frankobizness/api/lastRentAdded').then(response =>
                this.infos = response.data)
                axios.get('https://127.0.0.1/frankobizness/api/lastSold').then(response =>
                this.elements = response.data)
        },
        format(num){
        let res = new Intl.NumberFormat('fr-FR', { maximumSignificantDigits: 3 }).format(num);
        return res;
    },ss
        getImgUrl(pic) {
        return "public/img/" + pic;
    },
    }
}).mount('#app')
</script>