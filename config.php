<?php 
$server = "localhost";
$user = "root";
$pass = "";
$database = "hotel";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}
/*
$result = mysqli_query($conn,"SELECT * FROM userinfo");
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
<td><?php echo $row["UserFirstName"]; ?></td>
<td><?php echo $row["UserEmail"]; ?></td>
<td><?php echo $row["UserLastName"]; ?></td>
</tr>
<?php
$i++;
}
*/
?>