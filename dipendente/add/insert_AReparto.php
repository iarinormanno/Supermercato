
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
<title> assegnazione </title>
</head>
<body>

<?php
$dipendente_id=$_GET["dipendente_id"];
$reparto_id=$_GET["reparto_id"];
include "connection.php";
$query="SELECT * FROM lavora_in";
$result=mysqli_query($connection,$query);

		$query="insert into lavora_in(manager_id, reparto_id, dipendente_id) values (NULL,'$reparto_id','$dipendente_id');";
		$result=mysqli_query($connection,$query);
?>		
		<script type="text/javascript">alert("<?php echo"è stato aggiunto nel database!";?>");window.location = "/sito%20esame/dipendente/add/add_AReparto.php";</script>
<?php
	
mysqli_close($connection);

?>

</body>
</html>