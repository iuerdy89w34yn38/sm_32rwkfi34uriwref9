<?php include 'include/connect.php'; ?>
<?php 
session_start();
if(isset($_SESSION['actid'])){
 $actid= $_SESSION['actid'];  // Initializing Session with value of PHP Variable 
  $rows =mysqli_query($con,"SELECT * FROM users where id='$actid'" ) or die(mysqli_error($con));
  while($row=mysqli_fetch_array($rows)){
    $actname = $row['name'];       
    $actemail = $row['email'];       
    $actpic = $row['img'];       

  }
}
?>

<?php
$rows =mysqli_query($con,"SELECT * FROM contact " ) or die(mysqli_error($con));
while($row=mysqli_fetch_array($rows)){
  $sitename = $row['sitename'];  
  $sitelogo = $row['logo'];  
  $sitephone = $row['phone'];  
  $sitemail = $row['email'];  
  $siteaddress = $row['address'];  
  $gmaps = $row['gmaps'];  
  $fpost = $row['fpost'];  
  $facebook = $row['facebook'];  
  $twitter = $row['twitter'];  
  $insta = $row['insta'];  
  $youtube = $row['youtube'];  
 }
?>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=actid-width, initial-scale=1">
<meta property="og:title" content="<?php echo $sitename ?>" />
<meta property="og:description" content="Provide financial and institutional services to strengthen and scale-up." />
<meta property="og:image" content="https://demo.wilcode.com/sm/images/logo.png" />


<!-- PLUGINS CSS STYLE -->
<link rel="icon" type="image/png" href="images/logo.png">
<link href="plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="plugins/selectbox/select_option1.css">
<link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="plugins/flexslider/flexslider.css" type="text/css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/zoomslider.css" />
<script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>
<link rel="stylesheet" href="plugins/calender/fullcalendar.min.css">
<link rel="stylesheet" href="plugins/animate.css">
<link rel="stylesheet" href="plugins/pop-up/magnific-popup.css">
<link rel="stylesheet" type="text/css" href="plugins/rs-plugin/css/settings.css" media="screen">
<link rel="stylesheet" type="text/css" href="plugins/owl-carousel/owl.carousel.css" media="screen">


<!-- CUSTOM CSS -->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/theme-1.css">
<link rel="stylesheet" href="css/default.css" id="option_color">
<link rel="stylesheet" href="css/custom.css">


<!-- JQUERY SCRIPTS -->
<script src="plugins/jquery/jquery-1.11.1.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="plugins/flexslider/jquery.flexslider.js"></script>
<script src="plugins/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script src="plugins/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="js/jquery.zoomslider.js"></script>
<script src="plugins/selectbox/jquery.selectbox-0.1.3.min.js"></script>
<script src="plugins/pop-up/jquery.magnific-popup.js"></script>
<script src="plugins/animation/waypoints.min.js"></script>
<script src="plugins/count-up/jquery.counterup.js"></script>
<script src="plugins/animation/wow.min.js"></script>
<script src="plugins/animation/moment.min.js"></script>
<script src="plugins/calender/fullcalendar.min.js"></script>
<script src="plugins/owl-carousel/owl.carousel.js"></script>
<script src="plugins/timer/jquery.syotimer.js"></script>
<script src="plugins/smoothscroll/SmoothScroll.js"></script>
<script src="js/custom.js"></script>
<!-- <script src="js/fa.min.js"></script> -->
<script type="text/javascript" src="js/stars.js"></script>
<!-- psmw CSS -->
<script>var smwPathToAssets = '/sm';</script>
<link rel="stylesheet" type="text/css" href="psmw/css/style.css" />
<script src="psmw/js/app.min.js"></script>




