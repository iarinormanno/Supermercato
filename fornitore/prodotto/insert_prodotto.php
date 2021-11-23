
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
<title> insert prodotto </title>
</head>
<body>

<?php
$prodotto_id=$_GET["prodotto_id"];
$nome_prodotto= $_GET["nome_prodotto"];
$prezzo_vendita= $_GET["prezzo_vendita"];
$reparto_id=$_GET["reparto_id"];
$codice_s=$_GET["codice_s"];
include "connection.php";
$query="SELECT * FROM prodotto where $prodotto_id='prodotto_id'";
$result=mysqli_query($connection,$query);
if(mysqli_num_rows($result) !=0)
	{
	echo"prodotto $nome_prodotto si trova gi&agrave nel database!";
	}
else
	{
		$query="insert into prodotto values ('$prodotto_id','$nome_prodotto','$prezzo_vendita','$codice_s','$reparto_id');";
		$result=mysqli_query($connection,$query);
?>		
		<script type="text/javascript">alert("<?php echo"prodotto $nome_prodotto è stato aggiunto nel database!";?>");window.location = "/sito%20esame/fornitore/prodotto/add_prodotto.php";</script>
<?php
	}		
mysqli_close($connection);

?>

</body>
</html>