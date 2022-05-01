<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
function validate_data($data)
 {
  $data1 = trim($data);
  $data1 = stripslashes($data1);
  $data1 = strip_tags($data1);
  $data1 = htmlspecialchars($data1);
  return $data1;    
 }

if( isset( $_POST['create_account'] ) )
{


 $name = validate_data( $_POST['username_input'] );
 $emailid = validate_data( $_POST['email_input'] );
 $password = validate_data( $_POST['pass_input'] );

 $host = 'localhost';
 $user = 'root';
 $pass = 'ilya0621';
 $dbname = 'demo';


$conn = new mysqli($host, $user, $pass, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO user_data (name,emailid , password)
VALUES ('$name', '$emailid', '$password')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?>
