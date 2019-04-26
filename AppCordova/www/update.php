<?php
 include "db.php";
 if(isset($_POST['update']))
 {
 $id=$_POST['id'];
 $Nama=$_POST['Nama'];
 $Nim=$_POST['Nim'];
 $Fakultas=$_POST['Fakultas'];
 $Progdi=$_POST['Progdi'];

 $q=mysqli_query($con,"UPDATE `aktif` SET `Nama`='$Nama',`Nim`='$Nim',`Fakultas`='$Fakultas',`Progdi`='$Progdi' where `id`='$id'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>