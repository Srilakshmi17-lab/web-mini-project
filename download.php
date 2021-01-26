
<?php
$base64 =0;
$connect = mysqli_connect("localhost", "root", "", "artgallery");
$imageid = $_COOKIE["keyval"];

$query = "SELECT image from image where imageid = '$imageid'";
$result = mysqli_query($connect, $query);
while($row = mysqli_fetch_array($result))  
{
define('UPLOAD_DIR', 'images/');
$img ="data:image/jpeg;base64,".base64_encode($row['image']); //base64 string
$data = file_get_contents($img);
$file = UPLOAD_DIR . uniqid() . '.png';
$success = file_put_contents($file, $data);
if($success){
    echo "<script>
    alert('Your image stored in /Images folder');
    window.location.href='user_imageopen.php';
    </script>";
}
else{
    echo "<script>
    alert('Error in downloading the image');
    window.location.href='user_imageopen.php';
    </script>";
    
}
} 

?>