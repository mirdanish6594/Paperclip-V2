<?php
    include('databaseConfigration.php');

    mysqli_select_db($mysqli, $dbName);

    $category = $_GET['category'];
    
    if (isset($_GET['search'])){
        $searchTerm = $_GET['search'];
    } else {
        $searchTerm = '';
    }

    $query = "SELECT * FROM products WHERE category = $category AND title LIKE '%$searchTerm%' ORDER by title ASC";

    $result = mysqli_fetch_all(mysqli_query($mysqli, $query), MYSQLI_ASSOC);

    echo json_encode($result);
?>