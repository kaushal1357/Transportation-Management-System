<?php
// Database connection (replace with your actual database credentials)
$host = 'localhost';
$db = 'your_database_name';
$user = 'your_username';
$pass = 'your_password';
$dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";

try {
    $pdo = new PDO($dsn, $user, $pass);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit;
}

// Function to check vehicle availability
function isVehicleAvailable($pdo, $vehicle_id, $start_time, $end_time) {
    $query = "SELECT * FROM bookings WHERE vehicle_id = :vehicle_id AND 
              ((start_time < :end_time) AND (end_time > :start_time))";
    $stmt = $pdo->prepare($query);
    $stmt->execute(['vehicle_id' => $vehicle_id, 'start_time' => $start_time, 'end_time' => $end_time]);
    return $stmt->rowCount() === 0; // True if no conflicting bookings
}

// Handle booking request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $vehicle_id = $_POST['vehicle_id'];
    $user_id = $_POST['user_id']; // Assume user ID is known or authenticated
    $start_time = $_POST['start_time'];
    $end_time = $_POST['end_time'];

    // Check if the vehicle is available
    if (isVehicleAvailable($pdo, $vehicle_id, $start_time, $end_time)) {
        // Insert booking into the database
        $stmt = $pdo->prepare("INSERT INTO bookings (vehicle_id, user_id, start_time, end_time, status) 
                                VALUES (:vehicle_id, :user_id, :start_time, :end_time, 'confirmed')");
        $stmt->execute(['vehicle_id' => $vehicle_id, 'user_id' => $user_id, 
                         'start_time' => $start_time, 'end_time' => $end_time]);
        echo "Booking confirmed!";
    } else {
        echo "Vehicle is not available during the requested time.";
    }
}
?>
