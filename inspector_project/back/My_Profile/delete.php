<?php
require "C:/xampp/htdocs/GitHub/INSPECTOR/inspector_project/connection/conn.php";

session_start();

$inspec_sess_id = $_GET['id'];

$delete_query = "delete from inspector_details where id='$inspec_sess_id'";
$exe_delete = mysqli_query($conn, $delete_query);


header('Location:my_profile.php');
