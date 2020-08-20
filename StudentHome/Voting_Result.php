<html>
<title>Student Home</title>
<link rel="stylesheet" type="text/css" href="style.css">
</html>

<?php
  $voted = array( "John"=>186, "Mary"=>110, "Susan"=>97);

/*  $voted = array(
      array( "John", 186, 1),
      array( "Mary", 110, 2),
      array( "Susan", 97, 3)
  );
*/
  foreach( $voted as $x=>$x_value)
  {
    if( $x == $_POST["candidate"])
    {
      $name = $x;
    }
  }
  echo "You just voted to ", $name;
  echo "<br>";
?>

<h2>Result:</h2>
<table>

<?php
foreach( $voted as $x=>$x_value)
{
  if( $x == $name)
    $x_value += 1;
  echo "<tr>";
  echo "<td>", $x, "</td>";
  echo "<td>";
  echo "<img src=\"poll.gif\" width= '";
  echo $x_value;
  echo "' height='20'>";
  echo $x_value;
  echo "</td>";
  echo "</tr>";
}
?>

</table>

 <form action="Voting.php" method="post">
    <button>Test Back</button>
  </form>

  <form action="Activity_Menu.php" method="post">
    <button>Return</button>
  </form>
