<?php
$id = $_GET['id'];
$conn = new mysqli("localhost","root", "", "school");

if($conn->connect_error){
    die("connection error");
}

echo "delete from students where id = $id";
$delete = "delete from students where id = $id";
if($conn->query($delete)){
    header("Location: index.php");
}else{
    echo "delete operation failed";
}

?>








