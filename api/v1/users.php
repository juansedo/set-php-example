<?php

if (!isset($_POST['name'])) {
    header('Location: http://set-php.localhost');
    exit();
}

$name = htmlentities($_POST['name']);

try {
    include "../../scripts/db_connect.php";
    // Check connection
    if ($conn->connect_error) {
        throw new Exception('Connection failed');
    }
    
    $sql = "INSERT INTO names (name) VALUES ('$name')";
    
    $alert_message = "";
    if ($conn->query($sql)) {
        $alert_message = "$name fue agregado exitosamente!";
    } else {
        $alert_message = "Un error ocurrió al añadir a $name.";
    }
    
    $conn->close();
}
catch (Exception $error) {
    $alert_message = "Un error ocurrió al añadir a $name.";
}
finally {
    echo "<form id=\"myForm\" action=\"http://set-php.localhost\" method=\"POST\">
        <input type=\"hidden\" name=\"message\" value=\"$alert_message\">
        </form>
        <script type=\"text/javascript\">
            document.getElementById('myForm').submit();
        </script>";
}
?>


