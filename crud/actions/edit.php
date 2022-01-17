<?php

require_once('../connection/connection.php');

$connection = OpenConnection();

if(isset($_POST['edit'])){
    $id = $_POST['id'];
    $title = $_POST['titee'];

$connection->query("UPDATE todo SET  title = '$title' WHERE id = $id")or die($mysqli->error());
}

$connection->close()

?>