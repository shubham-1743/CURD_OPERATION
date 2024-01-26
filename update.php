<!--Start Database Connect  -->
<?php include("helper/dbconnet.php") ;
 $id_num = $_GET['id'];
    $select = "SELECT * FROM curddata WHERE id = '$id_num'";
    $data = mysqli_query($conn, $select);
    $row = mysqli_fetch_array($data);
?>
<!--EnD Database Connect  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- ALl Head Section Start -->
    <?php include("include/head.php") ?>
    <!-- EnD ALL Head Section EnD -->
    <title>Curd Opration</title>
    <?php include("include/onlyindex.php") ?>
</head>

<body>
<h2 class="text-center py-2">Update Data Use Form</h2>
    <!-- Form Start -->
    <?php include("include/updateForm.php") ?>
    <!-- EnD Form -->


    <!-- Start Script --->
    <?php include("include/all_script.php") ?>;
    <!-- EnD Script -->
</body>

</html>