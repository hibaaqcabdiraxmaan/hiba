<?php
// Handle booking submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $patient   = htmlspecialchars($_POST['patient']);
    $room      = htmlspecialchars($_POST['room']);
    $date_in   = htmlspecialchars($_POST['date_in']);
    $date_out  = htmlspecialchars($_POST['date_out']);

    // Database connection
    $conn = new mysqli("localhost", "root", "", "hospital");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO bookings (patient, room, date_in, date_out) 
            VALUES ('$patient', '$room', '$date_in', '$date_out')";

    if ($conn->query($sql) === TRUE) {
        $message = "<div class='success'>🏨 Room booked successfully!</div>";
    } else {
        $message = "<div class='error'>❌ Error: " . $conn->error . "</div>";
    }

    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Hospital Room Booking</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background: linear-gradient(135deg, #74ebd5 0%, #ACB6E5 100%);
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }
    .booking-container {
      background: rgba(255, 255, 255, 0.95);
      padding: 40px;
      border-radius: 16px;
      box-shadow: 0 12px 30px rgba(0,0,0,0.3);
      width: 450px;
      text-align: center;
      animation: fadeIn 1.2s ease-in-out;
    }
    .booking-container h1 {
      margin-bottom: 25px;
      color: #2c3e50;
      font-size: 28px;
    }
    form input, form select, form button {
      width: 100%;
      padding: 14px;
      margin: 12px 0;
      border-radius: 10px;
      border: 1px solid #ccc;
      font-size: 16px;
      transition: 0.3s;
    }
    form input:focus, form select:focus {
      border-color: #3498db;
      box-shadow: 0 0 8px rgba(52, 152, 219, 0.6);
    }
    form button {
      background: linear-gradient(135deg, #3498db, #2980b9);
      color: white;
      border: none;
      cursor: pointer;
      font-weight: bold;
    }
    form button:hover {
      background: linear-gradient(135deg, #2980b9, #1f618d);
      transform: scale(1.05);
    }
    .success {
      color: green;
      font-weight: bold;
      margin-top: 15px;
    }
    .error {
      color: red;
      font-weight: bold;
      margin-top: 15px;
    }
    @keyframes fadeIn {
      from {opacity: 0; transform: translateY(-20px);}
      to {opacity: 1; transform: translateY(0);}
    }
  </style>
</head>
<body>
  <div class="booking-container">
    <h1>🏥 Book a Hospital Room</h1>
    <?php if (!empty($message)) echo $message; ?>
    <form method="POST">
      <input type="text" name="patient" placeholder="Patient Name" required>
      <select name="room" required>
        <option value="">Select Room Type</option>
        <option value="General Ward">General Ward</option>
        <option value="Private Room">Private Room</option>
        <option value="ICU Bed">ICU Bed</option>
      </select>
      <label>Check-in Date:</label>
      <input type="date" name="date_in" required>
      <label>Check-out Date:</label>
      <input type="date" name="date_out" required>
      <button type="submit">Book Room</button>
    </form>
  </div>
</body>
</html>
