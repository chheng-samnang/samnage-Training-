<?php include_once("connection_to_database.php");
  $cat = loadData();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Category Page</title>
    <?php  include_once("header.php");?>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <h1 class="page-header"><i class="glyphicon glyphicon-th-large"></i> Category Management</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-2 col-md-offset-1">
          <button type="button" name="btnAdd" id="btnAdd" class="btn btn-primary"><i class="glyphicon glyphicon-plus-sign"></i> Add Category</button>
        </div>
      </div>
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>No.</th>
                <th>Category Code</th>
                <th>Category Name</th>
                <th>Description</th>
                <th>User Create</th>
                <th>Date Create</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $i = 0;
              while($row = mysqli_fetch_assoc($cat)){ ?>
              <tr>
                <td><?php echo $i+1 ?></td>
                <td><?php echo $row["cat_code"] ?></td>
                <td><?php echo $row["cat_name"] ?></td>
                <td><?php echo $row["cat_desc"] ?></td>
                <td><?php echo $row["user_crea"] ?></td>
                <td><?php echo $row["date_crea"] ?></td>
                <td><a href="#" class="btn btn-success"><i class="glyphicon glyphicon-pencil"></i> Edit</a> <a href="#" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</a></td>
              </tr>
              <?php
                $i++;
            } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </body>
  <?php include_once("footer.php"); ?>
  <script type="text/javascript">
    $("#btnAdd").click(function(){
      window.location.assign("Add_category.php");
    });
  </script>
</html>
