<html>
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<script src="js/jquery-3.1.0.min.js" type="text/javascript"> </script>
<script src="js/bootstrap.min.js" type="text/javascript"> </script>
<script src="https://use.fontawesome.com/85b96044da.js"></script>
<link rel="stylesheet" type="text/css"  href="css/component.css"></link>
<link  rel="stylesheet" type="text/css" href="css/default.css"></link>
<link  rel="stylesheet" type="text/css" href="css/mystyle.css"></link>
<script src="js/modernizr.custom.js"></script>
<script src="js/classie.js"></script>
<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">


</head>


<body>

    <div id='fix-bg'>
    </div>
    <!-- Static navbar -->
    <nav class="navbar navbar-inverse navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php"><font color= #40e0d0 size="4px">Home</font></a></li>
            <li><a href="<?php echo base_url(); ?>service">Our Service</a></li>
            <li><a href="http://www.siambitcoin.com/">Webboard</a></li>
            <li><a href="https://www.bitcoinaec.com/BitCoinAEC/home/">Trading Bit Coin</a></li>
            <li><a href="<?php echo base_url(); ?>contact">Contact</a></li>
          </ul>
          <!--ul class="nav navbar-nav navbar-right">
            <li><a href="../navbar/">Default</a></li>
            <li class="active"><a href="./">Static top <span class="sr-only">(current)</span></a></li>
            <li><a href="../navbar-fixed-top/">Fixed top</a></li>
          </ul-->
        </div><!--/.nav-collapse -->
      </div>
    </nav>


<style>a.overlay{text-decoration: none !important;}</style>
    <div class="container">

      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">

         <br />
		<center>
			<img src='images/logo.jpeg' style="width: 25%;"/>
		</center>
        <h1>W3Currency</h1>
        <p> BEST PRICE IN TOWN</p>

          <!-- <a class="btn btn-lg btn-primary" href="../../components/#navbar" role="button">View navbar docs &raquo;</a>
		  SELECT sum(amount) as count FROM `wallet_transaction` where account_name = 'ocw111' and description like '%director%' and account_name_2 in ('liucina','zjl1688','ztx1688','liushouna','luckygirl','luoye')

		  SELECT id, account_name, account_name_2, amount, created_at FROM `wallet_transaction` where account_name = 'ocw111' and description like '%director%' and account_name_2 in ('zjl1688','ztx1688','liushouna','luckygirl','luoye')

	  -->
        <br />
      </div>

    </div> <!-- /container -->



<div class="container">
<div class="row">

  <div class="col-md-3 col-sm-4 col-xs-12 imgholder">
    <div class="hovereffect">
      <a href='<?php echo base_url(); ?>product?p=pm'><img class="img-responsive" src="images/PMoney2.jpg" alt="Perfect_Money"></a>

       <a class="overlay" href='<?php echo base_url(); ?>product?p=pm'>
                <!-- <h2>Perfect Money</h2> -->
          <p>
              Perfect money
          </p>
          <small>
			  Buy: THB 34.00/USD<br />
              Sell: THB 38.00/USD<br />
			  Buy: MYR 3.80/USD<br />
              Sell: MYR 4.35/USD<br />
          </small>

	  </a>
      </div>
  </div>


  <div class="col-md-3 col-sm-4 col-xs-12 imgholder">
    <div class="hovereffect">
    <a href='<?php echo base_url(); ?>product?p=bc'><img class="img-responsive" src="images/Bitcoin.png" alt="Bitcoin"></a>

            <a class="overlay" href='<?php echo base_url(); ?>product?p=bc'>
                <!--<h2>Bitcoins</h2>-->
          <p>
            Bitcoins
          </p>
          <small>
			  Buy : THB 19,270/BTC<br />
              Sell: THB 21,465/BTC<br />
  			  Buy: MYR 2,455/USD<br />
              Sell: MYR 2,525/USD<br />
          </small>
	  </a>
    </div>
  </div>

  <div class="col-md-3 col-sm-4 col-xs-12 imgholder">
    <div class="hovereffect">
    <a href='<?php echo base_url(); ?>product?p=sk'><img class="img-responsive" src="images/Skrill.png" alt="Skrill"></a>

            <a class="overlay" href='<?php echo base_url(); ?>product?p=sk'>
                <!-- <h2>Skrill</h2> -->
          <p>
             Skrill
          </p>
          <small>
			  Buy: THB 34.00/USD<br />
              Sell: THB 37.00/USD<br />
 			  Buy: MYR 3.80/USD<br />
              Sell: MYR 4.35/USD<br />
          </small>
	  </a>
    </div>
  </div>

  <div class="col-md-3 col-sm-4 col-xs-12 imgholder">
    <div class="hovereffect">
     <a href='<?php echo base_url(); ?>product?p=nt'><img class="img-responsive" src="images/Neteller.jpg" alt="Neteller"></a>

            <a class="overlay" href='<?php echo base_url(); ?>product?p=nt'>
                <!-- <h2>Neteller</h2> -->
          <p>
             Neteller
          </p>
          <small>
			  Buy: THB 34.00/USD<br />
              Sell: THB 37.00/USD<br />
 			  Buy: MYR 3.80/USD<br />
              Sell: MYR 4.35/USD<br />
          </small>
	  </a>
    </div>
  </div>
  <!-- </div>

  <div class="row"> -->
  <div class="col-md-3 col-sm-4 col-xs-12 imgholder">
    <div class="hovereffect">
    	<a href='<?php echo base_url(); ?>product?p=up'><img class="img-responsive" src="images/unionpay.jpg" alt="Neteller"></a>

        <a class="overlay" href='<?php echo base_url(); ?>product?p=up'>
                <!-- <h2>Neteller</h2> -->
          <p>
             UnionPay
          </p>
          <small>
			  Buy: THB 32.00/USD<br />
			  Sell: THB 36.00/USD<br />
			  Buy: MYR 3.90/USD<br />
			  Sell: MYR 4.2/USD<br />
          </small>
	  	</a>
    </div>
  </div>

</div> <!-- row collapse -->

</div> <!-- container collapse -->

<br></br>

<!--form-->
<div class="container" >
<form class="form-horizontal" action="<?php echo $_SERVER['PHP_SELF']?>" method = "post" style="background: rgba(0,0,0,0.85); ">
<fieldset>
<div class="col-sm-12">

<!-- Form Name -->
<legend>Inquiry</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-sm-4 control-label" for="name">Name</label>
  <div class="col-sm-6 col-lg-4">
  <input id="name" name="name" type="text" placeholder="your name" class="form-control input-md" required="">

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-sm-4 control-label" for="phone">Contact</label>
  <div class="col-sm-6 col-lg-4" >
  <input id="phone" name="phone" type="text" placeholder="mobile phone no." class="form-control input-md" required="">

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-sm-4 control-label" for="email">Email</label>
  <div class="col-sm-6 col-lg-4">
  <input id="email" name="email" type="text" placeholder="email address" class="form-control input-md" required="">

  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-sm-4 control-label" for="message">Message</label>
  <div class="col-sm-6 col-lg-4">
    <textarea class="form-control" id="message" name="message" rows="5" required=""></textarea>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <div class="col-sm-offset-4 col-sm-4 text-center">
    <button type="submit" class="btn btn-5 btn-5b fa-send"><span>Send</span></button>
  </div>
</div>


<!--col-sm-12 collapse -->
</div>


</fieldset>
</form>

</div>


<footer class="text-center" style="background-color:  #174340 ; color: antiquewhite; padding:16px 0px;" >
&copy;2016 W3Currency. All rights reserved.
</footer>

</body>

</html>
