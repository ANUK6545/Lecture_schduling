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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
<div style="text-align: center; background-color: #007BFF; color: white; padding: 20px;">
        <h1>Welcome, Admin!</h1>
        
    </div>
</body>
</html>