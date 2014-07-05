<?php

//show all possible errors. should be ALWAYS set to that level
error_reporting(E_ALL); 
echo "landed at form handler<br>";

// sometimes buttons not being sent or gets misspelled
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    echo "here goes POST processing<br>";
    
    $host = 'dunk.site';
    $username = 'root';
    $pass = '';
    
    $db = new mysqli($host, $username, $pass, 'emailsubs');
    
    if($db->connect_errno > 0){
    	die('Unable to connect to database [' . $db->connect_error . ']');
	}
    
    // all strings should be escaped
    // and it should be done after connecting to DB
    if(isset($_POST['yourname'])){ 
    	$yourname = mysqli_real_escape_string($db, $_POST['yourname']); 
    	}
    	
    if(!empty($_POST["cursename"])){ 
    	$yourname = mysqli_real_escape_string($db, $_POST['cursename']); 
    	// pass empty name parameter if they've been cursin';
    	}
    	
    if(!empty($_POST['hatsize'])){ 
    	$hatsize = mysqli_real_escape_string($db, $_POST['hatsize']); 
    	}
    	
    if(isset($_POST['tribe'])){ 
    	$arttype = mysqli_real_escape_string($db, $_POST['tribe']); 
    	}
    	
    if(isset($_POST['email'])){ 
    	$emailform = mysqli_real_escape_string($db, $_POST['email']); 
    	}
    
    if(!empty($_POST["pottyemail"])){
    	$emailform = mysqli_real_escape_string($db, $_POST['pottyemail']); 
    	}
    

   $sql = "INSERT INTO emails 
             VALUES (NULL,'$yourname','$hatsize','$arttype','$emailform', CURRENT_TIMESTAMP)";
              
    if(!$db->query($sql)){
    	die('There was an error running the query [' . $db->error . ']');
	}
    
}


 
?>