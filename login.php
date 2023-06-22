<?php
  include "connection.php";
  session_start();
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
    <header>Login</header>
    <form method="POST" class="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
      <div class="input-box">
        <label>Email Address</label>
        <input type="text" placeholder="Enter email address" name="wemail"required=" ">
      </div>
        <div class="input-box">
        <label>Password</label>
        <input type="password" placeholder="Enter strong password" name="wpassword"required=" ">
      </div>
      
      <button>Login</button>
    </form>
  </section>
  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["wemail"];
    $password = $_POST["wpassword"];
    // Retrieve user data from the database
    $sql = "SELECT * FROM student_details WHERE Email='$email' AND PassWord='$password'";
    $result = mysqli_query($conn, $sql); 
    if (mysqli_num_rows($result) ==1 ) {
      header('Location: Books.php');
      $student="SELECT * FROM student_details WHERE Email='$email' AND PassWord='$password'";
      $stu_res=mysqli_query($conn,$student);
      $rowData = mysqli_fetch_array($stu_res);
      $_SESSION['login_stu']= $rowData["Student_name"];
        // Add any additional logic or redirect to another page
    } else {
       
        echo "Invalid username or password.";
    }
  }
  ?>
</body>
</html>