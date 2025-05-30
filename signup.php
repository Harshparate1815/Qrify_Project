<?php include('server.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Manager - Sign Up Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="login.css"/>
</head>
<body>
    <!-- Navbar -->
<nav class="navbar navbar-expand-lg">
    <div class="container"> <a class="navbar-brand navbar-logo" href="#"> <img src="images/logo.png" alt="logo" height="70px" width="200px" class="logo-1"> </a>
     
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item"> <a class="nav-link" href="index.php" data-scroll-nav="0">Home</a> </li>
          <li class="nav-item"> <a class="nav-link" href="#" data-scroll-nav="1">About</a> </li>
          <li class="nav-item"> <a class="nav-link" href="#" data-scroll-nav="2">Clubs</a> </li>
          <li class="nav-item"> <a class="nav-link" href="#" data-scroll-nav="3">Demo</a> </li>
        </ul>
  
        <div class="d-flex"> <!-- d-flex makes it flexbox-->
          <a href="signup.php"><button class="btn btn-primary mr-2" >Sign Up</button></a>
          <a href="login.php"><button class="btn btn-outline-secondary" >Login</button></a>
        </div>
      </div>
      
    </div>
  </nav>
  <!-- End Navbar --> 

<!--SignUp form-->
<div class="login-bg">
  <div class="background"></div>
    <div name="login-container" class="login-container">
    <h2>Register</h2>
    <form method="post" action="signup.php">
    <?php include('error.php')?>
        <div class="input-group">
            <label>Emp ID</label>
            <input type="number" name="emp_id" id="emp_id" placeholder="Enter Employee ID" value="<?php echo $emp_id; ?>" required>
        </div>
        <div class="input-group">
            <label>Username</label>
            <input type="text" name="username" id="username" placeholder="Enter Full Name" value="<?php echo $username; ?>" required>
        </div>
        <div class="input-group">
            <label>Email</label>
            <input type="email" name="email" id="email" placeholder="Enter email" value="<?php echo $email; ?>"required>
        </div>
        <div class="input-group">
            <label >Password</label>
            <input type="password" name="password_1" id="password_1" placeholder="Enter new password" required>
        </div>
        <div class="input-group">
            <label>Confirm Password</label>
            <input type="password" name="confirm_password" id="confirm_password" placeholder="Re-enter password" required>
        </div>

        <button type="submit" class="signup-button" name="signup-button">Sign Up</button>
        <div><br>
         <div class="continue"><center>Or Continue With</center></div>
          
            
          <script src="https://accounts.google.com/gsi/client" async defer></script>
    <style>
        .continue {
            margin-top: 20px;
            font-weight: bold;
        }
        .social-login {
            display: flex;
            justify-content: center;
            margin-top: 10px;
        }
        .social-icon {
            width: 40px;
            cursor: pointer;
        }
    </style>
        
        <script src="https://accounts.google.com/gsi/client" async defer></script>
    <div id="g_id_onload"
         data-client_id="767280440286-ngnkfttp5i2oddujomgefedcpld6smrr.apps.googleusercontent.com"
         data-callback="handleCredentialResponse">
    </div>
    <center><div class="g_id_signin" data-type="standard"></div></center>

    <script>
    function handleCredentialResponse(response) {
        fetch("google-signup.php", {
            method: "POST",
            headers: { "Content-Type": "application/x-www-form-urlencoded" },
            body: "credential=" + response.credential
        })
        .then(res => res.text()) // Get response from the server
        .then(data => {
            if (data === "Signup successful!") {
                window.location.href = "login.php"; // Redirect to login page after signup
            } else {
                alert(data); // Show error message if signup failed
            }
        })
        .catch(error => console.error("Error:", error));
    }
</script>

        
        
    </form>
    <div class="form-footer">
        <p>Already have an account? <a href="login.php">Login</a></p>
    </div>
  </div>

</div>
</body>
</html>