<?php
include('session.php');
?>
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1">
<title>Your Home Page</title>
<link href="style.css" rel="stylesheet" type="text/css">
     <!link rel="stylesheet" type="text/css" href="form.css">
</head>
<body>
<div id="profile">
<b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b><b id="logout"><a href="logout.php">Log Out</a></b></div>
<div><br><br></div>
<div>
    <form method="post" action="abc.php">
      <center>  Date <input type="date" name="to"/> between <input type="date" name="form"/>
          <input name="submit" type="submit" value="Datepicker "width="60%"></center>
      
        </form>
     <?php if ((isset($_GET["status"]) AND $_GET["status"] == "flag")) { 
    header("Location: index.php");
  
            } ?>
</div>
<div>
 
<?php
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

$sql = "SELECT ID,NAME,JOB,SAL,date FROM emp";
$result = $conn->query($sql);


     // output data of each row
     echo '<div class="container"><table border="1" width="60%" ><tr><th>ID</th><th>NAME</th><th>JOB</th><th>SAL</th><th>DATE</th></div>';
     while($row = $result->fetch_assoc()) {
         echo "<tr><td>". $row["ID"]. "</td><td>". $row["NAME"]. "</td><td>" . $row["JOB"] . "</td><td>" . $row["SAL"] . " </td><td>". $row["date"] . " </td>";
     }
 

$conn->close();  
    
    
?>

</div>
</body>
