<?php
$connection=mysqli_connect("localhost","root","");
mysqli_select_db($connection,'course');
$USERNAME=$_POST['unname'];
$PHONENUMBER=$_POST['phoneNumber'];

$usernameresult=mysqli_query($connection,"select name from personalinfo where name='$USERNAME'");
$phoneNumberresult=mysqli_query($connection,"select phoneNumber from personalinfo where phoneNumber= '$PHONENUMBER'");
while($username=mysqli_fetch_array($usernameresult,MYSQLI_ASSOC)){
    $name=$username['name'];
}
while($phoneNumber=mysqli_fetch_array($phoneNumberresult,MYSQLI_ASSOC)){
    $phone=$phoneNumber['phoneNumber'];
}
echo($name);
echo($phone);

if (($name==$USERNAME)&&($phone==$PHONENUMBER)){
    $_SESSION['name']="$USERNAME";
    $_SESSION['phoneNumber']="$PHONENUMBER";
    header('location:/Course/php/dashbd.php');
}else{
    echo"you have a wrong username and phoneNumber";
}
mysqli_close($connection);
?>



