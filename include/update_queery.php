<?php 
if(isset($_POST['update_btn'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];
    $update = "UPDATE curddata SET name = '$name', email = '$email', mobile = '$mobile', password = '$password' WHERE id = '$id_num'";
    $data = mysqli_query($conn, $update);
    if($data){
        ?>
        <script type = "text/javascript">
            alert("Data Update Successfully");
        window.open("http://localhost/Derwoine_All/curdopration/index.php", "_self");

        </script>
        <?php
    }
    else{
        ?>
        <script type = "text/javascript">
            alert("Data cannot Update")
        </script>
        <?php
    }
}
?>