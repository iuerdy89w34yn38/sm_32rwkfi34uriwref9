
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


                    <li >
                      <a href="index#about"></span>About Us</a>
                    </li>


                    <li >
                      <a href="index#services"></span>Services</a>
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


@media (max-width: 767px){
  .navbar-nav>li:hover > .dropdown-menu {
       position: initial;
    display: contents;
}
.topbar {
    display: block;
}
.zs-enabled {
      height: 250px;
    margin-top: 5px;
}

.mobcart {
    position: absolute !important;
    background: #ffa924;
    top: 56px;
    right: 5%;
    padding: 5px 10px;
    z-index: 9;
}


}


@media (min-width: 768px){

  .cartdd{
    color: black;
    padding: 10px;
    top: 30px !important;
    left: -320px !important;
}

@media (min-width: 992px){

  .cartdd{
    color: black;
    padding: 10px;
    top: 30px !important;
    left: -350px !important;
}

}

}

.cartmenu{
  position: relative;
    z-index: 99999;
}

.navbar-toggle {
    position: absolute;
    top: -60px;
    }


  .minicartimg{
    width: 50px
  }
  td{
    vertical-align: middle !important;
    font-size: 14px
  }
</style>
