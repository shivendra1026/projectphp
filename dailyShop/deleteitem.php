<?php
include('config.php');

$id=$_GET["id"];
$sql = " DELETE FROM cart WHERE `id`=$id";
if(mysqli_query($conn,$sql)){
    //echo "Record deleted successfully";
    header("location:cart.php"); 
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>
