<?php
session_start();
	@require("../database_link.php");//資料夾連線
	@require("../".$database_link__function."/back_fun.php");//連線FUN
	@require("../".$database_link__function."/all_word.php");//文字
	@require("../".$database_link__function."/ctrl.php");//設定
	@require("../".$database_link__function."/pass.php");//設定
	@require("../".$database_link__div."/div_ctrl.php");//設定
	@require("../".$database_link__div."/div_pin.php");//設定
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?=$ctrl_blog_name?></title>
</head>
<link href="../css.php?loc=back" rel="stylesheet" type="text/css">
<script type="text/javascript" src="../javascript.js"></script>


<body>
<?
if($_SESSION[open_login_id]==$blog_login_id && $_SESSION[open_login_pass]==$blog_login_pass){
?>
<div class="right_button">
<a href="../" target="_self">[回首頁]</a>
</div>

<?
if($back_top_chk==1){
echo '<div class="top">';
for($i=0;$i<count($div__pin);$i++){
	if($div__loc[$i]=='top' && $div__sort[$i]=='0'){
	if(is_file("../".$database_link__div."/".$div__pin[$i])){
		file_show("../".$database_link__div."/".$div__pin[$i]);
	}else{
	echo '<h3>檔案已遺失...</h3>';
	}
	}
}
echo '</div>';
}
?>


<div class="center">
<div class="menu">
<div class="menu_one">
<?
//選單
echo '<ol class="menu_one_ol"><a href="./">[選單]</a>';
show_back_menu(all_word_back(10),all_word_back(101));
echo '</ol>';
?>
</div>
	<?
	if($back_menu2_chk==1){
	echo '<div class="menu_two">';
for($i=0;$i<count($div__pin);$i++){
		if($div__loc[$i]=='menu2' && $div__sort[$i]=='0'){
		if(is_file("../".$database_link__div."/".$div__pin[$i])){
			file_show("../".$database_link__div."/".$div__pin[$i]);
		}else{
		echo '<h3>檔案已遺失...</h3>';
		}
		}
}	
	echo '</div>';
	}
	?>
</div>

<div class="main" id="index_div">
<?
$action=$_GET["action"];
if($action=="text")
	show_back_main_text();//文章管理
else if($action=="text_sort")
	show_back_main_text_sort($_GET['sort'],$_GET['page']);//秀出選單文章
else if($action=="show_document"){

echo '<script language = "javascript">';
echo 'var pin="'.$_GET[pin].'";';
echo '</script>';
show_document($_GET[pin],$_GET[page]);//顯示文章

}else if($action=="add_document")
	show_back_main_add_document($_GET['sort']);
else if($action=="updata_document_check")
	show_back_main_updata_document_check($_GET['pin']);
else if($action=="updata_document")
	show_back_main_updata_document($_GET['pin']);
else if($action=="updata_style2")
	show_updata_style2();
else if($action=="updata_style2_div")
	show_updata_div();
else if($action=="show_add_div")
	show_add_div();
else if($action=="show__div")
	show__div($_GET[pin]);
else if($action=="updata_div")
	updata_div($_GET[pin]);
else if($action=="message")
	show_back_main_message();
else if($action=="rss")
	show_back_rss();
else if($action=="add_rss")
	show_add_rss();
else if($action=="rss_read")
	show_rss_read($_GET['pin']);
else if($action=="rss_updata")	
	show_updata_rss($_GET['pin']);
else if($action=="style")
	show_back_main_style_menu(all_word_back(20),all_word_back(201));
else if($action=="reply_message")
	reply_message_updata($_GET['pin']);
else if($action=="updata_sort")
	show_back_main_updata_sort();
else if($action=="add_sort")
	show_back_main_add_sort();
else if($action=="updatas_sort")
	show_back_main_updatas_sort($_GET['sort']);
else if($action=="del_sort")
	show_back_main_del_sort($_GET['sort']);		
else if($action=="updata_style")
	show_back_main_updata_style();
else if($action=="ctrl")
	show_back_main_ctrl();
else if($action=="setup")
	show_back_setup();
else if($action=="setup_add")
	show_back_setup_add();
else if($action=="setup_check")
	show_back_setup_check($_GET['pin']);
else if($action=="del_setup")	
	del_setup($_GET['pin']);
else{
		echo '<script>loadData(\'index_back.php\', \'index_div\');</script>';
}
?>
</div>
</div>
<?

if($back_down_chk==1){
echo '<div class="down">';
for($i=0;$i<count($div__pin);$i++){
		if($div__loc[$i]=='down' && $div__sort[$i]=='0'){
		if(is_file("../".$database_link__div."/".$div__pin[$i])){
			file_show("../".$database_link__div."/".$div__pin[$i]);
		}else{
		echo '<h3>檔案已遺失...</h3>';
		}
		}
}
echo '</div>';
}
?>
<?
}else{
	if($ctrl_blog_host==1 || $_SERVER['REMOTE_ADDR']=='127.0.0.1'){
?>
<form action="file_form.php" method="post" >
<div class="login">登入
<DIV class="login_id"> 帳號 : <input name="id" type="text" size="8" maxlength="15" style="font-size:12px"> </div>
<DIV class="login_pass"> 密碼 : <input name="pass" type="password" size="12" maxlength="15" style="font-size:12px"> </div>
<div class="right"><input name="pin_x" type="hidden" value="login"><input  type="submit" value="登入" ></div>
</div>
</form>
<?
	}else{
	echo "無法登入!!";
	}
}
?>
</body>
</html>
