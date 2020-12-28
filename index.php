<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>

  <?php include 'include/head.php'; ?>

  <title><?php echo $sitename ?></title>

  <?php if(empty($_GET['page_name'])) $link ='home';  ?>


</head>

<body class="body-wrapper">

  <div class="main_wrapper">

    <?php include 'include/header.php'; ?>

    <?php

    $rows =mysqli_query($con,"SELECT * FROM home" ) or die(mysqli_error($con));
    $n=0;

    while($row=mysqli_fetch_array($rows)){

      $post = $row['post']; 
      $img = $row['img']; 



    }
    ?>




      <div style="background: url('images/<?php echo $img ; ?>');background-size: cover;">
        <div id="about">
          <br><br><br><br>
          <br><br>

        </div>
        <div class="container">
          <div class="row">
            <div class="col-md-2" style=" ">
            </div>

            <div class="col-md-8 text-center " style=" ">

 
            <div class="homebg">
             <?php echo $post ?> 
           </div>

 
            <div class="bgtext">
             <?php echo $post ?> 
           </div>

           </div>

      

        </div>
      </div>
          <br><br><br><br><br><br>


    </div>

<style type="text/css">
  .homebg{
    filter: blur(5px);
    background: url('images/cfb89343574a8fe42304d6e1ef38939e1.png');
    background-size: 250%;
    background-position: center;
  }

  .bgtext h1{
    color: #fff;
  }
  .bgtext {
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
  color: white;
  font-weight: bold;
  border: 2px solid #f1f1f1;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 98%;
  padding: 20px;
  text-align: center;
}
.menuFooter {
  padding: 60px 20px;
}

.mcar{
  min-height: 450px;
  background: #2eaae1;
}

</style>

  <br><br>

  <br><br>
  <div class="container">

    <div id="services">
      <br><br>
      <br><br>
      <center><h1>Our Services</h1></center>
      <br><br>

    </div>
    <div class="banner" >
      <div id="myCarousel" class="carousel slide mcar">
        <!-- Indicators 
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
-->
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <?php

          $result =mysqli_query($con,"SELECT * FROM slider  ORDER BY ordr" ) or die(mysqli_error($con));
          $rowcount=mysqli_num_rows($result);
          $rows =mysqli_query($con,"SELECT * FROM slider  ORDER BY ordr" ) or die(mysqli_error($con));
          $n=0;

          while($row=mysqli_fetch_array($rows)){

            $name = $row['name']; 
            $img = $row['img']; 
            $ordr = $row['ordr']; 
            $desp = $row['desp']; 
            $url = $row['url']; 

            ?>
            <div class="item <?php if($n==0) echo "active"; ?>">
              <img onclick="location='<?php echo $url ?>'" src="images/slider/<?php echo $img ; ?>" alt="Los Angeles" style="width:100%; cursor: pointer;">
              <div class="carousel-caption">
                <h3 style="text-transform: uppercase;"><?php echo $name ?></h3>
                <p style="text-transform:capitalize;"><?php echo $desp ?></p>
              </div>

            </div>

            <?php $n++;
          } ?>

        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev" style="    background: none;">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next" style="    background: none;">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <style type="text/css">
        .carousel-caption {
    padding-bottom: 0px;
}

      </style>

    </div> <!--banner ends-->


    <br><br>

</div>


 

    <?php include 'include/pack.php'; ?>
    <br><br>
   



    <br><br>

    <?php include 'include/brands.php'; ?>
    <br><br>
   


    <div id="contactus">

    <?php include 'include/footer.php'; ?>
</div>
  </div>
</body>

</html>

