<?php  session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Frankobizness - Accueil</title>

    <?php include 'meta.php'; ?>
</head>

<body>
    <div class="main" id='app'>
        <?php include 'header.php'; ?> <br>

        <?php include 'search.php'; ?>

        <?php include 'car.php'; ?>




                <div class="" v-if='showHome'>

            <section>
                <h2>
                    Derniers ajouts
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



            <section>
                <h2>
                    A vendre
                </h2>

                <div class="items">
                    <div class="item" v-for='item in items' :key='item.id'>
                        <div class="item__top">
                        <img :src='getImgUrl(item.pic1)'>
                            <div class="info">{{ item.category }}</div>
                            <div class="bar">
                                <p> {{ item.status }} </p>
                            </div>
                        </div>

                        <div class="item__bottom">
                            <h3>
                                {{ item.name }}
                            </h3>

                            <p class="description">
                                {{ item.description }}
                            </p>

                            <div class="list">
                                <div class="list__item">Annee: <span>{{ item.year }}</span></div>
                                <div class="list__item">Etat: <span>{{ item.rate }}/10</span></div>
                                <div class="list__item">Couleur: <span>{{  item.color }}</span></div>
                            </div>

                            <p class="price">
                                {{ format(item.price) }} F CFA
                            </p>

                            <div class="btn">
                                <button @click='getCar(item.id)'>
                                Voir
                            </button>
                            </div>
                        </div>


                    </div>
                </div>
            </section>



            <section class='grey' v-if='showHome'>
                <h2>
                    Frankobusiness <br>
                    <span>Votre satisfaction importe</span>
                </h2>

                <div class="cards">
                        <div class="card">
                        <i class="fas fa-money-bill"></i>

                            <p>
                                Prix accessibles
                            </p>

                            <p class='text'>
                            Nous vous proposons des prix super abordables
                            </p>
                        </div>

                        <div class="card">
                        <i class="fas fa-lock"></i>
                            <p>
                                Garantie de votre achat
                            </p>

                            <p class='text'>
                                Achetez le coeur tranquuille
                            </p>
                        </div>

                        <div class="card">
                            <i class="fas fa-user"></i>
                            <p>
                                Demande personnalisée
                            </p>

                        <p class="text">
                            Cherhez vous un modele précis ?
                            Contactez-nous
                        </p>
                        </div>
                </div>
            </section>

            <section>
                <h2>
                    A louer
                </h2>

                <div class="items">
                    <div class="item" v-for='item in infos' :key='item.id'>
                            <div class="item__top">
                            <img :src='getImgUrl(item.pic1)'>
                                <div class="info">{{ item.category }}</div>
                                <div class="bar">
                                    <p> {{ item.status }} </p>
                                </div>
                            </div>

                            <div class="item__bottom">
                                <h3>
                                    {{ item.name }}
                                </h3>

                                <p class="description">
                                    {{ item.description }}
                                </p>

                                <div class="list">
                                    <div class="list__item">Annee: <span>{{ item.year }}</span></div>
                                    <div class="list__item">Etat: <span>{{ item.rate }}/5</span></div>
                                    <div class="list__item">Couleur: <span>{{  item.color }}</span></div>
                                </div>

                                <p class="price">
                                    {{ format(item.price) }} F CFA
                                </p>

                                <div class="btn">
                                <button @click='getCar(item.id)'>
                                Voir
                            </button>
                            </div>
                            </div>


                        </div>
                    </div>
            </section>

            <div class="black" v-if='showHome'>
                <div class="black__content">
                    <p>Trouvez votre vehicule
                         aujourdh'hui </p>
                    <button>
                        <a href="#contact">
                        Contactez-nous
                        </a>
                    </button>
                </div>
            </div>


            <?php include 'slider.php'; ?>

            <section>
                <h2>
                    Les plus consultées
                </h2>

                <div class="items">
                    <div class="item" v-for='item in infos' :key='item.id'>
                            <div class="item__top">
                            <img :src='getImgUrl(item.pic1)'>
                                <div class="info">{{ item.category }}</div>
                                <div class="bar">
                                    <p> {{ item.status }} </p>
                                </div>
                            </div>

                            <div class="item__bottom">
                                <h3>
                                    {{ item.name }}
                                </h3>

                                <p class="description">
                                    {{ item.description }}
                                </p>

                                <div class="list">
                                    <div class="list__item">Annee: <span>{{ item.year }}</span></div>
                                    <div class="list__item">Etat: <span>{{ item.rate }}/10</span></div>
                                    <div class="list__item">Couleur: <span>{{  item.color }}</span></div>
                                </div>

                                <p class="price">
                                    {{ format(item.price) }} F CFA
                                </p>

                                <div class="btn">
                                <button @click='getCar(item.id)'>
                                Voir
                            </button>
                            </div>
                            </div>


                        </div>
                    </div>
            </section>

            <form action="" id='contact' class="contact">
            <h2>
                Contact
            </h2>

            <label for="">
                Nom complet: <br>
                <input type="text">
            </label> <br>

            <label for="">Email: <br>
                <input type="email">
            </label> <br>

            <label for="">
                Contact: <br>
                <input type="number">
            </label> <br>

            <label for="">
                Message: <br>
                <input type="text" class="message">
            </label> <br>

            <button>
                Envoyer
            </button>
            </form>


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
                }
            },
            mounted: function() {
                this.displayHome();
            },
            methods: {
                displayHome() {
                    axios.get('https://www.frankobizness.luuluilui.fr/api/lastAdded').then(response =>
                        this.details = response.data)
                      /*  axios.get('https://www.frankobizness.luuluilui.fr/api/lastSaleAdded').then(response =>
                        this.items = response.data)
                        axios.get('https://www.frankobizness.luuluilui.fr/api/lastRentAdded').then(response =>
                        this.infos = response.data)
                        */
                        this.showToSell = false;
                        this.showHome = true;
                        this.showCar = false;
                        this.showAllCars = false;
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