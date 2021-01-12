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
<title> Contact Us - <?php echo $sitename ?> </title>

	<?php $link="blank" ?>

</head>



<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<?php //	include 'include/header.php'; ?>


 <div class="img">
            <img src="images/cvr.png" style="width: 100%">

          </div>
		<!-- Content
		============================================= -->
		<section id="content"  style="background:url(images/cbg.jpg);background-position: bottom; background-size: cover; min-height: 420px">
<br>
<center>       <h2 class="text-center" style="font-size: 15px;  color: #02aeee;">  
       Please get in touch using the details below if you have any questions about our service or products. </h2></center>
			<div class="content-wrap">

				<div class="container clearfix">


<div class="row ">

<div class="col-md-3">
</div>
<div class="col-md-6">
  <br>

	<style type="text/css">
   .cform {
    text-align: left;
    background: none;
    border: 0px;
    border-bottom: 1px solid #989898;
    box-shadow: none;
}
  </style>


						<div class="tab-container">

							<div class="tab-content clearfix" id="tab-login">
								<div class="card nobottommargin" style="background: #fbfbfbb5;">
									<div class="card-body" style="padding: 40px;">
										<form action="" method="post">
								

        <form >
          <div class="form-group">
            <input class="form-control cform" name="name" placeholder="‏‏‏‏‏‏‏‏‏‏‏‏‏‏‏‏‏‏‏‏‏‏‏‏‏‏‏‏‏‏‏‏‏‏‏‏‏‏‏‏Enter Your Name" type="text">
          </div>
  
          <div class="form-group">
            <input class="form-control cform" name="emial" placeholder="‏‏‏‏‏‏‏‏‏‏‏‏‏‏‏‏‏‏‏‏‏‏‏‏‏‏‏‏‏‏‏‏‏‏‏‏‏‏‏‏Enter Your Email" type="text">
          </div>
  
          <div class="form-group">
            <textarea class="form-control cform" name="msg" placeholder="‏‏‏‏‏‏‏‏‏‏‏‏‏‏‏‏‏‏‏‏‏‏‏‏‏‏‏‏‏‏‏‏‏‏‏‏‏‏‏‏Message"></textarea>
          </div>
  
          <div class="form-group text-center">

            <input type="submit" name="login" class="form-control btn bgcolor" value="Submit">
          </div>
          
        </form>

        <div class="text-center">
        	<a href="#" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>
<a href="#" class="fa fa-google"></a>
<a href="#" class="fa fa-linkedin"></a>

</div>


									</div>


								</div>

							</div>




						</div>

					</div>


				</div>

			</div>

		</section><!-- #content end -->
<style>
.fa {
    padding: 8px 10px;
    font-size: 30px;
    width: 50px;
    text-align: center;
    text-decoration: none;
    margin: 5px 2px;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-google {
  background: #dd4b39;
  color: white;
}

.fa-linkedin {
  background: #007bb5;
  color: white;
}

.fa-youtube {
  background: #bb0000;
  color: white;
}

.fa-instagram {
  background: #125688;
  color: white;
}

.fa-pinterest {
  background: #cb2027;
  color: white;
}

.fa-snapchat-ghost {
  background: #fffc00;
  color: white;
  text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
}

.fa-skype {
  background: #00aff0;
  color: white;
}

.fa-android {
  background: #a4c639;
  color: white;
}

.fa-dribbble {
  background: #ea4c89;
  color: white;
}

.fa-vimeo {
  background: #45bbff;
  color: white;
}

.fa-tumblr {
  background: #2c4762;
  color: white;
}

.fa-vine {
  background: #00b489;
  color: white;
}

.fa-foursquare {
  background: #45bbff;
  color: white;
}

.fa-stumbleupon {
  background: #eb4924;
  color: white;
}

.fa-flickr {
  background: #f40083;
  color: white;
}

.fa-yahoo {
  background: #430297;
  color: white;
}

.fa-soundcloud {
  background: #ff5500;
  color: white;
}

.fa-reddit {
  background: #ff5700;
  color: white;
}

.fa-rss {
  background: #ff6600;
  color: white;
}
</style>


		<!-- Footer
		============================================= -->
	
		<?php //	include 'include/footer.php'; ?>

			
	</div><!-- #wrapper end -->

</body>
</html>