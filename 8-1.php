<?php

// 獲得今天的日期，並將 Monday/Tuesday/.../Sunday 存放於 wday 變數中
date_default_timezone_set("Asia/Taipei");
$today = getdate();
$wday = $today['weekday'];

// 依照不同的星期顯示繞口令
switch($wday){
	case 'Monday':
		echo "星期一，猴子穿新衣";
		break;
	
	case 'Tuesday':
		echo "星期二，猴子肚子餓";
		break;

	case 'Wednesday':
		echo "星期三，猴子去爬山";
		break;

	case 'Thursday':
		echo "星期四，猴子看電視";
		break;

	case 'Friday':
		echo "呈期五，猴子去跳舞";
		break;

	case 'Saturday':
		echo "星期六，猴子去斗六";
		break;

	default:
		echo "星期日，猴子過生日";
		break;
}

?>