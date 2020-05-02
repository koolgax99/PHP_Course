<html>
<body>
<?php
$x = 1;

while($x <= 9) {
    echo "abc ";
    $x++;
}
echo "</br>";

$x = 1;
do{
    echo "xyz ";
    $x++;
}while($x<=9);
echo "</br>";

for($x=1; $x<10; $x++){
    echo "$x ";
}
echo "</br>";

for($x=1; $x<8; $x++){
    echo "$x. Item ";
    echo chr(64 + $x);
    echo "</br>";
}
?>
</body>
</html>