<?php  session_start();

if(!isset($_SESSION['user'])){
    header("Location: login.php");
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'meta.php'; ?>

    <title>Frankobizness - Tableau de bord</title>

</head>
<body>
    <?php include 'header.php'; ?> <br><br><br>

    <main class="main" id='app'>
            <div class="center">
                    <p>
                        Bonjour mr <span><?= $_SESSION['user']['username']?></span>, content de vous revoir
                    </p>


                            <button class='green' @click='displayAdd()' v-if='showCars'>
                            Nouveau
                            </button>
            </div>

        <table class="table" v-if='showCars'>
            <thead>
                <th>Id</th>
                <th>Nom</th>
                <th>Prix</th>


            </thead>

            <tbody>

                <tr v-for='car in cars' :key='car.id'>
                    <td data-label="Id">
                        {{ car.id }}
                    </td>

                    <td data-label="Nom">
                    {{ car.name }}
                    </td>

                    <td data-label="Prix">
                        {{ format(car.price) }}
                    </td>

                    <td>
                        <button class="purple">
                            Editer
                        </button>

                        <button class="red">
                            Supprimer
                        </button>
                    </td>

                </tr>
            </tbody>
        </table>

        <form action="" v-if='displayEdit'>
            <div class="close">
                Fermer
            </div>
            <h2>
                Modification
            </h2>

            <div class="details">
                <label for="">Nom: <br>
                   <input type="text">
                </label>

                <label for="">Prix: <br>
                    <input type="number">
                </label>
            </div>

            <div class="details">
                <label for="">
                    <input type="text" class='message' name='description'>
                </label>
            </div>

            <div class="details">
                <label for="">Action: <br>
                    <select name="" id="">
                        <option value="A vendre">A vendre</option>
                        <option value="A louer"> A louer</option>
                    </select>
                </label>

                <label for="">Disponibilite: <br>
                    <select name="" id="">
                        <option value="Disponible">Disponible</option>
                        <option value="Non disponible">Non disponible</option>
                    </select>
                </label>
            </div>

            <button type='submit'  class='green'>
                Modifier
            </button>

        </form>


        <form action="" v-if='displayDelete'>
            <div class="close">
                Fermer
            </div>

            <h2>
                Suppression
            </h2>

            <p>
                Confirmez vous la suppression de
            </p>

            <div class="choices">
                <button class='green'>
                    Oui
                </button>

                <button class='red'>
                    Non
                </button>
            </div>
        </form>
        <br>

        <form action="api/api.php?action=newCar" v-if='showAdd'
        enctype="multipart/form-data"  method='POST'>

            <div class="close" @click='closeAdd()'>
                Fermer
            </div>

            <h2>
                Nouvel ajout
            </h2>

            <div class="details">
                <label for="">Nom: <br>
                   <input type="text" name='name' required>
                </label>


                <label for="">Marque: <br>
                   <select name="brand_name" id="" required>
                        <option value="">Veuillez selectionner</option>
                        <option value="Toyota">Toyota</option>
                        <option value="Honda">Honda</option>
                   </select>
                </label>


                <label for="">Prix: <br>
                    <input type="number" name='price' required>
                </label>
            </div>

            <div class="details">
                <label for="">Annee: <br>
                   <input type="text" name='year' required>
                </label>

                <label for="">Etat: <br>
                    <select name="rate" id="" required>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </label>

                <label for="">
                    Couleur: <br>
                    <input type="text" name='color' required>
                </label>
            </div>

            <div class="details">
                <label for="">Description: <br>
                    <input name="description" class='textarea'
                     required id="">
                </label>
            </div>

            <div class="details">
                <label for="">Image 1: <br>
                    <input type="file" name='pic1' >
                </label>

                <label for="">Image 2: <br>
                    <input type="file" name='pic2'>
                </label>

                <label for="">Image 3: <br>
                    <input type="file" name='pic3'>
                </label>

                <label for="">Image 4: <br>
                    <input type="file" name='pic4'>
                </label>
            </div>

            <div class="details">
                <label for="">Action: <br>
                    <select name="category" id="" required>
                        <option value="">Veuillez selectionner</option>
                        <option value="A vendre">A vendre</option>
                        <option value="A louer"> A louer</option>
                    </select>
                </label>
            </div>

            <button type='submit' class='green'>
                Ajouter
            </button>

        </form>

    </main>

    <?php include 'footer.php'; ?>
    <script>
        const {
            createApp
        } = Vue

        createApp({
            data() {
                return {
                    cars: [],
                    showCars : false,
                    showBtn: false,
                    showAdd: false,
                    displayDelete: false,
                    displayEdit: false
                }
            },
            mounted: function() {
               this.getCars();
            },
            methods: {
                getCars() {
                    axios.get('https://www.frankobizness.luuluilui.fr/api/cars').then(response =>
                        this.cars = response.data)
                    this.showBtn = true;
                    this.showCars = true;
                },
                displayAdd(){
                    this.showBtn = false;
                    this.showCars = false;
                    this.showAdd = true
                },
                closeAdd(){
                    this.showBtn = true;
                    this.showCars = true;
                    this.showAdd = false;
                },
                format(num){
                let res = new Intl.NumberFormat('fr-FR', { maximumSignificantDigits: 3 }).format(num);
                return res;
            },
                getImgUrl(pic) {
                return "public/img/" + pic;
            },
            }
        }).mount('#app')
    </script>
</body>
</html>