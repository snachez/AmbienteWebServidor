<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
function numbers($n){
	$fibonacci = array();
$fibonacci[0] = $_REQUEST['fibonacci'];;
$fibonacci[1] = 1;
 
for ($i = 0;$i<$n-2;$i++) 
{
	$last = count($fibonacci);
  $fibonacci[] = $fibonacci[$last - 1] + $fibonacci[$last - 2];
}
return $fibonacci;
}

print_r(numbers(10));
?>
</body>
</html>