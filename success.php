<?php
//include auth_session.php file on all user panel pages
include("authentication.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>IPCOMMS - Home</title>
    <link rel="stylesheet" href="css/style.css" />
    <center><img width="150px" src="images/clientlogo.png"></img></center>

</head>
<body background="images/download.png">
    <div class="forms">
        <p>Welcome, <?php echo $_SESSION['username']; ?>!</p>
        <p>You are you in our home page. What are your fibre needs today?</p>
                <h1 class="headers">This month's deal</h1>

            <img src="images/special.jpeg"></img>

        <p><a href="logout.php">Logout</a></p>
    </div>
</body>
</html>