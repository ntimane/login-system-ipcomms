<!DOCTYPE html>
<html>
<head>
    <title>IPCOMMS - Login</title>
    <link rel="stylesheet" href="css/styles.css"/>
    <center><img width="150px" src="images/clientlogo.png"></img></center>

</head>
<body background="images/download.png">
<?php
    require('database.php');
    //create user session using the username
    session_start();
    //do validations and check if correct credentials
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);    
        //security measure
        $username = mysqli_real_escape_string($db_conn, $username);
        $password = stripslashes($_REQUEST['password']);
        //security measure
        $password = mysqli_real_escape_string($db_conn, $password);
        // Check user is exist in the database
        $qry    = "SELECT * FROM users WHERE username='$username' AND password='" . md5($password) . "'";
        $res = mysqli_query($db_conn, $qry) or die(mysql_error());
        //get rows
        $rows = mysqli_num_rows($res);
        //check if row returned results
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            // on success
            header("Location: success.php");
        } else {
            echo "<div class='forms'>
                  <h3>Please enter valid credentials.</h3><br/>
                  <p>Go to <a href='login.php'>Login</a> again.</p>
                  </div>";
        }
    } else {
?>
    <form class="forms" method="post" name="login">
        <h1 class="headers">User Login</h1>
        <input type="text" class="my-inputs" name="username" placeholder="Username" autofocus="true"/>
        <input type="password" class="my-inputs" name="password" placeholder="Password"/>
        <input type="submit" value="Login" name="submit" class="buttons"/>
        <p><a href="register.php">Register Here</a></p>
  </form>
<?php
    }
?>
</body>
</html>