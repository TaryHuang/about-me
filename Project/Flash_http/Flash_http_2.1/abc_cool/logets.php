<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<?
include("cool.php");
$wos='<? header("location:../index.php");  ?>';
$opena1=fopen("loget.php","w+");
fputs($opena1,$wos);
fclose($opena1);


$opena2=fopen("index.php","w+");
fputs($opena2,$wos);
fclose($opena2);

?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>資料庫安裝</title>
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
.style4 {font-size: 12px}
.style5 {
	color: #FFFFFF;
	font-size: 12px;
}
-->
</style></head>

<body>
 <div id="Layer1" style="position:absolute; left:153px; top:212px; width:182px; height:105px; z-index:1; background-color: #990000; layer-background-color: #990000; border: 1px none #000000;">
   <form action="logets.php" method="post" name="form1" target="_self">
   <br>
   <table width="299" height="127" border="0" cellpadding="1" cellspacing="1" bordercolor="#2359D6" bgcolor="#FFCC00">
     <tr>
       <td width="118" nowrap>&nbsp;</td>
       <td width="174" nowrap>&nbsp;</td>
     </tr>
     <tr>
       <td nowrap>&nbsp;</td>
       <td nowrap>&nbsp;</td>
     </tr>
     <tr>
       <td nowrap>&nbsp;</td>
       <td nowrap>&nbsp;</td>
     </tr>
     <tr>
       <td colspan="2" nowrap><div align="center" class="style4">資料庫 安裝成功 </div></td>
      </tr>
     <tr>
       <td nowrap>&nbsp;</td>
       <td nowrap>&nbsp;</td>
     </tr>
     <tr>
       <td nowrap>&nbsp;</td>
       <td nowrap>&nbsp;</td>
     </tr>
     <tr>
       <td nowrap>&nbsp;</td>
       <td nowrap>&nbsp;</td>
     </tr>
   </table>
   
   </form>
</div>
 <div id="Layer2" style="position:absolute; left:468px; top:189px; width:153px; height:113px; z-index:2">
<textarea name="say" cols="60" rows="18" readonly="readonly" wrap="virtual"><?
 $aaa_read=file("G2.h",100);
 foreach($aaa_read as $value){
 echo $value;
 }
 ?>
</textarea> 
</div>
 <table width="687" border="0" cellpadding="0" cellspacing="0">
   <!--DWLayoutDefaultTable-->
   <tr>
     <td width="123" height="99">&nbsp;</td>
     <td width="564"><br>
     <br>
     <br></td>
   </tr>
   <tr>
     <td height="50">&nbsp;</td>
     <td valign="top">
       <table width="405" border="0" cellspacing="1" cellpadding="1">
         <tr>
           <td width="283" nowrap>&nbsp;<span class="style3">風格我獨有<span class="style5">[ 此資料即將刪除 ]</span></span></td>
           <td width="102" nowrap>          <div align="right">
             <form action="../index.php" method="post" name="form2" target="_self">
               
                <div align="left">
                  <input type="submit" name="Submit" value="登入網頁">
                </div>
             </form>
           </div></td>
         </tr>
       </table>       
       <div align="center"></div></td>
   </tr>
   <tr>
     <td height="35">&nbsp;</td>
     <td>&nbsp;</td>
   </tr>
</table>
</body>
</html>
