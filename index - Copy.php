<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include('login.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: profile.php");
}
?>
<html>
    <head>
        <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
        <link href="style.css" rel="stylesheet" type="text/css">
        
        <script>
            
            function  check()
            {
                var a =document.myform.username.value;
                var b =document.myform.password.value;
      
                if((a==""||a==null)||(b==""||null))
                {
            document.getElementById("passid").innerHTML="please fill the fields."; 
                 return false;
                //alert('invalid username and password');
            }
               
                    if ((isset($_GET["status"]) AND $_GET["status"] == "thanks")) {
            header("Location: index.php?status=thanks");        
           
            //document.getElementById("nameid").innerHTML="User name and password invalid.."; 
                //   return false;
                //alert('invalid username and password');
            
            
        }
            </script>
        
        
    </head>
    <body>
        <center>
       <div id="main">
<center>
<div id="login">
<h2>Login Form</h2>
<form name="myform" action="login.php" onsubmit="return check()" method="post">
<label>UserName :</label>
<input id="name" name="username" value="username" type="text">
  <!span id="passid"><!span>
<label>Password :</label>
<input id="password" name="password" value="password"  type="password">
    <span id="nameid"></span>
     <?php if ((isset($_GET["status"]) AND $_GET["status"] == "thanks")) { ?>
    <p name="nameid" style="color: red">
       User name and password invalid..
  
    </p>
            <?php } ?>
    
    
    
    <?php if ((isset($_GET["status"]) AND $_GET["status"] == "flag")) { ?>
    <p name="nameid" style="color: red">
      please  fill the fields.
  
    </p>
            <?php } ?>
       <!--?php
       
    if (isset($_get['errorMssg'])) {
        $Values=urldecode($_GET['errormsg']);
       echo $Values;
    echo "Yes, mail is set";    
}else{  
    echo'';
}
 
   // $errorMssg = $_GET['errorMssg'];
   // echo $errorMssg;?-->
       <br><br>
<input name="submit" type="submit" value=" Login ">

</form>
</center>

    </body>
   
  
    
</html>
