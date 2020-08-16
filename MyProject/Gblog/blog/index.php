<?php
	ob_start();
	@require("database_link.php");//資料夾連線
	@require($database_link__function."/homepage_fun.php");//FUN
	@require($database_link__function."/all_word.php");//文字
	@require($database_link__function."/ctrl.php");//控制
	@require($database_link__style."/ctrl_style.php");//控制
	@require($database_link__div."/div_ctrl.php");//控制
	@require($database_link__div."/div_pin.php");//控制
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<META NAME="KeyWords" CONTENT="<?=$ctrl_blog_name?>">
<link rev="made" href="http://www.gblog.idv.tw/">
<title>
<?
echo $ctrl_blog_name;
if(!empty($_GET[pin])){
	@require($database_link__document."/document_id.php");
	if(in_array($_GET[pin],$document_id_pin)){
		$show_title_num=array_search($_GET[pin],$document_id_pin);
	echo ' - '.$document_id_title[$show_title_num];
	}
}
?></title>
<link href="css.php" rel="stylesheet" type="text/css">
<script type="text/javascript" src="javascript.js"></script>
</head>
<body>

<div class="right_button">
<?
if(($_SERVER['REMOTE_ADDR']=='127.0.0.1' && $ctrl_blog_host=="0") || ($ctrl_blog_host=="1")){
	echo '<a href="'.$database_link__login.'/" target="_self">[登入]</a>';
}
?>
</div>

<?
if($ctrl_blog_switch==1){
?>

<?
if($homepage_top_chk==1){
echo '<div class="top">';
for($i=0;$i<count($div__pin);$i++){
		if($div__loc[$i]=='top' && $div__sort[$i]=='1'){
		if(is_file($database_link__div."/".$div__pin[$i])){
			file_show($database_link__div."/".$div__pin[$i]);
		}else{
		echo '<h3>檔案已遺失...</h3>';
		}
		}
}
echo '</div>';
}
?>



<div class="center">
<?
if($homepage_menu_chk==1 || $homepage_menu2_chk==1){
echo '<div class="menu">';

	if($homepage_menu_chk==1){
		echo '<div class="menu_one">';
		show_homepage_document_sort();
		echo '</div>';
		}

	if($homepage_menu2_chk==1){
	echo '<div class="menu_two">';
for($i=0;$i<count($div__pin);$i++){
		if($div__loc[$i]=='menu2' && $div__sort[$i]=='1'){
		if(is_file($database_link__div."/".$div__pin[$i])){
			file_show($database_link__div."/".$div__pin[$i]);
		}else{
		echo '<h3>檔案已遺失...</h3>';
		}
		}
}//for
	echo '</div>';
	}

echo '</div>';
}
?>

<div class="main" id="index_div">
<?
//::主身體::
if($_GET[action]=="sort"){
	show_homepage_document_menu($_GET[sort],$_GET[page]);//文章選取單
}else{
		if($_GET[pin]){
//::文章SHOW出		
@require($database_link__document."/document_id.php");
@require($database_link__document."/document_sort.php");

		if(@in_array($_GET[pin],$document_id_pin)){		
$num=array_search($_GET[pin],$document_id_pin);
if($_COOKIE[$document_id_pin[$num]]==$document_id_pw[$num]){
?>
<?
echo '<script language = "javascript">';
echo 'var pin="'.$_GET[pin].'";';
echo 'var usehtml="'.$document_id_html[$num].'";';
echo '</script>';
if($document_sort_hidden[array_search($document_id_sort[$num],$document_sort_pin)]==1){
echo '<div class="right"><a href="?action=sort&sort='.$document_id_sort[$num].'&page='.$_GET[page].'"> 返回 </a></div>';
}
echo '<div class="main_title">'.$document_id_title[$num].'</div>';
?>
<div id="document_div" class="main_document">
<?	
	if($homepage_show_document_switch=='0'){
	if(date('Ymd')>=$document_id_html[$num]){
	file_show($database_link__document.'/'.$document_id_pin[$num]);
	echo '<div class="main_document_date">';
	echo date_change($document_id_end_date[$num],$homepage_document_date);
	echo '</div>';
	}else{
	echo '- 無法讀取 -';
	}
	}else{
		echo '<a href="#" onClick=loadData('."'".'document_body.php?html='."'".'+usehtml+'."'".'&pin='."'".'+pin,'."'".'document_div'."'".');>展開文章 <img src="images/a1.jpg" border="0"></a>';
	}//
?>
</div>


<div id="message_div" class="main_message">
<?	
	if($homepage_show_message_switch=='0'){
?>
		<script> loadData('leave_message.php?pin='+pin, 'message_div');</script>
<?
	}else{
		echo '<a href="#" onClick=loadData('."'".'leave_message.php?pin='."'".'+pin,'."'".'message_div'."'".');>展開留言 <img src="images/a1.jpg" border="0"></a>';
	}//
?>
</div>

<?
		if($document_id_open_message[$num]==1){
		leave_message($_GET[pin]);
		}
}else{
echo '<form action="homepage_form.php" method="post">';
echo '<div class="right"><a href="javascript:history.go(-1);"> 返回 </a></div>';
echo '<H3>Password <img src="images/a3.gif"></H3>';
echo '輸入密碼 : <input type="password" name="pw" size="8" maxlength="8">';
echo '<input type="hidden" name="pin" value="'.$_GET[pin].'">';//pin document_pw
echo '<input type="hidden" name="pinx" value="document_pw">';
echo '</form>'; 
}//if


		}else{
		echo all_word_homepage(20);
		}//文章不存在
	}else{
		echo '<script>loadData(\'index_homepage.php\', \'index_div\');</script>';
	}
}

?>
</div>

</div>


<?
if($homepage_down_chk==1){
echo '<div class="down">';
for($i=0;$i<count($div__pin);$i++){
		if($div__loc[$i]=='down' && $div__sort[$i]=='1'){
			if(is_file($database_link__div."/".$div__pin[$i])){
				file_show($database_link__div."/".$div__pin[$i]);
			}else{
			echo '<h3>檔案已遺失...</h3>';
			}
		}
}//FOR
echo '</div>';
}
?>


<?
}else{
echo $ctrl_blog_switch_say;
}
?>




</body>
</html>
