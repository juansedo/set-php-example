<?php
if (realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])) {
    header( 'HTTP/1.0 404 Not Found', TRUE, 404 );

    die( header('Location: http://set-php.localhost') );
}

$servername = "localhost";
$username = "root";
$password = "";
$db = "test_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);
?>