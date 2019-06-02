<script>
       <?php
		$str4=$_POST['mobileno'];
        $str1=$_POST['username'];
        $str2=$_POST['email'];
        $str3=$_POST['password'];
       ?>
    
		var regex1=/^\d\d\d\d-\d\d\d\d-\d\d\d\d$/;
		var regex2=/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		
		var regex4=/^(\+\d{1,3}[- ]?)?\d{10}$/;
		if(!(regex1.test(<?php echo $str1 ?>)) || !(regex2.test(<?php echo $str2 ?>)) || !(regex4.test(<?php echo $str4 ?>)))
		{
			window.alert("Invalid Credentials");
		}
	</script>




<?php



$connection = mysqli_connect('localhost:3308', 'root', '', 'emcrit');
    
    if(!$connection)
    {
        die("database connection failed");
    }

include "function.php";
?>
 
<?php

if(isset($_POST['signin']))
{
    adduser();
}
if(isset($_POST['log']))
{
    login();
}

if(isset($_POST['plog']))
{
    plogin();
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
    <link rel="stylesheet" href="css.css"/>
    
    
    
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
        <span class="blinker">new</span>
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
            <button id="modalBtn" class="button" onclick="openModal1()">SignUp</button>
            <button id="modalbtn" class="button" onclick="openModal2()">LogIn</button>
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
                <input type="submit" value="SignIn" name="signin"/>
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
                <input type="submit" value="Login" name="log" />
            </form>
            
            <form method="post">
                <div class="inputrow">
                    <input type="text" name="pid" placeholder="Police id"/>
                    
                </div>
                <div class="inputrow">
                <input type="password" id="pass" name="ppass" placeholder="Password"/>
                
                </div>
                <input type="submit"  value="Login" name="plog" />
            </form>
        </div>
      </div>
    </div>
  </div>
         </form>
          
      </div>
       

    <style>
        .ab{
            color: wheat;
            font-size: 30px;
            font-family: 'Roboto', sans-serif;
        }
       
       </style>
      
    
    <div class="sec1" id="1">
          
          <hr>
          <div id="q" style="height:90% ">
              <p class="ab">Not all of us can do great things, but we can do small things with great love . EMcrit has been designed with this idea so that people can help each other easily . EMcrit offers social services without thought of its own profit . Our Motto - "Help is a four legged word" </p>
          </div>
           
    </div>
    
    
    
   
    
    
    
    
    
    
    
    <div class="pimg3">
         <div class="ptext">
             <span class="border-trans">POLICE</span>
         </div>
    </div>    
<script>
    
    
    function alerts()
    {
        window.alert("Please login or signup");
    }
       </script>
    
    
    
    
    <div class="sec3" id="3">
          <form>
              <input class="sec_imp" type="button" onclick="alerts()" value="Need help of Police!"> 
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
          <form>
              <input class="sec_imp" type="submit" value="Call Ambulance"> 
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



