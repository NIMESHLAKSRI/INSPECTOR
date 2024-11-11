<?php
 require "C:/xampp/htdocs/GitHub/INSPECTOR/inspector_project/connection/conn.php"; 

if (isset($_POST['insert'])) {

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


    $insert_query = "INSERT INTO inspector_details(inspector_name,phone_number,email,property_type,year_of_experience,pricing,bio,photo) VALUES ('$inspector_name','$phone_number','$email','$property_type','$year_of_experience','$pricing','$bio','$picture_name')";
    mysqli_query($conn, $insert_query);
} else {
    echo "asrgerggggedffbdfbdbdggbgggbgbg";
}


header("Location: read.php");
exit();

?>