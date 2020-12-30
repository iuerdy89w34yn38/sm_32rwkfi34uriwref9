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
      <div class="item active">

 <?php echo $post ?> 

      </div>

      <div class="item text-center">
        <h2 style="color: #000">Products</h2>
        <center>
          <table class="htable" style="width: 100%;">
            <tr>
              <td> 
                <br>
                   <center>
                      <div class="slidei"><img src="images/products/logosdb.png"></div>
                      <br>
                      <span>Swift Digital Banking</span>
                      <p>Simplified banking experience</p>
                      <br>

                   </center>  

              </td>
              <td> 
                <center>

      <br>

                        <div class="slidei"><img src="images/products/logosig.png"></div>
      <br>
                      <span>Swift Investments Group</span>
                      <p>comprehensive range of investment. </p>
                      <br>

                </center>
              </td>
              <td> 
                <center>
      <br>

                        <div class="slidei"><img src="images/products/logosam.png"></div>
                              <br>
                      <span>Swift Assets Management </span>
                      <p>leading asset management platform  </p>
                      <br>

                </center>
              </td>
            </tr>
          </table>
      <br>
      <br>

        </center>

    </div>
    
      <div class="item">
 <?php echo $post ?>       </div>
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


            
           </div>

           </div>

      

        </div>
      </div>
          <br><br><br><br><br><br>


    </div>

<style type="text/css">


  .htable tr td{
    text-align: center;
    color: #000;
    width: 120px;
  }
  .htable tr td{
 text-transform: capitalize;
  }
  .slidei{
    width: 100px;

  }

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
  background-color: rgba(255,255,255, 0.7); /* Black w/opacity/see-through */
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
<div class="pbg parallex" style="">
 
    <div id="products">  <br><br>  </div>

        <br><br>

      

        <br><br>

    <?php include 'include/brands.php'; ?>
    <br><br>
   



      <br><br>
      <br><br>





 </div>

    <?php include 'include/pack.php'; ?>

   



  
    <div id="contactus">

    <?php include 'include/footer.php'; ?>
</div>
  </div>
</body>

</html>

