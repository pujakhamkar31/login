<?php
include('session.php');
?>
<html>
<head>
    <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1">
<title>Your Home Page</title>
<link href="style.css" rel="stylesheet" type="text/css">
     <!link rel="stylesheet" type="text/css" href="form.css">
</head>
<body>

<div id="profile">
<b id="welcome">Welcome : : <i><?php echo $login_session; ?></i></b><b id="logout"><a href="logout.php">Log Out</a></b></div>
<div><br><br></div>


<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$a=date($_POST['to']);
$to_date = date("Y-m-d", strtotime($a));
$b=date($_POST['form']);
$from_date = date("Y-m-d", strtotime($b));


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testdata";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM emp WHERE date BETWEEN '" . $to_date . "' AND  '" . $from_date . "'ORDER by id DESC";
//$sql = "SELECT ID,NAME,JOB,SAL,date FROM emp";
$result = $conn->query($sql);


     // output data of each row
     echo '<div class="container"><table border="1" width="60%" ><tr><th>ID</th><th>NAME</th><th>JOB</th><th>SAL</th><th>DATE</th></div>';
     while($row = $result->fetch_assoc()) {
         echo "<tr><td>". $row["ID"]. "</td><td>". $row["NAME"]. "</td><td>" . $row["JOB"] . "</td><td>" . $row["SAL"] . " </td><td>". $row["date"] . " </td>";
     }
 

$conn->close();  
    
 ?>
</body>
</html>
