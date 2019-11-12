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
    <div class="alert alert-info">
    <div class="jumbotron text-center">
    <strong>  la liste des étudiants DSI22 G1 </strong>
    </div>
    </div>
    <div class="container py-3">
    <button type="button" class="btn btn-primary" onclick=window.location='../students/create.php'>Nouvel Etudiant</button>
    </div>
    <br>
    <div class="container">
<table border="1" class="table table-striped">
    <thead>
        <tr class="table-danger">
            <th class="text-primary">id</th>
            <th class="text-primary">firstname</th>
            <th class="text-primary">lastname</th>
            <th class="text-primary">email</th>
            <th class="text-primary">phone</th>
            <th class="text-primary">opérations</th>
        </tr>
        </thead>
<?php 
include 'dbconnexion.php';
//$info= $bdd->query('SELECT * FROM students'); moin de securité !!! sooo
$info=$bdd->prepare('SELECT * FROM students');
$info->execute();
while ($tableau=$info->fetch())
{
       echo '<tr>';
       echo '<td>'.$tableau['id'].'</td>';
       echo '<td>'.$tableau['firstname'].'</td>';
       echo '<td>'.$tableau['lastname'].'</td>';
       echo '<td>'.$tableau['email'].'</td>';
       echo '<td>'.$tableau['phone'].'</td>';
       //edit.php?id=... c'est la methode get pour afficher les données : 
       echo '<td><a class="btn btn-primary" href="edit.php?id='.$tableau['id'].'">Editer</a>.
       <a class="btn btn-primary" href="delete.php?id='.$tableau['id'].'">Supprimer</a>';
       echo '</td>';
       echo '</tr>';
   }
?>
 </table>
 </div>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
