<?php include './config/database.php'; ?>
<?php 
if (isset($_POST['signup'])) {
    // Validate name
    if (empty($_POST['name'])) {
        $nameErr = 'Name is required';
    } else {
        // $name = filter_var($_POST['name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $name = filter_input(
        INPUT_POST,
        'name',
        FILTER_SANITIZE_FULL_SPECIAL_CHARS
        );
    }

    // Validate Phone Number
    if (empty($_POST['phone_number'])) {
        $phone_numberErr = 'Phone Number is required';
    } else {
        // $phone_number = filter_var($_POST['phone_number'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $phone_number = filter_input(
        INPUT_POST,
        'phone_number',
        FILTER_SANITIZE_FULL_SPECIAL_CHARS
        );
    }

    // Validate email
    if (empty($_POST['email'])) {
        $emailErr = 'Email is required';
    } else {
        // $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    }

    // Validate password
    if (empty($_POST['password'])) {
        $passwordErr = 'Name is required';
    } else {
        // $password = filter_var($_POST['password'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $password = filter_input(
        INPUT_POST,
        'password',
        FILTER_SANITIZE_FULL_SPECIAL_CHARS
        );
    }

    if (empty($nameErr) && empty($phone_numberErr) && empty($emailErr) && empty($passwordErr)) {
        // add to database
        $sql = "INSERT INTO login (name, phone_number, email, password) VALUES ('$name', '$phone_number', '$email', '$password')";
        if (mysqli_query($conn, $sql)) {
          //echo "success";
          session_start();
          $_SESSION['name'] = $name;
          header('Location: home.php');
        } else {
          //echo "error"
          echo 'Error: ' . mysqli_error($conn);
        }
    }
}
?>