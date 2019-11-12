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
   <div class="container">
<form action="store.php" method="POST">
    <fieldset>
    <div class="alert alert-info">
    <legend class="jumbotron text-center">Nouvel Etudiant</legend>
    </div>
<div class="row">
        <div class="col-md-6">
           <div class="form-group">
                <strong><label for="">Firstname</label></strong>  
                  <br>
                  <input type="text" name="firstname">
           </div>
        </div>
        <div class="form-group">
           <div class="col-md-6">
                 <strong> <label for="">lastname</label> </strong>
                  <br>
                  <input type="text" name="lastname" id="">
           </div>
        </div>
 </div>
    <div class="row">
           <div class="col-md-6">
           <div class="form-group">
           <strong><label for="">email</label></strong>
                 <br>
                 <input type="text" name="email" id="">
          </div>
        </div>
          <div class="form-group">
          <div class="col-md-6">
          <strong> <label for="">phone</label></strong>
                <br>
                <input type="text" name="phone">
          </div>
          </div>
      </div>
      <div class="row">
        <div class="col-md-6">
        <input class="btn btn-primary" type="submit" name="enregistrer" id="" value="Enregistrer">
        <input class="btn btn-primary" type="reset" name="" id="" value="Annuler">
        </div>
    </div>
    </fieldset>
  
</form>
   </div> 
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</html>