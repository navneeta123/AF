<?php
    include('conn.php');

    $name=$_POST['Lusername'];
    $pwd=$_POST['Lpassword'];
    $check=$con->prepare ("SELECT password FROM newvisitor WHERE username=?
    AND password=?");
    $check->bind_param("ss",$name,$pwd);

    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }
    else
    {
       $check->execute();
       $result = $check->get_result();
        if ($row = $result->fetch_array(MYSQLI_NUM) ) 
            {
            echo "you are logged in ";
            }
            else
            {
                echo "password is incorrect";
            }
    }