<?php
    include('databaseConfigration.php');
    $donation = 0;
    if(isset($_POST['donation'])){
        $donation = 1;
    }
    $productName = $_POST['productName'];
    $category = $_POST['category'];
    $description = $_POST['description'];
    $sellerName = $_POST['name'];
    $phoneNumber = $_POST['phoneNumber'];
    $campusAddress = $_POST['campusAddress'];
    $received = 0;
    $productID = uniqid();

    mysqli_select_db($mysqli, $dbName);

    $query = "INSERT INTO products (productID , productName, category, description, sellerName, phoneNumber, campusAddress, recieved , donation) VALUES ('$productID' , '$productName', '$category', '$description', '$sellerName', '$phoneNumber', '$campusAddress', '0' , '$donation')";

    echo $query;

    if(mysqli_query($mysqli, $query)){
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . mysqli_error($mysqli);
    }

?>