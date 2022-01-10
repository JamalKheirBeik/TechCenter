<?php
$currentFileName = pathinfo($_SERVER['REQUEST_URI'])['filename'];
if ($currentFileName != "index" && $currentFileName != "product" && $currentFileName != "product") {
    echo '</div>';
} ?>
</div>
<script src="./public/js/animation.js"></script>
<?php if ($currentFileName == "index") echo '<script src="./public/js/slider.js"></script>'; ?>
<?php if ($currentFileName == "product") echo '<script src="./public/js/preview.js"></script>'; ?>
</body>

</html>