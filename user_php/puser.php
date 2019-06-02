







<?php
include "db1.php";
session_start();

if($_SESSION['uid'])
{
    ?>
    
    <body bgcolor="grey">
   <link rel="stylesheet" href="css.css"/>
   <div class="maq">
        <nav class="maqnav">
            <h4>Incidents</h4>
        </nav>
         <form action="display.php" method="post">
           <?php
    global $connection;
    $q="select * from incidents";
    $r=mysqli_query($connection,$q);
        while($row=mysqli_fetch_assoc($r))
        {
            
            ?>
            
            <input type="submit" name="show" value="<?php echo $row['adhaarNo']  ?>"><p>Need help</p><br>
            
        <?php } ?>
    
       </form>
       
    </div>
 

</body>
 <?php
    
    
}
else
{
    echo "6";
    header('location:../main.php');
}
?>