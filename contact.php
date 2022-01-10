<?php
$title = 'Techno home | Contact us';
require('./includes/header.php');
?>
<!-- page content goes here -->
<h1 class="title">Contact us</h1>
<div class="contact">
    <ul class="info">
        <li><i class="fas fa-mobile-alt"></i></li>
        <li>+963 999 888 777</li>
        <li><i class="fa fa-map-marker-alt"></i></li>
        <li>lattakia, Syria</li>
        <li><i class="fa fa-envelope"></i></li>
        <li>technohome@support.com</li>
        <li>
            <ul class="socials">
                <li><a href="#" target="_blank"><i class="fab fa-facebook"></i></a></li>
                <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
            </ul>
        </li>
    </ul>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="name">Your name</label>
        <input type="text" id="name" name="name">
        <label for="email">Your email</label>
        <input type="email" id="email" name="email">
        <label for="message">Your message</label>
        <textarea name="message" id="message"></textarea>
        <button type="submit">Send</button>
    </form>
</div>

<?php
require('./includes/footer.php');
?>