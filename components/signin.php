<?php
    session_start();
    
?>

    <div class="container">

        <form class="form-signin" action="components/loggedin.php" method="post">
            <h2 class="form-signin-heading">Please Sign In</h2>
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
            <div class="checkbox">
                <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" name="signin_btn" type="submit">Sign in</button><br>
            <p><a href="#">Forgot password?</a></p>
            <p><a href="#/signup">Not yet a member? Sign up Now</a></p>
        </form>
    </div>
