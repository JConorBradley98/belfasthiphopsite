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
        error_reporting(E_ALL);

        include ("credientials.php");
        include (".../connectphp.php");
        /// PHP Instructions
        // Create mysqli object to connect page to database
        // Needs a total of four parameters
        //1) Host URL
        //2) Username
        //3) Password
        //4) Database Name
        $mydb = new mysqli("jbradley46.hosting.eeecs.qub.ac.uk", "jbradley46", $pwd, "jbradley46");
        $conn = new mysqli("jbradley46.hosting.eeecs.qub.ac.uk", "jbradley46", $pwd, "jbradley46");

        if ($mydb->connect_errno) {
            echo "AN ERROR HAPPENED!!";
        } else {
            echo "CONNECTION SUCCESSFUL";
        }
        
        $inserttext1= $_POST['uploadedtxt1'];
        $inserttext2= $_POST['uploadedtxt2'];
        $inserttext3= $_POST['uploadedtxt3'];
        $inserttext4= $_POST['uploadedtxt4'];
       
        
        
        $insertquery = "INSERT INTO uploadedposts(uploadedtxt1, uploadedtxt2, uploadedtxt3, uploadedtxt4, uploadedfile1, uploadedfile2)VALUES(NULL, '$inserttext1', '$inserttext2', '$inserttext3', '$inserttext4' '')";  
            


?>
           
    </head>
    

    
    <body>
        
         <div class ="container">
           
            <!-----Page Title --->
            
        <div class="row">            
            <div class="colm12"><h1>Belfast Hip Hop Festival - Sent Post!</h1></div>        
        </div> 
            
            
            
            <div class="row">
                <div class="colm12">
                    <?php
                    // Execute the above SQL Insert
                    $insert = $mydb-> query($insertquery);
                    
                    if(!$insert){
                        //if query fails then show error
                        echo $mydb->errno;
                    }else{
                            echo "<p>Thanks fpr the answer</p>";
                        }
                    
                    
                    
                    ?>
                    
                    
                </div>
 
            </div>
            
            
            
            
            <div class="colm12 ">
                FOOTER
            </div>  
           
        </div>
            
            
       
    </body>
</html>







