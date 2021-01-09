<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>

  <?php include 'include/head.php'; ?>

  <title>Swift Digital Banking - <?php echo $sitename ?></title>

  <?php if(empty($_GET['page_name'])) $link ='home';  ?>


</head>

<body class="body-wrapper">

  <div class="main_wrapper">

    <?php include 'sdb/header.php'; ?>





    <div id="wallet"  class="parallex" style="background: url('images/sdb/bk.jpg');background-size: cover;padding: 30px;background-position: center; border-bottom: 2px solid #000">
      <div class="container">
      <div class="row" style="">


        <div class="col-md-6" style="text-align: left;">
        </div>
        <div class="col-md-6" style="text-align: center; background: #ffffff97">
          <br>  
          <h2 style="color: #000">Swift Digital Banking</h2>
          <br>

          <p style="color: #000">
            Swift E-Wallet offer financial service providers the ability to meet the transaction needs and demands of the modern-day consumer. It is a flexible and scalable solution that can be seamlessly integrated into our bank’s core banking system. Our solution is easy to deploy; it can be deployed in the cloud and on-premise. It is a robust, secure and well-integrated mobile payment solution that helps to achieve financial inclusion, improved payments, and enhanced service delivery.

            <br>
            <br>
            P2P Fund Transfer<br>
It allows for an easy, quick and convenient way to perform a peer-to-peer transfer. Your customers can transfer money to another wallet customers.
            <br>

          <br>
          <br>
            <br>

          </p>

        </div>

      </div>
    </div>


    </div>


    <?php include 'sdb/accounts.php'; ?>



   



    <?php include 'sdb/bonds.php'; ?>



   



   



     <div id="contactus">

        <?php include 'include/footer.php'; ?>
      </div>
</div>
</body>

</html>

