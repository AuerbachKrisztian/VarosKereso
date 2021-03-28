<?php
require('kapcsolat.php');
$id=$_REQUEST['ID'];
$query = "DELETE FROM varos WHERE ID=$id"; 
$eredmeny = mysqli_query($con,$query) or die ( mysqli_error());
?>

