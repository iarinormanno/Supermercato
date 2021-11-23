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
    <title>Elimina Dipendente</title>

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

		input[type=text], select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
      }
        
        /* Style the content */
        .content {
            margin: auto;
            width: 60%;
            padding: 10px;
			position: static;
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
      <a href="/sito%20esame/homepage.php">Home</a>
      <a href="/sito%20esame/supermercato/manager/view_manager.php">Lista Manager</a>
    </div>


    <div class="content">
        <form name="form" action="delete_m.php" method="GET" onsubmit="return controllo()"><br>
            Seleziona il codice identificato del Manager che si vuole elimanare:
                <select name="manager_id">
                    <option disabled selected>---Scegli Manager---</option>
                  <?php
                  include "connection.php";
                  $query = "SELECT manager_id FROM responsabile";
                  $result = mysqli_query($connection,$query);

                  while($data = mysqli_fetch_assoc($result))
                {

                  echo "<option value='". $data['manager_id'] ."'>" .$data['manager_id'] ."</option>";  // displaying data in option menu

                }
                  mysqli_close($connection);
              ?> 
      </select>   
        <input type="submit" value="rimuovi">
            </form>
    </div>
    <div class="footer">
      <p class="copyright-text">Copyright &copy; 2020 All Rights Reserved by 
         <a href="#">Iari Normanno</a>.
            </p>
      </div>
</body>
</html>