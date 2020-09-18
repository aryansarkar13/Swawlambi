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
    
   $name= $_POST['j_name'];
   $description= $_POST['desc'];
   $location= $_POST['loc'];
   $pay=$_POST['pay'];
   $skills=$_POST['skills'];
   $age= $_POST['age'];
   $uid= uniqid($name);
   $id= $_SESSION['id'];
   
   $emp=$_SESSION['username'];
   $sql= "INSERT INTO `girlscript`.`new_j_listings` (`name`, `description`, `job_id`, `location`,`pay`,`skills`,`age_group`,`employer`) VALUES ('$name', '$description','$uid, '$location', '$pay','$skills','$age','$emp');";
   if($con->query($sql) == true){
    echo "<h3 style='margin-left:400px;margin-top:20px;color:green' >You have successfully posted a job</h3>";
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
body {font-family: Arial, Helvetica, sans-serif; margin-bottom:4%;}
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
    <h2 style="text-align: center; font-size:34px; color:#eb7535;margin:2%;">Post a Job/ कर्मचारी खोजें </h2>
</div> 
<div class="container">
  <form method="post">
    <label for="jname">Job Name</label>
    <input type="text" id="jname" name="j_name" placeholder="Job name">
    <br>
    <label for="jobDescription">Job description</label>
    <textarea id="jobDescription" name="desc" placeholder="Job description..." style="height:100px"></textarea>
    <br>
    
    <label for="age">Age</label>
    <input type="tel" id="age" name="age" placeholder="Enter Age">
    
    <br>
    <label for="skills">Skills Required</label>
    <input type="text" id="skills" name="skills" placeholder="Enter skills required">
    <br>
    <label for="eName">Employer </label>
    <input type="text" id="eName" name="eName" placeholder="Employer's Name">
    <br>
    <label for="city">City</label>
    <input type="text" id="city" name="loc" placeholder="Enter city">
    <br>
    <label for="pnumber">Phone Number</label>
    <input type="tel" id="pnumber" name="ph" placeholder="Your phone number">
    <br>
    <input type="submit" name="submit" action="submit">
  </form>
</div>
</div>
</body>
</html>