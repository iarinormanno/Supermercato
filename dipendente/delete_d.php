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
<title> elimina dipendente </title>
</head>
<body>

<?php
include "connection.php";
$dipendente_id  = $_GET["dipendente_id"];
$query="DELETE from dipendente where dipendente_id = '$dipendente_id'";
$result=mysqli_query($connection,$query);
?>

<script type="text/javascript">alert("<?php echo" dipendente $dipendente_id è stato eliminato nel database!";?>");window.location = "/sito%20esame/dipendente/del_dipendente.php";</script>

<?php

 mysqli_close($connection);

?>
</body>
</html>