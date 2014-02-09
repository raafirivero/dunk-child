<?php

//show all possible errors. should be ALWAYS set to that level
error_reporting(E_ALL); 
echo "landed at form handler<br>";

// sometimes buttons not being sent or gets misspelled
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    echo "here goes POST processing<br>";
    $host = 'localhost';
    $username = 'root';
    $pass = '';

    mysql_connect($host,$username,$pass);
    mysql_select_db('emailsubs');
    
    // database emailsubs should have a table called "emails"
    // the columns after ID are yourname hatsize arttype email
	/*
	CREATE TABLE `emails` (
	  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
	  `yourname` varchar(100) DEFAULT '',
	  `hatsize` varchar(50) DEFAULT '',
	  `arttype` varchar(50) DEFAULT '',
	  `email` varchar(50) DEFAULT '',
	  PRIMARY KEY (`id`)
	) ENGINE=MyISAM AUTO_INCREMENT=58 DEFAULT CHARSET=latin1;
	*/
    
    

    // all strings should be escaped
    // and it should be done after connecting to DB
    if(isset($_POST['yourname'])){ 
    	$yourname = mysql_real_escape_string($_POST['yourname']); 
    	}
    	
    if(!empty($_POST["cursename"])){ 
    	$yourname = mysql_real_escape_string($_POST['cursename']); 
    	// pass empty name parameter if they've been cursin';
    	}
    	
    if(isset($_POST['hatsize'])){ 
    	$hatsize = mysql_real_escape_string($_POST['hatsize']); 
    	}
    	
    if(isset($_POST['tribe'])){ 
    	$arttype = mysql_real_escape_string($_POST['tribe']); 
    	}
    	
    if(isset($_POST['email'])){ 
    	$emailform = mysql_real_escape_string($_POST['email']); 
    	}
    
    if(!empty($_POST["pottyemail"])){
    	$emailform = mysql_real_escape_string($_POST['pottyemail']); 
    	}
    

   $query = "INSERT INTO emails 
             VALUES (NULL,'$yourname','$hatsize','$arttype','$emailform')";
              

    echo $query;
    // always run your queries this way to be notified in case of error
    $result = mysql_query($query) or trigger_error(mysql_error().". Query: ".$query);
    var_dump($result);
}


 
?>