<?php
include_once("connection_to_database.php");
if(isset($_POST["btnSave"]))
{
  $msg="";
  $result = insertCat($_POST);
  if($result)
  {
    $msg = "This category has been saved successfully!";
  }else {
    $error = "There is an error.";
  }
}
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>
    <?php include_once("header.php"); ?>
    <!-- Bootstrap -->

</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <h1 class="page-header"><i class="glyphicon glyphicon-th-large"></i> Add Category Info</h1>
        <?php if(isset($msg)&&$msg!=""){ ?>
        <div class="alert alert-success" role="alert"><?php echo $msg; ?></div>
        <?php } ?>
        <div class="row">
          <form  action="Add_Category.php" method="post">


          <div class="col-md-12">
            <div class="panel panel-default">
              <div class="panel-body">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="" class="form-label">Category Name</label>
                      <input type="text" name="txtCatName" value="" placeholder="Enter Category name here..." class="form-control">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="" class="form-label">Category Code</label>
                      <input type="text" name="txtCatCode" value="" placeholder="Enter Category Code here..." class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="" class="form-label">Description</label>
                      <textarea name="txtCatDesc" rows="8" cols="80" placeholder="Enter your text here..." class="form-control"></textarea>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="row pull-right">
                  <div class="col-md-12">
                    <button type="submit" name="btnSave" class="btn btn-success">Save</button>
                    <button type="button" name="btnCancel" id="btnCancel" class="btn btn-default">Cancel</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </form>
        </div>
      </div>
    </div>
  </div>

</body>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <?php include_once("footer.php") ?>
    <script type="text/javascript">
      $("#btnCancel").click(function(){
        window.location.assign("category.php");
      });
    </script>
</html>
