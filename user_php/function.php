<?php



$connection = mysqli_connect('localhost:3308', 'root', '', 'emcrit');
    
    if(!$connection)
    {
        die("database connection failed");
    }
    


?>




<?php
function adduser()
    
{   
    global $connection;
    $fname=$_POST['sf-name'];
    
    $adno=$_POST['username'];
    $mobileno=$_POST['mobileno'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $gender=$_POST['Gender'];
    $address=$_POST['address'];
 
 
 
    
    $query="insert into users(AdharNo,Name,MobileNo,Email,Gender,Password,Address)";
    $query .="values('$adno','$fname','$mobileno','$email','$gender','$password','$address')";
    $result=mysqli_query($connection,$query);
    if(!$result)
    {
        die("Invalid Credentials");
    }
}


function login()
{
    $rname=$_POST['id0'];
    $rpass=$_POST['upass'];
    global $connection;
    $rquery="select * from users where Name='$rname' and Password='$rpass'";
    $rrun=mysqli_query($connection,$rquery);
    
    $rrow=mysqli_num_rows($rrun);
    
    if($rrow<1)
    {
        ?>
        <script>
            alert("username or password incorrect");
            window.open('main.php','_self');
        </script>
        <?php
    }
    else
    {
        $rdata=mysqli_fetch_assoc($rrun);
        $id=$rdata['Name'];
        session_start();
        $_SESSION['uid']=$id;
        echo "12";
        header('location:http://localhost:8012/DBW1/user_php/user.php');
        echo "3";
    }
}

    function send()
    {
        
        <?php
session_start();

if($_SESSION['uid'])
{
    ?>
        
    }






<?php  
}
else
{
    echo "6";
    header('location:../main.php');
}
?>







?>




















