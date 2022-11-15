<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="public/scss/main.css">

</head>
<body>
    <header class="header">

    </header>

    <main class="main">
        <div class="options">
            <p>
                Bonjour mr X, content de vous revoir
            </p>

            <ul class="options__list">
                <li>
                    <button class='green'>
                    Nouveau
                    </button>
                </li>
            </ul>
        </div>

        <table class="table">
            <thead>
                <th>Id</th>
                <th>Nom</th>
                <th>Prix</th>


            </thead>

            <tbody>

                <tr>
                    <td data-label="Id">
                    1
                    </td>

                    <td data-label="Nom">
                    vehicule 1
                    </td>

                    <td data-label="Prix">
                        Prix
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

        <form action="">
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


        <form action="">
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

        <form action="">
            <div class="close">
                Fermer
            </div>
            <h2>
                Nouvel ajout
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
                <label for="">Annee: <br>
                   <input type="text">
                </label>

                <label for="">Etat: <br>
                    <select name="" id="">
                        <option value="">3</option>
                        <option value="">4</option>
                        <option value="">5</option>
                    </select>
                </label>

                <label for="">
                    Annee: <br>
                    <input type="number">
                </label>
            </div>

            <div class="details">
                <label for="">
                <input type="text" class='message' name='description'>
                </label>
            </div>

            <div class="details">
                <label for="">Image 1: <br>
                    <input type="file" name='pic1' required>
                </label>

                <label for="">Image 2: <br>
                    <input type="file" name='pic2'>
                </label>

                <label for="">Image 3: <br>
                    <input type="file" name='pic3'>
                </label>
            </div>

            <div class="details">
                <label for="">Action: <br>
                    <select name="" id="">
                        <option value="A vendre">A vendre</option>
                        <option value="A louer"> A louer</option>
                    </select>
                </label>
            </div>

            <button class='green'>
                Ajouter
            </button>

        </form>

    </main>
</body>
</html>