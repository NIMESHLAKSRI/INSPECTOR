<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
    /*      profile card          */

    .container {
        margin-top: 20px;
    }

    .profile-card {
        background: #eeedf2;
        border-radius: 15px;
        box-shadow: 0px 52px 107px rgba(0, 0, 0, 0.04);
        padding: 30px;
        margin-bottom: 20px;
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
require "C:/xampp/htdocs/GitHub/INSPECTOR/inspector_project/connection/conn.php";

if (isset($_POST['search'])) {

    $category = $_POST['category'];
    $select_category = "SELECT * FROM inspector_details WHERE property_type='$category'";
    $exe_select_category = mysqli_query($conn, $select_category);
}

?>



<!--              profile card                -->



<?php if (mysqli_num_rows($exe_select_category) > 0): ?>
    <div class="container my-5">
        <!-- Use Bootstrap grid system to make cards responsive and wrap -->
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            <?php while ($row = mysqli_fetch_array($exe_select_category)): ?>
                <!-- Profile Card -->
                <div class="col">
                    <div class="profile-card">
                        <div class="d-flex align-items-center">
                            <img src="http://localhost/GitHub/INSPECTOR/inspector_project/back/My_Profile/image/<?php echo $row['photo']; ?>" alt="Profile Picture">
                            <div class="info">
                                <h5><?php echo $row['inspector_name']; ?></h5>
                                <p><?php echo $row['property_type']; ?><span> Inspector</span></p>
                                <p><strong>Experience:</strong> <?php echo $row['year_of_experience']; ?><span> Years</span></p>
                                <p><strong>Pricing:</strong> $<?php echo $row['pricing']; ?></p>
                            </div>
                        </div>
                        <div class="bio-section mt-3">
                            <p><strong>Bio:</strong> <?php echo $row['bio']; ?></p>
                        </div>
                        <div class="bio-section mt-3">
                            <p><strong>Email:</strong> <?php echo $row['email']; ?></p>
                        </div>
                        <div class="bio-section mt-3">
                            <p><strong>Phone No:</strong> <?php echo $row['phone_number']; ?></p>
                        </div>
                        <!-- Add data-id attribute for JavaScript to pick up -->
                        <button class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#profileModal" data-id="<?php echo $row['id']; ?>">Add Request</button>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
<?php endif; ?>




<!--            Modal (Popup Form)          -->




<div class="modal fade" id="profileModal" tabindex="-1" aria-labelledby="profileModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="profileModalLabel">Create Profile</h5>
            </div>
            <div class="modal-body">
                <!-- Profile Creation Form -->
                <form action="" method="POST">
                    <!-- Inspector Name -->
                    <div class="form-group">
                        <label for="inspector_name">Name:</label>
                        <input type="text" class="form-control" id="inspector_name" name="inspector_name">
                    </div>
                    <div class="form-group">

                        <input type="hidden" class="form-control" id="inspector_id" name="id" readonly>
                    </div>

                    <!-- Phone Number -->
                    <div class="form-group">
                        <label for="phone_number">Phone Number:</label>
                        <input type="tel" class="form-control" id="phone_number" name="phone_number">
                    </div>

                    <!-- Email -->
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-success" name="update">Add Request</button>
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

<script>
    // JavaScript to handle dynamic population of modal with inspector ID
    document.addEventListener("DOMContentLoaded", function() {
        // Get all the "Add Request" buttons
        const buttons = document.querySelectorAll('[data-bs-target="#profileModal"]');

        // Add event listener to each button
        buttons.forEach(button => {
            button.addEventListener('click', function() {
                // Get the inspector ID from the data-id attribute
                const inspectorId = this.getAttribute('data-id');

                // Set the inspector ID in the modal form
                document.getElementById('inspector_id').value = inspectorId;
            });
        });
    });
</script>