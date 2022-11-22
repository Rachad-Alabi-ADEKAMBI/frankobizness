<?php  session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Frankobizness - Vehicules</title>

    <?php include 'meta.php'; ?>
</head>

<body>
    <div class="main" id='app'>
        <?php include 'header.php'; ?> <br>

        <?php include 'search.php'; ?>

        <div class='buttons'>
            <button @click='getAllCars()' >
                    A vendre
                </button>

                <button @click='getToRent()' >
                    A louer
                </button>

                <button @click='getToSell()' >
                    Tout voir
                </button>
        </div>

                <?php include 'car.php'; ?>

                <section v-if='showToSell'>
                        <h2>
                            Vehicules a vendre
                        </h2>

                        <div class="items">
                        <div class="item" v-for='detail in details' :key='detail.id'>
                        <div class="item__top">
                             <img :src='getImgUrl(detail.pic1)'>
                            <div class="info">{{ detail.category }}</div>
                            <div class="bar">
                                <p> {{ detail.status }}</p>
                            </div>
                        </div>

                        <div class="item__bottom">
                            <h3>
                                {{ detail.name }}
                            </h3>

                            <p class="description">
                                {{ detail.description  }}
                            </p>

                            <div class="list">
                                <div class="list__item">Annee: <span>{{ detail.year }}</span></div>
                                <div class="list__item">Etat: <span>{{ detail.rate }}/5</span></div>
                                <div class="list__item">Couleur: <span>{{ detail.color }}</span></div>
                            </div>

                            <p class="price">
                                {{ format(detail.price) }}F CFA
                            </p>

                            <div class="btn">
                                <button @click='getCar(detail.id)'>
                                Voir
                            </button>
                            </div>


                        </div>

                    </div>
                        </div>
              </section>

              <section v-if='showToRent'>
                        <h2>
                            Vehicules a louer
                        </h2>

                        <div class="items">
                        <div class="item" v-for='detail in details' :key='detail.id'>
                        <div class="item__top">
                             <img :src='getImgUrl(detail.pic1)'>
                            <div class="info">{{ detail.category }}</div>
                            <div class="bar">
                                <p> {{ detail.status }}</p>
                            </div>
                        </div>

                        <div class="item__bottom">
                            <h3>
                                {{ detail.name }}
                            </h3>

                            <p class="description">
                                {{ detail.description  }}
                            </p>

                            <div class="list">
                                <div class="list__item">Annee: <span>{{ detail.year }}</span></div>
                                <div class="list__item">Etat: <span>{{ detail.rate }}/5</span></div>
                                <div class="list__item">Couleur: <span>{{ detail.color }}</span></div>
                            </div>

                            <p class="price">
                                {{ format(detail.price) }}F CFA
                            </p>

                            <div class="btn">
                                <button @click='getCar(detail.id)'>
                                Voir
                            </button>
                            </div>


                        </div>

                    </div>
                        </div>
              </section>

              <section v-if='showAllCars'>
                <h2>
                Tous les vehicules
                </h2>

                        <div class="items">
                        <div class="item" v-for='detail in details' :key='detail.id'>
                        <div class="item__top">
                             <img :src='getImgUrl(detail.pic1)'>
                            <div class="info">{{ detail.category }}</div>
                            <div class="bar">
                                <p> {{ detail.status }}</p>
                            </div>
                        </div>

                        <div class="item__bottom">
                            <h3>
                                {{ detail.name }}
                            </h3>

                            <p class="description">
                                {{ detail.description  }}
                            </p>

                            <div class="list">
                                <div class="list__item">Annee: <span>{{ detail.year }}</span></div>
                                <div class="list__item">Etat: <span>{{ detail.rate }}/5</span></div>
                                <div class="list__item">Couleur: <span>{{ detail.color }}</span></div>
                            </div>

                            <p class="price">
                                {{ format(detail.price) }}F CFA
                            </p>

                            <div class="btn">
                                <button @click='getCar(detail.id)'>
                                Voir
                            </button>
                            </div>


                        </div>

                    </div>
                        </div>
              </section>

        <?php include 'footer.php'; ?>

    </div>

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
                    elements: [],
                    showCar: false,
                    showHome: false,
                    lines: [],
                    showToSell: false,
                    showToRent: false,
                    showAllCars: false
                }
            },
            mounted: function() {
                this.displayAllCars();
            },
            methods: {
                displayAllCars() {
                    axios.get('https://www.frankobizness.luuluilui.fr/api/allCars').then(response =>
                        this.details = response.data)
                        this.showAllCars = true;
                        this.showCar = false;
                        this.showToRent = false;
                        this.showToSell =false
                },
                getCar(id){
                    axios.get('https://www.frankobizness.luuluilui.fr/api/car/' + id).then(response =>
                        this.lines = response.data);
                        axios.get('https://www.frankobizness.luuluilui.fr/api/mostRated').then(response =>
                        this.items = response.data);
                        this.showHome = false;
                        this.showCar = true;
                        this.showAllCars = false;
                        this.showToRent = false;
                        this.showToSell =false;
                },
                getToSell(){
                    axios.get('https://www.frankobizness.luuluilui.fr/api/carsToSell').then(response =>
                        this.details = response.data);
                        this.showHome = false;
                        this.showCar = false;
                        this.showAllCars = false;
                        this.showToRent = false;
                        this.showToSell = true;
                },
                getToRent(){
                    axios.get('https://www.frankobizness.luuluilui.fr/api/carsToRent').then(response =>
                        this.details = response.data);
                        this.showHome = false;
                        this.showCar = false;
                        this.showAllCars = false;
                        this.showToRent = true;
                        this.showToSell = false;
                },
                getAllCars(){
                    axios.get('https://www.frankobizness.luuluilui.fr/api/allCars').then(response =>
                        this.details = response.data);
                        this.showHome = false;
                        this.showCar = false;
                        this.showAllCars = true;
                        this.showToRent = false;
                        this.showToSell = false;
                },
                format(num){
                let res = new Intl.NumberFormat('fr-FR', { maximumSignificantDigits: 3 }).format(num);
                return res;
            },
                getImgUrl(pic) {
                return "public/img/" + pic;
            },
            getPic(pic){
                window.location.replace('public/img/'+ pic);
            },
            }
        }).mount('#app')
    </script>
</body>
</html>