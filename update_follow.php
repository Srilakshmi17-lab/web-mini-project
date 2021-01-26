<?php
$connect = mysqli_connect("localhost", "root", "", "artgallery");
if ( isset( $_POST['follow'] ) ) {

    $follower = $_REQUEST['follow_user'];
    $username = $_COOKIE['login_username']; 

    $query = "INSERT INTO follow(follername,username) VALUES ('$follower','$username')";
    if(mysqli_query($connect, $query))  
    {  
         header("Location: user_imageopen.php");
            
    }  else{
        echo "Error in following";
    }


}

?>