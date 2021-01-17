<?php 
session_start();
if(isset($_SESSION['actid'])){
header("location:profile.php");
}
error_reporting(false);
?>


<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

<?php include 'include/head.php'; ?>
<!-- Document Title
============================================= -->

<title> Login - <?php echo $sitename ?> </title>

<?php $link="blank" ?>

<link rel="stylesheet" type="text/css" href="css/paper-bootstrap-wizard.css">
<script src="js/jquery.bootstrap.wizard.js" type="text/javascript"></script>
<script src="js/paper-bootstrap-wizard.js" type="text/javascript"></script>
<script src="js/jquery.validate.min.js" type="text/javascript"></script>

</head>



<body class="stretched">

<!-- Document Wrapper
============================================= -->
<div id="wrapper" class="clearfix">

<!-- Header
============================================= -->
<?php //	include 'include/header.php'; ?>



<div class="img">
       <img src="images/cvr.png" style="width: 100%">

    </div>
<!-- Content
============================================= -->
<section id="content" style="background:url(images/cbg.jpg);background-position: bottom; background-size: cover; min-height: 430px">

<br>
<center> <p style="font-size: 15px;color: #02aeee;font-weight: 700">WE ARE READY TO LEAD YOU INTO THE FUTURE</p></center>
<div class="content-wrap">

	<div class="container clearfix">


<div class="row ">

<div class="col-md-6">

<style type="text/css">
input{
text-align: center;
} 
</style>


			<div class="tab-container">

				<div class="tab-content clearfix" id="tab-login">
					<div class="card nobottommargin">
						<div class="card-body" style="padding: 40px;">
							<form action="" method="post">
					
								<h1 class="text-center">
 <h2 class="text-center">   <a href="#">LOGIN</a> </h2>
 <br>
  </h1>
  <form >
    <div class="form-group">
      <input type="email" class="form-control" name="username" placeholder="‏‏‏‏‏‏‏‏‏‏‏‏‏‏‏‏‏‏‏‏‏‏‏‏‏‏‏‏‏‏‏‏‏‏‏‏‏‏‏‏M-ID" type="text">
    </div>
    <div class="form-group">
      <input class="form-control" name="password" placeholder="Password" type="password">
    </div>
    <div class="form-group">
      <input type="checkbox"> Remember Me
      <br>
      <a href="#">Forgot Password </a>
    </div>
    <div class="form-group text-center">

      <input type="submit" name="login" class="form-control btn bgcolor" value="Login">
    </div>
    
  </form>


  <?php
                 
     if (isset($_POST['login'])) {
                 if (empty($_POST['username']) || empty($_POST['password'])) {
                 echo "Email or Password is empty";
                 }
                 else
                 {
                 $username=$_POST['username'];
                 $password=$_POST['password'];
                 $username3 = stripslashes($username);
                 $username2 = str_replace("<", "", $username3);
                 $username1 = str_replace(">", "", $username2);
                 $username = str_replace("'", "", $username1);
                 $password3 = stripslashes($password);
                 $password2 = str_replace("<", "", $password3);
                 $password1 = str_replace(">", "", $password2);
                 $password = str_replace("'", "", $password1);



                 $query = mysqli_query($con,"SELECT * from users where password='$password' AND email='$username' ")or die(mysqli_error($con));
                 $rows = mysqli_num_rows($query);
                 if ($rows == 1) {



$rowsx =mysqli_query($con,"SELECT * from users where password='$password' AND email='$username' LIMIT 1 " ) or die(mysqli_error($con));
while($rowx=mysqli_fetch_array($rowsx)){
  $actid = $rowx['id'];
  $block = $rowx['block'];
  $blockres = $rowx['blockres'];
}

                if($block==0){
                 $_SESSION['actid']=$actid; // Initializing Session
                 header("location:profile.php"); // Redirecting To Other Page
               }else{
                echo "Account Blocked: ".$blockres;
               }
                 } else {
                  echo "Email or Password is Invalid";

                 }
                 }
                 }

                 ?>



						</div>


					</div>

				</div>




			</div>

		</div>
       <div class="col-md-6">
        <br><br>
        <br><br>
        <br>
   

      <!-- Button trigger modal -->
<button type="button" class="form-control btn bgcolor" data-toggle="modal" data-target="#exampleModal">
Register Now 
</button>
<style type="text/css">



.modal-content {
position: relative;
background-color: #ffffff00;
-webkit-background-clip: padding-box;
background-clip: padding-box;
border: 1px solid #999;
border: 0px;
border-radius: 6px;
outline: 0;
-webkit-box-shadow: 0 3px 9px rgba(0,0,0,.5);
box-shadow: none !important;
}


.close {
position: absolute;
top: 0%;
right: 0%;
opacity: 1;
color: #fff;
}
.modal-title{
color: #000;
}

.modal-dialog {
width: 85%;
max-width: 100%;
}


.wizard-container {
padding-top: 1px;
}

.wizard-card .wizard-header {
padding: 0px 15px 15px 15px;
}

.wizard-card .tab-content {
padding-top: 100px;
}

label {
display: inline-block;
max-width: 100%;
margin-bottom: 3px;
font-weight: 100;
color: #02aeee;
}

.wizard-card {
min-height: 410px;
box-shadow:0 2px 2px 3px rgb(2 174 238);
}


button[disabled], html input[disabled] {
    cursor: default;
    border: none;
    background: #ff000000;
}




</style>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document" style="margin-top: 1%;">
<div class="modal-content">

<div class="modal-body">
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
   
    <div class="row">
      <div class="col-md-12">

          <!--      Wizard container        -->
          <div class="wizard-container">

              <div class="card wizard-card" data-color="blue" id="wizardProfile">
        <form action="" method="">
              <!--        You can switch " data-color="orange" "  with one of the next bright colors: "blue", "green", "orange", "red", "azure"          -->

                    <div class="wizard-header text-center">
                        <h3 class="wizard-title">Create your profile</h3>
            <p class="category">This information will let us know more about you.</p>
                    </div>

          <div class="wizard-navigation">
            <div class="progress-with-circle">
                 <div class="progress-bar" role="progressbar" aria-valuenow="1" aria-valuemin="1" aria-valuemax="3" style="width: 21%;"></div>
            </div>
            <ul>
                            <li>
                <a href="#about" data-toggle="tab">
                  <div class="icon-circle">
                    <i class="ti-user fa fa-user"></i>
                  </div>
                  About
                </a>
              </li>
                            <li>
                <a href="#address" data-toggle="tab">
                  <div class="icon-circle">
                    <i class="ti-settings fa fa-map"></i>
                  </div>
                  Addresses
                </a>
              </li>
                            <li>
                <a href="#finance" data-toggle="tab">
                  <div class="icon-circle">
                    <i class="ti-map fa fa-cc"></i>
                  </div>
                  Finance 
                </a>
              </li>
                            <li>
                <a href="#dec" data-toggle="tab">
                  <div class="icon-circle">
                    <i class="ti-map fa fa-warning"></i>
                  </div>
                  Declaration 
                </a>
              </li>
                        </ul>
          </div>
                      <div class="tab-content">
                          <div class="tab-pane" id="about">
            <div class="row">
                <div class="col-md-1">
                  <div class="form-group">
                    <label>Title</label>
                   <select class="form-control" name="title" style="padding: 4px">
                     <option value="Mr" data-gender="male"
                      >Mr</option>
                              <option value="Mrs" data-gender="female"
                      >Mrs</option>
                              <option value="Ms" data-gender="female"
                      >Ms</option>
                              <option value="Miss" data-gender="female"
                      >Miss</option>
                              <option value="Dr" data-gender="unknown"
                      >Dr</option>
                   </select>
                 </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>First Name  </label>
                    <input name="firstname" type="text" class="form-control" placeholder="Andrew...">
                  </div>
                </div>
               <div class="col-md-4">
                  <div class="form-group">
                    <label>Last Name </label>
                    <input name="lastname" type="text" class="form-control" placeholder="Smith...">
                  </div>
                </div>
               <div class="col-md-3">
                  <div class="form-group">
                    <label>Date of Birth </label>
                    <input name="dob" type="date" class="form-control" required=""  required="">
                  </div>
                </div>
              </div>
              <div class="row">

                <div class="col-md-3">
                  <div class="form-group">
                    <label>Nationality </label>
                     <select name="nat"  required="" class="form-control" style="padding: 4px">
                     
<?php 
$stm = $pdo->query("SELECT * FROM countries");
$rows = $stm->fetchAll(PDO::FETCH_ASSOC);
foreach($rows as $row) {
?>
                     <option value="<?php echo $row['country_enNationality'] ?>" ><?php echo $row['country_enNationality'] ?></option>
<?php } ?>                      

                   </select>
                  </div>
                </div>

                <div class="col-md-2">
                  <div class="form-group">
                    <label>Document </label>
                     <select class="form-control"  required="" id="dd" onchange="upd()" style="padding: 4px">

                     <option value="ID Card" >ID Card</option>
                     <option value="Passport" >Passport</option>
                     <option value="Drivig Lisence" >Drivig Lisence</option>
              

                   </select>
                  </div>
                </div>

              <div class="col-md-4">
                  <div class="form-group">
                    <label id="dl"> ID Card </label><label>&nbsp;Number </label>
                    <input name="dnumber" type="number" class="form-control" required="">
                  </div>
              </div>


              <div class="col-md-3">
                  <div class="form-group">
                    <label id="dl2"> ID Card </label><label>&nbsp;Valid Date </label>
                    <input name="ddate" type="date" class="form-control" required="">
                  </div>
              </div>
            </div>
            <div class="row">

              <div class="col-md-3">
              </div>
              <div class="col-md-3">
                  <div class="form-group">
                    <label id="dl3"> ID Card </label><label>&nbsp;Image Front </label>
                    <input name="dimgf" type="file" class="form-control" required="">
                  </div>
              </div>


              <div class="col-md-3">
                  <div class="form-group">
                    <label id="dl4"> ID Card </label><label>&nbsp;Image Back </label>
                    <input name="dimgb" type="file" class="form-control" required="">
                  </div>
              </div>


              </div>
            <div class="row">
              <div class="col-md-3">
                  <div class="form-group">
                    <label id=""> Mobile Number  </label>
                    <input name="mobile" type="phone" class="form-control" required="">
                  </div>
              </div>

              <div class="col-md-3">
                  <div class="form-group">
                    <label id=""> Mobile Number 2 (optional) </label>
                    <input name="mobile2" type="phone" class="form-control" >
                  </div>
              </div>

              <div class="col-md-3">
                  <div class="form-group">
                    <label id=""> Email  </label>
                    <input name="email" type="email" class="form-control" required="">
                  </div>
              </div>


              <div class="col-md-3">
                  <div class="form-group">
                    <label id=""> Password  </label>
                    <input name="pass" type="password" class="form-control" required="">
                  </div>
              </div>


              </div>
                          </div>
                          <div class="tab-pane" id="address">
                            <div class="row">


              <div class="col-md-6">
                  <div class="form-group">
                    <label id=""> Address Line 1  </label>
                    <input name="address1" type="address" class="form-control" required="">
                  </div>
              </div>

              <div class="col-md-6">
                  <div class="form-group">
                    <label id=""> Address Line 2  </label>
                    <input name="address2" type="address" class="form-control" >
                  </div>
              </div>
            </div>
            <div class="row">


              <div class="col-md-4">
                  <div class="form-group">
                    <label id=""> City / Town </label>
                    <input name="city" type="city" class="form-control" required="">
                  </div>
              </div>
         
              <div class="col-md-4">
                  <div class="form-group">
                    <label id=""> Postal Code </label>
                    <input name="pcode" type="postal" class="form-control" required="">
                  </div>
              </div>

              <div class="col-md-4">
                  <div class="form-group">
                    <label id="">  Country </label>
                       <select class="form-control" name="country" style="padding: 4px">
                  
<?php 
$stm = $pdo->query("SELECT * FROM countries");
$rows = $stm->fetchAll(PDO::FETCH_ASSOC);
foreach($rows as $row) {
?>
                     <option value="<?php echo $row['country_enName'] ?>" ><?php echo $row['country_enName'] ?></option>
<?php } ?>                      

                   </select>

                  </div>
              </div>
            </div>
          <div class="row">



              <div class="col-md-2">
              </div>
              <div class="col-md-4">
                  <div class="form-group">
                    <label id="">  Country of Tax Residency</label>
                       <select class="form-control" name="tcountry" style="padding: 4px">
                  
<?php 
$stm = $pdo->query("SELECT * FROM countries");
$rows = $stm->fetchAll(PDO::FETCH_ASSOC);
foreach($rows as $row) {
?>
                     <option value="<?php echo $row['country_enName'] ?>" ><?php echo $row['country_enName'] ?></option>
<?php } ?>                      

                   </select>

                  </div>
              </div>
         
              <div class="col-md-4">
                  <div class="form-group">
                    <label id="">  Taxpayer Identification Number (TIN) </label>
                       
                    <input name="tin" type="number" class="form-control" required="">

                  </div>
              </div>
         


         
          </div>

      </div>
                          <div class="tab-pane" id="finance">
                              <div class="row">
                                  <div class="col-md-1">
                                  </div>
                                  <div class="col-md-3">
                                    <br>
                                    <label> Employment Status</label>
                   <select class="form-control" style="padding: 4px">
                          <option value="">Please select</option>
<option value="employed">Employed</option>
<option value="self-employed">Self-employed</option>
<option value="retired">Retired</option>
<option value="student">Student</option>
<option value="unemployed">Unemployed</option>

                   </select>

                                  </div>
                                  
                                  <div class="col-md-3">
                                    <br>
                                    <label> Annual income (GBP) </label>
                   <select class="form-control" style="padding: 4px">

<option  value="500,000+">500,000+</option>
<option  value="100,000 - 500,000">100,000 - 500,000</option>
<option  value="50,000 - 99,999">50,000 - 99,999</option>
<option  value="20,000 - 49,999">20,000 - 49,999</option>
<option  value="10,000 - 19,999">10,000 - 19,999</option>
<option  value="0 - 9,999"><10,000</option>



                   </select>

                                  </div>
                                  
     
                                  <div class="col-md-4">
                                    <br>
                                    <label>  Reason for applying for a CFD account</label>
                   <select class="form-control" style="padding: 4px">

                    <option value="">Please select</option>
                    <option value="SIT">Short-term trading opportunities</option>
                    <option value="HEP">Hedge other investments</option>
                    <option value="HRE">Trade in a high-risk product</option>
                    <option value="LSI">Long term safe investment</option>

                   </select>

                                  </div>
                                  

                              </div>

                              <div class="row">
                                  <div class="col-md-2">
                                  </div>
                                  <div class="col-md-4">
                                    <br><br>
                                    <label> Source of funds (Please select all that apply) </label>
                                    <br>
                                    <input type="checkbox" name="Job / Business"> Job / Business <br>
                                    <input type="checkbox" name="Savings / Investments"> Savings / Investments <br>
                                    <input type="checkbox" name="Family or partner support"> Family or Partner support <br>
                                    <input type="checkbox" name="Government Benefits and Personal Loan"> Government Benefits and Personal Loan  <br>
                                    <input type="checkbox" name="Pension"> Pension <br>
                                    <input type="checkbox" name="Part-time work"> Part-time work <br>
                                    <input onchange="handleChange(this);" type="checkbox"> Other
                                    <input id="oth" type="text"  name="other" disabled=""> <br>



                                  </div>
                                  

                              </div>
                          </div>
                          <div class="tab-pane" id="dec">
                              <div class="row">
                                  <div class="col-md-12">
                                      <h4 class="info-text"> Features and risks </h5>

                                        <p>
                                          You should only consider trading CFDs if the statements below are true: <br>

I understand that when trading leveraged products, I risk losing all of my invested capital. It is my responsibility to monitor my positions and to manage the risks of trading by utilising the risk management tools available to me, such as stop loss orders.
<br>
You understand that market liquidity and volatility may impact pricing, including our ability to generate prices or execute orders.
</p>
                                      <h4 class="info-text"> Declaration </h5>

                                        <p>
                                           I understand and accept that the following documents which, for my own benefit and protection, I should read: terms of business, order execution policy, risk warning notice, key information documents and cost disclosure.
</p>

                                    <input type="checkbox" name="agree" required=""> <strong>I agree to all the above declarations.</strong> <br>

                                  </div>
                                  

                              </div>
                          </div>
                      </div>
                      <div class="wizard-footer">
                          <div class="pull-right">
                              <input type='button' class='btn btn-next btn-fill bgcolor btn-wd' name='next' value='Next' />
                              <input type='submit' class='btn btn-finish btn-fill bgcolor btn-wd' name='finish' value='Finish' />
                          </div>

                          <div class="pull-left">
                              <input type='button' class='btn btn-previous btn-default btn-wd' name='previous' value='Previous' />
                          </div>
                          <div class="clearfix"></div>
                      </div>
                  </form>
              </div>
          </div> <!-- wizard container -->
      </div>
  </div><!-- end row -->



</div>
<!--
<div class="modal-footer">
  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
  <button type="button" class="btn btn-primary">Save changes</button>
</div>
-->
</div>
</div>
</div>



	</div>

</div>

</section><!-- #content end -->

<script type="text/javascript">

function check() {

pass = document.getElementById('pass').value;
repass = document.getElementById('repass').value;

if (pass!=repass) { 
document.getElementById('submit').disabled=true;
}else{
document.getElementById('submit').disabled=false;
}

}


</script>

<script type="text/javascript">

function upd() {

pass = document.getElementById('dd').value;

document.getElementById('dl').innerHTML=pass;
document.getElementById('dl2').innerHTML=pass;
document.getElementById('dl3').innerHTML=pass;
document.getElementById('dl4').innerHTML=pass;


}



function handleChange(checkbox) {
    if(checkbox.checked == true){
        document.getElementById("oth").removeAttribute("disabled");
    }else{
        document.getElementById("oth").setAttribute("disabled", "disabled");
   }
}


</script>


<!-- Footer
============================================= -->

<?php //	include 'include/footer.php'; ?>


</div><!-- #wrapper end -->

</body>
</html>