<!doctype html>
<html lang="en">
<head>
<title>Logo Design Starts With £30.00 - Logo Design | Get Your Logo Design</title>
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
        <h2 class="myheading">Press Release Package</h2>

        <!-- <p class="mytext">Subscription Fee 4 Months $2599 - 30% OFF 5 Keywords</p> -->
      </div>


  <div class="row">
  	<div class="col-lg-4 col-md-4 col-sm-4">
  		<div class="subs-pac bronze ">
          <h3>Press Release <br/>Package</h3>
          <h6><span class="old">£60.00</span> £30.00  <!-- <b>USD</b> --> <span><b class="monthss"></b>Suitable for mid-level startups and organizations.</span></h6>
          
        <a href="<?php echo $path;?>order?pack=29" class="ordrrrr">Place Your Order</a>
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
              <h5>Press Release Package</h5>
              <!-- <h6><b>$</b><span>1,600.00</span> only</h6> -->
            </div>
            <div class="body">
              <ul class="subscription-list">
                  <li><h6>$30/Page
                  <span class="tick"></span></h6></li>
                  <li><h6>275 Words per Page
                  <span class="tick"></span></h6></li>
                  <li><h6>Max 2 Keywords
                  <span class="tick"></span></h6></li>
                  <li><h6>100% Unique Content
                  <span class="tick"></span></h6></li>
                  <li><h6>Unlimited Revision
                  <span class="tick"></span></h6></li>
                  <li><h6>SEO Friendly Content
                  <span class="tick"></span></h6></li>
                  <li><h6>Delivery 2 Days
                  <span class="tick"></span></h6></li>
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