<?php require "C:/xampp/htdocs/GitHub/INSPECTOR/inspector_project/back/Include/header.php"; ?>

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
    .profile-card {
        background: #e6e9ed;
        border-radius: 15px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        padding: 30px;
    }

 

    .profile-card img {
        border-radius: 50%;
        width: 150px;
        height: 150px;
        object-fit: cover;
        border: 3px solid #e9ecef;
    }

    .profile-card .info {
        padding-left: 20px;
    }

    .profile-card .info h5 {
        font-size: 1.25rem;
        margin-bottom: 10px;
    }

    .profile-card .info p {
        font-size: 0.9rem;
        color: #777;
    }

    .modal-header {
        background-color: #f8f9fa;
        border-bottom: none;
    }

    .modal-body {
        padding: 30px;
    }

    .modal-footer {
        border-top: none;
        justify-content: center;
    }

    .bio-section p {
        font-size: 0.9rem;
        color: #777;
    }

    input {
        margin: 10px 0;
    }
</style>

<?php

$readreg = "select * from inspector_details";
$rdreg = mysqli_query($conn, $readreg);
$row = mysqli_fetch_array($rdreg);

?>
<!-- Profile Card -->
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-4">
            <div class="profile-card">
                <div class="d-flex align-items-center">
                    <img src="image/<?php echo $row['photo']; ?>" alt="Profile Picture">
                    <div class="info">
                        <h5><?php echo $row['inspector_name']; ?></h5>
                        <p><?php echo $row['property_type']; ?><span> Inspector</span></p>
                        <p><strong>Experience:</strong> <?php echo $row['year_of_experience']; ?><span> Years</span></p>
                        <p><strong>Pricing:</strong> $<?php echo $row['pricing']; ?></p>
                    </div>
                </div>
                <div class="bio-section mt-3">
                    <p><strong>Bio:</strong><?php echo $row['bio']; ?></p>
                </div>
                <p><h6>Email:</h6> $<?php echo $row['email']; ?></p>
                <button class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#profileModal">Edit Profile</button>
                <button class="btn btn-danger mt-3">Delete</button>

            </div>
        </div>
    </div>
</div>

<!-- Modal (Popup Form) -->
<div class="modal fade" id="profileModal" tabindex="-1" aria-labelledby="profileModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="profileModalLabel">Create Profile</h5>
            </div>
            <div class="modal-body">
                <!-- Profile Creation Form -->
                <form action="insert.php" method="POST" enctype="multipart/form-data">

                    <!-- Inspector Name -->
                    <div class="form-group">
                        <label for="inspector_name">Name:</label>
                        <input type="text" class="form-control" id="inspector_name" name="inspector_name" value="John Doe" required>
                    </div>

                    <!-- Phone Number -->
                    <div class="form-group">
                        <label for="phone_number">Phone Number:</label>
                        <input type="tel" class="form-control" id="phone_number" name="phone_number" value="123-456-7890" required>
                    </div>

                    <!-- Email -->
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" value="john.doe@example.com" required>
                    </div>

                    <!-- Property Type -->
                    <div class="form-group">
                        <label for="property_type">Property Type:</label>
                        <select class="form-control" id="property_type" name="property_type" required>
                            <option value="">Select Property Type</option>
                            <option value="Home" selected>Home</option>
                            <option value="Land">Land</option>
                            <option value="Condo">Condo</option>
                        </select>
                    </div>

                    <!-- Year of Experience -->
                    <div class="form-group">
                        <label for="year_of_experience">Years of Experience:</label>
                        <input type="number" class="form-control" id="year_of_experience" name="year_of_experience" value="5" required>
                    </div>

                    <!-- Pricing -->
                    <div class="form-group">
                        <label for="pricing">Pricing ($):</label>
                        <input type="number" class="form-control" id="pricing" name="pricing" value="300" required>
                    </div>

                    <!-- Bio -->
                    <div class="form-group">
                        <label for="bio">Bio:</label>
                        <textarea class="form-control" id="bio" name="bio" rows="4" required>John is a highly skilled real estate inspector with over 5 years of experience in the industry, specializing in home inspections, land evaluations, and condo assessments.</textarea>
                    </div>

                    <!-- Profile Picture Upload -->
                    <div class="form-group">
                        <label for="profile_picture">Upload Profile Picture:</label>
                        <input type="file" class="form-control-file" id="profile_picture" name="profile_picture" accept="image/*" required>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-success" name="insert">Submit</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS (including Popper.js for modal functionality) -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>



<?php require "C:/xampp/htdocs/GitHub/INSPECTOR/inspector_project/back/Include/footer.php"; ?>