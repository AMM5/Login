<?php
/**
 * Created by PhpStorm.
 * User: diang
 * Date: 15/11/2018
 * Time: 18:06*/

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'Dequa16.');
define('DB_NAME', 'login');

    /* Attempt to connect to MySQL database */
    $mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

    // Check connection
    if($mysqli === false){
        die("ERROR: Could not connect. " . $mysqli->connect_error);
    }
?>