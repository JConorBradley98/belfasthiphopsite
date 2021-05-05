<?php
session_start();




include ("../connectphp.php");
include ("connectphp.php");
$mydb = new mysqli("jbradley46.hosting.eeecs.qub.ac.uk", "jbradley46", $pwd,  "jbradley46");

$name=$_POST['username'];
//echo $name ;
$pword=$_POST['password'] ;
//echo $pword;


$check = "SELECT * FROM users WHERE username='$name' AND password= '$pword' ";
        
$result= $mydb->query($check);
$num =$result->num_rows;

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>process php</title>
    </head>
    <body>
        <?php
        if($num>0){
            echo "you are a valid user";
            $_SESSION['jbradleyfestival'] = $name;
            header("location: AdminSite/EditHome.php");
        }
        else {
            echo "intruder alert go away";
        }
 
        ?>
 
    </body>
</html>
