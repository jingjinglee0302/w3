<?php

$products = array(
    'pm' => array(
        'name' => 'Perfect Money',
        'sell' => '34',
        'buy' => '38',
        'img' => 'images/PMoney2.jpg'
    ),
    'bc' => array(
        'name' => 'Bitcoin',
        'sell' => '21465',
        'buy' => '19270',
        'img' => 'images/Bitcoin.png'
    ),
    'sk' => array(
        'name' => 'Skrill',
        'sell' => '34',
        'buy' => '37',
        'img' => 'images/Skrill.png'
    ),
    'nt' => array(
        'name' => 'Neteller',
        'sell' => '34',
        'buy' => '37',
        'img' => 'images/Neteller.png'
    ),
    'up' => array(
        'name' => 'UnionPay',
        'sell' => '32',
        'buy' => '36',
        'img' => 'images/Neteller.png'
    ),
);

if(!isset($_GET['p']) && !isset($_POST['name'])){
    header("Location: index.php");
    exit();
}

$flag = 'no';
foreach ($products as $key => $value) {
    if ($_GET['p']==$key) {
        $flag = 'yes';
    }
}

//echo $flag;
if ($flag == 'no' && !isset($_POST['name'])){
    header("Location: index.php");
    die();
}


//print_r($products[$_GET['p']]['name']);
//die();

?>


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
<script>
	<?php if(isset($msg)){ ?>
		alert('<?php echo $msg ?>');
	<?php } ?>

	var products = JSON.parse('<?php echo json_encode($products); ?>');

	$(document).ready(function(){

		$('#platform, #transaction_type').change(function(){
			$.each(products, function(i,p){
				if(p.name == $('#platform').val()){
					console.log($('#transaction_type').val());
					$('#ex_rate').val(p[$('#transaction_type').val()]);
				}
			});
		});
		$.each(products, function(i,p){
			if(p.name == $('#platform').val()){
				$('#ex_rate').val(p[$('#transaction_type').val()]);
			}
		});

        $('#product_form').submit(function(){
            $.post("http://localhost/w3/product/createTransaction", $('#product_form').serialize(), function(data, status){
                // $('#message').val(data)
                $('input[name="reference_id"]').val(data);
            });
        });
	});
</script>
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
            <li><a href="<?php echo base_url(); ?>contact">Contact</a></li>
          </ul>
        </div>
      </div>
    </nav>



    <div class="container" style="min-height:calc( 100% - 123px );">
    <form id='product_form' class="form-horizontal" style="background: rgba(0,0,0,0.85); " action="http://www.thaibookingtravel.com/gateway/payment.php" method='post'>
    <fieldset>
    <div class="col-sm-12">

    <!-- Form Name -->
    <legend>Product</legend>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-sm-4 control-label" for="platform">Platform</label>
      <div class="col-sm-6 col-lg-4">
	  <select id="platform" name="platform" class="form-control input-md">
		  <?php foreach ($products as $key => $value) { ?>
			<option <?php if($value['name'] == $products[$_GET['p']]['name']) echo 'selected' ?>><?php print_r($value['name']);?></option>
		<?php } ?>
	  </select>
      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-sm-4 control-label" for="transaction_type">Transaction Type</label>
      <div class="col-sm-6 col-lg-4">
      <select id='transaction_type' name="transaction_type" class='form-control'>
          <option value='buy'>Buy</option>
          <option value='sell'>Sell</option>
      </select>
      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-sm-4 control-label" for="ex_rate">Exchange Rate</label>
      <div class="col-sm-6 col-lg-4">
      <input id="ex_rate" name="ex_rate" type="text" placeholder="" class="form-control input-md" disabled="" value=''>
      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-sm-4 control-label" for="amount">Amount</label>
      <div class="col-sm-6 col-lg-4">
      <input id="amount" name="amount" type="number" placeholder="" class="form-control input-md" required="">
      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-sm-4 control-label" for="platform_email">Platform Email</label>
      <div class="col-sm-6 col-lg-4">
      <input id="platform_email" name="platform_email" type="text" placeholder="" class="form-control input-md" required="">

      </div>
    </div>


    <!-- Text input-->
    <div class="form-group">
      <label class="col-sm-4 control-label" for="banks">Banks</label>
      <div class="col-sm-6 col-lg-4">
      <!-- <input id="banks" name="banks" type="text" placeholder="" class="form-control input-md" required=""> -->
        <select id="bank" name="bank" class="form-control">
            <option value="BAY">Krungsri Ayudhya Bank </option>
            <option value="KTB">Krungthai Bank</option>
            <option value="SCB">Siam Commercial Bank </option>
        </select>

      </div>
    </div>


    <!-- Textarea -->
    <div class="form-group">
      <label class="col-sm-4 control-label" for="message">Remarks</label>
      <div class="col-sm-6 col-lg-4">
        <textarea class="form-control" id="message" name="message" rows="5"></textarea>
      </div>
    </div>

    <!-- Form Name -->
    <legend>Personal Details</legend>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-sm-4 control-label" for="name">Name</label>
      <div class="col-sm-6 col-lg-4">
      <input id="name" name="name" type="text" placeholder="your name" class="form-control input-md" required="" value= "<?php echo $member['full_name'] ?>"/>

      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-sm-4 control-label" for="ic">ID Card number</label>
      <div class="col-sm-6 col-lg-4">
      <input id="ic" name="ic" type="text" class="form-control input-md" required="" value="<?php echo $member['ic'] ?>"/>

      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-sm-4 control-label" for="phone">Contact</label>
      <div class="col-sm-6 col-lg-4">
      <input id="phone" name="phone" type="text" placeholder="mobile phone no." class="form-control input-md" required="" value="<?php echo $member['phone'] ?>"/>

      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-sm-4 control-label" for="email">Email</label>
      <div class="col-sm-6 col-lg-4">
      <input id="email" name="email" type="text" placeholder="email address" class="form-control input-md" required="" value="<?php echo $member['email'] ?>"/>
      <span class='help-block text-danger'>* Transaction fee of 25 Baht will be charged on each transaction.</span>

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

    <input type="hidden" name="merchantID" value="48"/>
    <input type="hidden" name="merchant_code" value="MC19981"/>
    <input type="hidden" name="customerID" value="<?php echo $member['id'] ?>"/>
    <input type="hidden" name="referenceID" value=""/>
    <input type="hidden" name="key" value="<?php echo md5('kCX38Jkd6Jjwepoz'.'MC19981') ?>"/>
    <!-- <input type="hidden" name="amount" value="1.00"/> -->
    <input type="hidden" name="description" value="string"/>
    <input type="hidden" name="transactionTime" value=""/>
    <!-- <input type="hidden" name="bank" value="SCB_TEST"> -->
    <input type="hidden" name="chk" value=""/>
    <input type="hidden" name="returnURL" value=" <?php echo base_url(); ?>business/getResponse"/>


    </fieldset>
    </form>

    </div>



<footer class="text-center" style="background-color:  #174340 ; color: antiquewhite; padding:16px 0px;" >
&copy;2016 W3Currency. All rights reserved.
</footer>



</body>

</html>
