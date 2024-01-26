 <!-- Start Update Form -->
 <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <form method="post">
                    <div class="form-group">
                        <label for="fullname"> Name</label>
                        <input type="text" name = "name" value="<?php echo $row['Name'] ?>" class="form-control" id="fullname" />
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name ="email" value="<?php echo $row['Email'] ?>" class="form-control" id="email" />
                    </div>

                    <div class="form-group">
                        <label for="number">Number</label>
                        <input type="number" name= "mobile" value="<?php echo $row['Mobile'] ?>" class="form-control" id="number" />
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name = "password" value="<?php echo $row['Password'] ?>" class="form-control" id="password" />
                    </div>
                    <div class="d-flex">
                        <button type="submit" name = "update_btn" class="btn btn-success mr-2">Update</button>
                        <button class="btn btn-dark"><a href="index.php" class="text-white">Back</a></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End  Update From-->

    <!-- Start update data in table -->
  <?php include("update_queery.php")?>
    <!-- End update data in table -->