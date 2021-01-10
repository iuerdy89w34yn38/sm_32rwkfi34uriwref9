<header class="header-wrapper">
    <?php include 'include/topbar.php'; ?>
    <div class="header clearfix" >
      <nav class="navbar navbar-main navbar-default"style="background-color: #fff">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <div class="header_inner">

                <a class="navbar-brand logo clearfix cuslogo" href="index"><img src="images/products/logosdb.png" class="img-responsive" style="width: 75%;" ></a>
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
                      <a href="#acct"></span>Account Types</a>
                        <ul class="dropdown-menu">
                        <li><a href="#">Current Account </a></li>
                        <li><a href="#">Savings Account</a></li>
                      </ul>


                    </li>


                    <li class="dropdown"  >
                      <a href="#acct"></span>Bonds</a>
                        <ul class="dropdown-menu">
                        <li><a href="#">Fixed  Bonds  </a></li>
                        <li><a href="#">Saving  Bonds  </a></li>
                        <li><a href="#">Class  Bonds </a></li>
                      </ul>


                    </li>


                    <li  class="dropdown">
                      <a href="login"></span>Platform</a>
                      <ul class="dropdown-menu">
                        <li><a href="#"> D-Trade</a></li>
                      </ul>

                    </li>



                    <li  class="dropdown">
                      <a target="_blank" href="wallet"></span>Wallet</a>
                      <ul class="dropdown-menu">
                        <li><a target="_blank" href="wallet">Swift (E-Wallet)</a></li>
                      </ul>

                    </li>



                    <li >
                      <a href="#contactus"></span>News</a>
                    </li>



                    <li >
                      <a target="_blank" href="contactus"></span>Contact Us</a>
                    </li>

                    <li class="apply_now">
                      <a href="login"  target="blank"></span>Login / Signup</a>
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

.header .navbar-nav li.dropdown .dropdown-menu li a {
    font-size: 13px;
    font-weight: 900;
    color: #000;
}

.header .navbar-nav li.dropdown .dropdown-menu {
    min-width: 200px;
    background: #b5b5b5;
  }

.mimg{
  width: 100px;
}

.navbar-nav li.dropdown .dropdown-menu li a {
    border: none;
    text-align: center;
    font-weight: 900;
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
