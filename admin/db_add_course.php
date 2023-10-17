<?php include '../dbcon.php';

$data = $_REQUEST;

if ($data['function'] == 'add_course') {

    // $multiple_batches = substr($data['multiple_batches'],0, -1);

    $query = " INSERT INTO  course ( course_name ,  level ,  description ,  multiple_batches ) VALUES ('" . $data['course_name'] . "' ,'" . $data['level'] . "', '" . $data['description'] . "' , '" . $data['multiple_batches'] . "')";
    $result = mysqli_query($conn, $query);

    exit;
}

if ($data['function'] == 'course_dd') {

    $query = " select multiple_batches from course where course_name = '" . $data['selectedCourse'] . "'";

    $result = mysqli_query($conn, $query);

    while ($r = mysqli_fetch_assoc($result)) $rows[] = $r;
    echo json_encode($rows);

    exit;
}

if ($data['function'] == 'schdule_lec') {

//    echo $query = "select * from timetable where instructor = '" . $data['instructor_dd'] . "'";
//     $result = mysqli_query($conn, $query);

//     $count = mysqli_num_rows($result);

//     if ($count !== 0) {
        // then instructor is present in the table and it will check for the dates they are assigned 
        $query = "select * from timetable where instructor = '" . $data['instructor_dd'] . "' and lecture_date = '" . $data['date'] . "' ";
        $result = mysqli_query($conn, $query);

        while ($r = mysqli_fetch_assoc($result)) $rows[] = $r;

        $count = mysqli_num_rows($result);

        if ($count == 0) {
            // then insert the data in the db 
            $query = "INSERT INTO  timetable ( course_name ,  instructor ,  lecture_date ,  batch ) VALUES 
        ('" . $data['course_dd'] . "','" . $data['instructor_dd'] . "','" . $data['date'] . "','" . $data['batch_dd'] . "')";
            $result = mysqli_query($conn, $query);
            echo "1";
        } else {
            echo "0";
        }
        exit;
    }
   

