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
            // put your code here
            require_once './People.php';
            require_once './Book.php';
            
            $p[0] = new People("Maíra", 30, "Feminino");
            $p[1] = new People("Felipe", 30, "Masculino");
                        
            $p[0]->showPeople();
            $p[0]->birthday();
            $p[0]->showPeople();
            $p[1]->showPeople();            
            
            $bk[0] = new Book("O Segredo da mente milhonária", "T. Harv Eker", 175, $p[0]);            
            $bk[1] = new Book("As armas da persuasão", "Robert B. Cialdini, Ph.D.", 303, $p[1]);
            
            $bk[0]->browse(170);
            $bk[1]->browse(261);
            $bk[0]->nextPage();
            $bk[0]->backPage();
            $bk[0]->backPage();
            $bk[0]->backPage();
            $bk[0]->backPage();
            $bk[0]->backPage();
            $bk[0]->detail();
            $bk[1]->detail();
            
            ?>
        </pre>
    </body>
</html>
