
    <div class=tudo><?php
     include("conecta.php");
    $comando = $pdo->prepare("SELECT * FROM cadastro");
    $resultado = $comando->execute();
    while( $linhas = $comando->fetch() )
    {
    
        $Usuario =  $linhas["nome"];
        $Senha =  $linhas["email"];
        $City =  $linhas["telefone"];
  
        
        echo( "Nome: $Usuario / Email: $Senha / Telefone: $City <br>");
    
    }
    ?></div>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista</title>
    <link rel="stylesheet" href="lista.css">
    <link rel="shortcut icon" href="imagens/icone2.png" type="image/x-icon">
    <style>
        body{
            background-image:url("imagens/lista2.png");
            background-size: 170%;
        }
    
    </style>
</head>