<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frankobizness - Vehicule</title>
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

        <div class="car" >
            <hr>
            <div class="car__top">
                <h1>Volskzasd</h1>

                <div class="right">
                    <h2>
                        4 000 000 F CFA
                    </h2>
                    <p>
                        Annee: <span>2010</span>
                        Etat: <span>9/10</span>
                    </p>
                </div>
            </div>

            <div class="image">
                  <img src="public/img/agustin-segura-eDXRq-2LfNM-unsplash.jpg" alt="" class="card__image">
            </div>

            <div class="car__infos">
                <div class="left">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                         Asperiores voluptatibus doloribus sunt maxime autem eaque nulla, eveniet exercitationem corporis d
                    </p>

                    <h3>
                        Details:
                    </h3> <br>

                    <div class="details">
                        <ul>
                            <li> detail 1</li>
                            <li>detail 2</li>
                        </ul>
                    </div>
                </div>

                <div class="right">
                    <div class="card">
                        <div class="card__top">
                            <img src="public/img/joey-banks-YApiWyp0lqo-unsplash.jpg" alt="">
                            <div class="card__top__infos">
                                <i></i> 66645784 <br>
                                <i></i> agent@frankobizness.com
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
                                <input type="text" placeholder="Je suis interesse par ce vehicule" name='message'>
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



        <footer class="footer">
            <div class="footer__top">
                <div class="box">
                    <h4>
                        Frankobizness
                    </h4>

                    <p>
                        Vente et locations de vehicules
                    </p>

                    <p>9722412</p>
                    <p>Facebook</p>
                    <p>Instagram</p>
                    <p>contact@frankobizness.com</p>
                </div>

                <div class="box">
                    <h4>
                        Les plus consultees
                    </h4>

                    <div class="cars">
                        <div class="car">
                            <img src="" alt="">
                            <h5>Voiture 1 <br>
                        <span>4 000 000 FCFA</span></h5>
                        </div>
                    </div>
                </div>

                <div class="box">
                    <h4>
                        Liens
                    </h4>

                    <ul>
                        <li>
                            A louer
                        </li>

                        <li>
                            A vendre
                        </li>

                        <li>
                            Derniers ajouts
                        </li>
                    </ul>
                </div>

                <div class="box">
                    <h4>
                        Newsletters
                    </h4> <br>
                    <p>
                        Abonnez vous pour recevoir chaque nouvel ajout
                    </p>
                </div>
            </div>

            <hr>
            <div class="footer__bottom">
                <p>Frankobizness2022</p>
                <p>
                    Codeurcreatif
                </p>

            </div>
        </footer>

    </div>

    <script>
        const {
            createApp
        } = Vue

        createApp({
            data() {
                return {
                    details: [],
                }
            },
            mounted: function() {
                this.getCar();
            },
            methods: {
                getCar() {
                    axios.get(' http://127.0.0.1/frankobizness/api/car/lastAdded').then(response =>
                        this.details = response.data)
                }
            }
        }).mount('#app')
    </script>
</body>
</html>