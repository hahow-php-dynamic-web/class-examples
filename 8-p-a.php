<?php

// 給定一個變數 id，含有身份證字號的開頭英文字母（A～Z）。請用 switch-case 判斷該身份證的出生地。

$id = 'B'; // 應為台中市

switch($id){
	case 'A':
		echo "台北市";
		break;
	case 'B':
		echo "台中市";
		break;
	case 'C':
		echo "基隆市";
		break;
	case 'D':
		echo "台南市";
		break;
	case 'E':
		echo "高雄市";
		break;
	case 'F':
		echo "台北縣";
		break;
	case 'G':
		echo "宜蘭縣";
		break;
	
	default:
		echo "太多了，還沒寫完耶";
		break;
}

?>