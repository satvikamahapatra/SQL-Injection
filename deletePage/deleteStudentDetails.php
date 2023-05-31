<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Selecting the database
$db=mysqli_select_db($conn,'Student');
  if (!$db)
      echo "Database not selected" . "<br>";
    else
      echo "Database SELECTED" . "<br>";


$rollno = $_GET['rollno'];
$name = $_GET['name'];
$city = $_GET['city'];
$phoneno = $_GET['phoneno'];
$standard = $_GET['standard'];

// sql to insert rows in login_details
$sql = "DELETE FROM student_details WHERE rollno='$rollno';";
if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

header("Location:http://localhost/SQL-Injection/SQL-Injection-master/SQL%20injection%20UI/UI%20design/dashboardPage/dashboardPage.html")

      

?>