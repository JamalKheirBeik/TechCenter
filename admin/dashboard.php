<?php
session_start();
if (isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn']) {
    $title = "Admin | Dashboard";
    include('./includes/header.php');
?>

    <!-- page content goes here -->
    <div class="analytics">
        <div class="numberOfVisits">
            <h1><i class="fas fa-eye"></i> Total visits</h1>
            <p>500</p>
        </div>
        <div class="numberOfUsers">
            <h1><i class="fas fa-eye"></i> Total visits</h1>
            <p>500</p>
        </div>
        <div class="numberOfCrew">
            <h1><i class="fas fa-eye"></i> Total visits</h1>
            <p>500</p>
        </div>
        <div class="numberOfproducts">
            <h1><i class="fas fa-eye"></i> Total visits</h1>
            <p>500</p>
        </div>
        <div class="numberOfCourses">
            <h1><i class="fas fa-eye"></i> Total visits</h1>
            <p>500</p>
        </div>
    </div>

<?php
    include('./includes/footer.php');
} else {
    header('Location: ../index.php');
}
