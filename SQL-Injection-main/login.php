


<?php

$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
  echo "Connection failed";
  die("Connection failed: " . $conn->connect_error);
}


// Create database
//  $sql = "CREATE DATABASE login_Credentials";
//  if ($conn->query($sql) === TRUE) {
//    echo "Database created successfully" . "<br>";
//  } else {
//    echo "Error creating database: " . $conn->error . "<br>";
//  }



// Selecting the database
$db=mysqli_select_db($conn,'login_Credentials');
  // if (!$db)
  //     echo "Database not selected" . "<br>";
  //   else
  //     echo "Database SELECTED" . "<br>";




//sql to create table login_details
// $sql="CREATE TABLE `login_details` (username varchar(20) NOT NULL,Pass varchar(20) NOT NULL)";
// if ($conn->query($sql) === TRUE) {
// 	echo "user table created successfully" . "<br>";
// } else {
// 	echo "Error creating user table: " . $conn->error . "<br>";
// }




// sql to insert rows in login_details
// $sql = "INSERT INTO login_details VALUES ('admin', 'admin'),('html', 'css'),('php', 'php'),('sql', 'project');";
// if ($conn->query($sql) === TRUE) {
//   echo "New record created successfully";
// } else {
//   echo "Error: " . $sql . "<br>" . $conn->error;
// }


// sql injection attack code

// Bypass login queries
// ' or 1=1#
// 

$uname = $_GET['uname'];
$pass = $_GET['pass'];

$sql = "SELECT * FROM login_details WHERE username = '$uname' AND pass = '$pass'";
$result = mysqli_query($conn, $sql);
$check = mysqli_fetch_array($result);

if(isset($check)){
 header("Location:http://localhost/SQL-Injection/SQL-Injection-master/SQL%20injection%20UI/UI%20design/dashboardPage/dashboardPage.html");
}
else {
	echo '<h1>Connection failed.</h1><p>Wrong user credentials</p>';
}


//Using knuth-morris-pratt string match algorithm

// function KMPSearch($pat, $txt)
// {
//     $M = strlen($pat);
//     $N = strlen($txt);
 
//     // create lps[] that will hold the longest prefix suffix
//     // values for pattern
//     $lps=array_fill(0,$M,0);
 
//     // Preprocess the pattern (calculate lps[] array)
//     computeLPSArray($pat, $M, $lps);
 
//     $i = 0; // index for txt[]
//     $j = 0; // index for pat[]
//     while (($N - $i) >= ($M - $j)) {
//         if ($pat[$j] == $txt[$i]) {
//             $j++;
//             $i++;
//         }
 
//         if ($j == $M) {
//             printf("Found pattern at index ".($i - $j));
//             $j = $lps[$j - 1];
//         }
 
//         // mismatch after j matches
//         else if ($i < $N && $pat[$j] != $txt[$i]) {
//             // Do not match lps[0..lps[j-1]] characters,
//             // they will match anyway
//             if ($j != 0)
//                 $j = $lps[$j - 1];
//             else
//                 $i = $i + 1;
//         }
//     }
// }
// // Fills lps[] for given pattern pat[0..M-1]
// function computeLPSArray($pat, $M, &$lps)
// {
//     // length of the previous longest prefix suffix
//     $len = 0;
 
//     $lps[0] = 0; // lps[0] is always 0
 
//     // the loop calculates lps[i] for i = 1 to M-1
//     $i = 1;
//     while ($i < $M) {
//         if ($pat[$i] == $pat[$len]) {
//             $len++;
//             $lps[$i] = $len;
//             $i++;
//         }
//         else // (pat[i] != pat[len])
//         {
//             // This is tricky. Consider the example.
//             // AAACAAAA and i = 7. The idea is similar
//             // to search step.
//             if ($len != 0) {
//                 $len = $lps[$len - 1];
 
//                 // Also, note that we do not increment
//                 // i here
//             }
//             else // if (len == 0)
//             {
//                 $lps[$i] = 0;
//                 $i++;
//             }
//         }
//     }
// }

// Using real_escape_string

// $uname = $conn -> real_escape_string($_GET['uname']);
// $pass = $conn -> real_escape_string($_GET['pass']);

// $sql = "SELECT * FROM login_details WHERE username = '$uname' AND Pass = '$pass'";
// $result = mysqli_query($conn, $sql);
// $check = mysqli_fetch_array($result);

// if(isset($check)){
// 	header("Location:http://localhost/SQL-Injection/SQL-Injection-master/SQL%20injection%20UI/UI%20design/dashboardPage/dashboardPage.html");
// }
// else {
// 	echo '<h1>Connection failed.</h1><p>Wrong user credentials</p>';
// }





//parameter binding

// $uname = $_GET['uname'];
// $pass = $_GET['pass'];

// $stmt = $conn->prepare("SELECT * FROM login_details WHERE username = ? AND Pass = ?");
// $stmt -> bind_param('ss', $uname,$pass);
// $stmt -> execute();
// $result = $stmt->get_result();
// $check = $result -> fetch_assoc();

// if(isset($check)){
// 	header("Location:hhttp://localhost/SQL-Injection/SQL-Injection-master/SQL%20injection%20UI/UI%20design/dashboardPage/dashboardPage.html");
// }
// else {
// 	echo '<h1>Connection failed.</h1><p>Wrong user credentials</p>';
// }




?>