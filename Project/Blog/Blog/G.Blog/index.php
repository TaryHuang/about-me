

<?

if($action=='' && $REMOTE_ADDR=='127.0.0.1'){

?>
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
body,td,th {
	color: #FFCC00;
	font-size: 12px;
}
body {
	background-color: #000000;
}
.style3 {color: #666666}
.style5 {font-size: large}
.style6 {color: #FFFFFF}
-->
</style>
<body scroll="no">
<div  style="position:absolute; left:305px; top:190px; width:262px; height:209px; z-index:1">
  <form name="form1" method="post" action="index.php?action=forms">
    <table width="0" border="0" cellspacing="5" cellpadding="1">
      <tr>
        <td colspan="2" nowrap><span class="style5">收集者G.Blog</span></td>
      </tr>
      <tr>
        <td width="70" nowrap>帳&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;號</td>
        <td nowrap><span class="style3">
          <input name="name" type="text" size="8" maxlength="20" style="font-size:12px"> 
        4~20字元</span></td>
      </tr>
	        <tr>
        <td colspan="2" nowrap>&nbsp;</td>
      </tr>
      <tr>
        <td nowrap>密&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;碼</td>
        <td nowrap><span class="style3">
          <input name="pass1" type="password" size="12" maxlength="12" style="font-size:12px">
        6~12字元</span></td>
      </tr>
      <tr>
        <td nowrap>再輸入一次</td>
        <td nowrap><span class="style3">
          <input name="pass2" type="password" size="12" maxlength="12" style="font-size:12px">
        6~12字元</span></td>
      </tr>
	        <tr>
        <td colspan="2" nowrap>&nbsp;</td>
      </tr>
	        <tr>
        <td nowrap>桌面登入器</td>
        <td nowrap><span class="style3">
          <input name="html" type="text" id="html" style="font-size:12px" value="http://127.0.0.1/Blog/login/" size="25" maxlength="100">
        </span></td>
      </tr>
      <tr>
        <td colspan="2" nowrap><div align="right">
            <input name="submit" type="submit" style="font-size" value="創立">
                </div></td>
      </tr>
    </table>
  </form>
</div>

<div style="position:absolute; left:593px; top:108px; width:298px; height:217px; z-index:2; visibility: visible; overflow: visible;">  簡介<br>
  <span class="style6"><br>
  歡迎使用收集者專用Blog架站<br>
    <br>
  請注意本Blog勿做商業用途~<br>
  <br>
  可任意修改此Blog 但注意Blog有擴充檔..<br>
  <br>
  如有沒辦法擴充 或是 駭客..漏洞..等<br>
  <br>
  我將無法做任何處理賠償...<br>
    <br>
    且本Blog開發 是起於 收集者心態<br>
    <br>
    且此Blog設計方式不適合做大流量人次~<br>
    <br>
    按時備份Blog的資料庫 也是保住您資料的方法~<br>
    <br>
    最後請您也於收集者心態看此Blog<br>
    <br>
    <br>
    <br>
    閘們一起來收服文章吧 !<br>
    <br>
    日期: 2006/10/10 </span><br>
    <br>
</div>
<div id="Layer1" style="position:absolute; left:46px; top:46px; width:284px; height:118px; z-index:3; visibility: visible; overflow: visible;">注意事項<br>
  <br>
  1.&nbsp;<span class="style6">帳號密碼 請勿輸入@(&amp;~..等字元<br>
  </span><br>
  2.&nbsp;<span class="style6">帳號可當暱稱輸入中文..</span><br>
  <br>
  3.&nbsp;<span class="style6">桌面登入器 用意讓您直接在桌面上建立
  登入Blog<br>
  &nbsp;&nbsp;&nbsp;&nbsp;讓您不必再打上本機網址登入Blog</span><br> 
</div>
<div  style="position:absolute; left:301px; top:486px; width:315px; height:28px; z-index:4;color:#ffffff">版權 &copy; 收集者專用 ---請勿更改版權語及做商業用途---</div>
</body>
<?
}


if($action=='forms' && $REMOTE_ADDR=='127.0.0.1'){
include('../all_function.php');
$blog_my=new mysql_et;
$name=$blog_my->str_re($name);
if(strlen($name)>=4 && strlen($name)<=20){
if($pass1==$pass2){

if(strlen($pass1)>=6  && strlen($pass1)<=12){

function pass_chan1($password){
for($i=0;$i<strlen($password);$i++){
switch($password[$i]){
case '1':$pass__array[$i]='ao';
       $Add+=1111; break;
case '2':$pass__array[$i]='bt';
       $Add+=3592;  break;
case '3':$pass__array[$i]='ct';
       $Add+=2795;  break;
case '4':$pass__array[$i]='df';
       $Add+=5297;  break;
case '5':$pass__array[$i]='ef';
       $Add+=6690;  break;
case '6':$pass__array[$i]='fs';
       $Add+=1291;  break;
case '7':$pass__array[$i]='gs';
       $Add+=7001;break;
case '8':$pass__array[$i]='hh';
       $Add+=5007;break;
case '9':$pass__array[$i]='in';
       $Add+=3003;break;
case '0':$pass__array[$i]='jz';
       $Add+=2919;break;
case 'a':$pass__array[$i]='e16';
       $Add+=23;break;
case 'b':$pass__array[$i]='2wS';
       $Add+=3023;break;
case 'c':$pass__array[$i]='3q';
       $Add+=3323;break;
case 'd':$pass__array[$i]='4v';
       $Add+=3063;break;
case 'e':$pass__array[$i]='5d';
       $Add+=3663;break;
case 'f':$pass__array[$i]='6Fz';
       $Add+=3068;break;
case 'g':$pass__array[$i]='73';
       $Add+=3368;break;
case 'h':$pass__array[$i]='83';
       $Add+=3268;break;
case 'i':$pass__array[$i]='31';
       $Add+=3265;break;
case 'j':$pass__array[$i]='91';
       $Add+=5265;break;
case 'k':$pass__array[$i]='Ab';
       $Add+=7258;break;
case 'l':$pass__array[$i]='BG5';
       $Add+=3266; break;
case 'm':$pass__array[$i]='Cg';
       $Add+=366; break;
case 'n':$pass__array[$i]='Dj';
       $Add+=126; break;
case 'o':$pass__array[$i]='3E';
       $Add+=36; break;
case 'p':$pass__array[$i]='de';
       $Add+=3736; break;
case 'q':$pass__array[$i]='42';
       $Add+=5268; break;
case 'r':$pass__array[$i]='Hew';
       $Add+=7266; break;
case 's':$pass__array[$i]='Ias';
       $Add+=252; break;
case 't':$pass__array[$i]='Jcf';
       $Add+=2316; break;
case 'u':$pass__array[$i]='eK';
       $Add+=266; break;
case 'v':$pass__array[$i]='aL';
       $Add+=2326; break;
case 'w':$pass__array[$i]='fM';
       $Add+=2412; break;
case 'x':$pass__array[$i]='Nn';
       $Add+=2321; break;
case 'y':$pass__array[$i]='Omy';
       $Add+=66; break;
case 'z':$pass__array[$i]='rtP';
       $Add+=212; break;
case 'A':$pass__array[$i]='d1';
       $Add+=3; break;
case 'B':$pass__array[$i]='24';
       $Add+=2; break;
case 'C':$pass__array[$i]='3q4';
       $Add+=1; break;
case 'D':$pass__array[$i]='4ll';
       $Add+=34; break;
case 'E':$pass__array[$i]='5sd';
       $Add+=21; break;
case 'F':$pass__array[$i]='6zq';
       $Add+=34; break;
case 'G':$pass__array[$i]='7v3';
       $Add+=55; break;
case 'H':$pass__array[$i]='83a';
       $Add+=75; break;
case 'I':$pass__array[$i]='9v1';
       $Add+=12; break;
case 'J':$pass__array[$i]='A1b';
       $Add+=71; break;
case 'K':$pass__array[$i]='B65';
       $Add+=4; break;
case 'L':$pass__array[$i]='C4vbg';
       $Add+=7; break;
case 'M':$pass__array[$i]='Dloj';
       $Add+=8; break;
case 'N':$pass__array[$i]='3zxE';
       $Add+=21; break;
case 'O':$pass__array[$i]='dDe';
       $Add+=86; break;
case 'P':$pass__array[$i]='4A2';
       $Add+=64; break;
case 'Q':$pass__array[$i]='Hesw';
       $Add+=54; break;
case 'R':$pass__array[$i]='Ias';
       $Add+=0; break;
case 'S':$pass__array[$i]='Jcf';
       $Add+=3; break;
case 'T':$pass__array[$i]='epK';
       $Add+=3; break;
case 'U':$pass__array[$i]='aPL';
       $Add+=52; break;
case 'V':$pass__array[$i]='fM';
       $Add+=65; break;
case 'W':$pass__array[$i]='Nn';
       $Add+=2; break;
case 'X':$pass__array[$i]='Omy';
       $Add+=0; break;
case 'Y':$pass__array[$i]='rLJ';
       $Add+=97; break;
case 'Z':$pass__array[$i]='rtP';
       $Add+=12; break;
default:$loca="您可以離開嚕";
}
}
if($loca=="您可以離開嚕"){
$passwordss='';
}else{

for($i=0;$i<count($pass__array);$i++){
$passwordss=$passwordss.$pass__array[$i];
}
$passwordss="$Add".$passwordss;

}//if 無效元素 例如 _ @ #
return $passwordss;
}

$pass1=pass_chan1($pass1);

$of=fopen('../alls/pass.php','w+');
fputs($of,'<?
');

fputs($of,'$pass_____p="'.$pass1.'";
');
fputs($of,'$word_____p="'.$name.'";
');

fputs($of,'
?>');
$of=fopen('login.htm','w+');
fputs($of,'<script language="javascript">
location.replace("'.$html.'");
</script>');
echo '<script language="javascript">
alert("成功註冊!\n\n請記住您的...\n\n帳號 : '.$name.'\n\n密碼 : '.$pass2.'");
location.replace("../unlinks.php");
</script>';
}else{
echo '<script language="javascript">
alert("密碼字元不符合!");
history.go(-1)
</script>';
}

}else{
echo '<script language="javascript">
alert("二組密碼不符合!");
history.go(-1)
</script>';
}
}else{

echo '<script language="javascript">
alert("帳號字元有誤!");
history.go(-1);
</script>';
}

}
?>