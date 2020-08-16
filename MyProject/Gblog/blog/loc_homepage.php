<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?
	@require("database_link.php");
	@require($database_link__function."/all_word.php");

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
	if($_GET[loc]=="3"){
		if($_SERVER['REMOTE_ADDR']=='127.0.0.1'){
			@unlink('config.php');
			say_go(all_word_homepage('3'),'./cd_link.php');
		}else{
			say_back('Error !!');
		}
	}else if($_GET[loc]=="10")
		say_back(all_word_homepage(10));
	else if($_GET[loc]=="11")
		say_back(all_word_homepage(11));
	else if($_GET[loc]=="12")
		say_back(all_str_send(02));
	else if($_GET[loc]=="13")
		say_go(all_word_homepage(13),"./?pin=".$_GET[value]);
	else if($_GET[loc]=="14")
		say_go(all_word_homepage(14),"./?pin=".$_GET[value]);
	else if($_GET[loc]=="15")
		say_back(all_word_homepage(15));
	else if($_GET[loc]=="16")
		say_back(all_word_homepage(16));
	else if($_GET[loc]=="17")
		say_back(all_word_homepage(17));
	else if($_GET[loc]=="18")
		say_go(all_word_homepage(18),'./');
	else if($_GET[loc]=="20")
		say_go(all_word_homepage(0),'./');
	else
		say_back('Error !');
?>