
<?php
  include("includes/db.php");
   ?>





<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>





<title>Electronix Store - Admin Area</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<link rel="stylesheet" type="text/css" href="style.css" />
<!--[if IE 6]>
<link rel="stylesheet" type="text/css" href="iecss.css" />
<![endif]-->
<script type="text/javascript" src="js/boxOver.js"></script>


<style type="text/css">
.style1 {
	width: 585px;
	float: left;
	padding: 5px 10px;
	text-align: center;
}
.style2 {
	width: 520px;
	height: 33px;
	float: left;
	padding: 0 0 0 40px;
	margin: 0 0 0 12px;
	_margin: 0 0 0 6px;
	line-height: 33px;
	font-size: 12px;
	color: #847676;
	font-weight: bold;
	background: url(images/bar_bg.gif) no-repeat center;
	text-align: center;
}
.style3 {
	width: 355px;
	float: left;
	padding: 0px 0 0 75px;
	text-align: left;
}
</style>


</head>
<body>

<div id="main_container">
  <div id="header">
<?php

include("header.php");

?>    <!-- end of oferte_content-->
  </div>
  <div id="main_content">
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <!-- end of menu tab -->
    <!-- end of left content -->
    
    <form action="" method="POST" enctype="multipart/form-data">
    <div class="style1">
      <div class="style2">Liste des  produits </div>
      <div class="prod_box_big">
        <div class="top_prod_box_big"></div>
        <div class="center_prod_box_big">
        
       <table>
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Catégorie</th>
                          <th>Marque</th>
                          <th>Titre</th>
                          <th>Prix</th>
                          <th>Photo</th>
                          <th>discription</th>
                          <th class="action">Supprimer</th>
                        </tr>
                      </thead>
                      <?php
					  include_once 'db.php';
$query = "SELECT * FROM  produits"; 
$result = mysql_query($query) or die('Erreur SQL : '.mysql_error());  
 while ($row = mysql_fetch_assoc($result)){ 
 ?>
                      <tbody>
                        <tr class="row0">
                          <td><?php echo $row['prd_id']; ?></td>
                          <td><?php echo $row['prd_cat']; ?></td>
                          <td><?php echo $row['prd_brand']; ?></td>
                          <td><?php echo $row['prd_title']; ?></td>
                          <td><?php echo $row['prd_price']; ?></td>
                          <td><img src="product_images/<?php  echo $row['prd_img'];?>" alt="a" width="243" height="182"/></td>
                          <td><?php echo $row['prd_desc']; ?></td>
                          <td><a href='supp_produit.php?id=<?php echo $row['prd_id']; ?>' title="">Supprimer</a> <br />
                            <a href='modif_prod.php?id=<?php echo $row['prd_id']; ?> ' title=""></a></td>
                        </tr>
                      </tbody>
                      <?php }?>
                    </table>
            
      
            
    <!-- end of center content -->
    <!-- end of right content -->
  </div>
  <!-- end of main content -->
  <div class="footer">
    <div class="left_footer"></div>
    <div class="center_footer"></div>
    </div>
</div>
<!-- end of main_container -->
</body>
</html>


<?php


if(isset($_POST['index'])){

    //getting text data
   $product_title = $_POST['product_title'];
   $product_cat = $_POST['product_cat'];
   $product_brand = $_POST['product_brand'];
   $product_price = $_POST['product_price'];
   $product_desc = $_POST['product_desc'];
   $product_keywords = $_POST['product_keywords'];
   
    //getting image data
   $product_image = $_FILES['product_image']['name'];
   $product_image_tmp = $_FILES['product_image']['tmp_name'];
   
   move_uploaded_file($product_image_tmp,"product_images/$product_image");
   
   $insert_product = "insert into produits (prd_cat,prd_brand,prd_title,prd_price,prd_desc,prd_img,prd_keyword) values ('$product_cat','$product_brand','$product_title','$product_price','$product_desc','$product_image','$product_keywords')";
   
   $run_product = mysqli_query($con,$insert_product);
   
   if($run_product){
   
   echo"<script>alert('Product Has been inserted')</script>";
   echo"<script>window.open('index.php?tn=$r','_self')</script>";
   }


}


?>