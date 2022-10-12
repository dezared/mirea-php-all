<html lang="en">
<body>
<?php
	require_once ('mergesort.php');
	require_once ('commands.php');
	$commands = new Commands();
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


	echo "<div>";
	echo "ls: ";
	echo $commands->ls();
	echo "</br>ps: ";
	echo $commands->ps();
	echo "</br>whoami: ";
	echo $commands->whoami();
	echo "</br>id: ";
	echo $commands->id();
	echo "</div>";
?>
</br>
<a href ="http://localhost:8080/drawer.php?num=0" target="_blank">Ссылка на маленький зеленый круг </a>
</br>
<a href ="http://localhost:8080/drawer.php?num=1" target="_blank"> Ссылка на большой зеленый круг</a>
</br>
<a href ="http://localhost:8080/drawer.php?num=2" target="_blank"> Ссылка на маленький красный круг</a>
</br>
<a href ="http://localhost:8080/drawer.php?num=3" target="_blank"> Ссылка на большой красный круг</a>
</br>
<a href ="http://localhost:8080/drawer.php?num=4" target="_blank"> Ссылка на маленький зеленый прямоугольник</a>
</br>
<a href ="http://localhost:8080/drawer.php?num=5" target="_blank"> Ссылка на большой зеленый прямоугольник</a>
</br>
<a href ="http://localhost:8080/drawer.php?num=6" target="_blank"> Ссылка на маленький красный прямоугольник</a>
</br>
<a href ="http://localhost:8080/drawer.php?num=7" target="_blank"> Ссылка на большой красный прямоугольник</a>
</body>
</html>