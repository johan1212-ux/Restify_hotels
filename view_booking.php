<?php
$conn = mysqli_connect("localhost", "root", "", "restify_hotel");

if(!$conn){
    die("Connection failed");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Booking</title>
</head>
        <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<style>

body {
        background: url("images/background.jpg") no-repeat center;
        font-family: Arial, Helvetica, sans-serif;
      }
table{
border-collapse: collapse;
width:80%;
margin:auto;
background: rgba(255,255,255,0.8);   
backdrop-filter: blur(5px);          
}

th,td{
border:1px solid black;
padding:10px;
text-align:center;
}

th{
background:black;
color:white;
}

a{
color:red;
font-weight:bold;
text-decoration:none;
}
footer {
        background: rgb(37, 37, 39);
        color: white;
        text-align: center;
        padding: 15px;
        margin-top: 30px;
      }

</style>
<body>
        <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="home.html"><h2>Restify Stay</h2></a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link active" aria-current="page" href="home.html"
              >Home</a
            >
            <a class="nav-link" href="rooms.html">Rooms</a>
            <a class="nav-link" href="index.html">Booking</a>
            <a class="nav-link" href="view_booking.php">view booking</a>
          </div>
        </div>
      </div>
    </nav>
    <h2 align="center"> Booked Rooms On Dates</h2>


    <table>
    <tr>
        <th>SR.NO</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Checkin</th>
        <th>Checkout</th>
        <th>Rooms</th>
        <th>Total</th>
        <th>Action</th>
    </tr>


    
    <?php
    $sql = "SELECT * FROM booking_info";
    $result = mysqli_query($conn,$sql);


    while($row = mysqli_fetch_assoc($result))
        {
    ?>

    <tr>
    <td><?php echo $row['id'];?></td>
    <td><?php echo $row['Full_Name'];?></td>
    <td><?php echo $row['Email'];?></td>
    <td><?php echo $row['Phone'];?></td>
    <td><?php echo $row['checkin'];?></td>
    <td><?php echo $row['checkout'];?></td>
    <td><?php echo $row['Rooms'];?></td>
    <td><?php echo $row['Total'];?></td>

    <td><a href="delete_booking.php?id=<?php echo $row['id'] ?? ''; ?>">
delete
</a></td>
    </tr>

    <?php
        }
    ?>
    </table>

</body>
</html>