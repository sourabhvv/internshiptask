<?php 
session_start();

if(isset($_POST['email']) && isset($_POST['password'])){
  $email = $_POST['email'];
  $password = $_POST['password'];

  // Database details
  $servername = "localhost";
  $username = "root";
  $passwordDb = "";
  $dbname = "Taskdb";

  // Create a new connection
  $conn = new mysqli($servername, $username, $passwordDb, $dbname);

  // Check the connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // Prepare and execute the query
  $stmt = $conn->prepare("SELECT emaildb FROM user WHERE emaildb = ? AND password = ?");
  $stmt->bind_param('ss', $email, $password);
  $stmt->execute();
  $result = $stmt->get_result();

  if($result->num_rows >0){
    $row = $result->fetch_assoc();
    $_SESSION['user'] = $row;
    header("Location: Dashboard.php");
    exit();
  }
}

$_SESSION['error'] = "Invalid email or password.";
header("Location: login.php");
exit();
?>
