<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
<title>Student Home</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="header">
<h2 style="text-align: center;">Change Password</h2>
</div>

<form method="post" action="updatePass.php" style="text-align: center;">
<?php include('errors.php'); ?>
<table align="center">

<tr>
<td>
<div class="input-group">
<label>New Password</label>
</td>
<td>
<input type="password" name="newPass1">
</div>
</td>
</tr>

<tr>
<td>
<div class="input-group">
<label>Confirm New Password</label>
</td>
<td>
<input type="password" name="newPass2">
</div>
</td>
</tr>
</table>

<div class="input-group">
<button type="submit" class="btn" name="update_pass">Submit</button>
</div>


</form>
</body>
</html>


<p style="text-align: center;"><a href="index.php">Home</a></p>



