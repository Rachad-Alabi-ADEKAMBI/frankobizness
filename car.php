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
                                Les plus consultées:
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
                                    <i class="fas fa-user"></i> Franck BABATOUNDE <br>
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