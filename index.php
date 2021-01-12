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
    <div class="carousel-inner" style="min-height: 310px">




      <div class="item active">

        <h3 style="text-align:center">&nbsp;</h3>

        <h1 style="text-align:center">
          <img src="images/<?php echo $sitelogo; ?>" alt="" style="    background: transparent;width: 300px" >
        </h1>

        <p style="text-align:center"><span style="color:#000000"><span style="font-size:16px">Provide financial and institutional services to strengthen and scale-up provision of sustainable and responsible access to finance to individuals, micro-entrepreneurs and micro-enterprises in Pakistan to enhance employment and income opportunity.</span></span></p>


        <p style="text-align:center"><span style="color:#000000"><span style="font-size:16px">&nbsp;Ensuring high standards&nbsp;for economically poor and underserved citizens and improve the lives of the poor.</span></span></p>

        <p style="text-align:center">&nbsp;</p>


      </div>


      <div class="item text-center">
        <h2 style="color: #000">Products</h2>
        <center>
          <table class="htable" style="width: 100%;">
            <tr>
              <td> 
                <br>
                   <center>
                    <a target="_blank" href="digital-banking">
                      <div class="slidei"><img src="images/products/logosdb.png"></div>

                      <br>
                      <p>Simplified banking experience</p>
                      <br>
                      <br>
                    </a>

                   </center>  

              </td>
              <td> 
                <center>

      <br>
                    <a target="_blank" href="investment-group">
                        <div class="slidei"><img src="images/products/logosig.png"></div>
      <br>
                      <p>comprehensive range of <br> investments</p>
                      <br>  
                      </a>


                </center>
              </td>
              <td> 
                <center>
      <br>
                      <a target="_blank" href="assets-management">
                        <div class="slidei"><img src="images/products/logosam.png"></div>
                              <br>
                      <p>leading asset management platform  </p>
                      <br>
                      <br>
                    </a>

                </center>
              </td>
            </tr>
          </table>
      <br>
      <br>

        </center>

    </div>

    
      <div class="item ">

          <table class="pt">
            <tr>
              <td>
                <div  class="ph">
                                <span>Standard</span>
                                  </div>
                                  <br>


                                <span class="sprice">
                                    <span class="">$1500</span>
                                    </span>
                                    <br>
<br>

                          <ul class="sdata">
                                <li><span></span> Swift Digital Banking </li>
                              </ul>

<br>
                                        <div class="generic_price_btn clearfix">
                          <a class="btn btns" href="login">Sign up</a>
                        </div>
              </td>


              <td>
                <div  class="ph">
                                <span>Executive</span>
                                  </div>
                                  <br>


                                <span class="sprice">
                                    <span class="">$3500</span>
                                    </span>
                                    <br>
<br>

                          <ul class="sdata">
                                <li>Swift Digital Banking </li>
                                <li>Swift Investments Group</li>
                                <li>Swift Asset Management </li>
                              </ul>

<br>
                                        <div class="generic_price_btn clearfix">
                          <a class="btn btns" href="login">Sign up</a>
                        </div>
              </td>


              <td>
                <div  class="ph">
                                <span>Premium</span>
                                  </div>
                                  <br>


                                <span class="sprice">
                                    <span class="">$2500</span>
                                    </span>
                                    <br>
<br>

                          <ul class="sdata">
                                <li>Swift Digital Banking </li>
                                <li>Swift Investments Group</li>
                              </ul>

<br>
                                        <div class="generic_price_btn clearfix">
                          <a class="btn btns" href="login">Sign up</a>
                        </div>
              </td>

            </tr>
          </table>

               


     
      </div>


      <div class="item">

         <div class="row">
        <div class="col-md-12" style="text-align: center;">
          <center>
             <h2 style="text-align: ;color: #000"><img src="images/d.png" width="50px" style="width: 50px"> D-Trade</h2>
          </center>
         

          <p style="color: #000">
            D-Trade Plaform  provide a complete picture of live currency, stocks and commodities price movements and underpin successful technical analysis. Identify patterns and trends and respond to price action more effectively by typing in your chosen asset and applying moving averages, Bollinger Bands and other technical indicators to enhance your trading.
            <br>Identify patterns and trends and respond to price action more effectively by typing in your chosen asset and applying moving averages, Bollinger Bands and other technical indicators to enhance your trading.
            <br>
           


            <br>

          </p>

        </div>
      </div>

</div>


      <div class="item">

  <div class="row">

        <div class="col-md-12" style="text-align: center;">
          <h2 style="color: #02aeee ">Swift E-Wallet</h2>
          <br>

          <p style="color: #000">
            Swift E-Wallet offer financial service providers the ability to meet the transaction needs and demands of the modern-day consumer. It is a flexible and scalable solution that can be seamlessly integrated into our bank’s core. 

            P2P Fund Transfer<br>
It allows for an easy, quick and convenient way to perform a peer-to-peer transfer. Your customers can transfer money to another wallet customers.
It allows for an easy, quick and convenient way to perform a peer-to-peer transfer. Your customers can transfer money to another wallet customers.
            <br>

            <br>

          </p>

        </div>


      </div>


    </div>

      <div class="item text-center">

        <br>  
          <h2 style="color: #000">Latest Financial News & Investments Articles</h2>
          <br>

          <p style="color: #000">
            Insightful news and analysis that helps investors make crucial decisions. Providing headlines on investment strategies, investing ideas and market trends.


            <br>
            <br>
            Expert Analysis, Investment Tools, Stock Screeners, and Financial Strategy Information. Extensive coverage and expert comment on important topics in the financial advisory industry.
            Trust and purchased with the hope that it will generate income or appreciate in value at some point.
            <br>
            <br>


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
  </div>

<style type="text/css">


  .htable tr td{
    text-align: center;
    color: #000;
    width: 120px;
 text-transform: capitalize;
  }

.pt{
  width: 100%
}
.ph {
    background: #02aeee;
    padding: 20px;
    font-size: 25px;
    color: #fff;
    border: 1px solid white;
}
.sprice{
    font-size: 30px;
    font-weight: 400;
    color: #000;

}

.sdata{
  color: #000;
  font-size: 18px;
  font-weight: 300;
}

.btns {
    background: #000000;
    padding: 10px;
    width: 65%;
    font-size: 18px;
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




    <?php include 'include/dtrade.php'; ?>



   



    <?php include 'include/wallet.php'; ?>




    <?php include 'include/news.php'; ?>



   



  
    <div id="contactus">

    <?php include 'include/footer.php'; ?>
</div>
  </div>
</body>

</html>

