<!DOCTYPE html>
<html>
<head>
</head>
<body>
 
 <?php
$name="Jamal siam";
$bref="works as software developer at a company";
echo $name .",". $bref;
$info=$name .",". $bref;
echo "<br/>";
echo "To upper: ". strtoupper($info);
echo "<br/>";
echo "To lower: ". strtolower($info);
echo "<br/>";
echo "Trim:". trim("  new york city "). " best city" ;
echo "<br/>";
echo "replace: ". str_replace("company", "good company", $info);

echo "<br/>";
echo "<br/>";
echo "normal: ".  $info ;
 ?>


</body>
</html>