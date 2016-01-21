<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message

if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
   header("Location: index.php?status=flag");
}
else
    if ($_POST['username']!=""AND $_POST['password']!="" )
{
// Define $username and $password
$username=$_POST['username'];
$password=$_POST['password'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysql_connect("localhost", "root", "");
//To protect MySQL injection for Security purpose
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
// Selecting Database
$db = mysql_select_db("logindb", $connection);
// SQL query to fetch information of registerd users and finds user match.
$query = mysql_query("select * from login where password='$password' AND username='$username'", $connection);
$rows = mysql_num_rows($query);

if ($rows == 1) {
$_SESSION['login_user']=$username; // Initializing Session
header("location: profile.php?status=flag"); // Redirecting To Other Page
} else{
  
    //if($_POST['username']=="" and $_POST['password']=="")
//{
   // header("Location: index.php");
    
//}
 //else {*/
    

//$error = "Username or Password is invalid";
//header("location: index.php");
  //header("Location:index.php?errorMssg=".urlencode("username and password invalid"));
//else{
header("Location: index.php?status=thanks");}
//echo $error;
//}

mysql_close($connection); // Closing Connection
}
}


?>