<?php
$title = 'Tech center | Home';
require('./includes/header.php');
?>
<!-- page content goes here -->
<div class="slider glass">
    <div class="slides">
        <div class="slide active">
            <img src="./public/about.jpg" alt="" />
            <div class="caption">
                <h1>Slide 1</h1>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nobis
                    dicta error ab ut corrupti modi fugit necessitatibus esse suscipit
                    perspiciatis.
                </p>
            </div>
        </div>
        <div class="slide">
            <img src="./public/tech.jpg" alt="" />
            <div class="caption">
                <h1>Slide 2</h1>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    Voluptates, et.
                </p>
            </div>
        </div>
    </div>
    <div id="indexes"></div>
    <button id="prev"><i class="fa fa-angle-left"></i></button>
    <button id="next"><i class="fa fa-angle-right"></i></button>
</div>


<?php
require('./includes/footer.php');
?>