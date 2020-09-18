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
    
   $name= $_POST['u_name'];
   $ph= $_POST['ph'];
   $password= $_POST['pass'];
   $securepass= crypt($password,$ph);
   $uid= uniqid($name);
   $sql= "INSERT INTO `girlscript`.`users` (`user_id`, `password`, `name`, `phone`) VALUES ('$uid', '$securepass', '$name', '$ph');";
   if($con->query($sql) == true){
    echo "<h3 style='margin-left:400px;margin-top:20px;color:green' >You have successfully registered<a href='Login.php'>Go back to Login Page</a></h3>";
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
width:60%;
margin:auto;
margin-top:5%;}
* {box-sizing: border-box;}

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
</style>
</head>
<body>
<div id="form-head">
    <img src="logo.png" id="form-img"></img>
    <h2 style="text-align: center; font-size:34px; color:#eb7535;margin:2%;">Signup/ साइन अप करें</h2>
</div> 

<div class="container">
  <form method="post">
    <label for="u_name">Name</label>
    <input type="text" id="u_name" name="u_name" placeholder="Your name">
    <br>
    <label for="password">Password</label>
    <input type="password" id="password" name="pass" placeholder="Your password">
    <br>
    
    <label for="lname">Phone Number</label>
    <input type="tel" id="pnumber" name="ph" placeholder="Your phone number">

    <br>
    <input type="submit" name="submit" action="submit">
  </form>
</div>

</body>
</html>