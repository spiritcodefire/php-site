<?php
$aDeviner = 150 ;
require 'header.php';
?>

<?php if ($_GET['chiffre'] > $aDeviner): ?>
Votre Chiffre est trop grand
<?php elseif ($_GET['chiffre'] < $aDeviner): ?>
Votre chiffr est trop petit
<?php else : ?>
Bravo !  Vous avez trouvé le bon Chiffre <?php $aDeviner ?>
<?php endif ?>

<form action="/jeu.php" method="GET" class="m-5">
    <input type="number" name="chiffre" placeholder='entre 0 et 1000'>
    <button type="submit">deviner</button>
</form>


<?php require 'footer.php' ?>