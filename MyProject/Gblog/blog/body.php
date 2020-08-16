<?
ob_start();
session_start();
	@require("database_link.php");
	@require($database_link__document."/document_id.php");
	@require($database_link__document."/document_sort.php");
	@require($database_link__function."/all_word.php");	
	@require($database_link__function."/ctrl.php");
	@require($database_link__style."/ctrl_style.php");
	@require($database_link__function."/pass.php");//設定
	if($ctrl_blog_switch=='0'){
		if(!($_SESSION[open_login_id]==$blog_login_id && $_SESSION[open_login_pass]==$blog_login_pass)){
		echo '- 網站關閉中 -';
		exit();
		}
	}
?>


<?
if(in_array($_GET[pin],$document_id_pin)){
$num=array_search($_GET[pin],$document_id_pin);
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<META NAME="KeyWords" CONTENT="<?=$document_id_title[$num]?>">
<title><?=$ctrl_blog_name.' - '.$document_id_title[$num]?></title>
</head>
<body>
<?
if($_COOKIE[$document_id_pin[$num]]==$document_id_pw[$num]){
if($document_id_html[$num]>date('Ymd') && $_SERVER["REMOTE_ADDR"]!='127.0.0.1'){
echo '-無法讀取-';
exit();
}
	@require($database_link__style."/style_document.php");//樣式
	if(@in_array($document_id_style[$num],$style_document_pin)){
		$f_top=@file($database_link__style."/".$document_id_style[$num].'_top');
		for($i=0;$i<count($f_top);$i++)
			echo $f_top[$i];
	}
	$f=@file($database_link__document."/".$document_id_pin[$num]);
		for($i=0;$i<count($f);$i++){
			echo $f[$i];
		}//for
	
	
	if(@in_array($document_id_style[$num],$style_document_pin)){
		$f_down=@file($database_link__style."/".$document_id_style[$num].'_down');
		for($i=0;$i<count($f_down);$i++)
		echo $f_down[$i];
	}
}else{
echo '<form action="homepage_form.php" method="post">';
echo '<h3>Password <img src="images/a3.gif"></h3>';
echo '輸入密碼 : <input type="password" name="pw" size="8" maxlength="8">';
echo '<input type="hidden" name="pin" value="'.$_GET[pin].'">';//pin document_pw
echo '<input type="hidden" name="pinx" value="document_body_pw">';

echo '</form>'; 
}//if
?>
</body>
</html>
<?
}else{
echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';
echo all_word_homepage(20);
}
?>