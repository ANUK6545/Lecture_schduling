<?php
include("dbcon.php");
// error_reporting(0);
$data = $_REQUEST;


if ($data['function'] == 'login') {
    $query = "select u_id, uname, role from user where pwd='" . $data['password'] . "' and uname='" . $data['uname'] . "' limit 1 ";
    $result = mysqli_query($conn, $query);
    while ($r = mysqli_fetch_assoc($result)) $rows[] = $r;

    if (count($rows) == 1) {
      
        echo json_encode($rows);
        session_start();

        $_SESSION['username'] = $data['uname'];
        $_SESSION['session_id'] = $rows[0]['u_id'];
    } else {
        echo "0";
    }

    exit;
}
