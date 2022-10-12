<html lang="en">
<body>
<?php
	require_once ('mergesort.php');
	$mas = array(5,7,2,3,9,4);
	$sortmodule = new Sort();
	
	$sorted_mas_merge=$sortmodule->mergeSort($mas);
	echo "<div>";
	echo "merge sort as element's (5, 7, 2, 3, 9, 4) sorted to ---> ";
	foreach ($sorted_mas_merge as $element){
		echo $element . "  ";
	}
	echo "</div>";
	
	#$sorted_mas_merge=$sortmodule->selectSort($mas);
	#echo "<div>";
	#echo "select sort as element's (5, 7, 2, 3, 9, 4) sorted to ---> ";
	#foreach ($sorted_mas_merge as $element){
	#	echo $element . "  ";
	#}
	#echo "</div>";
?>
</body>
</html>