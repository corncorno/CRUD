<?php
include("connectdb.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete'])) {
    $id = intval($_POST['id']);
    $sql = "DELETE FROM mahina WHERE id = $id";
    $conn->query($sql);
    header("Location: index.php");
    exit();
}
?>
