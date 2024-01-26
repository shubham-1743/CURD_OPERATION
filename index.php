<!--Start Database Connect  -->
<?php include("helper/dbconnet.php") ?>
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
    <h2 class="text-center py-2">Create A Data Use Form</h2>
    <!-- Form Start -->
    <?php include("include/form.php") ?>
    <!-- EnD Form -->

    <!-- Data insert In database -->
    <?php include("include/interst.php") ?>
    <!-- Data Insert In  Database-->

    <!-- Start List Data In Table-->
    <?php include("include/table.php") ?>
    <!-- EnD List Data In Table -->

    <!-- Start Script --->
    <?php include("include/all_script.php") ?>;
    <!-- EnD Script -->
</body>

</html>