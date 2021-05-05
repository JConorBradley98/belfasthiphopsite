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
            $readquery = "SELECT * FROM  StoreContent"; //Read Function
            $results = $mydb->query($readquery) or die ($mydb -> error);
            
            if ($mydb->connect_errno)
            {
                echo "AN ERROR HAPPENED!!";
            }
            else {
                echo "CONNECTION SUCCESSFUL";
            }
            
            
            
            
             //Read Row into Data Variables
            while ($rows = $results->fetch_assoc()){
                
               $storeimage1 = $rows["imgpath1"] ;
               $storeimage2 = $rows["imgpath2"] ;
               $storeimage3 = $rows["imgpath3"] ;
               $storeimage4 = $rows["imgpath4"] ;
               $storetxt1 = $rows["TextContentBoxStore1"];
               $storetxt2 = $rows["TextContentBoxStore2"];
               $storetxt3 = $rows["TextContentBoxStore3"];
               $storetxt4 = $rows["TextContentBoxStore4"];
                
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
                <div class="colm12"><h1>Belfast Hip Hop Festival - Store</h1>

                </div>
                <div class="col m6">
                    <div class="content-bordering">
                       <?php echo "<img src ='$storeimage1' width'209px'/>";?>
                        <?php echo "<p align=center>$storetxt4</p>"  ?>
                        
                    </div>
                </div>

                <div class="col m6">
                   <div class="content-bordering">
                       <?php echo "<img src ='$storeimage2'width'209px'/>";?>
                       <?php echo "<p align=center>$storetxt2</p>"  ?>
                    
                   </div>
                </div>                     
            </div>  
              <div class="row">            
                
                <div class="col m6">
                 <div class="content-bordering">
                    <?php echo "<img src ='$storeimage3'width'209px'/>";?>
                     <?php echo "<p align=center>$storetxt3</p>"  ?>
                   </div> 
                </div>

                <div class="col m6">
                <div class="content-bordering">
                   <?php echo "<img src ='$storeimage4'width'209px'/>";?>       
                    <?php echo "<p align=center>$storetxt4</p>"  ?>
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







