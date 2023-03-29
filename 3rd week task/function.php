<?php
    $connect = mysqli_connect ("localhost", "root", "", "sidehustle_db");

    if ($connect) {
        echo "CONNECTED! <br>";
    } else {
        echo "CONNECTION FAILED!";
    }

    include "multiplynumbers.php";


    $num1 = 2;
    $num2 = 3;
    $result = multiplyThreeNumbers($num1, $num2);


    $query = "INSERT INTO multiplication_results (num1, num2, num3, result) VALUES ($num1, $num2, 5, $result)";
    $result = mysqli_query($conn, $query);

    if ($query) {
        echo "Data saved successfully";
    }


mysqli_close($conn);
    
?>