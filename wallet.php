<?php 
session_start();
if(isset($_SESSION['actid'])){
  header("location:profile.php");
}
error_reporting(false);
?>


<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<?php include 'include/head.php'; ?>
	<!-- Document Title
	============================================= -->
  
  <title>Wallet - <?php echo $sitename ?> </title>

	<?php $link="blank" ?>

</head>



<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<?php	include 'include/header.php'; ?>

	

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
 -->
    <!-- Wrapper for slides -->
    <div class="carousel-inner">




      <div class="item active" style="background:url(images/wallet/w2.jpg); ">

        <div class="row">
          <div class="col-md-1">
          </div>
          <div class="col-md-6">
            <div style="padding-top: 90px" class="animated fadeInLeft">
             <br>  
          <h2 style="color: #000">Swift E-Wallet</h2>
          <br>

          <p style="color: #000">
            Insightful pay quickly with just an email address and password. Enable card, bank and local payment methods and connect with millions of existing Skrill wallet holders globally..


            <br>
            <br>
            1-Tap allows customers to make quick, repeat payments with a single touch, without having to re-enter their log-in details or payment information. They can pay on the go or pay while they play, all within seconds from any device. Quick and easy to enable, add Skrill 1-Tap to your checkout and benefit from fast, effective and frictionless payments.
            <br>
            <br>
          </p>
        </div>


            
          </div>
          

      </div>
    </div>


      <div class="item" style="background:url(images/wallet/w3.jpg); ">

        <div class="row">
          <div class="col-md-1">
          </div>
          <div class="col-md-6">
            <div style="padding-top: 90px" class="animated fadeInLeft">
             <br>  
          <h2 style="color: #000">Interbank Transfers</h2>
          <br>

          <p style="color: #000">
            Digital Wallet will look on your website and view the online customer journey to the point of purchase and connect with millions of existing Skrill wallet holders globally..


            <br>
            <br>
            Grow and connect
With millions of existing Skrill Wallet holders globally. Quick and easy to enable, add Skrill 1-Tap to your checkout and benefit from fast, effective and frictionless payments.Improve conversion rates
Customers pay quickly with just an email address and password.Chargeback protection
Payments are indemnified
            <br>
            <br>
          </p>
        </div>


            
          </div>
          
        </div>
      </div>



      <div class="item" style="background:url(images/wallet/w1.jpg); ">

        <div class="row">
          <div class="col-md-1">
          </div>
          <div class="col-md-6">
            <div style="padding-top: 90px" class="animated fadeInLeft">
             <br>  
          <h2 style="color: #000; text-transform: capitalize;"> connect Wallet holders globally</h2>
          <br>

          <p style="color: #000">
            With millions of existing Skrill Wallet holders globally will look on your website and view the online customer journey to the point of purchase and connect with millions of existing Skrill wallet holders globally..


            <br>
            <br>
            Chargeback protection
Payments are indemnified. Grow and connect
With millions of existing Skrill Wallet holders globally. Quick and easy to enable, add Skrill 1-Tap to your checkout and benefit from fast, effective and frictionless payments.Improve conversion rates
Customers pay quickly with just an email address and password.Chargeback protection
Payments are indemnified
            <br>
            <br>
          </p>
        </div>


            
          </div>
          
        </div>
      </div>




    <!-- Left and right controls -->
    <a class="left carousel-control" style="    background: none; left: -50px" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" style="    background: none; right: -50px" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


  <style type="text/css">
    
    .item{
      min-height: 490px;
    background-size: contain !important;
    background-repeat: no-repeat !important;
    background-position: right !important;
}
  </style>


            
           </div>

           </div>

      

        </div>
      </div>


    </div>
  </div>

		<!-- Footer
		============================================= -->
	
		<?php //	include 'include/footer.php'; ?>

			
	</div><!-- #wrapper end -->

</body>
</html>