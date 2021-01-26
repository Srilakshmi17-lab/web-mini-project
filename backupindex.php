
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" >
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>  
    <meta charset="UTF-8">
    <title>Art Gallery</title>
       
    <style>

   body{
    font-family: 'Poppins', sans-serif;
    background-color: #E0E1E0;
   }
    
    .navbar {
    overflow: hidden;
    position:fixed;
    top: 0; 
    width: 100%; 
    }

    .navbar button {
    float: right;
    display: block;
    color: black;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    background-color: transparent;
    margin-right: 30px;
    margin-top: 20px;
    border-radius: 25px;
    }


    #bgimg{
        margin-top: 0px;
        width: 100%;
    }

    #backgroundimage{
        margin-top: -10px;
        margin-left: -10px;
        margin-right: -8px;
    }


    #art{
        font-family: 'Tangerine', cursive;
        font-size: 50px;
        margin-top: -1000px;
        margin-left: 1050px;
            }


    #Gallery{
        font-family: 'Tangerine', cursive;
        font-size: 100px;
        margin-top: -170px;
        margin-left: 1100px;
    }


    #loginform{
        visibility: hidden;
        margin-left: 550px;
        margin-top: -80px;
    }

    #username{
        width: 250px;
        height: 25px;
        border-radius: 10px;
        padding-left: 5px;
    }

        #signup_username{
        width: 250px;
        height: 25px;
        border-radius: 10px;
        padding-left: 5px;
    }

    #password{
        width: 250px;
        height: 25px;
        margin-top: 20px;
        border-radius: 10px;
        padding-left: 5px;

    }

    
    #signup_password{
        width: 250px;
        height: 25px;
        margin-top: 20px;
        border-radius: 10px;
        padding-left: 5px;

    }


    #profilepic_lable{
        font-size: 14px;
    }

     #profilepic{
        width: 250px;
        height: 25px;
        margin-top: 20px;
        border-radius: 10px;
        padding-left: 5px;

    }

    #login_submit{
        font-family: 'Poppins', sans-serif;
        margin-top: 20px;
        width: 150px;
        height: 40px;
        background-color: blue;
        color: white;
        font-size: 16px;
        border-radius: 15px;
    }

        #signup_submit{
        font-family: 'Poppins', sans-serif;
        margin-top: 20px;
        width: 150px;
        height: 40px;
        background-color: green;
        color: white;
        font-size: 16px;
        border-radius: 15px;
    }

    #signupform{
        margin-top: -234px;
        margin-left: 550px;
        visibility: hidden;
    }

    #abouttext{
        font-size: 13px;
        width: 35%;
        text-align: justify;
    }

    #abouttext_sindu{
        width: 35%;
        font-size: 13px;
        text-align: justify;
        margin-top: -200px;
        margin-left: 500px;
    }

    #sindu{
        margin-left: -320px;
    }

    #ramya{
        margin-top: -110px;
        margin-left: 800px;

    }

    #aboutus{
        margin-left: 400px;
        margin-top: -250px;
    }

    .fixed-top{
        display:inline-block;
        width:100%; 
    }

    </style>
    <link href="https://fonts.googleapis.com/css?family=Tangerine" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet"> 
    
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>   
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 

     <script>
          function viewsignup()
           {

               document.getElementById('signupform').style = 'visibility:visible';
               document.getElementById('loginform').style = 'visibility:hidden';
               document.getElementById('aboutus').style = 'visibility:hidden';


           }

            function viewlogin()
           {

               document.getElementById('signupform').style = 'visibility:hidden';
               document.getElementById('loginform').style = 'visibility:visible';
               document.getElementById('aboutus').style = 'visibility:hidden';


           }
     </script>      
    
</head>
<body>
    <div class="navbar-nav fixed-top container-fluid">
        <button class="btn btn-primary pull-right" id="signup" onclick="viewsignup()">Sign Up</button>
        <button id="login" onclick="viewlogin()">Login</button>
      </div>

    <div id="backgroundimage">
        <img  id="bgimg" src="Images\background.jpg" alt="background">
    </div>

    <div id="art">
        <h1>Art</h1>
    </div>

    <div id="Gallery">
            <h1>Gallery</h1>
        </div>

    <div id="loginform">
        <center>
        <h1>login</h1>
        <form action="login.php" method="POST">
                <input type="text" name="username" id="username" placeholder="Username" required="required"><br>
                <input type="password" name="password" id="password" placeholder="password" required="required"><br>
                <input type="submit" value="login" id="login_submit" name="login_button">

        </form>
    </center>
    </div>

    <div id="signupform" >
            <center>
            <h1>signup</h1>
            <form action="signup.php" method="POST" enctype="multipart/form-data">
                    <input type="text" name="username" id="signup_username" placeholder="Username" required="required"><br>
                    <input type="password" name="password" id="signup_password" placeholder="password"><br><br>
                    <label id="profilepic_lable" for="profilepic">Upload your Profile piture</label> <br>
                    <input type="file" name="image" id="image" /> <br>
                    <input type="submit" value="signup" id="signup_submit" name="signup_button">
    
            </form>
        </center>
        </div>
<center>
        <div id="aboutus">
           <h1>About Us</h1> 
           <p id="abouttext"> Lorem ipsum dolor, sit amet consectetur adipisicing elit. At sunt nobis molestias reprehenderit illo accusantium consequatur sed harum delectus. Illo alias ut necessitatibus! Possimus temporibus dolore alias voluptates sequi molestias? 
               
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid quibusdam rem, hic repudiandae aspernatur deleniti, amet enim rerum reiciendis dolorem sit eum praesentium molestiae alias corrupti quos tenetur repellat nostrum.</p>
           <img id="ramya" src="Images\profilepic.jpg" alt="Ramya" height="200px" width=" 200px"> <br><br><br>
           <img id="sindu" src="Images\profilepic.jpg" alt="sindu" height="200px" width=" 200px">
           <p id="abouttext_sindu"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, necessitatibus facere iure consequuntur sed quia quas unde nam dolorem. Dolorum autem cumque minus a porro placeat reprehenderit eligendi natus beatae.
            
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid quibusdam rem, hic repudiandae aspernatur deleniti, amet enim rerum reiciendis dolorem sit eum praesentium molestiae alias corrupti quos tenetur repellat nostrum.</p>

        </div>
    </center>
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