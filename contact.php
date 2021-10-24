
<?php
$title = "nous contacter" ;
$nav = 'Contact' ;
require 'header.php'; 
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


<h2 class="p-5 m-5 h1"> Nous contacter</h2>

<form action="/form.php" method="GET">
    <input type="text" name='ppp'>
    <input type="submit" >
</form>

<?php require 'footer.php' ; ?>