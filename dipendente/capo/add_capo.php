
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
<title> insert dipendente </title>
</head>
<body >

<?php
$dipendente_id=$_GET["dipendente_id"];
$nome= $_GET["nome"];
$cognome= $_GET["cognome"];
$indirizzo= $_GET["indirizzo"];
include "connection.php";
$query="SELECT * FROM dipendente where $dipendente_id='dipendente_id'";
$result=mysqli_query($connection,$query);
if(mysqli_num_rows($result) !=0)
	{
	echo"dipendente $dipendente_id si trova gi&agrave nel database!";
	}
else
	{  
		$query="insert into dipendente(dipendente_id, nome, cognome, indirizzo, responsabile_id) values ('$dipendente_id','$nome','$cognome','$indirizzo',NULL);";
		$result=mysqli_query($connection,$query);
?>		
		<script type="text/javascript">alert("<?php echo"capo $dipendente_id è stato aggiunto nel database!";?>");window.location = "/sito%20esame/dipendente/capo/capo.php";</script>
<?php
	}		
mysqli_close($connection);

?>

</body>
</html>