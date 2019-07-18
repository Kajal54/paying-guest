<html>

<head>
    <title>sign up</title>
    <link href="signup.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="wrap">
        <h2>Sign up Here</h2>
        <form action="response.php" method="POST">

            <input type="text" placeholder="First Name.." value="" name="firstname" required>
            <input type="text" placeholder="Last Name.." value="" name="lastname" required>
            <input type="text" placeholder="Email.." value="" name="email" required>
            <input type="password" placeholder="Password.."value=""  name="password" required>
            <input type="password" placeholder="Confirm Password.."value=""  name="confirmpassword" required>

            <input type="submit" value="Signup" name="signup">
          <p>  Do you already have an account?</p>
          <a class="btn btn-primary"href="login.php">login</a>
          
        </form>

    </div>
</body>

</html>