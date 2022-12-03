<?php $title = 'Franko -Vehicule'; ?>

<?php ob_start(); ?>

<?php include 'search.php'; ?>

<div class="main">
    <div class='buttons'>
        <button @click='getAllCars()'>
            Tout voir
        </button>
        <button @click='getToSell()'>
            A vendre
        </button>

        <button @click='getToRent()'>
            A louer
        </button>
    </div>

    <section class='section bg-light' v-if='showToSell'>
        <h2>
            Véhicules à vendre
        </h2>

        <div class="container ">
            <div class="row">

                <div class="col-sm-12 col-md-4 col-lg-4" v-for='car in details' :key='car.id'>
                    <div class="item">
                        <div class="item__top">
                            <img :src="getImgUrl(car.pic1)" class='' alt="">
                            <div class="info"> {{ car.category }} </div>
                            <div class="bar">
                                <p></p>
                            </div>
                        </div>

                        <div class="item__bottom">
                            <h3>
                                {{ car.name }}
                            </h3>

                            <p class="description">
                                {{ car.description }}
                            </p>

                            <div class="list">
                                <div class="list__item">Annee: <span> {{ car.year }} </span></div>
                                <div class="list__item">Etat: <span> {{ car.year }} </span></div>
                                <div class="list__item">Couleur: <span> {{ car.color }} </span></div>
                            </div>

                            <p class="price">
                                {{ car.price}} F CFA
                            </p>

                            <button @click='getCar(car.id)'>
                                Voir
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section v-if='showToRent'>
        <h2>
            Véhicules à louer
        </h2>

        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-4 col-lg-4" v-for='car in details' :key='car.id'>
                    <div class="item">
                        <div class="item__top">
                            <img :src="getImgUrl(car.pic1)" class='' alt="">
                            <div class="info"> {{ car.category }} </div>
                            <div class="bar">
                                <p></p>
                            </div>
                        </div>

                        <div class="item__bottom">
                            <h3>
                                {{ car.name }}
                            </h3>

                            <p class="description">
                                {{ car.description }}
                            </p>

                            <div class="list">
                                <div class="list__item">Annee: <span> {{ car.year }} </span></div>
                                <div class="list__item">Etat: <span> {{ car.year }} </span></div>
                                <div class="list__item">Couleur: <span> {{ car.color }} </span></div>
                            </div>

                            <p class="price">
                                {{ car.price}} F CFA
                            </p>

                            <button @click='getCar(car.id)'>
                                Voir
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section v-if='showAllCars'>
        <h2>
            Tous les véhicules
        </h2>

        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-4 col-lg-4" v-for='car in details' :key='car.id'>
                    <div class="item">
                        <div class="item__top">
                            <img :src="getImgUrl(car.pic1)" class='' alt="">
                            <div class="info"> {{ car.category }} </div>
                            <div class="bar">
                                <p></p>
                            </div>
                        </div>

                        <div class="item__bottom">
                            <h3>
                                {{ car.name }}
                            </h3>

                            <p class="description">
                                {{ car.description }}
                            </p>

                            <div class="list">
                                <div class="list__item">Annee: <span> {{ car.year }} </span></div>
                                <div class="list__item">Etat: <span> {{ car.year }} </span></div>
                                <div class="list__item">Couleur: <span> {{ car.color }} </span></div>
                            </div>

                            <p class="price">
                                {{ car.price}} F CFA
                            </p>

                            <button @click='getCar(car.id)'>
                                Voir
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php $content = ob_get_clean(); ?>

<?php require './src/templates/layout.php'; ?>