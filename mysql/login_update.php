<?php include "db.php"; ?>
<?php include "functions.php"; ?>

<?php updateTable(); ?>
<?php include "includes/header.php"; ?>

    <div class="container">
      <div class="col-sm-6">
        <h1 class="text-center">Update</h1>
        <form class="" action="login_update.php" method="post">
          <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username">
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password">
          </div>
          <div class="form-group">
            <select class="" name="id">
              <!-- <option value="">1</option> -->
              <?php
                showAllData();
               ?>

            </select>
          </div>
            <input class="btn btn-primary" type="submit" name="submit" value="Update">
        </form>

      </div>
    </div>

<?php include "includes/footer.php"; ?>
