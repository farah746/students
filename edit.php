<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <title>Document</title>
</head>
<body>
          <?php
    require 'dbconnexion.php';
    $info=$bdd->prepare('SELECT * FROM students WHERE id=:id');
    $info->bindParam(':id',$_GET['id']);
    $info->execute();
    $tableau=$info->fetch();
          ?> 
    <form action="update.php" method="post">
    <fieldset>
    <legend>Editer Etudiant</legend>
    <div>
    <label for="">Firstname</label>
    <input type="text" name="firstname" value="<?= $tableau['firstname']?>">
    <label for="">lastname</label>
    <input type="text" name="lastname" value="<?php echo $tableau['lastname']?>">
    </div>
    <br>
    <div>
    <label for="">email</label>
    <input type="text" name="email" id="" value="<?php echo $tableau['email']?>">
    <label for="">phone</label>
    <input type="text" name="phone" value="<?php echo $tableau['phone']?>">
    </div>
    <br>
    <div>
        <input type="number" hidden name="id" value="<?= $tableau['id']?>">
        <input type="submit" name="" id="" value="Enregistrer">
        <input type="submit" name="" id="" value="Annuler">
    </div>
    </fieldset>
</form>
   </div> 
    </form>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>