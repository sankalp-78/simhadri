<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form with Logo</title>
    <style>
        /* Styles for form container and elements */
        form {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            position: relative;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        select,
        input[type="file"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        /* Style for the logo */
        img.logo {
            position: absolute;
            top: 10px;
            left: 10px;
            width: 100px; /* Adjust width as needed */
            height: auto; /* Maintain aspect ratio */
        }
    </style>
</head>
<body>

<!-- Logo added in the top left corner -->
<img class="logo" src="https://jcombiz.com/assets/img/logo.png" alt="Jcombiz Logo" width="300">



<form action="formres.php" method="post" enctype="multipart/form-data">
    <label for="month">Month:</label>
    <select id="month" name="month">
        <option value="January">January</option>
        <option value="February">February</option>
        <option value="March">March</option>
        <option value="April">April</option>
        <option value="May">May</option>
        <option value="June">June</option>
        <option value="July">July</option>
        <option value="August">August</option>
        <option value="September">September</option>
        <option value="October">October</option>
        <option value="November">November</option>
        <option value="December">December</option>
    </select><br><br>

    <label for="week">Week:</label>
    <select id="week" name="week">
        <?php
        // PHP loop to generate dropdown options for weeks 1 to 5
        for ($i = 1; $i <= 5; $i++) {
            echo "<option value='$i'>$i</option>";
        }
        ?>
    </select><br><br>

    <label for="closed_connects">Closed Connects:</label>
    <select id="closed_connects" name="closed_connects">
        <?php
        // PHP loop to generate dropdown options for closed connects 1 to 100
        for ($i = 1; $i <= 100; $i++) {
            echo "<option value='$i'>$i</option>";
        }
        ?>
    </select><br><br>

    <label for="attendance">Attendance %:</label>
    <select id="attendance" name="attendance">
        <option value="80-85%">80-85%</option>
        <option value="86-90%">86-90%</option>
        <option value="91-95%">91-95%</option>
        <option value="96-99%">96-99%</option>
        <option value="100%">100%</option>
    </select><br><br>

    <label for="visitors">Number of Visitors:</label>
    <select id="visitors" name="visitors">
        <?php
        // PHP loop to generate dropdown options for visitors 1 to 100
        for ($i = 1; $i <= 100; $i++) {
            echo "<option value='$i'>$i</option>";
        }
        ?>
    </select><br><br>

    <label for="face_to_face">Face to Face:</label>
    <select id="face_to_face" name="face_to_face">
        <?php
        // PHP loop to generate dropdown options for face to face 1 to 100
        for ($i = 1; $i <= 100; $i++) {
            echo "<option value='$i'>$i</option>";
        }
        ?>
    </select><br><br>

    <!-- Add more form elements as needed -->

    <input type="submit" value="Submit">
</form>

</body>
</html>
