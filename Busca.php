<?php
    include('Cone.php');

    if(empty($_POST['busca'])){
        header('Location: Listar.php');
        exit();
    }

    $busc = $_POST['busca'];

    $stmt = $conex->prepare("SELECT `nome` FROM `usu` WHERE `nome` = :b");

    $stmt->bindparam(":b", $busc);
    $stmt->execute();

    if($stmt->rowCount() == 0){
        echo "Usuário identificado!<br>";
    }else{
        $result= $stmt->fetch(PDO::FETCH_ASSOC);
        echo "Usuário: <br>";
        foreach ($result as $key => $value) {
            echo $key.": ".$value."<br>";
        }
        echo "<br>";
    }
    
    ?>
        <button><a href="Listar.php">Voltar</a></button>
    <?php
?>