<?php
    include('databaseConfigration.php');

    mysqli_select_db($mysqli, $dbName);

    $category = $_GET['category'];

    $query = "SELECT * FROM products WHERE category = $category ORDER by RAND() LIMIT 5";

    $result = mysqli_fetch_all(mysqli_query($mysqli, $query), MYSQLI_ASSOC);

    echo json_encode($result);
?>