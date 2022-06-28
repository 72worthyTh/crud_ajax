<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">

<title>Document</title>
</head>
<body>
    <div class="row">
   <div class="col-5">
<div class="card">
    <div class="card-header">
      Enregistremement 
    </div>
    <div class="card-body">
    
<form id="formp">
    <label for="" id="response"></label>
    <input type="hidden" name="idp" id="idp">
<div class="form-group">
  <label for="">Code </label>
  <input type="text"
    class="form-control" name="code" id="code" aria-describedby="helpId" placeholder="">

</div>
<div class="form-group">
  <label for="">Nom</label>
  <input type="text"
    class="form-control" name="nom" id="nom" aria-describedby="helpId" placeholder="">

</div>

<div class="form-group">
  <label for="">Prénom</label>
  <input type="text"
    class="form-control" name="prenom" id="prenom" aria-describedby="helpId" placeholder="">

</div>
<div class="form-group">
  <label for="">Email</label>
  <input type="text"
    class="form-control" name="mail" id="mail" aria-describedby="helpId" placeholder="">

</div>
<div class="form-group">
    <label for="my-select">Sexe</label>
    <select id="sexe" class="form-control" name="sexe">
        <option>Masculin</option>
        <option>Feminin</option>
        <option>Complique</option>
    </select>
</div>
<div class="form-group">
  <label for="">Age</label>
  <input type="text"
    class="form-control" name="age" id="age" aria-describedby="helpId" placeholder="">

</div>
<input type="hidden" name="acte" id="acte">

    </div>
    <div class="card-footer">
    <div style="float:right ;">
    <button type="button" style="border-radius:12px ;"  onclick="traiter()"  id="save" >Save</button>  <button type="button" name="delete" id="delete" style="border-radius:12px ;"  onclick="deletep()">Delete</button>
    </div>
</div>
    </form>
</div>
</div>
<div class="col-7">
<div class="card">
    <div class="card-header">
       Liste des Enregistement
    </div>
    <div class="card-body" id="block">
       
    </div>
<div class="card-footer">
ajax crud    
</div>
</div>

</div>
</div>
</body>
</html>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/a9545f17e8.js" crossorigin="anonymous"></script>
<script src="js/myscript.js"></script>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

