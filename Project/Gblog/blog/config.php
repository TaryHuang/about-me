<?
if($_POST[pinx]=='config' && $_SERVER["REMOTE_ADDR"]=='127.0.0.1'){
	
function chk_value($str,$fun_num,$a1=4,$an=15){
switch($fun_num){
case 1:$fun="^[a-zA-Z0-9_]{".$a1.",".$an."}$";break;//請輸入英文或數字 6~15個字 可做申請帳號
default:$fun="^$";
}
	if(ereg($fun,$str)){
	return true;
	}else{
	return false;
	}
}//傳回true/false



if(chk_value($_POST[id],1) && chk_value($_POST[pw],1) && chk_value($_POST[pw2],1)&&chk_value($_POST[login],1,1,30)){
if($_POST[pw]!=$_POST[pw2]){
echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';
echo '<h3>很抱歉，您所輸入的密碼有誤！ <a href="#" onClick="history.go(-1)">[返回]</a></h3>';
exit();
}
ob_start();
$md5_nums=rand(0,15);
function md5_config($num,$a1,$an=0){
if($an==2)
$r=10;
else if($an==3)
$r=15;
else
$r=5;
return substr (md5($num),$a1,$r);
}


$pwt=md5_config($_POST[pw],$md5_nums,3);
$f=fopen("function/pass.php","w+");
fputs($f,"<? \r\n");
fputs($f,'$blog_login_id="'.$_POST[id].'";');
fputs($f,'$blog_login_pass="'.$pwt.'";');
fputs($f,"\r\n ?>");
fclose($f);


$f=fopen("database_link.php","a+");
fputs($f,"<? \r\n");
$w_document="document__".md5_config(rand(1000,9000),$md5_nums,$_POST[lv]);
$w_message="message__".md5_config(rand(1000,9000),$md5_nums,$_POST[lv]);
$w_style="style__".md5_config(rand(1000,9000),$md5_nums,$_POST[lv]);
$w_function="function__".md5_config(rand(1000,9000),$md5_nums,$_POST[lv]);
$w_free="free__".md5_config(rand(1000,9000),$md5_nums,$_POST[lv]);
$w_div="div__".md5_config(rand(1000,9000),$md5_nums,$_POST[lv]);

@rename("document","$w_document");
@rename("message","$w_message");
@rename("style","$w_style");
@rename("function","$w_function");
@rename("free","$w_free");
@rename("document","$w_document");
@rename("div","$w_div");
@rename("login",$_POST[login]);
fputs($f,'$database_link__document="'.$w_document.'"; ');
fputs($f,"\r\n");
fputs($f,'$database_link__message="'.$w_message.'"; ');
fputs($f,"\r\n");
fputs($f,'$database_link__style="'.$w_style.'"; ');
fputs($f,"\r\n");
fputs($f,'$database_link__function="'.$w_function.'";');
fputs($f,"\r\n");
fputs($f,'$database_link__free="'.$w_free.'"; ');
fputs($f,"\r\n");
fputs($f,'$database_link__div="'.$w_div.'"; ');
fputs($f,"\r\n");
fputs($f,'$database_link__login="'.$_POST[login].'"; ');
fputs($f,"\r\n");
fputs($f,'$this_blog_md5="'.$md5_nums.'"; ');
fputs($f,"\r\n");
fputs($f,'$this_user_day="'.date("Ymd").'"; ');
fputs($f,"\r\n");
fputs($f,"\r\n ?>");
fclose($f);
		header('location:loc_homepage.php?loc=3');
		}else{
echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';
echo '<h3>很抱歉，您輸入的資料有誤！ <a href="#" onClick="history.go(-1)">[返回]</a></h3>';
		exit();
		}
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>安裝模式</title>
</head>
<link href="style/style.css" rel="stylesheet" type="text/css">
<body>
<?
if($_SERVER["REMOTE_ADDR"]!='127.0.0.1'){
	echo '<H3>-您的權限無法讀取-</H3>';
	return ;
	exit();
}
echo '<div class="main_message_one">';
echo '<h3>G.B引擎 - 使用條款及聲明</h3>';
echo '<ol>';
echo '<li>本引擎只適合較低流量的架設。</li>';
echo '<li>本引擎若造成您資料的損失，一律不得追究。</li>';
echo '<li>本引擎擁有擴充模式，請勿下載來入不明的檔案。</li>';
echo '<li>本引擎擁有最高權限[本機電腦]，並不適合將網站架設在他人電腦上。</li>';
echo '<li>引擎的資料庫為記事本模式，請注意PHP相關函數是否有被鎖住。</li>';
echo '<li>安裝引擎時，請注意您的電腦日期是否正確。</li>';
echo '<li>您可以任意更改引擎程式碼，但嚴禁散佈您自行修改的引擎程式碼。</li>';
echo '<li>若您想更了解本引擎，引擎網站為 http://www.gblog.idv.tw/</li>';
echo '</ol>';
echo '</div>';
	echo '<form action="config.php" method="post" class="main_message_one">';
	echo '帳號設定';
	echo '<div class="main_message_one">帳號 : <input name="id" type="text" size="8" maxlength="15"> 4~15字元<br>';
	echo '密碼 : <input name="pw" type="password" size="10" maxlength="15"> 4~15字元<br>';
	echo '再次確認密碼 : <input name="pw2" type="password" size="8"></div>';
	echo '資料庫目錄設定 : ';
	echo '<div class="main_message_one"> ';
	echo 'Login位址 : <input name="login" value="login" type="text" size="8" maxlength="30"><br>';
	echo '目錄安全性 : <input name="lv" type="radio" value="1" checked> 普通 <input name="lv" type="radio" value="2"> 安全 <input name="lv" type="radio" value="3"> 最高安全';
	echo '</div>';
	echo '<div class="right"><input value="建立" type="submit"><INPUT TYPE="HIDDEN" VALUE="config" name="pinx"></div>';
	echo '</form>';
?>
</body>
</html>
