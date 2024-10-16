<?php
session_start();

$base_url = dirname($_SERVER["PHP_SELF"]);
$base_url = rtrim($base_url, '/pages/aliancas');


$clienteLogado = isset($_SESSION['idcliente']);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php  require_once '../utils/navbar.php'; ?>

    <a href="gerente/index.php">teste</a>

<?php  require_once '../utils/footer.php'; ?>
</body>
</html>