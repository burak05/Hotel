<html><body>
<?php
session_start();
$_SESSION = array();
session_destroy();
session_commit();
header("Location: index.php");

?>
</body></html>