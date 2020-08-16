<?
include('alls/add_293_all.php');
//--------------------------------
include("alls/add_121_a.php");
include("alls/add_184_all.php");
include("alls/add_184_alls.php");
include("alls/add_g_img.php");

function myindex(){
$file__this=file('alls/index__alls.h');
foreach($file__this as $value){
echo $value;
}
}

function myhourse_1(){
include('alls/add_443_alls.php');
echo '<div class="myqqs__div"><br><div class="myqqs__div2"><img src="'.$img__444.'"></div>
<div align="right"><br><a href="index.php?comes=myQQ#by" style="color:#000000">[&nbsp;關於我&nbsp;]</a>&nbsp;</div>
	  </div>';

}//end 關於我 個人資料


function myhourse_2(){
include("alls/add_121_a.php");
include("alls/add_184_all.php");
include("alls/add_184_alls.php");
global $maths;
echo '<table  height="75" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td class="blog_table__up">&nbsp;&nbsp;選單</td>
    </tr>
    <tr>
      <td class="blog_table__center">';
$num=0;
for($i=0;$i<count($arrays_value__1);$i++){
for($k=$i+1;$k<count($arrays_value__1);$k++){
if($arrays_value__1[$i]>$arrays_value__1[$k]){
$box_s0=$arrays_value__0[$i];
$box_s1=$arrays_value__1[$i];
$box_s2=$arrays_value__2[$i];
$box_send=$arrays_value__end[$i];
$arrays_value__0[$i]=$arrays_value__0[$k];
$arrays_value__1[$i]=$arrays_value__1[$k];
$arrays_value__2[$i]=$arrays_value__2[$k];
$arrays_value__end[$i]=$arrays_value__end[$k];
$arrays_value__0[$k]=$box_s0;
$arrays_value__1[$k]=$box_s1;
$arrays_value__2[$k]=$box_s2;
$arrays_value__end[$k]=$box_send;
}//if
}
}//for 換
for($i=0;$i<count($arrays_value__2);$i++){
if($arrays_value__end[$i]=='@無刪除#' && $arrays_value__1[$i]!='No'){
$num++;
if($maths==$arrays_value__0[$i]){
echo '&nbsp;&nbsp;<b style="color:#666666">'.$arrays_value__2[$i].'</b><br>';
}else{
echo '&nbsp;&nbsp;<a href="index.php?comes=myborad&maths='.$arrays_value__0[$i].'#by" target="_self">'.$arrays_value__2[$i].'</a><br>';
}
if($maths!=''){
for($j=0;$j<count($por___184);$j++){
if($maths==$por___184[$j] && $maths==$arrays_value__0[$i] && $end_ture__184[$j]=='[狀態]@顯示資料#'){
echo '<li>&nbsp;&nbsp;<a href="add_thisword.php?maths='.$arrays_value__0[$i].'&hot='.$num___184[$j].'#by" target="_self">'.$title___184[$j].'</a></li><br>';
}//if
}//for
}//--------------if判定是否是要show出 選單中的文章

}//if
}//for	  
echo '
</td>
    </tr>
    <tr>
      <td class="blog_table__down">&nbsp;</td>
    </tr>
  </table>';
}//end 選單資料


function myhourse_3(){
include("alls/add_121_a.php");
include("alls/add_184_all.php");
include("alls/add_184_alls.php");
echo '<table  height="75" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td class="blog_table__up">&nbsp;&nbsp;最新文章</td>
    </tr>
    <tr>
      <td class="blog_table__center">';
	 for($i=0;$i<count($date_add__184);$i++){
	 for($j=$i+1;$j<count($date_add__184);$j++){
	 if($date_add__184[$i]<$date_add__184[$j]){
	     $box_val=$date_add__184[$i];
		 $date_add__184[$i]=$date_add__184[$j];
		 $date_add__184[$j]=$box_val;//--最後編輯時間
		 
		 $box_val=$por___184[$i];
		 $por___184[$i]=$por___184[$j];
		 $por___184[$j]=$box_val;//--父點
		 
		 $box_val=$num___184[$i];
		 $num___184[$i]=$num___184[$j];
		 $num___184[$j]=$box_val;//--子點
		 
		 $box_val=$title___184[$i];
		 $title___184[$i]=$title___184[$j];
		 $title___184[$j]=$box_val;//--title		
		 
		 $box_val= $end_ture__184[$i];
		 $end_ture__184[$i]= $end_ture__184[$j];
		 $end_ture__184[$j]=$box_val;//--是否顯示資料	

	 }//if
	 }//for
	 }//for ------------最後編輯的  就等於最心
	 $nums_b=8;
	 for($i=count($end_ture__184)-1;$i>-1;$i--){
	 if($title___184[$i]!='' && $end_ture__184[$i]=='[狀態]@顯示資料#' && $arrays_value__end[($por___184[$i]-100)]=='@無刪除#' && $arrays_value__1[($por___184[$i]-100)]!='No'){
	 echo '<li>&nbsp;<a href="add_thisword.php?maths='.$por___184[$i].'&hot='.$num___184[$i].'#by" target="_self">'.$title___184[$i].'</a></font></li>';
	 $nums_b--;
	 }
	 if($nums_b<=0){
	 $i=0;
	 }
	 }
	 
echo '</td>
    </tr>
    <tr>
      <td class="blog_table__down">&nbsp;</td>
    </tr>
  </table>';
}//end 最新消息

function myhourse_4(){
include("alls/add_num.php");
echo '<table border="0" cellspacing="0" cellpadding="0">
        <tr >
          <td class="blog_table__up">&nbsp;&nbsp;人氣指數</td>
        </tr>
        <tr >
          <td class="blog_table__center">&nbsp;&nbsp;今日人數 : &nbsp;'.$le___num_today.' 人<br>
          &nbsp;&nbsp;昨日人數 : &nbsp;'.$le___num_terday.' 人<br>
          &nbsp;&nbsp;來過人數 : &nbsp;'.$le___alls.' 人 </td>
        </tr>
        <tr>
          <td colspan="2" class="blog_table__down">&nbsp;</td>
        </tr>
      </table>';
}//end 人氣指數

function myhourse_5(){
echo '<table  height="75" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td height="30" bgcolor="#FFCC00"> 熱門網站</td>
    </tr>
    <tr>
      <td height="33" bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
    <tr>
      <td bgcolor="#FFCC00">&nbsp;</td>
    </tr>
  </table>';
}//end 熱門網站

function myhourse_pass(){
echo '        <form action="l_o_g_i_n.php" method="post">
          <font style="color:#FFCC33;">密碼</font>
          <input name="pass" type="password" size="12" maxlength="12" style="font-size:10px;background-color:#000000;color:#ffcc00;">
        </form>';
}

function myhourse_7(){
global $maths;
global $comes;
if($maths!=''){
include("alls/add_121_a.php");
for($i=0;$i<count($arrays_value__0);$i++){

if($arrays_value__0[$i]==$maths){
if($arrays_value__1[$i]=='No' || $arrays_value__1[$i]=='NO'){
$no_thiswrite='&nbsp;隱藏';
}
echo '<table width="100" border="0" cellspacing="5" cellpadding="1">
    <tr>
	  <td nowrap>[&nbsp;'.$arrays_value__2[$i].'&nbsp;]'.$no_thiswrite.'</td>
      <td nowrap><a href="index.php?comes=myborad&maths='.$arrays_value__0[$i].'#by">[討論版]</a></td>
      <td nowrap><a href="index.php?comes=borad&maths='.$arrays_value__0[$i].'#by">[留言版]</a></td>
      <td nowrap><a href="index.php?comes=allword&maths='.$arrays_value__0[$i].'#by">[所有文章]</a></td>
	</tr>
  </table>';
  }
}//for
}//--------maths是否有值
if($comes=='myQQ' && $maths==''){
echo '&nbsp;&nbsp;[&nbsp;關於我&nbsp;]<br><br>
';
}
if($comes=='' && $maths==''){
echo '&nbsp;&nbsp;[&nbsp;首頁&nbsp;]<br><br>
';
}
if($comes=='getmore' && $maths==''){
echo '&nbsp;&nbsp;[&nbsp;寫信給我&nbsp;]<br><br>
';
}
}//end


function myhourse_8($words){

include("alls/add_121_a.php");

for($i=0;$i<count($arrays_value__actions);$i++){
if($maths==$arrays_value__0[$i]){
echo $arrays_value__actions[$i];
}
}//for

}

function borad_show_225_x2($body__peo,$body__start,$body__title,$body__body,$body__end){
include("alls/add_thisword.php");
global $hot;
$v_nums=0;
for($p=0;$p<count($add__thisword__num);$p++){
if($add__thisword__nums[$p]==$hot){
$v_nums++;
}
}
echo '<br><table  height="0" border="0" cellpadding="1" cellspacing="1">
    <tr>
      <td ><table  border="0" cellpadding="1" cellspacing="1">
        <tr>
          <td width="75%" height="17"><div align="left"><font style="font-size:12px;color:#990000">&nbsp;標題: </font>'.$body__title.' &nbsp;&nbsp;&nbsp;<font style="font-size:12px;color:#990000">發表日期: </font>'.$body__start.'</div></td>
         <td width="25%"><font style="font-size:12px;color:#990000">人氣 : </font>'.$body__peo.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font style="font-size:12px;color:#990000">回覆 : </font>'.$v_nums.'</td>
        </tr>
		<tr>
		<td align="left"><hr size="1" width="98%"></td>
		</tr>
        <tr>
          <td colspan="2" class="thisword__text" >'.$body__body.'</td>
          </tr>
        <tr>
          <td colspan="2"><div align="right"><font style="font-size:12px;color:#990000">最後編輯 : </font>'.$body__end.'</div></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td><div align="right"><hr size="1" width="99%">';
	  $num_s=-1;
	  $colors__array_ago=array('#ffcc00','#FF99FF','#6699FF','#FFFF79','#9DFFB6');
	  for($i=0;$i<count($add__thisword__num);$i++){
	  if($add__thisword__nums[$i]==$hot){
	  if($num_s<(count($colors__array_ago)-1)){
	  $num_s++;
	  }else{
	  $num_s=0;
	  }
echo '<br><table border="0" cellspacing="0" cellpadding="4" bgcolor="'.$colors__array_ago[$num_s].'" >
    <tr>
      <td class="thisword__css"><table border="0" cellspacing="1" cellpadding="3">
        <tr>
          <td align="left"><br><b style="font-size:13px;color:#222222">'.$add__thisword__name[$i].'</b>_的留言'.($i+1000).'#</td>
        </tr>
        <tr>
          <td><textarea  wrap="VIRTUAL" readonly="true"  class="thisword__texts">'.$add__thisword__body[$i].'</textarea></td>
        </tr>
        <tr>
          <td>日期:'.$add__thisword__date[$i].'</td>
        </tr>
      </table></td>
    </tr>
  </table>';
		}//if
		}//for
 echo '</div></td>
    </tr>
  </table>';
}



function myhourse_10(){
global $maths;
include("alls/add_184_all.php");
include("alls/add_184_alls.php");
include("alls/add_thisword.php");
echo '<div align="center"><br><br><table width="520" border="1" cellpadding="0" cellspacing="0">
  <tr bgcolor="#FFCC00">
    <th height="40" colspan="3" nowrap>主題</th>
    <th colspan="2" nowrap>日期</th>
    </tr>
  <tr>
    <td width="54%" nowrap height="20"><div align="center">標題</div></td>
    <td width="10%" nowrap><div align="center">人氣</div></td>
    <td width="10%" nowrap><div align="center">回覆</div></td>
    <td width="13%" nowrap><div align="center">發文時間</div></td>
    <td width="13%" nowrap><div align="center">最後編輯</div></td>
  </tr>';
  
  
for($i=0;$i<count($num___184);$i++){
if($por___184[$i]==$maths && $end_ture__184[$i]=='[狀態]@顯示資料#' ){
$v_nums=0;
for($p=0;$p<count($add__thisword__num);$p++){
if($add__thisword__nums[$p]==$num___184[$i]){
$v_nums++;
}
}
echo '<tr>
    <td nowrap><div align="left">&nbsp;&nbsp;<a href="add_thisword.php?maths='.$por___184[$i].'&hot='.$num___184[$i].'#by" target="_self">'.$title___184[$i].'</a></div></td>
    <td nowrap><div align="center">'.$peo_num___184[$i].'</div></td>
    <td nowrap><div align="center">'.$v_nums.'</div></td>
    <td><div align="center">'.$date_start___184[$i].'</div></td>
    <td><div align="center">'.$date_now___184[$i].'</div></td>
  </tr>';
}
}//end
echo '</table></div>';
}

function myhourse_11(){
include("alls/add_443_alls.php");
include("alls/date_login.php");
echo '<div align="center"><br>
<table border="1" cellspacing="5" cellpadding="5">
        <tr>
          <td><img src="'.$myimg__444.'" ></td>
        </tr>
</table><br><br><br>


<div class="myQQ__div"><table  border="0" cellpadding="6" cellspacing="2" >
    
	<tr>
      <td colspan="2" ><div align="right"><a href="index.php?comes=getmore#by">[寫信給我]</a>&nbsp;</div></td>
    </tr>
    <tr align="left">
      <td width="30%" >暱&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;稱</td>
      <td >'.$name__444.'</td>
    </tr>
    <tr align="left">
      <td>性&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;別</td>
      <td>';
	  if($boy__444=='1'){
	  echo '♀男♂';
	  }else{
	  echo '♀女♂';
	  }
	  
	  echo '</td>
    </tr>
    <tr align="left">
      <td>出&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;生</td>
      <td>西元 '.$bir__444_2000.' &nbsp;&nbsp;'.$bir__444_12.' 月 '.$bir__444_31.' 日</td>
    </tr>
    <tr align="left">
      <td>職&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;業</td>
      <td>'.$star__444.'</td>
    </tr>
    <tr align="left">
      <td>血&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;型</td>
      <td>'.$o__444.'型</td>
    </tr>
    <tr align="left">
      <td>婚&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;姻</td>
      <td>'.$merry__444.'</td>
    </tr>
    <tr align="left">
      <td>興&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;趣</td>
      <td>'.$int__444.'</td>
    </tr>
    <tr align="left">
      <td>夢&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;想</td>
      <td>'.$dri__444.'</td>
    </tr>
    <tr align="left">
      <td>最&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;愛</td>
      <td>'.$love__444.'</td>
    </tr>
    <tr align="left">
      <td>討&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;厭</td>
      <td>'.$hate__444.'</td>
    </tr>
    <tr align="left">
      <td>即&nbsp;&nbsp;&nbsp;時&nbsp;&nbsp;&nbsp;通</td>
      <td>'.$loves__444.'</td>
    </tr>
	    <tr align="left">
      <td>目&nbsp;&nbsp;前&nbsp;&nbsp;狀&nbsp;&nbsp;態</td>
      <td>';
	 if($____login_time>=date('YmdHis') && $____login_ip!=''){
	 echo '<img src="images/my_login.gif">';
	 }else{
	 echo '<img src="images/my_login2.gif">';
	 }
	  echo '</td>
    </tr>
	    <tr align="left">
      <td>最&nbsp;&nbsp;後&nbsp;&nbsp;登&nbsp;&nbsp;入</td>
      <td>日&nbsp;期&nbsp;[&nbsp;'.$____login_this.'&nbsp;]</td>
    </tr>
    <tr align="left">
      <td>線&nbsp;&nbsp;上&nbsp;&nbsp;聯&nbsp;&nbsp;絡&nbsp;</td>
      <td>'.$hates__444.'</td>
    </tr>
    <tr align="left">
      <td width="200" valign="top">簡&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;介</td>
      <td><textarea name="textarea" wrap="VIRTUAL" style="width:18em;height:5em" readonly="true" style="color:#999999;background-color:#000000">'.$pho__444.'</textarea></td>
    </tr>
  </table></div></div>';
}

function myhourse_12(){
include('alls/add_121_a.php');
include('alls/add_borads.php');
include('alls/add_borad_css.php');
global $maths;
global $num__;//選擇多少留言
echo '<link href="css/style_css.php?num='.($maths-100).'" rel="stylesheet" type="text/css">';

$stop_num=25;
if($num__==''){
$num__=0;
}
$add_num_pe=0;
for($i=0;$i<count($array_borads__num);$i++){
if($array_borads__num[$i]==$maths){
$add_num_pe++;
}//if
}//判定幾筆數字

if($arrays_value__action[($maths-100)][2]==1){
if($arrays_value__action[($maths-100)][7]==1){
$_open_bodys="公開";
}else{
$_open_bodys="不公開暱稱";
}
}else{
if($arrays_value__action[($maths-100)][7]==1){
$_open_bodys="不公開內容";
}else{
$_open_bodys="不公開";
}
}//是否是公開 留言內容

if($arrays_value__action[($maths-100)][3]==1){
$_open_bodys2="開放";
}else{
$_open_bodys2="關閉";
}//是否是開放 語法 

echo '<br><div align="center"><table  border="0" cellspacing="0" cellpadding="0">
<tr>
<td height="30">';
if($arrays_value__action[($maths-100)][6]==1){
$str__repl=new mysql_et;
$cools_text_word=$str__repl->str_re($say__text_word[($maths-100)],array('[a=','[/a]','[img]','[/img]',']'),array('<a href=','</a>','<img src=','  >','>'));

echo'<div class="borad__div">'.$cools_text_word.'</div>';
}//end 是否顯示留言版內容
echo '</td>
</tr>
<tr>
<td height="50">狀態&nbsp;/&nbsp;<font style="color:#0066FF">'.$_open_bodys.'</font>&nbsp;&nbsp;語法&nbsp;/&nbsp;<font style="color:#0066FF">'.$_open_bodys2.'</font>&nbsp;&nbsp;<br><br>留言 '.$add_num_pe.' / 1200 筆</td>
</tr>
<tr>
<td height="500" valign="top"><div align="center">
<br>
';        
          $stop_nums=0;//為show出幾筆資料
		  $num__s=$num__;//為continue幾次　　也就是略過幾次
		  for($i=count($array_borads__num);$i>-1;$i--){
		  if($maths==$array_borads__num[$i] && $array_borads__num_pass!='#留言已刪除'){
		  if($num__s<=0 && $stop_nums<=$stop_num){		 
		  $num__s--;
		  $stop_nums++;
		  switch ($array_borads__img[$i]){
		  case '0':$img__bodys='<img src="'.$this_borad_p1_url[($maths-100)].'">';break;
		  case '1':$img__bodys='<img src="'.$this_borad_p2_url[($maths-100)].'">';break;
		  case '2':$img__bodys='<img src="'.$this_borad_p3_url[($maths-100)].'">';break;
		  case '3':$img__bodys='<img src="'.$this_borad_p4_url[($maths-100)].'">';break;
		  case '4':$img__bodys='<img src="'.$this_borad_p5_url[($maths-100)].'">';break;
		  case '5':$img__bodys='<img src="'.$this_borad_p6_url[($maths-100)].'">';break;
		  default:$img__bodys='';
		 }
		  if($array_borads__boy[$i]=='男'){
		  $boy___shows='♀男♂';
		  $boy___class='borad__css_boy';
		  $boy___class_title='borad__css_boy_title';
		  $boy___class_bg2='borad__css_boy_bg2';
		  $boy___class_date='borad__css_boy_date';
		  }else{
		  $boy___shows='♀女♂';
		  $boy___class='borad__css_girl';
		  $boy___class_title='borad__css_girl_title';
		  $boy___class_bg2='borad__css_girl_bg2';
		  $boy___class_date='borad__css_girl_date';
		  }
	echo '    <table  border="1" cellpadding="0" cellspacing="0">
      <tr>
        <td class="borad__css">';
		
if($arrays_value__action[($maths-100)][7]!=1){
$array_borads__name[$i]='秘密..';
}		
		
		 echo '<table border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td colspan="2" class="'.$boy___class_title.'">'.$boy___shows.'&nbsp;&nbsp;'.$array_borads__name[$i].'_的留言';
	  if($arrays_value__action[($maths-100)][8]==1){
	 echo '<b>'.$array_borads__ip[$i].'</b>';
	  }//end
	  echo '</td>
      </tr>
    <tr>
      <td  valign="top" align="center" class="'.$boy___class_bg2.'">'.$img__bodys.'</td>
      <td  class="'.$boy___class.'">';
	  
	  if($arrays_value__action[($maths-100)][2]==1){
	  if($arrays_value__action[($maths-100)][3]==1){
	  $array_borads__body[$i]=str_replace('[a]http://','<a target="_blank" href=http://',$array_borads__body[$i]);
	  $array_borads__body[$i]=str_replace('[/a]','  >-連結-</a>',$array_borads__body[$i]);
	   		echo '<font style="color:'.$array_borads__color[$i].'">'.$array_borads__body[$i].'</font></td>';
			}else{
		echo '<font style="color:'.$array_borads__color[$i].'">'.$array_borads__body[$i].'</font></td>';

	}//判定是否開放語法
		}else{
		echo '不開放留言內容..</td>';
		}//開放留言內容
echo '</tr>
    <tr>
      <td align="right" colspan="2" class="'.$boy___class_date.'">日期 :'.$array_borads__date[$i].'&nbsp;</td>
    </tr>
  </table>';
  echo '</td>
      </tr>
    </table><br><br><br>';
  
          }else{
		  $num__s--;
		  }//if
		  }//if
		    }//for
echo '
<br>
</div></td>
</tr>
<tr>
<td height="30"><div align="right">第&nbsp;&nbsp;';
function les___pow($array_count=array('','',''),$stops,$maths_){
$stops++;
$alls_number=0;
for($i=0;$i<count($array_count);$i++){
if($maths_==$array_count[$i]){
$alls_number++;
}//if
}//for
$alls_number=floor($alls_number/$stops);
if($alls_number%2!=0){
$alls_number++;
}
for($ii=0;$ii<$alls_number;$ii++){
echo '<a href="index.php?comes=borad&maths='.$maths_.'&num__='.$ii*$stops.'#by">'.($ii+1).'</a>&nbsp;&nbsp;';
}
echo '頁&nbsp;&nbsp;</div>';
}
//00000000
les___pow($array_borads__num,$stop_num,$maths);
//00000000
echo '</td>
    </tr>
  </table></div>';
}

function myhourse_13(){
global $maths;
include("alls/add_borad_css.php");
include("alls/add_121_a.php");
if($arrays_value__action[$maths-100][1]=='1'){
$color__989=new color_et;
echo '<form method="post" action="index_add.php" name="myform"><table width="250" border="0" cellspacing="5" cellpadding="1">
    <tr>
      <td colspan="2"><div align="left">---我&nbsp;要&nbsp;留&nbsp;言---</div></td>
    </tr>
    <tr>
      <td width="27" nowrap><div align="left">暱&nbsp;&nbsp;&nbsp;稱</div></td>
      <td width="160"><div align="left">
        <input name="name_box" type="text" size="12" maxlength="12">
      </div></td>
    </tr>
	    <tr>
      <td width="27" nowrap><div align="left">性&nbsp;&nbsp;&nbsp;別</div></td>
      <td width="160"><div align="left">
          <input name="boy_box" type="radio" value="男" checked>
        男
          <input name="boy_box" type="radio" value="女">
          女</div></td>
    </tr>
    <tr>
      <td nowrap><div align="left">顏&nbsp;&nbsp;&nbsp;色</div></td>
      <td><div align="left">';
echo $color__989->color_select_2('color_box'); 

if($arrays_value__action[$maths-100][3]=='1'){
$this_body_html='開放';
}else{
$this_body_html='關閉';
}//顯示  是否是開放語法
if($arrays_value__action[$maths-100][4]=='1'){
echo '<script language="javascript">
function link__helps(){
word=prompt("請輸入網址","http://");
myform.body_box.value+='."'[a]'".'+word+'."'[/a]'".';
}//end 

</script>';
$this_body_html_help='<a href="http://" onClick="link__helps()">連結</a>';
}else{
$this_body_html_help='無';
}//顯示  是否是語法輔助
echo '</div></td>
    </tr>
    <tr>
      <td valign="top" nowrap><div align="left">語法: '.$this_body_html.'<br>
        輔助: '.$this_body_html_help.'</div></td>
      <td><div align="right">10~500字元</div><div align="left">
        <textarea name="body_box" cols="28" wrap="VIRTUAL" rows="4"></textarea>
      </div></td>
    </tr>
<tr>
      <td width="27" nowrap><div align="left" id="call_img"><img name="imgxd" src="'.$this_borad_p1_url[$maths-100].'"></div></td>
      <td width="160" valign="bottom"><div align="left">';
echo '<script>
function on_chan(vals){
switch(vals){
case "0":call_img.innerHTML='."'".'<img name="imgxd" src="'.$this_borad_p1_url[$maths-100].'">'."'".';break;
case "1":call_img.innerHTML='."'".'<img name="imgxd" src="'.$this_borad_p2_url[$maths-100].'">'."'".';break;
case "2":call_img.innerHTML='."'".'<img name="imgxd" src="'.$this_borad_p3_url[$maths-100].'">'."'".';break;
case "3":call_img.innerHTML='."'".'<img name="imgxd" src="'.$this_borad_p4_url[$maths-100].'">'."'".';break;
case "4":call_img.innerHTML='."'".'<img name="imgxd" src="'.$this_borad_p5_url[$maths-100].'">'."'".';break;
case "5":call_img.innerHTML='."'".'<img name="imgxd" src="'.$this_borad_p6_url[$maths-100].'">'."'".';break;
}
}
</script>';
$__img_name=array($this_borad_p1_name[$maths-100],$this_borad_p2_name[$maths-100],$this_borad_p3_name[$maths-100],$this_borad_p4_name[$maths-100],$this_borad_p5_name[$maths-100],$this_borad_p6_name[$maths-100]);
$__img_value=array($this_borad_p1_url[$maths-100],$this_borad_p2_url[$maths-100],$this_borad_p3_url[$maths-100],$this_borad_p4_url[$maths-100],$this_borad_p5_url[$maths-100],$this_borad_p6_url[$maths-100]);	  
echo '<select name="select__img" onChange="on_chan(this.value)">';
for($p=0;$p<count($__img_name);$p++){
echo '<option value="'.$p.'">'.$__img_name[$p].'</option>';
}
echo '</select>';
echo '</div></td>
</tr>
	    <tr>
      <td nowrap><div align="left">輸入驗證碼</div></td>
      <td><div align="left">
        <input name="pin_k" type="text" size="8" maxlength="5">
      </div></td>
    </tr>
	<tr><td ><div align="right">[數字]<br>
<br>驗<br>證<br>碼</div></td>
      <td ><div align="left">';
function number_pins1__fun($number_pins){
for($i=0;$i<strlen($number_pins);$i++){	 
switch ("$number_pins[$i]"){
case '1':$number_pins1='aCc'.$number_pins1;
       $number_pins2+=199;break;
case '2':$number_pins1='eT2'.$number_pins1;
       $number_pins2+=323;break;
case '3':$number_pins1='4Ih'.$number_pins1;
       $number_pins2+=21;break;
case '4':$number_pins1='b5c'.$number_pins1;
       $number_pins2+=61;break;
case '5':$number_pins1='j6w'.$number_pins1;
       $number_pins2+=939;break;
case '6':$number_pins1='sam'.$number_pins1;
       $number_pins2+=11;break;
case '7':$number_pins1='zo8'.$number_pins1;
       $number_pins2+=41;break;
case '8':$number_pins1='3fS'.$number_pins1;
       $number_pins2+=632;break;
case '9':$number_pins1='nY3'.$number_pins1;
       $number_pins2+=212;break;
case '0':$number_pins1='Vd7'.$number_pins1;
       $number_pins2+=3;break;
default:$number_pins1='';
}
}//for
$word__number=$number_pins1.$number_pins2;

return $word__number;
}//end

function number_pins2__fun(){
include("alls/add_borads.php");
for($js=0;$js<15000;$js++){
$numbers=mt_rand(10001,99999);
$nums9=number_pins1__fun("$numbers");

for($i=0;$i<count($array_borads__num_pass);$i++){
if($nums9==$array_borads__num_pass[$i]){
$trues_bx='已經有編號嚕';
}
}//for 
if($trues_bx!='已經有編號嚕'){
$js=15001;
}//if
}//for
echo '<input type="hidden" value="'.$nums9.'"  name="val__fun_pin">';
return $numbers; //傳回成功的編號
}
$pins_imgs=number_pins2__fun();  
echo '<img src="alls/pins_img.php?pinss='.$pins_imgs.'">';	  
echo '</div></td>
    </tr>
    <tr>
      <td height="50" colspan="2"><div align="right">
	  <input type="hidden" name="kinsy" value="add__borad">
	  <input type="hidden" name="fater__num" value="'.$maths.'">
        <input type="submit" name="Submit2" value="留言">
      </div></td>
    </tr>	
  </table></form>';
  
  }else{
  echo '&nbsp;&nbsp;---不&nbsp;開&nbsp;放&nbsp;留&nbsp;言---<br><br><br>';
  }
}



function myhourse_14(){
global $hot,$maths;
echo '<form method="post" action="index_add.php"><table border="0" cellspacing="1" cellpadding="5">
          <tr>
            <td height="30" colspan="2">---回&nbsp;覆&nbsp;文&nbsp;章---</td>
          </tr>
          <tr>
            <td height="30" nowrap>暱&nbsp;&nbsp;&nbsp;稱 : <br>
            </td>
            <td><input name="this_name" type="text" size="12" maxlength="12"></td>
          </tr>
          <tr>
            <td height="50" valign="top" nowrap>語法 : 無</td>
            <td><div align="right">5&nbsp;~&nbsp;200字元</div><textarea name="this_body" cols="25" rows="3" wrap="VIRTUAL"></textarea></td>
          </tr>
          <tr>
            <td height="50" valign="top" nowrap>[數字]<br><br><div align="right">驗<br><br>證<br><br>碼</div></td>
            <td><input name="pass_pin" type="text" size="8" maxlength="5"><br><br>';
function number_pins1__fun($number_pins){
for($i=0;$i<strlen($number_pins);$i++){	 
switch ("$number_pins[$i]"){
case '1':$number_pins1='aC6'.$number_pins1;
       $number_pins2+=189;break;
case '2':$number_pins1='eqT2'.$number_pins1;
       $number_pins2+=363;break;
case '3':$number_pins1='4Ivh'.$number_pins1;
       $number_pins2+=20;break;
case '4':$number_pins1='b51c'.$number_pins1;
       $number_pins2+=11;break;
case '5':$number_pins1='j6w'.$number_pins1;
       $number_pins2+=939;break;
case '6':$number_pins1='sam'.$number_pins1;
       $number_pins2+=14;break;
case '7':$number_pins1='zo4'.$number_pins1;
       $number_pins2+=42;break;
case '8':$number_pins1='3sS'.$number_pins1;
       $number_pins2+=13;break;
case '9':$number_pins1='nYr'.$number_pins1;
       $number_pins2+=231;break;
case '0':$number_pins1='VdA7'.$number_pins1;
       $number_pins2+=31;break;
default:$number_pins1='';
}
}//for
$word__number=$number_pins1.$number_pins2;

return $word__number;
}//end

function number_pins2__fun(){
include("alls/add_thisword.php");
for($js=0;$js<12000;$js++){
$numbers=mt_rand(10001,99999);
$nums9=number_pins1__fun("$numbers");

for($i=0;$i<count($add__thisword__pass);$i++){
if($nums9==$add__thisword__pass[$i]){
$trues_bx='已經有編號嚕';
}
}//for 
if($trues_bx!='已經有編號嚕'){
$js=12001;
}
}//for
echo '<input type="hidden" value="'.$nums9.'"  name="val__fun_pin">';
return $numbers; //傳回成功的編號
}




$pins_imgs=number_pins2__fun(); 
echo '<img src="alls/pins_img.php?pinss='.$pins_imgs.'">';	 
echo '</td>
          </tr>
          <tr>
            <td height="50" colspan="2"><div align="right">
              <input type="submit" name="Submit5" value="回覆">
            </div></td>
          </tr>';
echo '<input type="hidden" value="add__thisword" name="kinsy">';	
echo '<input type="hidden" value="'.$maths.'" name="this_father">';	
echo '<input type="hidden" value="'.$hot.'" name="this_fathers">';	
echo '</table></form>';

}


function myhourse_15(){
include("alls/add_thisword.php");
include("alls/add_184_alls.php");
include("alls/add_184_all.php");
echo '<table  border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td class="blog_table__up">&nbsp;&nbsp;最新回應</td>
    </tr>
    <tr>
      <td class="blog_table__center">';
	  $stops__num=0;
for($i=(count($add__thisword__num)-1);$i>-1;$i--){
if($add__thisword__pass[$i]!='@已刪除#' && $end_ture__184[$add__thisword__nums[$i]-1000]=='[狀態]@顯示資料#'){
echo '&nbsp;&nbsp;&rsaquo;&rsaquo;<a href="add_thisword.php?maths='.$add__thisword__num[$i].'&hot='.$add__thisword__nums[$i].'#by">&nbsp;';
echo $add__thisword__name[$i];
echo '</a><br>&nbsp;&nbsp;&nbsp;To:&nbsp;';
echo '<font style="color:#333333">'.$title___184[$add__thisword__nums[$i]-1000].'</font>';
echo '<br>';
$stops__num++;
if($stops__num>=7){
$i=-2;
}

}
}//for show出 回應文章	  
echo '</td>
    </tr>
    <tr>
      <td class="blog_table__down">&nbsp;</td>
    </tr>
  </table>';
}
function myhourse_thistime(){
if($_COOKIE['today_peo']!='已經加過嚕'){
setcookie('today_peo','已經加過嚕',time()+3600);
include('alls/add_num.php');
$of=fopen('alls/add_num.php','w+');
fputs($of,'<? ');
$nbsp='
';
$le___num_today++;
$le___alls++;
fputs($of,'$le___this_time='.$le___this_time.';'.$nbsp);
fputs($of,'$le___num_today='.$le___num_today.';'.$nbsp);
fputs($of,'$le___num_terday='.$le___num_terday.';'.$nbsp);
fputs($of,'$le___alls='.$le___alls.';'.$nbsp);


fputs($of,' ?>');

fclose($of);
}//end if
}//end


function myhourse_today(){


$dates=date("Ymd");
include('alls/add_num.php');

if($dates>=$le___this_time){
$of=fopen('alls/add_num.php','w+');
fputs($of,'<? ');
$nbsp='
';
fputs($of,'$le___this_time='.($dates+1).';'.$nbsp);
fputs($of,'$le___num_today='.'1'.';'.$nbsp);
fputs($of,'$le___num_terday='.$le___num_today.';'.$nbsp);
fputs($of,'$le___alls='.($le___alls+1).';'.$nbsp);


fputs($of,' ?>');



$of=fopen('alls/ip_back.php','w+');
fputs($of,'<?    ');
fputs($of,'$_ip_back_go=array();
');
fputs($of,'$_time_back_go=array();
');
fputs($of,'$_come_back_go=array();
');
fputs($of,'   ?>');





}//end if

}//end 人氣指數 一天換人


function myhourse_19(){
include("alls/add_443_alls.php");
echo '<div align="center"><br><br><table  border="1" cellspacing="5" cellpadding="5">
        <tr>
          <td><img src="'.$myimg__444.'" ></td>
        </tr>
</table></div>';
echo '<form method="post" action="index_add.php"><table border="0" cellspacing="1" cellpadding="3">

          <tr>
            <td height="30" colspan="2">---寫&nbsp;信&nbsp;給&nbsp;我---</td>
          </tr>
          <tr>
            <td height="30" nowrap>暱&nbsp;&nbsp;&nbsp;稱 : 
            </td>
            <td><input name="cool_name" type="text" size="12" maxlength="12"></td>
          </tr>
		   <tr>
            <td height="30" nowrap>性&nbsp;&nbsp;&nbsp;別 : 
            </td>
            <td><input name="cool_boy" type="radio" value="男" checked>
        男
          <input name="cool_boy" type="radio" value="女">
          女</td>
          </tr>
		            <tr>
            <td height="30" nowrap>標&nbsp;&nbsp;&nbsp;題 : 
            </td>
            <td><input name="cool_title" type="text" size="20" maxlength="15"></td>
          </tr>
          <tr>
            <td height="50" valign="top" nowrap>語法 : 無</td>
            <td><div align="right">15~1200字元</div><textarea name="cool_body" cols="35" rows="5" wrap="VIRTUAL"></textarea></td>
          </tr>
          <tr>
            <td height="50" valign="top" nowrap>[數字]<br><br><div align="right">驗<br><br>證<br><br>碼</div></td>
            <td><input name="pass_pin" type="text" size="8" maxlength="5"><br><br>';
function number_pins1__fun($number_pins){
for($i=0;$i<(strlen($number_pins));$i++){	 
switch ("$number_pins[$i]"){
case '1':$number_pins1='aC6'.$number_pins1;
       $number_pins2+=16;break;
case '2':$number_pins1='eqT2'.$number_pins1;
       $number_pins2+=43;break;
case '3':$number_pins1='4Ivh'.$number_pins1;
       $number_pins2+=20;break;
case '4':$number_pins1='b51c'.$number_pins1;
       $number_pins2+=11;break;
case '5':$number_pins1='j6w'.$number_pins1;
       $number_pins2+=59;break;
case '6':$number_pins1='sam'.$number_pins1;
       $number_pins2+=164;break;
case '7':$number_pins1='zo4'.$number_pins1;
       $number_pins2+=41;break;
case '8':$number_pins1='33S'.$number_pins1;
       $number_pins2+=13;break;
case '9':$number_pins1='nYr'.$number_pins1;
       $number_pins2+=231;break;
case '0':$number_pins1='VdA7'.$number_pins1;
       $number_pins2+=34;break;
default:$number_pins1='';
}
}//for
$word__number=$number_pins1.$number_pins2;

return $word__number;
}//end

function number_pins2__fun(){
include("alls/add_thisword.php");
for($js=0;$js<12000;$js++){
$numbers=mt_rand(10001,99999);
$nums9=number_pins1__fun("$numbers");

for($i=0;$i<(count($cool__99num));$i++){
if($nums9==$cool__99num[$i]){
$trues_bx='已經有編號嚕';
}
}//for 
if($trues_bx!='已經有編號嚕'){
$js=12001;
}
}//for
echo '<input type="hidden" value="'.$nums9.'"  name="val__fun_pin">';
return $numbers; //傳回成功的編號
}
$pins_imgs=number_pins2__fun(); 
echo '<img src="alls/pins_img.php?pinss='.$pins_imgs.'">';	 
echo '</td>
          </tr>
          <tr>
            <td height="50" colspan="2"><div align="right">
              <input type="submit" name="Submit5" value="寄信">
            </div></td>
          </tr>';
echo '<input type="hidden" value="add__mycool" name="kinsy">';	
echo '</table></form>';

}


function myhourse_22(){
include('alls/add_293_all.php');
include('alls/add_293_alls.php');
echo '<a href="index.php"><img src="'.$this__cools293ititle[($nums__checked-500)].'" border="0"></a>';
}





?>