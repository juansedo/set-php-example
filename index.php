<?php
// Initialize variables
$message = null;

// Set variables
if (isset($_POST['message'])) {
    $message = $_POST['message'];
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>NameTable</title>
</head>
<body>
    <header class="header">
        <h1>NameTable&trade;</h1>
    </header>
    <main class="main">
        <div class="card">
            <h2>Ingresa un nombre</h2>
            <form class="form-container" action="/api/v1/users" method="POST">
                <input type="text" name="name" id="name" placeholder="Nombre" required />
                <button type="submit">Enviar</button>
            </form>
            <div class="card-message">
                <?php
                    echo $message? "<p>$message</p>": "";
                ?>
            </div>
        </div>
    </main>
    <footer class="footer">
        <p>Copyright 2022 &copy; Todos los derechos reservados</p>
    </footer>
</body>
</html>