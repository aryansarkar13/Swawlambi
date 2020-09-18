<?php
session_start();
$id= $_SESSION['id'];
$name= $_SESSION['username'];
$server= "localhost";
   $username="root";
   $password="";
   $con= mysqli_connect($server,$username,$password,'girlscript');
  $query= "SELECT * from users where user_id='$id'";
  $result= $con->query($query);
  $record= $result->fetch_array();
  $ph= $record['phone'];
  $con->close();

?>
<html>
<head>
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.card {
   border: 2px solid black;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin:auto;
    padding:3% 3% 1% 3%;
  text-align: center;
  font-family: arial;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 2%;
  margin:1%;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

button:hover {
  opacity: 0.7;
}
h2{
    margin:0% 3% 5% 3%;
}
h1{
    margin-top:12%;
    margin-bottom:3%;
    text-align:center;
    color:grey;
}
#active{
    color:white;
    background:black;
}
</style>
</head>
<body>

<header id="header">

  <div id="brand">
     <img id="header-img" src="logo.png" href="Home.php" href="Home.php"></img>
     <a href="Home.php" style="text-decoration:none; color:#e8270b;"><h1 style="color:#e8270b; font-family: 'Dancing Script', cursive;">Swawlambi</h1></a>
  
  </div>
  <nav id="nav-bar">
    <a class="nav-link" href="jobportal.php">Job Portal/ नौकरी ढूंढे</a>
    <a class="nav-link" href="Profile.php" id="active">Profile/प्रोफ़ाइल</a>
  </nav>
</header>
<h1>Your profile/ आपकी प्रोफाइल</h1>
<div class="card">
  
  <h2>Name:- <?php echo $name?> </h2>
  <h2>Phone number : <?php  echo $ph?></h2>
  
  <p>
      <a href="PostProduct.php"><button>Sell a Product/ अपना उत्पाद बेंचे</button></a>
      <a href="PostJob.php"><button>Post a Job/ कर्मचारी खोजें </button></a>
      <a href="jobportal.php"><button href="jobportal.php">Find a Job/ नौकरी ढूंढे </button></a>
</p>
</div>
</body>
<html>