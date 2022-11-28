<?php $title = 'Franko -Vehicule'; ?>

<?php ob_start(); ?>

        <?php include 'search.php'; ?>

       <div class="main">
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

                <section v-if='showToSell'>
                        <h2>
                            Vehicules a vendre
                        </h2>

                        <div class="items">
                        <div class="item" v-for='detail in toSell' :key='detail.id'>
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
       </div>

       <?php $content = ob_get_clean(); ?>

<?php require('layout.php') ?>