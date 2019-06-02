
    
   

   
   
   <?php include "db1.php";
    
    ?>
    
    <style>

        body{
            background-color: black;
            margin: 0;
        }
        
        .dis{
            
            background-color: gray;
            color: wheat;
            margin-left: 45%;
            font-size: 30px;
        }

</style>
    
    
    
    
    
    
    <div class="dis">
<?php

if(isset($_POST['show']))
{
    global $connection;
    $id=$_POST['show'];
    $q="select * from incidents where adhaarNo='$id'";
    $r=mysqli_query($connection,$q);
    if(!$r) echo "err";
$row=mysqli_fetch_assoc($r);
    
       echo "Adhar No.- "; echo $row['adhaarNo'];echo "<br>";echo "<br>";
        
        echo "Type- "; echo $row['Type'];echo "<br>";echo "<br>";
        echo "Victim Name- "; echo $row['Victim'];echo "<br>";echo "<br>";
        echo "Mobile No.- "; echo $row['mobileno'];echo "<br>";echo "<br>";
        echo "Email- "; echo $row['email'];echo "<br>";echo "<br>";
        echo "Gender- "; echo $row['gender'];echo "<br>";echo "<br>";
    
      $x=$row['x_coordinate'];
    $y=$row['y_coordinate'];
        
    }
    

?> 
</div>
<script>
function myMap() {
  var myCenter = new google.maps.LatLng(<?php echo $x ?>, <?php echo $y ?>);

  var mapCanvas = document.getElementById("map");
  var mapOptions = {center: myCenter, zoom: 15};
  var map = new google.maps.Map(mapCanvas, mapOptions);
  var marker = new google.maps.Marker({position:myCenter});
  marker.setMap(map);
}


</script>
 <div id="map" style="width:100%; height:500px"></div>










<script src="http://maps.google.com/maps/api/js?sensor=false" 
          type="text/javascript"> </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA4QMVZJYEYAl2DYpYcCoB6Td6CoWkwc68&callback=myMap"></script>



 
