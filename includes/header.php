<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($title) ? $title : 'Techno home' ?></title>
    <link rel="icon" href="./public/favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./public/css/style.css">
</head>

<body>
    <form class="search" action="search.php">
        <input class="glass" type="text" name="query" placeholder="Search ...">
        <button type="submit" class="glass"><i class="fa fa-search"></i></button>
    </form>
    <div class="container">
        <nav class="glass">
            <ul>
                <li><a href="index.php"><i class="fa fa-home"></i><span class="tooltip">Home</span></a></li>
                <li><a href="products.php"><i class="fa fa-desktop"></i><span class="tooltip">Products</span></a></li>
                <li><a href="courses.php"><i class="fa fa-graduation-cap"></i><span class="tooltip">Courses</span></a></li>
                <li><a href="contact.php"><i class="fa fa-envelope"></i><span class="tooltip">Contact us</span></a></li>
                <li><a href="about.php"><i class="fa fa-info"></i><span class="tooltip">About us</span></a></li>
            </ul>
        </nav>
        <?php
        $currentFileName = pathinfo($_SERVER['REQUEST_URI'])['filename'];
        if ($currentFileName != "index" && $currentFileName != "product" && $currentFileName != "course") {
            echo '<div class="content glass">';
        } ?>