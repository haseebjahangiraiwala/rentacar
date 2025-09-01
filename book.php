<?php include "db.php"; $carId=$_GET['id']; $car=$conn->query("SELECT * FROM cars WHERE id=$carId")->fetch_assoc(); ?>
<!DOCTYPE html>
<html>
<head>
<title>Book Car</title>
<style>
body{font-family:Arial;background:#f5f6fa;margin:0;}
header{background:#2c3e50;color:#fff;text-align:center;padding:15px;}
.container{width:50%;margin:40px auto;background:#fff;padding:30px;border-radius:12px;box-shadow:0 2px 6px rgba(0,0,0,0.2);}
input{width:100%;padding:10px;margin:10px 0;border-radius:8px;border:1px solid #ccc;}
button{background:#2980b9;color:#fff;padding:12px;width:100%;border:none;border-radius:10px;cursor:pointer;}
button:hover{background:#1f5f8a;}
</style>
<script>
function redirectConfirm(){
    document.getElementById("bookingForm").submit();
}
</script>
</head>
<body>
<header><h1>Book Your Car</h1></header>
<div class="container">
    <h2><?php echo $car['brand']." ".$car['model']; ?></h2>
    <form id="bookingForm" method="post" action="confirm.php">
        <input type="hidden" name="car_id" value="<?php echo $carId; ?>">
        <input type="text" name="name" placeholder="Your Name" required>
        <input type="email" name="email" placeholder="Your Email" required>
        <input type="text" name="phone" placeholder="Your Phone" required>
        <input type="date" name="start_date" required>
        <input type="date" name="end_date" required>
        <button type="submit">Confirm Booking</button>
    </form>
</div>
</body>
</html>
