<?php
    include('Cone.php');

    ?>
        <form method="POST" name="form" action="Busca.php">
            <br>
            <label for="busca">Buscar usuário: </label>
            <input type="text" name="busca">
            <br>
            <button type="submit" value="Send">Busca</button>
            <br>
        </form>
    <?php

    $stmt = $conex->prepare("SELECT `nome` FROM `usu`");
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    for ($i=0; $i < count($result); $i++) { 
        echo "Usuário: ".($i+1)."<br>";
        foreach ($result[$i] as $key => $value) {
            echo $key.": ".$value."<br>";
        }
        echo "<br>";
    }
?>