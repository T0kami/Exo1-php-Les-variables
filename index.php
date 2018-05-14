<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Exercices PHP</title>
  </head>
  <body>
    <h1>Exercices PHP</h1>
    <h2>Exo 1</h2>
    <hr>
    <?php $nom = "Michel"; echo $nom; ?>

    <h2>Exo 2</h2>
    <hr>
    <?php
    $nom  = "Michel";
    $prenom = "Jean";
    $age = 42;

    echo $prenom . " " . $nom . " " . $age;
    ?>
    <h2>Exo 3</h2>
    <hr>
    <?php
    $km = 1;
    echo $km . "<br>";

    $km = 3;
    echo $km . "<br>";

    $km = 125;
    echo $km . "<br>";
    ?>
    <h2>Exo 4</h2>
    <hr>
    <?php
    $varString = "String";
    $varInt = 42;
    $varFloat = 0.69;
    $varBoolean = false;

    echo $varString . " " . $varInt . " " . $varFloat . " " . $varBoolean;
 ?>
    <h2>Exo 5</h2>
    <hr>
    <?php
    $varInt = NULL;
    settype($varInt, 'int');

    echo $varInt . " ";

    $varInt = 42;
    echo $varInt; ?>
    <h2>Exo 6</h2>
    <hr>
    <?php
    $nom = "Michel";
    echo "Bonjour $nom comment vas-tu ?";
 ?>
    <h2>Exo 7</h2>
    <hr>
    <?php
    $nom = "Michel";
    $prenom = "Jean";
    $age = 69;

    echo "Bonjour $prenom $nom, tu as $age ans";
    ?>
    <h2>Exo 8</h2>
    <hr>
    <?php
    $var1 = 3+4;
    $var2 = 5*20;
    $var3 = 45/5;

    echo $var1 . " " . $var2 . " " .$var3;
    ?>
  </body>
</html>
