<?php  
session_start();//session starts here  
  
?>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Sign In</h3>
                </div>
                <div class="panel-body">
                    <form role="form" method="post" action="components/login.php">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus required>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="pass" type="password" required>
                            </div>
                            <input type="checkbox" value="remember-me"> Remember me

                            <input class="btn btn-lg btn-success btn-block" type="submit" value="Login" name="login">
                            <!-- Change this to a button or input when using this as a form -->
                        </fieldset>
                    </form>
                </div>
            </div>
            <center><a href="#/admin_login">Admin login</a></center>
            <center><a href="#">Forgot Password?</a></center>
            <center><b>Don't have an account ? </b><a href="#/registration">Sign up</a></center>
        </div>
    </div>
</div>

<?php  
  
include("database/db_conection.php");  
  
if(isset($_POST['login']))  
{  
    $user_email=$_POST['email'];  
    $user_pass=$_POST['pass'];  
  
    $check_user="select * from users WHERE user_email='$user_email'AND user_pass='$user_pass'";  
  
    $run=mysqli_query($dbcon,$check_user);  
  
    if(mysqli_num_rows($run))  
    {  
        echo "<script>window.open('welcome.php','_self')</script>";  
  
        $_SESSION['email']=$user_email;//here session is used and value of $user_email store in $_SESSION.  
  
    }  
    else  
    {  
      echo "<script>alert('Email or password is incorrect!')</script>";  
    }  
}  
?>
