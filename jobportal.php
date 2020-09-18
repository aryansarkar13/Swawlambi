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
    <a class="nav-link" href="jobportal.php" id="active">Job Portal/ नौकरी ढूंढे</a>
    <a class="nav-link" href="Profile.php">Profile/प्रोफ़ाइल</a>
  </nav>
</header>
<div id="job-content">
<input type="text" placeholder="Filter by location/ जगह से ढूंढें" id="location"></input>
<input type="text" id="search" placeholder="Search Jobs/ नौकरी ढूंढे "></input>
</div>
<div id="content">
<?php
    $server= "localhost";
    $username="root";
    $password="";
    $con= mysqli_connect($server,$username,$password,'girlscript');
    if(!$con){
     die("Connection not made due to".mqsqli_connect_error());
    }

    $query = "SELECT * FROM new_j_listings ";
    $result = $con->query($query);
    

    
        while($row= $result->fetch_array()){
            
            $name=$row['name'];$desc= $row['description'];$location=$row['location'];$pay=$row['pay'];$skills=$row['skills'];$age=$row['age_group'];$emp=$row['employer'];
              echo "
              <div id='job-results'>
    <div class='job-card'>
    <h1 class='job-name'>$name</h1>
    <h2>$location</h2>
    <h2>$skills</h2>
    <h2>$emp</h2>
    </div>
</div>
              ";
        }
?>
<!-- <div id='job-results'>
    <div class='job-card'>
    <h1 class='job-name'>Job Name</h1>
    <h2>Job location</h2>
    <h2>Skils</h2>
    <h2>Employer</h2>
    </div>
</div>
<div id="job-results">
    <div class="job-card">
    <h1 class="job-name">Job Name</h1>
    <h2>Job location</h2>
    <h2>Skils</h2>
    <h2>Employer</h2>
    </div>
</div>
<div id="job-results">
    <div class="job-card">
    <h1 class="job-name">Job Name</h1>
    <h2>Job location</h2>
    <h2>Skils</h2>
    <h2>Employer</h2>
    </div>
</div> -->
</div>
</body>
<html>