<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
            <?php
            require_once './Lutador.php';
            require_once './Luta.php';
            $ldt = array();
            $ltd[0] = new Lutador("Pretty Boy", "França", 30, 1.75, 68.9, 11, 2, 1);
            $ltd[1] = new Lutador("Putscript", "Brasil", 29, 1.68, 68.8, 14, 2, 3);
            $ltd[2] = new Lutador("Snapshadow", "EUA", 35, 1.65, 80.9, 12, 2, 1);
            $ltd[3] = new Lutador("Dead Code", "Australia", 28, 1.93, 81.6, 13, 0, 2);
            $ltd[4] = new Lutador("UfoCobol", "Brasil", 37, 1.70, 119.3, 5, 4, 3);
            $ltd[5] = new Lutador("Nerdaart", "EUA", 30, 1.81, 105.7, 12, 2, 4);

            $UEC = new Luta();
            $UEC->marcarLuta($ltd[4], $ltd[5]);
            $UEC->lutar();
            ?>
        </pre>
    </body>
</html>
