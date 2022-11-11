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
    <div class="main">
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
                <div class="item">
                    <div class="item__top">
                        <img src="public/img/agustin-segura-eDXRq-2LfNM-unsplash.jpg" alt="">
                        <div class="info">A vendre</div>
                        <div class="bar">
                            <p>A vendre</p>
                        </div>
                    </div>

                    <div class="item__bottom">
                        <h3>
                            Mercedes Benz
                        </h3>

                        <p class="description">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Nemo ab enim consequatur? Totam provident.
                        </p>

                        <div class="list">
                            <div class="list__item">Annee: <span>2015</span></div>
                            <div class="list__item">Etat: <span>9/10</span></div>
                            <div class="list__item">Couleur: <span>noire</span></div>
                        </div>

                        <p class="price">
                            2 000 000F CFA
                        </p>
                    </div>


                </div>

                <div class="item">
                    <div class="item__top">
                        <img src="public/img/agustin-segura-eDXRq-2LfNM-unsplash.jpg" alt="">
                        <div class="info">A vendre</div>
                        <div class="bar">
                            <p>A vendre</p>
                        </div>
                    </div>

                    <div class="item__bottom">
                        <h3>
                            Mercedes Benz
                        </h3>

                        <p class="description">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Nemo ab enim consequatur? Totam provident.
                        </p>

                        <div class="list">
                            <div class="list__item">Annee: <span>2015</span></div>
                            <div class="list__item">Etat: <span>9/10</span></div>
                            <div class="list__item">Couleur: <span>noire</span></div>
                        </div>

                        <p class="price">
                            2 000 000F CFA
                        </p>
                    </div>


                </div>

                <div class="item">
                    <div class="item__top">
                        <img src="public/img/agustin-segura-eDXRq-2LfNM-unsplash.jpg" alt="">
                        <div class="info">A vendre</div>
                        <div class="bar">
                            <p>A vendre</p>
                        </div>
                    </div>

                    <div class="item__bottom">
                        <h3>
                            Mercedes Benz
                        </h3>

                        <p class="description">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Nemo ab enim consequatur? Totam provident.
                        </p>

                        <div class="list">
                            <div class="list__item">Annee: <span>2015</span></div>
                            <div class="list__item">Etat: <span>9/10</span></div>
                            <div class="list__item">Couleur: <span>noire</span></div>
                        </div>

                        <p class="price">
                            2 000 000F CFA
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
                <div class="item">
                    <div class="item__top">
                        <img src="public/img/agustin-segura-eDXRq-2LfNM-unsplash.jpg" alt="">
                        <div class="info">A vendre</div>
                        <div class="bar">
                            <p>A vendre</p>
                        </div>
                    </div>

                    <div class="item__bottom">
                        <h3>
                            Mercedes Benz
                        </h3>

                        <p class="description">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Nemo ab enim consequatur? Totam provident.
                        </p>

                        <div class="list">
                            <div class="list__item">Annee: <span>2015</span></div>
                            <div class="list__item">Etat: <span>9/10</span></div>
                            <div class="list__item">Couleur: <span>noire</span></div>
                        </div>

                        <p class="price">
                            2 000 000F CFA
                        </p>
                    </div>


                </div>

                <div class="item">
                    <div class="item__top">
                        <img src="public/img/agustin-segura-eDXRq-2LfNM-unsplash.jpg" alt="">
                        <div class="info">A vendre</div>
                        <div class="bar">
                            <p>A vendre</p>
                        </div>
                    </div>

                    <div class="item__bottom">
                        <h3>
                            Mercedes Benz
                        </h3>

                        <p class="description">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Nemo ab enim consequatur? Totam provident.
                        </p>

                        <div class="list">
                            <div class="list__item">Annee: <span>2015</span></div>
                            <div class="list__item">Etat: <span>9/10</span></div>
                            <div class="list__item">Couleur: <span>noire</span></div>
                        </div>

                        <p class="price">
                            2 000 000F CFA
                        </p>
                    </div>


                </div>

                <div class="item">
                    <div class="item__top">
                        <img src="public/img/agustin-segura-eDXRq-2LfNM-unsplash.jpg" alt="">
                        <div class="info">A vendre</div>
                        <div class="bar">
                            <p>A vendre</p>
                        </div>
                    </div>

                    <div class="item__bottom">
                        <h3>
                            Mercedes Benz
                        </h3>

                        <p class="description">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Nemo ab enim consequatur? Totam provident.
                        </p>

                        <div class="list">
                            <div class="list__item">Annee: <span>2015</span></div>
                            <div class="list__item">Etat: <span>9/10</span></div>
                            <div class="list__item">Couleur: <span>noire</span></div>
                        </div>

                        <p class="price">
                            2 000 000F CFA
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
                <div class="item">
                    <div class="item__top">
                        <img src="public/img/agustin-segura-eDXRq-2LfNM-unsplash.jpg" alt="">
                        <div class="info">A vendre</div>
                        <div class="bar">
                            <p>A vendre</p>
                        </div>
                    </div>

                    <div class="item__bottom">
                        <h3>
                            Mercedes Benz
                        </h3>

                        <p class="description">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Nemo ab enim consequatur? Totam provident.
                        </p>

                        <div class="list">
                            <div class="list__item">Annee: <span>2015</span></div>
                            <div class="list__item">Etat: <span>9/10</span></div>
                            <div class="list__item">Couleur: <span>noire</span></div>
                        </div>

                        <p class="price">
                            2 000 000F CFA
                        </p>
                    </div>


                </div>

                <div class="item">
                    <div class="item__top">
                        <img src="public/img/agustin-segura-eDXRq-2LfNM-unsplash.jpg" alt="">
                        <div class="info">A vendre</div>
                        <div class="bar">
                            <p>A vendre</p>
                        </div>
                    </div>

                    <div class="item__bottom">
                        <h3>
                            Mercedes Benz
                        </h3>

                        <p class="description">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Nemo ab enim consequatur? Totam provident.
                        </p>

                        <div class="list">
                            <div class="list__item">Annee: <span>2015</span></div>
                            <div class="list__item">Etat: <span>9/10</span></div>
                            <div class="list__item">Couleur: <span>noire</span></div>
                        </div>

                        <p class="price">
                            2 000 000F CFA
                        </p>
                    </div>


                </div>

                <div class="item">
                    <div class="item__top">
                        <img src="public/img/agustin-segura-eDXRq-2LfNM-unsplash.jpg" alt="">
                        <div class="info">A vendre</div>
                        <div class="bar">
                            <p>A vendre</p>
                        </div>
                    </div>

                    <div class="item__bottom">
                        <h3>
                            Mercedes Benz
                        </h3>

                        <p class="description">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Nemo ab enim consequatur? Totam provident.
                        </p>

                        <div class="list">
                            <div class="list__item">Annee: <span>2015</span></div>
                            <div class="list__item">Etat: <span>9/10</span></div>
                            <div class="list__item">Couleur: <span>noire</span></div>
                        </div>

                        <p class="price">
                            2 000 000F CFA
                        </p>
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
                           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat eaque vitae recusandae aliquam nisi asperiores,
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
                <div class="item">
                    <div class="item__top">
                        <img src="public/img/agustin-segura-eDXRq-2LfNM-unsplash.jpg" alt="">
                        <div class="info">A vendre</div>
                        <div class="bar">
                            <p>A vendre</p>
                        </div>
                    </div>

                    <div class="item__bottom">
                        <h3>
                            Mercedes Benz
                        </h3>

                        <p class="description">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Nemo ab enim consequatur? Totam provident.
                        </p>

                        <div class="list">
                            <div class="list__item">Annee: <span>2015</span></div>
                            <div class="list__item">Etat: <span>9/10</span></div>
                            <div class="list__item">Couleur: <span>noire</span></div>
                        </div>

                        <p class="price">
                            2 000 000F CFA
                        </p>
                    </div>


                </div>

                <div class="item">
                    <div class="item__top">
                        <img src="public/img/agustin-segura-eDXRq-2LfNM-unsplash.jpg" alt="">
                        <div class="info">A vendre</div>
                        <div class="bar">
                            <p>A vendre</p>
                        </div>
                    </div>

                    <div class="item__bottom">
                        <h3>
                            Mercedes Benz
                        </h3>

                        <p class="description">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Nemo ab enim consequatur? Totam provident.
                        </p>

                        <div class="list">
                            <div class="list__item">Annee: <span>2015</span></div>
                            <div class="list__item">Etat: <span>9/10</span></div>
                            <div class="list__item">Couleur: <span>noire</span></div>
                        </div>

                        <p class="price">
                            2 000 000F CFA
                        </p>
                    </div>


                </div>

                <div class="item">
                    <div class="item__top">
                        <img src="public/img/agustin-segura-eDXRq-2LfNM-unsplash.jpg" alt="">
                        <div class="info">A vendre</div>
                        <div class="bar">
                            <p>A vendre</p>
                        </div>
                    </div>

                    <div class="item__bottom">
                        <h3>
                            Mercedes Benz
                        </h3>

                        <p class="description">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Nemo ab enim consequatur? Totam provident.
                        </p>

                        <div class="list">
                            <div class="list__item">Annee: <span>2015</span></div>
                            <div class="list__item">Etat: <span>9/10</span></div>
                            <div class="list__item">Couleur: <span>noire</span></div>
                        </div>

                        <p class="price">
                            2 000 000F CFA
                        </p>
                    </div>


                </div>
            </div>
        </section>

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
</body>
</html>