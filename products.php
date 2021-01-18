<?php require_once("config.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PrimeTea - Products</title>
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  
    <!--CUSTOM CSS -->
    <link href="style.css" rel="stylesheet">
    <link href="style2.css" rel="stylesheet">
</head>
<body>
  
  <h1 class="title-header">Products</h1>
    <!--- Nav links --->
    <div id="mainbox" onclick="openFunction()">&#9776; Open</div>
    <div id="menu" class="sidemenu">
            <a href="index.html">Home</a>
            <a href="products.php">Products</a>
            <a href="#">About Us</a>
            <a href="contactus.php">Contact Us</a>
            <a href="shopinfo.html">Shop Information</a>
            <a href="#" class="closebtn" onclick="closeFunction()">&times;</a>
    </div>
   
    <div class="wrapper">
      <div class="img-area">
       <!--- Products List COLOUMN 1 --->
       <?php get_products(); ?>
        
        <!--- Products List COLOUMN 2 --->
        
        <!--- Products List COLOUMN 3 --->
        
        <!--- Products List COLOUMN 4 --->
        
        <!--- Products List COLOUMN 5 --->
        
        <!--- Products List COLOUMN 6 --->
        
        <!--- Products List COLOUMN 7 --->
         <!--- Row ends here --->
      </div>
    </div>
     <!--- Footer breadcrumbs --->
     <ol class="breadcrumb">
       <li class="breadcrumb-item"><a href="index.html">Home</a></li>
       <li class="breadcrumb-item active"><a href="products.php">Products</a></li>
     </ol>
     <!--- Footer --->
     <div class="footer">
       
     </div>
   <script type="text/javascript">
    function openFunction() {
        document.getElementById("menu").style.width="300px";
        document.getElementById("mainbox").style.marginLeft="300px";
    }
    function closeFunction() {
        document.getElementById("menu").style.width="0px";
        document.getElementById("mainbox").style.marginLeft="0px";
        document.getElementById("mainbox").innerHTML="&#9776; Open";
    }
</script>
<script type="text/javascript" src="script.js"></script>
</body>
</html>