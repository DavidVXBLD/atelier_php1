<?php 
    require "data/infos.php";
    include "template/header.php"; 

    if(!empty($_GET) && isset($_GET["id"])) {
        $id = htmlspecialchars($_GET["id"]);
    }
    else {
        $error = "zebi t'as craqué mon reuf, y'a rien ici t'y est fada";
    }
    ?>

    <h2>Détail de l'article</h2>

    <?php 
    if(isset($error)) {
        echo $error;
    } 
    else {
        echo "Vous avez cliqué sur l'article d'ID : " . $id;
    } 
    ?>

    <?php include "template/footer.php"; ?>