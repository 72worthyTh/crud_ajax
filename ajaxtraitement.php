<?php
include('db.php');
$idp=isset($_POST['idp']) ? $_POST['idp'] : 0;
$code=$_POST['code'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$sexe=$_POST['sexe'];
$mail=$_POST['mail'];
$age=$_POST['age'];
if($_POST['acte']==0&& $idp==0){
 
 $db->query("INSERT INTO tbl_personne(code,nom,prenom,sexe,email,age)values('$code','$nom','$prenom','$sexe','$mail','$age')") ;
 }
 else if($_POST['acte']==0&& $idp!=0){
$idp=$_POST['idp'];
$sql=$db->prepare("UPDATE tbl_personne set code='$code',nom='$nom',prenom='$prenom',sexe='$sexe',email='$mail',age=$age where id=$idp"); 
$sql->execute();
}
  else if($_POST['acte']==1){
    $idp=$_POST['idp'];
    $db->query("DELETE from tbl_personne  where id=$idp"); 
   
}
?>