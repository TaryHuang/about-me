<?
include("../abc_cool/cool.php");
ob_start();
$po_20001="INSERT INTO `lea_user` ( `num` , `user` , `true_now` , `false_time` , `day_time_now` , `user_num` , `mmqw` , `fqewqw` , `daysssss` ) 
VALUES (
'�]�k�ɶ�', '', NOW( ) , NOW( ) , NOW( ) , '', '', '', ''
);";
//�s�W�@�����  ��{�b�ɶ��g�J �ѷb
sql_a($po_20001);

$po_20002="SELECT * 
FROM `lea_user` 
WHERE 1 
ORDER BY `day_time_now` DESC ";

$po_20003=sql_b($po_20002);//�ǥѮɶ�  ���誺��� �g��Ĥ@array[0][0] 
//-----------------------------------
$po_20005=$po_20003[0][3];

$po_20006="SELECT * 
FROM `lea_user` 
WHERE 1 AND `false_time` < '$po_20005'";

$po_20007=sql_b($po_20006);
//----�b�h���o �Ҧ��{�b�ɶ�


for($i=0;$i<count($po_20007);$i++){
$po_20008wwww=$po_20007[$i][0];

$po_20009="UPDATE `pass` SET `win` = '�}' WHERE `Num` = '$po_20008wwww' ";
sql_a($po_20009);


$po_20010="DELETE FROM `lea_user` WHERE `num` = '$po_20008wwww'";
sql_a($po_20010);

}//for

$po_20011="DELETE FROM `lea_user` WHERE `num` = '�]�k�ɶ�'";
sql_a($po_20011);

//----------�R�������]�k�ɶ�

				if($https=='' && $http==''){
				header("location:index.php?https=lv");
				
				}
				
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html><!-- InstanceBegin template="/Templates/back_s.dwt.php" codeOutsideHTMLIsLocked="false" -->
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
<!-- InstanceBeginEditable name="doctitle" -->
<title><?

echo $sqls09_ous_jsa[0][15];
?></title>
<!-- InstanceEndEditable --><script language="JavaScript" type="text/JavaScript">
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

<!-- InstanceBeginEditable name="head" --><!-- InstanceEndEditable -->
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
		  ?>"><div align="center"><!-- InstanceBeginEditable name=" body" --> 				
				<?	  
				echo'<br><br>';
				

				
				
				if($https=='lv'){
		$aas=file("up29i.h");
		$aas=pass_u_go_out_2($aas);
		
		echo'<div align="left"><pre>';
		foreach($aas as $valueas){
		echo $valueas;
		}//���i	
				echo'</pre></div>';
				}
		
		if($http!=''){
		
		$e2006_7_9_1="SELECT * 
FROM `bar_all_all` 
WHERE 1 AND `bar` = '$http' AND `true` = '�}' ";//�Ҧ��H���o��
		$e2006_7_9_2=sql_b($e2006_7_9_1);
		//------------------------------------
		$s2006_7_9_1="SELECT * 
FROM `bar_all_alls`WHERE 1 AND `true` = '�}'";//�Ҧ��H���^��
		$s2006_7_9_2=sql_b($s2006_7_9_1);
				//------------------------------------
				
				$s2006_7_9_1aaa="SELECT * 
FROM `bar` 
WHERE 1 AND `Num` = '$http' ";//�Ҧ��H���^��
		$s2006_7_9_2sss=sql_b($s2006_7_9_1aaa);


		
         in_index_2($son_1001i,'imdex.php?http=',$http,$e2006_7_9_2,$s2006_7_9_2,$s2006_7_9_2sss[0][1],$sqls09_ous_jsa[0][16],$sqls09_ous_jsa[0][19]);//show �Xbody
		}
		
		
		
		if($https=='show'){
$s2006_7_10_1="SELECT * 
FROM `lea_user` ORDER BY `day_time_now` DESC ";
		$s2006_7_10_11=sql_b($s2006_7_10_1);

$s2006_7_10_2s="SELECT * 
FROM `bar_all`";
		$s2006_7_10_2ss=sql_b($s2006_7_10_2s);


		
		im_imdex_29($s2006_7_10_11,$s2006_7_10_2ss,$sqls09_ous_jsa[0][16],$sqls09_ous_jsa[0][19]);
		
		}//end
		
				
		if($https=='us'){
		
		echo'
<div align="left">';
		echo'<pre>';
		$aas=file("sayhollo.h");
		$aas=pass_u_go_out_2($aas);
		foreach($aas as $value){
		echo $value;
		}//���i	
	
echo'</pre></div>';

		
		}

		?>
              <!-- InstanceEndEditable -->	<br>
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
<!-- InstanceEnd --></html>
