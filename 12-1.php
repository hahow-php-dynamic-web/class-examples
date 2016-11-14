<?php

// 宣告一個函式稱為 id_birth，傳入身份證英文字母，會回傳出生地點中文字串。
function id_birth($id){
	switch($id){
		case 'A':
			return "台北市";
			break;
		case 'B':
			return "台中市";
			break;
		case 'C':
			return "基隆市";
			break;
		case 'D':
			return "台南市";
			break;
		case 'E':
			return "高雄市";
			break;
		case 'F':
			return "台北縣";
			break;
		case 'G':
			return "宜蘭縣";
			break;
		
		default:
			return "太多了，還沒寫完耶";
			break;
	}
}

// 呼叫 id_birth，並傳入 B（台中市）
$placeA = id_birth('B');
echo "$placeA <br>";

echo id_birth('G');

?>