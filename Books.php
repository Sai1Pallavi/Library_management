<?php
include "connection.php";
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="styles.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    <?php
    echo "WELCOME"." ".$_SESSION['login_stu'];
    ?>
    </div>   
  </div>
  <div class="search">
    <form class="navbar-form" method="post" name="form1">
    <input class="form-control" type="text" name="search" placeholder="search books">
    <button type="submit" name="submit" class="btn btn-default">
        <span class="glyphicon glyphicon-search"></span>
</button>
</form>
</div>
<?php
if(isset($_POST['submit'])){
  $filterquery="Select * from book_details where Book_title like '%$_POST[search]%'";
  $query=mysqli_query($conn,$filterquery);
  if(mysqli_num_rows($query)<=0){
      echo "Sorry...No Book Found.Keep Searching... ";
  }
  else{
          $result=$conn->query($filterquery);
           }
          }
          else{
$sql = "SELECT * FROM book_details";
$result = $conn->query($sql);
          }
?>
<table>
        <thead>
            <tr>
                <th>Book ID</th>
                <th>Title</th>
                <th>Author</th>
                <th>Publish Date</th>
                <th>Copies Available</th>
            </tr>
        </thead>
        <tbody>
            <?php $count=0;
            while ($row = $result->fetch_assoc()):
            $count=$count+1; ?>
                <tr>
                    <td><?php echo $row['Book_id']; ?></td>
                    <td><?php echo $row['Book_title']; ?></td>
                    <td><?php echo $row['Author']; ?></td>
                    <td><?php echo $row['Publish_date']; ?></td>
                    <td><?php echo $row['Available_copies']; ?></td>
                   
                    <td><button>Add to cart</button></td>
                </tr>
            <?php endwhile; ?>
            <div class="nav-links">
            <?php 
            echo "Books Available :"."  ".$count;
            ?>
           
            </div>
        </tbody>
    </table>
</body>
</html>