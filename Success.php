<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Assuming you have already established your database connection
    $servername = "localhost";
    $username = "I&TLabs";
    $password = "Mounav1269@";
    $dbname = "i&t_labs1";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and bind the INSERT statement
    $stmt = $conn->prepare("INSERT INTO sampledata1 (month, week, closed_connects, attendance, visitors, face_to_face) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param(" ", $month, $week, $closed_connects, $attendance, $visitors, $face_to_face);

    // Set parameters and execute
    $month = $_POST["month"];
    $week = $_POST["week"];
    $closed_connects = $_POST["closed_connects"];
    $attendance = $_POST["attendance"];
    $visitors = $_POST["visitors"];
    $face_to_face = $_POST["face_to_face"];

    if ($stmt->execute()) {
        echo "<div class='result-section'>";
        echo "<h2>Data successfully inserted into the database.</h2>";
        echo "</div>";
    } else {
        echo "<div class='result-section'>";
        echo "<h2>Error: Unable to insert data into the database.</h2>";
        echo "</div>";
    }

    $stmt->close();
    $conn->close();
} else {
    echo "okk";
}
?>
