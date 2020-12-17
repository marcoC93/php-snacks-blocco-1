<?php
$matches = [
    [
        'home' => 'Milano',
        'visitors' => 'Napoli',
        'home-score' => 50,
        'visitors-score' => 50,
    ],
    [
        'home' => 'Olimpia Milano',
        'visitors' => 'Cantù',
        'home-score' => 50,
        'visitors-score' => 50,
    ],
    [
        'home' => 'Milano',
        'visitors' => ' Virtus Napoli',
        'home-score' => 50,
        'visitors-score' => 50,
    ],
    [
        'home' => 'Milano',
        'visitors' => 'Napoli',
        'home-score' => 50,
        'visitors-score' => 50,
    ],
    [
        'home' => 'Milano',
        'visitors' => 'Napoli',
        'home-score' => 50,
        'visitors-score' => 50,
    ],
];
  ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>


          <p><?php var_dump($matches)  ?></p>
          <?php array_key_exists(home, $matches) ?>
          <?php foreach ($matches as $match ){


            <h1><?phpecho $match[home] ;</h1>
        }?>


    </body>
</html>
