
<html>

<html>
<title>Student Home</title>
<link rel="stylesheet" type="text/css" href="style.css">
</html>

  <body>
  <h>Welcome to the Election for Student Union!</h>
  <p>Please select your favorite candidate!</p>
  <?php
  
    $people = array( "John", "Mary", "Susan");
  ?>

  
<form action="Voting_Result.php" method="post">
  <select name="candidate">
      <?php
      //<option value="$name">$name</option>
      foreach( $people as $name) 
      {
        echo "<option value=\"", $name, "\">";
        echo $name;
        echo "</option>";
      }
      ?>
      <input type="submit">
  </select>
</form>
  <br>
  <form action="index.php" method="post">
    <button>Return</button>
  </form>
  </body>
</html>
    

