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





    <div id="wallet" style="background: url('images/sdb/1.png');background-size: cover;padding: 30px;background-position: center;">
      <div class="container">
      <div class="row" style="">


        <div class="col-md-2" style="text-align: left;">
        </div>
        <div class="col-md-8" style="text-align: center; background: #ffffff69">
          <br>  
          <h2 style="color: #000">About Digital Banking</h2>
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



   



    <?php include 'include/dtrade.php'; ?>



   



    <?php include 'include/wallet.php'; ?>



   



     <div id="contactus">

        <?php include 'include/footer.php'; ?>
      </div>
</div>
</body>

</html>

