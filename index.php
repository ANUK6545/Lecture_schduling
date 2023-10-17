

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lecture Scheduling</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="card-container">
        <div class="card">
            <h2>Are you an Admin?</h2>
            <p>Click here to login and manage instructors and lecture schedules</p>
            <input type="button" value="Admin Login" onclick="login()">
        </div>

        <div class="card">
            <h2>Instructor</h2>
            <p>Click here to check your assigned lectures</p>
            <input type="button" value="Instructor Login" onclick="login()" class="instructor-button">
        </div>
    </div>
    <script>
        function login(){
            window.location.replace("login.php");
        }
    </script>
</body>
</html>
