<?php
session_start();

include("dbcon.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST['firstname'];
    $surname = $_POST['surname'];
    $phoneNumber = $_POST['phoneNumber'];

    $clientSql = "INSERT INTO client (firstname, surname, phoneNumber) VALUES ";
    $clientSql .= "('$firstname', '$surname', '$phoneNumber')";

    if (mysqli_query($conn, $clientSql)) {
        echo "Client information has been added successfully";
    }

    $carReg = $_POST['carReg'];
    $carMake = $_POST['carMake'];
    $carModel = $_POST['carModel'];
    $carMiles = $_POST['carMiles'];
    $carYear = $_POST['carYear'];
    $nct = isset($_POST['nct']) ? 1 : 0;

    $carSql = "INSERT INTO usedCars (carMake, carModel, carReg, carMiles, carYear, nct) VALUES ";
    $carSql .= "('$carMake', '$carModel', '$carReg', '$carMiles', '$carYear', '$nct')";

    if (mysqli_query($conn, $carSql)) {
        echo "Car information has been added successfully";
    }

    mysqli_close($conn);

    if ($nct === 0) {
        header("Location: nct.html");
        exit();
    }
}
?>
