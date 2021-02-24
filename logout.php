<?php
    session_start();
    // Destroy session after logout
    if(session_destroy()) {
        // Take me back to Login
        header("Location: login.php");
    }
?>