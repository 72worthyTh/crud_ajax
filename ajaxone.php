<?php
include('db.php');
if($_POST['code']){
    $code=$_POST['code'];
$sql=$db->query("SELECT * from tbl_personne where code='$code'");
$row=$sql->fetch();
if($sql->rowCount()==1){
echo $row['id'].'*#€%&'.$row['code'].'*#€%&'.$row['nom'].'*#€%&'.$row['prenom'].'*#€%&'.$row['email'].'*#€%&'.$row['sexe'].'*#€%&'.$row['age'];
}
else{
    echo '1';
}
}