
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
<title> insert manager </title>
</head>
<body>

<?php
$diviso_id=$_GET["diviso_id"];
$cod_id=$_GET["cod_id"];
$reparto_id= $_GET["reparto_id"];
include "connection.php";
$query="SELECT * FROM diviso_in";
$result=mysqli_query($connection,$query);

		$query="insert into diviso_in values ('$reparto_id','$cod_id','$diviso_id');";
		$result=mysqli_query($connection,$query);
?>		
		<script type="text/javascript">alert("<?php echo"$diviso_id è stato aggiunto nel database!";?>");window.location = "/sito%20esame/supermercato/manager/reparto/add/assegnazione.php";</script>
<?php
	
mysqli_close($connection);

?>

</body>
</html>