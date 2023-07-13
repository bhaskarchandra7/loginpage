<?php


if($_SERVER['REQUEST_METHOD']=='POST'){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password1=$_POST['password1'];
    $password2=$_POST['password2'];
    $errors = array();

$con =new mysqli('localhost','root','','login page');
if ($password1!=$password2) {
    //echo "password does't match";
    echo '<script>  alert("password does not matchs")</script>';
    
}
elseif($con){
    //echo "successful connected";
    $sql="INSERT INTO `login1` (`name`, `email`, `password1`) VALUES ('$name', '$email', '$password1')";
    $result=mysqli_query($con,$sql);
    if($result){
        echo "data inserted success";
    }
    else{
        die(mysqli_error($con));
    }

}
else{
    echo "error";
}
}

?>