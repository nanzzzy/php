<!doctype html>

<html lang="en">
<head>
    <title>php</title>

</head>
<body>
    <?php
$cars = array
  (
  array("physics",19,45,"chmestry",18,47,"biolgy",17,44,"math",15,49)
  );
  
echo $cars[0][0].": medteam: ".$cars[0][1].", final: ".$cars[0][2].".<br>";
?>
    
</body>

</html>
