<?php include('server.php') ?>

<!DOCTYPE html>
<html>
<head>
<title>Student Home</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="header">



<h2 style="text-align: center;">Search People</h2>
</div>

<form method="get" action="searchResult.php" style="text-align: center;">
<?php include('errors.php'); ?>
<table align="center">
<tr>
<td>
<div class="input-group">
<label>First Name</label>
</td>
<td>
<input type="text" name="FirstName" >
</div>
</td>
</tr>

<tr>
<td>
<div class="input-group">
<label>Last Name</label>
</td>
<td>
<input type="text" name="LastName" >
</div>
</td>
</tr>

<tr>
<td>
<div class="input-group">
<label>Department</label>
</td>
<td>
<input type="text" name="Department" >
</div>
</td>
</tr>
</table>

<div class="input-group">
<button type="submit" class="btn" name="search_people">Search</button>
</div>

</form>

</body>
</html>


<p style="text-align: center;"><a href="index.php">Home</a></p>
