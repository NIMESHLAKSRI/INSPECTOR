<?php
 require "C:/xampp/htdocs/GitHub/INSPECTOR/inspector_project/connection/conn.php";
session_start();

if (isset($_POST['update'])) {
    $inspec_ses_id = $_SESSION['user_id'];
    $picture_name = $_FILES['profile_picture']['name'];
    $pic_tenp_name = $_FILES['profile_picture']['tmp_name'];
    move_uploaded_file($pic_tenp_name, "image/" . $picture_name);

    $name = $_POST['inspector_name'];
    $phone_number = $_POST['phone_number'];
    $email = $_POST['email'];
    $property_type = $_POST['property_type'];
    $year_of_experience = $_POST['year_of_experience'];
    $pricing = $_POST['pricing'];
    $bio = $_POST['bio'];

    $insert_query = "update inspector_details set inspector_name='$name', phone_number='$phone_number', email='$email',property_type='$property_type',year_of_experience='$year_of_experience',pricing='$pricing',bio='$bio',photo='$picture_name' where id='$inspec_ses_id'";
    $EXE_inst = mysqli_query($conn, $insert_query);
}

header("Location: read.php");
exit();

?>