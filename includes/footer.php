<div class="container-fluid bg-dark text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Address</h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Central Division Ntungamo Municipality</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+ 256 702832564</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>ntungamohschool@gmail.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social rounded-circle" href="https://x.com/ntungamo_hs?s=20">
                            <i class='bx bx-x'></i>
                        <a class="btn btn-outline-light btn-social rounded-circle" href="https://www.facebook.com/groups/1675562059338359/"><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social rounded-circle" href="https://www.youtube.com/@NHS126"><i
                                class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Useful Informatin</h5>
                    <a class="btn btn-link" href="about.php">About School</a>
                    <a class="btn btn-link" href="appointment.php">Applying Online</a>
                    <a class="btn btn-link" href="contact.php">Location</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Useful Links</h5>
                    <a class="btn btn-link" href="about.php">About Us</a>
                    <a class="btn btn-link" href="appointment.php">Admission</a>
                    <a class="btn btn-link" href="contact.php">Contact Us</a>
                    <a class="btn btn-link" href="feature.php">Co-curricular Activities</a>
                    <a class="btn btn-link" href="team.php">Gallery</a>
                    <a class="btn btn-link" href="testimonial.php">Academics</a>
                </div>

                <?php
// Fetch the latest updates from the database
$sql = "SELECT reportingday, visitingday, closingday FROM updates ORDER BY id DESC LIMIT 1"; // Adjust the query based on your needs
$result = mysqli_query($conn, $sql);

$reportingday = $visitingday = $closingday = "";

if ($result) {
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $reportingday = $row['reportingday'];
        $visitingday = $row['visitingday'];
        $closingday = $row['closingday'];
    } else {
        echo "No records found.";
    }
} else {
    echo "Error: " . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>

<div class="col-lg-3 col-md-6">
    <h5 class="text-light mb-4">Latest Updates</h5>
    <a class="btn btn-link" href=""><?php echo !empty($reportingday) ? "Reporting Date: $reportingday" : "Reporting Date not set"; ?></a>
    <a class="btn btn-link" href=""><?php echo !empty($visitingday) ? "Visiting Day: $visitingday" : "Visiting Day not set"; ?></a>
    <a class="btn btn-link" href=""><?php echo !empty($closingday) ? "Closing Date: $closingday" : "Closing Date not set"; ?></a>
</div>


            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">Nhs Website</a>, All Right Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        Designed By <a class="border-bottom" href="">+256 741451346</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</php>