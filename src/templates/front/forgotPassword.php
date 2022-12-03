<?php $title = 'Franko - Mot de passe oublié'; ?>



<?php ob_start(); ?>

<br><br><br>
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 mx-auto ">
                <div class="mt-4">
                    <form action='./api/api.php?action=login' method="POST">
                        <h1 class="text-center">
                            Mot de passe oublié
                        </h1>
                        <div class="form-group row mt-2">
                            <label for="" class="col-sm-10 col-md-12 col-form-label mx-auto">
                                Email ou nom d'utilisateur
                            </label>
                            <div class="col-sm-10 mx-auto">
                                <input type="text" class="form-control" id="" name='username' value='<?= $_SESSION[
                                    'login'
                                ]['username'] ?>' placeholder="Email/Username">
                            </div>
                        </div>


                        <!-- Submit button -->
                        <div class="form-group row">
                            <label for="" class="col-sm-12 col-md-4 col-form-label"></label><br>
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary btn-block mb-4">Réinitialiser</button>

                            </div>
                        </div>



                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<?php $content = ob_get_clean(); ?>

<?php require './src/templates/layout.php'; ?>