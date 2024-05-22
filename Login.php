<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the entered email and password from the form
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Define valid sets of credentials
    $validCredentials = [
        'mounav269@gmail.com' => 'mounav',
        'pramodh@gmail.com' => 'pramodh',
        'surya@gmail.com' => 'surya123'
    ];
    // Check if the entered credentials match any of the valid combinations
    if (array_key_exists($email, $validCredentials) && $validCredentials[$email] === $password) {
        // If the credentials match, display a success alert
        echo "<script>alert('Login successful!'); window.location.href = 'form.php';</script>";
        session_start();
        $_SESSION['name']=$email;
        header('Location:dashboard.php');
        exit();
    } else {
        // If the credentials don't match, display an error message or handle as needed
        echo "Invalid credentials. Please try again.";
    }
    
}
?>
