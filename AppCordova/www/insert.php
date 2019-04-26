<?php
 include "db.php";
 if(isset($_POST['insert']))
 {
 $id=$_POST['id'];
 $Nama=$_POST['Nama'];
 $Nim=$_POST['Nim'];
 $Fakultas=$_POST['Fakultas'];
 $Progdi=$_POST['Progdi'];

 $q=mysqli_query($con,"INSERT INTO `aktif` (`id`,`Nama`,`Nim`,`Fakultas`,`Progdi`) VALUES ('$id','$Nama','$Nim','$Fakultas','$Progdi')");
 if($q)
  echo "success";
 else
  echo "error";
 }
 ?>