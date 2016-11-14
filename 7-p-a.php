<?php

// 給定一個變數 id，含有身份證字號的開頭英文字母（A～Z）。請用 if-else 判斷該身份證的出生地。

$id = 'B'; // 應為台中市

if($id == 'A'){
	echo "台北市";
}
elseif($id == 'B'){
	echo "台中市";
}
elseif($id == 'C'){
	echo "基隆市";
}
elseif($id == 'D'){
	echo "台南市";
}
elseif($id == 'E'){
	echo "高雄市";
}
elseif($id == 'F'){
	echo "台北縣";
}
elseif($id == 'G'){
	echo "宜蘭縣";
}
else{
	echo "太多了，還沒寫完耶";
}

?>