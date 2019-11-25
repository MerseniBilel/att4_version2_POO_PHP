<?php
    include 'classes\etudiant.calss.php';
    $id = $_GET["id"];
    $etudiant = new Etudiant;
    $res = $etudiant->RemoveStudent($id);
    if ($res){
        header('location:index.php?success=delete');
    }else{
        header('location:index.php?error=delete');
    }
?> 