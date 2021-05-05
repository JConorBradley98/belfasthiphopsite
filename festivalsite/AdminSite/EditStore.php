<?php
//Start The Session
session_start();

if(!isset($_SESSION['jbradleyfestival'])){
    header ("Location : ../Login.php");
}

?>


<html>
    <head>
        <title>Belfast Hip-Hop Festival | Home </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        
        <!---CSS StyleSheets & Frameworks--->
        
        <link href="../stylesheets/admin.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" type="text/css" href="https://rawgit.com/outboxcraft/beauter/master/beauter.min.css"/>
        <link href="stylesheets/beauter-master/beauter.min.css" rel="stylesheet" type="text/css"/>
        
        
        <!----Scripts to Load CSS UI Frameworks---->
        
        <script src ="https://rawgit.com/outboxcraft/beauter/master/beauter.min.js"></script>
        
        <!----PHP Starts here---->
            <?php          
            ini_set('display_errors', 1);
            ini_set('display_startup_errors', 1);
            error_reporting (E_ALL);                     
            
            include ("credientials.php");
            
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
    </head>
    
    <body>
        
        <div class ="container"> 
            
            <ul class="topnav" id="myTopnav2">
                <li><a href="http://jbradley46.hosting.eeecs.qub.ac.uk/CSC2043WebApplication1/AdminSite/EditArtist.php" class="active">Edit Artists</a></li>
                <li><a href="http://jbradley46.hosting.eeecs.qub.ac.uk/CSC2043WebApplication1/AdminSite/EditContactUs.php" class="active">Edit Contact Us</a></li>
                <li><a href="http://jbradley46.hosting.eeecs.qub.ac.uk/CSC2043WebApplication1/AdminSite/EditHome.php" class="active">Edit Home</a></li>
                <li><a href="http://jbradley46.hosting.eeecs.qub.ac.uk/CSC2043WebApplication1/AdminSite/EditStore.php" class="active">Edit Store</a></li>
                <li><a href="http://jbradley46.hosting.eeecs.qub.ac.uk/CSC2043WebApplication1/AdminSite/EditVideoGallery.php" class="active">Edit Video Gallery</a>
                <li><a href="http://jbradley46.hosting.eeecs.qub.ac.uk/CSC2043WebApplication1/AdminSite/Admin.php" class="active">Admin Home</a>
                </li>
             </ul>
            
            <div class="colm12"><h1>Belfast Hip Hop Festival - Edit Store Page</h1>

                </div>
            <div class="row"> 
                <div class="colm12">
                    <div class="content-bordering">
                        
                            <form action="sentpost.php" method="post" name="editstore">
                                <input type="file" name="myFile">
                                <input type="text" name="mytxt">
                                <input type="submit">
                            
                        </form>
                    </div>
                </div> 
            </div> 
            <div class="row"> 
                <div class="colm12">
                    <div class="content-bordering">
                        <form action="sentpost.php" method="post" name="editstore">
                            <input type="file" name="myFile">
                                <input type="text" name="mytxt">
                                <input type="submit">
                            
                        </form>
                    </div>
                </div> 
            </div>  







            <div class="row"> 
                <div class="colm12">
                    <div class="content-bordering">
                        <form action="sentpost.php" method="post" name="editstore">
                            <fieldset>
                                <input type="file" name="myFile">
                                <input type="text" name="mytxt">
                                <input type="submit">

                                <br>
                            </fieldset>
                        </form>
                    </div>
                </div> 
            </div>
            <div class="row"> 
                <div class="colm12">
                    <div class="content-bordering">
                        <form action="sentpost.php" method="post" name="editstore">
                            <input type="file" name="myFile">
                                <input type="text" name="mytxt">
                                <input type="submit">
                        </form>

                    </div>
                </div> 
            </div>
            







            <div class="colm12">

            </div>  







        </body>
        </html>







