<?php
include('db.php');
if($_POST['view']){?>
<table class="table table-stripped table-bordered" id="example">
<thead><th hidden></th><th>Code</th><th>nom</th><th>prenom</th><th>sexe</th><th>Email</th><th>age</th><th></th></thead>
<tbody>
<?php
$sql=$db->query('SELECT * from tbl_personne');
while ($row=$sql->fetch()){?>
<tr onclick="getedatarow('<?=$row['code']?>')">
<td hidden><?=$row['id']?></td>
<td><?=$row['code']?></td>
<td><?=$row['nom']?></td>
<td><?=$row['prenom']?></td>
<td><?=$row['sexe']?></td>
<td><?=$row['email']?></td>
<td><?=$row['age']?></td>
<td><i class="fa fa-pencil fa-fw"></i></td>
</tr>

<?php } ?>
</tbody>
</table>
<?php } ?>
<script>
   $('#example').DataTable();
</script>