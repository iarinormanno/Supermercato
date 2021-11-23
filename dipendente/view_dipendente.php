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
  <title>Lista Dipendenti</title>
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
          margin: auto;
          width: 60%;
          padding: 10px;
          display: inline;
      }
      table {
        border-collapse: collapse;
        border-spacing: 0;
        width: 40%;
        border: 1px solid #ddd;
        }

       tr:nth-child(even) {
        background-color: #f2f2f2;
        }

        th{
            padding:10px;
            width: 10%;
        }
      .a{
        table-layout: auto;
        margin-left: auto;
        margin-right: auto;
        width: 50%;
        margin-top;
        text-align:center;
      }
      .footer {
          position:flex;
          bottom:0;
          left: 0;
          width:100%;
          height:60px;
          background:#ECEAEA;
          text-align:center;
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
      <a href="/sito%20esame/homepage.php">Home</a>
      <a href="/sito%20esame/dipendente/capo/capo.php">Aggiungi Capo</a>
      <a href="/sito%20esame/dipendente/capo/del_c.php">Elimina Capo</a>
      <a href="/sito%20esame/dipendente/add_dipendente.php">Aggiungi Dipendente</a>
      <a href="/sito%20esame/dipendente/del_dipendente.php">Elimina Dipendente</a>
      <a href="/sito%20esame/dipendente/add/add_AReparto.php">Assegna Reparto</a>
    </div>
  
    <div class="content">
            <?php
            include "connection.php";

            $result = mysqli_query($connection,"SELECT * From dipendente ");
        ?>
            <table class="a">
            <tr>
            <th>Dipendente ID</th>
            <th>Cognome</th>
            <th>Nome</th>
            <th>Indirizzo</th>
            
            </tr>
            <?php
            while($row = mysqli_fetch_array($result))
            {
            echo "<tr>";
            echo "<td>" . $row['dipendente_id'] . "</td>";
            echo "<td>" . $row['cognome'] . "</td>";
            echo "<td>" . $row['nome'] . "</td>";
            echo "<td>" . $row['indirizzo'] . "</td>";
            //echo "<td>" . $row['reparto_id'] . "</td>";
            echo "</tr>";
            }
            echo "</table>";

            mysqli_close($connection);
            ?>
    </div>


    <div class="footer">
      <p class="copyright-text">Copyright &copy; 2020 All Rights Reserved by 
         <a href="#">Iari Normanno</a>.
            </p>
      </div>
</body>
</html>