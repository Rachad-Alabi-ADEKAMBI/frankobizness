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

                <div class="car" v-if='showCar' v-for='line in lines' :key='line.id'>
                    <div class="close" @click='displayHome()' >
                        Retour
                    </div>
                    <hr>
                    <div class="car__top">
                        <h1>{{ line.name }}</h1>

                        <div class="right">
                            <h2>
                                {{ format(line.price) }} F CFA
                            </h2>

                        </div>
                    </div>

                    <div class="image">
                        <img :src='getImgUrl(line.pic1)'>
                    </div>

                    <div class="car__infos">
                        <div class="left">
                            <h3>
                                Description:
                            </h3>
                            <p>
                                {{ line.description }}
                            </p>

                            <h3>
                                Details:
                            </h3>

                            <div class="details">
                                <p>
                                    Couleur: <span>{{ line.color}}</span><br>
                                    Annee: <span>{{ line.year }}</span> <br>
                                    Etat: <span>{{ line.rate }}</span>
                                </p>
                            </div>

                            <div class="images">
                            <img :src='getImgUrl(line.pic2)' class='image'>
                            <img :src='getImgUrl(line.pic3)' class='image' >
                            <img :src='getImgUrl(line.pic4)' class='image'>
                            </div> <br>

                            <h3>
                                Les plus consultees:
                            </h3>

                            <div class="images">
                                <div class="image" v-for='item in items' key='item.id'>
                                <img :src='getImgUrl(item.pic1)' class='image'>
                                    <h4>{{ item.name }}</h4>
                                    <div class="btn">
                                        <button @click='getCar(item.id)'>
                                        Voir
                                    </button>
                            </div>
                                </div>
                            </div>
                        </div>

                        <div class="right">
                            <div class="card">
                                <div class="card__top">
                                    <img src="public/img/pdg.jpeg" alt="">
                                    <div class="card__top__infos">
                                    <i class="fas fa-phone"></i> 66 64 57 84 <br>
                                    <i class="fas fa-envelope"></i> agent@frankobizness.com
                                    </div>
                                </div>

                                <form action="api/api.php?action='contactForCar" method='POST'
                                        class="card__bottom">
                                    <label for="">
                                        <input type="text" placeholder="Votre nom" name='name'>
                                    </label>

                                    <label for="">
                                        <input type="email" placeholder="Votre email" name='email'>
                                    </label>

                                    <label for="">
                                        <input type="number" placeholder="Votre contact" name='contact'>
                                    </label>

                                    <label for="">
                                        <input class='message'
                                        placeholder="Votre message: ex: Je suis interesse par ce vehicule" name='message'>
                                    </label>

                                    <label>
                                    <button type='submit'>
                                        Contacter
                                    </button>
                                    </label>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <section v-if='showToSell'>
                    <div class="close" @click='displayAll()'>
                        <a href="">
                            Retour
                        </a>
                    </div>
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
                    <div class="close" @click='displayHome()'>
                        Retour
                    </div>
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
                    <div class="close" @click='displayHome()'>
                        Retour
                    </div>
                        <h2>
                            Tout les vehicules
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
                this.displayHome();
            },
            methods: {
                displayHome() {
                    axios.get('http://127.0.0.1/frankobizness/api/lastAdded').then(response =>
                        this.details = response.data)
                        axios.get('http://127.0.0.1/frankobizness/api/lastSaleAdded').then(response =>
                        this.items = response.data)
                        axios.get('http://127.0.0.1/frankobizness/api/lastRentAdded').then(response =>
                        this.infos = response.data)
                        this.showToSell = false;
                        this.showHome = true;
                        this.showCar = false;
                        this.showAllCars = false;
                        this.showToRent = false;
                        this.showToSell =false
                },
                getCar(id){
                    axios.get('http://127.0.0.1/frankobizness/api/car/' + id).then(response =>
                        this.lines = response.data);
                        axios.get('http://127.0.0.1/frankobizness/api/mostRated').then(response =>
                        this.items = response.data);
                        this.showHome = false;
                        this.showCar = true;
                        this.showAllCars = false;
                        this.showToRent = false;
                        this.showToSell =false;
                },
                getToSell(){
                    axios.get('http://127.0.0.1/frankobizness/api/carsToSell').then(response =>
                        this.details = response.data);
                        this.showHome = false;
                        this.showCar = false;
                        this.showAllCars = false;
                        this.showToRent = false;
                        this.showToSell = true;
                },
                getToRent(){
                    axios.get('http://127.0.0.1/frankobizness/api/carsToRent').then(response =>
                        this.details = response.data);
                        this.showHome = false;
                        this.showCar = false;
                        this.showAllCars = false;
                        this.showToRent = true;
                        this.showToSell = false;
                },
                getAllCars(){
                    axios.get('http://127.0.0.1/frankobizness/api/allCars').then(response =>
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