<?php
include("connectdb.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['create'])) {
    $name = $conn->real_escape_string($_POST['name']);
    $age = $conn->real_escape_string($_POST['age']);
    $sql = "INSERT INTO mahina (name, age) VALUES ('$name', '$age')";
    $conn->query($sql);
    header("Location: index.php");
    exit();
}
?>
