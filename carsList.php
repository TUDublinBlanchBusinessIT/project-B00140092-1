<?php
include("dbcon.php");

$usedCarsSql = "SELECT * FROM usedCars";
$usedCarsResult = mysqli_query($conn, $usedCarsSql);

$clientSql = "SELECT * FROM client";
$clientResult = mysqli_query($conn, $clientSql);

mysqli_close($conn);
?>

<html>
<head>
    <title>Cars List</title>
    <link rel="stylesheet" type="text/css" href="style3.css">
</head>
<body>

    <div class="container">
        <div class="used-cars">
            <h2>Used Cars Details</h2>
            <ul>
                <?php while ($row = mysqli_fetch_assoc($usedCarsResult)) : ?>
                    <li>
                        <?php echo "Car ID: " . $row['id'] . ", Make: " . $row['carMake'] . ", Model: " . $row['carModel']; ?>
                    </li>
                <?php endwhile; ?>
            </ul>
        </div>

        <div class="client-details">
            <h2>Client Details</h2>
            <ul>
                <?php while ($row = mysqli_fetch_assoc($clientResult)) : ?>
                    <li>
                        <?php echo "Client ID: " . $row['id'] . ", Name: " . $row['firstname'] . " " . $row['surname'] . ", Phone: " . $row['phoneNumber']; ?>
                    </li>
                <?php endwhile; ?>
            </ul>
        </div>
    </div>

</body>
</html>
