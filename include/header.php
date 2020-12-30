
<?php 
        $rows =mysqli_query($con,"SELECT * FROM shop where status='cart' AND actid='$actid'" ) or die(mysqli_error($con));        $rowcount=mysqli_num_rows($rows);
?>

<header class="header-wrapper">
    <div class="topbar clearfix" style="background: #47c6f5">

<?php require_once 'psmw/shortcode.php'; ?>
<?php  shortcode(['type' => 'ticker', 'symbol' => 'AAPL,FB,MSFT,TSLA,GOOG,EBAY,TWTR,CS,JPM,GE,TSCO.L,DB', 'template' => 'basic', 'color' => 'blue', 'speed' => 12000, 'direction' => 'left', 'pause' => TRUE]); ?>

</div>

<style type="text/css">
  .smw-ticker.smw-basic {
    padding: 0px;
}
  .smw-ticker.smw-basic.smw-ct-blue {
    color: #000;
    font-size: 14px;
}
.smw .smw-change-indicator.smw-drop > .smw-arrow-drop {
    color: red !important;
}
.smw .smw-change-indicator.smw-rise > .smw-arrow-rise{
    color: green !important;
}

</style>


    <div class="header clearfix" >
      <nav class="navbar navbar-main navbar-default"style="background-color: #fff">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <div class="header_inner">

                <a class="navbar-brand logo clearfix cuslogo" href="index"><img src="images/<?php echo $sitelogo; ?>" alt="" class="img-responsive cuslogo" ></a>
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav" aria-expanded="false">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  </button>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="main-nav"><span class="navbar-header"></span>
                  <ul class="nav navbar-nav navigation">


                    <li>
                      <a href="index#about"></span>About Us</a>
                 
                    </li>


                    <li class="dropdown"  >
                      <a href="index#products"></span>Products</a>
                        <ul class="dropdown-menu">
                        <li><a href="#"><img src="images/products/logosdb.png" class="mimg"></a></li>
                        <li><a href="#"><img src="images/products/logosig.png" class="mimg"></a></li>
                        <li><a href="#"><img src="images/products/logosam.png" class="mimg"></a></li>
                      </ul>


                    </li>



                    <li  class="dropdown">
                      <a href="index#products"></span>Packages</a>
                           <ul class="dropdown-menu">
                        <li><a href="#">Basic</a></li>
                        <li><a href="#">Premium</a></li>
                        <li><a href="#">Executive</a></li>
                      </ul>


                    </li>



                    <li  class="dropdown">
                      <a href="index#products"></span>Platform</a>
                      <ul class="dropdown-menu">
                        <li><a href="#">D-Platform</a></li>
                      </ul>

                    </li>



                    <li  class="dropdown">
                      <a href="index#products"></span>Wallet</a>
                      <ul class="dropdown-menu">
                        <li><a href="#">D-Wallet</a></li>
                      </ul>

                    </li>


                    <li >
                      <a href="index#contactus"></span>Contact Us</a>
                    </li>


                    <li class="apply_now">
                      <a href="login"></span>Login / Signup</a>
                    </li>




              
                  </ul>
                </div><!-- navbar-collapse -->

              </div>
            </div>
          </div>
        </div><!-- /.container -->
      </nav><!-- navbar -->
    </div>
  </header>


  <style type="text/css">

    .navbar-nav {
    float: right;
    display: inline-block;
}
.navbar-default .navbar-toggle, .navbar-default .navbar-toggle:hover, .navbar-default .navbar-toggle:focus{
  background: #000;
}

.header .navbar-collapse {
    padding: 0;
    border-top: none;
    max-height: 340px;
    text-align: right;
}

.mimg{
  width: 100px;
}


@media (max-width: 767px){
  .navbar-nav>li:hover > .dropdown-menu {
       position: initial;
    display: contents;
}
.topbar {
    display: block;
}
.mcar{
  min-height: 200px !important;
}

.carousel-caption {
    position: absolute;
    top: 65%;
    font-size: 13px !important;
}

.carousel-inner .item > img {
    height: 160px;
}

.carousel-caption h3 {
    font-size: 15px !important;
}




}

</style>
