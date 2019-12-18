<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <title>Chamb - Responsive E-commerce HTML5 Template</title>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!--enable mobile device-->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!--fontawesome css-->
      <link rel="stylesheet" href="css/font-awesome.min.css">
      <!--bootstrap css-->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!--animate css-->
      <link rel="stylesheet" href="css/animate-wow.css">
      <!--main css-->
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/bootstrap-select.min.css">
      <link rel="stylesheet" href="css/slick.min.css">
      <link rel="stylesheet" href="css/select2.min.css">
      <!--responsive css-->
      <link rel="stylesheet" href="css/responsive.css">
   </head>
   <body>
   <header id="header" class="top-head"> 
         <!-- Static navbar -->
         <nav class="navbar navbar-default">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-md-4 col-sm-12 left-rs">
                     <div class="navbar-header">
                        <button type="button" id="top-menu" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false"> 
                        <span class="sr-only">Toggle navigation</span> 
                        <span class="icon-bar"></span> 
                        <span class="icon-bar"></span> 
                        <span class="icon-bar"></span> 
                        </button>
                        <a href="index.html" class="navbar-brand"><img src="images/logo.png" alt="" /></a>
                     </div>
                  </div>
                  <div class="col-md-8 col-sm-12">
                     <div class="right-nav">
                        <div class="login-sr">
                           <div class="login-signup">
                              <ul>
                                 <li><a href="#"><img class="h-i" src="images/id.png" style="height:30px" alt="" /> Chan Tai Man</a></li>
                                 <li><a href="#">Logout</a></li>
                              </ul>
                           </div>
                        </div>
                        <div class="help-r hidden-xs">
                           <div class="help-box">
                              <ul>
                                 <li><a href="#"><img class="h-i" src="images/shopping.png" style="height:30px" alt="" /> Wishing List </a> </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!--/.container-fluid --> 
         </nav>
      </header>
      <div class="terms-conditions product-page">
         <div class="terms-title">
            <div class="container">
               <div class="row">
                  <ol class="breadcrumb">
                     <li class="active"><a href="#">Tap and Go </a></li>
                     <li class="active">Hall life</li>
                     <li class="active">Selection</li>
                     <li><a href="#">Air Conditioner</a></li>
                  </ol>
               </div>
            </div>
         </div>
      </div>
      <div class="product-page-main">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="prod-page-title">
                     <h2>Air Conditioner Payment</h2>
                     <p>Welcome <span>XU Xiaochuan</span></p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-2 col-sm-4">
                  <div class="left-profile-box-m prod-page">
                     <div class="pro-img">
                        <img src="images/air_conditioner.jpg" height="150" width="150" alt="#" />
                     </div>
                     <div class="pof-text">
                        <h3>XU Xiaochuan</h3>
                        <div class="check-box"></div>
                     </div>
                  </div>
               </div>
               <div class="col-md-7 col-sm-8">
                  <div class="md-prod-page">
                     <div class="description-box">
                        <div class="dex-a">
                           <h4>Your Unpaid Air Conditioning Fees</h4>
                           <p>Date (&Duration)</p>
                           <p>
                              18/10/2019 20:06 - 19/10/2019 10:00 (13h 54 min)
                           </p>
                           <br>
                           <h4>Your Paid Air Conditioning Fees</h4>
                           <p>Date (&Duration)</p>
                           <p>
                              16/10/2019 20:06 - 18/10/2019 10:00 (27h 54 min)
                           </p>
                        </div>
                     </div>
                      
                  </div>
               </div>
               <div class="col-md-3 col-sm-12">
                  <div class="price-box-right">
                     <h4>Price</h4>
                     <h4><b>$4</b> <span>pr.hour</span> X <b>13.9h</b></h4>
                     <h3>$ 55.6 in total</h3>
                     <h5></h5>
                     <?php include '_accountSettings.php' ?>
                           <form action="testPaymentBackEnd.php" method="post">
                              <?php $i = 0; ?>
                              <?php foreach($accountList as $account){ ?>
                                 <input type="hidden" name="merchantName" value="<?php echo $i++; ?>"/>
                              <?php } ?>
                              <br>
                              <input type="hidden" name="totalPrice" value="55.6" /><br>
                              <input type="hidden" name="remark" value="remark" /><br>
                              <input type="hidden" name="paymentType" value="S" /><br>
                              <input type="hidden" name="lang" value="ZH"> 
                              <input type="hidden" name="currency" value="HKD" /><br>
                              <a><input type="submit" value="Pay by Tap &amp GO"/></a>
                           </form>
                     <h5></h5>
                     <h5></h5>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <footer>
         <div class="main-footer">
            <div class="container">
               <div class="row">
                  <div class="footer-top clearfix">
                     <div class="col-md-2 col-sm-6">
                     <h2>Bulid for future
                        </h2>
                     </div>
                     <div class="col-md-6 col-sm-6">
                        <div class="form-box">
                           <input type="text" placeholder="Problem?" />
                           <button>Continue</button>
                        </div>
                     </div>
                     <div class="col-md-4 col-sm-12">
                        <div class="help-box-f">
                           <h4>Question? Call us on 12 34 56 78 for help</h4>
                        </div>
                     </div>
                  </div>
                  <div class="footer-link-box clearfix">
                     <div class="col-md-6 col-sm-6">
                        <div class="left-f-box">
                           <div class="col-sm-4">
                              <h2>SELL ON chamb</h2>
                              <ul>
                                 <li><a href="#">Create account</a></li>
                                 <li><a href="howitworks.html">How it works suppliers</a></li>
                                 <li><a href="pricing.html">Pricing</a></li>
                                 <li><a href="#">FAQ for Suppliers</a></li>
                              </ul>
                           </div>
                           <div class="col-sm-4">
                              <h2>BUY ON chamb</h2>
                              <ul>
                                 <li><a href="#">Create account</a></li>
                                 <li><a href="#">How it works buyers</a></li>
                                 <li><a href="#">Categories</a></li>
                                 <li><a href="#">FAQ for buyers</a></li>
                              </ul>
                           </div>
                           <div class="col-sm-4">
                              <h2>COMPANY</h2>
                              <ul>
                                 <li><a href="about-us.html">About chamb</a></li>
                                 <li><a href="#">Contact us</a></li>
                                 <li><a href="#">Press</a></li>
                                 <li><a href="#">Careers</a></li>
                                 <li><a href="#">Terms of use</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6 col-sm-6">
                        <div class="right-f-box">
                           <h2>INDUSTRIES</h2>
                           <ul class="col-sm-4">
                              <li><a href="#">Textiles</a></li>
                              <li><a href="#">Furniture</a></li>
                              <li><a href="#">Leather</a></li>
                              <li><a href="#">Agriculture</a></li>
                              <li><a href="#">Food & drinks</a></li>
                           </ul>
                           <ul class="col-sm-4">
                              <li><a href="#">Office</a></li>
                              <li><a href="#">Decoratives</a></li>
                              <li><a href="#">Electronics</a></li>
                              <li><a href="#">Machines</a></li>
                              <li><a href="#">Building</a></li>
                           </ul>
                           <ul class="col-sm-4">
                              <li><a href="#">Cosmetics</a></li>
                              <li><a href="#">Health</a></li>
                              <li><a href="#">Jewelry</a></li>
                              <li><a href="#">See all here</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="copyright">
            <div class="container">
               <div class="row">
                  <div class="col-md-8">
                     <p><img width="90" src="images/logo.png" alt="#" style="margin-top: -5px;" /> All Rights Reserved. Company Name © 2018</p>
                  </div>
                  <div class="col-md-4">
                     <ul class="list-inline socials">
                        <li>
                           <a href="">
                           <i class="fa fa-facebook" aria-hidden="true"></i>
                           </a>
                        </li>
                        <li>
                           <a href="">
                           <i class="fa fa-twitter" aria-hidden="true"></i>
                           </a>
                        </li>
                        <li>
                           <a href="">
                           <i class="fa fa-instagram" aria-hidden="true"></i>
                           </a>
                        </li>
                        <li>
                           <a href="#">
                           <i class="fa fa-linkedin" aria-hidden="true"></i>
                           </a>
                        </li>
                     </ul>
                     <ul class="right-flag">
                        <li><a href="#"><img src="images/flag.png" alt="" /> <span>Change</span></a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!--main js--> 
      <script src="js/jquery-1.12.4.min.js"></script> 
      <!--bootstrap js--> 
      <script src="js/bootstrap.min.js"></script> 
      <script src="js/bootstrap-select.min.js"></script>
      <script src="js/slick.min.js"></script> 
      <script src="js/select2.full.min.js"></script> 
      <script src="js/wow.min.js"></script> 
      <!--custom js--> 
      <script src="js/custom.js"></script>
   </body>
</html>