<!DOCTYPE html>
<html>
<head>
</head>
<body>
 
 <?php
 $arr= array(23,232,313,43,54);
echo "arr[2]:". $arr[2];
echo "<br/>";
echo "arr". print_r($arr);
echo "<br/>";
$arr[2]=314;
echo "arr[2]:". $arr[2];
$arr[]=555;
echo "<br/>";
echo "arr". print_r($arr);
$items= array(1,"jamal",3.4 );
echo "<br/>";
echo "items[1]:". $items[1];
$itemsarray= array(1,"jamal",array(1,44,32,43 ) );
echo "<br/>";
echo "itemsarray[0]:". $itemsarray[1];
echo "<br/>";
echo "itemsarray[2][1]:". $itemsarray[2][1];
echo "<br/>";
echo "itemsarrayIn:".  print_r($itemsarray[2]);
 ?>
 <?php
$numbers = array(1,10,5,20,15,60,8,27);
echo print_r($numbers );
 ?>
</br>
 Max number: <?php    echo max($numbers );   ?>
 </br>
 Min number: <?php    echo min($numbers );   ?>
 </br>
 Count number: <?php    echo count($numbers );   ?>
  <br/>
  Arry order sort <?php sort($numbers ); echo print_r($numbers );   ?>
    <br/>
  Arry rever sort <?php rsort($numbers ); echo print_r($numbers );   ?>

  <br/>
  Is 10 in array <?php echo in_array(10, $numbers );     ?>
   <br/>
  Is 12 in array <?php echo in_array(12, $numbers );     ?>
</body>
</html>