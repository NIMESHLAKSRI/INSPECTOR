<?php require "C:/xampp/htdocs/GitHub/INSPECTOR/inspector_project/back/Include/header.php"; ?>



<div class="container">


    <div class="messageCon">
        <p class="messageTxt"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                <path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0M7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0z" />
            </svg>You don't have a profile created.</p>
    </div>


    <!-- Button to open the modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#profileModal">
        Create Profile
    </button>

    <!-- Modal (Popup Form) -->
    <div class="modal fade" id="profileModal" tabindex="-1" role="dialog" aria-labelledby="profileModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
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
                            <input type="text" class="form-control" id="inspector_name" name="inspector_name" required>
                        </div>

                        <!-- Phone Number -->
                        <div class="form-group">
                            <label for="phone_number">Phone Number:</label>
                            <input type="tel" class="form-control" id="phone_number" name="phone_number" required>
                        </div>

                        <!-- Email -->
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>

                        <!-- Property Type -->
                        <div class="form-group">
                            <label for="property_type">Property Type:</label>
                            <select class="form-control" id="property_type" name="property_type" required>
                                <option value="">Select Property Type</option>
                                <option value="Home">Home</option>
                                <option value="Land">Land</option>
                                <option value="Condo">Condo</option>
                            </select>
                        </div>

                        <!-- Year of Experience -->
                        <div class="form-group">
                            <label for="year_of_experience">Years of Experience:</label>
                            <input type="number" class="form-control" id="year_of_experience" name="year_of_experience" required>
                        </div>

                        <!-- Pricing -->
                        <div class="form-group">
                            <label for="pricing">Pricing ($):</label>
                            <input type="number" class="form-control" id="pricing" name="pricing" required>
                        </div>

                        <!-- Bio -->
                        <div class="form-group">
                            <label for="bio">Bio:</label>
                            <textarea class="form-control" id="bio" name="bio" rows="4" required></textarea>
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
            </div>
        </div>
    </div>
</div>



<?php require "C:/xampp/htdocs/GitHub/INSPECTOR/inspector_project/back/Include/footer.php"; ?>