<?php
session_start(); // start session

// do check
if (!isset($_SESSION["Username"])) {
    header("location: index.php");
    exit; // prevent further execution, should there be more code that follows
}
?>
<html>
<head>
<title> elimina manager </title>
</head>
<body>

<?php
include "connection.php";
$manager_id  = $_GET["manager_id"];
$query="DELETE from responsabile where manager_id = '$manager_id'";
$result=mysqli_query($connection,$query);
?>

<script type="text/javascript">alert("<?php echo"manager $manager_id è stato eliminato nel database!";?>");window.location = "/sito%20esame/supermercato/manager/del_m.php";</script>

<?php

 mysqli_close($connection);

?>
</body>
</html>