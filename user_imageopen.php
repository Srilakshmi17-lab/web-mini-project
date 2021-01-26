<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Imageopen</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" >
    <link rel="stylesheet" type="text/css"href="user_imageopen.css" />
    <link href="https://fonts.googleapis.com/css?family=Tangerine" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    
</head>
<body>
<div class="container">
<button id="back_button" onclick="window.location.href='user_home.php'"><img id="backbuttonimg" src="Images/left-arrow.png" alt="back button"></button>
    <div class="imagecell">



<?php
        $connect = mysqli_connect("localhost", "root", "", "artgallery");
            
            $imageid = $_COOKIE["keyval"];
            $username = $_COOKIE['login_username'];

            $query = "SELECT image from image where imageid = '$imageid'";
            $result = mysqli_query($connect, $query);
            if(mysqli_num_rows($result) != 0){
                while($row = mysqli_fetch_array($result))  
                {  
        
                    echo '  
                    <tr>  
                         <td id="tabimg"> 
                              <img class="open_image" src="data:image/jpeg;base64,'.base64_encode($row['image']).'"/> 
            
                         </td>
      
                    </tr> 
             ';
         
                }                
            }
            else{
                echo "error in image cell";
            }
            
            echo '
            <form action="download.php">
            <button id="download" type="submit"><span class="glyphicon" id="down_lable">&#xe025; Download </span></button> </form>';
        ?>
</div>
<div class="image_description">
    <?php 
    error_reporting(E_ERROR | E_PARSE);
        $query = "SELECT * from image where imageid = '$imageid'";
        $result = mysqli_query($connect, $query);
            if(mysqli_num_rows($result) != 0){
                while($row = mysqli_fetch_array($result))  
                {  
                    $uploader = $row['uploader_by'];
                    $query1 = "SELECT * from follow where follername = '$uploader' and username='$username'";
                    $result1 = mysqli_query($connect, $query1);
                    if(mysqli_num_rows($result1) == 0){
                        echo '<form action="update_follow.php" method="post"> 
                        <input type="hidden" name="follow_user" value="'.$row['uploader_by'].'">
                    <span id="uploader_name">'.$row['uploader_by'].' </span> &nbsp; &nbsp; <button id="follow_button" name="follow" value="value" type="submit"><span class="glyphicon">&#xe095;</span> &nbsp;Follow</button></form>
                        ';
                    }else{
                        echo '
                        <span id="uploader_name">'.$row['uploader_by'].' </span> &nbsp; &nbsp; <button id="follow_button" name="follow" value="value" type="submit"><span class="glyphicon">&#xe095;</span> &nbsp;Following</button>
                        ';
                    }

                    $query2 = "SELECT * from likes where image_id = '$imageid' and username='$username'";
                    $result2 = mysqli_query($connect, $query2);
                    if(mysqli_num_rows($result2) == 0){
                    echo '<form action="update_like_count.php" method="post">
                    <input type="hidden" name="img_like" value="'.$row['likes'].'">
                     <div id="conta"><p id="img_like">'.$row['likes'].'</p> <button id="like_button" name="like" value="value" type="submit"><span class="glyphicon">&#xe005;</span></button> </div>  
                    <p id="img_desc"> '.$row['description'].'</p> 
                    </form> '; 
                    }
                    else{
                    echo '<form action="update_like_count.php" method="post">
                    <input type="hidden" name="img_like" value="'.$row['likes'].'">
                     <div id="conta"><p id="img_like">'.$row['likes'].'</p> <button id="like_button" name="like" value="value" type="submit" disabled><span class="glyphicon">&#xe005;</span></button> </div>  
                    <p id="img_desc"> '.$row['description'].'</p> 
                    </form> '; 
                    }
                    $imageid = $_COOKIE["keyval"];
                    $query1 = "SELECT * from likes where image_id='$imageid'";
                    $result1 = mysqli_query($connect, $query1);
                    while($row = mysqli_fetch_array($result1)) 
                    {  
                         echo' <span id="img_desc"><strong> '.$row['username'].' , </strong></span>';
                    }
                }                
            }
            else{
                echo "error in description cell";
            }
    ?>
</div>

<div class="commentbox">
            <p id="comment_label">Comments</p>
        
            <form action="comment.php" method="post" ">
            <textarea name="comment" cols="150" rows="6" placeholder="write comment here"></textarea><br>
            <input id="comm_btn" name="commentbtn" type="submit" value="comment"">
            </form>
            
<?php 
error_reporting(E_ERROR | E_PARSE);
        $query = "SELECT * from comments where image_id = '$imageid'";
        $result = mysqli_query($connect, $query);
        $rowcount = mysqli_num_rows($result);
            if($rowcount != 0){
                while($row = mysqli_fetch_array($result))  
                {  
                    echo '
                     <div id="commentss">
                     <p id="comment_by">'.$row['commented_by'].'</p> 
                     <p id="comment_data">'.$row['comment'].' </p>
                     <p> <strong>_____________________________________________________________________________________________________________________________</strong></p> <br>
                     </div> 
                     
                     '; 
                     
                }                
            }
            else{
                echo "<p id='empty_image'>" ."There are no comments for this Image". "</p>";
            }
    ?>
    
</div>
</div>
</body>
</html>

