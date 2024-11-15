<?php
require "C:/xampp/htdocs/GitHub/INSPECTOR/inspector_project/back/Include/header.php";

session_start();

// Check if the user is logged in

if (!isset($_SESSION['user_id'])) {

    header("Location: http://localhost/GitHub/INSPECTOR/inspector_project/auth/login.php");
    exit();
}

?>

<div class="content">
    <h2>Dashboard</h2>
    <div class="d-flex">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Inspectors</h5>
                <p class="card-text">Number of Inspectors: <?php echo $propertyCount; ?></p>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Agents</h5>
                <p class="card-text">Number of Agents: <?php echo $categoryCount; ?></p>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Requests</h5>
                <p class="card-text">Number of Requests: <?php echo $adminCount; ?></p>
            </div>
        </div>
    </div>
</div>
<?php require "C:/xampp/htdocs/GitHub/INSPECTOR/inspector_project/back/Include/footer.php"; ?>