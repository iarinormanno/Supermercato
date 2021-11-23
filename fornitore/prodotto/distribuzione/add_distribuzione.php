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
  <title>Aggiungi Dipendenti</title>
  <script type="text/javascript" language="javascript">
	  function controllo() {
	  if(document.form.cod_ID.value==""){
		  alert("id campo obbligatorio ");
	  	return false;
	  }
	  if(document.form.PartitaIVA.value==""){
		  alert("Nome campo obbligatorio");
		  return false;
  	}
	  if(document.form.indirizzo.value==""){
	  	alert("cognome campo obbligatorio");
		  return false;
  	}
	  }
</script>
<style>
  * {
    box-sizing: border-box;
  }
  
  body {
    margin: 0;
    font-family: Arial, Helvetica, sans-serif;
    text-align: center;
  }
  

  /* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: #333;
}

/* Style the topnav links */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

  
  /* Style the content */
      .content {
        display: flex;
        justify-content: center;
      }
      .center{
        width: 800px;
      }
      input[type=text], select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
      }
      .footer {
          position:absolute;
          bottom:0;
          width:100%;
          height:60px;
          background:#ECEAEA;
        }

        .footer a
        {
          color:#737373;
          text-decoration: none;
          }
          .footer a:active,.footer a:focus,.footer a:hover
          {
            color: black;
            text-decoration: none;
          }

  </style>
</head>
<body>

    <div class="topnav">
      <a href="/sito%20esame/index.php">Home</a>
      <a href="/sito%20esame/fornitore/view_fornitore.php">Lista Fornitori</a>
    </div>
  
    <div class="content">
      <div class="center">
      <form name="form" action="insert_distribuzione.php" method="GET" onsubmit="return controllo()">
        <h1>Assegnazione Ordine</h1>
        <h5>Informazioni ordine</h5>
        <div class="item">
            <select name="fornitore_id">
                    <option disabled selected>---Scegli Fornitore---</option>
                  <?php
                  include "connection.php";
                  $query = "SELECT fornitore_id FROM fornitore";
                  $result = mysqli_query($connection,$query);

                  while($data = mysqli_fetch_assoc($result))
                {

                  echo "<option value='". $data['fornitore_id'] ."'>" .$data['fornitore_id'] ."</option>";  // displaying data in option menu

                }
                  mysqli_close($connection);
              ?> 
      </select>   
        </div>
        <div class="item">
            <select name="prodotto_id">
                    <option disabled selected>---Scegli Prodotto---</option>
                  <?php
                  include "connection.php";
                  $query = "SELECT prodotto_id FROM prodotto";
                  $result = mysqli_query($connection,$query);

                  while($data = mysqli_fetch_assoc($result))
                {

                  echo "<option value='". $data['prodotto_id'] ."'>" .$data['prodotto_id'] ."</option>";  // displaying data in option menu

                }
                  mysqli_close($connection);
              ?> 
      </select>   
        </div>
        <div class="name-item">
            <input type="text" name="prezzo" placeholder="Prezzo"/>
        </div>
        <div class="name-item">
            <input type="text" name="codice_f" placeholder="Codice Fornitore"/>
        </div>

      <br>
        <div class="btn-block">
          <button type="submit" href="/">inserisci</button>
        </div>
      </form>
      </div>
    </div>
    <div class="footer">
      <p class="copyright-text">Copyright &copy; 2020 All Rights Reserved by 
         <a href="#">Iari Normanno</a>.
            </p>
      </div>
</body>
</html>