<?php
include("connectdb.php");

function getMembers() {
    global $conn;
    return $conn->query("SELECT id, name, age FROM mahina");
}
?>
