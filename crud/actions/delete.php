<?php

require_once('../connection/connection.php');

$connection = OpenConnection();

if(isset($_GET['delete'])){
    $id = $_GET['delete'];

$connection->query("DELETE FORM todo WHERE id=$id")or die($mysqli->error());
}

$connection->close()

?>