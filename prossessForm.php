<?php


session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST['firstname'];
    $surname = $_POST['surname'];
    $phoneNumber = $_POST['phoneNumber'];
    $carReg = $_POST['carReg'];
    $carMake = $_POST['carMake'];
    $carModel = $_POST['carModel'];
    $carMiles = $_POST['carMiles'];
    $carYear = $_POST['carYear'];
    $nct = isset($_POST['nct']) ? 1 : 0;

    $_SESSION['clientFN'] = $firstname;
    $_SESSION['clientSN'] = $surname;
    $_SESSION['clientPN'] = $phoneNumber;
    $_SESSION['clientCR'] = $carReg;
    $_SESSION['clientCM'] = $carMake;
    $_SESSION['CarModel'] = $carModel;
    $_SESSION['clientCM'] = $carMiles;
    $_SESSION['clientCY'] = $carYear;
    $_SESSION['nct'] = $nct;

    if ($nct === 1) {
        header("Location: usedCarSite.html");
        exit();
    } else {
        header("Location: nct.html");
        exit();
    }
} 
?>
