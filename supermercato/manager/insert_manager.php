
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
<body bgcolor="00FFFF">

<?php
$manager_id=$_GET["manager_id"];
$reparto_id=$_GET["reparto_id"];
$dipendente_id= $_GET["dipendente_id"];

include "connection.php";
$query="SELECT * FROM responsabile where $manager_id='manager_id'";
$result=mysqli_query($connection,$query);
if(mysqli_num_rows($result) !=0)
	{
	echo"manager $manager_id si trova gi&agrave nel database!";
	}
else
	{
		$query="insert into lavora_in values ('$manager_id','$reparto_id','$dipendente_id');";
		$result=mysqli_query($connection,$query);
?>		
		<script type="text/javascript">alert("<?php echo"manager $manager_id è stato aggiunto nel database!";?>");window.location = "/sito%20esame/supermercato/manager/add_manager.php";</script>
<?php
	}		
mysqli_close($connection);

?>

</body>
</html>