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
<link  rel="stylesheet" type="text/css" href="css/mystyle.css"></link>
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
            <li><a href="index.php"><font color= #40e0d0 size="4px">Home</font></a></li>
            <li><a href="<?php echo base_url(); ?>service">Our Service</a></li>
            <li><a href="http://www.siambitcoin.com/">Webboard</a></li>
            <li><a href="https://www.bitcoinaec.com/BitCoinAEC/home/">Trading Bit Coin</a></li>
            <li class="active"><a href="<?php echo base_url(); ?>contact">Contact</a></li>
          </ul>
          <!--ul class="nav navbar-nav navbar-right">
            <li><a href="../navbar/">Default</a></li>
            <li class="active"><a href="./">Static top <span class="sr-only">(current)</span></a></li>
            <li><a href="../navbar-fixed-top/">Fixed top</a></li>
          </ul-->
        </div><!--/.nav-collapse -->
      </div>
    </nav>



    <div class="container" style="min-height:calc( 100% - 123px );">
    <form class="form-horizontal" style="background: rgba(0,0,0,0.85);" action='<?php echo $_SERVER['PHP_SELF']?>' method='POST'>
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
      <div class="col-sm-6 col-lg-4">
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
      <!-- <label class="col-sm-4 control-label" for=""> </label> -->
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
