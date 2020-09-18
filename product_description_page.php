<?php
  session_start();
  $pid = $_GET['id'];
            
            $uid= $_SESSION['id'];
            $name= $_SESSION['username'];
  
  $server= "localhost";
   $username="root";
   $password="";
   $con= mysqli_connect($server,$username,$password,'girlscript');
   if(!$con){
    die("Connection not made due to".mqsqli_connect_error());
}
$query= "SELECT * from new_p_listing where product_id='$pid'";
$result= $con->query($query);
if($result==true)  echo $pid;
$record= $result->fetch_array();
$p_name=$record['name'];
$desc= $record['description'];
$seller= $record['seller'];
$price= $record['price'];
$q2= "SELECT * from users where name='$seller'";
$result= $con->query($q2);
$record= $result->fetch_array();
$sp= $record['phone'];
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Product Description Page</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">

<style>
    body, html {
      height: 100%;
      font-family: "Inconsolata", sans-serif;
    }
    
    .bgimg {
      background-position: center;
      background-size: cover;
      background-image: url("prod_banner.jpeg");
      min-height: 75%;
    }
    
    .menu {
      display: none;
    }
    .button {
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.button1 {background-color:black;} 
    </style>
        
    </head>
    <body>


        <!-- Header with image -->
<header class="bgimg w3-display-container w3-grayscale-min" id="home">
    <div class="w3-display-bottomleft w3-center w3-padding-large w3-hide-small">
      
    </div>
    <div class="w3-display-middle w3-center">
     
    </div>
    <div class="w3-display-bottomright w3-center w3-padding-large">
      
    </div>
  </header>
       
  <!-- Add a background color and large text to the whole page -->
<div class="w3-sand w3-grayscale w3-large">

    <!-- About Container -->
    <div class="w3-container" id="about">
       
      <div class="w3-content" style="max-width:700px">
        <h5 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">ABOUT THE PRODUCT</span></h5>
        <p><strong>Product Name:</strong> <?php echo $p_name?></p>
        <p><?php echo $desc?></p>
        
       
        <img src="Women-Empowerment.jpg" style="width:100%;max-width:1000px" class="w3-margin-top">
        
        <p><strong>Seller:  </strong> <?php echo $seller?></p>
        <p><strong>Price:  </strong> <?php echo $price?> </p>
        <p><strong>Contact:  </strong> <?php echo $sp?></p>

        <button class="button button1">Add to Cart</button>
      </div>
      
    </div>
    
    <div class="w3-container w3-black w3-center w3-opacity w3-padding-64">
        <h1 class="w3-margin w3-xlarge">Find the right Product</h1>
        <h1 class="w3-margin w3-xlarge">सही वस्तु पाओ</h1>
    </div>
   
        <script src="" async defer></script>
    </body>
</html>