<?php

        
            ///Error Logging
            ini_set('display_errors', 1);
            ini_set('display_startup_errors', 1);
            error_reporting (E_ALL);
            
            include ("AdminSite/credientials.php");
            
            /// PHP Instructions
            // Create mysqli object to connect page to database
            // Needs a total of four parameters
            //1) Host URL
            //2) Username
            //3) Password
            //4) Database Name
            $mydb = new mysqli("jbradley46.hosting.eeecs.qub.ac.uk", "jbradley46", $pwd,  "jbradley46");
            
            if ($mydb->connect_errno)
            {
                echo "AN ERROR HAPPENED!!";
            }
            else {
                echo "CONNECTION SUCCESSFUL";
            }
?>