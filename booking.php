<?php

$conn = mysqli_connect("localhost", "root", "", "restify_hotel");

if(!$conn){
    die("Connection failed");
}
$name = $_POST['full_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$checkin = $_POST['checkin'];
$checkout = $_POST['checkout'];
$rooms = $_POST['rooms'];
$roomtype = $_POST['roomtype'];
$total = $_POST['totalprice'];

$sql="INSERT INTO BOOKING_INFO 
(Full_Name,Email,Phone,checkin,checkout,Rooms,Total) 
VALUES 
('$name','$email',$phone,'$checkin','$checkout',$rooms,$total)";

//echo $sql;
if(mysqli_query($conn,$sql))
    header("Location: success.html");
    else{
        echo"error:".mysqli_error($conn);
    }

?>

