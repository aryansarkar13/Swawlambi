<html>
<head>
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
    <a class="nav-link" href="ShoppingCart.php">Shopping cart/ आपकी खरीदारी</a>
    <a class="nav-link" href="Login.php">Login/लॉग इन करें</a>
    <a class="nav-link" href="signup.php">Signup/साइन अप करें</a>
    <a class="nav-link" href="Resources.html">Resources/ साधन</a>
  </nav>
</header>
<a href="jobportal.php"><img src="portal.jpg" id="portal-img" ></img></a>
<h1 id="home-title">Buy Products</h1>
<hr></hr>
<div id="home-content">
<input type="text" id="search-product" placeholder="Search products/ उत्पाद खोजें "></input>
</div>
<div id="content-home">
<?php
        $server= "localhost";
        $username="root";
        $password="";
        $con= mysqli_connect($server,$username,$password,'girlscript');
        if(!$con){
         die("Connection not made due to".mqsqli_connect_error());
        }
    
        $query = "SELECT * FROM new_p_listing ";
        $result = $con->query($query);
    
        while($row= $result->fetch_array()){
            $name=$row['name'];$desc= $row['description'];$seller=$row['seller'];$price=$row['price'];
                echo "
                <div id='job-results'>
                <div class='product-card'>
                   <img src='assets/images/product1.jpg' class='product-img'></img>
                    <a href='product_description_page.php' style='text-decoration:none;color:black;'>
                    <div class='product-content'>
                        <h1 class='job-name'>$name</h1>
                        <h3>$desc</h3>
                        <h2>$price</h2>
                        <h2>$seller</h2>
                    </div></a>
                </div>
            </div>
                
                ";
        
        }
?>
</div>
<!-- <div id='job-results'>
    <div class='product-card'>
       <img src='assets/images/product1.jpg' class='product-img'></img>
        <a href='product_description_page.php' style='text-decoration:none;color:black;'>
        <div class='product-content'>
            <h1 class='job-name'>Product Name</h1>
            <h3>Description</h3>
            <h2>Price</h2>
            <h2>Seller</h2>
        </div></a>
    </div>
</div>
<div id="job-results">
    <div class="product-card">
        <img src="assets/images/product1.jpg" class="product-img"></img>
        <a href="product_description_page.php" style="text-decoration:none;color:black;">
        <div class="product-content">
            <h1 class="job-name">Product Name</h1>
            <h3>Description</h3>
            <h2>Price</h2>
            <h2>Seller</h2>
        </div></a>
    </div>
</div>
<div id="job-results">
    <div class="product-card">
        <img src="assets/images/product1.jpg" class="product-img"></img>
        <a href="product_description_page.php" style="text-decoration:none;color:black;">
        <div class="product-content">
            <h1 class="job-name">Product Name</h1>
            <h3>Description</h3>
            <h2>Price</h2>
            <h2>Seller</h2>
        </div></a>
    </div>
</div>
<div id="job-results">
    <div class="product-card">
        <img src="assets/images/product1.jpg" class="product-img"></img>
        <a href="product_description_page.php" style="text-decoration:none;color:black;">
        <div class="product-content">
            <h1 class="job-name">Product Name</h1>
            <h3>Description</h3>
            <h2>Price</h2>
            <h2>Seller</h2>
        </div></a>
    </div>
</div>
<div id="job-results">
    <div class="product-card">
        <img src="assets/images/product1.jpg" class="product-img"></img>
        <a href="product_description_page.php" style="text-decoration:none;color:black;">
        <div class="product-content">
            <h1 class="job-name">Product Name</h1>
            <h3>Description</h3>
            <h2>Price</h2>
            <h2>Seller</h2>
        </div></a>
    </div> -->
<!-- </div> -->
</body>
<html>
