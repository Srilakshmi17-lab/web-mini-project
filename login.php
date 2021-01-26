<?php  
                 $connect = mysqli_connect("localhost", "root", "", "artgallery");  

                 if ( isset( $_POST['login_button'] ) ) {

                    $login_username = $_REQUEST['username'];
                    $password = $_REQUEST['password'];
                    $query = "SELECT * from user_table where username = '$login_username' and password='$password'";
                    $result = mysqli_query($connect, $query);  
                     if(mysqli_num_rows($result) != 0){
                        while($row = mysqli_fetch_array($result)){

                            if($row['role'] == "user"){
                                setcookie('login_username',$login_username,time()+(86400*1),"/");
                                header("Location: user_home.php");
                            }
                            if($row['role'] == "uploader") {
                                setcookie('login_username',$login_username,time()+(86400*1),"/");
                                header("Location: home.php");
                            }
                            if($row['role'] == "admin"){
                                setcookie('login_username',$login_username,time()+(86400*1),"/");
                                header("Location: admin.php");
                            }
                        }
                    }else{
                        echo "<script>
                        alert('There is no User details assosiated to your input, Check your username and passeord');
                        window.location.href='index.php';
                        </script>";
                    }
                     
                 }
                ?> 