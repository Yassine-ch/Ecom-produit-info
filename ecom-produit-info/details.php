
<?php
include("functions/functions.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">


<?php

include("header.php");

cart();


?>




    <!-- end of menu tab -->
    <div class="crumb_navigation"> Navigation: <a href="#"><span class="current">Acceuil</span></a> </div>
    <div class="left_content">
   


   

<br>
<br><br><br>

 <div class="title_box"> Produits </div>
     

 <?php

special();


?>
        
        <br><br><br><br>
      <div class="banner_adds"> <a href="details.php?pro_id=20"></a> </div>
    </div>
    
    
    
    <!-- end of left content -->
    <div class="center_content">
     
      
<?php

details();

?>





      <div class="center_title_bar"></div>
    


  </div>
    <!-- end of center content -->
    <div class="right_content">
      <div class="shopping_cart">
        <div class="cart_title"><i>Bienvenu</i><br>Panier</div>
        <div class="cart_details"><font color="blue"><?php total_items(); ?></font>&nbsp;Produit(s)<br />
          <span class="border_cart"></span> Total: <span class="price"><?php total_price(); ?></span> </div>
        <div class="cart_icon"><a href="cart.php" title="header=[Checkout] body=[&nbsp;] fade=[on]"><img src="images/shoppingcart.png" alt="" width="48" height="48" border="0" /></a></div>
      </div>
      
      <br><br><br><br>
      <br />
      <br /><br /><br />
     
     
  <div class="banner_adds"> <a href="details.php?pro_id=22"></a> </div>
    </div>
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
