<script type="text/javascript">

navigator.geolocation.getCurrentPosition(function(location) {
  var x=location.coords.latitude;
  console.log(location.coords.longitude);
  console.log(location.coords.accuracy);
    <?php $a = "<script>document.write(x)</script>"?>   
    
});
</script>
<?php echo $a; ?>







<script type="text/javascript">
var jvalue = 'this is javascript value';

<?php $abc = "<script>document.write(jvalue)</script>"?>   
    <?php echo "hello"; ?>
</script>
<?php echo  'php_'.$abc;?>

