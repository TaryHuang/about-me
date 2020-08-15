<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<?
if($user!='' && $pass!=''  && $pass_use_1!='' && $name!=''  && $pass_use_2!=''  && $database!=''){
$host="localhost";
$user="$user";
$pass="$pass";

$link=@mysql_connect($host,$user,$pass);

if($link!=False){

$open=fopen("password_loge.h","w+");
$namesss=$_POST[name];
$usersss=$_POST[user];
$passsss=$_POST[pass];
$database1222='IDF__'.$_POST[database];
$wright='<?
$user_mys_1="'.$usersss.'";
$pass_mys_2="'.$passsss.'";
$database_mys_3="'.$database1222.'";
?>
';


fputs($open,"$wright");
fclose($open);
//-------------------------------------



$sql_xo="CREATE DATABASE `$database1222` ";

include("cool.php");
sql_a($sql_xo);






//------------------------------------------------------------------

$sql_ooxx_1="
CREATE TABLE `bar` (
  `Num` varchar(22) NOT NULL default '',
  `name` varchar(100) NOT NULL default '',
  `Num_p2` varchar(10) NOT NULL default ''
) TYPE=MyISAM";

sql_a($sql_ooxx_1);

$sql_ooxx_1="CREATE TABLE `bar_all` (
  `Num` varchar(10) NOT NULL default '',
  `P_url` varchar(200) NOT NULL default '',
  `body` varchar(100) NOT NULL default '',
  `body_2` text NOT NULL,
  `body_num` varchar(10) NOT NULL default '',
  `body_num2` varchar(10) NOT NULL default '',
  `lider` text NOT NULL,
  `lider2` text NOT NULL,
  `true` varchar(10) NOT NULL default '',
  `a18` varchar(10) NOT NULL default '',
  `lv` varchar(10) NOT NULL default '',
  `good` varchar(200) NOT NULL default '',
  `pin_s` varchar(20) NOT NULL default '',
  `pin_bar` varchar(20) NOT NULL default ''
) TYPE=MyISAM";

sql_a($sql_ooxx_1);

$sql_ooxx_1="CREATE TABLE `bar_all_all` (
  `Num` varchar(20) NOT NULL default '',
  `title` text NOT NULL,
  `peo` text NOT NULL,
  `peo_num` varchar(20) NOT NULL default '',
  `peos_num` datetime NOT NULL default '0000-00-00 00:00:00',
  `good` varchar(20) NOT NULL default '',
  `body` text NOT NULL,
  `id` text NOT NULL,
  `ip` varchar(17) NOT NULL default '',
  `time` varchar(30) NOT NULL default '',
  `times` datetime NOT NULL default '0000-00-00 00:00:00',
  `bar` varchar(20) NOT NULL default '',
  `bar_all` varchar(100) NOT NULL default '',
  `true` varchar(20) NOT NULL default '',
  `numID` varchar(30) NOT NULL default '',
  `P_S` varchar(20) NOT NULL default ''
) TYPE=MyISAM";

sql_a($sql_ooxx_1);

$sql_ooxx_1="CREATE TABLE `bar_all_alls` (
  `num` varchar(30) NOT NULL default '',
  `name` varchar(30) NOT NULL default '',
  `qwqwqw` varchar(30) NOT NULL default '',
  `id` varchar(30) NOT NULL default '',
  `body` text NOT NULL,
  `time` varchar(40) NOT NULL default '',
  `times` datetime NOT NULL default '0000-00-00 00:00:00',
  `pin` varchar(10) NOT NULL default '',
  `true` varchar(10) NOT NULL default '',
  `in_http` varchar(30) NOT NULL default '',
  `barrrr` varchar(10) NOT NULL default '',
  `user_us` varchar(30) NOT NULL default ''
) TYPE=MyISAM";
sql_a($sql_ooxx_1);

$sql_ooxx_1="CREATE TABLE `e_mail` (
  `num` varchar(20) NOT NULL default '',
  `name` text NOT NULL,
  `name_2` text NOT NULL,
  `time` datetime NOT NULL default '0000-00-00 00:00:00',
  `title` text NOT NULL,
  `body` text NOT NULL,
  `true` varchar(20) NOT NULL default '',
  `uesr` varchar(20) NOT NULL default '',
  `pin_gs` varchar(20) NOT NULL default '',
  `ip` varchar(17) NOT NULL default '',
  `ddddd` varchar(30) NOT NULL default ''
) TYPE=MyISAM";
sql_a($sql_ooxx_1);

$sql_ooxx_1="CREATE TABLE `e_mails` (
  `num` varchar(20) NOT NULL default '',
  `uesr` varchar(30) NOT NULL default '',
  `title` text NOT NULL,
  `body` text NOT NULL
) TYPE=MyISAM";

sql_a($sql_ooxx_1);
$sql_ooxx_1="CREATE TABLE `f_s` (
  `num` varchar(20) NOT NULL default '',
  `name` text NOT NULL,
  `name2` text NOT NULL,
  `user` varchar(30) NOT NULL default '',
  `user2` varchar(30) NOT NULL default '',
  `pin` varchar(33) NOT NULL default ''
) TYPE=MyISAM";
sql_a($sql_ooxx_1);

$sql_ooxx_1="CREATE TABLE `lea_user` (
  `num` varchar(20) NOT NULL default '',
  `user` text NOT NULL,
  `true_now` timestamp(14) NOT NULL,
  `false_time` timestamp(14) NOT NULL,
  `day_time_now` datetime NOT NULL default '0000-00-00 00:00:00',
  `user_num` text NOT NULL,
  `mmqw` varchar(100) NOT NULL default '',
  `fqewqw` text NOT NULL,
  `daysssss` varchar(10) NOT NULL default ''
) TYPE=MyISAM";
sql_a($sql_ooxx_1);

$sql_ooxx_1="CREATE TABLE `my_f_word` (
  `Num` varchar(30) NOT NULL default '',
  `Num_http` varchar(30) NOT NULL default '',
  `user` varchar(50) NOT NULL default '',
  `bar_num` varchar(20) NOT NULL default ''
) TYPE=MyISAM";
sql_a($sql_ooxx_1);


$sql_ooxx_1="CREATE TABLE `myfalsh_over` (
  `Q_A` varchar(10) NOT NULL default '',
  `true` varchar(10) NOT NULL default '',
  `logo` text NOT NULL,
  `title_x` varchar(10) NOT NULL default '',
  `title_y` varchar(10) NOT NULL default '',
  `body_x` varchar(10) NOT NULL default '',
  `body_y` varchar(10) NOT NULL default '',
  `logo_x` varchar(10) NOT NULL default '',
  `logo_y` varchar(10) NOT NULL default '',
  `logo_width` varchar(10) NOT NULL default '',
  `logo_height` varchar(10) NOT NULL default '',
  `true_text` text NOT NULL,
  `color_http` text NOT NULL,
  `color_s` varchar(20) NOT NULL default '',
  `my_word` text NOT NULL,
  `my_http_name` text NOT NULL,
  `colosaar` varchar(10) NOT NULL default '',
  `true_logos` varchar(20) NOT NULL default '',
  `body_color_2` varchar(20) NOT NULL default '',
  `body_color_5` varchar(20) NOT NULL default '',
  `my_body_color` text NOT NULL
) TYPE=MyISAM;";

sql_a($sql_ooxx_1);

$sql_ooxx_1="CREATE TABLE `pass` (
  `Num` varchar(20) NOT NULL default '',
  `user` varchar(30) NOT NULL default '',
  `pass` varchar(30) NOT NULL default '',
  `name` text NOT NULL,
  `boy_girl` varchar(10) NOT NULL default '',
  `email` text NOT NULL,
  `birsday_1` varchar(8) NOT NULL default '',
  `birsday_2` varchar(6) NOT NULL default '',
  `birsday_3` varchar(6) NOT NULL default '',
  `Q_` varchar(5) NOT NULL default '',
  `A_` text NOT NULL,
  `from` text NOT NULL,
  `my_HTTP` text NOT NULL,
  `W` text NOT NULL,
  `INT` text NOT NULL,
  `JOB` varchar(100) NOT NULL default '無',
  `P_URL` text NOT NULL,
  `Lv100` varchar(30) NOT NULL default '',
  `come_num` varchar(100) NOT NULL default '1',
  `win` varchar(20) NOT NULL default '',
  `kkss1` varchar(20) NOT NULL default '',
  `kkss2` varchar(20) NOT NULL default '',
  `kkss3` varchar(20) NOT NULL default '',
  `landtime` varchar(30) NOT NULL default '',
  `true_name` text NOT NULL,
  `pho_num` text NOT NULL,
  `p_url_2` varchar(5) NOT NULL default '',
  `p_size` varchar(10) NOT NULL default '',
  `P_true` varchar(10) NOT NULL default ''
) TYPE=MyISAM";

sql_a($sql_ooxx_1);

$sql_ooxx_1="INSERT INTO `pass` VALUES ('999', '$pass_use_1', '$pass_use_2', '$namesss', '男生', '', ' ---- ', '99', '99', '3', '', '台灣', '', '', '', '管理員(最高權限)', '', NOW(), '0', '開', '3', '1', '0', NOW(), '管理員', '', '2', '11', '0');
";
sql_a($sql_ooxx_1);


$sql_ooxx_1="INSERT INTO `myfalsh_over` VALUES ('論壇系統', '#990000', 'http://', '0', '55', '235', '55', '22', '22', '200', '200', '#999999', '', '#666666', '版權語:請自行修改', '網站名稱', '#FFCC00', '0', '#999999', '#FFFFFF', 'im/72.gif');
";


sql_a($sql_ooxx_1);
//------------------------------------------




















header('location:logets.php');
}else{

header('location:index.php?worry=2006');
}//if


}else{
header('location:index.php?worry=1955');
}//end  假如資料有填滿

?>