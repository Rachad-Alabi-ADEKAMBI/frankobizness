<?php $title = 'Franko -Accueil'; ?>

<?php ob_start(); ?>

    <div class="main">
        <section>
            <h2>
                Derniers ajouts
            </h2>

            <div class="items">
                <?php
    	foreach ($posts as $data) {
    	?>
                    <div class="item">
                    <div class="item__top">
                        <img src="public/img/agustin-segura-eDXRq-2LfNM-unsplash.jpg" alt="">
                        <div class="info"><?= htmlspecialchars ($data['id'])?></div>
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

                        <em><a href="index.php?action=car&id=<?= urlencode($data['id']) ?>">Voir</a></em>
                    </div>


                </div>
                <?php } ?>

            </div>
        </section>
    </div>
<?php $content = ob_get_clean(); ?>

<?php require('layout.php') ?>