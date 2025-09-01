<!DOCTYPE html>
<html>
<head>
<title>Rent A Car</title>
<script>
function redirectToCars(){
    // Get values
    var loc   = document.getElementById("location").value;
    var start = document.getElementById("start").value;
    var end   = document.getElementById("end").value;
 
    // Check empty
    if(loc=="" || start=="" || end==""){
        alert("Please fill all fields");
        return false;
    }
 
    // ✅ Redirect with values
    window.location.href = "cars.php?location=" + encodeURIComponent(loc) + "&start=" + start + "&end=" + end;
}
</script>
</head>
<body>
<h1>🚗 Rent A Car</h1>
 
<label>Location:</label>
<input type="text" id="location" placeholder="Enter Location"><br><br>
 
<label>Start Date:</label>
<input type="date" id="start"><br><br>
 
<label>End Date:</label>
<input type="date" id="end"><br><br>
 
<button onclick="redirectToCars()">Search Cars</button>
 
</body>
</html>
 
