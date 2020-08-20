<?php
    session_start();
    
    if (!isset($_SESSION['Login'])) {
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
    }
    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['Login']);
        header("location: login.php");
    }
    ?>
<!DOCTYPE html>
<html>
<head>
<title>Student Home</title>
<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>

<div class="header">
<head>
<h1 style="text-align: center;"> Student Home </h1>
</head>
</div>

<div class="content">
<!-- notification message -->
<?php if (isset($_SESSION['success'])) : ?>
<div class="error success" >
<h3>
<?php
    echo $_SESSION['success'];
    unset($_SESSION['success']);
    ?>
</h3>
</div>
<?php endif ?>

<!-- logged in user information -->
<?php  if (isset($_SESSION['Login'])) : ?>

<nav align="center">


<p><a href="update.php">Update Information</a></li></p>
<p></p>
<p><a href="updatePass.php">Change Password</a></p>
<p></p>
<p><a href="searchPeople.php">Search People</a></p>
<p></p>
<p><a href="searchRoommate.php">Search Roommate</a></p>
<p></p>
<p><a href="searchTextbook.php">Search Textbook</a></p>
<p></p>
<p><a href="pur_Menu.php">Purchase </a></p>
<p></p>
<p><a href="Activity_Menu.php">Student Activity</a></p>
<p></p>

</nav>

<p style="text-align: center;"> <a href="index.php?logout='1'" style="color: maroon;">logout</a> </p>
<?php endif ?>
</div>

</body>
</html>


