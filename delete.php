<?php
// include database connection file
include_once("conn.php");

$id = $_GET['id'];
$result = mysqli_query($mysqli, "DELETE FROM mahasiswa WHERE Nim=$id");
// Get id from URL to delete that user
/*if ($_GET['id']){
    $id = $_GET['id'];
    $result = mysqli_query($mysqli, "DELETE FROM nilai WHERE id=$id");
}
else {
    $id = $_GET['idm'];
    $result = mysqli_query($mysqli, "DELETE FROM mahasiswa WHERE id=$id");
}*/
 
// Delete user row from table based on given id

 
// After delete redirect to Home, so that latest user list will be displayed.
header("Location:index.php");
?>