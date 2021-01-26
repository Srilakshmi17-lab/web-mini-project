
<!DOCTYPE html>
<html lang="en">
<head>

    <title>Art Gallery</title>
       
    <link rel="stylesheet" href="index.css" >
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" >
    <link href="https://fonts.googleapis.com/css?family=Tangerine" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet"> 
    
    

    
    <script src="index.js"></script> 
    
</head>

<body>

    <div class="navbar-nav fixed-top container-fluid">
        <div class="nav_button">
            <button class="btn btn-primary" id="signup" onclick="viewsignup()">Sign Up</button>
            <button class="btn btn-primary" id="login" onclick="viewlogin()">Login</button>
        </div>
      </div>

<div class="content">
    
        <div class="Image">Image</div>
        <div class="gallery">Gallery</div>


    <div class="loginform" id="loginform">
      
        <span>Login</span>
        <form action="login.php" method="POST">
                <input type="text" name="username" id="username" placeholder="Username" required="required"><br>
                <input type="password" name="password" id="password" placeholder="password" required="required"><br>
                <input class="btn btn-primary" type="submit" value="login" id="login_submit" name="login_button">
        </form>
    
    </div>

    <div class="signupform" id="signupform">
         
            <span>Signup</span>
            <form action="signup.php" method="POST" enctype="multipart/form-data">
                    <input type="text" name="username" id="signup_username" placeholder="Username" required="required"><br>
                    <input type="password" name="password" id="signup_password" placeholder="password" required="required"><br>
                    <input type="email" name="email" id="user_email" placeholder="Email id" required="required"><br> <br>
                    <span id="gender_field" > Gender :</span>
                    <select name="gender">
                        <option  value="male">Male</option>
                        <option value="female">Female</option>
                    </select> <br><br>
                    <span id="gender_field"> Date of Birth :</span><br>
                    <input id="datepicker"  type="date" name="bday"> <br><br>

                    <label id="profilepic_lable" for="profilepic">Upload your Profile piture</label> <br>
                    <input  type="file" name="image" id="image" /> <br><br>

                    <span id="yesno" > want to be uploader?</span>
                    <input id="radiobutton" type="radio" name="radio" value="uploader" required>Yes
                    <input id="radiobutton" type="radio" name="radio" value="user">No <br>
                    <input class="btn btn-success" type="submit" value="signup" id="signup_submit" name="signup_button">
    
            </form>
    
    </div>

    <div class="aboutus" id="aboutus"> 
    
    <span>About Us</span> 
        
    <div class="ramya">
        <p id="ramyatext"> Lorem ipsum dolor, sit amet consectetur adipisicing elit. At sunt nobis molestias reprehenderit illo accusantium consequatur sed harum delectus. Illo alias ut necessitatibus! Possimus temporibus dolore alias voluptates sequi molestias? 
</p>
        <img id="ramya_image" src="Images\ramya.jpg" alt="Ramya" height="200px" width=" 200px">
    </div>
    
    <div class="sindu">
        <img id="sindu_image" src="Images\sindhu.jpeg" alt="sindu" height="200px" width=" 200px">
        <p id="sindutext"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, necessitatibus facere iure consequuntur sed quia quas unde nam dolorem. Dolorum autem cumque minus a porro placeat reprehenderit eligendi natus beatae. </p>
    </div>

    </div>
    

</div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>   
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>  

</body>
</html>
<script>  
        $(document).ready(function(){  
             $('#signup_submit').click(function(){  
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