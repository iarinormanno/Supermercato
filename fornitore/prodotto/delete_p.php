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
<title> elimina prodotto </title>
</head>
<body>

<?php
include "connection.php";
$prodotto_id  = $_GET["prodotto_id"];
$query="DELETE from prodotto where prodotto_id = '$prodotto_id'";
$result=mysqli_query($connection,$query);
?>

<script type="text/javascript">alert("<?php echo" prodotto $prodotto_id è stato eliminato nel database!";?>");window.location = "/sito%20esame/fornitore/prodotto/del_p.php";</script>

<?php

 mysqli_close($connection);

?>
</body>
</html>