<?php

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $estadocivil = $_POST["sexo"];
    $sexo = $_POST["sexo"];
    $con = mysqli_connect("localhost","root","","well");
    $sql = "INSERT INTO cliente VALUES(null,'{$nome}','{$email}','{$estadocivil}','{$sexo}')";
    if(mysqli_query($con, $sql))
    {
        echo "gravado com sucesso!!";   
    }else{
        echo "erro ao gravar";
        
    }
    
?>