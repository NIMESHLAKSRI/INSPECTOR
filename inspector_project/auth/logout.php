<?php

session_start();


session_unset();


session_destroy();


header("Location: http://localhost/GitHub/INSPECTOR/inspector_project/auth/login.php");
exit;
?>