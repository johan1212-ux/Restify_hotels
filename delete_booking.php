<?php
$conn = mysqli_connect("localhost", "root", "", "restify_hotel");

if(!$conn){
    die("Connection failed");
}

$id = $_GET['id'];  

$sql = "DELETE FROM booking_info WHERE id='$id'";

if(mysqli_query($conn,$sql))
{
    header("Location:view_booking.php");
}else{
    echo "Error in deleting";
}
?>