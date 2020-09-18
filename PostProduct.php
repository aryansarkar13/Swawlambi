<?php 

session_start();
if(isset($_POST['submit'])){
    
    
    
    $server= "localhost";
    $username="root";
    $password="";
    $con= mysqli_connect($server,$username,$password);
    if(!$con){
        die("Connection not made due to".mqsqli_connect_error());
    }
    
   $name= $_POST['p_name'];
   $price= $_POST['price'];
   $descp= $_POST['p_desc'];
   $sid= $_SESSION['id'];
   $sname= $_SESSION['username'];
   
   $uid= uniqid($name);
   $sql= "INSERT INTO `girlscript`.`new_p_listing` (`name`, `description`, `seller`,`product_id`, `price`,`posted_on`) VALUES ('$name', '$descp', '$sname','$uid', '$price',current_timestamp());";
   if($con->query($sql) == true){
    echo "<h3 style='margin-left:400px;margin-top:20px;color:green' >You have successfully added your product</h3>";
}
else{
   echo "ERROR: $con->error";
}
$con->close();
  
   

}


?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;
margin-bottom:4%;}
* {box-sizing: border-box;}
#rest{
    width:60%;
margin:auto;
margin-top:10%;
}
input[type=text], select, textarea {
  width: 80%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}
input[type=password], select, textarea {
  width: 80%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=tel], select, textarea {
  width: 80%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}
input[type=submit] {
  background-color: #eb7535;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

#form-img{
    max-width:10%;
    max-height:10%;
    margin:2%;
}
#form-head{
    display:flex;
    justify-content:flex-start;
    align-items:center;
}
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  clear: both;
}
.container input{
  width: 100%;
  clear: both;

}
.container textarea{
  width: 100%;
  clear: both;

}
</style>
 <link rel="stylesheet" href="style.css">
 <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&display=swap" rel="stylesheet">
</head>
<body>
<header id="header">

  <div id="brand">
     <img id="header-img" src="logo.png" href="Home.php" href="Home.php"></img>
     <a href="Home.php" style="text-decoration:none; color:#e8270b;"><h1 style="font-family: 'Dancing Script', cursive;">Swawlambi</h1></a>
  
  </div>
  <nav id="nav-bar">
    <a class="nav-link" href="Profile.php">Profile/प्रोफ़ाइल</a>
  </nav>
</header>
<div id="rest">
<div id="form-head">
    <img src="logo.png" id="form-img"></img>
    <h2 style="text-align: center; font-size:34px; color:#eb7535;margin:2%;">Sell a Product/ अपना उत्पाद बेंचे</h2>
</div> 
<div class="container">
  <form method="post">
    <label for="fname">Product Name</label>
    <input type="text" id="fname" name="p_name" placeholder="Product name">
    <br>
    <label for="subject">Description</label>
    <textarea id="subject" name="p_desc" placeholder="Write something.." style="height:200px"></textarea>
    <br>
    
    <label for="price">Price</label>
    <input type="tel" id="price" name="price" placeholder="Product price">
    
    <br>
    
    <input type="submit" name="submit" action="submit">
  </form>
</div>
</div>
</body>
</html>