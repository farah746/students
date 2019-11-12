
<?php
require 'dbconnexion.php';
$firstname=$_POST['firstname'] ;
$lastname=$_POST['lastname'] ;
$email=$_POST['email'] ;
$phone=$_POST['phone'] ;
$id=$_POST['id'];
$info=$bdd->prepare('UPDATE students SET firstname=:firstname,lastname=:lastname,email=:email,
phone=:phone WHERE id=:id');
$info->bindParam(':firstname',$firstname);
$info->bindParam(':lastname', $lastname);
$info->bindParam(':email',$email);
$info->bindParam(':phone',$phone);
$info->bindParam(':id',$id);
$info->execute();
header('Location:http://localhost/students/index.php');
?>