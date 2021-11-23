
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
<title> del manager </title>
</head>
<body>

<?php
$diviso_id=$_GET['diviso_id'];
include "connection.php";
$query="DELETE from diviso_in where diviso_id='$diviso_id'";
$result=mysqli_query($connection,$query);
?>		
		<script type="text/javascript">alert("<?php echo"$diviso_id è stato eliminto dal database!";?>");window.location = "/sito%20esame/supermercato/manager/reparto/add/delete_add.php";</script>
<?php
	
mysqli_close($connection);

?>

</body>
</html>