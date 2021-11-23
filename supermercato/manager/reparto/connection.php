<?php

$connection = mysqli_connect("localhost","root","","supermercato");

if(!$connection)
{
    die("Connessione fallita: " . mysqli_connect_error());
}

?>