<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>

  <?php include 'include/head.php';
  

  function truncateString($str, $chars, $to_space, $replacement="...") {
   if($chars > strlen($str)) return $str;

   $str = substr($str, 0, $chars);
   $space_pos = strrpos($str, " ");
   if($to_space && $space_pos >= 0) 
     $str = substr($str, 0, strrpos($str, " "));

   return($str . $replacement);
 }

 ?>

 <title>Products Categories </title>


 <?php if(!empty( $_GET['page_name'])) $link = $_GET['page_name'] ?>
 <?php if(!empty( $_GET['product_name'])) $page = $_GET['product_name'] ?>
 <?php if(empty( $_GET['page_name'])) $link = Null ?>
 <?php if(empty( $_GET['product_name'])) $page = Null ?>

</head>

<body class="body-wrapper">


  <div class="main_wrapper">
    <?php include 'include/header.php'; ?>

    <?php if(!empty( $_GET['product_name'])){ ?>

      <div class="container">


        <div class="latest-products text-center">
         <?php

         $rows =mysqli_query($con,"SELECT * FROM productcat where slug='$page'  ORDER BY ordr" ) or die(mysqli_error($con));
         while($row=mysqli_fetch_array($rows)){

          $pname = $row['name'];
        }


        ?>
        <h2 style="text-transform: capitalize;"><?php echo $pname ?> Products</h2>

        <div class="clearfix">&nbsp;</div>



        <div class="row " style="min-height: 300px">


          <?php

          $rows =mysqli_query($con,"SELECT * FROM productsubcat where pslug='$page'  ORDER BY ordr" ) or die(mysqli_error($con));
          $n=0;

          while($row=mysqli_fetch_array($rows)){

            $name = $row['name'];
            $slug = $row['slug'];
            $desp = $row['desp'];
            $id = $row['id'];
            $img = $row['img'];
            if(empty($desp)) $desp='...';

            ?>

            <div class="item col-md-4">
             <div class="item-inner">
               <br>



               <div class="img">
                <center>

                 <figure id="fig1">
                  <a href="sproducts-<?php echo $slug ?>">
                   <img  class="simg" src="images/products/<?php echo $img ?>" alt="" id="img1" />
                 </a>
               </figure>
             </center>

           </div>

           <h4 class="heading1"><?php echo $name ?></h4>
           <br>



         </div>
       </div>

       <?php $n++; $img='Null'; } ?>

     </div>
   </div>

 </div><!--//products-->

<?php } ?>


<br>
<br>










<?php include 'include/footer.php'; ?>

</div>
</body>

</html>

