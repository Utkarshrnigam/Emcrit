<script>
function getLocation(){
    


    
navigator.geolocation.getCurrentPosition(function(location) {
 var x = location.coords.latitude;
  var y = location.coords.longitude;
x = x.toFixed(6);
    y = y.toFixed(6);
    console.log(x);
     
   document.getElementById("h1").value=x;
    document.getElementById("h2").value=y;
    
    document.getElementById("hp1").innerHTML="We Got You";
    document.getElementById("h11").value=x;
    document.getElementById("h22").value=y;
    
    document.getElementById("hp2").innerHTML="We Got You";
});


}
</script>
<?php
session_start();

if($_SESSION['uid'])
{
    ?>
    
    
   <?php
    
    
    if(isset($POST['hospital']))
    {
        
    }
    
    
    
    
    ?>
    
    
    
    
    
   
    
     
      
       
        
         
          <?php



$connection = mysqli_connect('localhost:3308', 'root', '', 'emcrit');
    
    if(!$connection)
    {
        die("database connection failed");
    }
?>

<?php
    $us=$_SESSION['uid'];
    
    $que="select * from users where Name='$us'";
    $res=mysqli_query($connection,$que);
    $row=mysqli_fetch_assoc($res);
    
    
    
    ?>

<?php
    
    if(isset($_POST['police']))
    {
        global $connection;
    $fname=$row['Name'];
    
    $adno=$row['AdharNo'];
    $mobileno=$row['MobileNo'];
    $email=$row['Email'];
    $type=$_POST['desc'];
    $gender=$row['Gender'];
    $x_coord=$_POST['hh1'];
        $y_coord=$_POST['hh2'];
    
 
 
    
    $query="insert into incidents(adhaarNo,Type,Victim,mobileno,email,gender,x_coordinate,y_coordinate)";
    $query .="values('$adno','$type','$fname','$mobileno','$email','$gender','$x_coord','$y_coord')";
    $result=mysqli_query($connection,$query);
    if(!$result)
    {
        die("err2");
    }
    }
    
    ?>


<html>
<head>
  
    
   <style>
       body{
           margin: 0;
       }
       
       .btn-grp{
            display: inline;
            
            margin-left: 80%;
            z-index: 1000;
        }
    </style>
    <link rel="stylesheet" href="css1.css"/>
</head>
   <body>
    <section class="nav" id="nav">
    <div class="logo">
    <a href="rdso.php"><img class="log" src="indexx.jpg"></a>
    <h1 class="lo">EMCrit</h1>    
    </div>
    <div class="tabs">
        <input class="b" id="a1" type="button" value="ABOUT US" onclick="croll('1')" >
        <input class="b" id="c1" type="button" value="POLICE" onclick="croll('3')">
        <input class="b" id="e1" type="button" value="AMBULANCE" onclick="croll('5')">
        <input class="b" id="f1" type="button" value="FIRE BRIGADE" onclick="croll('6')">
        <input class="b" id="g1" type="button" value="CONTACT US" onclick="croll('7')">
        
        </div>
    </section>
     

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="icon-bar">
  <a target="_blank" href="https://www.facebook.com/rdsoIR?_rdr" class="facebook"><i class="fa fa-facebook"></i></a> 
  <a target="_blank" href="https://twitter.com/rdsoexchange" class="twitter"><i class="fa fa-twitter"></i></a> 
  
</div>
    
        <div class="pimg1">
         <div class="ptext">
             <span class="border-trans">ABOUT US</span>
         </div>
    
        <div class="btn-grp">
            <?php
    $n=$row['Name'];
    echo '<span style="color:wheat;text-align:center;">Welcome</span>';
    echo "     ";
    echo $n;
    ?>
        </div>
        

  <div id="simpleModal1" class="modal">
    <div class="modal-content">
      <div class="modal-header">
          <span onclick="closeModal1()" class="closeBtn"><b>&times;</b></span>
          <center><h2 style="color:black">SignUp</h2></center>
      </div>
      <div class="modal-body">
        <div class="signin">
            <div class="avatar"></div>
            <center><p class="error" id="er">Fields cannot be empty or incorrect data</p></center>
            <form method="post" id="form" name="form">
                <div class="input-row">
                    <label class="ion-person" for="name"></label>
                    <input type="text" name="sf-name" id="name" placeholder="FirstName"/>
                    <label class="ion-person" for="name"></label>
                    <input type="text"  name="sl-name" id="name1" placeholder="LastName"/>
                </div>
                <div class="inputrow">
                    <input type="text" id="cc" name="username" placeholder="Adhar No."/>
                    <label class="ion-person" for="name"></label>
                </div>
                <div class="inputrow">
                    <input type="text" id="dd" name="mobileno" placeholder="Phone No."/>
                    <label class="ion-person" for="name"></label>
                </div>
                <div class="inputrow">
                    <input type="text" id="dd" name="email" placeholder="email"/>
                    <label class="ion-person" for="name"></label>
                </div>
                <div class="inputrow">
                    <input type="text" id="dd" name="Gender" placeholder="Gender"/>
                    <label class="ion-person" for="name"></label>
                </div>
                 <div class="inputrow">
                    <input type="text" id="dd" name="address" placeholder="address"/>
                    <label class="ion-person" for="name"></label>
                </div>
                <div class="inputrow">
                <input type="password" id="ee" name="password" placeholder="Password"/>
                <label class="ion-locked" for="pass"></label>
                </div>
                <input type="submit" value="SignIn" name="signin"  />
            </form>
        </div>
      </div>
      
    </div>
  </div>
         
  <form method="post">
  <div id="simpleModal2" class="modal">
    <div class="modal-content">
      <div class="modal-header">
          <span onclick="closeModal2()" class="closeBtn"><b>&times;</b></span>
          <center><h2 style="color:black">LogIn</h2></center>
      </div>
      <div class="modal-body">
        <div class="signin">
            <div class="avatar"></div>
            <form>
                <div class="inputrow">
                    <input type="text" name="id0" placeholder="ADHAAR No"/>
                    
                </div>
                <div class="inputrow">
                <input type="password" id="pass" name="upass" placeholder="Password"/>
                
                </div>
                <input type="submit"  value="Login" name="log" />
            </form>
        </div>
      </div>
    </div>
  </div>
         </form>
          
      </div>
       

    
      
    
    <div class="sec1" id="1">
          
          <hr>
          <div id="q" style="height:90%">
              <p style="color:wheat">Not all of us can do great things, but we can do small things with great love . EMcrit was designed with this idea so that people can help each other easily . EMcrit offers social services without any thought of its own profit . </p>
          </div>
           
    </div>
    
    
    
   
    
    
    
    
    
    
    
    <div class="pimg3">
         <div class="ptext">
             <span class="border-trans">POLICE</span>
         </div>
    </div>    

    
    
     
    
    <div class="sec3" id="3">
          <form method="post">
              <input class="sec_imp" type="submit" name="police" value="Need help of Police!">
              <input class="button" type="button" value="Allow location access" onclick="getLocation()"> 
              <input type="text" id="name1" placeholder="small description of the incident" name="desc">
              <input type="text" style="display:none" id="h1" name="hh1">
              <input type="text" id="h2" name="hh2" style="display:none"> 
              <p id="hp1" style="color:red"></p>
          </form>
           
          <hr>
          <div id="w2" style="height:90%">
             <h1 style="color:wheat"></h1>
          </div>
           
    </div>
    
   
    
    
    
    
    
    
    
    
    
    <div class="pimg4">
          <div class="ptext">
             <span class="border-trans">AMBULANCE</span>
         </div>
    </div>    

    
    
    
    <div class="sec1" id="5">
          <form method="post" action="display_hosp.php">
              <input class="sec_imp" type="submit" value="Call For Hospital Help" name="hospital"> 
              <input class="button" type="button" value="Allow location access" onclick="getLocation()">
              <input type="text" id="name1" placeholder="small description of the incident" name="desc">
              <input type="text" style="display:none" id="h11" name="hh1">
              <input type="text" id="h22" name="hh2" style="display:none"> 
              <p id="hp2" style="color:red"></p>
          </form>
          <hr>
          <div id="w" style="height:90%">
             
                  <ul>
                      
                  </ul>
            
          </div>
           
    </div>
    
    
    
    
    
    <div class="pimg5">
          <div class="ptext">
             <span class="border-trans">CALL FIRE BRIGADE</span>
         </div>
    </div>    

    
    
    
    <div class="sec1" id="6">
          <form>
              <input class="sec_imp" type="submit" value="Call FIRE BRIGADE"> 
          </form>
          <hr>
          <div id="st" style="height:90%">
             <h1 style="color:wheat"></h1>
           
    </div>
       </div>
    
    
    
    <div class="pimg2">
          <div class="ptext">
             <span class="border-trans">CONTACT US</span>
         </div>
    </div>    

    
    
    
    
    
    <section class="sec4" id="7">
            
          
          <div class="container1">
  
  <div class="row">
    <div class="column">
      <div id="map" style="width:100%; height:500px"></div>
    </div>
    <div class="column1">
      <form action="rdso.php" method="post">
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="fname" placeholder="Your name..">
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lname" placeholder="Your last name..">
        <label for="country">G-Mail ID </label>
        <input type="text" id="country" name="email" placeholder="Your G-Mail ID..">
        <label for="subject">Subject</label>
        <textarea id="subject" name="que" placeholder="Write something.." style="height:170px"></textarea>
        <input type="submit" value="Submit" name="sub">
      </form>
    </div>
  </div>
  <div class="terms">
      <ul>
          <li><a class="aterms"  target="_blank" href="disclaimer.html">Disclaimer</a></li>
          <li><a class="aterms" target="_blank" href="terms.html">Terms & Condition</a></li>
          <li><a class="aterms" target="_blank" href="policy.html">Privacy Policy</a></li>
      </ul>
  </div>
</div>


   
    </section>
    
       
    <script src="js.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=false" 
          type="text/javascript"> </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA4QMVZJYEYAl2DYpYcCoB6Td6CoWkwc68&callback=myMap"></script>
    </body>  
</html>




           
            
             
              
               
                
                 
                  
                   
                    
                     
                      
                       
                        
                         
                          
                           
                            
                             
                              
                               
                                
                                 
                                  
                                   
                                    
                                     
                                      
                                       
                                        
                                         
                                          
                                           
                                            
                                             
 <?php
    
    
}
else
{
    echo "6";
    header('location:../main.php');
}
?>