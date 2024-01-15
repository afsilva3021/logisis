<?php 
    session_start();

    if(empty($_POST) || (empty($_POST["usuario"]) || (empty($_POST['senha'])))){
        echo "<scripts>location.href='../index.html';</scripts>";
    }

    include("config.php");

    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

    $sql = "SELECT * FROM SYS_USR
            WHERE usuario = '{$usuario}'
            AND senha = '{$senha}'";

    $res = $conn->query($sql) or die($conn->error);

    $row = $res->fetch_object();

    $qtd = $res->num_rows;

    if($qtd > 0){
        $_SESSION["usuario"] = $usuario;
        $_SESSION["nome"]    = $row->name;
        $_SESSION["tipo"]    = $row->tipo;
        header("Location: ../home.php");
    }else{
        echo "<script>alert('Senha ou usuario invalido');</script>";
        echo "<script>location.href='../index.html';</script>";
    }

?>