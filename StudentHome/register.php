<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
<title>Student Home</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="header">
<h1 style="text-align: center;">Student Home</h1>


<h2 style="text-align: center;">Register</h2>
</div>

<form method="post" action="register.php" style="text-align: center;">
<?php include('errors.php'); ?>

<table align="center">
<tr>
<td>
<div class="input-group">
<label>First Name</label>
</td>
<td>
<input type="text" name="FirstName" value="<?php echo $FirstName; ?>">
</div>
</td>
</tr>

<tr>
<td>
<div class="input-group">
<label>Last Name</label>
</td>
<td>
<input type="text" name="LastName" value="<?php echo $LastName; ?>">
</div>
</td>
</tr>

<tr>
<td>
<div class="input-group">
<label>Street Address</label>
</td>
<td>
<input type="text" name="StreetAddress" value="<?php echo $StreetAddress; ?>">
</div>
</td>
</tr>

<tr>
<td>
<div class="input-group">
<label>City</label>
</td>
<td>
<input type="text" name="City" value="<?php echo $City; ?>">
</div>
</td>
</tr>

<tr>
<td>
<div class="input-group">
<label>State</label>
</td>
<td>
<input type="text" name="State" value="<?php echo $State; ?>">
</div>
</td>
</tr>

<tr>
<td>
<div class="input-group">
<label>Zipcode</label>
</td>
<td>
<input type="text" name="Zipcode" value="<?php echo $Zipcode; ?>">
</div>
</td>
</tr>


<tr>
<td>
<div class="input-group">
<label>Email</label>
</td>
<td>
<input type="email" name="Email" value="<?php echo $Email; ?>">
</div>
</td>
</tr>

<tr>
<td>
<div class="input-group">
<label>Login Name</label>
</td>
<td>
<input type="text" name="Login" value="<?php echo $Login; ?>">
</div>
</td>
</tr>

<tr>
<td>
<div class="input-group">
<label>Password</label>
</td>
<td>
<input type="password" name="password_1">
</div>
</td>
</tr>

<tr>
<td>
<div class="input-group">
<label>Confirm password</label>
</td>
<td>
<input type="password" name="password_2">
</div>
</td>
</tr>
</table>

<div class="input-group">
<button type="submit" class="btn" name="reg_user">Register</button>
</div>


<p>
Already have an account?
<a href="login.php">Sign in</a>
</p>
</form>
</body>
</html>
