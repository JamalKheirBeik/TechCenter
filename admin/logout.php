<?php
session_start();
if (isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn']) {
    session_unset();
    session_destroy();
    header("Location: index.php");
} else {
    header("Location: ../index.php");
}
