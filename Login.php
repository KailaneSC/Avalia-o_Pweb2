<?php
    include('Cone.php');
    include('Usu.php');
    
    if(empty($_POST['usu']) || empty($_POST['senha'])){
        header('Location: Login.html');
        exit();
    }

    $usu = $_POST['usu'];
    $sen= $_POST['senha'];

    $stmt = $conex->prepare("SELECT `usu`, `senha` FROM `usu` WHERE `usu` = :usu and `senha` = :senha");

    $stmt->bindparam(":usu", $usu);
    $stmt->bindValue(":senha", md5($sen));
    $stmt->execute();

    if($stmt->rowCount() == 0){
        echo "Dados inválidos";
        ?>
            <button><a href="Login.html">Voltar</a></button>
        <?php
    }else{
        header("Location: Listar.php");
    }
?>