<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($title) ? $title : 'Tech center | admin' ?></title>
    <link rel="icon" href="../public/favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./styles/css/style.css">
</head>

<body>
    <?php if (isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn']) {
        include('./includes/DB.php');
        $db = new DB();
        $db->connect();
        $crewInfo = $db->getCrewInfo($_SESSION['id']);
        $username = $crewInfo["Username"];
        $firstName = $crewInfo["First_Name"];
        $lastName = $crewInfo["Last_Name"];
        $jobTitle = $crewInfo["Job_Title"];
        $email = $crewInfo["Email"];
        $phoneNumber = $crewInfo["Phone_Number"];
        $profilePicture = $crewInfo["Profile_Picture"];
    ?>
        <nav>
            <ul>
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="users.php">Users</a></li>
                <li><a href="crew.php">Crew</a></li>
                <li><a href="products.php">Products</a></li>
                <li><a href="courses.php">Courses</a></li>
                <li><a href="settings.php">Settings</a></li>
                <li class="drop-down">
                    <img src="<?php echo strlen($profilePicture) > 0 ? $profilePicture : "./images/utility/avatar.png"; ?>" alt="">
                    <i class="fa fa-caret-down">
                        <ul>
                            <li><a href="<?php echo "profile.php?id=" . $_SESSION['id']; ?>">My profile</a></li>
                            <li><a href="logout.php">Logout</a></li>
                        </ul>
                    </i>
                </li>
            </ul>
        </nav>
    <?php } ?>