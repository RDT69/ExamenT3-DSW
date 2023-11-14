<!DOCTYPE html>

<?php
require "../vendor/autoload.php";
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Page</title>
</head>
<body>
    <h2>Tienda</h2>
    <ul>
        <li><a href="list.php?filter=all">Show All</a></li>
        <li><a href="list.php?filter=products">Show Products</a></li>
        <li><a href="list.php?filter=services">Show Services</a></li>
        <li><a href="list.php?filter=expiration">Show Expired Elements</a></li>
        <li><a href="list.php?filter=unexpired">Show no Expired Elements</a></li>
    </ul>
</body>
</html>