<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>

  <?php include 'include/head.php'; ?>

  <title>Swift Asset Management - <?php echo $sitename ?></title>

  <?php if(empty($_GET['page_name'])) $link ='home';  ?>


</head>

<body class="body-wrapper">

  <div class="main_wrapper">

    <?php include 'sam/header.php'; ?>





    <div id="wallet" style="background: url('images/sam/1.png');background-size: cover;padding: 30px;background-position: center;">
      <div class="container">
      <div class="row" style="">


        <div class="col-md-4" style="text-align: left;">
        </div>
        <div class="col-md-8" style="text-align: left; background:">
          <br>  
          <h2 style="color: #02aeee">Asset Management </h2>
          <br>

          <p style="color: #000">
            Our Asset Management solution is easy to deploy; it can be deployed in the cloud and on-premise. It is a robust, secure and well-integrated mobile payment solution that helps to achieve financial inclusion, improved payments, and enhanced service delivery.

            <br>
            <br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;P2P Fund Transfer<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
It allows for an easy, quick and convenient way to perform a peer-to-peer transfer. 
<br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Your customers can transfer money to another wallet customers.
            <br>

          <br>
          <br>
            <br>

          </p>

        </div>

      </div>
    </div>


    </div>




    <?php include 'sam/invest.php'; ?>




    <?php include 'include/dtrade.php'; ?>



   



    <?php include 'include/wallet.php'; ?>



   



     <div id="contactus">

        <?php include 'include/footer.php'; ?>
      </div>
</div>
</body>

</html>

