<?php
 $host='localhost';
   $db_user='root';
   $db_password='';
   $db='samaj';
   $conn=mysqli_connect($host,$db_user,$db_password) or die(mysqli_error());
   mysqli_select_db($db) or die(mysqli_error);
   ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Foundation &mdash; Colorlib Website Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,700|Anton" rel="stylesheet">
    

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  
  <div class="site-wrap"  id="home-section">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
      
    <header class="site-navbar js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center position-relative">
          
            
            <div class="site-logo">
              <a href="index.html" class="text-black"><span class="text-primary">Foundation</a>
            </div>
            
              <nav class="site-navigation text-center ml-auto" role="navigation">

                <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                  <li><a href="Home.html">Home</a></li>
                  <li><a href="#about-section" class="nav-link">Table</a></li>
                  <li><a href="dataentry.html" class="nav-link">Data Entry</a></li>
                  <li><a href="#donate-section" class="nav-link">Process</a></li>
                  <li><a href="#blog-section" class="nav-link">Report</a></li>
                  <li><a href="#contact-section" class="nav-link">Contact</a></li>
                </ul>
              </nav>
              </span>
</a>
</div>
</div>
</div>
</header>

              <script type="text/javascript">
function startCalc(){
  interval = setInterval("calc()",1);
}
function calc(){
  one = document.form1.mob.value;
  two = document.form1.moo.value;
  c = (parseInt(one,10)/parseInt(two,10))*100 
  document.form1.total.value = (c);
}
</script>
<strong>Vividh Yojna Entry</strong><br>
<form name="form1">
  Record Number :<input type="text" name="record" id="record"><br>
  Financial Year :<select>
    <option value="2000">2000</option>
    <option value="2001">2001</option>
    <option value="2002">2002</option>
    <option value="2003">2003</option>
    <option value="2004">2004</option>
    <option value="2005">2005</option>
    <option value="2006">2006</option>
    <option value="2007">2007</option>
    <option value="2008">2008</option>
    <option value="2009">2009</option>
    <option value="2010">2010</option>
    <option value="2011">2011</option>
    <option value="2012">2012</option>
    <option value="2013">2013</option>
    <option value="2014">2014</option>
    <option value="2015">2015</option>
    <option value="2016">2016</option>
    <option value="2017">2017</option>
    <option value="2018">2018</option>
    <option value="2019">2019</option>
  </select><br>
  Name :<input type="text" name="fname" id="fname"><br>
  Standard :<input type="text" name="std" id="std"><br>
  Group :<input type="text" name="group" id="group"><br>
  Marks Obtained :<input type="text" name="mob" id="mob"><br>
  Marks Out Off :<input type="text" name="moo" id="moo"><br>
  Percentage :<input type="text" name="perc" id="perc"><br>
  Fees Demand :<input type="text" name="feesd" id="feesd"><br>
  Fees Payable :<input type="text" name="feesp" id="feesp"><br>
  Uniform Demand :<input type="text" name="unid" id="unid"><br>
  Uniform Payable :<input type="text" name="unip" id="unip"><br>
  Text Book Demand :<input type="text" name="tbd" id="tbd"><br>
  Text Book Payable :<input type="text" name="tbp" id="tbp"><br>
  Comp fees Demand :<input type="text" name="compd" id="compd"><br>
  Comp fees Payable :<input type="text" name="compp" id="compp"><br>
  </form><br>
  <STRONG>Bank Master</STRONG><br>
  <form>
    Bank Name :<input type="text" name="bname" id="bname"><br>
    Bank Branch :<input type="text" name="bbranch" id="bbranch"><br>
    IFSC Code :<input type="text" name="ifsc" id="ifsc"><br>
  </form><br>
  
</div>
</body>
</html>
