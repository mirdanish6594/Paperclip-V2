<?php
    include('databaseConfigration.php');

    mysqli_select_db($mysqli, $dbName);
    if ($_GET['search'] != "" && $_GET['category'] != ""){

        $searchTerm = $_GET['search'];
        $category = $_GET['category'];
        $query = "SELECT * FROM products WHERE category = $category AND title LIKE '%$searchTerm%' ORDER by title ASC";

    }elseif($_GET['search'] != "") {

        $searchTerm = $_GET['search'];
        $query = "SELECT * FROM products WHERE title LIKE '%$searchTerm%' ORDER by title ASC";

    }elseif($_GET['category'] != ""){

        $category = $_GET['category'];
        $query = "SELECT * FROM products WHERE category = $category ORDER by title ASC";
        
    }else{

        $query = "SELECT * FROM products ORDER by title ASC";
        
    }

   

    $result = mysqli_fetch_all(mysqli_query($mysqli, $query), MYSQLI_ASSOC);

    echo json_encode($result);
?>