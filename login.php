 <?php

    /**
     * This small script makes it possible to test whether the 
     * RoundcubeLogin-class works as expected.
     *
     * Please find a detailed description of the available functions
     * in the original blog post:
     *
     * http://blog.philippheckel.com/2008/05/16/roundcube-login-via-php-script/
     * Updated July 2013
     */

    include "autologin.php";

    // Create RC login object.
    // Note: The first parameter is the URL-path of the RC inst.,
    //      NOT the file-system path. Trailing slash REQUIRED.
    // e.g. http://host.com/path/to/roundcube/ --> "/path/to/roundcube/"
    $rcl = new RoundcubeLogin("/roundcube/", $debug);
     
    // Override hostname, port or SSL-setting if necessary:
    // $rcl->setHostname("example.localhost");
    // $rcl->setPort(443);
    // $rcl->setSSL(true);
     
    try {
       // If we are already logged in, simply redirect
       if ($rcl->isLoggedIn())
          $rcl->redirect();
     
       // If not, try to login and simply redirect on success
       $rcl->login("adobe", "adobe");
     
       if ($rcl->isLoggedIn())
          $rcl->redirect();
     
       // If the login fails, display an error message
       die("ERROR: Login failed due to a wrong user/pass combination.");
    }
    catch (RoundcubeLoginException $ex) {
       echo "ERROR: Technical problem, ".$ex->getMessage();
       $rcl->dumpDebugStack(); exit;
    }
            
    ?>