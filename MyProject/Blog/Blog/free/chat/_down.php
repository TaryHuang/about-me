<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>聊天室</title>
<style type="text/css">
<!--
body {
	background-color: #000000;
}
body,td,th {
	color: #666666;
	font-size: 12px;
}
-->
</style>
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
</head>

<body>

<script language="javascript">
var num=0;
function numb(){
num++;
setTimeout("numb()",800);
}
numb();

function form_fun(){
if(document.myform.words2.value!=''){
  if(num>=2){
  document.myform.words.value=document.myform.words2.value;
  document.myform.words2.value='';
  num=0;
  }else{
  alert('請勿太快發言');
    return false;
  }
}else{
  alert('未輸入內容');
  return false;
}//end if
}

</script>

 <div style="position:absolute; left:113px; top:14px; width:467px; height:76px; z-index:1">
 <form action="fun_chat.php"  name="myform" method="post" target="tops" onsubmit="return(form_fun())">
  <table border="0" cellspacing="2" cellpadding="2">
      <tr>
      <td>顏色</td>
      <td align="left"><select name="color_thisword">
        <option value="#ffcc00" selected style="background-color:#ffcc00">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
        <option value="#CC0000" style="background-color:#CC0000"></option>
        <option value="#666666" style="background-color:#666666"></option>
        <option value="#0066FF" style="background-color:#0066FF"></option>
        <option value="#FF66CC" style="background-color:#FF66CC"></option>
        <option value="#FFFFFF" style="background-color:#FFFFFF"></option>
        <option value="#FF9900" style="background-color:#FF9900"></option>
      </select></td>
    </tr>
    <tr>
      <td>輸入</td>
      <td><input name="words" type="hidden" ><input name="words2" type="text" size="50" maxlength="38">
		  <input type="submit" value="傳送"></td>
    </tr>
  </table>
</form>
</div>

</body>
</html>
