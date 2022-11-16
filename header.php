

<head>
    <link rel="stylesheet" href="public/scss/header.css">
    <html>

    <head>

    </head>

<body>
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <label class="logo">
            <a href="index.php">
                <img src="public/img/logo.jpg" alt="">
            </a>
        </label>
        <ul>
            <li><a class="<?php echo $current_page == 'index.php' ? 'active':NULL ?>" href="index.php"><i
                        class="fas fa-home"></i> Accueil</a></li>
                        <li> A vendre</li>
                        <li> A louer</li>
                        <li>Tout voir</li>

            <?php
        if(!isset($_SESSION["user"])): ?>
            <li><a class="login-link <?php echo $current_page == 'connexion.php' ? 'active':NULL ?>"
                    href="login.php"><i class="fas fa-sign-in-alt"></i> Connexion</a></li>

            <?php else: ?>

            <li><a class="<?php echo $current_page == 'tableau-de-bord.php' ? 'active':NULL ?>"
                    href="dashboard.php"> <i class="fas fa-columns"></i> Tableau de bord</a></li>


            <li><a href="api/api.php?logout.php" class=""><i class="fas fa-sign-out-alt"></i> Deconnexion</a></li>

            <?php endif;  ?>
        </ul>
    </nav>
    <section></section>
</body>