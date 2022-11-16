<!-- Start Preloader Area
<div id="preloader">
		<div class="line"></div>
			<div class="line"></div>
			<div class="line"></div>
		<div class="line"></div>
    </div>
	 End Preloader Area -->







<!-- Start Navbar Area -->
<nav class="navbar navbar-b navbar-trans fixed-top navbar-expand-lg" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll" href="index.php">
            <img src="public/img/logo.jpeg" class="logo" alt="logo">
        </a>
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
            aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link js-scroll active" href="index.php">Accueil</a></li>
                <?php
        if(!isset($_SESSION["user"])): ?>
                <li class="nav-item"><a
                        class="nav-link js-scroll login-link <?php echo $current_page == 'connexion.php' ? 'active':NULL ?>"
                        href="connexion.php"> Connexion</a></li>

                <?php else: ?>

                <?php

                  if($_SESSION['user']['role'] == 'admin'){ ?>
                <li class="nav-item"><a
                        class=" nav-link js-scroll<?php echo $current_page == 'tableau-de-bord-depimmo.php' ? 'active':NULL ?>"
                        href="tableau-de-bord-depimmo.php"> Tableau de bord</a></li>

                <?php  }

?>

                <li class="nav-item"><a href="api/api.php?action=logout" class="nav-link js-scroll"> Déconnexion</a></li>

                <?php endif;  ?>


                <li class="nav-item"><a class="nav-link js-scroll" href="liste-noire.php">

                    </a></li>


            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar Area -->