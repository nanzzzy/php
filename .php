<!doctype html>

<html lang="en">
<head>
    <title>php</title>

</head>
<body>
    <?php
$cars = array
  (
  array("physics",19,45),
  array("chmestry",18,47),
  array("biolgy",17,44),
  array("math",15,49)
  );
  
echo $cars[0][0].": medteam: ".$cars[0][1].", final: ".$cars[0][2].".<br>";
echo $cars[1][0].": medteam: ".$cars[1][1].", final: ".$cars[1][2].".<br>";
echo $cars[2][0].": medteam: ".$cars[2][1].", final: ".$cars[2][2].".<br>";
echo $cars[3][0].": medteam: ".$cars[3][1].", final: ".$cars[3][2].".<br>";
?>
    
</body>

</html>
