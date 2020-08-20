<html>
<head>
<title>Student Home</title>
<link rel="stylesheet" type="text/css" href="style.css">
<script>
function getVote(int) {
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("poll").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","poll_vote.php?vote="+int,true);
  xmlhttp.send();
}
</script>
</head>
<body>

<div id="poll">
<h4>Choose Your Candidate: For head of the student's union</h4> 

<form>
John:
<input type="radio" name="vote" value="0" onclick="getVote(this.value)">
<br>Mary:
<input type="radio" name="vote" value="1" onclick="getVote(this.value)">
<br>Susan:
<input type="radio" name="vote" value="1" onclick="getVote(this.value)">
</form>
</div>

</body>
</html>
