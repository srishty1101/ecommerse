<?php
  require("includes/common.php");

if (isset($_SESSION['email'])) {
    header('location: products.php');
}
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Home | E-Store.com</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style>
      .banner{background-image:url("bg-img.jpeg");}
    </style>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body style="padding-top: 50px;">
    <?php
    include 'includes/header.php';
    ?>
        
          <!--Main banner image-->
          <div id="banner">
            <div style="background-image: url('bg-img.jpeg');
            width:100%;height: 450px; padding: 50px;">
           
            

              <div class="container">
                
                  
                      <div id="banner_content">
                        
                        
                          <h1>Biggest Online Mobile Store</h1>
                          <h4><p>Flat &nbsp;&#8377;2,000&nbsp;&nbsp;OFF&nbsp;&nbsp;on all products.</p></h4>
                          <br>
                          <br>
                          <a  href="product.html" class="btn btn-danger btn-lg active">Shop Now</a>
                      </div>
                  
              </div>
              </div>
          </div>
          <br>
          <br>
        

        </nav>
      </div>
    </div>
    <div class="container text-center" >
      
      <div id="item_list">
          <div class="panel panel-default">
              <div class="panel-heading  color">
                  <h3 style="color:orange">Choose&nbsp;&nbsp;From&nbsp;&nbsp;wide&nbsp;&nbsp;ranges&nbsp;&nbsp;of&nbsp;&nbsp;brands</h3>
              </div>

          <div class="panel-body">
            <div style="width:30%;
           
        display: flex;">
              <div class="col-sm-3" style="float: left; height: 50px;
              padding: 15px 15px;margin-right: 15px;
    margin-left: 15px;">
                  <a href="products.php#ios">
                     <div class="thumbnail">
                          <img src="./iphone12max.jpg" alt="iphone x" >
                              <div class="caption">
                                  <h3>Apple</h3>
                              </div>
                      </div>
                  </a>
              </div>
              <div class="col-sm-3" style="float: left; height: 50px;
              padding: 15px 15px;margin-right: 15px;
    margin-left: 15px;">
                <a href="products.php#samsung">
                   <div class="thumbnail">
                        <img src="./samsunggzflip3.jpg" alt="galaxy note 8 plus" >
                            <div class="caption">
                                <h3>Samsung</h3>
                            </div>
                    </div>
                </a>
            </div>

             <div class="col-sm-3"style="float: left; height: 50px;
             padding: 15px 15px;margin-right: 15px;
    margin-left: 15px;">
                <a href="products.php#oneplus">
                   <div class="thumbnail">
                        <img src="./op8t.jpg" alt="oneplus" >
                            <div class="caption">
                                <h3>OnePlus</h3>
                            </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-3"style="float: left; height: 50px;
            padding: 15px 15px;margin-right: 15px;
    margin-left: 15px;">
              <a href="products.php#xiaomi">
                 <div class="thumbnail">
                      <img src="./mi10i.jpg" alt="mi mix 2" >
                          <div class="caption">
                              <h3>Xioami</h3>
                          </div>
                  </div>
              </a>
          </div>
      </div>
  </div>
 </div>
</div>
</div>
</div>
<?php
include 'includes/footer.php';
?>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
