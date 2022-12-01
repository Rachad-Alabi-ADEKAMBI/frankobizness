<?php $title = 'Franko - Connexion'; ?>



<?php ob_start(); ?>

<br><br><br>
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 md-4 mx-auto ">
                <div class="">
                    <form action='./api/api.php?action=login' method="POST">
                        <h1 class="text-center">
                            Connexion
                        </h1>
                        <div class="form-group row">
                            <label for="" class="col-sm-12 col-md-4 col-form-label"></label><br>
                            <div class="col-sm-10"><br>
                                <input type="text" class="form-control" id="" name='username' value='<?= $_SESSION[
                                    'login'
                                ]['username'] ?>' placeholder="Email/Username">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-12 col-md-4 col-form-label"></label><br>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="" name='pass' value='<?= $_SESSION[
                                    'login'
                                ]['pass'] ?>' placeholder="Password">
                            </div>
                        </div>

                        <!-- Submit button -->
                        <div class="form-group row">
                            <label for="" class="col-sm-12 col-md-4 col-form-label"></label><br>
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>

                            </div>
                        </div>


                        <div class="row mb-4">
                            <div class="col-md-6 d-flex justify-content-center">
                                <!-- Checkbox -->
                                <div class="form-check mb-3 mb-md-0">
                                    <input class="form-check-input" type="checkbox" value="" id="loginCheck" checked />
                                    <label class="form-check-label" for="loginCheck"> Se souvenir de moi </label>
                                </div>
                            </div>

                            <div class="col-md-6 d-flex justify-content-center">
                                <!-- Simple link -->
                                <a href="./index.php?action=forgotPassword">Mot de passe oublié ?</a>
                            </div>
                        </div>

                        <!-- Register buttons -->
                        <div class="text-center ">
                            <p class="text-center mx-auto">Pas encore de compte ? <a
                                    href="./index.php?action=register">Inscription</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<?php $content = ob_get_clean(); ?>

<?php require './src/templates/layout.php'; ?>