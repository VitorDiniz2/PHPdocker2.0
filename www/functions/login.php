<?php

include("bd.php");

if(isset($_POST["btnEntrar"]) && $con){
    $email = $_POST["email"];
    $password = $_POST["password"];

    if(!isset($email) || !isset($password)){
        echo "<script>alert('Preencha todos os campos!');location.href='../login.php'</script>";
        return;
    }
    
    $stmt = $con->prepare("SELECT * FROM user WHERE email = :email AND password = :password");
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":password", $password);

    $stmt->execute();

    if($stmt->rowCount() > 0){
        session_start();
        $_SESSION["user"] = $stmt->fetch(\PDO::FETCH_ASSOC);
        echo "<script>location.href='../index.php'</script>";
    } else{
        echo "<script>alert('E-mail ou senha incorretos!');location.href='../login.php'</script>";
    }
}