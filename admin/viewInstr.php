<?php
session_start();
if(isset($_SESSION['username']));
else{
header('location: ../index.php');
}


include 'admin_sidebar.php';
include '../dbcon.php';
?>

<!DOCTYPE html>
<html>

<head>
    <title>List of Instructors</title>
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
        <h2>List of Instructors</h2>
        <table>
            <tr>
                <th>Instructor Name</th>

            </tr>

            <?php

            $sql = "SELECT uname FROM user where role = 'instructor' ";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["uname"] . "</td>";

                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='3'>No data found</td></tr>";
            }
            ?>
        </table>
    </div>
</body>

</html>