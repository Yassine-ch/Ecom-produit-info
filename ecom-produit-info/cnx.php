<?php
include("functions/functions.php");
include("includes/db.php");
include_once 'includes/db_ad.php';
session_start();
if(isset($_SESSION['client'])!="")
{
	header("Location: allproducts.php");
}

if(isset($_POST['btn-login']))
{
	$login_adm = mysql_real_escape_string($_POST['login']);
	$mdp_adm = mysql_real_escape_string($_POST['mdp']);
	
	
	
	$res=mysql_query("SELECT * FROM client WHERE nom_utul_clt='$login_adm'");
	$row=mysql_fetch_array($res);
	
	$count = mysql_num_rows($res); // if uname/pass correct it returns must be 1 row
	
	if($count != 0 && $row['mdp_clt']==($mdp_adm))
	{
		$_SESSION['client'] = $row['id_clt'];
		header("Location: allproducts.php");
	}
	else
	{
		?>
        <script>alert('Le login ou le mot de passe et érroné');</script>
        <?php
	}
	
}
if(isset($_POST['btn-inscrit']))
{
    $nomeleve =$_POST['nomeleve']; 
    $prenomeleve =$_POST['prenomeleve'];
    $sexe =$_POST['sexe']; 
    $lieudenaissance =$_POST['lieudenaissance']; 
    $datedenaissance =$_POST['datedenaissance']; 
    $niveaudeclasse =$_POST['niveaudeclasse']; 
    $email =$_POST['email']; 
	$login =$_POST['login']; 
    $mdp =$_POST['mdp']; 

$req ='INSERT INTO `client` VALUES ("","'.$nomeleve.'","'.$prenomeleve.'","'.$lieudenaissance.'","'.$email.'","'.$sexe.'","'.$niveaudeclasse.'","'.$datedenaissance.'","'.$login.'","'.$mdp.'")';
$exec=mysql_query($req);
}

?>
<?php



cart();
?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<?php

include("header.php");

?>


    <!-- end of menu tab -->
    <div class="crumb_navigation"> Navigation: <span class="current">Acceuil</span>
    

    <?php
    
    if(isset($_GET['cat'])){
    
    $get_id = $_GET['cat'];
    
    $query = "select cat_title from categories where cat_id='$get_id'";
    $run_query = mysqli_query($con,$query);
    
    $row = mysqli_fetch_array($run_query);
    
    $cat = $row['cat_title'];
    
    echo"<span class=current>>$cat</span>";
    
    }
    
    ?>


 </div>
    <div class="left_content">
      <div class="title_box">Categories</div>
      <ul class="left_menu">
        
 <?php 
     getcats(); 
     

 ?>
        
      </ul>
     
<div class="title_box">Marques</div>
      <ul class="left_menu">
        

    <?php  getbrands();  ?>


 
</ul>
 <br>
 <br>

     
      <div class="banner_adds"> <a href="#"></a> </div>
      
           <br>
 <br>
 <br></div>
    <!-- end of left content -->
    <div class="center_content">
      <div class="center_title_bar">Inscription </div>


   <form method="post" name="inscrit">

	 <div class="group">
					<label for="user" class="label">Date de naissance</label>
					<input id="user" type="date" class="input" name="datedenaissance">
				</div>
				<div class="group">
					<label for="pass" class="label"><br />
					
					Adresse</label>
					<input id="pass" type="text" class="input" name="lieudenaissance">
				</div>
				<div class="group">
					<label for="pass" class="label"><br />
					sexe</label>
					<input id="pass" type="text" class="input" name="sexe">
				</div>
				<div class="group">
					<label for="pass" class="label"><br />
					Prenom</label>
					<input id="pass" type="text" class="input" name="prenomeleve">
				</div>
				<div class="group">
					<label for="pass" class="label"><br />
					Nom</label>
					<input id="pass" type="text" class="input" name="nomeleve">
				</div>
				
				<div class="group">
					<label for="pass" class="label"><br />
					Tel</label>
					ephone 
					<input id="pass" type="text" class="input" name="niveaudeclasse">
				</div>
				<div class="group">
					<label for="pass" class="label"><br />
					Email</label>
					<input id="pass" type="text" class="input" name="email">
				</div>
				<div class="group">
					<label for="user" class="label"><br />
					Login </label>
					<input id="user" type="text" class="input" name="login">
				</div>
				<div class="group">
					<label for="pass" class="label"><br />
					Mot de passe</label>
					<input id="pass" type="password" class="input" data-type="password" name="mdp">
				</div>
				
				<div class="group">
					<input type="submit" class="button" value="S'inscrir" name="btn-inscrit">
				</div>
</form>


 <div class="center_title_bar"></div>
 </div>
  
 
  
  
 
    <!-- end of center content -->
<div class="right_content">
      <div class="shopping_cart">
             <div class="center_title_bar"></div>

      	<form method="post" name="login">

		  <div class="group">
					<label for="user" class="label">Nomd'utilisateur</label>
			  <p>
				  <input id="user" type="text" class="input" name="login">
		    </p>
			  <p>&nbsp;    </p>
		  </div>
				<div class="group">
					<label for="pass" class="label">Mot de passe</label>
					<p>
					  <input id="pass" type="password" class="input" data-type="password" name="mdp">
				  </p>
					<p>&nbsp;    </p>
				</div>			
				<div class="group">
					<input type="submit" class="button" value="Connexion" name="btn-login">
				</div>
		</form>
      </div>

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
