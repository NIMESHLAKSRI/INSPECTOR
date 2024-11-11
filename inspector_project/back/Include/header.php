<?php define("ADMINURL", "http://localhost/GitHub/INSPECTOR/inspector_project/back/"); ?>
<?php require "C:/xampp/htdocs/GitHub/INSPECTOR/inspector_project/connection/conn.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo ADMINURL; ?>css/home.css?v=<?php echo time(); ?>" rel="stylesheet">
    <link href="<?php echo ADMINURL; ?>css/my_profile.css?v=<?php echo time(); ?>" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Admin Panel</title>
</head>

<body>
    <div class="sidebar">
        <h4>LOGO</h4>
        <ul class="nav flex-column">
            <li class="nav-item"><a class="nav-link text-white" href="<?php echo ADMINURL; ?>">Home</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="<?php echo ADMINURL; ?>/My_Profile/my_profile.php">MY Profile</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="<?php echo ADMINURL; ?>/Requests/request.php">Requests</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="<?php echo ADMINURL; ?>/logout.php">Logout</a></li>
        </ul>
    </div>