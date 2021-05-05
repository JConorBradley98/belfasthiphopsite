<html>
    <head>
        <title>Belfast Hip-Hop Festival</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        
        <!---CSS StyleSheets & Frameworks--->
        
        <link href="stylesheets/index.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" type="text/css" href="https://rawgit.com/outboxcraft/beauter/master/beauter.min.css"/>
        <link href="stylesheets/beauter-master/beauter.min.css" rel="stylesheet" type="text/css"/>
        
        <!----Scripts to Load CSS UI Frameworks---->
        
        <script src ="https://rawgit.com/outboxcraft/beauter/master/beauter.min.js"></script>
        
  
        
        <!----PHP Starts here---->
            <?php
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
            include ("connectphp.php");
            
                           
            
            $dbid = $_GET["ID"];
            echo "<P>$dbid</p>";
            
            
            if ($mydb->connect_errno)
            {
                echo "AN ERROR HAPPENED!!";
            }
            else {
                echo "CONNECTION SUCCESSFUL";
            }
            
                           $readquery = "SELECT * FROM  ArtistContent";
                           
                           $result = $mydb->query($readquery) or die ($mydb -> error);
                           
                       
                           
                          // $result = $mydb->query($readquery)or die($mydb->error);
                           
                           if(!$result){
                               
                              die( "SQL Failed to get Content: ".$mydb->error);
                                   
                           }
                           while($rowa = $result->fetch_assoc()) {
                             
                               // Read Row into Data Variables
                           $dbid = $rowa  ["ID"];
                           $tcb1a = $rowa ["TextContentBox1"];
                           $tcb2a = $rowa ["TextContentBox2"];
                           $tcb3a = $rowa ["TextContentBox3"];
                           $tcb4a = $rowa ["TextContentBox4"];
                           
                           }                    
            ?>
        
    </head>
    
    <body>
        
        <div class ="container">
            
            <ul class="topnav" id="myTopnav2">
                <li><a href="http://jbradley46.hosting.eeecs.qub.ac.uk/CSC2043WebApplication1/index.php" class="active">Home</a></li>
                <li><a href="http://jbradley46.hosting.eeecs.qub.ac.uk/CSC2043WebApplication1/Artists.php" class="active">Artists</a></li>
                <li><a href="http://jbradley46.hosting.eeecs.qub.ac.uk/CSC2043WebApplication1/ContactUs.php" class="active">Contact Us</a></li>
                <li><a href="http://jbradley46.hosting.eeecs.qub.ac.uk/CSC2043WebApplication1/Store.php" class="active">Store</a></li>
                <li><a href="http://jbradley46.hosting.eeecs.qub.ac.uk/CSC2043WebApplication1/VideoGallery.php" class="active">Video Gallery</a></li>  
                <li><a href="http://jbradley46.hosting.eeecs.qub.ac.uk/CSC2043WebApplication1/Login.php" class="active">Admin Login</a></li>
             </ul>
             <!------Page title ---->
            
            <div class="row">            
                <div class="colm12"><h1>Belfast Hip Hop Festival - Artists</h1>

                </div>
                <div class="col m6">
                    <div class="content-bordering">
                        <?php
                        echo $tcb1a;
                        ?>
                    </div>
                </div>

                <div class="col m6">
                   <div class="content-bordering">
                    <?php
                       echo $tcb2a;
                       ?>
                   </div>
                </div>                     
            </div>  
              <div class="row">            
                
                <div class="col m6">
                 <div class="content-bordering">
                   <?php
                        echo $tcb3a;
                        ?>
                   </div> 
                </div>

                <div class="col m6">
                <div class="content-bordering">
                   <?php
                        echo $tcb4a;
                        ?>
                   </div>
                </div>                     
            </div>  
             
         <div class="colm12 ">
                <div class="content-bordering">
                    footer content
                   </div>
                </div>   
            
            
            
            
        </div>
            
            
            
       
    </body>
</html>







