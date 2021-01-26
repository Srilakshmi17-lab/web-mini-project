<?php
                 $connect = mysqli_connect("localhost", "root", "", "artgallery");  
                 $username = $_COOKIE['login_username'];               
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Art-gallery Home</title>
    <link rel="stylesheet" type="text/css" media="screen" href="userhome.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" >
    <link href="https://fonts.googleapis.com/css?family=Tangerine" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <script src="userhome.js"></script> 

       <script type="text/javascript">

        function goDoSomething(d){
            
            const val = d.getAttribute("id");
            document.cookie = "keyval="+val;
            window.location="user_imageopen.php";        
        }

        </script>

</head>
<body>

    <div class="navbar-nav fixed-top container-fluid">
        <div class="nav_button">
            <span class="logo">Art Gallery</span>
           <?php 
           
                 $query = "SELECT * from user_table where username = '$username'";  
                 $result = mysqli_query($connect, $query); 
                 $rowcount = mysqli_num_rows($result);
                 $total_like =0;
                 while($row = mysqli_fetch_array($result)){
                echo' <button id="profile"> <img class="profilepic" id="dis_pic" src="data:image/jpeg;base64,'.base64_encode($row['profilpic'] ).'" /></button>';
                 }
                 ?>
            <button class="btn btn-danger" id="logout">logout</button>
            <button class="btn btn-success" id="all" onclick="viewall()">All</button>
            <button class="btn btn-success" id="people" onclick="viewpeople()">People</button>
            <button class="btn btn-success" id="animal" onclick="viewanimal()">Animals</button>
            <button class="btn btn-success" id="nature" onclick="viewnature()">Nature</button>
        </div>
      </div>

      <div class="container">

          <div id="all_image">

              <p> This is all image</p>
              <?php 
                    $c=0;
                    $array = array();
                    $query = "SELECT * from image";  
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
                        echo "<p id='empty'>" ."You dont have any photo ". "</p>";
                    }
                ?>

          </div>

          <div id="people_image">

              <p> This is PEOPLE image</p>

              <?php 
                    $c=0;
                    $array = array();
                    $query = "SELECT * from image where category='people'";  
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
                        echo "<p id='empty'>" ."You dont have any photo ". "</p>";
                    }
                ?>

          </div>

          <div id="animal_image">

              <p> This is animal image</p>

              <?php 
                    $c=0;
                    $array = array();
                    $query = "SELECT * from image where category='animal'";  
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
                        echo "<p id='empty'>" ."You dont have any photo ". "</p>";
                    }
                ?>

          </div>

          <div id="nature_image">

              <p> This is nature image</p>

              <?php 
                    $c=0;
                    $array = array();
                    $query = "SELECT * from image where category='nature'";  
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
                        echo "<p id='empty'>" ."You dont have any photo ". "</p>";
                    }
                ?> 

          </div>
                
       </div>



</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>   
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" ></script> 
<script>
   var btn = document.getElementById('logout');
    btn.addEventListener('click', function() {
      document.location.href = 'index.php';
    });
</script>

</html>