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
								
											<h1 class="text-center">
       <h2 class="text-center" style="font-size: 15px;  color: #02aeee;">   WE ARE READY TO LEAD YOU INTO THE FUTURE </h2>
       <br>
        </h1>
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


									</div>


								</div>

							</div>




						</div>

					</div>


				</div>

			</div>

		</section><!-- #content end -->



		<!-- Footer
		============================================= -->
	
		<?php //	include 'include/footer.php'; ?>

			
	</div><!-- #wrapper end -->

</body>
</html>