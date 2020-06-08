<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8"/>
    <title>PHPP3EXO02</title>
</head>
    <body>
        <?php
            $num1 = 0;
            $num2 = 99;
            while ($num1 <=20) {
                $num1 * $num2;
            ?>
            <p><?php echo $num1 * $num2; ?></p>
            <?php
                $num1++;
            }?>
    </body>