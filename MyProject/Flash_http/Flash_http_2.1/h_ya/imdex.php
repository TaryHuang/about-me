<?
include("../abc_cool/cool.php");
ob_start();


?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html><!-- InstanceBegin template="/Templates/back_s.dwt.php" codeOutsideHTMLIsLocked="false" -->
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
        使用者 : <?
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
	  //-----------------------------------上面是發文
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
        <table width="224" border="0" cellspacing="1" cellpadding="1">
          <tr>
            <td> <?
		if($my_job[0][15]!='無'){	
		include("body_18.php");
		echo'<div align="right"><input name="adwdwd" type="button" value="鑰匙" onClick="cookie_18n()"></div>';
		}
		
		echo '職務 :';
		all_color_font($my_job[0][15],'黑色',16);
		
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
?>">系統<br></td>
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
?>">選單<br>      </td>
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
switch($pins){
case qq1:$qqq1="秀出文章";break;
case qq2:$qqq1="發表文章";break;
case qq3:$qqq1="尋找文章";break;
case qq4:$qqq1="版主管理";break;
case qq5:$qqq1="黑名單";break;
case qq6:$qqq1="新增黑名單";break;
case qq7:$qqq1="新增黑名單a";break;
}

if($qqq1=="秀出文章"){
if($a_value==''){
$a_value=0;
}

$son_1006_1="SELECT * 
FROM `bar_all_all` 
WHERE 1 AND `good` != '置頂' AND `bar` = '$http' AND `bar_all` = '$value' AND `true` = '開'  ORDER BY `peos_num` DESC  LIMIT  $a_value , 50 ";
$son_1006i_1a=sql_b($son_1006_1);//不至頂



$son_1006_1_2006="SELECT * 
FROM `bar_all_all` 
WHERE 1 AND `good` != '置頂' AND `bar` = '$http' AND `bar_all` = '$value' AND `true` = '開'  ORDER BY `peos_num` DESC ";
$son_1006_1_2007=sql_b($son_1006_1_2006);//不至頂
//------------------------------------------


if($a_value==0){
$son_1006_2="SELECT * 
FROM `bar_all_all` 
WHERE 1 AND `good` 
= '置頂' AND `bar` = '$http' AND `bar_all` = '$value' AND `true` = '開' ORDER BY `peos_num` DESC ";
$son_1006i_2=sql_b($son_1006_2);//置頂
}else{
$son_1006i_2='';
}

//-------------------------------------------
$son_1006_3="SELECT * 
FROM `bar_all_all` 
WHERE 1 AND `bar` = '$http' AND `bar_all` = '$value' AND `true` = '開' ";
$son_1006i_3=sql_b($son_1006_3);//所有的文章
//-------------------------------------------

$son_1006_8="SELECT * 
FROM `bar_all_alls` 
WHERE 1 AND `barrrr` 
= '$value' AND `true` = '開'";
$son_1006i_8=sql_b($son_1006_8);

$count_1006i_8=0;

for($i=0;$i<count($son_1006i_3);$i++){
for($a=0;$a<count($son_1006i_8);$a++){
if($son_1006i_3[$i][0]==$son_1006i_8[$a][7]){
$count_1006i_8++;
}//if
}
}//for
//-------------------------------------------//所有的回文數  要扣掉 關閉的文章
if($say_2006=='dsa'){
echo '<br><font>[ 無法連續發文 請等候..]</font><br>';
echo '<embed src="sound/sorry.Mp3"  visibility: hidden>';
}//end

if($say_2006=='dsss'){
echo '<br><font >[ 您正被禁言中 無法發文 ]</font><br>';
echo '<embed src="sound/sorry1.Mp3"  visibility: hidden>';
}//end


in_indax_41($value,$http);

im_imdex_5($son_1006i_1a,'',$son_1006i_2,count($son_1006i_3),$count_1006i_8,$son_1006i_8,$sqls09_ous_jsa[0][16],$sqls09_ous_jsa[0][19]);



$myhttp_2006_7_11='imdex.php?http='.$http.'&value='.$value.'&pins='.$pins;
im_imdex_30(count($son_1006_1_2007),$a_value,$myhttp_2006_7_11,50);
echo '<div align="right">';



$myhttp_2006_7_122='imdex.php?http='.$http.'&value='.$value.'&pins=qq3';
im_imdex_31($myhttp_2006_7_122);

echo '</div>';
}//end


if($qqq1=="發表文章"){
include("../abc_cool/cools.php");

$sql_2006_7_6a="SELECT * 
FROM `pass` 
WHERE 1 AND `user` = '$sql_pass'";
$sql_2006_7_6i=sql_b($sql_2006_7_6a);

in_indax_24($a,$sql_2006_7_6i[0][3],$value,$http,$sql_2006_7_6i[0][1],$sqls09_ous_jsa[0][16],$sqls09_ous_jsa[0][19]);
}




if($qqq1=="版主管理"){

$sql_2006_7_6as="SELECT * 
FROM `bar_all` 
WHERE 1 AND `pin_bar` = '$value'";
$sql_2006_7_6i=sql_b($sql_2006_7_6as);


$sql_2006_7_6as1="SELECT * 
FROM `pass` 
WHERE 1 AND `user` = '$sql_pass' ";
$sql_2006_7_6i2=sql_b($sql_2006_7_6as1);




if($sql_2006_7_6i2[0][1]==$sql_2006_7_6i[0][4] || $sql_2006_7_6i2[0][1]==$sql_2006_7_6i[0][5] || $sql_2006_7_6i2[0][15]=='管理員(最高權限)'){


//-------------------------------------------
$son_1006_3="SELECT * 
FROM `bar_all_all` 
WHERE 1 AND `bar_all` 
='$value' AND `true` = '關' AND `peo` !=  `id` ORDER BY `peos_num` DESC  ";
$son_1006i_3=sql_b($son_1006_3);//所有關閉的且府合子文章文張
//-------------------------------------------
in_indax_43($value,$http);
in_indax_42($son_1006i_3,$sql_pass,$value,$http,$sqls09_ous_jsa[0][16],$sqls09_ous_jsa[0][19]);

}else{

header("location:imdex.php?value=$value&http=$http&pins=qq1");

}



}




if($qqq1=="新增黑名單"){

$sql_2006_7_6as="SELECT * 
FROM `bar_all` 
WHERE 1 AND `pin_bar` = '$value'";
$sql_2006_7_6i=sql_b($sql_2006_7_6as);


$sql_2006_7_6as1="SELECT * 
FROM `pass` 
WHERE 1 AND `user` = '$sql_pass' ";
$sql_2006_7_6i2=sql_b($sql_2006_7_6as1);




if($sql_2006_7_6i2[0][1]==$sql_2006_7_6i[0][4] || $sql_2006_7_6i2[0][1]==$sql_2006_7_6i[0][5] || $sql_2006_7_6i2[0][15]=='管理員(最高權限)'){

in_indax_47($value,$http);
im_imdex_46($value,$http,$sqls09_ous_jsa[0][16],$sqls09_ous_jsa[0][19]);

}else{

header("location:imdex.php?value=$value&http=$http&pins=qq1");

}



}











if($qqq1=="新增黑名單a"){

$sql_2006_7_6as="SELECT * 
FROM `bar_all` 
WHERE 1 AND `pin_bar` = '$value'";
$sql_2006_7_6i=sql_b($sql_2006_7_6as);


$sql_2006_7_6as1="SELECT * 
FROM `pass` 
WHERE 1 AND `user` = '$sql_pass' ";
$sql_2006_7_6i2=sql_b($sql_2006_7_6as1);




if($sql_2006_7_6i2[0][1]==$sql_2006_7_6i[0][4] || $sql_2006_7_6i2[0][1]==$sql_2006_7_6i[0][5] || $sql_2006_7_6i2[0][15]=='管理員(最高權限)'){

$assqwd="SELECT * 
FROM `pass` 
WHERE 1 AND `Num` = '$pc_number' ";
$assqwdsasas=sql_b($assqwd);

in_indax_47($value,$http);



if($assqwdsasas[0][0]!=''){

in_indax_48($assqwdsasas,$pc_sssaaa,$pc_becuse,$valuessss,$sql_2006_7_6i2[0][3],$http,$sqls09_ous_jsa[0][16],$sqls09_ous_jsa[0][19]);


}else{
echo'<br><font>[ 抱歉 ! 找不到此人 ]</font><br>';
}//end
}else{

header("location:imdex.php?value=$value&http=$http&pins=qq1");

}



}










if($qqq1=="黑名單"){

$sql_2006_7_6as="SELECT * 
FROM `bar_all` 
WHERE 1 AND `pin_bar` = '$value'";
$sql_2006_7_6i=sql_b($sql_2006_7_6as);


$sql_2006_7_6as1="SELECT * 
FROM `pass` 
WHERE 1 AND `user` = '$sql_pass' ";
$sql_2006_7_6i2=sql_b($sql_2006_7_6as1);




if($sql_2006_7_6i2[0][1]==$sql_2006_7_6i[0][4] || $sql_2006_7_6i2[0][1]==$sql_2006_7_6i[0][5] || $sql_2006_7_6i2[0][15]=='管理員(最高權限)'){


//-------------------------------------------
$son_1006_3="SELECT * 
FROM `lea_user` 
WHERE 1 AND `mmqw` = '$value'";
$son_1006i_3=sql_b($son_1006_3);//所有關閉的且府合子文章文張
//-------------------------------------------
in_indax_44($value,$http);
im_imdex_45($son_1006i_3,$sqls09_ous_jsa[0][16],$sqls09_ous_jsa[0][19]);

}else{

header("location:imdex.php?value=$value&http=$http&pins=qq1");

}

}







if($qqq1=="尋找文章"){

//------------------------------------------------
$POST_2006_7_11_a='%'.$_POST["say_jo"].'%';//title
if($a_value==''){
$a_value=0;
}



in_indax_41($value,$http);


$sql_2006_7_6a="SELECT * 
FROM `bar_all_all` 
WHERE 1 AND `title` 
LIKE '$POST_2006_7_11_a' AND `bar` = '$http' AND `bar_all` = '$value' AND `true` = '開' ORDER BY `peos_num` DESC  ";
$sql_2006_7_6i=sql_b($sql_2006_7_6a);


//-------------------------------------------
$son_1006_3="SELECT * 
FROM `bar_all_all` 
WHERE 1 AND `bar` = '$http' AND `bar_all` = '$value' AND `true` = '開' ";
$son_1006i_3=sql_b($son_1006_3);//所有的文章
//-------------------------------------------
$son_1006_8="SELECT * 
FROM `bar_all_alls` 
WHERE 1 AND `barrrr` 
= '$value' AND `true` = '開'";
$son_1006i_8=sql_b($son_1006_8);

$count_1006i_8=0;

for($i=0;$i<count($son_1006i_3);$i++){
for($a=0;$a<count($son_1006i_8);$a++){
if($son_1006i_3[$i][0]==$son_1006i_8[$a][7]){
$count_1006i_8++;
}//if
}
}//for



im_imdex_32($sql_2006_7_6i,$son_1006i_8,count($son_1006i_3),$count_1006i_8,$sqls09_ous_jsa[0][16],$sqls09_ous_jsa[0][19]);//列表




echo '<div align="right">';
$myhttp_2006_7_122='imdex.php?http='.$http.'&value='.$value.'&pins=qq3';
im_imdex_31($myhttp_2006_7_122);
echo '</div>';//收尋器
}








?>
<br>
<br>
<br>
<br>
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
<div id="Layer1" style="position:absolute; left:251px; top:73px; width:2px; height:0px; z-index:101"></div>
</body>
<!-- InstanceEnd --></html>
