<?php 
if(isset($_POST['submit_btn'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];
    $queery = "INSERT INTO curddata(name,email,mobile,password) VALUES ('$name', '$email', '$mobile', '$password')";
    $data = mysqli_query($conn, $queery);
}
?>
