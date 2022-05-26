<?php

include("bd.php");

if(isset($_POST["btnRegistrar"]) && $con){
    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $cpf = $_POST["cpf"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $foto = $_POST["foto"];

    if(!isset($nome) || !isset($cpf) || !isset($email) || !isset($password)){
        echo "<script>alert('Preencha todos os campos!');location.href='../cadastro.php'</script>";
        return;
    }

    $stmt = $con->prepare("INSERT INTO user (id, nome, cpf, email, password, foto) values (null, :nome, :cpf, :email, :password, null)");
    $stmt->bindParam(":nome", $nome);
    $stmt->bindParam(":cpf", $cpf);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":password", $password);
    
    $stmt->execute();
    

    if($stmt->rowCount() > 0){
        echo "<script>alert('Cadastro realizado Sucesso!');location.href='../login.php'</script>";
    } else{
        echo "<script>alert('Erro ao cadastrar!');location.href='../cadastro.php'</script>";
    }
}