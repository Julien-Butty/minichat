<?php

try

{

    $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'root');

}

catch (Exception $e)

{

        die('Erreur : ' . $e->getMessage());

}

if (isset($_POST['pseudo']) AND isset($_POST['message']))
{
 $req = $bdd->prepare('INSERT INTO minichat(pseudo,message) VALUE(:pseudo,:message)');
 $req->execute(array(
   'pseudo' => htmlspecialchars($_POST['pseudo']),
   'message' =>$_POST['message'],
 ));

 header('Location: minichat.php');
};
?>
