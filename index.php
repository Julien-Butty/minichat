<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>
<body>
<h1>Mon super blog</h1>
<p>Derniers billets du blog:</p>
<?php

try
{
  $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8','root','root',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (Exception $e)
{
  die('Erreur :' . $e->getMessage());
}

$reponse = $bdd->query('SELECT * FROM billets ORDER BY ID DESC LIMIT 5');

while ($donnees = $reponse ->fetch())
{
  ?>

<!-- Code Html des billets -->
  <div class="news">
    <h3>
      <?php echo $donnees['titre']?>   le   <?php echo $donnees['date_creation']?>
    </h3>
    <p>
      <?php echo $donnees['contenu']?><br>
      <a href="<?php echo 'commentaires.php?id=' . $donnees['id'] . '&amp;id_billet=' . $donnees['id']   ;?> "> commentaires </a>
    </p>
  </div>
<?php
}
$reponse->closeCursor(); ?>
</body>
</html>
