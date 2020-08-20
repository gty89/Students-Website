<?php include('server.php')?>

<html>
<body>

  <head>
    <title>Student Home</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <h2>Find Activities</h2>
  <p>Please input the time period to find activities:</p>
  
  <form action = "Activity_Search.php" method = "post">
    From(MM/DD/YYYY): <input type="Integer" name="From_M" size=2 maxlength=2>/<input type="Integer" name="From_D" size=2>/<input type="Integer" name="From_Y" size=4 maxlength=4><br>

    To(MM/DD/YYYY): <input type="Integer" name="To_M" size=2 maxlength=2>/<input type="Integer" name="To_D" size=2>/<input type="Integer" name="To_Y" size=4 maxlength=4><br>

    <input type="submit"> 
  </form>
  <form action="Activity_Menu.php" method="post">
      <button>Return</button>
  </form>
  
</body>
</html>
