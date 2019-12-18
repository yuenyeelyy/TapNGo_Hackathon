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
   <style>
      .container {
      color: #fff;
      text-align: center;
   }
   .container li {
      display: inline-block;
      font-size: 1.5em;
      list-style-type: none;
      padding: 1em;
      text-transform: uppercase;
   }
   .container li span {
      display: block;
      font-size: 4.5rem;
   }
   </style>
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
      <div class="page-content-product">
         <div class="main-product">
            <div class="container">
               <div class="row clearfix">
                  <div class="find-box">
                  <h1 id="head">Your clothes are ready after :</h1>
                  <ul>
                     <li><span id="days"></span>days</li> -
                     <li><span id="hours"></span>Hours</li>
                     <li><span id="minutes"></span>Minutes</li>
                     <li><span id="seconds"></span>Seconds</li>
                  </ul>
                </div>
            </div>
        </div>
    <div>
<div>
<script>
         const second = 1000,
      minute = second * 60,
      hour = minute * 60,
      day = hour * 24;
let countDown = new Date('Sep 30, 2020 00:00:00').getTime(),
    x = setInterval(function() {
      let now = new Date().getTime(),
          distance = countDown - now;
      document.getElementById('days').innerText = 0,
        document.getElementById('hours').innerText = 0,
        document.getElementById('minutes').innerText = Math.floor((distance % (hour)) / (minute)),
        document.getElementById('seconds').innerText = Math.floor((distance % (minute)) / second);
      
      //do something later when date is reached
      //if (distance < 0) {
      //  clearInterval(x);
      //  'IT'S MY BIRTHDAY!;
      //}
    }, second)
</script>
                
</html>