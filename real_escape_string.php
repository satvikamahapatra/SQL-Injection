<?php

$uname = $conn -> real_escape_string($_GET['uname']);
$pass = $conn -> real_escape_string($_GET['pass']);
$sql = "SELECT * FROM login_details WHERE username = '$uname' AND Pass = '$pass'";
$result = mysqli_query($conn, $sql);
$check = mysqli_fetch_array($result);
if(isset($check)){
header("Location:http://localhost/sql-injectionsatvika/SQL%20injection%20UI/UI%20design/dashboardPage/dashboardPage.html");
}
else {
echo '<h1>Connection failed.</h1><p>Wrong user credentials</p>';
}

?>
