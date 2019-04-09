<?php include "db.php"; ?>
<?php include "functions.php"; ?>

<?php deleteRows(); ?>

<?php include "includes/header.php"; ?>

    <div class="container">
      <div class="col-sm-6">
        <h1 class="text-center">Delete</h1>
        <form class="" action="login_delete.php" method="post">
          <div class="form-group">
            <select class="" name="id">
              <!-- <option value="">1</option> -->
              <?php
                showAllData();
               ?>

            </select>
          </div>
            <input class="btn btn-primary" type="submit" name="submit" value="Delete">
        </form>

      </div>
    </div>

<?php include "includes/footer.php"; ?>
