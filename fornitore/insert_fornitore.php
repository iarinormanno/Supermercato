<?php
session_start(); // start session

// do check
if (!isset($_SESSION["Username"])) {
    header("location: index.php");
    exit; // prevent further execution, should there be more code that follows
}
?>


<?php
$fornitore_id=$_GET["fornitore_id"];
$nome= $_GET["nome"];
$indirizzo= $_GET["indirizzo"];
include "connection.php";
$query="SELECT * FROM fornitore where fornitore_id='$fornitore_id'";
$result=mysqli_query($connection,$query);
if(mysqli_num_rows($result) !=0)
	{
	echo"fornitore $fornitore_id si trova gi&agrave nel database!";
	}
else
	{
		$query="insert into fornitore values ('$fornitore_id','$nome','$indirizzo');";
		$result=mysqli_query($connection,$query);
		
		?>		
		<script type="text/javascript">alert("<?php echo"fornitore $fornitore_id è stato aggiunto nel database!";?>");window.location = "/sito%20esame/fornitore/add_fornitore.php";</script>
	<?php
		
	}		
mysqli_close($connection);

?>
