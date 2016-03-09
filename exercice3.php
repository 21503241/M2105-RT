<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
    <?php


        function additon($a, $b){
            return $a + $b;
        }

        function soustraction($a, $b){
            return $a - $b;
        }

        function multiplication($a, $b){
            return $a * $b;
        }

        function division($a, $b){
            return $a / $b;
        }
        function operation($val1, $val2, $op){
            return $op($val1 , val2);
        }

    ?>
    </body>
</html>