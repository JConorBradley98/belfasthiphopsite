<html>
    <head>
        <title>Belfast Hip-Hop Festival | Home </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        
        <!---CSS StyleSheets & Frameworks--->
        
        <link href="../stylesheets/index.css" rel="stylesheet" type="text/css"/>
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
            include ("connectphp.php");
            
            /// PHP Instructions
            // Create mysqli object to connect page to database
            // Needs a total of four parameters
            //1) Host URL
            //2) Username
            //3) Password
            //4) Database Name
            
            $mydb = new mysqli("jbradley46.public.cs.qub.ac.uk", $pwd, "jbradley46", "WebContentTable");
            ?>
    </head>
    
    <body>
        
        <div class ="container"> 
            
            <ul class="topnav" id="myTopnav2">
                <li><a href="#beauter" class="brand">Brand</a></li>
                <li><a href="#" class="active">Active</a></li>
                <li><a href="#" class="active">Active</a></li>
                <li><a href="#" class="active">Active</a></li>             
             </ul>
            
            <div class="colm12"><h1>Belfast Hip Hop Festival - Moderator Page</h1>

                </div>
            
            
            <div class="row">
            <div class="col m6">
                <div class="content-bordering">
                    content
                </div>
            </div>   
            
            <div class="col m6">
                <div class="content-bordering">
                    content
                </div>
            </div> 
            </div>
            
            <div class="row"> 
                <div class="col m6">
                    <div class="content-bordering">
                        content
                    </div>
                </div> 


                <div class="col m6">
                    <div class="content-bordering">
                        content
                    </div>
                </div>
            </div> 
            
        <div class="colm12">
           
        </div>  
            
        
        
          
            
            
       
    </body>
</html>







