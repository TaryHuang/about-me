<?
	ob_start();
	@require("database_link.php");
	@require($database_link__function."/ctrl.php");
	
	if($ctrl_blog_switch=='0' && $_SERVER["REMOTE_ADDR"]!='127.0.0.1'){
	echo '- 無法讀取 -';
	exit();
	}
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?
	@require($database_link__document."/document_id.php");//資料夾連線
if(!@in_array($_GET[pin],$document_id_pin)){
	echo '很抱歉，找不到此文章。';
	exit();
}
if(!($_COOKIE[$_GET[pin]]==$document_id_pw[array_search($_GET[pin],$document_id_pin)]) || $document_id_html[array_search($_GET[pin],$document_id_pin)]>date('Ymd')){
	echo '- 無法讀取 -';
	exit();
}
if(is_file($database_link__document."/".$_GET[pin])){
	@require($database_link__style."/ctrl_style.php");

	$f=@file($database_link__document."/".$_GET[pin]);
		for($i=0;$i<count($f);$i++){
			echo $f[$i];
		}//for
	echo '<div class="main_document_date">';
	echo date_change($document_id_end_date[array_search($_GET[pin],$document_id_pin)],$homepage_document_date);
	echo '</div>';
	
}else{
echo '檔案已遺失...';
}
?>
