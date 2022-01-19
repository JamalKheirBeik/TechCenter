<?php
$title = 'Tech center | Admin Login';
require('./includes/header.php');
require('./includes/DB.php');
$db = new DB();
$db->connect();
$db->init();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $hashedPassword = hash('md5', $password);
    $findingCrewResult = $db->findCrew($username, $hashedPassword);
    if ($findingCrewResult["found"]) {
        session_start();
        $_SESSION['id'] = $findingCrewResult["id"];
        $_SESSION['isLoggedIn'] = true;
        header("Location: dashboard.php");
    }
}
?>
<!-- page content goes here -->
<div class="login">
    <h1 class="title">Admin login</h1>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" required autocomplete="off">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" required>
        <button type="submit">Login</button>
    </form>
</div>

<?php
require('./includes/footer.php');
$db->close();
?>