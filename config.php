<?php 
$server = "localhost";
$user = "root";
$pass = "";
$database = "hotel";

$conn = mysqli_connect($server, $user, $pass, $database);
#$_SESSION['UserID'] = "SELECT UserID FROM userinfo WHERE UserEmail = '$loginemail'";
if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}
/*
$result = mysqli_query($conn,"SELECT * FROM userinfo");
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "<br> Name: ". $row["UserFirstName"]. " - Surname: ". $row["UserLastName"]. " User email:  " . $row["UserEmail"] . "<br>";
    }
  } else {
    echo "0 results";
  }
*/

?>