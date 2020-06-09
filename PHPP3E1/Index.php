<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8" />
    <title>PHPP3EXO01</title>
</head>
    <body>
        <?php
            $number = 0;
            while ($number < 10)
            {
            ?>
            <p><?= $number ?></p><?php
                $number++;
            }
            for ($number = 0; $number <10; $number++){
                ?><p><?= $number ?></p><?php
            }
            ?>
    </body>
</html>
