<?php  
session_start();  
  
if(!$_SESSION['email'])  
{  
    header("Location: login.php");//redirect to login page to secure the welcome page without login access.  
}  
?>

<h1>Welcome</h1><br>
<?php  
    echo $_SESSION['email'];  
?>

<h4><a href="#/logout">Logout here</a> </h4>
