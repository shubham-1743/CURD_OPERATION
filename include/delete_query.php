<?php 
$id = $_GET['id_delete'];
$query = "DELETE FROM curddata WHERE id = '$id'";
$data = mysqli_query($conn, $query);
if($data){
    ?>
    <script type = "text/javascript">
        alert("Data Deleted Succesfull")
        window.open("http://localhost/Derwoine_All/curdopration/index.php", "_self");
        </script>
    <?php
}else {
    ?>
    <script type = "text/javascript">
        alert("Data cannot Deleted")
        
        </script>
    <?php
}
?>