<!DOCTYPE html>
<html lang="en" class="js-focus-visible">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Kiganda Ivan">
    <meta name="keywords" content="web application for barcodes using mobile first approach">
    <meta name="description" content="GS1 Uganda website">
	<title>GS1 Uganda</title>
	<link rel="icon" href="images/newlogo1.png" type="image/icon type">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="./assets/style.css">
	<link rel="stylesheet" type="text/css" href="./assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./assets/css/bootstrap.css">
      <link rel="stylesheet" type="text/css" href="./assets/css/fontawesome.min.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/fontawesome.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="assets/js-slider/js/jssor.slider-28.0.0.min.js" type="text/javascript"></script>
	<!-- video player -->
	<link href="https://vjs.zencdn.net/7.8.3/video-js.css" rel="stylesheet" />
  <script src="https://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>
  <!-- polygonal background -->
<!--   <script src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="assets/src/polygonizr.min.js"></script>
  <style>

    #site-landing {
      position: relative;
      height: 770px;
      width: 100%;
      background-color: rgb(30, 30, 30);
    }
  </style> -->
    <script type="text/javascript">
        window.jssor_1_slider_init = function() {

            var jssor_1_SlideoTransitions = [
              [{b:-1,d:1,ls:0.5},{b:0,d:1000,y:5,e:{y:6}}],
              [{b:-1,d:1,ls:0.5},{b:200,d:1000,y:25,e:{y:6}}],
              [{b:-1,d:1,ls:0.5},{b:400,d:1000,y:45,e:{y:6}}],
              [{b:-1,d:1,ls:0.5},{b:600,d:1000,y:65,e:{y:6}}],
              [{b:-1,d:1,ls:0.5},{b:800,d:1000,y:85,e:{y:6}}],
              [{b:-1,d:1,ls:0.5},{b:500,d:1000,y:195,e:{y:6}}],
              [{b:0,d:2000,y:30,e:{y:3}}],
              [{b:-1,d:1,rY:-15,tZ:100},{b:0,d:1500,y:30,o:1,e:{y:3}}],
              [{b:-1,d:1,rY:-15,tZ:-100},{b:0,d:1500,y:100,o:0.8,e:{y:3}}],
              [{b:500,d:1500,o:1}],
              [{b:0,d:1000,y:380,e:{y:6}}],
              [{b:300,d:1000,x:80,e:{x:6}}],
              [{b:300,d:1000,x:330,e:{x:6}}],
              [{b:-1,d:1,r:-110,sX:5,sY:5},{b:0,d:2000,o:1,r:-20,sX:1,sY:1,e:{o:6,r:6,sX:6,sY:6}}],
              [{b:0,d:600,x:150,o:0.5,e:{x:6}}],
              [{b:0,d:600,x:1140,o:0.6,e:{x:6}}],
              [{b:-1,d:1,sX:5,sY:5},{b:600,d:600,o:1,sX:1,sY:1,e:{sX:3,sY:3}}]
            ];

            var jssor_1_options = {
              $AutoPlay: 1,
              $LazyLoading: 1,
              $CaptionSliderOptions: {
                $Class: $JssorCaptionSlideo$,
                $Transitions: jssor_1_SlideoTransitions
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$,
                $SpacingX: 20,
                $SpacingY: 20
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 3000;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };
    </script>
    <link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300italic,regular,italic,700,700italic&subset=latin-ext,greek-ext,cyrillic-ext,greek,vietnamese,latin,cyrillic" rel="stylesheet" type="text/css" />
    <style>
        /* jssor slider loading skin spin css */
        .jssorl-009-spin img {
            animation-name: jssorl-009-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-009-spin {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }


        /*jssor slider bullet skin 132 css*/
        .jssorb132 {position:absolute;}
        .jssorb132 .i {position:absolute;cursor:pointer;}
        .jssorb132 .i .b {fill:#fff;fill-opacity:0.8;stroke:#000;stroke-width:1600;stroke-miterlimit:10;stroke-opacity:0.7;}
        .jssorb132 .i:hover .b {fill:#000;fill-opacity:.7;stroke:#fff;stroke-width:2000;stroke-opacity:0.8;}
        .jssorb132 .iav .b {fill:#000;stroke:#fff;stroke-width:2400;fill-opacity:0.8;stroke-opacity:1;}
        .jssorb132 .i.idn {opacity:0.3;}

        .jssora051 {display:block;position:absolute;cursor:pointer;}
        .jssora051 .a {fill:none;stroke:#fff;stroke-width:360;stroke-miterlimit:10;}
        .jssora051:hover {opacity:.8;}
        .jssora051.jssora051dn {opacity:.5;}
        .jssora051.jssora051ds {opacity:.3;pointer-events:none;}
    </style>
    <svg viewbox="0 0 0 0" width="0" height="0" style="display:block;position:relative;left:0px;top:0px;">
        <defs>
            <filter id="jssor_1_flt_1" x="-50%" y="-50%" width="200%" height="200%">
                <feGaussianBlur stddeviation="4"></feGaussianBlur>
            </filter>
            <radialGradient id="jssor_1_grd_2">
                <stop offset="0" stop-color="#fff"></stop>
                <stop offset="1" stop-color="#000"></stop>
            </radialGradient>
            <mask id="jssor_1_msk_3">
                <path fill="url(#jssor_1_grd_2)" d="M600,0L600,400L0,400L0,0Z" x="0" y="0" style="position:absolute;overflow:visible;"></path>
            </mask>
        </defs>
    </svg>
</head>
<body>

	<div class="header" style="padding-bottom: 10px;padding-top: 15px;">
		<div class="jumbotron" style="padding-bottom: 10px;padding-top: 15px;">
			<div class="row">
				<div class="col-sm-4" ><span id="logo" style="float: right;"><img src="images/newlogo1.png" alt="gs1uganda-logo" style="width: 150px;height: 120px;"></span></div>
				<div class="col-sm-4"><h4>Welcome to  GS1 Uganda</h4>
				<p>The Global Language of Business</p></div>
				<div class="col-sm-4">		
					<a href="views/signup.php"><h6 style="color: #0090bf">Register With Us</h6>	</a>		
					<form action="" method="POST" class="inline-form">
						<div class="input-group mb-3">
  							<div class="input-group-prepend">
  								<!-- <span class="fa fa-search"></span> -->
  							</div>

  							<input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="basic-addon1">
  							<span class="input-group-text" id="basic-addon1" style="color: #ff5721;background-color: white;"><i class="fa fa-angle-right"></i></span>
  					</form>
  							<button id="login"><i class="fa fa-user"></i> <a  href="views/login.php" style="text-decoration: none;color: white;"> Membership Login</a></button>
				</div>
						
			</div>
		</div>
	</div>
	<nav class="navbar sticky-top navbar-expand-lg navbar-light ">
		 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    		<span class="navbar-toggler-icon"></span>
  		</button>
  		<div class="collapse navbar-collapse" id="collapsibleNavbar">
		<ul class="nav nav-tabs">
  			<li class="nav-item">
    			<a class="nav-link active" href="index.php">Home</a>
 			</li>
  			<li class="nav-item dropdown">
    			<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="aboutus.php" role="button" aria-haspopup="true" aria-expanded="false">About us</a>
    			<div class="dropdown-menu">
      				<a class="dropdown-item" href="aboutus.php">What we do </a>
      				<a class="dropdown-item" href="aboutus.php">Start Here</a>
      				<a class="dropdown-item" href="aboutus.php">GS1 Uganda Council</a>
      				<a class="dropdown-item" href="aboutus.php">Legal</a>
      				<div class="dropdown-divider"></div>
      				<a class="dropdown-item" href="aboutus.php">License And Registration fees</a>
      				<a class="dropdown-item" href="aboutus.php">Why You should register</a>
    			</div>
  			</li>
   			<li class="nav-item dropdown">
    			<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="ourservices.php" role="button" aria-haspopup="true" aria-expanded="false">Our Services</a>
    			<div class="dropdown-menu">
      				<a class="dropdown-item" href="ourservices.php">Training Programs </a>
      				<a class="dropdown-item" href="ourservices.php">Get Barcodes</a>
      				<a class="dropdown-item" href="ourservices.php">Data Syncronization Platform</a>
      				<div class="dropdown-divider"></div>
      				<a class="dropdown-item" href="ourservices.php">Barcode Verification Service</a>
      				<a class="dropdown-item" href="ourservices.php">Barcode Costs</a>
      				<a class="dropdown-item" href="ourservices.php">Item Measurement Service</a>
    			</div>
  			</li>
   			<li class="nav-item dropdown">
    			<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="resources.php" role="button" aria-haspopup="true" aria-expanded="false">Resources</a>
    			<div class="dropdown-menu">
      				<a class="dropdown-item" href="resources.php">Standards & Guidelines</a>
      				<a class="dropdown-item" href="resources.php">Publications</a>
      				<a class="dropdown-item" href="resources.php">Terms & Conditions</a>
      				<div class="dropdown-divider"></div>
      				<a class="dropdown-item" href="resources.php">Glossary</a>
      				<a class="dropdown-item" href="resources.php">Technical Desk</a>
      				<a class="dropdown-item" href="resources.php">Customer Support</a>
    			</div>
  			</li>
   			<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="tools.php" role="button" aria-haspopup="true" aria-expanded="false">GS1 Tools</a>
          <div class="dropdown-menu">
              <a class="dropdown-item" href="tools.php">Check Digital Calculator</a>
              <a class="dropdown-item" href="tools.php">GTIN Management Decision Tool</a>
              <a class="dropdown-item" href="tools.php">GS1 Company Database (GEPIR)</a>
              <a class="dropdown-item" href="tools.php">EPC Item Readiness Program</a>
              <a class="dropdown-item" href="tools.php">EPC Encoder/Decoder</a>
              <a class="dropdown-item" href="tools.php">GS1 Global Attribute Explorer</a>
        </li>
        
  			<li class="nav-item">
    			<a class="nav-link" href="#"></a>
 			 </li>
  			<li class="nav-item">
    			<a class="nav-link disabled" href="contactform.php">Contact Us</a>
  			</li>
		</ul>
	</div>
	</nav>
	<div class="container-fluid">
		<div class="adaptative-full-width bg-light-gray row-2 content-module-padding"><div class="container"><div class="row"><div class="col-md-12"><div class="panel-pane pane-custom pane-1"  >
  
      
  
  <div class="pane-content">
    <div class="container" style="padding:0px;">
    <h1 class="page-header">Get unique, global GS1 barcodes and GTIN numbers for your products</h1>
    <p class="large" style="font-weight: 500;">GS1 barcodes and Global Trade Item Numbers (GTINs) are necessary for most online and traditional retailers including Amazon, eBay, Alibaba, Google, Carrefour, Tesco and Walmart</p>
    <div class="row" style="margin-top: 20px; text-align: center;">
        <p><a class="btn btn-primary btn-get-a-barcode btn-lg" href="/standards/get-barcodes/contact" style="padding: 27px 50px; font-size:28px;" >Get your barcodes now</a></p>
    </div>
    <div class="row text-center" style="margin-top: -50px;">
        <img class="hidden-xs hidden-sm standardsville_left" src="https://mocdn.gs1.org/sites/default/files/standardsville_left.png" alt="Buy barcodes for your products - GS1"></img>
        <img class="standardsville_right" src="https://mocdn.gs1.org/sites/default/files/standardsville_right.png" alt="Buy barcodes for your products - GS1"></img>
    </div>
</div>

<style>
    .standardsville_left { float:left; margin-top:7px; }
    .standardsville_right { float:right; }
    @media only screen and (max-width : 768px) {
      .standardsville_right { float:none; }
    }

</style>  </div>

  
  </div>
</div></div><div class="row"><div class="col-md-12"></div></div></div></div><div class="adaptative-full-width bg-white row-3 content-module-padding"><div class="container"><div class="row"><div class="col-md-12"><div class="panel-pane pane-custom pane-2"  >
  
      
  
  <div class="pane-content">
    <div class="container" style="padding:0px; margin-bottom: 50px;">
    <h2 class="page-header">GS1 is the only official provider of GS1 GTINs and EAN/UPC barcodes globally.</h2>
    <p class="large" style="font-weight: 500;">We’ve been helping companies to identify their products since the very first barcode was used back in 1973. When you get your barcodes from GS1, you also get peace of mind that your numbers are unique and authentic within the GS1 system.</p>
</div>  </div>

  
  </div>
<div class="panel-separator"></div><div class="panel-pane pane-block pane-bean-buy-barcodes-benefits-use-on pane-bean"  >
  
      
  
  <div class="pane-content">
    <div class="content-module content-module-container bean-infografic-left-image clearfix">
            <div class="content-module-bar     bg-blue"></div>
    <div class="col-md-2 bg-custom-gs1-cloud">
        <div class="field field-name-field-bean-image field-type-image field-label-hidden">
            
  <div class="field field-name-field-bean-infographic-icon field-type-image field-label-hidden">
    <div id="file-4152" class="file file-image file-image-jpeg">

        <h2 class="element-invisible"><a href="/file/4152">1.jpg</a></h2>
    
  
  <div class="content">
    <img typeof="foaf:Image" class="img-responsive" src="https://mocdn.gs1.org/sites/default/files/1.jpg" width="225" height="195" alt="" />  </div>

  
</div>
  </div>
        </div>
    </div>
    <div class="col-md-10">
        <h4>Use them on Amazon, eBay, Alibaba, Google and other marketplaces and retailers</h4>
        <div class="field field-name-field-bean-body field-type-text-long field-label-hidden">

            <p>Your unique GS1 GTINs will be valid for all major marketplaces and retailers.</p>
        </div>
    </div>
</div>  </div>

  
  </div>
<div class="panel-separator"></div><div class="panel-pane pane-block pane-bean-buy-barcodes-benefits-do-bus pane-bean"  >
  
      
  
  <div class="pane-content">
    <div class="content-module content-module-container bean-infografic-left-image clearfix">
            <div class="content-module-bar     bg-grass"></div>
    <div class="col-md-2 bg-custom-gs1-cloud">
        <div class="field field-name-field-bean-image field-type-image field-label-hidden">
            
  <div class="field field-name-field-bean-infographic-icon field-type-image field-label-hidden">
    <div id="file-4153" class="file file-image file-image-jpeg">

        <h2 class="element-invisible"><a href="/file/4153">2.jpg</a></h2>
    
  
  <div class="content">
    <img typeof="foaf:Image" class="img-responsive" src="https://mocdn.gs1.org/sites/default/files/2.jpg" width="225" height="195" alt="" />  </div>

  
</div>
  </div>
        </div>
    </div>
    <div class="col-md-10">
        <h4>Do business globally</h4>
        <div class="field field-name-field-bean-body field-type-text-long field-label-hidden">

            <p>As a global standards organisation, we ensure our GS1 barcodes work everywhere in the world. </p>
        </div>
    </div>
</div>  </div>

  
  </div>
<div class="panel-separator"></div><div class="panel-pane pane-block pane-bean-buy-barcodes-benefits-manage pane-bean"  >
  
      
  
  <div class="pane-content">
    <div class="content-module content-module-container bean-infografic-left-image clearfix">
            <div class="content-module-bar     bg-sky"></div>
    <div class="col-md-2 bg-custom-gs1-cloud">
        <div class="field field-name-field-bean-image field-type-image field-label-hidden">
            
  <div class="field field-name-field-bean-infographic-icon field-type-image field-label-hidden">
    <div id="file-4154" class="file file-image file-image-jpeg">

        <h2 class="element-invisible"><a href="/file/4154">3.jpg</a></h2>
    
  
  <div class="content">
    <img typeof="foaf:Image" class="img-responsive" src="https://mocdn.gs1.org/sites/default/files/3.jpg" width="225" height="195" alt="" />  </div>

  
</div>
  </div>
        </div>
    </div>
    <div class="col-md-10">
        <h4>Manage your GS1 numbers online</h4>
        <div class="field field-name-field-bean-body field-type-text-long field-label-hidden">

            <p>In many countries where GS1 is active, you can create and manage all of your GS1 barcode numbers (GTINs) online for all of your products. You can even create GS1 barcodes online directly.</p>
        </div>
    </div>
</div>  </div>

  
  </div>
<div class="panel-separator"></div><div class="panel-pane pane-block pane-bean-buy-barcodes-benefits-free-s pane-bean"  >
  
      
  
  <div class="pane-content">
    <div class="content-module content-module-container bean-infografic-left-image clearfix">
            <div class="content-module-bar     bg-orange"></div>
    <div class="col-md-2 bg-custom-gs1-cloud">
        <div class="field field-name-field-bean-image field-type-image field-label-hidden">
            
  <div class="field field-name-field-bean-infographic-icon field-type-image field-label-hidden">
    <div id="file-4155" class="file file-image file-image-jpeg">

        <h2 class="element-invisible"><a href="/file/4155">5.jpg</a></h2>
    
  
  <div class="content">
    <img typeof="foaf:Image" class="img-responsive" src="https://mocdn.gs1.org/sites/default/files/5.jpg" width="225" height="195" alt="" />  </div>

  
</div>
  </div>
        </div>
    </div>
    <div class="col-md-10">
        <h4>Free support by phone or online</h4>
        <div class="field field-name-field-bean-body field-type-text-long field-label-hidden">

            <p>Our support team is here to help you on your journey as your business grows.</p>
        </div>
    </div>
</div>  </div>

  
  </div>
<div class="panel-separator"></div><div class="panel-pane pane-custom pane-3"  >
  
      
  
  <div class="pane-content">
        <div class="row" style="margin: 20px auto; text-align: center;">
        <p><a class="btn btn-primary btn-lg btn-get-a-barcode" href="/standards/get-barcodes/contact" style="padding: 27px 50px; font-size:28px;" >Get your barcodes now</a></p>
    </div>  </div>

  
  </div>
</div></div><div class="row"><div class="col-md-12"></div></div></div></div><div class="adaptative-full-width bg-light-gray row-4 content-module-padding"><div class="container"><div class="row"><div class="col-md-8"><div class="panel-pane pane-block pane-bean-buy-barcodes-faqs pane-bean"  >
  
        <h2 class="pane-title">
       Frequently asked questions    </h2>
    
  
  <div class="pane-content">
      <div class="content-module-container matchheight">
                      <div class="content-module-bar bg-sky"></div>
        <div class="content-module content-module-padding">
                      
  <div class="field field-name-field-bean-body field-type-text-long field-label-hidden">
    <style type="text/css">.panel-title > a:before { float: right !important; font-family: FontAwesome; content:"\f068"; padding-right: 5px; } .panel-title > a.collapsed:before { float: right !important; content:"\f067"; }
</style>
<div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title"><a class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapseOne">How do I apply the barcodes to the products? </a></h4>
    </div>

    <div class="panel-collapse collapse" id="collapseOne">
      <div class="panel-body">
        <div class="small">There are several ways to apply a barcode to an item. You first need to convert the barcode numbers into a barcode image using software.<br>
          <br>
          Depending on your particular needs, you can then:<br>
          &nbsp;
          <ul style="list-style: initial; margin-left: initial;">
            <li style="padding: 0; border-bottom: none;">Integrate the barcode image into your packaging design and artwork</li>
            <li style="padding: 0; border-bottom: none;">Use pre-printed labels</li>
            <li style="padding: 0; border-bottom: none;">Print the barcodes on site directly onto the packaging</li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title"><a class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapseTwo">Are all barcodes the same?</a></h4>
    </div>

    <div class="panel-collapse collapse" id="collapseTwo">
      <div class="panel-body">
        <div class="small">All barcodes represent data in a machine readable format using patterns of different widths of dark bars and pale spaces, but the similarities end there. Some show the data only using the different widths of the bars, some have only two different widths of bars and spaces, some can only represent numbers, while others can show alphanumeric data.<br>
          <br>
          The barcodes used by the GS1 System have, in some cases, been specially designed for it, while others have been adapted to suit the requirements of the System’s users. All the barcodes used by the GS1 System have a standardized data content which means that they can be used by any company that has adopted the GS1 System. GS1 barcodes also have special features to ensure they are not confused with any other barcodes.<br>
          <br>
          The barcodes used by GS1 include EAN-13, UPC-A, EAN-8, UPC-E, GS1 DataBar family of symbols, GS1-128, ITF-14, GS1 DataMatrix, GS1 QR Code, and Composite Component.<br>
          <br>
          For more information please click here: <a href="http://www.gs1.org/barcodes" target="_blank">http://www.gs1.org/barcodes</a></div>
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title"><a class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapseThree">Are the description and price of the item included in the barcode?</a></h4>
    </div>

    <div class="panel-collapse collapse" id="collapseThree">
      <div class="panel-body">
        <div class="small">Generally no. The barcode represents the number that simply identifies the item uniquely. All the information about a product is held in a computer database. By scanning the barcode, this information (including the description and price) may be retrieved from the database.<br>
          <br>
          The only exception is the specialist numbering system devised for Retail Variable Measure Trade Items and money-off coupon numbers that include the price of the item or value of the coupon.</div>
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title"><a class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapseFour">What is a Global Trade Item Number (GTIN)?</a></h4>
    </div>

    <div class="panel-collapse collapse" id="collapseFour">
      <div class="panel-body">
        <div class="small">A Global Trade Item Number (GTIN) is a unique number that identifies any pre-defined trade item (a product or service) that may be priced, ordered or invoiced at any point in any supply chain. Trade items include all services and products, from raw materials through to end user products.<br>
          <br>
          The Brand Owner, the organisation that owns the specifications of the trade item, regardless of where and by whom it is manufactured, is normally responsible for the allocation of the Global Trade Item Number (GTIN).<br>
          <br>
          Different GTINs must be allocated to every different product that the Brand Owner is responsible for, and detailed rules have been developed to help companies allocate them correctly. For further information, please see <a href="http://www.gs1.org/1/gtinrules/" target="_blank">GTIN Management Rules</a>.<br>
          <br>
          See <a href="http://www.gs1.org/gtin" target="_blank">http://www.gs1.org/gtin</a> for more information.</div>
      </div>
    </div>
  </div>
</div>
<script>
function advagg_mod_1() {
  // Count how many times this function is called.
  advagg_mod_1.count = ++advagg_mod_1.count || 1;
  try {
    if (advagg_mod_1.count <= 40) {
      
jQuery('#accordion').on('hidden.bs.collapse', function () {
  jQuery('.matchheight').matchHeight();
});
jQuery('#accordion').on('show.bs.collapse', function () {
  jQuery(this).parents('.matchheight').height('auto');
});


      // Set this to 100 so that this function only runs once.
      advagg_mod_1.count = 100;
    }
  }
  catch(e) {
    if (advagg_mod_1.count >= 40) {
      // Throw the exception if this still fails after running 40 times.
      throw e;
    }
    else {
      // Try again in 250 ms.
      window.setTimeout(advagg_mod_1, 250);
    }
  }
}
function advagg_mod_1_check() {
  if (window.jQuery && window.Drupal && window.Drupal.settings) {
    advagg_mod_1();
  }
  else {
    window.setTimeout(advagg_mod_1_check, 250);
  }
}
advagg_mod_1_check();</script>  </div>
          </div>
  </div>

  </div>

  
  </div>
</div><div class="col-md-4"><div class="panel-pane pane-block pane-bean-buy-barcodes-useful-links pane-bean"  >
  
        <h2 class="pane-title">
      &nbsp;    </h2>
    
  
  <div class="pane-content">
      <div class="content-module-container matchheight">
                      <div class="content-module-bar bg-raspberry"></div>
        <div class="content-module content-module-padding">
                <h4>Useful links</h4>
                      
  <div class="field field-name-field-bean-body field-type-text-long field-label-hidden">
    <ul>
  <li><a href="/standards/barcodes/10-steps-to-barcode-your-product/english">10 steps to GS1 barcodes</a></li>
  <li><a href="/standards/barcodes">Types of barcodes managed by GS1</a></li>
  <!--<li><a href="/">Contact a GS1 Member Organization in your country</a></li>-->
  <li style="margin-top: 10px;">GS1 is your most secure way to<strong> get barcodes and GTIN numbers.</strong>
    <div style="text-align: center;"><a class="btn btn-primary btn-get-a-barcode btn-block" href="/standards/get-barcodes/contact" style="margin: 20px 0 0 0;">Get your barcodes now</a></div>
  </li>
</ul>
  </div>
          </div>
  </div>

  </div>

  
  </div>
</div></div></div></div>
</section>
  
</div>
  <div class="footer" style="bottom:auto; position: relative;text-align: center;" >
    <div class="row">
      <div class="col-sm-3">
        <p style="color: #ff5721;">QUICK LINKS</p>
        <ul style="list-style: none;">
          <li><a href="views/login.php">Get Barcodes</a></li>
          <li><a href="resources.php">Resources</a></li>
          <li><a href="tools.php">Tools</a></li>
          <li><a href="views/signup.php">Become a Member</a></li>
        </ul>
      </div>
      <div class="col-sm-3">
                <p style="color: #ff5721;">FOLLOW US ON </p>
        <ul style="list-style: none;">
          <li><a href=""><i class="fa fa-envelop"></i> info@gs1uganda.ug</a></li>
          <li><a href=""><i class="fa fa-facebook"></i>gs1uganda</a></li>
          <li><a href=""><i class="fa fa-phone"></i> Tel : 098-764-5367</a></li>
          <li><a href=""><i class="fa fa-fax"></i>Fax : 0987-908-876</a></li>
        </ul>
      </div>
      <div class="col-sm-3">
                <p style="color: #ff5721;">PARTNERS</p>
        <ul style="list-style: none;">
          <li><a href="">UNBS</a></li>
          <li><a href="">Planet Systems</a></li>
          <li><a href="">Ministry of Trade</a></li>
          <li><a href="">NITA</a></li>
        </ul>
      </div>
      <div class="col-sm-3">
                <p style="color: #ff5721;">HELP</p>
        <ul style="list-style: none;">
          <li><a href="contactform.php">FAQ</a></li>
          <li><a href="contactform.php">Join Our Mailing List</a></li>
          <li><a href="contactform.php">Education & Training</a></li>
          <li><a href="contactform.php">Enquiries</a></li>
        </ul>
      </div>
    </div>
    <hr>
    <div>
    
<div class="ult-wrapper wrapper " id="wrapper-18">
<div class="ult-container  container_12 " id="container-18">

    <div class="ult-column grid_8 " id="col-18-1">
      <div class="colwrapper"><div class="widget widget_text inner-container">      <div class="textwidget"><div class="footer_bottom">
     <span>GS1 Uganda All Copyrights reserved &copy;2020</span> 
 <span class="first_span" ><a href="#" target="_blank" rel="noopener noreferrer">Website Disclaimer</a></span> <b>|</b>
      <span class="first_span" ><a href="#">Privacy Policy</a></span> 
</div>
</div>
    </div></div>
    </div>
    <div class="ult-column grid_4 " id="col-18-2">
      <div class="colwrapper">&nbsp;</div>
    </div>
    </div>
</div>
</div>
    </div>
  </div>
  </div>
	<script type="text/javascript">jssor_1_slider_init();
    </script>
    <!-- #endregion Jssor Slider End -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script type="text/javascript" src="./assets/app.js"></script>
<script type="text/javascript" src="./assets/js/bootstrap.js"></script>
<script type="text/javascript" src="./assets/js/bootstrap.min.js"></script>
</body>
</html>