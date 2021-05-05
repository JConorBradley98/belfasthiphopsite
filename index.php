<html>
    <head>
        <title>Belfast Hip-Hop Festival | Home </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        
        <!---CSS StyleSheets & Frameworks--->
        
        <link href="stylesheets/index.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" type="text/css" href="https://rawgit.com/outboxcraft/beauter/master/beauter.min.css"/>
        <link href="stylesheets/beauter-master/beauter.min.css" rel="stylesheet" type="text/css"/>
        <link href="stylesheets/flexslider.css" rel="stylesheet" type="text/css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
        
        
        <!----Scripts to Load CSS UI Frameworks---->
        
        <script src ="https://rawgit.com/outboxcraft/beauter/master/beauter.min.js"></script>
        <script type="text/javascript" charset="utf-8">
            $(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide"
  });
});
  
        </script>
        <script src="scripts/jquery.flexslider-min.js" type="text/javascript"></script>
        <script src="scripts/jquery.flexslider.js" type="text/javascript"></script>
            
            
            <!----DB Connection Starts here---->
            <?php         
            ///Error Logging
            ini_set('display_errors', 1);
            ini_set('display_startup_errors', 1);
            error_reporting (E_ALL);
            
            include ("AdminSite/credientials.php");
            include ("connectphp.php");
            
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
                           
                           $readquery = "SELECT * FROM IndexContent";
                           $result2 = $mydb->query($readquery) or die ($mydb -> error);
                           
                           
                           if(!$result2){
                               
                              die( "SQL Failed to get Content: ".$mydb->error);
                                   
                           }
                           while($row = $result2->fetch_assoc()) {
                             
                               // Read Row into Data Variables
                           $motd = $row["MessageOfTheDay"];
                           $TCB1 = $row ["TextContentBox1"];
                           $TCB2 = $row ["TextContentBox2"];
                           $TCB3 = $row ["TextContentBox3"];                       
                           $TCB4 = $row ["TextContentBox4"];      
                            
                           }
                           
                           
            
            ?>
            <!----PHP Ends here---->
        
            
    </head>
    
    <body>
        
        
        
        <div class ="container">
            <div class="flexslider" style="direction:rtl">
            <ul class="slides">
                <li>
                    <img src="img/asaprockybanner.jpg" alt="A$AP Gig"/>
                </li>
                <li>
                    <img src="img/kanyebanner.jpg" alt="Kanye Banner"/>
                </li>
                <li>
                    <img src="img/kendrickbanner.jpg" alt="Kendrick Banner"/>
                </li>
                <li>
                    <img src="img/pharrell.jpg" alt="pharrel"/>
                </li>
            </ul>
        </div>
            
            <div class="colm12">
            <ul class="topnav" id="myTopnav2">
                
                <li><a href="http://jbradley46.hosting.eeecs.qub.ac.uk/CSC2043WebApplication1/index.php" class="active">Home</a></li>
                <li><a href="http://jbradley46.hosting.eeecs.qub.ac.uk/CSC2043WebApplication1/Artists.php" class="active">Artists</a></li>
                <li><a href="http://jbradley46.hosting.eeecs.qub.ac.uk/CSC2043WebApplication1/ContactUs.php" class="active">Contact Us</a></li>
                <li><a href="http://jbradley46.hosting.eeecs.qub.ac.uk/CSC2043WebApplication1/Store.php" class="active">Store</a></li>
                <li><a href="http://jbradley46.hosting.eeecs.qub.ac.uk/CSC2043WebApplication1/VideoGallery.php" class="active">Video Gallery</a></li>
                <li><a href="http://jbradley46.hosting.eeecs.qub.ac.uk/CSC2043WebApplication1/Login.php" class="active">Admin Login</a></li>
             </ul>
            </div>
            
            <!------Page title ---->         
                                                                                                
            <div class='row'>           
                <div class='colm12'>
                    <h1>Belfast Hip Hop Festival - Homepage</h1>
                </div>
            </div>
            <!------Page title end ----> 
            
            <!------Message of the day ----> 
            <div class="row">
               
                <div class='col m12'>
                    <div class='content-bordering'>
                            <?php
                            echo $motd;
                            ?>
                    </div>                                    
                </div>                                         
            </div>
           <!------Message of the day end ---->
           
           <!------TCB1 ---->
                <div class='row'>
                    <div class='col m6'>
                        <div class='content-bordering'>
                            <?php
                            echo $TCB1;
                            ?>
                        </div>
                    </div>   
            <!------TCB1 end ---->
            
            <!------TCB2 ---->
                <div class="col m6">
                    <div class="content-bordering">
                            <?php
                            echo $TCB2;
                            ?>
                        </div>
                    </div> 
                </div>
           <!------TCB2 end ---->
           
           <!------TCB3 ---->
            <div class="row">
                    <div class="col m6">
                        <div class="content-bordering">
                            <?php
                            echo $TCB3;
                            ?>
                        </div>
                    </div>   
           <!------TCB4 ---->
                    <div class="col m6">
                        <div class="content-bordering">
                            <?php
                            echo $TCB4;
                            ?>
                        </div>
                    </div> 
                </div>     
           <!------TCB4 end ---->
            
           <!------Footer ---->
            <div class="colm12 ">
                 FOOTER
                </div>   
           <!------Footer end ---->
        </div>
        </body>
</html>







