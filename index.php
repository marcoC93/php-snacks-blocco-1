<?php
$matches = [
    [
        'home' => 'Milano',
        'visitors' => 'Napoli',
        'home_score' => 50,
        'visitors_score' => 50,
    ],
    [
        'home' => 'Olimpia Milano',
        'visitors' => 'Cantù',
        'home_score' => 50,
        'visitors_score' => 50,
    ],
    [
        'home' => 'Milano',
        'visitors' => ' Virtus Napoli',
        'home_score' => 50,
        'visitors_score' => 50,
    ],
    [
        'home' => 'Milano',
        'visitors' => 'Napoli',
        'home_score' => 50,
        'visitors_score' => 50,
    ],
    [
        'home' => 'Milano',
        'visitors' => 'Napoli',
        'home_score' => 50,
        'visitors_score' => 50,
    ],
];
$email = $_GET['email'];
$name = $_GET['name'];
$age = $_GET['age'];
  ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>


          <p><?php var_dump($matches)  ?></p>

          <?php foreach ($matches as $match ){ ?>

            <h1> Risultato di oggi :</h1>
            <h2> <?php echo $match[home]; ?> </h2>
            <em> <?php echo $match[home_score]; ?> </em>
            <h2> <?php echo $match[visitors] ?></h2>
            <em> <?php echo $match[visitors_score]; ?> </em>


        <?php } ?>
        <?php if (strpos($email, '.') !== false && strpos($email, '@') !== false )  {
             echo 'indirizzo mail corretto' ;
         }
         else {
             echo 'indirizzo mail NON corretto' ;
         }

         ?>
         <?php if (strlen($name) < 3) {
            echo "Devi inserire un nome piu lungo";

         }
         else {
             echo "Nome inserito correttamente";
         }
         ?>
         <?php if (is_numeric($age) == true ) {
             echo "l'etá é di : $age anni";
         }
         else {
             echo "l'etá non é un numero";
         }
         ?>
    </body>
</html>
