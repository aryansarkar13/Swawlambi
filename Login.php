<?php 
session_start();
  
if(isset($_SESSION['username'])){
  header('loaction:./user_dashboard.php');
}
    if(isset($_POST['submit'])){
      
      $server= "localhost";
   $username="root";
   $password="";
   $con= mysqli_connect($server,$username,$password,'girlscript');
   if(!$con){
    die("Connection not made due to".mqsqli_connect_error());
}



      $ph=$_POST['u_ph'];
    $password=$_POST['pass'];
    $password1= crypt($password,$ph);
   
   
    $query = "SELECT * FROM users where phone='$ph'";
    $result = $con->query($query);
   
  
   $row= $result->fetch_array();
   if($row['phone']!= $ph){
     
     echo "<p style='color:red'>No such user</p>";
   }
   else{
     if($row['password']== $password1 ){
       
       header('location: ./home1.php');
       $_SESSION['username']= $row['name'];
       $_SESSION['id']=$row['user_id'];
     }
     else{
       
       echo "<h3>Incorrect Password</h3>";
     }
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
    <h2 style="text-align: center; font-size:34px; color:#eb7535;margin:2%;">Login/ लोग इन</h2>
</div> 

<div class="container">
  <form method="post">
  <label for="lname">Phone Number</label>
    <input type="tel" id="pnumber" name="u_ph" placeholder="Your phone number">

    <br>
    
    <label for="lname">Password</label>
    <input type="password" id="password" name="pass" placeholder="Your password">
    <br>
    
    
    <input type="submit" name="submit" action="submit">
  </form>
</div>

</body>
</html>