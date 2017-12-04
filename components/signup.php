<?php
    session_start();
    
    //connect to database
    $db = mysqli_connect("localhost", "root", "", "authentication");
    if (isset($_POST['register_btn'])) {
        $firstname = mysql_real_escape_string($_POST['firstname']);
        $lastname = mysql_real_escape_string($_POST['lastname']);
        $username = mysql_real_escape_string($_POST['username']);
        $email = mysql_real_escape_string($_POST['email']);
        $password = mysql_real_escape_string($_POST['password']);
        $password2 = mysql_real_escape_string($_POST['password2']);
        
        if ($password == $password2) {
            $password = md5($password);
            $sql = "INSERT INTO users(firstname, lastname, username, email, password) VALUES('$firstname', '$lastname', '$username', '$email', '$password')";
            mysqli_query($db, $sql);
            $_SESSION['message'] = "You are logged in";
            $_SESSION['username'] = $username;
            header("location: loggedin.php"); //redirected to home page
        }
        else{
            $_SESSION['message'] = "Password mismatch";
        }
        
    }
?>
    <div class="container">

        <form class="form-signin" action="components/registered.php" method="post">
            <h2 class="form-signin-heading">Please Sign Up</h2>
            <label for="fname" class="sr-only">First Name</label>
            <input type="text" name="firstname" class="form-control" placeholder="First Name" required autofocus>
            <label for="lname" class="sr-only">Last Name</label>
            <input type="text" name="lastname" class="form-control" placeholder="Last Name" required>
            <label for="username" class="sr-only">Username</label>
            <input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" name="email" class="form-control" placeholder="Email address" required autofocus>
            <label for="inputPassword1" class="sr-only">Password</label>
            <input type="password" name="password" class="form-control" placeholder="Password" required>
            <label for="inputPassword2" class="sr-only">Password</label> <input type="password" name="password2" class="form-control" placeholder="Confirm Password" required>
            <div class="checkbox">
                <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" name="register_btn" type="submit">Sign Up</button>
            <p><a href="#/signin">Already have an account?Click here</a></p>
        </form>

    </div>
