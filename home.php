<?php  
                 $connect = mysqli_connect("localhost", "root", "", "artgallery");  
                 $username = $_COOKIE['login_username'];
                 
                 $query = "SELECT * from image where uploader_by = '$username'";  
                 $result = mysqli_query($connect, $query); 
                 $rowcount = mysqli_num_rows($result);
                 $total_like =0;
                 while($row = mysqli_fetch_array($result)){

                    $total_like += $row["likes"]; 
                 }
                
                 $query1 = "SELECT * from follow where follername = '$username'";
                 $result1 = mysqli_query($connect, $query1);
                 $total_followers = mysqli_num_rows($result1);
                ?> 

<!DOCTYPE html>
<head>
    <title>Dashboard</title>

    
    <link href="https://fonts.googleapis.com/css?family=Tangerine" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

    <link rel="stylesheet" href="homepage.css" >
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" >
    
    <script type="text/javascript">

        function goDoSomething(d){
            
            const val = d.getAttribute("id");
            document.cookie = "keyval="+val;
            window.location="imageopen.php";        
}

    </script>

</head>
<body>

    <div class="navbar-nav fixed-top container-fluid">
        <div class="nav_button">
            <span class="logo">Art Gallery</span>
            <button class="btn btn-danger" id="logout">logout</button>
        </div>
      </div>

<div class="user_details">

    <div class="user_pitcure">
        <?php
            $query = "SELECT * from user_table where username = '$username'";  
                        $result = mysqli_query($connect, $query);      
                        while($row = mysqli_fetch_array($result))  
                        {  
                            echo '  
                                <tr>  
                                        <td>  
                                            <img class="profilepic" id="dis_pic" src="data:image/jpeg;base64,'.base64_encode($row['profilpic'] ).'" />  
                                        </td>       
                                </tr>  
        
                                ';
                        } 
                        
    ?>    

    </div>
 

    <div class="login_user">
    <?php
        echo $username;
        ?>
    </div>
    <div class="user_lables">
        <span class="user_label"> Photos </span>
        <span class="user_label"> Likes </span>
        <span class="user_label"> Follwers </span>
    </div>
    <div class="user_values">
      <?php  echo '<span class="user_value"> '.$rowcount.' </span>'  ?>   
      <?php  echo '<span class="user_value"> '.$total_like.' </span>'  ?>
      <?php  echo '<span class="user_value"> '.$total_followers.' </span>'  ?>
    </div>
</div>

<div class="user_images">
<?php 
    $c=0;
    $array = array();
    $query = "SELECT * from image where uploader_by = '$username'";  
    $result = mysqli_query($connect, $query); 
    $rowcount = mysqli_num_rows($result);
    if(mysqli_num_rows($result) != 0){
        while($row = mysqli_fetch_array($result))  
        {  

            $array[] = $row;
            $c++;
 
        } 
        for($i=0;$i<$c;$i++){
            echo ' 
                    <div class="dashboard"> 
                    <ul class="enlarge">
                    <li>
                      <input class="uploder_dashboard" type="image" name="imageidd['.$i.']" id="'.$array[$i]['imageid'].'" value="submit" src="data:image/jpeg;base64,'.base64_encode($array[$i]['image']).'" onclick="goDoSomething(this);"/>
                      <span> <img src="data:image/jpeg;base64,'.base64_encode($array[$i]['image']).'" > 
                      </br> '.$array[$i]['likes'].' &nbsp; likes </span>
                    </li>
                    </ul>
                    </div> 
     '; 
        }
    }
    else{
        echo "<p id='empty'>" ."You dont have any photo . upload ur first photo". "</p>";
    }
?>

</div>



<div class="floating">
<a id="addbutton" href="#" data-toggle="tooltip" data-placement="top" title="Upload Photo"><img src="Images\add-button.png" id="fixedbutton"></a>
</div>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span> <br> 
     <div>
        <form id="form1" runat="server" method="post" action="uploadphoto.php" enctype="multipart/form-data"> 
            <input type="file" name="image" id="image" /> <br> <br> <br>
            <img id="uploaded_image" src="#" alt="your image" /> <br> <br>
            <label for="description"  id="Desc_label"> Description </label>
            <input type="text" name="description" id="description"> <br> <br>

            <label for="category"  id="category_label"> category </label>
            <select id="category" name="category">
                        <option  value="people">People</option>
                        <option value="animal">animal</option>
                        <option value="nature">nature</option>
                    </select> <br><br>
            <input type="submit" class="btn btn-primary" name="upload_photo" id="upload_photo" value="upload">
        </form>
     </div>                   
  </div>

</div>
<!-- The Modal -->
<div id="myModal1" class="modal">

  <!-- Modal content -->
  <div class="modal-content1">
    <span class="close1">&times;</span> <br> 
     <div>
         <?php
            echo $_COOKIE["keyval"];
         ?>
     </div>                   
  </div>

</div>




   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>   
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>  
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js" ></script>




  <script>
    var btn = document.getElementById('logout');
    btn.addEventListener('click', function() {
      document.location.href = 'index.php';
    });

    $(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
});


// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("addbutton");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

function readURL(input) {

if (input.files && input.files[0]) {
  var reader = new FileReader();

  reader.onload = function(e) {
    $('#uploaded_image').attr('src', e.target.result);
    $('#uploaded_image').css('visibility', 'visible');
    $('#Desc_label').css('visibility', 'visible');
    $('#description').css('visibility', 'visible');
    $('#category_label').css('visibility', 'visible');
    $('#category').css('visibility', 'visible');
    $('#upload_photo').css('visibility', 'visible');
  }

  reader.readAsDataURL(input.files[0]);
}
}

$("#image").change(function() {
readURL(this);
});

  </script>

  
</html>
