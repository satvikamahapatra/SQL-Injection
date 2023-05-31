<?php

$uname = $_GET['uname'];
$pass = $_GET['pass'];
$stmt = $conn-> prepare("SELECT * FROM login_details WHERE username = ? AND Pass = ?");
$stmt -> bind_param('ss', $uname,$pass);
$stmt -> execute();
$result = $stmt->get_result();
$check = $result -> fetch_assoc();
if(isset($check)){
header("Location:http://localhost/sql-injectionsatvika/SQL%20injection%20UI/UI%20design/dashboardPage/dashboardPage.html");
}
else {
echo '<h1>Connection failed.</h1><p>Wrong user credentials</p>';
}

?>