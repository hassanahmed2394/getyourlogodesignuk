<!doctype html>
<html lang="en">
<head>
<title>Logo Design Starts With $17.99 - Logo Design | Get Your Logo Design</title>
<meta name="keywords" content="Get Your Logo Design">
<meta name="description" content="Affordable logo design services that's made instantly and stays forever.">
<link rel='stylesheet' id='main-style-css'  href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css' type="text/css" />

<?php
$srcurl = "../includes/";
$basesurl = "../assets/";
?>



<?php
$style = $_SERVER['HTTP_HOST']; 
$style = $srcurl."style.php"; 
include($style); 

$urhere = "homepage";
?>






</head>
<body class="hompg">

<?php
$header = $_SERVER['HTTP_HOST']; 
$header = $srcurl."header.php"; 
include($header); 
?>

<div class="works-wrap">
	
<section class="subscribe-fold sec-padding-60">

<div class="container">
   <div class="col-md-12">
        <h2 class="myheading">Startup Website Package</h2>

        <p class="mytext">We guarantee that you’ll get a great design no matter what your budget is.</p>
      </div>


  <div class="row">
  	<div class="col-lg-4 col-md-4 col-sm-4">
  		<div class="subs-pac bronze ">
          <h3>Startup Website <br/>Package</h3>
          <h6><span class="old">$519.98</span> $259.99     <!-- <b>USD</b> --> <span><b class="monthss"></b>Suitable for potential super-startups and brand revamps for companies.</span></h6>
          
        <a href="<?php echo $path;?>order?pack=13" class="ordrrrr">Place Your Order</a>
        <div class="actions row">
                    <div class="col-md-5 col-xs-6">
                          <a href="javascript:;" onclick="setButtonURL();" target="_self" class="chatbtn"><i class="fa fa-wechat"></i> Live Chat</a>
                    </div>
                    <div class="col-md-7 col-xs-6">
                        <a href="tel:<?php echo $number_val; ?>" class="numberbtn"><i class="fa fa-phone-square"></i><?php echo $number_text; ?></a>
                    </div>
                    
                  </div>
        </div>
  	</div>
  	<div class="col-lg-8 col-md-8 col-sm-8">
  		<div class="sub-list ">
          <div class="table-packages bronze">
            <div class="head">
              <h5>Startup Website Package</h5>
              <!-- <h6><b>$</b><span>1,600.00</span> only</h6> -->
            </div>
            <div class="body">
              <ul class="subscription-list">
                         <li><h6>4 Pages</h6> <span class="tick"></span></li>
        <li><h6>4 Stock Images</h6> <span class="tick"></span></li>
        <li><h6>Image/Video Slider</h6> <span class="tick"></span></li>
        <li><h6>Enquiry Form</h6> <span class="tick"></span></li>
        <li><h6>Photo Gallery</h6> <span class="tick"></span></li>
        <li><h6>Social Networks Integration</h6> <span class="tick"></span></li>
        <li class="heading">FREE</li>
        <li><h6>1 Logo Concept</h6> <span class="tick"></span></li>
        <li><h6>Domain &amp; Hosting</h6> <span class="tick"></span></li>
        <li><h6>3 Email Addresses</h6> <span class="tick"></span></li>
         <li class="heading">FEATURES</li>
        <li><h6>Shopping Cart Compatible</h6> <span class="tick"></span></li>
        <li><h6>Site Backup &amp; Security</h6> <span class="tick"></span></li>
        <li><h6>Website Training</h6> <span class="tick"></span></li>
        <li><h6>Money Back Guarantee</h6> <span class="tick"></span></li>
        <li><h6>After Sales Support</h6> <span class="tick"></span></li>

                
              </ul>
            </div>
          </div>
        </div>
  	</div>
  </div>	
</div>
</section>
</div>





<?php
$footer = $_SERVER['HTTP_HOST']; 
$footer = $srcurl."footer.php"; 
include($footer); 
?>



</body>
</html>