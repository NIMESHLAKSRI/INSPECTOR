<?php
 require "C:/xampp/htdocs/GitHub/INSPECTOR/inspector_project/connection/conn.php";
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: http://localhost/GitHub/INSPECTOR/inspector_project/auth/login.php");
    exit();
}


if (isset($_POST['insert'])) {
    $inspec_session_id = $_SESSION['user_id'];
    $picture_name = $_FILES['profile_picture']['name'];
    $pic_tenp_name = $_FILES['profile_picture']['tmp_name'];
    move_uploaded_file($pic_tenp_name, "image/" . $picture_name);

    $inspector_name = $_POST['inspector_name'];
    $phone_number = $_POST['phone_number'];
    $email = $_POST['email'];
    $property_type = $_POST['property_type'];
    $year_of_experience = $_POST['year_of_experience'];
    $pricing = $_POST['pricing'];
    $bio = $_POST['bio'];


    $insert_query = "INSERT INTO inspector_details(id,inspector_name,phone_number,email,property_type,year_of_experience,pricing,bio,photo) VALUES ('$inspec_session_id','$inspector_name','$phone_number','$email','$property_type','$year_of_experience','$pricing','$bio','$picture_name')";
    mysqli_query($conn, $insert_query);
} else {
    echo "not inserd";
}


header("Location: read.php");
exit();

?>