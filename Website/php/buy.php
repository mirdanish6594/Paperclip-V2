<?php
    include('databaseConfigration.php');

    $productID = $_GET['productID'];
    $name = $_POST['name'];
    $phoneNumber = $_POST['phoneNumber'];

    mysqli_select_db($mysqli, $dbName);

    $query = "INSERT INTO `clients`(`productID`, `clientName`, `clientPhone`, `transactionDone`) VALUES ('$productID', '$name', '$phoneNumber', '0')";

    if(mysqli_query($mysqli, $query)){
        echo "1";
    } else {
        echo mysqli_error($mysqli);
    }

?>