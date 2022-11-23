const {
    createApp
} = Vue

createApp({
    data() {
        return {
            cars: [],
            showCars : false,
            showBtn: false,
            showAdd: false,
            displayDelete: false,
            displayEdit: false
        }
    },
    mounted: function() {
       this.getCars();
    },
    methods: {
        getCars() {
            axios.get('https://www.frankobizness.luuluilui.fr/api/cars').then(response =>
                this.cars = response.data)
            this.showBtn = true;
            this.showCars = true;
        },
        displayAdd(){
            this.showBtn = false;
            this.showCars = false;
            this.showAdd = true
        },
        closeAdd(){
            this.showBtn = true;
            this.showCars = true;
            this.showAdd = false;
        },
        format(num){
        let res = new Intl.NumberFormat('fr-FR', { maximumSignificantDigits: 3 }).format(num);
        return res;
    },
        getImgUrl(pic) {
        return "public/img/" + pic;
    },
    }
}).mount('#app')