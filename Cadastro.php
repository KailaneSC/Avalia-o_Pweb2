<?php
    include('Cone.php');
    include('Usu.php');
    
    if(empty($_POST['nome']) || empty($_POST['usu']) || empty($_POST['email']) || empty($_POST['senha'])){
        header('Location: Cadastro.html');
        exit();
    }

    $sen = md5($_POST["senha"]);
	$usua = new Usu($_POST['nome'], $_POST["usu"], $_POST["email"], $sen);
    
    $nome = $usua->getNome();
    $usu = $usua->getUsu();
    $email = $usua->getEmail();
    $sen = $usua->getSen();
    $i = 0;

    $stmt = $conex->prepare("INSERT INTO `usu`(`nome`, `usu`, `email`, `senha`) 
    VALUES (:nome, :usu, :email, :senha)");

    $fetch = "SELECT `nome`, `usu` FROM `usu`";
    $result = $conex->query($fetch);

    while($row = $result->fetch()) {
        if($row['usu'] == $usu || $row['email'] == $email){
            $i++;
        }
    }

    if($i>0){
        echo "Algum dos dados já é existente no sistema";
    }else{
        $stmt->execute(array(':nome' => $nome, ':usu' => $usu, ':email' => $email, ':senha'=> $sen));

        echo "Cadastro finalizado!";
        header("Location: Login.html");
    }
?>