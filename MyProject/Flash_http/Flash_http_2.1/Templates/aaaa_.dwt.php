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
$__user=$_COOKIE["pass_1988"];

?>


<?
$sql="SELECT * 
FROM `pass` 
WHERE 1 AND `Num` = '$na_num' ";
$data=sql_b($sql);

	  $sqls09_ous_j="SELECT * 
FROM `myfalsh_over` 
WHERE 1 AND `Q_A` 
= '�׾¨t��' ";
	  
	  $sqls09_ous_jsa=sql_b($sqls09_ous_j);

?>

<meta http-equiv="Content-Type" content="text/html; charset=big5">
<!-- TemplateBeginEditable name="doctitle" -->
<title>�L���D���</title>
<!-- TemplateEndEditable --><style type="text/css">
<!--
body,td,th {
	font-size: 12px;
	color: #000000;
}
body {
	background-color: #ECEBF3;
}
.style5 {font-size: 12px}
.style6 {color: #990000}
.style7 {color: #FFCC00}
.style8 {color: #0099FF}
.style9 {color: #0066FF}
.style10 {font-size: 36px}
.style11 {font-size: medium}
.style12 {color: #333333}
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
<!-- TemplateBeginEditable name="head" --><!-- TemplateEndEditable -->
</head>
<body  background="<?
echo $sqls09_ous_jsa[0][20];
?>">
<div id="Layer3" style="position:absolute; left:392px; top:59px; width:403px; height:132px; z-index:3">
  <table width="392" border="1" cellpadding="3" cellspacing="3" bordercolor="#000000">
<td width="60" nowrap bgcolor="#FFCC00"><div align="left">�ͤ�G</div></td>
    <td width="305" nowrap><?
	  echo ' �褸'.$data[0][6].'&nbsp;&nbsp; ';
	   echo $data[0][7].'�� ';
	    echo $data[0][8].' ��';
	  ?>&nbsp;</td>
  </tr>
  <tr >
    <td nowrap bgcolor="#FFCC00"><div align="left">�ӦۡG</div></td>
    <td nowrap><?
	  echo $data[0][11];
	  ?>&nbsp;</td>
  </tr>
  <tr >
    <td nowrap bgcolor="#FFCC00"><div align="left">¾�~�G</div></td>
    <td nowrap><?
	
	$ss1=array('�q���v','�]�p�v','���e�v','��K�v','�Юv','�Ǯ{','�ǥ�','�үS��','���H','���v');
$ss2=array('1','2','3','4','5','6','7','8','9','10');
	for($i=0;$i<count($ss1);$i++){
	if($data[0][20]==$ss2[$i]){
	echo $ss1[$i];
	}//if
	}//for
	  echo ;
	  ?>&nbsp;</td>
  </tr>
  <tr >
    <td nowrap bgcolor="#FFCC00"><div align="left">�B�áG</div></td>
    <td nowrap><?
	
	if($data[0][21]==0){
	echo'���B';
	
	}else{
	echo '�w�B';
	}
	  ?>&nbsp;</td>
  </tr>
  <tr >
    <td nowrap bgcolor="#FFCC00"><div align="left">�ӤH�����G</div></td>
    <td nowrap><?
	echo'<a href="'.$data[0][12].'" target="_blank">';
	  echo $data[0][12];
	  echo'</a>';
	  ?>&nbsp;</td>
  </tr>

  <tr >
    <td nowrap bgcolor="#FFCC00"><div align="left">�o��峹�G</div></td>
    <td nowrap><?
	  $datasssss=$data[0][0];
	  $sqlss221="SELECT * 
FROM `bar_all_all` 
WHERE 1 AND `numID` = '$datasssss' ";
	  
	  $sqlss221i=sql_b($sqlss221);
	  echo count($sqlss221i);
	  ?>&nbsp;</td>
  </tr>
  <tr >
    <td nowrap bgcolor="#FFCC00"><div align="left">�W�����ơG</div></td>
    <td nowrap><?
	  echo $data[0][18];
	  ?></td>
  </tr>
  <tr >
    <td nowrap bgcolor="#FFCC00"><div align="left">�׾�¾�ȡG</div></td>
    <td nowrap><?
	  echo $data[0][15];
	  ?>&nbsp;</td>
  </tr>
      <tr >
    <td nowrap bgcolor="#FFCC00"><div align="left">���U����G</div></td>
    <td nowrap><?
	  echo $data[0][23];
	  ?>&nbsp;</td>
  </tr>
      <tr >
    <td nowrap bgcolor="#FFCC00"><div align="left">�̫�W������G</div></td>
    <td nowrap><? 
	  echo $data[0][17];
	  ?>&nbsp;</td>
  </tr>
  <tr >
    <td nowrap bgcolor="#FFCC00"><div align="left">����G</div></td>
    <td nowrap><?
	  echo $data[0][14];
	  ?>&nbsp;</td>
  </tr>
  <tr >
    <td height="153" nowrap bgcolor="#FFCC00"><div align="left">²���G<br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
    </div></td>
    <td nowrap><div align="center">
      <textarea name="name" cols="40" rows="7" readonly="readonly" wrap="virtual"><?
	  echo $data[0][13];
	  ?>
      </textarea>
</div></td>
  </table>
</div>
<div id="Layer4" style="position:absolute; left:161px; top:17px; width:83px; height:102px; z-index:5; overflow: visible; visibility: visible; background-color: #000000; layer-background-color: #000000; border: 1px none #000000;">
  <table width="187" height="115" border="0" cellpadding="1" cellspacing="1">
        <tr>
      <td height="28" colspan="2" bgcolor="#FFCC00" ><div align="center">�ӤH���</div></td>
    </tr>
	<tr>
      <td width="32" bgcolor="#FFCC00"><span class="style5">�s��</span></td>
      <td width="126" bgcolor="#999999"><?
	  echo $data[0][0];
	  ?></td>
    </tr>
    <tr>
      <td bgcolor="#FFCC00"><span class="style5">�ʺ�</span></td>
      <td bgcolor="#999999"><?
	  echo $data[0][3];
	  ?></td>
    </tr>
    <tr>
      <td bgcolor="#FFCC00"><span class="style5">�ʧO</span></td>
      <td bgcolor="#999999"><?
	  echo $data[0][4];
	  ?></td>
    </tr>
    <tr>
      <td bgcolor="#FFCC00"><span class="style5">���A</span></td>
      <td bgcolor="#999999"><?
	 if($data[0][19]=='�}'){
echo '�L';
	 }else{
	 echo '�T����';
	 }
	  ?></td>
    </tr>
    <tr>
	<?
	echo '<form name="form1" method="post" action="../abc_cool/url_header.php">
      <td colspan="2"><div align="center">	';  
	  in_im_21($data[0][16],$data[0][27],$data[0][26],$data[0][28]);
	  echo'</div>';        

       echo '<div align="right">';
	  $data0000=$data[0][0];//�o�O�s��
	  
	  $sql2222="SELECT * 
FROM `f_s` 
WHERE 1 AND `user2` = '$__user' AND `pin` = '$data0000' ";
	  $sql2223=sql_b($sql2222);
	  if($sql2223[0][0]==''){
	  if($data[0][1]!=$_COOKIE["pass_1988"]){
	 echo ' 

        <input type="submit" name="Submit" value="�[�J�q�T��">
		<input type="hidden" name="my_200675_s" value="'.$_COOKIE["pass_1988"].'">
		<input type="hidden" name="my_200675_ss" value="'.$data[0][0].'">
		<input type="hidden" name="pin_kk47" value="aaa14">
		';
		}
		}else{
		echo '<font style="color:#ffffff">[ �w�[�J�n�� ]</font>';
		} 
		echo '</div></td></form>';
		?>
       
    </tr>
  </table>
</div>
<div id="Layer2" style="position:absolute; left:82px; top:540px; width:822px; height:7px; z-index:6; overflow: visible;">
  <hr width="100%" size="1">
  <div align="center">
    <?

  echo '���v�y :'.$sqls09_ous_jsa[0][14];
  ?>
  </div>
</div>
<?
$asdwqdq=file("down20i.h");

$asdwqdq=pass_u_go_out_2($asdwqdq);
foreach($asdwqdq as $a_value){
echo $a_value;

}//for

?>
<div id="Layer5" style="position:absolute; left:745px; top:23px; width:108px; height:44px; z-index:102"><a href="index.php" target="_self" class="style11">�׾­���</a></div>

<?
if($na_num=='001'){
echo'<div id="Layer6" style="position:absolute; left:90px; top:163px; width:794px; height:138px; z-index:101; font-size: 24px; overflow: visible; background-color: #000000; layer-background-color: #000000; border: 1px none #000000;">
  <p class="style10"><span class="style12">�q�Co�ϡ��C �ݡE�Xo�E�Xo�����Co�ϡ��C ��o�����Co</span><br>
    <span class="style6">��<span class="style8">��</span>���� ���ߡ@�@�@�@�@�@�@�������� <br>
    �������� ����<span class="style7">��</span>��������������<span class="style7">��</span>������������ <br>
    �������� <span class="style9">��</span>��������������������������<span class="style9">��</span>��<span class="style7">��</span> <br>
    ����<span class="style7">��</span>�� ����������<span class="style8">��</span>������@�������������� </span><br>
    <span class="style12">�q�Co�ϡ��C �ݡE�Xo�E�Xo�����Co�ϡ��C �ݡE�X o����</span></p>
</div>
<div id="Layer7" style="position:absolute; left:4px; top:6px; width:991px; height:562px; z-index:100; background-color: #000000; layer-background-color: #000000; border: 1px none #000000;"></div>
<div id="Layer8" style="position:absolute; left:93px; top:100px; width:125px; height:33px; z-index:102; font-size: 24px; color: #0066FF;">�׾¨t��</div>
';
}
?>
</body>
</html>
