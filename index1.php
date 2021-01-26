<?php  
 $connect = mysqli_connect("localhost", "root", "", "artgallery");  
 if(isset($_POST["insert"]))  
 {  
     $username = $_POST['username'];
     $password = $_POST['password'];
     $userid = $_POST['userid'];
     $role = $_POST['userid'];
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query = "INSERT INTO user_table(profilpic,username,password,userid,role) VALUES ('$file','$username','$password','$userid','$role')";  
      if(mysqli_query($connect, $query))  
      {  
           echo '<script>alert("Image Inserted into Database")</script>';  
      }  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Webslesson Tutorial | Insert and Display Images From Mysql Database in PHP</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:500px;">  
                <h3 align="center">Insert and Display Images From Mysql Database in PHP</h3>  
                <br />  
                <form method="post" enctype="multipart/form-data">  
                    <input type="text" name="username" id="username"> <br>
                    <input type="text" name="password" id="password"><br>
                    <input type="text" name="userid" id="userid"> <br>
                     <input type="file" name="image" id="image" />  
                     <br />  
                     <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-info" />  
                </form>  
                <br />  
                <br />  
                <table class="table table-bordered">  
                     <tr>  
                          <th>Image</th>  
                     </tr>  
                <?php  
                 $connect = mysqli_connect("localhost", "root", "", "artgallery");  

                $query = "SELECT * from user_table where username = 'prabhu'";  
                $result = mysqli_query($connect, $query);  
                while($row = mysqli_fetch_array($result))  
                {  
                     echo '  
                          <tr>  
                               <td>  
                                    <img src="data:image/jpeg;base64,'.base64_encode($row['profilpic'] ).'" height="200" width="200" class="img-thumnail" />  
                               </td>       
                          </tr>  

                       ';  

                    echo "<td>" .$row['username']. "</td>";
                }  
                ?>  
                </table>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#insert').click(function(){  
           var image_name = $('#image').val();  
           if(image_name == '')  
           {  
                alert("Please Select Image");  
                return false;  
           }  
           else  
           {  
                var extension = $('#image').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     alert('Invalid Image File');  
                     $('#image').val('');  
                     return false;  
                }  
           }  
      });  
 });  
 </script>


 <script>
        
        $(document).ready(function(){
    $(".print_ïmage").click(function() {
        var val = "hiiiiiii";
        $.ajax ({
            url: "home.php",
            data: { value : val },
            success: function( data ) {
                alert("Hi, testing");
                alert( data );
            }
        });
        
        var modal1 = document.getElementById('myModal1');

// Get the button that opens the modal
var btn = document.getElementById(id);

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close1")[0];

// When the user clicks on the button, open the modal 
btn.onclick = function() {
    modal1.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal1.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal1) {
        modal1.style.display = "none";
    }
}


    });
});
</script>