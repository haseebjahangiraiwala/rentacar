<?php
// PHP side: values get karo
$loc   = isset($_GET['location']) ? $_GET['location'] : "";
$start = isset($_GET['start']) ? $_GET['start'] : "";
$end   = isset($_GET['end']) ? $_GET['end'] : "";
?>
<!DOCTYPE html>
<html>
<head>
<title>Rent A Car</title>
<style>
body {font-family: Arial, sans-serif; background:#f5f5f5; margin:0; padding:20px;}
.container {max-width:600px; margin:auto; background:white; padding:20px; border-radius:12px; box-shadow:0 0 10px rgba(0,0,0,0.2);}
h1 {color:#333; text-align:center;}
label {display:block; margin-top:10px; font-weight:bold;}
input {width:100%; padding:10px; margin-top:5px; border:1px solid #ccc; border-radius:6px;}
button {margin-top:15px; width:100%; padding:12px; background:#007bff; color:white; font-size:16px; border:none; border-radius:6px; cursor:pointer;}
button:hover {background:#0056b3;}
.result {margin-top:20px; padding:15px; background:#e9f7ef; border:1px solid #b2d8c2; border-radius:8px;}
</style>
<script>
function searchCars(){
    let loc   = document.getElementById("location").value.trim();
    let start = document.getElementById("start").value;
    let end   = document.getElementById("end").value;
 
    if(loc=="" || start=="" || end==""){
        alert("⚠️ Please fill all fields!");
        return false;
    }
 
    // redirect with parameters
    window.location.href = "car.php?location=" + encodeURIComponent(loc) + "&start=" + start + "&end=" + end;
}
</script>
</head>
<body>
<div class="container">
    <h1>🚗 Rent A Car</h1>
 
    <!-- Search Form -->
    <label>Location:</label>
    <input type="text" id="location" placeholder="Enter Location" value="<?php echo htmlspecialchars($loc); ?>">
 
    <label>Start Date:</label>
    <input type="date" id="start" value="<?php echo htmlspecialchars($start); ?>">
 
    <label>End Date:</label>
    <input type="date" id="end" value="<?php echo htmlspecialchars($end); ?>">
 
    <button onclick="searchCars()">Search Cars</button>
 
    <!-- Results Section -->
    <?php if($loc && $start && $end): ?>
        <div class="result">
            <h2>✅ Search Results</h2>
            <p><b>Location:</b> <?php echo htmlspecialchars($loc); ?></p>
            <p><b>Start Date:</b> <?php echo htmlspecialchars($start); ?></p>
            <p><b>End Date:</b> <?php echo htmlspecialchars($end); ?></p>
            <hr>
            <p>🚙 Toyota Corolla - $50/day</p>
            <p>🚗 Honda Civic - $55/day</p>
            <p>🚘 Suzuki Swift - $40/day</p>
        </div>
    <?php endif; ?>
</div>
</body>
</html>
