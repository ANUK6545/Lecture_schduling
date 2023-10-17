<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- <script src="../assets/js/admin_dashboard.js"></script> -->
    <style>
        /* Define the sidebar styles */
        .sidebar {
            height: 100%;
            width: 60px; /* Adjust the width as needed */
            position: fixed;
            top: 0;
            left: 0;
            background-color: #333;
            overflow-x: hidden;
            transition: width 0.5s;
            padding-top: 60px;
        }

        .sidebar a {
            padding: 10px 15px;
            text-decoration: none;
            font-size: 20px;
            color: #fff;
            display: block;
        }

        .sidebar a:hover {
            background-color: #555;
        }

        .sidebar .text {
            display: none;
        }

        .sidebar.active {
            width: 250px;
        }

        .sidebar.active .text {
            display: block;
        }

        /* Define the button to open and close the sidebar */
        #openBtn {
            position: absolute;
            left: 10px;
            top: 10px;
            font-size: 30px;
            cursor: pointer;
            color: #fff;
        }

        /* Define the content area that pushes aside for the sidebar */
        #content {
            margin-left: 60px;
            transition: 0.5s;
        }
    </style>
</head>
<body>
    <!-- Button to open/close the sidebar -->
    <div id="openBtn">&#9776;</div>

    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <a href="add_course.php" class="icon" title="Add Course">
            <div class="icon-text">
            <i class="fa-solid fa-book-open" onclick="addCourse()"></i>
                <span class="text">Add Course</span>
            </div>
        </a>
        <a href="schdule_lec.php" class="icon" title="Schdule Course">
            <div class="icon-text">
                <i class="fa-solid fa-book" onclick="schduleCourse()"> </i>
                <span class="text">Schdule Course</span>
            </div>
        </a>
        <a href="viewInstr.php" class="icon" title="View Instructors">
            <div class="icon-text">
                <i class="fas fa-chalkboard-teacher" onclick="viewInstr()"></i>
                <span class="text"></span>
            </div>
        </a>

        <a href="../logout.php" class="icon" title="Logout">
            <div class="icon-text">
                <i class="fa fa-sign-out"></i>
                <span class="text">Logout</span>
            </div>
        </a>
    </div>

    <script>

      
        // JavaScript to toggle the sidebar open and closed
        document.getElementById("openBtn").addEventListener("click", function () {
            const sidebar = document.getElementById("sidebar");
            const content = document.getElementById("content");

            if (sidebar.classList.contains("active")) {
                sidebar.classList.remove("active");
                content.style.marginLeft = "60px";
            } else {
                sidebar.classList.add("active");
                content.style.marginLeft = "250px";
            }
        });
    </script>
</body>
</html>
