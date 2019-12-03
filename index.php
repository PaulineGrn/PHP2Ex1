<?php
$age=17;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8"/>
  <title>PHP2Ex1</title>
</head>
<body>
  <p><?php
  // Déclaration de l'instruction if. Si la réponse est supérieure ou égale à 18 alors on affiche le message suivant(vous avez...)
  if ($age>=18)
  {
    echo'Vous êtes majeur';
  }
  // Sinon si la réponse est inférieure ou égale alors on affiche le message suivant (vous avez...)
  elseif ($age<=17)
  {
    echo'Vous êtes mineur';
  }
  ?>
</body>
</html>
