<?php
require("includes/common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Settings | E-Store.com</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
</head>
  <body>
    <?php include 'includes/header.php'; ?>
    <div class="container-fluid" id="content">
        <div class="row">
            <div class="col-lg-4 col-lg-offset-4" id="settings-container">
                <h4>Change Password</h4>
                <form action="settings_script.php" method="POST">
                    <div class="form-group">
                        <input type="password" class="form-control" name="old_password" pattern=".{6,}" placeholder="Old Password" required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="new_password"  pattern=".{6,}" placeholder="New Password" required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="repnew_password" pattern=".{6,}" placeholder="Re-type New Password" required>
                    </div>
                    <div><b class="red">
                        <?php
                        if(isset($_GET["error"])){
                          echo $_GET['error'];
                        }
                        ?>
                      </b></div>
                      <br>
                        <button type="submit" class="btn btn-primary">Change</button>

                    </form>
                </div>
            </div>
        </div>
            <?php include 'includes/footer.php'; ?>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
