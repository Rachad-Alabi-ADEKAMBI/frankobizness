<!DOCTYPE html>
<html lang="en">
<head>
        <?php include 'meta.php'; ?>

    <title>Frankobizness - Connexion</title>
</head>
<body>
    <?php include 'header.php'; ?> <br><br><br>

    <div class="login">

        <form action="api/api.php?action=login" method='POST'>
        <h2>
            Connexion
        </h2> <br>
            <label for="" class='form'>
                Nom:  <br>
                <input type="text" name='username' required>
            </label> <br> <br>

            <label for="">
                Pass: <br>
                <input type="password" name='pass' required>
            </label> <br> <br>

            <button type='submit'>
                Connexion
            </button>
        </form>

        <?php include 'footer.php'; ?>
    </div>
</body>
</html>