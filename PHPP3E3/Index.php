<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8"/>
    <title>PHPP3EXO03</title>
</head>
    <body>
        <?php
            $num1 = 100;
            $num2 = 5;
            while ($num1 >=10) {
                $num1 * $num2;
            ?>
            <p><?php echo $num1 * $num2; ?></p>
            <?php
                $num1--;
            }?>
    </body>