<?php $title = 'Franko - Connexion'; ?>



<?php ob_start(); ?>

<div class="login">
    <form action="././api/api.php?action=login" method='POST'>
        <h2>
            Connexion
        </h2> <br>
        <label for="" class='form'>
            Nom:  <br>
            <input type="text" name='username' required value='<?=$_SESSION['login']['username'] ?>'>
        </label> <br> <br>

        <label for="">
            Pass: <br>
            <input type="password" name='pass' required value='<?=$_SESSION['login']['pass']?>' >
        </label> <br> <br>

        <button type='submit'>
            Connexion
        </button>
    </form>
</div>


<?php $content = ob_get_clean(); ?>

<?php require('layout.php') ?>