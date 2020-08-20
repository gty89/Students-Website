<?php include('server.php') ?>

<!DOCTYPE html>
<html>
<head>
<title>Student Search Result</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="header"
<h2 style="text-align: center;">Search Result</h2>
</div>
<a href="searchTextbook.php">Back</a>

<table style="text-align: center;" align="center">
<thead>
<tr>
<th>#</th>
<th>Title</th>
<th>Author</th>
<th>ISBN</th>
<th>Library Availability</th>
<th>Library Location</th>
<th>Store Location</th>
<th>Price</th>
</tr>
</thead>
<tbody>
<?php
    $count = 0;
    if($text) {
        foreach($text as $p)
        {
            ?>
<tr>
<td><?= ++$count ?></td>
<td><?= $p['Title'] ?></td>
<td><?= $p['Author'] ?></td>
<td><?= $p['ISBN'] ?></td>
<td><?= $p['LibAvailablity'] ?></td>
<td><?= $p['LibLoc'] ?></td>
<td><?= $p['StoreLoc']?></td>
<td><?= $p['Price'] ?></td>
</tr>
<?php }
    } else
    {
        foreach($errors as $error)
        {
            echo $error;
        }
    }
    
    ?>
</tbody>
</table>


</body>
</html>


<p style="text-align: center;"><a href="index.php">Home</a></p>
