<?php
$hname = 'localhost';
$uname = 'root';
$pass = '';
$db = 'hmwebsite';

$con = mysqli_connect($hname, $uname, $pass, $db);

if (!$con){
    die("Could not connect to database".mysqli_connect_error());
}

function filteration($data){
    foreach ($data as $key => $value){
        $data[$key] = trim($value);
        $data[$key] = stripslashes($value);
        $data[$key] = htmlspecialchars($data[$key]);
        $data[$key] = strip_tags($value);
    }
    return $data;
}


function select($sql,$values,$datatypes){
    // retrieves the database connection from the global scope and stores it in the $con variable. 
    $con =  $GLOBALS['con'];

    /* It attempts to prepare the SQL statement using the provided database connection and SQL query.
     If successful, it assigns the prepared statement object to the $stmt variable. */
    if($stmt = mysqli_prepare($con,$sql)){

        /* bind the values in the $values array to the placeholders in the SQL query,
         using the data types specified in the $datatypes array. */
        mysqli_stmt_bind_param($stmt,$datatypes,...$values);
        if(mysqli_stmt_execute($stmt)){
            $res = mysqli_stmt_get_result($stmt);
            mysqli_stmt_close($stmt);
            return $res;
        }
        else{    
            mysqli_stmt_close($stmt);
            die("Query cannot be executed - Select");
        }
    }else{
        die("Query cannot be executed - Select");
    }
}
?>