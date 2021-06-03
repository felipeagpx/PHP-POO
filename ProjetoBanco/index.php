<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
            <?php
            require_once './ContaBanco.php';
            $conta1 = new ContaBanco();
            print_r($conta1);
            $conta2 = new ContaBanco();
            print_r($conta2);
            $conta1->abrirConta("CC");
            $conta1->setDono("Jubileu");
            $conta1->setNumConta(1010);
            $conta1->depositar(300);
            print_r($conta1);
            $conta2->abrirConta("CP");
            $conta2->setDono("Creuza");
            $conta2->setNumConta(2020);
            $conta2->depositar(500);
            print_r($conta2);
            $conta2->sacar(100);
            print_r($conta2);
            $conta1->sacar($conta1->getSaldo());
            $conta1->fecharConta();
            print_r($conta1) ;
            $conta2->sacar($conta2->getSaldo());
            $conta2->fecharConta();
            print_r($conta2) ;
            ?>
        </pre>
    </body>
</html>
