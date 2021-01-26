<?php
    $connect = mysqli_connect("localhost", "root", "", "artgallery");
    if ( isset( $_POST['commentbtn'] ) ) {

        $imageid = $_COOKIE["keyval"];
        $comment_username= $_COOKIE["login_username"];
        $comment_data= $_POST['comment'];
    
        $query1 ="INSERT into comments(image_id,comment,commented_by) values('$imageid','$comment_data','$comment_username')";
        if(mysqli_query($connect, $query1))  
          {  
    
              $query = "select * from user_table where username = '$comment_username'";
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