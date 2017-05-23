
<!DOCUMENT html>
<html lang = "en">
	<head>
		<meta charset = "utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title> Payment Page </title>
		<script src = "js/jquery.js"> </script>
			<style>
			@import "css/styleMemberPage.css";
			@import "css/jquery-bootstrap.css";
			@import "css/bootstrap.min.css";
			@import "css/navigation.css";
			@import "css/image_slider.css";
			@import "css/main.css";
			@import "css/footer.css";
			@import "css/payment.css";
			

			</style>
		</head>
		<body>
	<?php

			require_once('include/current_page.php');
			//set the current page
    		$login_current = 'class = "active"';
			require_once("include/navigation_part.php");
	?>

	
	<div class="container" id="paymentForm">
  <form class="form-horizontal" role="form">
    <fieldset>
      <legend>Payment</legend>
      <div class="form-group">
        <label class="col-sm-3 control-label" for="card-holder-name">Name on Card</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" name="card-holder-name" id="card-holder-name" placeholder="Card Holder's Name">
        </div>
      </div>
			<div class="form-group">
			<label class="col-sm-3 control-label" for="card-type">Card Type</label>
			<div class="col-sm-9">
			  <input type="text" class="form-control" name="card-type" id="card-type" placeholder="Debit/Credit Card Type">
			</div>
		  </div>
      <div class="form-group">
        <label class="col-sm-3 control-label" for="card-number">Card Number</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" name="card-number" id="card-number" placeholder="Debit/Credit Card Number">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label" for="expiry-month">Expiry Date</label>
        <div class="col-sm-9">
          <div class="row">
            <div class="col-xs-3">
              <select class="form-control col-sm-2" name="expiry-month" id="expiry-month">
                <option>Month</option>
                <option value="01">Jan (01)</option>
                <option value="02">Feb (02)</option>
                <option value="03">Mar (03)</option>
                <option value="04">Apr (04)</option>
                <option value="05">May (05)</option>
                <option value="06">June (06)</option>
                <option value="07">July (07)</option>
                <option value="08">Aug (08)</option>
                <option value="09">Sep (09)</option>
                <option value="10">Oct (10)</option>
                <option value="11">Nov (11)</option>
                <option value="12">Dec (12)</option>
              </select>
            </div>
            <div class="col-xs-3">
              <select class="form-control" name="expiry-year">
              
                <option value="16">2016</option>
                <option value="17">2017</option>
                <option value="18">2018</option>
                <option value="19">2019</option>
                <option value="20">2020</option>
                <option value="21">2021</option>
                <option value="22">2022</option>
                <option value="23">2023</option>
              </select>
            </div>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label" for="cvv">Card CVV</label>
        <div class="col-sm-3">
          <input type="text" class="form-control" name="cvv" id="cvv" placeholder="Security Code">
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-3 col-sm-9">
          <button type="button" class="btn btn-danger">Pay Now</button>
        </div>
      </div>
    </fieldset>
  </form>
</div>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		<script src = "js/jquery.js"> </script>
		<script src = "js/bootstrap.min.js"> </script>
		
		
<?php
		
	require_once("include/footer_part.php");	
		
?>
		
    </body>
</html>