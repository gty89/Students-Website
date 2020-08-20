<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Student Home</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<form class="login-form" action="enter_email.php" method="post" style="text-align: center;">
<h2 class="form-title">Recover</h2>
<!-- form validation messages -->
<?php include('errors.php'); ?>
<div class="form-group">
<label>Enter Email Address</label>
<input type="email" name="Email">
</div>
<div class="form-group">
<button type="submit" name="reset-password" class="login-btn">Submit</button>
</div>
</form>
</body>
</html>

<p style="text-align: center;"><a href="index.php">Home</a></p>
