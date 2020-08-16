<?
include("../abc_cool/cool.php");
ob_start();
$____user=$_COOKIE["pass_1988"];
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html><!-- InstanceBegin template="/Templates/back_.dwt.php" codeOutsideHTMLIsLocked="false" -->
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
		  ?>"><div align="center"><!-- InstanceBeginEditable name="內容" --><br>
			<?
			
			switch($windown){
			case email:$windown_2="私信";break;
			case emails:$windown_2="查看信件";break;
			case good:$windown_2="好文章";break;
			case good_f:$windown_2="通訊錄";break;
			case my_words:$windown_2="我的文章";break;
			case passwords_pin:$windown_2="更改密碼";break;
			case email_add:$windown_2="備份信件";break;
			case myhobe:$windown_2="個人資料修改";break;
			case myhobe_1:$windown_2="基本資料修改";break;
			case myhobe_2:$windown_2="偏好設定";break;
			case myhoa_3:$windown_2="購買等級";break;
            case mypassword_1:$windown_2="成功換密碼";break;
			case mypassword_2:$windown_2="更改密碼失敗";break;
			case mypassword_3:$windown_2="二個新密碼不合";break;
			case mypassword_4:$windown_2="基本資料修改成功a";break;
			case mypassword_5:$windown_2="個人資料修改成功a";break;
			case mypassword_6:$windown_2="刪除私信成功a";break;
			case mypassword_7:$windown_2="刪除私信失敗a";break;
			case mypassword_8:$windown_2="傳送私信成功a";break;
			case mypassword_9:$windown_2="傳送私信失敗a";break;
			case mypassword_10:$windown_2="刪除通訊錄成功a";break;
			case mypassword_11:$windown_2="信件備份寫信a";break;
			case mypassword_12:$windown_2="備份信件刪除成功a";break;
			case mypassword_13:$windown_2="閱讀信封";break;			
			case mypassword_14:$windown_2="刪除我的最愛成功a";break;		
case mypassword_15:$windown_2="更改密碼失敗aaa";break;		
case mypassword_16:$windown_2="更改基本資料失敗aaa";break;		
case mypassword_17:$windown_2="更改基本資料失敗aaaa";break;		
case mypassword_18:$windown_2="傳送私信失敗原因在填寫a";break;		
case mypassword_19:$windown_2="傳頌斯信失敗原因在未有此人a";break;
case mypassword_31:$windown_2="密碼數目不對a";break;
			case mypassword_20:$windown_2="傳頌斯信失敗必須等一分鐘a";break;
			case mypassword_101:$windown_2="您被禁言中";break;
		
		}
		 if($windown_2=='密碼數目不對a'){
			 echo '<font>新密碼數目低於4個字元 !</font>';
						  }//通訊錄
			
			
			
			
		 if($windown_2=='您被禁言中'){
			 echo '<font>您被禁言中 無法傳送 !</font>';
			echo ' <embed src="sound/sorry1.Mp3"  visibility: hidden>';
			  }//通訊錄
			
			
			
		     if($windown_2=='更改基本資料失敗aaa'){
			 echo '<font>您輸入的e-MAIL 不正確 !</font>';
			  }//通訊錄
			if($windown_2=='傳頌斯信失敗必須等一分鐘a'){
			 echo '<font>無法連續傳送 必須等三十秒過後 !</font>';
			 echo '<embed src="sound/sorry.Mp3"  visibility: hidden>';
			  }//通訊錄
			  
			  
			  		     if($windown_2=='傳送私信失敗原因在填寫a'){
			 echo '<font>傳送失敗! 您內容低於5個字 !</font>';
			  }//通訊錄
			  			  		     if($windown_2=='傳頌斯信失敗原因在未有此人a'){
			 echo '<font>傳送失敗! 無法傳送給自己或本論壇找不到此人</font>';
			  }//通訊錄
			  
			  
			  		     if($windown_2=='更改基本資料失敗aaaa'){
			 echo '<font>您輸入的答案 至少要二個字</font>';
			  }//通訊錄
			  
			  
              if($windown_2=='私信'){
			   $sql_2006_7_5_a="SELECT * 
FROM `f_s` 
WHERE 1 AND `user2` 
='$____user'";
              $sql_2006_7_5_b=sql_b($sql_2006_7_5_a);//通訊錄 連結 Show
			  in_indax_7($sql_2006_7_5_b,$_COOKIE["pass_1988"],$sqls09_ous_jsa[0][16],$sqls09_ous_jsa[0][19]);//私信
              }
			  
			  
			  if($windown_2=='查看信件'){
			  $sql_2006_7_5_a="SELECT * 
FROM `e_mail` 
WHERE 1 AND `uesr` = '$____user' ORDER BY `time` DESC";
              $sql_2006_7_5_b=sql_b($sql_2006_7_5_a);
			  
			  in_indax_8($sql_2006_7_5_b,$_COOKIE["pass_1988"],$sqls09_ous_jsa[0][16],$sqls09_ous_jsa[0][19]);
			  }//查看信件
			  
			  
			 if($windown_2=='好文章'){
			 
if($a_value==''){
$a_value=0;
} 			 
			 
			 $sql="SELECT * 
FROM `my_f_word` 
WHERE 1 AND `user` = '$____user'  LIMIT  $a_value , 35";
			 $dataa1999=sql_b($sql);

echo '<table width="670" height="40" border="1" cellpadding="2" cellspacing="2" bordercolor="#000000" bgcolor="'.$sqls09_ous_jsa[0][19].'">
  <tr bgcolor="'.$sqls09_ous_jsa[0][16].'">
    <th height="30" colspan="2" nowrap>主題</th>
    <th width="92" nowrap>作者</th>
    <th width="54" nowrap>人氣</th>
    <th width="56" nowrap>回覆</th>
    <th width="96" nowrap>刪除</th>
  </tr>';  //寫出show 不能放重複
 for($i=0;$i<count($dataa1999);$i++){
 $dataai=$dataa1999[$i][1];//傳編號
			  
$sqlaaa="SELECT * 
FROM `bar_all_all` 
WHERE 1 AND `Num` = '$dataai'";
			 $dataaaa=sql_b($sqlaaa);
$dataaaadataaaa=$dataaaa[0][12];
			 
			  $dataaaab="SELECT * 
FROM `bar_all` 
WHERE 1 AND `pin_bar` 
= '$dataaaadataaaa' ";//bar 選出 出自哪個討論區
			  $dataaaabb=sql_b($dataaaab);
			  //-------------------------------------
			  $sadwqdqwdqwdwqfvo=$dataa1999[$i][1];
			  			  $dataaaabaaaas="SELECT * 
FROM `bar_all_alls` 
WHERE 1 AND `pin` = '$sadwqdqwdqwdwqfvo' ";//bar 選出 出自哪個討論區
			  $dataaaabbwwq=sql_b($dataaaabaaaas);
			  
			  
			  im_imdex_26($dataaaa[0],$____user,$dataaaabb[0][2],count($dataaaabbwwq),$sqls09_ous_jsa[0][19]);
			  
	
			   }//for end
			   
			   
			 echo '</table>' ;//結束  		
			 
			 			 $sqlwww="SELECT * 
FROM `my_f_word` 
WHERE 1 AND `user` = '$____user' ";
			 $dataa1999wdqdqw=sql_b($sqlwww); 
			 $myhttp_2006_7_11='indax.php?windown='.$windown;
			  im_imdex_30(count($dataa1999wdqdqw),$a_value,$myhttp_2006_7_11,35);
			  }//好文章 
			  
			  
		     if($windown_2=='通訊錄'){
			 
			 $f_s_2006_7_5_a="SELECT * FROM `f_s` WHERE 1 AND `user2`='$____user' ";
              $f_s_2006_7_5_b=sql_b($f_s_2006_7_5_a);
			 
			   in_indax_10($f_s_2006_7_5_b,$_COOKIE["pass_1988"],$sqls09_ous_jsa[0][16],$sqls09_ous_jsa[0][19]);
			  }//通訊錄
			  
			  
			  if($windown_2=='我的文章'){
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
WHERE 1  AND `good` != '置頂' AND `numID` = '$sqlaaa_2_a' ORDER BY `peos_num` DESC LIMIT  $a_value , 35";
$son_1006i_1=sql_b($son_1006_1);//不至頂
$son_1006_1_2006="SELECT * 
FROM `bar_all_all` 
WHERE 1 AND `good` != '置頂' AND `numID` = '$sqlaaa_2_a'";
$son_1006_1_2007=sql_b($son_1006_1_2006);//不至頂
//------------------------------------------
if($a_value==0){
$son_1006_2="SELECT * 
FROM `bar_all_all` 
WHERE 1 AND `good` = '置頂' AND `numID` = '$sqlaaa_2_a' ORDER BY `peos_num` DESC";
$son_1006i_2=sql_b($son_1006_2);//置頂
}
//-------------------------------------------
$son_1006_3="SELECT * 
FROM `bar_all_alls` 
WHERE 1 AND `user_us` = '$____user' AND `true` = '開'  ";
$son_1006i_3=sql_b($son_1006_3);//回覆的人數
//----------------------------------------------			  
			im_imdex_25($son_1006i_1,$son_1006i_2,$son_1006i_3,$sqls09_ous_jsa[0][16],$sqls09_ous_jsa[0][19]);
			$myhttp_2006_7_11='indax.php?windown='.$windown;




			im_imdex_30(count($son_1006_1_2007),$a_value,$myhttp_2006_7_11,35);
			
			   }//我的文章
			   
			   
			  if($windown_2=='更改密碼'){
			   in_indax_11($_COOKIE["pass_1988"],$sqls09_ous_jsa[0][16],$sqls09_ous_jsa[0][19]);
			     }//更改密碼
				 
				 
			  if($windown_2=='備份信件'){
			  $dataa="SELECT * 
FROM `e_mails` 
WHERE 1 AND `uesr` 
= '$____user'";
			  $dataai=sql_b($dataa);
			   in_indax_12($dataai,$_COOKIE["pass_1988"],$sqls09_ous_jsa[0][16],$sqls09_ous_jsa[0][19]);
			     }//備份信件
				 
				 
			  if($windown_2=='個人資料修改'){
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

				  }//個人資料修改
				  
				  
				 if($windown_2=='基本資料修改'){
				 $sql2006_7_4_a1="SELECT `user` , `email` , `Q_` , `A_` , `pho_num` FROM `pass` WHERE 1 AND `user` = '$____user' ";
				 
				 $sql2006_7_4_b1=sql_b($sql2006_7_4_a1);
				 
				  in_indax_14($sql2006_7_4_b1,$_COOKIE["pass_1988"],$sqls09_ous_jsa[0][16],$sqls09_ous_jsa[0][19]);
				  
				  }//基本資料修改
				  
				  
				 if($windown_2=='偏好設定'){ 
				  in_indax_15($a);
				  }//偏好設定
				  
				  
				  if($windown_2=='購買等級'){ 
				  in_indax_16($a);
				   }//購買等級
				   
				   
				if($windown_2=='閱讀信封'){ 
				
		 $sql2006_7_4_a1="SELECT * 
FROM `e_mail` 
WHERE 1 AND `num` 
= '$wins' AND `uesr` 
= '$____user' "; 
				 $sql2006_7_4_b1=sql_b($sql2006_7_4_a1);
				 
				 $sql2006_7_4_b1[0][5]=pass_u_go_out_333($sql2006_7_4_b1[0][5]);
				 if($sql2006_7_4_b1[0][0]!=''){
				 
				 $qwd_7_12="UPDATE `e_mail` SET `true` = '已閱讀' WHERE `num` = '$wins' AND  `true` = '未閱讀' AND `uesr` = '$____user' ;";
				 sql_a($qwd_7_12);
				 
				  in_indax_23($sql2006_7_4_b1,$_COOKIE["pass_1988"],$sqls09_ous_jsa[0][16],$sqls09_ous_jsa[0][19]);
				   
				   }else{
				   echo'<font>您無法閱讀此信封</font>';
				   }
				   
				   }

				//---------------------------------------------------------------------------Say   
				if($windown_2=='更改密碼失敗'){ 
				  echo '<font>密碼與帳號不合 !</font>';
				   }//更改密碼失敗
				   
				   if($windown_2=='二個新密碼不合'){ 
				  echo '<font>新密碼與再次輸入的密碼 有誤 !</font>';
				   }//二個新密碼不何
				   
				if($windown_2=='成功換密碼'){ 
				  echo '<font>密碼更新成功 !</font>';
				   }//基本密碼修改成功
				
				if($windown_2=='個人資料修改成功a'){ 
				  echo '<font>個人資料修改 成功 !</font>';
				   }//個人資料修改成功
				   
				if($windown_2=='基本資料修改成功a'){ 
				  echo '<font>基本資料修改 成功 !</font>';
				   }//個人資料修改成功
				
				if($windown_2=='刪除私信成功a'){ 
				
				  echo '<font>刪除成功 !<br><br></font>';
$sql_2006_7_5_a="SELECT * 
FROM `e_mail` 
WHERE 1 AND `uesr` = '$____user'";
              $sql_2006_7_5_b=sql_b($sql_2006_7_5_a);
			  echo'<br><br>';
			  in_indax_8($sql_2006_7_5_b,$_COOKIE["pass_1988"],$sqls09_ous_jsa[0][16],$sqls09_ous_jsa[0][19]);
				
				
				   }//私信
				
				
				
				if($windown_2=='刪除私信失敗a'){ 
				  echo '<font>刪除私信失敗 !</font>';
				   }//私信
				   
				if($windown_2=='傳送私信成功a'){ 
				  echo '<font>傳送私信成功</font>';
				   }//傳送私信
				   
				   				if($windown_2=='傳送私信失敗a'){ 
				  echo '<font>傳送私信失敗</font>';
				   }//傳送私信
				   
				   
				   				   
				   				if($windown_2=='刪除通訊錄成功a'){ 
				  echo '<font>刪除資料 成功 !</font>';
				   }//傳送私信
				   				   				if($windown_2=='備份信件刪除成功a'){ 
												
				  echo '<font>刪除資料 成功 !<br><br></font>';
				  
				  			  $dataa="SELECT * 
FROM `e_mails` 
WHERE 1 AND `uesr` 
= '$____user'";
			  $dataai=sql_b($dataa);
			   in_indax_12($dataai,$_COOKIE["pass_1988"],$sqls09_ous_jsa[0][16],$sqls09_ous_jsa[0][19]);

				  
				   }//備份信件刪除成功  更改密碼失敗aaa
				   
				   				   				if($windown_2=='更改密碼失敗aaa'){ 
				  echo '<font>密碼格式不正確 !</font>';
				   }//傳送私信
				   
				   
				 if($windown_2=='信件備份寫信a'){ 
				
				
		 $sql_2006_7_5_a="SELECT * FROM `f_s` WHERE 1 AND `user2` ='$____user'";
              $sql_2006_7_5_ai=sql_b($sql_2006_7_5_a);//通訊錄 連結 Show
			  //------------------------------------------------------------------------
			  $sql_2006_7_5_b="SELECT * 
FROM `e_mails` 
WHERE 1 AND `num` = '$a12s' AND `uesr` = '$____user' ";
              $sql_2006_7_5_bi=sql_b($sql_2006_7_5_b);//通訊錄中的  tember
			  
			  
			  
			  in_indax_22($sql_2006_7_5_ai,$____user,$sql_2006_7_5_bi,$sqls09_ous_jsa[0][16]);//私信
				
				
				
				   }//傳送私信
				   
				   if($windown_2=='刪除我的最愛成功a'){  
				   			 $sql="SELECT * 
FROM `my_f_word` 
WHERE 1 AND `user` = '$____user'";
			 $dataa1999=sql_b($sql);
			 
			echo'<font>刪除資料成功 !<br><br></font>'; 
			 
echo '<table width="670" height="40" border="1" cellpadding="2" cellspacing="2" bordercolor="#000000">
  <tr bgcolor="'.$sqls09_ous_jsa[0][16].'">
    <th height="30" colspan="2" nowrap>主題</th>
    <th width="92" nowrap>作者</th>
    <th width="54" nowrap>人氣</th>
    <th width="56" nowrap>回覆</th>
    <th width="96" nowrap>刪除</th>
  </tr>';  //寫出show 不能放重複
 for($i=0;$i<count($dataa1999);$i++){
 $dataai=$dataa1999[$i][1];//傳編號
			  
$sqlaaa="SELECT * 
FROM `bar_all_all` 
WHERE 1 AND `Num` = '$dataai' ";
			 $dataaaa=sql_b($sqlaaa);
$dataaaadataaaa=$dataaaa[0][12];
			 
			  $dataaaab="SELECT * 
FROM `bar_all` 
WHERE 1 AND `pin_bar` 
= '$dataaaadataaaa' ";//bar 選出 出自哪個討論區
			  $dataaaabb=sql_b($dataaaab);
			  
			  im_imdex_26($dataaaa[0],$____user,$dataaaabb[0][2]);
				   }//for
				   
				    echo '</table>' ;//結束  
				}   //我的最愛
				
				
				
				
				
				
				
				
				
				
				
				
				
						if($adds=='u2s'){
		
		echo'<div align="left">';
		echo'<pre>';
		$aas=file("up28i.h");
		$aas=pass_u_go_out_2($aas);
		foreach($aas as $valueas){
		echo $valueas;
		}//公告	
	
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
<!-- InstanceEnd --></html>
