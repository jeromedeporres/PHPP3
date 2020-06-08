<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8"/>
    <title>PHPP3EXO04</title>
</head>
    <body>
        <?php
            $number = 1;
            while ($number <10)
            {
            ?>
            <p><?php echo $number; ?></p>
            <?php
                $number += $number /2;
            }
            ?>
    </body>
</html>