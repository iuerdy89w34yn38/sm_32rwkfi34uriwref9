<div id="contact">

<br>
<br>
<br>


  <footer class="footer-v1">


  <div class="menuFooter clearfix" style="background: #02aeee">
    <div class="">
      <div class="row clearfix" style="margin-right: 0px;    margin-left: 0px;    padding: 10px;">
    <div class="col-sm-4">
          <p><img src="images/logow.png" alt="" class="fimg"/></p>
          <p><?php echo $fpost ;?></p>
        </div>
        <div class="col-sm-2 col-xs-12 borderLeft">
          <h5>Quick Links</h5>
          <ul class="menuLink">
          <?php

          $rows =mysqli_query($con,"SELECT name,slug,res FROM pages where foot=1  ORDER BY ordr" ) or die(mysqli_error($con));
                    
            while($row=mysqli_fetch_array($rows)){
              
              $slug = $row['slug']; 
              $name = $row['name']; 
              $res = $row['res']; 

              ?>
            <li <?php if($slug=='videos') echo ' style="display:none;" ' ; ?> ><a href="<?php echo $slug ?>"><?php echo $name ?></a></li>
                    <?php } ?>
          </ul>
          <br>
          <br>
        </div><!-- col-sm-3 col-xs-6 -->


        
        <div class="col-sm-3 col-xs-6 borderLeft">
          <div class="">

           <?php echo $gmaps ?>
          </div>
        </div><!-- col-sm-3 col-xs-6 -->

        <div class="col-sm-3 col-xs-6 borderLeft">
          <div class="footer-address">
            <div class="socialArea">
          </div>
           <p>
                            <strong><i class="fa fa-map-marker"></i> Address:</strong> <br>
                            <?php echo $siteaddress ?> 
              </p>
                        <p>
                          <strong><i class="fa fa-phone"></i> Call Us:</strong> <br> 
                            <?php echo $sitephone ?> <br>
                            <?php echo $sitephone ?> 
                           
                        </p>
                        
                        <p>
                          <strong><i class="fa fa-envelope"></i> Email:</strong> <br> 
                            <?php echo $sitemail ?> 
                            
                        </p>
            
          </div>
        </div><!-- col-sm-3 col-xs-6 -->

      </div><!-- row -->
    </div><!-- container -->
  </div><!-- menuFooter -->

  <div class="footer clearfix" style="background: #000; color: #fff " >
    <div class="container">
      <div class="row clearfix">
        <div class="col-sm-6 col-xs-12 ">
          <p>© 2020 <?php echo $sitename ?> </p>
        </div><!-- col-sm-6 col-xs-12 -->
        <div class="col-sm-6 col-xs-12 privacy_policy">
           <a href="#" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>
<a href="#" class="fa fa-google"></a>
<a href="#" class="fa fa-linkedin"></a>
<a href="#" class="fa fa-youtube"></a>
<a href="#" class="fa fa-instagram"></a>
<a href="#" class="fa fa-pinterest"></a>
<a href="#" class="fa fa-skype"></a>
<a href="#" class="fa fa-android"></a>
<a href="#" class="fa fa-yahoo"></a>
<a href="#" class="fa fa-rss"></a>
        </div><!-- col-sm-6 col-xs-12 -->
      </div><!-- row clearfix -->
    </div><!-- container -->
  </div><!-- footer -->
</footer>

<style type="text/css">
  .privacy_policy a {
    display: inline-block;
    font-size: 16px;
    border-right: none;
    padding-right: 10px;
    line-height: 25px;
    color: #fff;
}
</style>





<?php if(!empty($msg)){ ?>
  <?php include 'include/snackbar.php'; ?>
<?php } ?>

