<?
include("abc_cool/cool.php");
?>

<?
ob_start();

				if($add=='' && $http=='' && $adds==''){
				header("location:index.php?add=lv");
				
				}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html><!-- InstanceBegin template="/Templates/index_.dwt.php" codeOutsideHTMLIsLocked="false" -->
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
<!-- InstanceBeginEditable name=" body" -->



<br>    
<?


				if($add=='lv'){
		$aas=file("h_ya/up29i.h");
		$aas=pass_u_go_out_2($aas);
		
		echo'<div align="left"><pre>';
		foreach($aas as $valueas){
		echo $valueas;
		}//公告	
				echo'</pre></div>';
				}


		if($http!=''){
				$e2006_7_9_1="SELECT * 
FROM `bar_all_all` 
WHERE 1 AND `bar` = '$http' AND `true` = '開' ";//所有人的發文
		$e2006_7_9_2=sql_b($e2006_7_9_1);
		//------------------------------------
		$s2006_7_9_1="SELECT * 
FROM `bar_all_alls`";//所有人的回覆
		$s2006_7_9_2=sql_b($s2006_7_9_1);
		
				$s2006_7_9_1aaa="SELECT * 
FROM `bar` 
WHERE 1 AND `Num` = '$http' ";//所有人的回覆
		$s2006_7_9_2sss=sql_b($s2006_7_9_1aaa);
		
		
		
         in_index_2($son_1001i,'index.php?add=rror','',$e2006_7_9_2,$s2006_7_9_2,$s2006_7_9_2sss[0][1],$sqls09_ous_jsa[0][16],$sqls09_ous_jsa[0][19]);//show 出body
		
		}
		
		else if($add=='adder'){
		
		in_index_3($sqls09_ous_jsa[0][19],$sqls09_ous_jsa[0][16]);
		}
		
		else if($add=='add_oks'){
		$qqqs_2001=file("v_ssword.h");
		
		
		$value_s_power=pass_u_go_out_2($qqqs_2001);
		see_words_100($sqls09_ous_jsa[0][16],$value_s_power,$sqls09_ous_jsa[0][19]);
		}
		
		else if($add=='rror'){
	 echo '<font>請先登入帳號 !</font>';
		}
		else if($add=='worry100'){
	 echo '<font>你輸入的帳號密碼有誤 !</font>' ;
		}
		else if($add=='worry105'){
	 echo '<font>恭喜您 帳號申請成功 !</font>';
		}
		else if($add=='sa108'){
        in_index_17($sqls09_ous_jsa[0][16],$sqls09_ous_jsa[0][19]);
		}
	    else if($add=='save108'){
		
		$user_d101=$user_d101-1365;
		
		$save108_d101="SELECT `Num` , `birsday_2` , `birsday_3` , `Q_` 
FROM `pass` 
WHERE 1 AND `Num` = '$user_d101'";
		$save108_d101_A=sql_b($save108_d101);//先取得資料庫編號  //這裡是給密碼提示 判定編號正確再++看生日對不對
$save108_d101_A_1=2006-($save108_d101_A[0][1]*$save108_d101_A[0][2])+($nnnns*$nnnns*$nnnns);
		if($save108_d101_A_1==$number_d101){
		
		$user_d101=$user_d101+563;
        in_index_18($save108_d101_A[0][3],$user_d101,$number_d101,$nnnns,$sqls09_ous_jsa[0][16],$sqls09_ous_jsa[0][19]);
		}//if  判定生日+總是否正確		
		}
		
		else if($add=='save108_no'){
         
          echo '<font>密碼提示答案 不正確 !</font>';
		  
		}//判定密碼提示 不正確
	   else if($add=='save108_word'){
         if($_COOKIE[tary_d102]){
          echo '<font>您的密碼是 '.$_COOKIE[tary_d102].' !</font>';
		  }else{
		  echo '<font>你的密碼又忘嚕? 再輸入一次吧 !</font>';
		  }
		}//判定密碼提示 正確
		
		else if($add=='say_102'){
		
		  echo '<font>找不到資料 您輸入的資料有誤 !</font>';
		
		}//判定真實明 跟帳號是否  但這裡是不正確的  就說..
		
		
		else if($add=='say_104'){
		
		  echo '<font>您成功登出 !</font>';
		
		}//判定真實明 跟帳號是否  但這裡是不正確的  就說..
		//end
		
		//----------------------------------------------
		if($add=='open_1'){
		echo '<font>您輸入帳號不正確 !</font>';
		in_index_3($sqls09_ous_jsa[0][19],$sqls09_ous_jsa[0][16]);

		}//判定帳號有誤
		if($add=='open_2'){
		echo '<font>您輸入帳號的數目不對 !</font>';
		in_index_3($sqls09_ous_jsa[0][19],$sqls09_ous_jsa[0][16]);

		}//判定帳號有誤
		if($add=='open_3'){
		echo '<font>您輸入的帳號有重複 !</font>';
		in_index_3($sqls09_ous_jsa[0][19],$sqls09_ous_jsa[0][16]);

		}//判定帳號有誤
				if($add=='open_4'){
		echo '<font>您輸入的暱稱有重複 !</font>';
		in_index_3($sqls09_ous_jsa[0][19],$sqls09_ous_jsa[0][16]);

		}//判定帳號有誤
		
		
						if($add=='open_5'){
		echo '<font>您輸入的暱稱的數目不對 !</font>';
		in_index_3($sqls09_ous_jsa[0][19],$sqls09_ous_jsa[0][16]);

		}//判定帳號有誤


						if($add=='open_6'){
		echo '<font>您輸入的密碼不正確 !</font>';
		in_index_3($sqls09_ous_jsa[0][19],$sqls09_ous_jsa[0][16]);

		}//判定帳號有誤
								if($add=='open_7'){
		echo '<font>您輸入的二次密碼都不同 !</font>';
		in_index_3($sqls09_ous_jsa[0][19],$sqls09_ous_jsa[0][16]);

		}//判定帳號有誤
										if($add=='open_8'){
		echo '<font>您輸入的密碼數目不對 !</font>';
		in_index_3($sqls09_ous_jsa[0][19],$sqls09_ous_jsa[0][16]);

		}//判定帳號有誤
		
												if($add=='open_9'){
		echo '<font>您輸入的生日不正確</font>';
		in_index_3($sqls09_ous_jsa[0][19],$sqls09_ous_jsa[0][16]);

		}//判定帳號有誤
		
	if($add=='open_10'){
		echo '<font>您輸入的姓名不正確</font>';
		in_index_3($sqls09_ous_jsa[0][19],$sqls09_ous_jsa[0][16]);

		}//判定帳號有誤
		if($add=='open_12'){
		echo '<font>您輸入的答案格式有誤 !</font>';
		in_index_3($sqls09_ous_jsa[0][19],$sqls09_ous_jsa[0][16]);

		}//判定帳號有誤
		
				if($add=='open_13'){
		echo '<font>您輸入的E-MAIL格式有誤 !</font>';
		in_index_3($sqls09_ous_jsa[0][19],$sqls09_ous_jsa[0][16]);

		}//判定帳號有誤
						if($add=='worry106'){
		echo '<font>帳號與密碼無法相同 !</font>';
		in_index_3($sqls09_ous_jsa[0][19],$sqls09_ous_jsa[0][16]);

		}//判定帳號有誤
		
								if($add=='worry107'){
		echo '<font>您有資料尚未填寫 !</font>';
		in_index_3($sqls09_ous_jsa[0][19],$sqls09_ous_jsa[0][16]);

		}//判定帳號有誤
		
		
		
		
		
		
				
		if($adds=='us'){
		
		echo'<div align="left">';
		echo'<pre>';
		$aas=file("h_ya/sayhollo.h");
		$aas=pass_u_go_out_2($aas);
		foreach($aas as $valueas){
		echo $valueas;
		}//公告	
	
echo'</pre></div>';

		

		}
		
		
		?><!-- InstanceEndEditable -->	<br>
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
		  ?>"><form action="url_header.php" method="post" name="form1" target="_self">
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
<!-- InstanceEnd --></html>
