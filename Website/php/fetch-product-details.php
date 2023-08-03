<?php
    include('databaseConfigration.php');

    mysqli_select_db($mysqli, $dbName);

    $productID = $_GET['productID'];

    $query = "SELECT * FROM products WHERE productID = $productID";

    $result = mysqli_fetch_all(mysqli_query($mysqli, $query), MYSQLI_ASSOC);

    $query = "SELECT * FROM pictures WHERE productID = $productID";

    $pictures = mysqli_fetch_all(mysqli_query($mysqli, $query), MYSQLI_ASSOC);
    
    echo json_encode($result[0]+$pictures[0]);
?>