<?
  intR=mt_rand(0,255);
  intG=mt_rand(0,255);
  intB=mt_rand(0,255);
?>

<html>
<head>
  <tite>Deep Color Learning</title>
</head>
<body bgcolor="rgb(<? intR ?>,<? intG ?>, <?intb?>)">
  <form align="center" action="index.php" method="post">
    <h1 align="center">WHAT COLOR IS THIS?</h1><br/>
    <input type="text" name="color"></input><br/>
    <h1 align="center"> A few keywords about yourself?</h1><br/>
    <input type="text" name="key"></input><br/>
    <input type="submit" value="submit">
  </form>
</body>
</html>
