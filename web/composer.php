<?php

require('../vendor/autoload.php');
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '\..');
$dotenv->safeLoad();
$times = $_ENV['TIMES'];

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Test</title>
</head>
<body>
    <h1>Hello World</h1>
    <?php echo "<p>" . str_repeat("Hello", $times) . "</p>" ?>
</body>
</html>
