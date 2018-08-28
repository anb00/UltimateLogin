<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<title>Register form</title>
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
<form class="form-horizontal" action='' method="POST">
  <fieldset>
    <div id="legend">
      <legend class="">Register on BankMotor</legend>
    </div>
    <div class="control-group">
      <!-- Username -->
      <label class="control-label"  for="username"><font color="#FF0000">*</font>Username</label>
      <div class="controls">
        <input type="text" id="username" name="username" placeholder="Enter Username" class="input-xlarge">
      </div>
    </div>
 
    <div class="control-group">
      <!-- E-mail -->
      <label class="control-label" for="email"><font color="#FF0000">*</font>E-mail</label>
      <div class="controls">
        <input type="text" id="email" name="email" placeholder="Enter E-mail" class="input-xlarge">
      </div>
    </div>

    <div class="control-group">
      <!-- E-mail -->
      <label class="control-label" for="jab">Jabber ID</label>
      <div class="controls">
        <input type="text" id="jab" name="jab" placeholder="Enter Jabber ID" class="input-xlarge">
      </div>
    </div>
 
    <div class="control-group">
      <!-- Password-->
      <label class="control-label" for="password"><font color="#FF0000">*</font>Password</label>
      <div class="controls">
        <input type="password" id="password" name="password" placeholder="Enter Password" class="input-xlarge">
      </div>
    </div>
 
    <div class="control-group">
      <!-- Password -->
      <label class="control-label"  for="password_confirm"><font color="#FF0000">*</font>Password (Confirm)</label>
      <div class="controls">
        <input type="password" id="password_confirm" name="password_confirm" placeholder="Enter Confirm Password" class="input-xlarge">
      </div>
    </div>

    <div class="control-group">
      <div class="controls">
        <img src=""/>
      </div>
    </div>

    <div class="control-group">
      <label class="control-label"><font color="#FF0000">*</font>Captcha</label>
      <div class="controls">
        <input type="text" id="code" name="code" class="input-xlarge">
        <p class="help-block">Please enter captcha code</p>
      </div>
    </div>
 
    <div class="control-group">
      <!-- Button -->
      <div class="controls">
        <button class="btn btn-success">Register</button>
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
this.github.io website  | BankMotor &copy; 2018 | Thanks to gh
</div>
</div>
</footer>

</body>

</html>
<!-- <div style='text-align: center; color: #fff !important; background-color:rgba(0,0,0,0.8); position: fixed; bottom: 0; right: 0; left: 0; width: 100%; padding-top: 30px; padding-bottom: 30px; z-index: 9999;'><h2 style='padding: 0px !important; margin: 0px !important;'><a href='http://aefrurdwtpblfydd.onion/' style='color: #fff !important' target='_blank'>footer</a></h2></div> -->