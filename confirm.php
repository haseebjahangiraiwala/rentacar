<?php
include "db.php";
$name=$_POST['name']; $email=$_POST['email']; $phone=$_POST['phone'];
$carId=$_POST['car_id']; $start=$_POST['start_date']; $end=$_POST['end_date'];
 
$conn->query("INSERT INTO users(name,email,phone) VALUES('$name','$email','$phone')");
$userId=$conn->insert_id;
 
$car=$conn->query("SELECT * FROM cars WHERE id=$carId")->fetch_assoc();
$days=(strtotime($end)-strtotime($start))/86400;
$total=$days * $car['price_per_day'];
 
$conn->query("INSERT INTO bookings(user_id,car_id,start_date,end_date,total_price)
VALUES($userId,$carId,'$start','$end',$total)");
?>
<!DOCTYPE html>
<html>
<head>
<title>Booking Confirmed</title>
<style>
body{font-family:Arial;background:#dff9fb;text-align:center;padding:50px;}
.card{background:#fff;display:inline-block;padding:30px;border-radius:12px;box-shadow:0 2px 6px rgba(0,0,0,0.2);}
h2{color:#27ae60;}
</style>
</head>
<body>
<div class="card">
    <h2>✅ Booking Confirmed!</h2>
    <p>Thank you, <?php echo $name; ?>. Your <?php echo $car['brand']." ".$car['model']; ?> is booked.</p>
    <p>From: <?php echo $start; ?> To: <?php echo $end; ?></p>
    <p>Total Price: 💲 <?php echo $total; ?></p>
</div>
</body>
</html>
