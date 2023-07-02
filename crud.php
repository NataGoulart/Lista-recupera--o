<?php
    $name=$_POST["nome"];
    $email=$_POST["email"];
    $telefone=$_POST["telefone"];
    include("conecta.php");
    
    
    
        $comando = $pdo->prepare("INSERT INTO cadastro VALUES('$name','$email','$telefone')" );
        $resultado = $comando->execute();
        header("Location:lista.php");
    

    
?>