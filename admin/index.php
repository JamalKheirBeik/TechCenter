<?php
$title = 'Techno home | Admin Login';
require('./includes/header.php');
?>
<!-- page content goes here -->
<h1 class="title">Admin login</h1>
<form action="<?php $_SERVER['PHP_SELF'] ?>">
    <label for="username">Username</label>
    <input type="text" name="username" id="username" required>
    <label for="password">Password</label>
    <input type="password" name="password" id="password" required>
    <button type="submit">Login</button>
</form>

<?php
require('./includes/footer.php');
?>