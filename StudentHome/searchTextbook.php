<?php include('server.php') ?>

<!DOCTYPE html>
<html>
<head>
<title>Student Home</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="header">



<h2 style="text-align: center;">Search Textbook</h2>
</div>

<form method="get" action="textResult.php" style="text-align: center;">
<?php include('errors.php'); ?>
<table align="center">
<tr>
<td>
<div class="input-group">
<label>Title</label>
</td>
<td>
<input type="text" name="Title" >
</div>
</td>
</tr>

<tr>
<td>
<div class="input-group">
<label>Author</label>
</td>
<td>
<input type="text" name="Author" >
</div>
</td>
</tr>

<tr>
<td>
<div class="input-group">
<label>ISBN</label>
</td>
<td>
<input type="text" name="ISBN" >
</div>
</td>
</tr>
</table>

<div class="input-group">
<button type="submit" class="btn" name="search_textbook">Search</button>
</div>

</form>
</body>
</html>


<p style="text-align: center;"><a href="index.php">Home</a></p>



