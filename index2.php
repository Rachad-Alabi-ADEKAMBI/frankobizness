<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frankobizness - Accueil</title>
    <link rel="stylesheet" href="public/scss/main.css">
    <script src="https://kit.fontawesome.com/b14771b76e.js" crossorigin="anonymous"></script>
    <script src='https://unpkg.com/vue@3'></script>
<script src='https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js'></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


</head>
<body>
    <div class="main" id='app'>
        <header class='header'>

        </header>

        <div class="search">
            <div class="search__content">
            <div class="search__content__item">
                <p>
                    <span>
                    Chercher un vehicule
                    </span> <br>
                    Faites une recherche
                </p>
            </div>

            <div class="search__content__item">
                <label for="">
                    Marque <br>
                    <input type="text">
                </label>

                <label for="">
                    Prix min: <br>
                    <input type="text">
                </label>

                <label for="">Prix max: <br>
                <input type="text">
                </label>

                <label for="">
                    <br>
                    <button>
                        Chercher
                    </button>
                </label>
            </div>
            </div>
        </div>

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
                            <div class="list__item">Etat: <span>{{ detail.rate }}/10</span></div>
                            <div class="list__item">Couleur: <span>{{ detail.color }}</span></div>
                        </div>

                        <p class="price">
                            {{ format(detail.price) }}F CFA
                        </p>
                    </div>


                </div>
            </div>
        </section>

        <section>
            <h2>
                Les plus consultees
            </h2>

            <div class="slider">

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
                    </div>


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
                                <div class="list__item">Etat: <span>{{ item.rate }}/10</span></div>
                                <div class="list__item">Couleur: <span>{{  item.color }}</span></div>
                            </div>

                            <p class="price">
                                {{ format(item.price) }} F CFA
                            </p>
                        </div>


                    </div>
                </div>
            </div>
        </section>

        <section class='grey'>
            <h2>
                Frankobizness <br>
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
                            Demande personnalisee
                        </p>

                       <p class="text">
                        Cherhcez vous un modele precis ?
                        Contactez-nous
                       </p>
                    </div>
            </div>
        </section>

        <div class="black">
            <div class="black__content">
                <p>Trouvez votre vehicule aujourdh'hui </p>
                <button>
                    Chercher
                </button>
            </div>
        </div>

        <section class="testimonies">
                <h2>
                    Temoignages
                </h2>

                <div class="testimonies__content">
                    <div class="testimony">
                        <img src="" alt="">
                        <p class="author">
                            Marius A.
                        </p>

                        <p class="title">
                            client satisfait
                        </p>

                        <p>
                            Je suis tres satisfait de mon achat, je recommande vivement
                            Frankobizness
                        </p>
                    </div>
                </div>
        </section>

        <section>
            <h2>
                Dernieres ventes
            </h2>

            <div class="items">
                <!--
            <div class="item" v-for='item in elements' :key='item.id'>
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
                                {{ format(item.price) }}
                            </p>
                        </div>


                    </div>
                </div>
            </div>
-->
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
            },
                getImgUrl(pic) {
                return "public/img/" + pic;
            },
            }
        }).mount('#app')
    </script>
</body>
</html>