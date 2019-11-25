<?php
include 'classes/etudiant.calss.php';

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$Student = new Etudiant;
$result = $Student->AddStudent($firstname,$lastname,$email,$phone);

if($result){   
    header( 'Location: index.php?success=add');
}else{
    header( 'Location: index.php?error=add');
}
?>