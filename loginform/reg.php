<?php
   include('conn.php');
    $name=$_POST['Rusername'];
    $pwd=$_POST['Rpassword'];
    $sql=$con->prepare("INSERT INTO newvisitor(username,password) values(?,?)");
    $sql->bind_param("ss", $name, $pwd);
    $check=$con->prepare("SELECT username FROM newvisitor WHERE username=?");
    $check->bind_param("s", $name);
    // Check connection
    if ($con->connect_error) 
    {
        die("Connection failed: " . $con->connect_error);
    }
    else
    {
        if( !ctype_alpha( $name ) )
        {
            die( 'Invalid username' );
        }
        else{
            $check->execute();
            $result = $check->get_result();
            if ( $row = $result->fetch_array(MYSQLI_NUM) ) 
            {
                echo "data already exists ";
            }
            else
            {
                $sql->execute();
                echo "You are now registered $name";  
            }
        }
        $sql->close();
        $con->close();
    }

?>


