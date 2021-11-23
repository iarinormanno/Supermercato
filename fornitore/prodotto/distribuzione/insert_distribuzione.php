
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
<title> insert ordine </title>
</head>
<body bgcolor="00FFFF">

<?php
$fornitore_id=$_GET["fornitore_id"];
$prodotto_id=$_GET["prodotto_id"];
$prezzo=$_GET["prezzo"];
$codice_f=$_GET["codice_f"];
$data_fornitura=date("d-m-Y", strtotime($_GET['data_fornitura']));
include "connection.php";
$query="SELECT * FROM distribuito_da";
$result=mysqli_query($connection,$query);

		$query="insert into distribuito_da values ('$fornitore_id','$prodotto_id','$prezzo','$codice_f','$data_fornitura';";
		$result=mysqli_query($connection,$query);
?>		
		
        <script type="text/javascript">alert("<?php echo"è stato aggiunto nel database!";?>");window.location = "/sito%20esame/fornitore/distribuzione/add_distribuzione.php";</script>

<?php
	
mysqli_close($connection);

?>

</body>
</html>