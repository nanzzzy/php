
    <?php
$cars = array
  (
  array("math",18,45),
  array("biolgy",15,46),
  array("chimstry",16,45),
  array("physics",17,47)
  );
    
for ($row = 0; $row < 4; $row++) {
  echo "<p><b>Row number $row</b></p>";
  echo "<ul>";
  for ($col = 0; $col < 3; $col++) {
    echo "<li>".$cars[$row][$col]."</li>";
  }
  echo "</ul>";
}
?>

