<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>
<body>

  <h1>Mon super blog !</h1>
  <p><a href="index.php">Retour à la liste des billets</a></p>

<?php

try
{
  $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'root');
}
catch (Exception $e)
{
  die('Erreur :' . $e->getrMessage());
}

$req = $bdd->prepare('SELECT * FROM billets WHERE id = ?');
$req-> execute(array($_GET['id']));
$donnees = $req->fetch();
?>
<div class="news">
    <h3>
      <?php echo $donnees['titre']?>   le   <?php echo $donnees['date_creation']?>
    </h3>
    <p>
      <?php echo $donnees['contenu']?><br>

    </p>
  </div>


<h2>Commentaires</h2>
  <?php
$req = $bdd->prepare('SELECT * FROM commentaires WHERE id_billet =? ORDER BY date_commentaire DESC');
$req-> execute(array($_GET['id_billet']));
while ($donnees = $req->fetch())
{
  ?>

    <p>
    <stong>  <?php echo $donnees['auteur']; ?> </strong>le <?php echo $donnees['date_commentaire'] ?>
    </p>
    <p>
      <?php echo $donnees['commentaire'] ?>
    </p>


<?php } ?>




</body>
</html>
