<?
include("../abc_cool/cool.php");
ob_start();
$____user=$_COOKIE["pass_1988"];
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html><!-- InstanceBegin template="/Templates/back_.dwt.php" codeOutsideHTMLIsLocked="false" -->
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
        �ϥΪ� : <?
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
	  //-----------------------------------�W���O�^��
	  
	  in_im_20($my_job[0][16],$my_job[0][27],count($rr__2006_7_9_b),count($ss__2006_7_9_b),$my_job[0][26],$my_job[0][28]);
	  
	  ?></div></td>
    </tr>
    <tr>
      <td height="15" bgcolor="<?
echo $sqls09_ous_jsa[0][13];
?>">
         <table width="200" border="0" cellspacing="1" cellpadding="1">
            <tr>
              <td>¾�� : <?
		echo all_color_font($my_job[0][15],'�¦�',18)
		?></td>
            </tr>
        </table></td></tr>
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
?>">�ӤH���<br>      </td>
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
?>">�H�c<br>
      </td>
    </tr>
    <tr>
      <td height="15" bgcolor="#FFFFFF"><?
	  
	  
	  $qdwdwq2006_7_12=$_COOKIE["pass_1988"];
	  $q2006_7_1208="SELECT * 
FROM `e_mail` 
WHERE 1 AND `true` = '���\Ū' AND `uesr` = '$qdwdwq2006_7_12' ";
	  
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
		  ?>"><div align="center"><!-- InstanceBeginEditable name="���e" --><br>
			<?
			
			switch($windown){
			case email:$windown_2="�p�H";break;
			case emails:$windown_2="�d�ݫH��";break;
			case good:$windown_2="�n�峹";break;
			case good_f:$windown_2="�q�T��";break;
			case my_words:$windown_2="�ڪ��峹";break;
			case passwords_pin:$windown_2="���K�X";break;
			case email_add:$windown_2="�ƥ��H��";break;
			case myhobe:$windown_2="�ӤH��ƭק�";break;
			case myhobe_1:$windown_2="�򥻸�ƭק�";break;
			case myhobe_2:$windown_2="���n�]�w";break;
			case myhoa_3:$windown_2="�ʶR����";break;
            case mypassword_1:$windown_2="���\���K�X";break;
			case mypassword_2:$windown_2="���K�X����";break;
			case mypassword_3:$windown_2="�G�ӷs�K�X���X";break;
			case mypassword_4:$windown_2="�򥻸�ƭק令�\a";break;
			case mypassword_5:$windown_2="�ӤH��ƭק令�\a";break;
			case mypassword_6:$windown_2="�R���p�H���\a";break;
			case mypassword_7:$windown_2="�R���p�H����a";break;
			case mypassword_8:$windown_2="�ǰe�p�H���\a";break;
			case mypassword_9:$windown_2="�ǰe�p�H����a";break;
			case mypassword_10:$windown_2="�R���q�T�����\a";break;
			case mypassword_11:$windown_2="�H��ƥ��g�Ha";break;
			case mypassword_12:$windown_2="�ƥ��H��R�����\a";break;
			case mypassword_13:$windown_2="�\Ū�H��";break;			
			case mypassword_14:$windown_2="�R���ڪ��̷R���\a";break;		
case mypassword_15:$windown_2="���K�X����aaa";break;		
case mypassword_16:$windown_2="���򥻸�ƥ���aaa";break;		
case mypassword_17:$windown_2="���򥻸�ƥ���aaaa";break;		
case mypassword_18:$windown_2="�ǰe�p�H���ѭ�]�b��ga";break;		
case mypassword_19:$windown_2="�ǹ|���H���ѭ�]�b�������Ha";break;
case mypassword_31:$windown_2="�K�X�ƥؤ���a";break;
			case mypassword_20:$windown_2="�ǹ|���H���ѥ������@����a";break;
			case mypassword_101:$windown_2="�z�Q�T����";break;
		
		}
		 if($windown_2=='�K�X�ƥؤ���a'){
			 echo '<font>�s�K�X�ƥاC��4�Ӧr�� !</font>';
						  }//�q�T��
			
			
			
			
		 if($windown_2=='�z�Q�T����'){
			 echo '<font>�z�Q�T���� �L�k�ǰe !</font>';
			echo ' <embed src="sound/sorry1.Mp3"  visibility: hidden>';
			  }//�q�T��
			
			
			
		     if($windown_2=='���򥻸�ƥ���aaa'){
			 echo '<font>�z��J��e-MAIL �����T !</font>';
			  }//�q�T��
			if($windown_2=='�ǹ|���H���ѥ������@����a'){
			 echo '<font>�L�k�s��ǰe �������T�Q��L�� !</font>';
			 echo '<embed src="sound/sorry.Mp3"  visibility: hidden>';
			  }//�q�T��
			  
			  
			  		     if($windown_2=='�ǰe�p�H���ѭ�]�b��ga'){
			 echo '<font>�ǰe����! �z���e�C��5�Ӧr !</font>';
			  }//�q�T��
			  			  		     if($windown_2=='�ǹ|���H���ѭ�]�b�������Ha'){
			 echo '<font>�ǰe����! �L�k�ǰe���ۤv�Υ��׾§䤣�즹�H</font>';
			  }//�q�T��
			  
			  
			  		     if($windown_2=='���򥻸�ƥ���aaaa'){
			 echo '<font>�z��J������ �ܤ֭n�G�Ӧr</font>';
			  }//�q�T��
			  
			  
              if($windown_2=='�p�H'){
			   $sql_2006_7_5_a="SELECT * 
FROM `f_s` 
WHERE 1 AND `user2` 
='$____user'";
              $sql_2006_7_5_b=sql_b($sql_2006_7_5_a);//�q�T�� �s�� Show
			  in_indax_7($sql_2006_7_5_b,$_COOKIE["pass_1988"],$sqls09_ous_jsa[0][16],$sqls09_ous_jsa[0][19]);//�p�H
              }
			  
			  
			  if($windown_2=='�d�ݫH��'){
			  $sql_2006_7_5_a="SELECT * 
FROM `e_mail` 
WHERE 1 AND `uesr` = '$____user' ORDER BY `time` DESC";
              $sql_2006_7_5_b=sql_b($sql_2006_7_5_a);
			  
			  in_indax_8($sql_2006_7_5_b,$_COOKIE["pass_1988"],$sqls09_ous_jsa[0][16],$sqls09_ous_jsa[0][19]);
			  }//�d�ݫH��
			  
			  
			 if($windown_2=='�n�峹'){
			 
if($a_value==''){
$a_value=0;
} 			 
			 
			 $sql="SELECT * 
FROM `my_f_word` 
WHERE 1 AND `user` = '$____user'  LIMIT  $a_value , 35";
			 $dataa1999=sql_b($sql);

echo '<table width="670" height="40" border="1" cellpadding="2" cellspacing="2" bordercolor="#000000" bgcolor="'.$sqls09_ous_jsa[0][19].'">
  <tr bgcolor="'.$sqls09_ous_jsa[0][16].'">
    <th height="30" colspan="2" nowrap>�D�D</th>
    <th width="92" nowrap>�@��</th>
    <th width="54" nowrap>�H��</th>
    <th width="56" nowrap>�^��</th>
    <th width="96" nowrap>�R��</th>
  </tr>';  //�g�Xshow ����񭫽�
 for($i=0;$i<count($dataa1999);$i++){
 $dataai=$dataa1999[$i][1];//�ǽs��
			  
$sqlaaa="SELECT * 
FROM `bar_all_all` 
WHERE 1 AND `Num` = '$dataai'";
			 $dataaaa=sql_b($sqlaaa);
$dataaaadataaaa=$dataaaa[0][12];
			 
			  $dataaaab="SELECT * 
FROM `bar_all` 
WHERE 1 AND `pin_bar` 
= '$dataaaadataaaa' ";//bar ��X �X�ۭ��ӰQ�װ�
			  $dataaaabb=sql_b($dataaaab);
			  //-------------------------------------
			  $sadwqdqwdqwdwqfvo=$dataa1999[$i][1];
			  			  $dataaaabaaaas="SELECT * 
FROM `bar_all_alls` 
WHERE 1 AND `pin` = '$sadwqdqwdqwdwqfvo' ";//bar ��X �X�ۭ��ӰQ�װ�
			  $dataaaabbwwq=sql_b($dataaaabaaaas);
			  
			  
			  im_imdex_26($dataaaa[0],$____user,$dataaaabb[0][2],count($dataaaabbwwq),$sqls09_ous_jsa[0][19]);
			  
	
			   }//for end
			   
			   
			 echo '</table>' ;//����  		
			 
			 			 $sqlwww="SELECT * 
FROM `my_f_word` 
WHERE 1 AND `user` = '$____user' ";
			 $dataa1999wdqdqw=sql_b($sqlwww); 
			 $myhttp_2006_7_11='indax.php?windown='.$windown;
			  im_imdex_30(count($dataa1999wdqdqw),$a_value,$myhttp_2006_7_11,35);
			  }//�n�峹 
			  
			  
		     if($windown_2=='�q�T��'){
			 
			 $f_s_2006_7_5_a="SELECT * FROM `f_s` WHERE 1 AND `user2`='$____user' ";
              $f_s_2006_7_5_b=sql_b($f_s_2006_7_5_a);
			 
			   in_indax_10($f_s_2006_7_5_b,$_COOKIE["pass_1988"],$sqls09_ous_jsa[0][16],$sqls09_ous_jsa[0][19]);
			  }//�q�T��
			  
			  
			  if($windown_2=='�ڪ��峹'){
			  $sqlaaa_1="SELECT * 
FROM `pass` 
WHERE 1 AND `user` = '$____user' ";
			  $sqlaaa_2=sql_b($sqlaaa_1);
			  
 if($a_value==''){
$a_value=0;
}
			  
			  $sqlaaa_2_a=$sqlaaa_2[0][0];
			  $son_1006_1="SELECT * 
FROM `bar_all_all` 
WHERE 1  AND `good` != '�m��' AND `numID` = '$sqlaaa_2_a' ORDER BY `peos_num` DESC LIMIT  $a_value , 35";
$son_1006i_1=sql_b($son_1006_1);//���ܳ�
$son_1006_1_2006="SELECT * 
FROM `bar_all_all` 
WHERE 1 AND `good` != '�m��' AND `numID` = '$sqlaaa_2_a'";
$son_1006_1_2007=sql_b($son_1006_1_2006);//���ܳ�
//------------------------------------------
if($a_value==0){
$son_1006_2="SELECT * 
FROM `bar_all_all` 
WHERE 1 AND `good` = '�m��' AND `numID` = '$sqlaaa_2_a' ORDER BY `peos_num` DESC";
$son_1006i_2=sql_b($son_1006_2);//�m��
}
//-------------------------------------------
$son_1006_3="SELECT * 
FROM `bar_all_alls` 
WHERE 1 AND `user_us` = '$____user' AND `true` = '�}'  ";
$son_1006i_3=sql_b($son_1006_3);//�^�Ъ��H��
//----------------------------------------------			  
			im_imdex_25($son_1006i_1,$son_1006i_2,$son_1006i_3,$sqls09_ous_jsa[0][16],$sqls09_ous_jsa[0][19]);
			$myhttp_2006_7_11='indax.php?windown='.$windown;




			im_imdex_30(count($son_1006_1_2007),$a_value,$myhttp_2006_7_11,35);
			
			   }//�ڪ��峹
			   
			   
			  if($windown_2=='���K�X'){
			   in_indax_11($_COOKIE["pass_1988"],$sqls09_ous_jsa[0][16],$sqls09_ous_jsa[0][19]);
			     }//���K�X
				 
				 
			  if($windown_2=='�ƥ��H��'){
			  $dataa="SELECT * 
FROM `e_mails` 
WHERE 1 AND `uesr` 
= '$____user'";
			  $dataai=sql_b($dataa);
			   in_indax_12($dataai,$_COOKIE["pass_1988"],$sqls09_ous_jsa[0][16],$sqls09_ous_jsa[0][19]);
			     }//�ƥ��H��
				 
				 
			  if($windown_2=='�ӤH��ƭק�'){
			$sql2006_7_4_a2="SELECT * 
FROM `pass` 
WHERE 1 AND `user` = '$____user'";
 

				 $sql2006_7_4_b2=sql_b($sql2006_7_4_a2);
				 
				 
				 
				 $sql2006_7_4_a2ad39=$sql2006_7_4_b2[0][0];
							$sql2006_7_4_a21212="SELECT * 
FROM `bar_all_all` 
WHERE 1 AND `numID` = '$sql2006_7_4_a2ad39' ";
 

				 $sql2006_7_4_b2asd=sql_b($sql2006_7_4_a21212); 
				 
				 
				 
				  in_indax_13($sql2006_7_4_b2,$_COOKIE["pass_1988"],count($sql2006_7_4_b2asd),$sqls09_ous_jsa[0][16],$sqls09_ous_jsa[0][19]);

				  }//�ӤH��ƭק�
				  
				  
				 if($windown_2=='�򥻸�ƭק�'){
				 $sql2006_7_4_a1="SELECT `user` , `email` , `Q_` , `A_` , `pho_num` FROM `pass` WHERE 1 AND `user` = '$____user' ";
				 
				 $sql2006_7_4_b1=sql_b($sql2006_7_4_a1);
				 
				  in_indax_14($sql2006_7_4_b1,$_COOKIE["pass_1988"],$sqls09_ous_jsa[0][16],$sqls09_ous_jsa[0][19]);
				  
				  }//�򥻸�ƭק�
				  
				  
				 if($windown_2=='���n�]�w'){ 
				  in_indax_15($a);
				  }//���n�]�w
				  
				  
				  if($windown_2=='�ʶR����'){ 
				  in_indax_16($a);
				   }//�ʶR����
				   
				   
				if($windown_2=='�\Ū�H��'){ 
				
		 $sql2006_7_4_a1="SELECT * 
FROM `e_mail` 
WHERE 1 AND `num` 
= '$wins' AND `uesr` 
= '$____user' "; 
				 $sql2006_7_4_b1=sql_b($sql2006_7_4_a1);
				 
				 $sql2006_7_4_b1[0][5]=pass_u_go_out_333($sql2006_7_4_b1[0][5]);
				 if($sql2006_7_4_b1[0][0]!=''){
				 
				 $qwd_7_12="UPDATE `e_mail` SET `true` = '�w�\Ū' WHERE `num` = '$wins' AND  `true` = '���\Ū' AND `uesr` = '$____user' ;";
				 sql_a($qwd_7_12);
				 
				  in_indax_23($sql2006_7_4_b1,$_COOKIE["pass_1988"],$sqls09_ous_jsa[0][16],$sqls09_ous_jsa[0][19]);
				   
				   }else{
				   echo'<font>�z�L�k�\Ū���H��</font>';
				   }
				   
				   }

				//---------------------------------------------------------------------------Say   
				if($windown_2=='���K�X����'){ 
				  echo '<font>�K�X�P�b�����X !</font>';
				   }//���K�X����
				   
				   if($windown_2=='�G�ӷs�K�X���X'){ 
				  echo '<font>�s�K�X�P�A����J���K�X ���~ !</font>';
				   }//�G�ӷs�K�X����
				   
				if($windown_2=='���\���K�X'){ 
				  echo '<font>�K�X��s���\ !</font>';
				   }//�򥻱K�X�ק令�\
				
				if($windown_2=='�ӤH��ƭק令�\a'){ 
				  echo '<font>�ӤH��ƭק� ���\ !</font>';
				   }//�ӤH��ƭק令�\
				   
				if($windown_2=='�򥻸�ƭק令�\a'){ 
				  echo '<font>�򥻸�ƭק� ���\ !</font>';
				   }//�ӤH��ƭק令�\
				
				if($windown_2=='�R���p�H���\a'){ 
				
				  echo '<font>�R�����\ !<br><br></font>';
$sql_2006_7_5_a="SELECT * 
FROM `e_mail` 
WHERE 1 AND `uesr` = '$____user'";
              $sql_2006_7_5_b=sql_b($sql_2006_7_5_a);
			  echo'<br><br>';
			  in_indax_8($sql_2006_7_5_b,$_COOKIE["pass_1988"],$sqls09_ous_jsa[0][16],$sqls09_ous_jsa[0][19]);
				
				
				   }//�p�H
				
				
				
				if($windown_2=='�R���p�H����a'){ 
				  echo '<font>�R���p�H���� !</font>';
				   }//�p�H
				   
				if($windown_2=='�ǰe�p�H���\a'){ 
				  echo '<font>�ǰe�p�H���\</font>';
				   }//�ǰe�p�H
				   
				   				if($windown_2=='�ǰe�p�H����a'){ 
				  echo '<font>�ǰe�p�H����</font>';
				   }//�ǰe�p�H
				   
				   
				   				   
				   				if($windown_2=='�R���q�T�����\a'){ 
				  echo '<font>�R����� ���\ !</font>';
				   }//�ǰe�p�H
				   				   				if($windown_2=='�ƥ��H��R�����\a'){ 
												
				  echo '<font>�R����� ���\ !<br><br></font>';
				  
				  			  $dataa="SELECT * 
FROM `e_mails` 
WHERE 1 AND `uesr` 
= '$____user'";
			  $dataai=sql_b($dataa);
			   in_indax_12($dataai,$_COOKIE["pass_1988"],$sqls09_ous_jsa[0][16],$sqls09_ous_jsa[0][19]);

				  
				   }//�ƥ��H��R�����\  ���K�X����aaa
				   
				   				   				if($windown_2=='���K�X����aaa'){ 
				  echo '<font>�K�X�榡�����T !</font>';
				   }//�ǰe�p�H
				   
				   
				 if($windown_2=='�H��ƥ��g�Ha'){ 
				
				
		 $sql_2006_7_5_a="SELECT * FROM `f_s` WHERE 1 AND `user2` ='$____user'";
              $sql_2006_7_5_ai=sql_b($sql_2006_7_5_a);//�q�T�� �s�� Show
			  //------------------------------------------------------------------------
			  $sql_2006_7_5_b="SELECT * 
FROM `e_mails` 
WHERE 1 AND `num` = '$a12s' AND `uesr` = '$____user' ";
              $sql_2006_7_5_bi=sql_b($sql_2006_7_5_b);//�q�T������  tember
			  
			  
			  
			  in_indax_22($sql_2006_7_5_ai,$____user,$sql_2006_7_5_bi,$sqls09_ous_jsa[0][16]);//�p�H
				
				
				
				   }//�ǰe�p�H
				   
				   if($windown_2=='�R���ڪ��̷R���\a'){  
				   			 $sql="SELECT * 
FROM `my_f_word` 
WHERE 1 AND `user` = '$____user'";
			 $dataa1999=sql_b($sql);
			 
			echo'<font>�R����Ʀ��\ !<br><br></font>'; 
			 
echo '<table width="670" height="40" border="1" cellpadding="2" cellspacing="2" bordercolor="#000000">
  <tr bgcolor="'.$sqls09_ous_jsa[0][16].'">
    <th height="30" colspan="2" nowrap>�D�D</th>
    <th width="92" nowrap>�@��</th>
    <th width="54" nowrap>�H��</th>
    <th width="56" nowrap>�^��</th>
    <th width="96" nowrap>�R��</th>
  </tr>';  //�g�Xshow ����񭫽�
 for($i=0;$i<count($dataa1999);$i++){
 $dataai=$dataa1999[$i][1];//�ǽs��
			  
$sqlaaa="SELECT * 
FROM `bar_all_all` 
WHERE 1 AND `Num` = '$dataai' ";
			 $dataaaa=sql_b($sqlaaa);
$dataaaadataaaa=$dataaaa[0][12];
			 
			  $dataaaab="SELECT * 
FROM `bar_all` 
WHERE 1 AND `pin_bar` 
= '$dataaaadataaaa' ";//bar ��X �X�ۭ��ӰQ�װ�
			  $dataaaabb=sql_b($dataaaab);
			  
			  im_imdex_26($dataaaa[0],$____user,$dataaaabb[0][2]);
				   }//for
				   
				    echo '</table>' ;//����  
				}   //�ڪ��̷R
				
				
				
				
				
				
				
				
				
				
				
				
				
						if($adds=='u2s'){
		
		echo'<div align="left">';
		echo'<pre>';
		$aas=file("up28i.h");
		$aas=pass_u_go_out_2($aas);
		foreach($aas as $valueas){
		echo $valueas;
		}//���i	
	
echo'</pre></div>';

		

		}
				   
			?>
			<br>
			<br>  
			  <!-- InstanceEndEditable -->
		
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
</body>
<!-- InstanceEnd --></html>
