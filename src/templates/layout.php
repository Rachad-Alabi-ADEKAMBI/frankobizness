<!DOCTYPE html>
<html>

<head>
    <?php include 'meta.php'; ?>



    <title><?= $title ?></title>
</head>


<body>
    <?php include 'header.php'; ?> <br>

    <div class="app" id='app'>
        <?= $content ?>
        <?php include 'footer.php'; ?>

    </div>
</body>

</html>