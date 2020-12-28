<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>

  <?php include 'include/head.php'; ?>
  <?php include 'include/carthead.php'; ?>

  <title>Profile  - <?php echo $sitename ?> </title>


  <?php if(!empty( $_GET['page_name'])) $link = $_GET['page_name'] ?>
  <?php if(!empty( $_GET['client_name'])) $page = $_GET['client_name'] ?>
  <?php if(empty( $_GET['page_name'])) $link = Null ?>
  <?php if(empty( $_GET['client_name'])) $page = Null ?>
  
</head>

<body class="body-wrapper">

  <div class="main_wrapper">
  <?php include 'include/header.php'; ?>
<br>



  <div class="container pbg" style="  overflow: auto;">

<?php

$rows =mysqli_query($con,"SELECT * FROM users WHERE id='$actid' Limit 1 " ) or die(mysqli_error($con));
          
  while($row=mysqli_fetch_array($rows)){
    
    $bfirstname = $row['bfname'];
    $blastname = $row['blname'];
    $bpostalcode = $row['bpostal'];
    $baddress1 = $row['baddress1'];
    $baddress2 = $row['baddress2'];
    $bcity = $row['bcity'];
    $bcountry = $row['bcountry'];
    $bphone = $row['bmobile'];
    $bemail = $row['bemail'];
    $sfirstname = $row['sfname'];
    $slastname = $row['slname'];
    $spostalcode = $row['spostal'];
    $saddress1 = $row['saddress1'];
    $saddress2 = $row['saddress2'];
    $scity = $row['scity'];
    $scountry = $row['scountry'];
    $sphone = $row['smobile'];
    $semail = $row['semail'];
    $datec = $row['datec'];

    
    
    }

?>

   
<div class="section row " style="padding: 36px 60px 1px 60px;">
<style type="text/css">
  td{
    padding: 10px 20px;
  }
</style>
<div class="col-md-4 text-center"> 
  <img src="images/users/<?php echo $actpic ?>" style="width: 200px;">
  <br>
  <br>
  <span>Member Since: <b><?php echo $datec ?></b> </span>
</div>
<div class="col-md-4">
  <br>
  <table class="" style="width: 100%;">
    <tbody>
      <tr>
        <td> Name:</td>
        <td><span style="font-size: 18px; font-weight: 600"><?php echo $actname ?></span>
      </tr>
      <tr>
        <td> Email:</td>
        <td><span style="font-size: 18px; font-weight: 600"><?php echo $actemail ?></span>
      </tr>
      <tr>
        <td> Phone:</td>
        <td><span style="font-size: 18px; font-weight: 600"><?php echo $bphone ?></span>
      </tr>
      <tr>
        <td> City:</td>
        <td><span style="font-size: 18px; font-weight: 600"><?php echo $bcity ?></span>
      </tr>
    </tbody>
  </table>
     


    <br>
    <br>
       
       <a class="btn bgcolor" href="editprofile.php" >Edit Profile </a>  
       <a class="btn bgcolor" href="logout.php" >Logout </a>  
        

</center>
</div>
</div>
    
   
<div class="section row " style="padding: 36px 60px 1px 60px;">

<h2>My Reviews: </h2>
  <div class="myrev">

    <?php 
$rows =mysqli_query($con,"SELECT * FROM reviews WHERE actid='$actid' " ) or die(mysqli_error($con));
          
  while($row=mysqli_fetch_array($rows)){
    
    $newrevid = $row['id']; 
           $newproid = $row['proid']; 
           $newrevactid = $row['actid']; 
           $newrating = $row['rating']; 
           $newreview = $row['review']; 
           $newdatec = $row['datec'];



    $rowsx =mysqli_query($con,"SELECT * FROM product WHERE id='$newproid'   ORDER BY ordr" ) or die(mysqli_error($con));
    $n=0;

    while($rowx=mysqli_fetch_array($rowsx)){

      $proname = $rowx['name'];
      $proslug = $rowx['slug'];
      $prodesp = $rowx['desp'];
      $proimg = $rowx['img1'];

    }
     ?>

     <div class="row">
      <div class="col-md-2">
      </div>
      <div class="col-md-3 text-center">
        <a href="dproducts-<?php echo $proslug ?>">
        <img src="images/products/<?php echo $proimg ?>" style="height: 100px;">
        <br>
        <span><?php echo $proname ?></span><br>
        <span><?php echo $newdatec ?></span>
      </a>
      </div>
       
      <div class="col-md-6">
        <a href="dproducts-<?php echo $slug ?>">

        Rating:    <div id="rating_div" class="w3-container">
        <div class="star<?php echo rand(1,1000) ?> ">
          <span><strong>Rate:</strong></span>
          <span class="fa fa-star-o" data-rating="1" ></span>
          <span class="fa fa-star-o" data-rating="2" ></span>
          <span class="fa fa-star-o" data-rating="3" ></span>
          <span class="fa fa-star-o" data-rating="4" ></span>
          <span class="fa fa-star-o" data-rating="5" ></span>
          <input type="hidden" name="rating" class="rating-value" value="<?php echo $newrating ?>">
        </div>
  </div>


  <br>
  Review:

            <p style="color: #000; font-weight: 100">
              <?php echo $newreview ?>
            </p>

      </div>
       </a>
     </div>
     <br>
     <hr>
     <br>
   <?php } ?>


    </div>

</div>
</div>
</div>
</body>


    <br><br>



  </div>

    <br><br>
  <div class="space"></div>

<?php include 'include/footer.php'; ?>


</body>

</html>

