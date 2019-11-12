<?php
require 'dbconnexion.php';
$info=$bdd->prepare('DELETE FROM students WHERE id=:id');
$info->bindParam(':id',$_GET['id']);
$info->execute();
   header('Location:http://localhost/students/index.php');
   ?>