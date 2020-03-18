<?php

if(isset($_POST['submit'])){
    
    //$data_missing = array();
    
    if(empty($_POST['first'])){

        // Adds name to array
        $first = "firstname";

    } else {

        // Trim white space from the name and store the name
        $f_name = trim($_POST['first']);

    }

    if(empty($_POST['last'])){

        // Adds name to array
        $last = "lastname";

    } else{

        // Trim white space from the name and store the name
        $l_name = trim($_POST['last']);

    }

    if(empty($_POST['email'])){

        // Adds name to array
        $data_missing[] = 'Email';

    } else {

        // Trim white space from the name and store the name
        $email = trim($_POST['email']);

    }

    if(empty($_POST['contact'])){

        // Adds name to array
        $data_missing[] = 'Contact Number';

    } else {

        // Trim white space from the name and store the name
        $contact = trim($_POST['contact']);

    }

    if(empty($_POST['gender'])){

        // Adds name to array
        $data_missing[] = 'Gender';

    } else {

        // Trim white space from the name and store the name
        $gender = trim($_POST['gender']);

    }

    if(empty($_POST['user'])){

        // Adds name to array
        $data_missing[] = 'User';

    } else {

        // Trim white space from the name and store the name
        $user = trim($_POST['user']);

    }

    
    if(empty($first) && empty($last)){
        
        require_once('piyush.php');
        
        $query = "INSERT INTO user (user, first,
        last, email, contact, gender 
			) VALUES (?, ?, ?,
			?, ?, ?, ?)";
        
        $stmt = mysqli_prepare($dbc, $query);
        
        mysqli_stmt_bind_param($stmt, "sssssss", $user, $f_name,
                               $l_name, $email, $contact, $gender
                               );
        
        mysqli_stmt_execute($stmt);
		//echo "run successfully";
        
        $affected_rows = mysqli_stmt_affected_rows($stmt);
        
        if($affected_rows == 1){
            
            echo 'Your Data has Entered in Database';
            //echo $data_missing[] ;
            mysqli_stmt_close($stmt);
            
            mysqli_close($dbc);
            
        } else {
            
            echo 'Error Occurred<br />';
            echo mysqli_error();
            
            mysqli_stmt_close($stmt);
            
            mysqli_close($dbc);
            
        }
        
    } else {
        
        
            
            header ("Location: signuppage.php?first=$first&last=$last");
            
        
        
    }
    
}

?>