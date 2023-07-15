<?php 
session_start();


// check if user is authenticated
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
  }


$servername = "localhost";
$username = "root";
$passworddb = "";
$dbname = "Taskdb";

// Create a new connection to taskdb
$conn = new mysqli($servername, $username, $passworddb, $dbname);

// Check the connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM user";
$result = $conn->query($sql);





?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>This is the Dashboard pannel</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <style>
  .table {
    width: 100%;
    margin-bottom: 1rem;
    color: #212529;
  }

  .table thead th {
    vertical-align: bottom;
    border-bottom: 2px solid #dee2e6;
  }

  .table tbody + tbody {
    border-top: 2px solid #dee2e6;
  }

  .table .thead-dark th {
    color: #fff;
    background-color: #343a40;
    border-color: #454d55;
  }

  .table td,
  .table th {
    padding: 0.75rem;
    vertical-align: top;
    border-top: 1px solid #dee2e6;
  }
</style>  
</head>
<body>
    
<div class="navbar">
        <div class="navbar-container">
        <a href="#" class="navbar-item">welcome to dshboard</a>
       <a href="" class="navbar-item"><?php echo $_SESSION['user']['emaildb']; ?></a>
       <a href="" class="navbar-item">
        <form action="Dashboard.php" method="post">
            
        <button type="submit" class="btn btn-dark">logout</button></a>
        </form>
        
       
        </div>
    </div>
 
  
  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th>ID</th>
        <th>fullname</th>
        <th>Email</th>
        <th>contact</th>
        <th>password</th>
        <th>address</th>
        <!-- Add more table headers as needed -->
      </tr>
    </thead>
    <tbody>
        <?php 
        echo  $result->fetch_assoc();
        ?>
      <?php while ($row = $result->fetch_assoc()) { ?>
        <tr>
          <td><?php echo $row['id']; ?></td>
          <td><?php echo $row['fullname']; ?></td>
          <td><?php echo $row['emaildb']; ?></td>
          <td><?php echo $row['contact']; ?></td>
          <td><?php echo $row['password']; ?></td>
          <td><?php echo $row['address']; ?></td>
          <!-- Add more table cells as needed -->
        </tr>
        
      <?php } ?>
    </tbody>
  </table>
</body>
</html>  

