<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Controle Remoto</title>
    </head>
    <body>
        <h1>PROJETO CONTROLE REMOTO</h1>
        <br>
        <pre>
        <?php
        // put your code here
        require_once './ControleRemoto.php';
        $controle1 = new ControleRemoto();
        $controle1->ligar();
        $controle1->abrirMenu();
        $controle1->menosVlume();
        $controle1->menosVlume();
        $controle1->play();
        $controle1->abrirMenu();
        $controle1->ligarMudo();
        $controle1->abrirMenu();
        $controle1->desligarMudo();
        $controle1->abrirMenu();
        $controle1->pause();
        $controle1->abrirMenu();
        $controle1->desligar();
        $controle1->abrirMenu();        
        ?>
        </pre>
    </body>
</html>
