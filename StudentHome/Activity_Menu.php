<?php include('server.php')?>

<html>
  <head>
    <title>Student Home</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <h1>Student Activities </h1>
    <p>Please Select One Service:</p>
    <form action="Activity.php" method="post">
      <button>Searching Student Activity and Parties</button>
    </form>
    <form action="Voting.php" method="post">
      <button>Voting for Student Union</button>
    </form>
    <form action="index.php" method="post">
      <button>Return to the Menu</button>
    </form>
  </body>
</html>
