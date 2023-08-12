<?php
    include('databaseConfigration.php');

    $productName = $_POST['productName'];
    $category = $_POST['category'];
    $description = $_POST['description'];
    $sellerName = $_POST['name'];
    $phoneNumber = $_POST['phoneNumber'];
    $campusAddress = $_POST['campusAddress'];

    mysqli_select_db($mysqli, $dbName);

    $query = "INSERT INTO `requests`(`productName`, `description`, `clientName`, `category`, `phoneNumber`, `campusAddress`) VALUES ('$productName', '$description', '$sellerName', '$category', '$phoneNumber', '$campusAddress')";

    if(mysqli_query($mysqli, $query)){
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . mysqli_error($mysqli);
    }

?>