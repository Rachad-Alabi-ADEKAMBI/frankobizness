<?php $title = 'Franko - Inscription'; ?>



<?php ob_start(); ?>

<br><br><br>
<div class="section">

    <div class="container">
        <div class="row">

            <div class="col-sm-12 md-6 mx-auto ">
                <div class="">
                    <form class='form mx-auto' method='POST' action='./api/api.php?action=register'
                        enctype="multipart/form-data">
                        <h1 class='text-center'>
                            Inscription gratuite
                        </h1>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Prénoms</label>
                                <input type="text" class="form-control" name='first_name' id="inputEmail4"
                                    placeholder="" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Nom</label>
                                <input type="text" class="form-control" name='last_name' required id="inputPassword4"
                                    placeholder="">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="inputCity">Indicatif téléphone</label>
                                <input type="number" class="form-control" id="inputCity" name='phone_code' required>
                            </div>
                            <div class="form-group col-md-8">
                                <label for="inputState">Numéro de téléphone</label>
                                <input type="number" class="form-control" id="inputCity" name='phone_number' required>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="inputAddress">Email</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="" name='email'
                                required>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="inputCity">Photo</label>
                                <input type="file" class="form-control col-4" id="inputCity" name='pic'>
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck" required>
                                <label class="form-check-label" for="gridCheck">
                                    J'ai lu et j'accepte les <a href="./index.php?action=cgv">CGV</a>
                                </label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Inscription</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<?php $content = ob_get_clean(); ?>

<?php require './src/templates/layout.php'; ?>