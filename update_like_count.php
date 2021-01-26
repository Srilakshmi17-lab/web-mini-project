<?php
$connect = mysqli_connect("localhost", "root", "", "artgallery");
error_reporting(E_ERROR | E_PARSE);
if ( isset( $_POST['like'] ) ) {

    $count = $_REQUEST['img_like'];
    $count++;
    $imageid = $_COOKIE["keyval"];
    $like_username= $_COOKIE["login_username"];

    $query1 ="INSERT into likes(image_id,username) values('$imageid','$like_username')";
    mysqli_query($connect, $query1);

    $query = "update image set likes='$count' where imageid='$imageid'";
    if(mysqli_query($connect, $query))  
      {  

          $query = "select * from user_table where username = '$like_username'";
          $result = mysqli_query($connect, $query);
          if(mysqli_num_rows($result) != 0){
               while($row = mysqli_fetch_array($result)){

                   if($row['role'] == "user"){
                       header( "refresh:0;url=user_imageopen.php" );
                   }
                   if($row['role'] == "uploader") {
                    header( "refresh:0;url=imageopen.php" );
                   }      
            
                     }
          }
     }


}

?>