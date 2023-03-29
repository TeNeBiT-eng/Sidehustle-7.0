<?php
    function multiplyThreeNumbers ($num1, $num2, $num3=5) {
        $result = $num1 * $num2 * $num3;
        return $result;
    }
?>

<!-- $servername = "localhost";
$username = "yourusername";
$password = "yourpassword";
$dbname = "yourdbname";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} -->