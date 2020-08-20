<?php include('server.php') ?>
<!DOCTYPE html>
<html>
  <head>
<title>Student Home</title>
<link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <h1>Purchase Page</h1>
    <p>Please Select One Service:</p>
    <form action="shoppingcartMP/index.php?page=products" method="post">
      <button>Purchase Meal Plan</button>
    </form>
    <form action="shoppingcart/index.php?page=products" method="post">
      <button>Purchase Bus Ticket</button>
    </form>
    <form action="index.php" method="post">
      <button>Return to the Menu</button>
    </form>
  </body>
</html>
