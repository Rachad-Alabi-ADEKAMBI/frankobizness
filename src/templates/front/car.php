<?php $title = 'FrankoBusiness -Vehicule'; ?>

<?php ob_start(); ?>

<div class="car">
    <div class="close">
        Retour
    </div>
    <hr>
    <div class="car__top">
        <h1><?= htmlspecialchars($data['name']) ?></h1>

        <div class="right">
            <h2>
                <?= htmlspecialchars(
                    number_format($data['price'], 0, '', ' ')
                ) ?> F CFA
            </h2>

        </div>
    </div>

    <div class="image">
        <img src='./public/img/<?= htmlspecialchars($data['pic1']) ?>'>
    </div>

    <div class="car__infos">
        <div class="left">
            <h3>
                Description:
            </h3>
            <p>
                <?= htmlspecialchars($data['description']) ?>
            </p> <br>

            <h3>
                Details:
            </h3>

            <div class="details">
                <p>
                    Couleur: <span><?= htmlspecialchars(
                        $data['color']
                    ) ?></span><br>
                    Annee: <span><?= htmlspecialchars(
                        $data['year']
                    ) ?></span> <br>
                    Etat: <span><?= htmlspecialchars($data['rate']) ?>/5</span>
                </p>
            </div>

            <div class="images">
                <img src='./public/img/<?= htmlspecialchars($data['pic2']) ?>'>
                <img src='./public/img/<?= htmlspecialchars($data['pic3']) ?>'>
                <img src='./public/img/<?= htmlspecialchars($data['pic4']) ?>'>
            </div> <br>

            <h3>
                Les plus consultées:
            </h3>

            <div class="images">
                <div class="image" v-for='item in items' key='item.id'>
                    <img :src='getImgUrl(item.pic1)' class='image'>
                    <h4>;jkn</h4>
                    <div class="btn">
                        <button>
                            Voir
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="right">
            <div class="card">
                <div class="card__top">
                    <img src="./public/img/<?= htmlspecialchars(
                        $info['pic']
                    ) ?>" alt="">
                    <div class="card__top__infos">
                        <i class="fas fa-user"></i> <?= htmlspecialchars(
                            $info['first_name']
                        ) ?> <?= htmlspecialchars($info['last_name']) ?> <br>
                        <i class="fas fa-phone"></i> <?= htmlspecialchars(
                            $info['phone_code']
                        ) ?> <?= htmlspecialchars($info['phone_number']) ?><br>
                        <i class="fas fa-phone"></i> <?= htmlspecialchars(
                            $info['phone_code']
                        ) ?> <?= htmlspecialchars($info['phone_number']) ?><br>
                        <i class="fas fa-envelope"></i> <?= htmlspecialchars(
                            $info['email']
                        ) ?> <br>
                        <?php if ($info['verification'] == 'Vérifié') { ?>
                        <p class="green">Vérifié</p>
                        <?php } else { ?>
                        <p class="red">Non Vérifié</p>
                        <?php } ?>
                    </div>
                </div>

                <form action="api/api.php?action='contactForCar" method='POST' class="card__bottom">
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
                        <input class='message' placeholder="Votre message: ex: Je suis interesse par ce vehicule"
                            name='message'>
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
<?php $content = ob_get_clean(); ?>

<?php require 'layout.php'; ?>