<?php


  function conecta(){

    $host="localhost";
    $user="";
    $password="";
    $database="";

    $mysqli = new mysqli($host,$user,$password,$database);
    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
    //echo $mysqli->host_info . "\n";

    $mysqli = new mysqli("127.0.0.1", $user, $password, $database, 3306);
    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }

    //echo $mysqli->host_info . "\n";
    return $mysqli;
  }

  function desconecta($mysqli){
    @mysqli_close($mysqli);

  }
