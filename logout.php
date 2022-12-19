<?php

    session_start();
    
    //make sure the user is logged in
    if ( isset( $_SESSION['user'] ) ) {
        // delete the user session data
        unset( $_SESSION['user'] );
        //redirect user back to inde
        header( 'Location: /' );
        exit;
    } else {
        // redirect to login page
        header( 'Location: /login.php');
        exit;
    }

?>