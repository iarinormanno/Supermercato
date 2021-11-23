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
<title> elimina reparto </title>
</head>
<body>

<?php
include "connection.php";
$reparto_id  = $_GET["reparto_id"];
$query="DELETE from reparto where reparto_id = '$reparto_id'";
$result=mysqli_query($connection,$query);
?>

<script type="text/javascript">alert("<?php echo"reparto $reparto_id è stato eliminato nel database!";?>");window.location = "/sito%20esame/supermercato/manager/reparto/delete_r.php";</script>

<?php

 mysqli_close($connection);

?>
</body>
</html>