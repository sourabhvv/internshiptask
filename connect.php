<?php
$username = $_POST['name'];
$email = $_POST['email'];
$contactNo = $_POST['contact'];
$passworduser = $_POST['password'];
$addressuser  = $_POST['address'];
// established database connection

$servername = "localhost";
$usernamedb = "root";
$passworddb = "";
$dbname = "taskdb";



$emailPattern = "/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/";
$contactNoPattern = "/^[5-9]\d{9}$/"; // Contact number should start with 5-9 and be 10 digits long

if (!empty($email) && !empty($contactNo)) {
    if (preg_match($emailPattern, $email) && preg_match($contactNoPattern, $contactNo)) {
        // Valid email and contact number
        // Proceed with further processing
        
        $conn = new mysqli($servername, $usernamedb, $passworddb, $dbname);
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }

        // check unique email

        $stmt = $conn->prepare("SELECT * FROM user WHERE emaildb = ?");
        $stmt->bind_param("s",$email);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            // Email already exists
            header("Location: home.php?error=email_already_exist");
        } 
        else {
        // Insert user data into database
        $stmt = $conn->prepare("INSERT INTO user (fullname, emaildb, contact,password,address) VALUES (?, ?, ?,?,?)");
        $stmt->bind_param("sssss", $username, $email,$contactNo, $passworduser,$addressuser);
        $stmt->execute();
        
        if ($stmt->affected_rows > 0) {
          echo "User registered successfully";
        } else {
          echo "Error occurred while registering user";
        }
        
        $stmt->close();
        $conn->close();

    }

    } else {
        // Invalid email or contact number
        // Redirect to the same page with an error message
        header("Location: home.php?error=checkemailorcontactno");
        exit();
    }
} else {
    // Empty email or contact number
    // Redirect to the same page with an error message
    header("Location: home.php?error=empty_input");
    exit();
}
?>