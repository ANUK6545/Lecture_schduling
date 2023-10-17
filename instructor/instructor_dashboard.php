<?php
session_start();
if(isset($_SESSION['username']));
else{
header('location: index.php');
}

include '../dbcon.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instructor homepage</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f0f0f0;
            margin: 20px;
        }

        .card {
            border: 1px solid #ddd;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            background-color: #fff;
            margin: 20px auto;
            max-width: 800px;
            padding: 20px;
        }

        h2 {
            color: #007BFF;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            border: 1px solid #dddddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #007BFF;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <div class="card">
        <h2>Your lectures are schduled for the follwing dates:</h2>
        <table>
            <tr>
                <th>Course Name</th>
                <th>Date</th>

            </tr>

            <?php

            $sql = "SELECT lecture_date, course_name FROM timetable where instructor = '".$_SESSION['username']."' ";
            $result = $conn->query($sql);

            if ($result) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["course_name"] . "</td>";
                    echo "<td>" . $row["lecture_date"] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='3'>No data found</td></tr>";
            }
            ?>
        </table>

        <a href="../logout.php" class="icon" title="Logout">
  <div class="icon-text">
    <button class="logout-button">Logout</button>
  </div>
</a>
    </div>
</body>
</html>

