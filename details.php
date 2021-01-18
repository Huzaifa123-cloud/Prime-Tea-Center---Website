<?php require_once("config.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PrimeTea - Details</title>
     <!--CUSTOM CSS -->
        
        <link rel="stylesheet" href="style.css">
</head>
<body >
    <!--<h1 class="title-header2">Products Details Page</h1>-->
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
     <!--- Row for Image and Short Description--->
        <?php 

            $query = query("select * from products where product_id = "  . escape_string($_GET['id']) . " ");
            confirm($query);
            while ($row = fetch_array($query)):
                
                

            ?>
        
        <div class="row">
        <div class="column">
              <img src="images/CTC NORMAL.jpg" style="width:100%;" class="image-grid"/>
            </div>
            <div class="column">
              <h2 class="product-title"><?php echo $row['product_title']; ?></h2>
              <p class="long-description">Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                  Corrupti, commodi doloremque totam, nobis quas ab hic esse similique ea ipsum molestiae vero! 
                  Autem perferendis velit molestias cupiditate laborum. Doloribus, perspiciatis!</p>
                <p>Price: </p>
                    <br>
                <button class="btn-contact">Contact</button>
                    <br></br>
                <h4>Flavour</h4>
                    <br>
                <p>Enjoy the refreshing flavour of new shoots ideal for a present or for guests.</p>
                    <br>
                    <img src="images/tea_flavor.jpg">
            </div>
          </div>
          <?php endwhile; ?>
     
      
        
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
    
</body>
</html>