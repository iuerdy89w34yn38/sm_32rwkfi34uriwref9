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
<div class="pbg parallex" style="background: url(https://i2.wp.com/files.123freevectors.com/wp-content/original/11021-abstract-blue-white-striped-background.jpg)">
 
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

