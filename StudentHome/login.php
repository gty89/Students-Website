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



<h2 style="text-align: center;">Login</h2>
</div>

<form method="post" action="login.php" style="text-align: center;">
<?php include('errors.php'); ?>
<table align="center">
<tr>
<td>
<div class="input-group">
<label>Login Name</label>
</td>
<td>
<input type="text" name="Login" >
</div>
</td>
</tr>

<tr>
<td>
<div class="input-group">
<label>Password</label>
</td>
<td>
<input type="password" name="Password">
</div>
</td>
</tr>
</table>

<div class="input-group">
<button type="submit" class="btn" name="login_user">Login</button>
</div>

<p>
Don't have an account? <a href="register.php">Sign up</a>
</p>


<tr>
<td>
<p><a href="enter_email.php">Forgot Password?</a></p>
<p><a href="enter_email.php">Forgot Login?</a></p>
</td>
</tr>


</form>
</body>
</html>
