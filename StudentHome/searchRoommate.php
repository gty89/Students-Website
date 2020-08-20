<?php include('server.php') ?>

<!DOCTYPE html>
<html>
<head>
<title>Student Home</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="header">



<h2 style="text-align: center;">Search Roommate</h2>
</div>

<form method="get" action="roomResult.php" style="text-align: center;">
<?php include('errors.php'); ?>
<table align="center">
<tr>
<td>
<div class="input-group">
<label>Move in Date</label>
</td>
<td>
<input type="text" name="MoveIn" >
</div>
</td>
</tr>

<tr>
<td>
<div class="input-group">
<label>Gender</label>
</td>
<td>
<input type="text" name="Gender" >
</div>
</td>
</tr>

<tr>
<td>
<div class="input-group">
<label>Price</label>
</td>
<td>
<input type="decimal" name="Price" >
</div>
</td>
</tr>
</table>

<div class="input-group">
<button type="submit" class="btn" name="search_roommate">Search</button>
</div>

</form>
</body>
</html>


<p style="text-align: center;"><a href="index.php">Home</a></p>

