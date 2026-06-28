<?php
// doctor_home.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Doctor Homepage</title>
  <style>
    body {margin:0; font-family:Arial, sans-serif; background:#f4f7fb;}
    header {background:#2a9d8f; color:#fff; padding:20px;}
    nav ul {list-style:none; margin:0; padding:0; display:flex; justify-content:center;}
    nav ul li {margin:0 15px;}
    nav ul li a {color:#fff; text-decoration:none; font-weight:bold;}
    .hero {background:url('https://images.unsplash.com/photo-1588776814546-ec7c7c7a3a2a') no-repeat center/cover; height:400px; display:flex; align-items:center; justify-content:center; color:#fff; font-size:2.5em; font-weight:bold;}
    .section {padding:50px; text-align:center;}
    .section h2 {color:#264653; margin-bottom:20px;}
    .doctors {display:grid; grid-template-columns:repeat(auto-fit,minmax(250px,1fr)); gap:20px;}
    .doctor-card {background:#fff; border-radius:8px; box-shadow:0 4px 8px rgba(0,0,0,0.1); padding:20px;}
    .doctor-card img {width:100%; border-radius:8px;}
    footer {background:#264653; color:#fff; text-align:center; padding:20px;}
  </style>
</head>
<body>
  <header>
    <h1>City Hospital</h1>
    <nav>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Doctors</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </nav>
  </header>

  <div class="hero">
    Welcome to Our Hospital
  </div>

  <div class="section">
    <h2>Our Doctors</h2>
    <div class="doctors">
      <div class="doctor-card">
        <img src="https://images.unsplash.com/photo-1607746882042-944635dfe10e" alt="Doctor 1">
        <h3>Dr. Sarah Johnson</h3>
        <p>Cardiologist</p>
      </div>
      <div class="doctor-card">
        <img src="https://images.unsplash.com/photo-1607746882042-944635dfe10e" alt="Doctor 2">
        <h3>Dr. Ahmed Ali</h3>
        <p>Pediatrician</p>
      </div>
      <div class="doctor-card">
        <img src="https://images.unsplash.com/photo-1607746882042-944635dfe10e" alt="Doctor 3">
        <h3>Dr. Maria Lopez</h3>
        <p>Neurologist</p>
      </div>
    </div>
  </div>

  <div class="section">
    <h2>Facilities</h2>
    <p>We provide modern laboratories, a full-service pharmacy, and advanced diagnostic equipment to ensure the best care for our patients.</p>
  </div>

  <footer>
    <p>&copy; 2026 City Hospital | Contact: info@cityhospital.com</p>
  </footer>
</body>
</html>
