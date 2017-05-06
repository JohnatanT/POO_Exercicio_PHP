<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Banco</title>
    </head>
    <body>
        <?php
            require_once 'ContaBanco.php';
            
            $p1 = new ContaBanco();
            $p2 = new ContaBanco();
            
            $p1->setNumConta(111);
            $p1->abrirConta("CC");
            $p1->setDono("Jubileu");
            $p1->depositar(300);
            $p1->pagarMensal();
            
            $p2->setNumConta(222);
            $p2->abrirConta("CP");
            $p2->setDono("Creusa");
            $p2->depositar(500);
            $p2->sacar(100);
            $p2->pagarMensal();
            
               
            
            $p1->fecharConta();
            $p2->fecharConta();
            
        ?>
    </body>
</html>
