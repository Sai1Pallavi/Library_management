<?php
// search.php
if(isset($_POST['submit'])){
    $query=mysqli_query($conn,"Select * from book_details where name like '%$_POST[search]%'");
    if(mysqli_num_rows($query)==0){
        echo "Sorry...No Book Found.Keep Searching... ";
    }
    else{
      $sql = "SELECT * FROM book_details";
  $result =mysqli_query($conn,$sql);
    }
  
  // Display search results
  // ...
  
}
?>
