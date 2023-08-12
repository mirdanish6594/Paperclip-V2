<?php
    include('databaseConfigration.php');
    $donation = 0;

    if(isset($_POST['donation'])){
        $donation = 1;
    }
    $icons = [
        "Fashion and Accesories" => "watch",
        "Electronics and Gadgets" => "cpu",
        "Books and Stationery" => "bookmark-fill",
        "Miscellaneous" => "bag-heart-fill",
    ];
    $icon = $icons[$_POST['category']];
    $productName = $_POST['productName'];
    $category = $_POST['category'];
    $description = $_POST['description'];
    $sellerName = $_POST['name'];
    $phoneNumber = $_POST['phoneNumber'];
    $campusAddress = $_POST['campusAddress'];
    $received = 0;
    $productID = hexdec(uniqid());

    mysqli_select_db($mysqli, $dbName);

    $query = "INSERT INTO `products`(`productID`, `title`, `category`, `icon`, `description`, `price`) VALUES ('$productID' , '$productName', '$category', '$icon', '$description', '$donation')";
    $query2 = "INSERT INTO `sellers`(`productID`, `sellerName`, `phoneNumber`, `campusAddress`) VALUES ('$productID', '$sellerName', '$phoneNumber', '$campusAddress')";

    echo $query;
    echo $query2;

    if(mysqli_query($mysqli, $query) && mysqli_query($mysqli, $query2)){
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . mysqli_error($mysqli);
    }

?>