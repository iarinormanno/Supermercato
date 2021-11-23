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
<title> elimina supermercato </title>
</head>
<body>

<?php
$cod_id=$_GET["cod_id"];
include "connection.php";
$query="DELETE FROM supermercato where cod_id ='$cod_id'";
$result=mysqli_query($connection,$query);
?>

<script type="text/javascript">alert("<?php echo"supermercato $cod_id è stato eliminato nel database!";?>");window.location = "/sito%20esame/supermercato/del_supermercato.php";</script>

<?php

 mysqli_close($connection);

?>
</body>
</html>