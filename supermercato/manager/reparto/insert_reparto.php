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
		$reparto_id=$_GET["reparto_id"];
		$nome_reparto= $_GET["nome_reparto"];
		include "connection.php";
		$query="SELECT * FROM reparto where reparto_id='$reparto_id'";
		$result=mysqli_query($connection,$query);
		if(mysqli_num_rows($result) !=0)
			{
			echo"reparto $reparto_id si trova gi&agrave nel database!";
			}
		else
			{
				$query="insert into reparto values ('$reparto_id','$nome_reparto');";
				$result=mysqli_query($connection,$query);
		?>		

				<script type="text/javascript">alert("<?php echo"reparto $reparto_id è stato aggiunto nel database!";?>");window.location = "/sito%20esame/supermercato/manager/reparto/add_reparto.php";</script>
		
		<?php
			}		
		mysqli_close($connection);

		?>
</body>
</html>