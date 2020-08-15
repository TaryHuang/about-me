<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>資料庫狀態</title>
</head>
<body>
<?
if($_SERVER['REMOTE_ADDR']=='127.0.0.1'){
	if(is_file('database_link.php')){
		include('database_link.php');
	echo '<a href="./" target="_self">[回首頁]</a><BR><BR>';
if(is_file('config.php')){
$del_config='尚未刪除 - 請自行刪除 <b>config.php</b> 檔案';
}else{
$del_config='已刪除';
}	

	echo '關於本系統';
	echo '<ol>';
	echo '版本 : '.$this_blog_model.'<BR>';
	echo '出場 : '.date_change($this_blog_birthday,4).'<BR>';
	echo '服務網址 : http://www.gblog.idv.tw/'.'<BR>';
	echo '安裝檔案 : '.$del_config.'<BR>';
	echo '安裝日期 : '.date_change($this_user_day,4);
	echo '</ol>';


	
function links($url,$str){

	if(is_dir($url)){
		return $str.' - 連線正常';
	}else{
		return $str.' - 找不到指定目錄 - ( '.$url.' )';
	}
}
		echo '資料庫連線狀態';
	echo '<ol>';
	echo links($database_link__login,"登入時").'<BR>';
	echo links($database_link__document,"我的文章").'<BR>';
	echo links($database_link__message,"留言回覆").'<BR>';
	echo links($database_link__function,"系統程式").'<BR>';
	echo links($database_link__style,"系統樣式").'<BR>';
	echo links($database_link__div,"版面樣式").'<BR>';
	echo links($database_link__free,"安裝模組").'<BR>';
	echo '</ol>';
	}else{
	echo 'database_link.php 檔案 已遺失...';
	}
}else{
	echo '- 無法讀取 -';
}
?>
</body>
</html>
