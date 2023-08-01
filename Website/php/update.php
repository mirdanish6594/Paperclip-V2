<?php

    include('databaseConfigration.php');

    mysqli_select_db($mysqli, $dbName);

    $id = $_GET['id'];

    $query = "UPDATE products SET recieved = 1 WHERE id = $id";

    if(mysqli_query($mysqli, $query)){
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . mysqli_error($mysqli);
    }


?>