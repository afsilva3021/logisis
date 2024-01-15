<?php 
    switch($_REQUEST['inserir']){
        case 'cadastro':
            $entrada = $_POST["entrad"];
            $filial  = $_POST["filial"];
            $dia     = $_POST["dia"];

            $sql = "INSERT INTO ENTRADA (INICIO, FILIAL, HORA)
                    VALUES ('{$entrada}','{$filial}','{$dia}')";

            $res = $conn->query($sql);

            if($res==true){
                echo "<script>alert('dados cadastrados')</scripts>";
            }else{
               echo "<script></script>";
            }
    }
?>