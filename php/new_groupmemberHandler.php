
<!-- Keeping for reference, nothing uses this right now
===========================================================================
-->



<?php
	$db = mysqli_connect('localhost', 'root', 'password', 'planit');
	echo "<script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js\"></script>";
	echo "<script src=\"/js/load_group_data.js\"></script>";
	echo "<script type=\"text/javascript\"></script>";


	if(mysqli_connect_errno()){
	    echo "<h4>Failed to connect to MySQL:</h4>".mysqli_connect_error();
	} 
	    
	    //just gets group names
    if ($_POST['newusername1']==$_POST['newusername2']){
        $name=htmlspecialchars($_POST['newusername1']);
        echo "name is: $name";
        $query = "SELECT * FROM users WHERE username = '$name';";
            //$row[0] = group names, $row[1] = event description, etc; gets groups mutliple time

        $resultset = mysqli_query($db,$query);
//        data_dump($resultset);
        if(!$resultset){
            echo "User not found.";
        } else{
            echo "User found!: $resultset[0]";
        }

    } else{
        echo "Error, usernames don't match!";
    }
?>