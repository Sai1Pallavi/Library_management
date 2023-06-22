<?php

// Registration form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["id"];
    $name=$_POST["name"];
    $email = $_POST["email"];
    $mobile=$_POST["mobile"];
    $password = $_POST["password"];
    

    // Insert user data into the database
    $sql = "INSERT INTO student_details (Student_id,Student_name,Email,Mobile,PassWord) VALUES ('$username', '$name','$email','$mobile','$password' )";

    if (mysqli_query($conn, $sql)) {
        header('Location: login.php');
    } else {
        alert( "Error: " . $sql . "<br>" . mysqli_error($conn));
    }
}


?>


