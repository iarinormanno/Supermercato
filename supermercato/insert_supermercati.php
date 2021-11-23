<?php
session_start(); // start session

// do check
if (!isset($_SESSION["Username"])) {
    header("location: index.php");
    exit; // prevent further execution, should there be more code that follows
}
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Aggiunto!</title>

	<style>
  	* {
      	box-sizing: border-box;
  	 }
  
  	body {
    	margin: 0;
    	font-family: Arial, Helvetica, sans-serif;
 	 }
  	</style>

</head>

<body>
		<?php
		$cod_id=$_GET["cod_id"];
		$partita_iva= $_GET["partita_iva"];
		$indirizzo= $_GET["indirizzo"];
		include "connection.php";
		$query="SELECT * FROM supermercato where cod_ID='$cod_ID'";
		$result=mysqli_query($connection,$query);
		if(mysqli_num_rows($result) !=0)
			{
			echo"supermercato $cod_id si trova gi&agrave nel database!";
			}
		else
			{
				$query="insert into supermercato values ('$cod_id','$partita_iva','$indirizzo');";
				$result=mysqli_query($connection,$query);
		?>		

				<script type="text/javascript">alert("<?php echo"supermercato $cod_id è stato aggiunto nel database!";?>");window.location = "/sito%20esame/supermercato/add_supermercati.php";</script>
		
		<?php
			}		
		mysqli_close($connection);

		?>
</body>
</html>