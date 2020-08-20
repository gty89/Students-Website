<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Student Home</title>
<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>

<form class="login-form" action="login.php" method="post" style="text-align: center;">
<p>
We sent an email to  <b><?php echo $_GET['Email'] ?></b> to help you recover your account.
</p>
<p>Please login into your email account to retrieve your login name or password.</p>

<p>Click on the provided link we sent, if you would like to <a href="updatePass.php">reset</a> your password</p>
</form>

</body>
</html>

<p style="text-align: center;"><a href="index.php">Home</a></p>
