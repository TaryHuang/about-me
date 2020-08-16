<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?
	@require("../database_link.php");
	@require("../".$database_link__function."/all_word.php");
?>
<?
function say_go($word,$url){
	echo'<script language="javascript">
	alert("'.$word.'");
	location.href("'.$url.'");
	</script>';
}
function say_back($word){
	echo'<script language="javascript">
	alert("'.$word.'");
	history.go(-1);
	</script>';
}
?>



<?
if($_GET[loc]=="10")
	say_go(all_str_send(10),"./?action=text_sort&sort=".$_GET[value]);//新增文章 
else if($_GET[loc]=="11")
	say_go(all_str_send(11),"./?action=text_sort&sort=".$_GET[value]);//刪除文章 
else if($_GET[loc]=="12")
	say_go(all_str_send(12),"./?action=text_sort&sort=".$_GET[value]);//編輯文章 
else if($_GET[loc]=="20")
	say_go(all_str_send(20),"./?action=updata_style");//系統管理 成功 
else if($_GET[loc]=="21")
	say_go(all_str_send(21),"./?action=ctrl");//系統管理 成功 
else if($_GET[loc]=="00")
	say_go(all_str_send(00),"./");//成功登入
else if($_GET[loc]=="01")
	say_back(all_str_send(01));//登入失敗 
else if($_GET[loc]=="02")
	say_back(all_str_send(02));//字元錯誤
else if($_GET[loc]=="03")
	say_back(all_str_send(03));//系統錯誤
else if($_GET[loc]=="04")
	say_back(all_str_send(04));//登入達五次
else if($_GET[loc]=="05")
	say_back(all_str_send(05));//您無法進入
else if($_GET[loc]=="06")
	say_back(all_str_send(06));//您無法進入
else if($_GET[loc]=="17")
	say_back(all_word_homepage(17));
else if($_GET[loc]=="30")
	say_go(all_str_send(30),"./");//更新style
else if($_GET[loc]=="31")
	say_go(all_str_send(31),"./?action=updata_sort");//更新排序分類
else if($_GET[loc]=="32")
	say_go(all_str_send(32),"./?action=text");//新增分類
else if($_GET[loc]=="33")
	say_go(all_str_send(33),"./?action=text_sort&sort=".$_GET[value]);//編輯分類
else if($_GET[loc]=="34")
	say_go(all_str_send(34),"./?action=text");//刪除分類
else if($_GET[loc]=="35")
	say_go(all_str_send(35),"./?action=show_document&pin=".$_GET[value]);//回覆留言
else if($_GET[loc]=="36")
	say_go(all_str_send(36),"./?action=show_document&pin=".$_GET[value]);//編輯回覆留言
else if($_GET[loc]=="37")
	say_go(all_str_send(37),"./?action=show_document&pin=".$_GET[value]);//編輯回覆留言
else if($_GET[loc]=="38")
	say_go(all_str_send(38),"./?action=setup");//完成安裝
else if($_GET[loc]=="39")
	say_go(all_str_send(39),"./?action=setup");//卸下安裝
else if($_GET[loc]=="40")
	say_go(all_str_send(40),"./?action=updata_style2");//版面模組
else if($_GET[loc]=="41")
	say_go(all_str_send(41),"./?action=rss");//rss
else if($_GET[loc]=="42")
	say_go(all_str_send(42),"./?action=rss");//rss
else if($_GET[loc]=="43")
	say_go(all_str_send(43),"./?action=rss_read&pin=".$_GET[value]);//rss
else if($_GET[loc]=="44")
	say_go(all_str_send(44),"./");
else if($_GET[loc]=="45")
	say_go(all_str_send(45),"./");
else if($_GET[loc]=="46")
	say_go(all_str_send(46),"./?action=updata_style2_div");
else if($_GET[loc]=="47")
	say_go(all_str_send(47),"./?action=updata_style2_div");
else if($_GET[loc]=="48")
	say_go(all_str_send(48),"./?action=updata_style2_div");
else
	say_back("找不到您要的路徑!");

?>