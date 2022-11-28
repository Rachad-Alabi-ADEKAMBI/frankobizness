 <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <label class="logo">
            <a href="./index.php?action=home">
                <img src="public/img/logo.jpg" alt="">
            </a>
        </label>
        <ul>
            <li><a class="" href="./index.php?action=home"><i
                        class="fas fa-home"></i> Accueil</a></li>
                        <li>
                            <a href="./index.php?action=cars">
                            Véhicules
                            </a>
                        </li>

                        <li>
                            <a href="./index.php?action=home#contact">
                            Contact
                            </a>
                        </li>

            <?php
        if(!isset($_SESSION["user"])): ?>
            <li><a class="login-link <?php echo $current_page == 'login.php' ? 'active':NULL ?>"
                    href="./index.php?action=loginPage"><i class="fas fa-sign-in-alt"></i> Connexion</a></li>

            <?php else: ?>

            <li><a class="<?php echo $current_page == 'dashboard.php' ? 'active':NULL ?>"
                    href="./index.php?action=dashboard"> <i class="fas fa-columns"></i> Tableau de bord</a></li>


            <li><a href="./api/api.php?action=logout" class=""><i class="fas fa-sign-out-alt"></i> Déconnexion</a></li>

            <?php endif;  ?>
        </ul>
    </nav>
</body>