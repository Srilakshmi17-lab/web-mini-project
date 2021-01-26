<?php

$connect = mysqli_connect("localhost", "root", "", "artgallery");  
session_start();

if ( isset( $_POST['signup_button'] ) ) {
    
        $login_username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $dob = $_POST['bday'];
        $role = $_POST['radio'];
        $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
         $query = "INSERT INTO user_table(profilpic,username,password,email,gender,dob,role) VALUES ('$file','$login_username','$password','$email','$gender','$dob','$role')";  
        if(mysqli_query($connect, $query))  
        {  
                setcookie('login_username',$login_username,time()+(86400*1),"/");
                echo "<script>
                alert('Registered Successfull !!! now you can login to our Art Gallery website');
                window.location.href='index.php';
                </script>";
                
        }  else{
            echo "<script>
                    alert('Username already taken. please give another username');
                    window.location.href='index.php';
                    </script>";
        }

}

?>