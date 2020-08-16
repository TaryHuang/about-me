<?

include('alls/date_login.php');
if($____login_time>date("YmdHis") && $____login_ip==$REMOTE_ADDR){

//判定是否給予進入
?>
<?
include('all_function.php');
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>選單</title>
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_reloadPage(init) {  //reloads the window if Nav4 resized
  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
    document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
  else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
}
MM_reloadPage(true);
//-->
</script>
<style type="text/css">
<!--
body {
	SCROLLBAR-FACE-COLOR: #fcb400;
	SCROLLBAR-3DLIGHT-COLOR: #d8006c;
	SCROLLBAR-ARROW-COLOR: #d8fcfc;
	background-image: url();
}
body,td,th {
	font-size: 12px;
	color: #000000;
    
}
a:link {
	color: #6699FF;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
	color: #990000;
}
a:active {
	text-decoration: none;
}
.style3 {font-size: 12pt}
-->

</style>
<link href="css/back_left.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="body" style="position:absolute; left:5px; top:0; width:106px; height:11px; z-index:1">
  <div id="return" style="position:absolute; left:242px; top:6px; width:61px; height:15px; z-index:3; overflow: hidden;">
    <div align="right"><a href="login_bodys.php" target="miss">即時報</a> </div>
  </div>
  <div class="left___div_9_1">網站訊息&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="login_bodys.php?ppiinnss=1" target="miss">編輯首頁</a>
    <div class="left__div_9_2">
	<?
	include("alls/bug_.php");
	$numbers_go=0;
	for($i=(count($bug___ip_u)-1);$i>-1;$i--){
	$numbers_go++;
	echo '[<font style="color:#666666">'.$bug___ip_u[$i].'</font>]&nbsp;&nbsp;<font style="color:#666666">'.$bug___time_u[$i].'</font><br>&there4;<font style="color:#990000">'.$bug___word_u[$i].'</font><br>';
	if($numbers_go>=8){
	$numbers_go=-1;
	}
	}//end show出前8個
	?></div>
  </div>
  <div id="left2" style="position:absolute; left:0px; top:105px; width:178px; height:350px; z-index:1; overflow: auto;">
  <?
  $show_array_body=new show_et;
  //---------我的留言版--多少分類 就多少留言版 所以要for
include('alls/add_121_a.php');
for($i=0;$i<count($arrays_value__1);$i++){
for($k=$i+1;$k<count($arrays_value__1);$k++){
if($arrays_value__1[$i]>$arrays_value__1[$k]){
$box_s0=$arrays_value__0[$i];
$box_s1=$arrays_value__1[$i];
$box_s2=$arrays_value__2[$i];
$box_send=$arrays_value__end[$i];
$arrays_value__0[$i]=$arrays_value__0[$k];
$arrays_value__1[$i]=$arrays_value__1[$k];
$arrays_value__2[$i]=$arrays_value__2[$k];
$arrays_value__end[$i]=$arrays_value__end[$k];
$arrays_value__0[$k]=$box_s0;
$arrays_value__1[$k]=$box_s1;
$arrays_value__2[$k]=$box_s2;
$arrays_value__end[$k]=$box_send;
}//if
}
}//for 換
$show_array_body->show_arrays5('討論區',$arrays_value__2,$arrays_value__1,$arrays_value__0,$arrays_value__end,'css');

  
  ?>
  <br>
</div>

  <div id="left" style="position:absolute; left:190px; top:27px; width:120px; height:455px; z-index:1; overflow: auto;">

<?


//---------我的文章
$show_arrary__name=array('文章分類 [新增]','文章分類 [編輯]','我的文章 [新增]','我的文章 [編輯]');//名稱
$show_arrary__http=array('login_bodys.php?ppiinnss=121','login_bodys.php?ppiinnss=148','login_bodys.php?ppiinnss=184','login_bodys.php?ppiinnss=179');//連結
$show_array_body->show_arrays4('我的文章',$show_arrary__name,$show_arrary__http,'css');
//---------系統管理
$show_arrary__name=array('儲存樣版 [新增]','儲存樣版 [編輯]','儲存樣版 [套用]');//名稱
$show_arrary__http=array('login_bodys.php?ppiinnss=312','login_bodys.php?ppiinnss=315','login_bodys.php?ppiinnss=319');//連結
$show_array_body->show_arrays4('Blog樣版',$show_arrary__name,$show_arrary__http,'css');
//---------系統管理
$show_arrary__name=array('Blog控制 [中心]','個人資料 [更改]','Blog密碼 [更改]');//名稱
$show_arrary__http=array('login_bodys.php?ppiinnss=424','login_bodys.php?ppiinnss=434','login_bodys.php?ppiinnss=335');
$show_array_body->show_arrays4('系統管理',$show_arrary__name,$show_arrary__http,'css');
//------信箱
$show_arrary__name=array('個人信箱 [投訴]','系統信箱 [訊息]');//名稱
$show_arrary__http=array('login_bodys.php?ppiinnss=535','login_bodys.php?ppiinnss=531');//連結
$show_array_body->show_arrays4('我的信箱',$show_arrary__name,$show_arrary__http,'css');

?>
</div>
</div>
</body>
</html>
<?
}else{
if($____login_time>date("YmdHis")){
echo '請重新登入..';
}else{
echo '已無法登入';
}
}
?>