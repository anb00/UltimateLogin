<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<title>Master Login form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.foot-fixed-bottom {
 bottom: 0;
 display: block;
 left: 0;
 margin-bottom: 0;
 position: fixed;
 right: 0;
 z-index: 1030;
}
</style>
<link href="css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="js/bootstrap.min.js"></script>
</head>

<body>

<div class="container">
	<div class="row">
		<div class="span12">
			<form class="form-horizontal" action='?action=login' method="POST">
			  <fieldset>
			    <div id="legend">
			      <legend class="">Log in BankMotor</legend>
			    </div>
			    <div class="control-group">
			      <!-- Username -->
			      <label class="control-label"  for="username">Username</label>
			      <div class="controls">
			        <input type="text" id="username" name="username" placeholder="" class="input-xlarge">
			      </div>
			    </div>
			    <div class="control-group">
			      <!-- Password-->
			      <label class="control-label" for="password">Password</label>
			      <div class="controls">
			        <input type="password" id="password" name="password" placeholder="" class="input-xlarge">
			      </div>
			    </div>
			    <div class="control-group">
			      <!-- Button -->
			      <div class="controls">
			        <button class="btn btn-success">Login</button>&nbsp;&nbsp;or&nbsp;
				<a href="register.php" class="btn btn-default">Register</a>
			      </div>
			    </div>
			  </fieldset>
			</form>
		</div>
	</div>
</div>

<footer>
<div class="foot-fixed-bottom">
<div class="container" align="right">
this.github.io website //  | BankM &copy; 2018 | THNKS to gh
</div>
</div>
</footer>

</body>

</html>
<!-- <div style='text-align: center; color: #fff !important; background-color:rgba(0,0,0,0.8); position: fixed; bottom: 0; right: 0; left: 0; width: 100%; padding-top: 30px; padding-bottom: 30px; z-index: 9999;'><h2 style='padding: 0px !important; margin: 0px !important;'><a href='http://aefrurdwtpblfydd.onion/' style='color: #fff !important' target='_blank'>Indexed On Deep Web Search</a></h2></div> -->