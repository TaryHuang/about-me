<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>

<?

if($_COOKIE["true"]=="�q�L"){
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
= '�׾¨t��' ";
	  
	  $sqls09_ous_jsa=sql_b($sqls09_ous_j);
?>

<meta http-equiv="Content-Type" content="text/html; charset=big5">
<!-- TemplateBeginEditable name="doctitle" -->
<title>�L���D���</title>
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
	font-family: �s�ө���;
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


<div id="bodsy" style="position:absolute; left:10px; top:10px; width:103px; height:21px; z-index:100;">
<div id="left" style="position:absolute; <?
echo 'left:'.$sqls09_ous_jsa[0][3].'px;';
echo 'top:'.$sqls09_ous_jsa[0][4].'px;';
?>  width:230px; height:195px; z-index:1; overflow: visible;">
  <table width="231" height="239" border="0" cellpadding="1" cellspacing="1" >
    <tr>
      <td width="206" height="16" bgcolor="<?
echo $sqls09_ous_jsa[0][13];
?>"><div align="left"><br>
        �ϥΪ� : <?
		echo '<a href="in_body.php?na_num='.$my_job[0][0].'" target="_blank"><font>'.$my_job[0][3].'<font></a>';
		?><br><br>
</div>

      </td>
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
	  //-----------------------------------�W���O�o��
	  	  	  $ss__2006_7_9_a_a=$my_job[0][0];
	  $ss__2006_7_9_a="SELECT * 
FROM `bar_all_alls` 
WHERE 1 AND `in_http` = '$ss__2006_7_9_a_a' ";
	  $ss__2006_7_9_b=sql_b($ss__2006_7_9_a);
	  //-----------------------------------�W���O�^��
	  
	  
	  in_im_20($my_job[0][16],$my_job[0][27],count($rr__2006_7_9_b),count($ss__2006_7_9_b),$my_job[0][26],$my_job[0][28]);
	  
	  ?></div></td>
    </tr>
    <tr>
      <td height="15" bgcolor="<?
echo $sqls09_ous_jsa[0][13];
?>">
        <table width="224" border="0" cellspacing="1" cellpadding="1">
          <tr>
            <td> <?
		if($my_job[0][15]!='�L'){	
		include("body_18.php");
		echo'<div align="right"><input name="adwdwd" type="button" value="�_��" onClick="cookie_18n()"></div>';
		}
		
		echo '¾�� :';
		all_color_font($my_job[0][15],'�¦�',16);
		
		?></td>
          </tr>
        </table>
      </td>
    </tr>
  </table>
  <br>
  <table width="231" height="51" border="0" cellpadding="1" cellspacing="1">
    <tr>
      <td height="16" bgcolor="<?
echo $sqls09_ous_jsa[0][13];
?>">�t��<br></td>
    </tr>
    <tr>
      <td bgcolor="#FFFFFF">
        <?
	all_index_4($son_1005_a,$son_1005_b);
	  ?>
      </td>
    </tr>
  </table>
  <br>
  <table width="231" height="62" border="0" cellpadding="1" cellspacing="1">
    <tr>
      <td height="16" bgcolor="<?
echo $sqls09_ous_jsa[0][13];
?>">���<br>      </td>
    </tr>
    <tr>
      <td height="15" bgcolor="#FFFFFF"><?
	 in_index_1($son_1000i,'index.php?http=');
	  
	  ?></td>
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
  </div>
<div id="body" style="position:absolute; <?
echo 'left:'.$sqls09_ous_jsa[0][5].'px;';
echo 'top:'.$sqls09_ous_jsa[0][6].'px;';
?> width:737px; height:690px; z-index:2; overflow: visible;">

<div align="center">
    <table width="740" height="200" border="0" cellpadding="1" cellspacing="1" bordercolor="#000000">
      <tr>
        <td height="200" bgcolor="<?
echo $sqls09_ous_jsa[0][13];
?>">        <div align="center">
          <br>
                    <?
$asdwqdq=file("up20i.h");

$asdwqdq=pass_u_go_out_2($asdwqdq);
foreach($asdwqdq as $a12222_value){
echo $a12222_value;

}//for

?><br><br>
          <table width="720" height="200" border="1" cellpadding="1" cellspacing="1" bordercolor="#000000" >
            <tr>
              <td bgcolor="<?
		  echo $sqls09_ous_jsa[0][18];
		  ?>"><div align="center"><!-- TemplateBeginEditable name=" body" --> body<!-- TemplateEndEditable -->	<br>
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
?>">���v�y : <?
		echo $sqls09_ous_jsa[0][14];
		?></td>
      </tr>
    </table>
    <br>
    <br> 
  </div>
</div>
</div>
<div id="Layer1" style="position:absolute; left:251px; top:73px; width:2px; height:0px; z-index:101"></div>
</body>
</html>
