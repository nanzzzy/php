<!doctype html>

<html lang="en">
<head>
    <title>php</title>

</head>
<body>
    $info = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($info as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}
    
</body>

</html>
