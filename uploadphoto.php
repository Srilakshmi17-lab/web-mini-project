<?php 
$connect = mysqli_connect("localhost", "root", "", "artgallery");  
$username = $_COOKIE['login_username'];
if(isset($_POST["upload_photo"]))  
 {  
     
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"])); 
      $description = $_POST['description'];
      $category = $_POST['category'];
      $query = "INSERT INTO image(image,uploader_by,category,description) VALUES ('$file','$username','$category','$description')";  
      if(mysqli_query($connect, $query))  
      {  
           echo '<script>alert("Image Inserted into Database")</script>';
           header( "refresh:0;url=home.php" );
            
      }
 }  
 ?>