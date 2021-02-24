<!DOCTYPE html>
<html>
<head>
    <title>IPCOMMS - Registration</title>
    <link rel="stylesheet" href="css/styles.css"/>
    
    <center><img width="150px" src="images/clientlogo.png"></img></center>
</head>
<body background="images/download.png">
<?php
    require('database.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($db_conn, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($db_conn, $password);
        $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `users` (username, password, date_created)
                     VALUES ('$username', '" . md5($password) . "', '$create_datetime')";
        $result   = mysqli_query($db_conn, $query);
        if ($result) {
            echo "<div class='forms'>
                  <h3>You are registered successfully.</h3><br/>
                  <p>Click here to <a href='login.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='forms'>
                  <h3>Some required fields missing.</h3><br/>
                  <p>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>
    <form class="forms" action="" method="post">
        <h1 class="headers">User Registration form</h1>
    
        <label>First Name:</label><input type="text" class="my-inputs" name="username" placeholder="Peter" required /><br>
        <label>Last Name:</label><input type="text" class="my-inputs" name="username" placeholder="Coetzee" required /><br>
        <label>Username:</label><input type="text" class="my-inputs" name="username" placeholder="peterc" required /><br>
        <label>Create New Password:</label><input type="password" class="my-inputs" name="password" placeholder="Password"><br>
        <input type="submit" name="submit" value="Register" class="buttons">
        <p><a href="login.php">Login</a></p>
    </form>
<?php
    }
?>
</body>
</html>