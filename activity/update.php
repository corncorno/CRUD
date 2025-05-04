<?php
include("connectdb.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update'])) {
    $id = intval($_POST['id']);
    $name = $conn->real_escape_string($_POST['name']);
    $age = $conn->real_escape_string($_POST['age']);
    $sql = "UPDATE mahina SET name = '$name', age = '$age' WHERE id = $id";
    $conn->query($sql);
    header("Location: index.php");
    exit();
}
?>
