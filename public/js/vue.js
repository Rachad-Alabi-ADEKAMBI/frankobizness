
const { createApp } = Vue

createApp({
  data() {
    return {
        cars: [],
        details:[],
        showCars : false,
        showBtn: false,
        showAdd: false,
        displayDelete: false,
        displayEdit: false,
        showAllCars: false,
        showToRent: false,
        showToSell: false

    }
},
mounted: function() {
   this.getCars();
   this.getAllCars(); //for available cars
},
methods: {
    getCars() {
       axios.get('http://127.0.0.1/frankobizness/api/cars').then(response =>
            this.cars = response.data);

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
    getAllCars() {
        axios.get('https:/127.0.0.1/frankobizness/api/allCars').then(response =>
            this.details = response.data)
            this.showAllCars = true;
            this.showToRent = false;
            this.showToSell =false
    },
    getToSell(){
        axios.get('https:/127.0.0.1/frankobizness/api/carsToSell').then(response =>
            this.details = response.data);
            this.showHome = false;
            this.showCar = false;
            this.showAllCars = false;
            this.showToRent = false;
            this.showToSell = true;
    },
    getToRent(){
        axios.get('https:/127.0.0.1/frankobizness/api/carsToRent').then(response =>
            this.details = response.data);
            this.showHome = false;
            this.showCar = false;
            this.showAllCars = false;
            this.showToRent = true;
            this.showToSell = false;
    },
    getCar($id){
        window.location.replace('././index.php?action=car&id='+$id)
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