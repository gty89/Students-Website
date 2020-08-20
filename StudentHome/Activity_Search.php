<html>
<title>Student Home</title>
<link rel="stylesheet" type="text/css" href="style.css">
</html>


<?php
  include ('server.php');
  
  $date1=date_create();
  $date2=date_create();
  //date_date_set( $date1, 2019, 9, 1);
  //date_date_set( $date2, 2020, 9, 1);
  date_date_set( $date1, $_POST["From_Y"], $_POST["From_M"], $_POST["From_D"]);
  date_date_set( $date2, $_POST["To_Y"], $_POST["To_M"], $_POST["To_D"]);
  echo "The activities between ";
  echo date_format($date1,"m/d/Y");
  echo " and ";
  echo date_format($date2,"m/d/Y");
    echo " are as followed:<br>";
  $flag = true;
  $activity = array(
    array(
      "Seige of Winterfall: Long Live the Night King!",
      date_create( "2019-12-12"),
      "Bobcat Soccer Complexity"
    ),
    array(
      "Celebrating for Getting 4.0 from Software Engineering",
      date_create( "2019-12-24"),
      "MoCoy 00224"
    ),
    array(
      "Singing, Dancing, Rap and Basketball",
      date_create( "2019-12-20"),
      "Student Recreation Center"
    )
  );

  foreach( $activity as $x)
  {
    //echo date_format( $x[1], "m/d/Y");
    if( $x[1] >= $date1 && $x[1] <= $date2)
    {
      $flag = false;
      echo "<br>", $x[0],"<br>", date_format( $x[1], "m/d/Y"), "<br>", $x[2], "<br>";
    }
  }
  if( $flag)
  {
    echo "<br>There are no activities during this period.<br>";
  }

//  $conn = new PDO('mysql:host=localhost;dbname=test', $user, $pass);;
//  $sql = "SELECT * FROM Activities WHERE Day >=";
//  $sql .= date_format($date1,"Y/m/d/");
//  $sql .= "and Day <= ";
//  $sql .= date_format($date2,"Y/m/d/");
//  $result = $conn->query($sql);
//      echo "Name\t\tTime\t\tLocation";
//      while($row = $result->fetch_assoc())
//      {
//        echo $row.["Name"], "\t" , date_format( $row.["Day"], "m/d/Y"), "\t" , $row.["Location"], "<br>";
//      }
?>

<form action="Activity.php" method="post">
  <button>Return</button>
