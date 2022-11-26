<form class="search" method='POST' action='api.php?action=search'>
            <div class="search__content">
            <div class="search__content__item">
                <p>
                    <strong>
                    Franco
                    </strong>
                    <span>
                    Business
                    </span> <br>
                    Vente et location de vehicules
                </p>
            </div>

            <div class="search__content__item">
                <label for="">
                    Marque: <br>
                    <select name="" id="">
                        <option value="">Veuillez selectionner</option>
                        <option value="">Toutes les marques</option>
                        <option value="Honda">Honda</option>
                        <option value="Toyota">Toyota</option>
                    </select>
                </label>



                <label for="">Ordre: <br>
                    <select name="" id="" required>
                        <option value="">Veuillez selectionner</option>
                        <option value="Croissant">Croissant</option>
                        <option value="Decroissant">Decroissant</option>
                    </select>
                </label>

                <label for="">
                    <br>
                    <button>
                        <a href="results.php">
                            Trier
                        </a>
                    </button>
                </label>
            </div>
            </div>
</form>