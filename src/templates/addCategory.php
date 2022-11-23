<?php $title = 'Franko -Accueil'; ?>
<?php  session_start();

if(!isset($_SESSION['user'])){
    header("Location: login.php");
    exit;
}
?>

<?php ob_start(); ?>

<form action="index.php?action=addCategory&id=<?= $post['name'] ?>" method="post">
   <div>
   <div>
  	<label for="comment">nom:</label><br />
  	<input type="text" class="name" name='name'>
   </div>
   <div>
  	<input type="submit" />
   </div>
</form>


<?php $content = ob_get_clean(); ?>

<?php require('layout.php') ?>

