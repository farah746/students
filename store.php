    <?php
    include'dbconnexion.php';
    $firstname=$_POST['firstname'] ;
    $lastname=$_POST['lastname'] ;
    $email=$_POST['email'] ;
    $phone=$_POST['phone'] ;
    ////////////////////////////

    $info=$bdd->prepare('INSERT INTO students(firstname,lastname,email,phone) 
    VALUES (:param_firstname,:param_lastname,:param_email,:param_phone)');
$info->bindParam(':param_firstname',$firstname);
$info->bindParam(':param_lastname', $lastname);
$info->bindParam(':param_email',$email);
$info->bindParam(':param_phone',$phone);
$info->execute();
header('Location:http://localhost/students/index.php');

    ?>

</body>
</html>