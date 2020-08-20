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
<a href="searchPeople.php">Back</a>

<table style="text-align: center;" align="center">
    <thead>
    <tr>
        <th>#</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Phone Number</th>
        <th>Email</th>
        <th>Department</th>
    </tr>
    </thead>
    <tbody>
        <?php 
        $count = 0;
            if($people) { 
                foreach($people as $p)
                {
                ?>
                <tr>
                <td><?= ++$count ?></td>
                <td><?= $p['FirstName'] ?></td>
                <td><?= $p['LastName']?></td>
                <td><?= $p['PhoneNumber'] ?></td>
                <td><?= $p['Email'] ?></td>
                <td><?= $p['Department'] ?></td>
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
