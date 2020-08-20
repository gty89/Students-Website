<?php include('server.php') ?>

<!DOCTYPE html>
<html>
<head>
<title>Roommate Result</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="header"
<h2 style="text-align: center;">Search Result</h2>
</div>
<a href="searchRoommate.php">Back</a>

<table style="text-align: center;" align="center">
    <thead>
    <tr>
        <th>#</th>
        <th>MoveIn</th>
        <th>Gender</th>
        <th>Price</th>
        <th>Name</th>
        <th>Email</th>
    </tr>
    </thead>
    <tbody>
        <?php 
        $count = 0;
            if($roommate) { 
                foreach($roommate as $p)
                {
                ?>
                <tr>
                <td><?= ++$count ?></td>
                <td><?= $p['MoveIn'] ?></td>
                <td><?= $p['Gender']?></td>
                <td><?= $p['Price'] ?></td>
                <td><?= $p['Name'] ?></td>
                <td><?= $p['Email'] ?></td>
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