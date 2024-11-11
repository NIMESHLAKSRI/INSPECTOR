<?php
require "C:/xampp/htdocs/GitHub/INSPECTOR/inspector_project/connection/conn.php";
session_start();

if(isset($_POST['submit'])) {
    $username = $_POST['inspector_username'];
    $password = $_POST['inspector_password'];

    $select_query = "SELECT * FROM inspector_login WHERE inspector_username ='$username'";
    $exe_select = mysqli_query($conn, $select_query);
    $row = mysqli_fetch_array($exe_select);

    if($username === $row['inspector_username'] && $password === $row['inspector_password']){
        $_SESSION['inspector_username'] =  $row['inspector_username'];
        $_SESSION['user_id'] = $row['id'];
        header("Location: home.php");
        exit;
    }  
}
 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inspector Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center mb-4">Inspector Login</h5>
                        <?php if (isset($error)): ?>
                            <div class="alert alert-danger"><?= $error ?></div>
                        <?php endif; ?>
                        <form method="POST" action="">
                            <div class="mb-3">
                                <label for="inspector_username" class="form-label">Username</label>
                                <input type="text" class="form-control" name="inspector_username" id="inspector_username" required>
                            </div>
                            <div class="mb-3">
                                <label for="inspector_password" class="form-label">Password</label>
                                <input type="password" class="form-control" name="inspector_password" id="inspector_password" required>
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary w-100">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>