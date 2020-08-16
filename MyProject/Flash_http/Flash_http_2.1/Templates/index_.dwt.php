<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<?


$sql_pass=$_COOKIE["pass_1988"];
$sql_word="SELECT * 
FROM `pass` 
WHERE 1 AND `user` = '$sql_pass'";
$my_job=sql_b($sql_word);
if($my_job[0][0]!=''){
header("location:h_ya/index.php");
}


	  $sqls09_ous_j="SELECT * 
FROM `myfalsh_over` 
WHERE 1 AND `Q_A` 
= '論壇系統' ";
	  
	  $sqls09_ous_jsa=sql_b($sqls09_ous_j);
?>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<!-- TemplateBeginEditable name="doctitle" -->
<title>無標題文件</title>
<!-- TemplateEndEditable --><script language="JavaScript" type="text/JavaScript">
<!--
function MM_reloadPage(init) {  //reloads the window if Nav4 resized
  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
    document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
  else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
}
MM_reloadPage(true);
//-->
</script>
<?



echo'<style type="text/css">
<!--
body,td,th {
	font-size: 13px;
	color: #000000;
	font-family: 新細明體;
}
body {
	background-color: #000000;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
	color: '.$sqls09_ous_jsa[0][1].';
}
a:active {
	text-decoration: none;
}
-->
</style>';
?>
<!-- TemplateBeginEditable name="head" --><!-- TemplateEndEditable -->
</head>

<body  background="<?
echo $sqls09_ous_jsa[0][12];
?>">

<?

if($sqls09_ous_jsa[0][17]==1){
echo'<div id="ps" style="position:absolute; left:'.$sqls09_ous_jsa[0][7].'px; top:'.$sqls09_ous_jsa[0][8].'px; width:31px; height:23px; z-index:1; overflow: visible;">
<a href="index.php" target="_self"><img src="'.$sqls09_ous_jsa[0][2].'" width="'.$sqls09_ous_jsa[0][9].'px" height="'.$sqls09_ous_jsa[0][10].'px" border="0"></a></div>';
}
?>
<div id="tem" style="position:absolute; left:10px; top:10px; width:84px; height:19px; z-index:10;">
<div id="body" style="position:absolute; <?
echo 'left:'.$sqls09_ous_jsa[0][5].'px;';
echo 'top:'.$sqls09_ous_jsa[0][6].'px;';
?> width:737px; height:690px; z-index:2; overflow: visible;">
  <div align="center">
    <table width="740" height="0" border="0" cellpadding="1" cellspacing="1" bordercolor="#000000">
      <tr>
        <td height="200" bgcolor="<?
echo $sqls09_ous_jsa[0][13];
?>">        <div align="center">
          <br>
          <?
$asdwqdq=file("h_ya/up20i.h");

$asdwqdq=pass_u_go_out_2($asdwqdq);
foreach($asdwqdq as $a12222_value){
echo $a12222_value;

}//for

?>
		  
		  <br>
          <br>
          <table width="720" height="200" border="1" cellpadding="1" cellspacing="1" bordercolor="#000000">
            <tr>
              <td bgcolor="<?
		  echo $sqls09_ous_jsa[0][18];
		  ?>"><div align="center">
			    <br>
<!-- TemplateBeginEditable name=" body" --> body<!-- TemplateEndEditable -->	<br>
			    <br>	
			    </div></td>
            </tr>
          </table>
          <br>
          <br>
        </div></td>
      </tr>
      <tr>
        <td height="33" bgcolor="<?
echo $sqls09_ous_jsa[0][13];
?>">版權語 : <?
		echo $sqls09_ous_jsa[0][14]
		
		?></td>
      </tr>
    </table>
    <br>
    <br> 
  </div>
</div>
<br>
<div id="word" style="position:absolute; <?
echo 'left:'.$sqls09_ous_jsa[0][3].'px;';
echo 'top:'.$sqls09_ous_jsa[0][4].'px;';
?> width:214px; height:112px; z-index:6; overflow: visible;">
  <table width="216" height="188" border="0" cellpadding="1" cellspacing="1">
    <tr>
      <td height="29" bgcolor="<?
echo $sqls09_ous_jsa[0][13];
?>"><span class="style2">登入</span></td>
    </tr>
    <tr>
      <td height="130" bgcolor="<?
		  echo $sqls09_ous_jsa[0][11];
		  ?>"><form action="../url_header.php" method="post" name="form1" target="_self">
          <br>
          <table width="210" height="102" border="0" cellpadding="1" cellspacing="2">
            <tr>
              <td width="47" nowrap>
                <div align="center">帳號</div></td>
              <td colspan="2" nowrap><input name="user_a" type="text" id="user_a" size="14" maxlength="12"></td>
            </tr>
            <tr>
              <td nowrap>
                <div align="center">密碼</div></td>
              <td colspan="2" nowrap><input name="pass_b" type="password" id="pass_b" size="14" maxlength="12"></td>
            </tr>
            <tr>
              <td nowrap>&nbsp;</td>
              <td width="103" nowrap><input type="hidden" name="pin_password" value="登入"></td>
              <td width="50" nowrap><div align="right">
                  <input type="submit" name="Submit" value="送出">
              </div></td>
            </tr>
            <tr>
              <td colspan="3" nowrap>----------------------------------------------------</td>
            </tr>
            <tr>
              <td colspan="3" nowrap><table width="200" border="0" cellspacing="1" cellpadding="1">
                  <tr>
                    <td width="60" nowrap><a href="index.php?add=sa108">忘記密碼</a></td>
                    <td width="114" nowrap><a href="index.php?add=add_oks">申請帳號</a></td>
                    <td width="16" nowrap>&nbsp;</td>
                  </tr>
              </table></td>
            </tr>
          </table>
      </form></td>
    </tr>
    <tr>
      <td bgcolor="<?
echo $sqls09_ous_jsa[0][13];
?>">&nbsp;</td>
    </tr>
  </table>
  <br>
  <table width="218" height="51" border="0" cellpadding="1" cellspacing="1">
    <tr>
      <td height="16" bgcolor="<?
echo $sqls09_ous_jsa[0][13];
?>">系統<br></td>
    </tr>
    <tr>
      <td bgcolor="#FFFFFF">
        <?
	all_index_4($son_1008_a,$son_1008_b);
	  ?>
      </td>
    </tr>
  </table>
  <br>
  <table width="218" height="64" border="0" cellpadding="1" cellspacing="1">
    <tr>
      <td height="29" bgcolor="<?
echo $sqls09_ous_jsa[0][13];
?>"><span class="style2">資料庫</span></td>
    </tr>
    <tr>
      <td height="14" bgcolor="#FFFFFF">
	  <?

 in_index_1($son_1000i,'index.php?http=');//資料庫選單
	  
	  ?>	  </td> 
    </tr>
    <tr>
      <td bgcolor="<?
echo $sqls09_ous_jsa[0][13];
?>">&nbsp;</td>
    </tr>
  </table>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
</div>
</div>
</body>
</html>
