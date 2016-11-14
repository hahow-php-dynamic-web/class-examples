<?php

// 獲得今天的日期，並將 Monday/Tuesday/.../Sunday 存放於 wday 變數中
date_default_timezone_set("Asia/Taipei");
$today = getdate();
$wday = $today['weekday'];

// 依照不同的星期顯示繞口令
if($wday == 'Monday'){
	echo "星期一，猴子穿新衣";
}
elseif($wday == 'Tuesday'){
	echo "星期二，猴子肚子餓";
}
elseif($wday == 'Wednesday'){
	echo "星期三，猴子去爬山";
}
elseif($wday == 'Thursday'){
	echo "星期四，猴子看電視";
}
elseif($wday == 'Friday'){
	echo "星期五，猴子去跳舞";
}
elseif($wday == 'Saturday'){
	echo "星期六，猴子去斗六";
}
else{
	echo "星期日，猴子過生日";
}

?>