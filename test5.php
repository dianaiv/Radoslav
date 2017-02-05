<?php
//Task 1
$m = 2;
$n = 3;
$a = [[5, 14, 2], [20, 9, 4]];
function print_arr($a, $m, $n){
	for ($i=0; $i < $m; $i++) { 
		for ($j=0; $j < $n; $j++) { 
			echo "a[" . $i . "][" . $j . "] = " . $a[$i][$j] . " ";
		}
		echo "<br>";
	}
}
print_arr($a, $m, $n);
// // task3
// function count_num($arr, $num){
// 	$res = 0;
// 	for ($i=0; $i < count($arr); $i++) { 
// 		if ($arr[$i] == $num) {
// 			$res++;
// 		}
// 	}
// 	if ($res != 0) {
// 		echo $res . "<br>";
// 	} else {
// 		echo "not in array<br>";
// 	}
// }
// $arr = [0, 4, 7, 0, 0, 0]  ;
// $num = 0;
// count_num($arr, $num);
//task3 new homework
$arr1 = [];
for ($i=0; $i < 10; $i++) { 
	for ($j=0; $j < 3; $j++) { 
		switch ($j) {
			case '0':
				$arr1[$i][$j] = "Headline $i";
				break;
			case '1':
				$arr1[$i][$j] = "Lorem $i ipsum dolor sit amet, consectetur adipisicing elit. Enim id laborum provident, alias recusandae nostrum soluta, in animi, dicta rerum et. Temporibus consectetur, harum id perspiciatis saepe molestias vitae sapiente.";
				break;
			default:
				$arr1[$i][$j] = "0$i.02.2017";
				break;
		}
	}
}
function print_news($arr1){
	$count = count($arr1)-1;
	for ($i=$count; $i > $count - 5; $i--) { 
		echo "<h1>" . $arr1[$i][0] . "</h1>";
		echo "<div>" . $arr1[$i][1] . "</div>";
		echo "<div>" . $arr1[$i][2] . "</div>";
	}

}
print_news($arr1);
//coments;
