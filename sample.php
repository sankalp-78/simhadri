<?php include './config/database.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Report Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            margin-bottom: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #fff; /* Set table background color to white */
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
        .total-score-card {
            background-color: #fff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }
        .total-score {
            font-size: 24px;
            text-align: center;
            margin: 0;
        }
        .details-section {
            margin-top: 20px;
            margin-bottom: 20px;
            text-align: left;
            background-color: #fff;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 50%;
        }
        .details-section p {
            margin: 5px 0;
        }
        .details-section p strong {
            display: inline-block;
            width: 120px;
        }
    </style>
</head>
<body>

<h1>Report Form</h1>

    <?php
        session_start();
        $details_name = $_SESSION['name'];
        $details_email=$_SESSION['email'];
        $details_phone=$_SESSION['phone'];
        $details_day_no=$_SESSION['day_no'];

        if (isset($details_name) && isset($details_email) && isset($details_phone) && isset($details_day_no)) {
            
            $sql_answers = "SELECT * FROM answers where day_no='$details_day_no' ";
            $result_answers = mysqli_query($conn, $sql_answers);
            $data_answers = mysqli_fetch_assoc($result_answers);

            $sql_response = "SELECT * FROM response where name='$details_name' and email='$details_email' and phone='$details_phone' and day_no='$details_day_no' ";
            $result_response = mysqli_query($conn, $sql_response);
            $data_response = mysqli_fetch_assoc($result_response);

            ?>

            <!-- Details section -->
            <div class="details-section">
                <p><strong>Day:</strong><?php echo $data_response['day_no']; ?></p>
                <p><strong>Name:</strong><?php echo $data_response['name']; ?></p>
                <p><strong>Email:</strong><?php echo $data_response['email']; ?></p>
                <p><strong>Phone:</strong><?php echo $data_response['phone']; ?></p>
                <p><strong>Age:</strong><?php echo $data_response['age']; ?></p>
                <p><strong>Gender:</strong><?php echo $data_response['gender']; ?></p>
            </div>

            <!-- Gap between Details and Table -->
            <div style="margin-bottom: 20px;"></div>

            <!-- Report Table -->
            <table>
                <tr>
                    <th>Question Number</th>
                    <th>Question</th>
                    <th>Selected Answer</th>
                    <th>Actual Answer</th>
                    <th>Topic</th>
                    <th>Level</th>
                    <th>Score</th>
                </tr>
                
                <?php
                
                    echo "<tr>";
                    echo "<td>1</td>";
                    echo "<td>{$data_answers['question_1']}</td>";
                    echo "<td>{$data_response['answer_1']}</td>";
                    echo "<td>{$data_answers['answer_1']}</td>";
                    echo "<td>{$data_answers['topic_1']}</td>";
                    echo "<td>{$data_answers['level_1']}</td>";
                    echo "<td>{$data_response['score_1']}</td>";
                    echo "</tr>";

                    echo "<tr>";
                    echo "<td>2</td>";
                    echo "<td>{$data_answers['question_2']}</td>";
                    echo "<td>{$data_response['answer_2']}</td>";
                    echo "<td>{$data_answers['answer_2']}</td>";
                    echo "<td>{$data_answers['topic_2']}</td>";
                    echo "<td>{$data_answers['level_2']}</td>";
                    echo "<td>{$data_response['score_2']}</td>";
                    echo "</tr>";

                    echo "<tr>";
                    echo "<td>3</td>";
                    echo "<td>{$data_answers['question_3']}</td>";
                    echo "<td>{$data_response['answer_3']}</td>";
                    echo "<td>{$data_answers['answer_3']}</td>";
                    echo "<td>{$data_answers['topic_3']}</td>";
                    echo "<td>{$data_answers['level_3']}</td>";
                    echo "<td>{$data_response['score_3']}</td>";
                    echo "</tr>";

                    echo "<tr>";
                    echo "<td>4</td>";
                    echo "<td>{$data_answers['question_4']}</td>";
                    echo "<td>{$data_response['answer_4']}</td>";
                    echo "<td>{$data_answers['answer_4']}</td>";
                    echo "<td>{$data_answers['topic_4']}</td>";
                    echo "<td>{$data_answers['level_4']}</td>";
                    echo "<td>{$data_response['score_4']}</td>";
                    echo "</tr>";

                    echo "<tr>";
                    echo "<td>5</td>";
                    echo "<td>{$data_answers['question_5']}</td>";
                    echo "<td>{$data_response['answer_5']}</td>";
                    echo "<td>{$data_answers['answer_5']}</td>";
                    echo "<td>{$data_answers['topic_5']}</td>";
                    echo "<td>{$data_answers['level_5']}</td>";
                    echo "<td>{$data_response['score_5']}</td>";
                    echo "</tr>";

                    echo "<tr>";
                    echo "<td>6</td>";
                    echo "<td>{$data_answers['question_6']}</td>";
                    echo "<td>{$data_response['answer_6']}</td>";
                    echo "<td>{$data_answers['answer_6']}</td>";
                    echo "<td>{$data_answers['topic_6']}</td>";
                    echo "<td>{$data_answers['level_6']}</td>";
                    echo "<td>{$data_response['score_6']}</td>";
                    echo "</tr>";

                ?>
            </table>

            <!-- Total Score Card -->
            <div class="total-score-card">
                <p class="total-score"><b>Total Score: <?php echo $data_response['total_score']; ?></b></p>
            </div>

            
        <?php 
        } else {
            echo "we will send you the scores soon";
        }
    ?>

</body>
</html>