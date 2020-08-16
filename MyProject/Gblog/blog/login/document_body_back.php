<?
	session_start();
	@require("../database_link.php");//資料夾連線
	@require("../$database_link__function/pass.php");//資料夾連線
	@require("../$database_link__style/ctrl_style.php");//資料夾連線
if($_SESSION[open_login_id]!=$blog_login_id || $_SESSION[open_login_pass]!=$blog_login_pass){
	echo '- 無法讀取 -';
	exit();
}
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?
@require("../$database_link__document/document_id.php");//資料夾連線
if(!@in_array($_GET[pin],$document_id_pin)){
	echo '很抱歉，找不到此文章。';
	exit();
}
if(is_file("../".$database_link__document."/".$_GET[pin])){
	$f=@file("../".$database_link__document."/".$_GET[pin]);
		for($i=0;$i<count($f);$i++){
			echo $f[$i];
		}//for
	echo '<div class="main_document_date">';
	echo date_change($document_id_end_date[array_search($_GET[pin],$document_id_pin)],$back_document_date);
	echo '</div>';
}else{
	echo '檔案已遺失...';
}
?>