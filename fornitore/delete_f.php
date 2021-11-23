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
<title> elimina fornitore </title>
</head>
<body>

<?php
include "connection.php";
$fornitore_id  = $_GET["fornitore_id"];
$query="DELETE from fornitore where fornitore_id = '$fornitore_id'";
$result=mysqli_query($connection,$query);
?>

<script type="text/javascript">alert("<?php echo" dipendente $fornitore_id è stato eliminato nel database!";?>");window.location = "/sito%20esame/fornitore/del_f.php";</script>

<?php

 mysqli_close($connection);

?>
</body>
</html>