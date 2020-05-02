//koolgax99
<html>
<head>
<style>
table {
  border-collapse: collapse;
}

table, td, th {
  border: 1px solid black;
}
</style>
</head>
<body>
<?php
echo "<table>";
    for($x=1; $x<=7 ;$x++){
        echo "<tr>";
        for($y=1;$y<8;$y++){
            $z=$x*$y;
            echo "<td> $z </td>";
        }
        echo "</tr>";
    }
echo "</table>";
?>
</body>
</html>