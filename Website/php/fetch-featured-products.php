<?php
    include('databaseConfigration.php');

    mysqli_select_db($mysqli, $dbName);

    $query = "SELECT * FROM products WHERE featured = 1 ORDER BY productID DESC LIMIT 5";

    $result = mysqli_fetch_all(mysqli_query($mysqli, $query), MYSQLI_ASSOC);

    echo json_encode($result);
?>