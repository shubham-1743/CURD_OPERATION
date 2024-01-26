<!-- Slect Query Start -->
<?php
$query = "SELECT * FROM curddata";
$data = mysqli_query($conn, $query);
$result = mysqli_num_rows($data);
if ($result) {
    while ($row = mysqli_fetch_array($data)) {
?>
        <tr>
            <td><?php echo $row['Name']; ?></td>
            <td><?php echo $row['Email']; ?></td>
            <td><?php echo $row['Mobile']; ?></td>
            <td><?php echo $row['Password']; ?></td>
            <td class='btn-primary text-center'><a class="text-white" href="update.php?id=<?php echo $row['Id']; ?>">Edit</a></td>
            <td class='btn-danger text-center'><a onclick = "return confirm('Are You Sure Delete Data')"class="text-white" href="delete.php?id_delete=<?php echo $row['Id']; ?>">Delete</a></td>
        </tr>
    <?php
    }
} else {
    ?>
    <tr>
        <td>Data Not Record</td>
    </tr>
<?php
}
?>