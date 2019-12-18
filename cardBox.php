<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <title>Tap ∩ Go</title>
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
      
      <div class="furniture-box">
         <div class="terms-title">
            <div class="container">
               <div class="row">
                  <ol class="breadcrumb">
                     <li><a href="#">Homepage</a></li>
                     <li class="active">Membership</li>
                  </ol>
               </div>
            </div>
         </div>
      </div>
      <div class="furniture-box">
         <div class="container">
            <div class="row">
               <div class="furniture-main">
                  <h2>Membership</h2>
                     </div>
                  </div>
				  
              <?php include '_accountSettings.php' ?>
                           <form action="testPaymentBackEnd.php" method="post">
                           
                              <?php $i = 0; ?>
                              <?php foreach($accountList as $account){ ?>
                                 <input type="hidden" name="merchantName" value="<?php echo $i++; ?>"/>
                              <?php } ?>
                              <br>
                              <input type="hidden" name="totalPrice" value="0.01" /><br>
                              <input type="hidden" name="remark" value="remark" /><br>
                              <input type="hidden" name="paymentType" value="S" /><br>
                              <input type="hidden" name="lang" value="ZH"> 
                              <input type="hidden" name="currency" value="HKD" /><br>
                              <a href="#" onclick="this.parentNode.submit()" class="button">
                           </form>
                  <div class="col-md-6 col-sm-8">
                     <div class="furniture-middle">                     
                        <div class="big-box">
                           <div class="big-img-box">
                              <img src="stid.jfif" alt="" />
                           </div>
                           <div class="big-dit-b clearfix">
                              <div class="col-md-6">
                                 <div class="left-big">
                                    <h3>Polyu Student Card </h3>                                  
                                 </div>
                              </div>                            
                        </div>

                     </div>
                  </div>
               </div>
            </a>
            <form action="testPaymentBackEnd.php" method="post">
                           
                              <?php $i = 0; ?>
                              <?php foreach($accountList as $account){ ?>
                                 <input type="hidden" name="merchantName" value="<?php echo $i++; ?>"/>
                              <?php } ?>
                              <br>
                              <input type="hidden" name="totalPrice" value="0.01" /><br>
                              <input type="hidden" name="remark" value="remark" /><br>
                              <input type="hidden" name="paymentType" value="S" /><br>
                              <input type="hidden" name="lang" value="ZH"> 
                              <input type="hidden" name="currency" value="HKD" /><br>
                              <a href="#" onclick="this.parentNode.submit()" class="button">
                           </form>
			
			   <div class="col-md-6 col-sm-8">
                     <div class="furniture-middle">
                        
                       
                        <div class="big-box">
                           <div class="big-img-box">
                              <img src="stid.jfif" alt="" />
                           </div>
                           <div class="big-dit-b clearfix">
                              <div class="col-md-6">
                                 <div class="left-big">
                                    <h3>Polyu SU Card </h3>            
                                 </div>
                              </div>
                        </div>
                     </div>
                  </div>
               </div>
			   </a>
            </div>
        
      </div>


      
   </body>
</html>