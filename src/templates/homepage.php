<?php $title = 'Franko -Accueil'; ?>

<?php ob_start(); ?>

    <div class="main">
         <?php include 'search.php'; ?>

        <section>
            <h2>
                Derniers ajouts
            </h2>

            <div class="container">
                <div class="items">
                    <div class="row">
                    <?php
                        foreach ($posts as $data) {
                        ?>
                        <div class="col-4">
                            <div class="item">
                                <div class="item__top">
                                    <img src="public/img/<?= htmlspecialchars ($data['pic1'])?>" alt="">
                                    <div class="info"><?= htmlspecialchars ($data['category'])?></div>
                                    <div class="bar">
                                        <p></p>
                                    </div>
                                </div>

                                <div class="item__bottom">
                                    <h3>
                                    <?= htmlspecialchars ($data['name'])?>
                                    </h3>

                                    <p class="description">
                                    <?= htmlspecialchars ($data['description'])?>
                                    </p>

                                    <div class="list">
                                        <div class="list__item">Annee: <span><?= htmlspecialchars ($data['year'])?></span></div>
                                        <div class="list__item">Etat: <span><?= htmlspecialchars ($data['rate'])?></span></div>
                                        <div class="list__item">Couleur: <span><?= htmlspecialchars ($data['color'])?></span></div>
                                    </div>

                                    <p class="price">
                                    <?= htmlspecialchars ($data['price'])?> F CFA
                                    </p>

                                    <em><a href="index.php?action=car&id=<?= urlencode($data['id']) ?>">Voir</a></em>
                                </div>
                            </div>
                        <?php } ?>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <?php include 'grey.php'; ?>

        <section>
            <h2>
                Véhicules en vente
            </h2>

            <div class="items">
                <?php
            foreach ($posts as $data) {
            ?>
                    <div class="item">
                    <div class="item__top">
                        <img src="public/img/<?= htmlspecialchars ($data['pic1'])?>" alt="">
                        <div class="info"><?= htmlspecialchars ($data['category'])?></div>
                        <div class="bar">
                            <p></p>
                        </div>
                    </div>

                    <div class="item__bottom">
                        <h3>
                        <?= htmlspecialchars ($data['name'])?>
                        </h3>

                        <p class="description">
                        <?= htmlspecialchars ($data['description'])?>
                        </p>

                        <div class="list">
                            <div class="list__item">Annee: <span><?= htmlspecialchars ($data['year'])?></span></div>
                            <div class="list__item">Etat: <span><?= htmlspecialchars ($data['rate'])?></span></div>
                            <div class="list__item">Couleur: <span><?= htmlspecialchars ($data['color'])?></span></div>
                        </div>

                        <p class="price">
                        <?= htmlspecialchars ($data['price'])?> F CFA
                        </p>

                        <em><a href="index.php?action=car&id=<?= urlencode($data['id']) ?>">Voir</a></em>
                    </div>


                </div>
                <?php } ?>

            </div>
        </section>

        <?php include 'black.php'; ?>


        <section>
            <h2>
                Les plus consultées
            </h2>

            <div class="items">
                <?php
            foreach ($posts as $data) {
            ?>
                    <div class="item">
                    <div class="item__top">
                        <img src="public/img/<?= htmlspecialchars ($data['pic1'])?>" alt="">
                        <div class="info"><?= htmlspecialchars ($data['category'])?></div>
                        <div class="bar">
                            <p></p>
                        </div>
                    </div>

                    <div class="item__bottom">
                        <h3>
                        <?= htmlspecialchars ($data['name'])?>
                        </h3>

                        <p class="description">
                        <?= htmlspecialchars ($data['description'])?>
                        </p>

                        <div class="list">
                            <div class="list__item">Annee: <span><?= htmlspecialchars ($data['year'])?></span></div>
                            <div class="list__item">Etat: <span><?= htmlspecialchars ($data['rate'])?></span></div>
                            <div class="list__item">Couleur: <span><?= htmlspecialchars ($data['color'])?></span></div>
                        </div>

                        <p class="price">
                        <?= htmlspecialchars ($data['price'])?> F CFA
                        </p>

                        <em><a href="index.php?action=car&id=<?= urlencode($data['id']) ?>">Voir</a></em>
                    </div>


                </div>
                <?php } ?>

            </div>
        </section>
        <div class="container">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                <div class="item active">
                    <img src="public/img/profil.jpeg" alt="client satisfait">
                    <p>
                        Rachad ADEKAMBI <br>
                        <span>
                            Client satisfait
                        </span> <br>

                        Je suis tres satisfait de la prestation,
                        je cherchais urgemment un vehicule d'occasion et mr BABATOUNDE
                        m'a été d'une grande aide

                    </p>
                </div>

                <div class="item">
                <img src="public/img/pdg.jpeg" alt="client satisfait">
                    <p>
                        Franck Oklm <br>
                        <span>
                            Client satisfait
                        </span> <br>

                        Prestation 5/5, je recommande fortement, les prix sont super abordable
                        et ils sont tres comprehensifs

                    </p>
                    </div>

                <div class="item">
                <img src="public/img/profil.jpeg" alt="client satisfait">
                    <p>
                        Rachad ADEKAMBI <br>
                        <span>
                            Client satisfait
                        </span> <br>

                        Je suis tres satisfait de la prestation,
                        je cherchais urgemment un vehicule d'occasion et mr BABATOUNDE
                        m'a été d'une grande aide

                    </p>
                </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
                </a>
            </div>
        </div>



        <div class="contact" id='contact'> <br><br>
        <?php include 'contact.php'; ?>
        </div>

    </div>
<?php $content = ob_get_clean(); ?>

<?php require('layout.php') ?>