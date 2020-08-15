<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<?

if($_COOKIE["true"]=="通過"){
$sql_pass=$_COOKIE["pass_1988"];
$sql_word="SELECT * 
FROM `pass` 
WHERE 1 AND `user` = '$sql_pass'";
$my_job=sql_b($sql_word);
if($my_job[0][0]==''){
header("location:../index.php");
}

}else{
header("location:../index.php");
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

<body background="<?
echo $sqls09_ous_jsa[0][12];
?>">
<?
if($sqls09_ous_jsa[0][17]==1){
echo'<div id="ps" style="position:absolute; left:'.$sqls09_ous_jsa[0][7].'px; top:'.$sqls09_ous_jsa[0][8].'px; width:31px; height:23px; z-index:1; overflow: visible;">
<a href="index.php" target="_self"><img src="'.$sqls09_ous_jsa[0][2].'" width="'.$sqls09_ous_jsa[0][9].'px" height="'.$sqls09_ous_jsa[0][10].'px" border="0"></a></div>';
}//end
?>


<div id="bodsy" style="position:absolute; left:10px; top:10px; width:235px; height:106px; z-index:100;">

<div id="left" style="position:absolute; <?
echo 'left:'.$sqls09_ous_jsa[0][3].'px;';
echo 'top:'.$sqls09_ous_jsa[0][4].'px;';
?>  width:230px; height:195px; z-index:1; overflow: visible;">
  <table width="231" height="217" border="0" cellpadding="1" cellspacing="1">
    <tr>
      <td width="206" height="16" bgcolor="<?
echo $sqls09_ous_jsa[0][13];
?>"><div align="left"><br>
        使用者 : <?
		echo '<a href="in_body.php?na_num='.$my_job[0][0].'" target="_blank"><font>'.$my_job[0][3].'<font></a>';

		?><br>
              <br>
      </div></td>
    </tr>
    <tr>
      <td height="179" bgcolor="<?
		  echo $sqls09_ous_jsa[0][11];
		  ?>"><div align="center"><?
	  $rr__2006_7_9_a_a=$my_job[0][3];
	  $rr__2006_7_9_a="SELECT * 
FROM `bar_all_all` 
WHERE 1 AND `peo` = '$rr__2006_7_9_a_a'";
	  $rr__2006_7_9_b=sql_b($rr__2006_7_9_a);
	  //-------------------------------------
  $ss__2006_7_9_a_a=$my_job[0][0];
	  $ss__2006_7_9_a="SELECT * 
FROM `bar_all_alls` 
WHERE 1 AND `in_http` = '$ss__2006_7_9_a_a' ";
	  $ss__2006_7_9_b=sql_b($ss__2006_7_9_a);
	  //-----------------------------------上面是回覆
	  
	  in_im_20($my_job[0][16],$my_job[0][27],count($rr__2006_7_9_b),count($ss__2006_7_9_b),$my_job[0][26],$my_job[0][28]);
	  
	  ?></div></td>
    </tr>
    <tr>
      <td height="15" bgcolor="<?
echo $sqls09_ous_jsa[0][13];
?>">
         <table width="200" border="0" cellspacing="1" cellpadding="1">
            <tr>
              <td>職務 : <?
		echo all_color_font($my_job[0][15],'黑色',18)
		?></td>
            </tr>
        </table></td></tr>
  </table>
  <br>
  <table width="231" height="51" border="0" cellpadding="1" cellspacing="1">
    <tr>
      <td height="16" bgcolor="<?
echo $sqls09_ous_jsa[0][13];
?>">系統<br></td>
    </tr>
    <tr>
      <td bgcolor="#FFFFFF">
        <?
		all_index_66($son_1002_a,$son_1002_b,$my_job[0][15])

	  ?>
      </td>
    </tr>
  </table>
  <br>
  <table width="231" height="62" border="0" cellpadding="1" cellspacing="1">
    <tr>
      <td height="16" bgcolor="<?
echo $sqls09_ous_jsa[0][13];
?>">個人選單<br>      </td>
    </tr>
    <tr>
      <td height="15" bgcolor="#FFFFFF"><?
	  all_index_4($son_1004_a,$son_1004_b);
	  
	  ?></td>
    </tr>
    <tr>
      <td bgcolor="<?
echo $sqls09_ous_jsa[0][13];
?>">&nbsp;</td>
    </tr>
  </table>
  <br>
  <table width="231" height="62" border="0" cellpadding="1" cellspacing="1">
    <tr>
      <td height="16" bgcolor="<?
echo $sqls09_ous_jsa[0][13];
?>">信箱<br>
      </td>
    </tr>
    <tr>
      <td height="15" bgcolor="#FFFFFF"><?
	  
	  
	  $qdwdwq2006_7_12=$_COOKIE["pass_1988"];
	  $q2006_7_1208="SELECT * 
FROM `e_mail` 
WHERE 1 AND `true` = '未閱讀' AND `uesr` = '$qdwdwq2006_7_12' ";
	  
	  $qdq20031=sql_b($q2006_7_1208);
	  $ASD_BODY_2007=$_COOKIE["power_2006s"];
	all_index_55($son_1003_a,$son_1003_b,$qdq20031,$ASD_BODY_2007);
	
	
	
	  ?></td>
    </tr>
    <tr>
      <td bgcolor="<?
echo $sqls09_ous_jsa[0][13];
?>">&nbsp;</td>
    </tr>
  </table>
  <p><br>
    <br>
    <br>
    <br>
  </p>
</div>
<div id="body" style="position:absolute; <?
echo 'left:'.$sqls09_ous_jsa[0][5].'px;';
echo 'top:'.$sqls09_ous_jsa[0][6].'px;';
?> width:681px; height:690px; z-index:2;">
  <div align="center">
    <table width="740" height="200" border="0" cellpadding="1" cellspacing="1" bordercolor="#000000">
      <tr>
        <td height="200" bgcolor="<?
echo $sqls09_ous_jsa[0][13];
?>">        <div align="center">
          <br>
          <br><br>
          <table width="720" height="200" border="1" cellpadding="1" cellspacing="1" bordercolor="#000000">
            <tr>
              <td bgcolor="<?
		  echo $sqls09_ous_jsa[0][18];
		  ?>"><div align="center"><!-- TemplateBeginEditable name="內容" -->內容<br>
                <br>
                <br>
              <!-- TemplateEndEditable -->
		
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
		echo $sqls09_ous_jsa[0][14];
		?></td>
      </tr>
    </table>
    <br>
    <br>
  </div>
</div>
</div>
</body>
</html>
