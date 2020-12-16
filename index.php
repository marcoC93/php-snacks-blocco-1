<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
        $matches = [
            'Partita 1'[
                'home' = 'Milano',
                'visitors' = 'Napoli',
                'home-score' = 50,
                'visitors-score' = 50,
            ]
        ]
          ?>

          <p><?php echo var_dump($matches)  ?></p>
    </body>
</html>
