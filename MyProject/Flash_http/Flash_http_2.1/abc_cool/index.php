<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>申請中</title>
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
	color: #000000;
	font-size: 12px;
}
body {
	background-color: #333333;
}
.style3 {
	font-size: 36px;
	color: #999999;
}
-->
</style></head>

<body>
 <div id="Layer1" style="position:absolute; left:153px; top:212px; width:206px; height:105px; z-index:1; background-color: #990000; layer-background-color: #990000; border: 1px none #000000;">
   <form action="loget.php" method="post" name="form1" target="_self">
     <div align="center"><br>
     </div>
     <div align="center"></div>
     <table width="288" height="127" border="0" cellpadding="1" cellspacing="1" bordercolor="#2359D6" bgcolor="#FFCC00">
     <tr>
       <td width="72" nowrap>資料庫 帳號 : </td>
       <td width="209" nowrap><input name="user" type="text" id="user" style="font-size:12px " size="15" maxlength="12"></td>
     </tr>
     <tr>
       <td nowrap>資料庫 密碼 : </td>
       <td nowrap><input name="pass" type="text" id="pass" style="font-size:12px " value="" size="15" maxlength="12"></td>
     </tr>
     <tr>
       <td nowrap><p>使用Database</p>
        </td>
       <td nowrap><input name="database" type="text" id="database" style="font-size:12px " size="15" maxlength="12"></td>
     </tr>
     <tr>
       <td nowrap><div align="left"><br>
         暱稱 :</div></td>
       <td nowrap><br>
         <input name="name" type="text" id="name" style="font-size:12px " value="管理員" size="15" maxlength="12"> 
         管理員(最高權限)</td>
     </tr>
     <tr>
       <td nowrap>管理員帳號 : </td>
       <td nowrap><input name="pass_use_1" type="text" id="pass_use_1" style="font-size:12px " size="15" maxlength="12"></td>
     </tr>
     <tr>
       <td nowrap>管理員密碼 : </td>
       <td nowrap><input name="pass_use_2" type="text" id="pass_use_2" style="font-size:12px " size="15" maxlength="12"></td>
     </tr>
     <tr>
       <td nowrap>&nbsp;</td>
       <td nowrap><div align="right">
         <input type="submit" name="Submit" value="確定">
       </div></td>
     </tr>
   </table>
   </form>
</div>
 <div id="Layer2" style="position:absolute; left:491px; top:167px; width:320px; height:209px; z-index:2">
 <textarea name="wwwwwwwww" cols="60" rows="20" readonly="readonly">
 
 <?
 $aaa_read=file("G.h",100);
 foreach($aaa_read as $value){
 echo $value;
 }
 ?>
 
 </textarea>
</div>
 <table width="715" border="0" cellpadding="0" cellspacing="0">
   <!--DWLayoutDefaultTable-->
   <tr>
     <td width="116" height="99">&nbsp;</td>
     <td width="599"><div align="center"><br>
        <?
		if($worry=='2006'){
	echo '<font style="color:#FFCC00">您輸入的資料庫帳號密碼有錯誤 !</font>';
		}
		if($worry=='1955'){
		echo '<font style="color:#FFCC00">您有資料未填寫 !</font>';
		}
		
		?><br>
     </div></td>
   </tr>
   <tr>
     <td height="50">&nbsp;</td>
     <td valign="top"><span class="style3">風格我獨有</span></td>
   </tr>
   <tr>
     <td height="35">&nbsp;</td>
     <td>&nbsp;</td>
   </tr>
 </table>
</body>
</html>
