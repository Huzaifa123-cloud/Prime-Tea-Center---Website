<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PrimeTea - Contact</title>
    <!-- CSS Custom links-->
    <link href="style.css" rel="stylesheet">
    <link href="style2.css" rel="stylesheet">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   
</head>
    
<body>
        <div id="mainbox" onclick="openFunction()">&#9776; Open</div>
          <div id="menu" class="sidemenu">
            <a href="index.html">Home</a>
            <a href="products.php">Products</a>
            <a href="#">About Us</a>
            <a href="contactus.php">Contact Us</a>
            <a href="shopinfo.html">Shop Information</a>
            <a href="#" class="closebtn" onclick="closeFunction()">&times;</a>
          </div>
            <br><br>
          <h3>Contact</h3>
          <br><br>
        <div class="container">
        <form action="/action_page.php">
            <label for="fname">Your Name</label>
            <input type="text" id="fname" name="firstname" placeholder="Your name.." required>

            <label for="lname">Email</label>
            <input type="text" id="lname" name="lastname" placeholder="Your email.." required>

            <label for="subject">Inquiry</label>
            <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px" required></textarea>

            <input type="submit" value="Submit">
              
        </form>
        </div>
         <!--- Footer breadcrumbs --->
          <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active"><a href="contactus.php">Contact Us</a></li>
        </ol>

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