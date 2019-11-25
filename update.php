<?php
include 'classes\etudiant.calss.php';
$etud =  new Etudiant;
$id = $_GET['id'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$rep = $etud->UpdateStudent($firstname,$lastname,$email,$phone,$id);
if ($rep){
    header('location:index.php?success=update');
}else{
    header('location:index.php?error=update');
}

?>