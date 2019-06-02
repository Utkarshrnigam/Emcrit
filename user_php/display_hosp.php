<?php
$connection = mysqli_connect('localhost:3308', 'root', '', 'emcrit');
    
    if(!$connection)
    {
        die("database connection failed");
    }


?>





<?php



session_start();

$name=$_SESSION['uid'];

?>

<?php
    $us=$_SESSION['uid'];
    
    $que="select * from users where Name='$us'";
    $res=mysqli_query($connection,$que);
    $row=mysqli_fetch_assoc($res);
    
    
    
    ?>


<?php


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
    

?>



<?php


$qu="select * from incidents";
$r=mysqli_query($connection,$qu);
while($da=mysqli_fetch_assoc($r))
{
    if($name=$da['Victim'])
    {
        $x1=$da['x_coordinate'];
        $y1=$da['y_coordinate'];
    }
}
$x2=0;
$y2=0;
$c=1;
$q="select * from hospital";
$run=mysqli_query($connection,$q);
while($data=mysqli_fetch_assoc($run))
{ 
	$x2=$data['X_coordinate'];
	$y2=$data['Y_coordinate'];
	$d=(($x2-$x1)**2+($y2-$y1)**2)**0.5;
	if($c==1)
	{
		$min=$d;
	}
	else
	{
		if($d<=$min)
		{
			$min=$d;
			$a=$x2;
			$b=$y2;
		}
	}
	$c=$c+1;
}
$q="select * from hospital";
$run=mysqli_query($connection,$q);
while($data=mysqli_fetch_assoc($run))
{
	if($a==$data['X_coordinate'] && $b==$data['Y_coordinate'])
	{
       echo $hn=$data['Name'];echo "<br>";
        echo $had=$data['Address'];echo "<br>";
      echo "No of beds-               ";   echo $hb=$data['noOfBeds'];echo "<br>";
      echo "No of Ambulance Available-";    echo $ham=$data['noOfAmbulance'];echo "<br>";
      echo "Contact No                ";    echo $hcn=$data['contactNo'];echo "<br>";
	}
}
?>







<script>
function myMap() {
  var myCenter = new google.maps.LatLng(<?php echo $a ?>, <?php echo $b ?>);

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