<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

<?php
$db_connect = mysqli_connect("localhost", "root", "", "sidehustle_db");

if ($db_connect) {
    echo "Connected! <br>"; 
} else {
    echo "Connection Failed! <br>";
}

?>



    <?php
        $inset_data = mysqli_query($db_connect, "INSERT INTO students (id .name, age, gender) VALUES('1', 'Daniel', '23', 'M')");

        if ($inset_data) {
            echo "Data Saved Successfully";
        }
        
        // include "voting-eligibility.php";
    ?>

</body>

</html>