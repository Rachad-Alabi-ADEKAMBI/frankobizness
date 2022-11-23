<?php
session_start();
?>


<!DOCTYPE html>
<html>
   <head>
      <?php include 'meta.php'; ?>

      <title><?= $title ?></title>
   </head>


   <body>
   <?php include 'header.php'; ?>

      <?= $content ?>

      <?php include 'footer.php'; ?>
   </body>
</html>