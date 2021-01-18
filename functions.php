<?php 

// helper functions
    function redirect($location) {
        header("Location: $lcoation");
    }

    function query($sql) {

        global $connection;
        return mysqli_query($connection, $sql);

    }
    
    function confirm($result) {
        
        global $connection;
        if(!$result) {
            die ("QUERY FAILED" . mysqli_error($connection));
        }
    }
    function escape_string($string) {
        global $connection;
        return mysqli_real_escape_string($connection, $string);
    }
    function fetch_array($result) {
        return mysqli_fetch_array($result);
    }
/************************ FRONT END FUNCTIONS *******************************/

// get products


function get_products() {
    // heredoc
    $query = query("select * from products");
    confirm($query);
    
    while ($row = fetch_array($query)) {
     $product = <<<DELIMETER
     
     <div class="single-img">
     <div class="img-content">
       <div class="front" style="background-image: url(images/CTC\ NORMAL.jpg);">
           <div class="inner">
             <h5>{$row['product_title']}</h5>
             <span>{$row['product_short_description']}</span>
           </div>
       </div>
       <div class="back">
         <div class="inner">
           <a href="details.php?id={$row['product_id']}" class="btn btn-primary">View Details</a>
         </div>
       </div>
     </div>
   </div> 
        
    
DELIMETER;
    
    echo $product;
    }
    }




  
?>