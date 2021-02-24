<?php
//connect to database - no password
$db_conn=mysqli_connect("localhost", "root","","db_login");

if(mysqli_connect_errno())
{
        echo "Failed to connect to Database db_login: " . mysqli_connect_error();

}
