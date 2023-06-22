<?php
include "connection.php";
include "sign_up.php";
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="nav">
    <input type="checkbox" id="nav-check">
    <div class="nav-header">
      <div class="nav-title">
        Library Management 
      </div>
    </div>
    <div class="nav-btn">
      <label for="nav-check">
        <span></span>
        <span></span>
        <span></span>
      </label>
    </div>
    
    <div class="nav-links">
      <a href="signup.php" target="_blank">Sign Up</a>
      <a href="login.php" target="_blank">Login</a>
    </div>
  </div>
  <section class="container">
    <header>Sign up</header>

    <form method="POST" class ="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
      <div class="input-box">
      <div class="input-box">
        <label>Student Id</label>
        <input type="text" placeholder="Enter student id" name="id" required=" ">
      </div>
        <label>Student Name</label>
        <input type="text" placeholder="Enter full name" name="name"required=" ">
      </div>
     
      <div class="input-box">
        <label>Email Address</label>
        <input type="text" placeholder="Enter email address" name="email"required=" ">
      </div>
      <div class="column">
        <div class="input-box">
          <label>Phone Number</label>
          <input type="text" placeholder="Enter phone number" name="mobile"required=" ">
        </div>
        <div class="input-box">
        <label>Password</label>
        <input type="text" placeholder="Enter strong password" name="password"required=" ">
      </div>
      </div>
      
      <input type="submit"  class="button" name="submit" value="submit">
    </form>
  </section>
  
</body>
</html>