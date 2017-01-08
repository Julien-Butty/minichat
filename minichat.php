<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>minichat</title>
  </head>
  <body>

    <form action="minichat_post.php" method="post">

      <p>
        <input type="text" name="pseudo" id="pseudo" placeholder="Votre pseudo">
      </p>

      <p>
       <textarea name="message" rows="8" cols="80" placeholder="Veuillez saisir votre texte ici"></textarea>
      </p>

      <p>
      <input type="submit" name="boutton" value="Envoyer">
      </p>

      </form>
  </body>
</html>
