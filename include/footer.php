<div id="contact">
  <footer class="footer-v1">
  <div class="menuFooter clearfix" style="background: #000">
    <div class="">
      <div class="row clearfix" style="margin-right: 0px;    margin-left: 0px;    padding: 10px;">
    <div class="col-sm-4">
          <p><img src="images/logow.png" alt="" class="fimg"/></p>
          <p><?php echo $fpost ;?></p>
        </div>
        <div class="col-sm-2 col-xs-12 borderLeft">
          <h5>Quick Links</h5>
          <ul class="menuLink">
                             <li  ><a href="page-about">About Us</a></li>
                                <li  ><a href="blogs">Blogs</a></li>
                                <li  ><a href="page-privacy-policy">Privacy Policy</a></li>
                                <li  ><a href="page-terms-of-services">Terms of Services</a></li>
                                <li  ><a href="contactus">Contact Us</a></li>
                              </ul>
          </ul>
          <br>
          <br>
        </div><!-- col-sm-3 col-xs-6 -->


        
        <div class="col-sm-3 col-xs-6 borderLeft">
          <div class="">
          <h5>Products Links</h5>
          <ul class="menuLink">
                        <li><a href="digital-banking">Swift Digital Banking</a></li>
                        <li><a href="investment-group">Swift Investments Group</a></li>
                        <li><a href="assets-management">Swift Asset Management</a></li>
                              </ul>
          </ul>


                        </p>
                        


           <?php // echo $gmaps ?>
          </div>
        </div><!-- col-sm-3 col-xs-6 -->

        <div class="col-sm-3 col-xs-6 borderLeft">
          <div class="footer-address">
            <div class="socialArea">
          </div>



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
        <div class="col-sm-8 col-xs-12 ">
          <p>© 2020 <?php echo $sitename ?>  - Powered By: <a href="https://wilcode.com/" target="blank" style="color: deepskyblue">WilCode</a> </p>
        </div><!-- col-sm-6 col-xs-12 -->
        <div class="col-sm-4 col-xs-12 privacy_policy">
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

