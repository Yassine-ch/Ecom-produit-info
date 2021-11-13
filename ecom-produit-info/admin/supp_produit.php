<?php
session_start();
include_once 'db.php';
$id=$_GET['id'];
$sql="Delete from produits WHERE `produits`.`prd_id` =$id  ";
$result = mysql_query($sql)or die(mysql_error());
?>
	<script language="JavaScript">
	alert("produit supprimé");
	window.location.replace("produit.php");
	</script>
