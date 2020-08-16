<?










//****************************
function say__show_1($word,$http){
echo'<script language="javascript">
function myasd(){

parent.lefts.location.href="login_pass.php";
location.assign("'.$http.'");
}//end
var nums=99;
function goinner(){

if(nums>1){
nums--;
number__up.innerHTML="'.$word.'<br><br> 倒數 "+nums+" 即將跳頁";
setTimeout(" goinner()",1);
}else{
myasd();
}

}
setTimeout(" goinner()",250);

</script>';

echo '<br><br><br><br><br>
<table width="160"  border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td class="back__a1"><div align="left" >系統訊息</div></td>
    </tr>
    <tr >
      <td class="back__a2"><div align="center" id="number__up">'.$word.'<br><br> 倒數 100 中即將跳頁</div></td>
    </tr>
  </table>';

}//enｄ　要求更新

function say__show_2($word){
echo '<br><br><br><br><br>
<table width="160" border="0" cellpadding="0" cellspacing="0">
    <tr >
      <td  class="back__a1"><div align="left" >系統訊息</div></td>
    </tr>
    <tr  >
      <td class="back__a2"> <div align="center">'.$word.'<br><br><a onClick="javascript:history.go(-1)" href="login_pass.php" target="lefts">[返回]</a></div></td>
    </tr>
  </table>';
}//enｄ　要求回上一頁
function say__show_3($word){
echo '<br><br><br><br><br>
<table width="160"  border="0" cellpadding="0" cellspacing="0">
    <tr >
      <td  class="back__a1"><div align="left" >系統公告</div></td>
    </tr>
    <tr  >
      <td class="back__a2"><div align="center"><font style="font-size:15px">成&nbsp;功&nbsp;</font>'.$word.'</div></td>
    </tr>
  </table>';
}//enｄ　不傳送到任何地點

//****************************
function add_fun_121(){
echo '<br><br><br><br><br><br>';
echo '<form action="rs_pass_all.php" method="post" name="form" target="_self">

<table width="230" border="0" cellpadding="2" cellspacing="2" >
    <tr>
      <td width="203" height="35" nowrap >分類順序 : [
        <input name="nums" type="text"  style="font-size:12px" size="4" maxlength="2"> 
      ] </td>
    </tr>
    <tr>
      <td nowrap height="35">分類名稱 : [
        <input name="names" type="text"  style="font-size:12px" size="20" maxlength="15">
      ]</td>
    </tr>
    <tr>
      <td height="35" nowrap><div align="right">
        <input type="submit" name="Submit2" style="font-size:12px" value="新增">
      </div></td>
    </tr>
  </table>

        <input type="hidden" name="kings"  value="121">
</form>';

}//end 新增分類


function change_fun_148($a=array(),$b=array(),$c=array(),$dels){
echo '<br><br><br>';
echo '<table height="65" border="0" cellpadding="1" cellspacing="1" >
<tr>
      <td  height="25" nowrap  ><div align="center">分類 [ 開放 ]</div></td>
      <td colspan="2" nowrap><div align="center">-編輯-</div></td>
    </tr>';
$nums_i=0;
for($i=0;$i<count($a);$i++){
if($dels[$i]!='@已刪除無法顯示#' && $dels[$i]!='@刪除不顯示#' && $dels[$i]=='@無刪除#'){
if($b[$i]!='no' && $b[$i]!='NO' && $b[$i]!='No' && $b[$i]!='nO'){
$nums_i++;
if(0==(($nums_i)%2)){
$ps='#FFD0FF';
}else{
$ps='#C8DAFF';
}//num

   echo'<tr>
      <td nowrap bgcolor="'.$ps.'" >&nbsp; '.$nums_i.'. '.$a[$i].'  &ne;排序[ '.$b[$i].' ]</td>
        <form name="form2" method="post" action="login_bodys.php?ppiinnss=149"><td width="30" nowrap bgcolor="'.$ps.'">       
        <input type="submit" name="Submit4" value="修改"  ><input type="hidden" name="snums" value="'.($c[$i]-100).'">
       </td> </form>
      <form name="form2" method="post" action="rs_pass_all.php" ><td width="30" nowrap bgcolor="'.$ps.'"><input type="submit" name="Submit3" value="刪除" ><input type="hidden" name="snums" value="'.($c[$i]-100).'"><input type="hidden" name="kings" value="148del"></td></form>
    </tr>';
}//end if
}//end if @刪除不顯示#
}//end

echo ' </table>';
//--------------------------
echo '<br><br><br><br>';
echo '<table  height="65" border="0" cellpadding="1" cellspacing="1" >';

echo '<tr >
      <td  height="30" nowrap ><div align="center">分類 [ 隱藏 ]</div></td>
      <td colspan="2" nowrap><div align="center">-編輯-</div></td>
    </tr>';
for($i=0;$i<count($a);$i++){
if($dels[$i]!='@已刪除無法顯示#' && $dels[$i]!='@刪除不顯示#' && $dels[$i]=='@無刪除#'){
if($b[$i]=='no' || $b[$i]=='NO' || $b[$i]=='No' || $b[$i]=='nO'){
$nums_i++;
if(0==(($nums_i)%2)){
$ps='#FFD0FF';
}else{
$ps='#C8DAFF';
}//num
   echo'<tr>
      <td nowrap bgcolor="'.$ps.'" >&nbsp; '.$nums_i.'. '.$a[$i].'  &ne;排序[ '.$b[$i].' ]</td>
       <form name="form2" method="post" action="login_bodys.php?ppiinnss=149"><td width="30" nowrap bgcolor="'.$ps.'">       
        <input type="submit" name="Submit4" value="修改"><input type="hidden" name="snums" value="'.($c[$i]-100).'">
       </td></form>
      <form name="form2" method="post" action="rs_pass_all.php">
<td width="30" nowrap bgcolor="'.$ps.'" ><input type="submit" name="Submit3" value="刪除"  ><input type="hidden" name="kings" value="148del"><input type="hidden" name="snums" value="'.($c[$i]-100).'"></td>
</form>
    </tr>';
}
}//end if @刪除不顯示#  
}//end

echo ' </table>';
}//end 編輯分類



function change_fun_148_a($word,$num,$vas){
echo '<form name="forms" method="post" action="rs_pass_all.php">
<table width="230" border="0" cellpadding="2" cellspacing="2" >
    <tr>
      <td width="203" height="35" nowrap >分類順序 : [
        <input name="namse_148_num" type="text"   value="'.$num.'"   style="font-size:12px" size="4" maxlength="2"> 
      ] </td>
    </tr>
    <tr>
      <td nowrap height="35">分類名稱 : [
        <input name="namse_148_name" type="text"   value="'.$word.'"   style="font-size:12px" size="20" maxlength="15">
      ]</td>
    </tr>
    <tr>
      <td height="35" nowrap><div align="right">
        <input type="submit" name="Submit2" style="font-size:12px" value="修改">
      </div></td>
    </tr>
  </table>
<input type="hidden" name="kings"  value="148chan">';
echo '<input name="namse_148_0" type="hidden"   value="'.$vas.'"   >';
//---等於　Ａｒａａｙ＿０
echo '</from>';

}//end 〔修改分類〕















function add_fun_184($a,$b,$c,$dels){

include('helps.htm');
echo ' <form name="mykings" method="post" action="rs_pass_all.php">
    <table width="294" height="417" border="0" cellpadding="3" cellspacing="2">
	  <tr>
    <td align="right">
        <input type="submit" value="新增" style="font-size:12px">
    </td>
  </tr>
      <tr>
        <td> <div align="left">分類-
            <select name="por">
              <option value="無" selected>選擇</option>';
for($i=0;$i<count($b);$i++){
if($dels[$i]!='@已刪除無法顯示#' && $dels[$i]!='@刪除不顯示#' && $dels[$i]=='@無刪除#'){
echo '<option value="'.$b[$i].'" >'.$a[$i].'</option>';
}//end if 
}
echo' </select>
        </div></td>
      </tr>
  <td> <div align="left">文章標題-
            <input name="titles" type="text" style="font-size:12px" size="30" maxlength="20">
    </div></td>
  </tr>
  <tr>
    <td height="17"> <div align="left">輔助-
          <input type="button"  value="粗體" style="font-size:12px" onClick="b_1()">
          <input type="button"  value="字體" style="font-size:12px" onClick="a_1()">
          <input type="button"  value="超連結" style="font-size:12px" onClick="link_1()">
          <input type="button"  value="圖片" style="font-size:12px" onClick="img_1()">
          <input type="button"  value="影片" style="font-size:12px" onClick="mtv_1()">
          <input type="button"  value="Flash" style="font-size:12px" onClick="swf_1()">
          <input type="button"  value="音樂" style="font-size:12px" onClick="music_1()">
    - '.$c.' -> <input type="text" name="color__name" style="font-size:12px" size="7" maxlength="7" ></div></td>
  </tr>
  <tr>
    <td><textarea name="bodys" cols="80" rows="20" wrap="VIRTUAL"></textarea></td>
  </tr>
    </table>
<input type="hidden" name="kings" value="184add">

  </form>';
}//end 新增文章







function change_fun_179($word,$http,$dels,$ns_val){
echo'<script language="javascript">
function myaasd(){
h=document.form_sel.select__values.value;


http=h+"&val_=show";
location.replace(http);


}//end

</script>';
echo '<form name="form_sel">';
echo '<table border="0" cellspacing="2" cellpadding="2">
    <tr>
      <td ><div align="left">選擇分類文章</div></td>
    </tr>
    <tr>
      <td>
<div align="center"><select name="select__values" onChange="myaasd()"><option value="login_bodys.php?ppiinnss=179" selected>選擇</option>';
    for($i=0;$i<count($word);$i++){
	if($dels[$i]=='@無刪除#'){
	if($ns_val[$i]!='No'){
       echo '<option value="login_bodys.php?ppiinnss=179&check_data='.$http[$i].'">'.$word[$i].'</option>';
     }else{
	 echo '<option value="login_bodys.php?ppiinnss=179&check_data='.$http[$i].'">'.$word[$i].'&ne;關閉中</option>';
	 }//假如不等於NO 就是排序  等於NO就是 關閉
	 }
	 if($dels[$i]!='@已刪除無法顯示#' && $dels[$i]=='@刪除不顯示#' ){
		 echo '<option value="login_bodys.php?ppiinnss=179&check_data='.$http[$i].'">'.$word[$i].'&ne;刪除中</option>';
		}//end
		}//end for
echo'</select></div>
</td>
    </tr>
  </table></form>';
}//end 編輯文章 選擇




function change_fun_180($asdss_num,$pi,$title='名稱',$peo='人氣',$num='編號',$ups='回負數',$startdate='發文日期',$startend='最後編輯'){
if($pi!='[狀態]@資料已刪除#'){

if($pi=='[狀態]@資料刪除中#'){
$say_pi='
      <form name="form" method="post" action="rs_pass_all.php"><td ><div align="center"><input type="submit" name="Submit1" value="還原"><input type="hidden" name="kings" value="184ohmygod"><input type="hidden" name="del_val" value="'.$num.'"></div></td></form>';
}else{
$say_pi='    <form name="form4" method="post" action="login_bodys.php?ppiinnss=178"><td nowrap><input type="submit" name="Submit102" value="編輯"><input name="piss2" type="hidden" value="'.$num.'"></td></form>
    <form name="form4" method="post" action="rs_pass_all.php"><input type="hidden" name="kings" value="184del"><input type="hidden" name="poioq" value="'.$num.'"><td nowrap><input type="submit" name="Submit7" value="刪除"></td></form>
';
}


if(1==($asdss_num%2)){
$colors1='#D9ECFF';
}else{
$colors1='#FFE6E6';
}

echo '<tr bgcolor="'.$colors1.'">
    <td nowrap><div align="center">'.$num.'</div></td>
    <td nowrap>'.$title.'</td>
    <td nowrap><div align="center">'.$peo.'</div></td>
    <td nowrap><div align="center">'.$ups.'</div></td>
    <td><div align="center">'.$startend.'</div></td>
'.$say_pi.'  </tr>
';

}//end 編輯文章

}


function change_fun_181($asdss_num,$pi,$title='名稱',$peo='人氣',$num='編號',$ups='回負數',$startdate='發文日期',$startend='最後編輯'){
global $check_data;
if($pi!='[狀態]@資料已刪除#'){

if($pi=='[狀態]@資料刪除中#'){
$say_pi='<td nowrap><div align="center">刪除中</div></td>
      <form name="form" method="post" action="rs_pass_all.php"><td ><div align="center"><input type="submit" name="Submit1" value="還原"><input type="hidden" name="kings" value="184ohmygod_181"><input type="hidden" name="del_val" value="'.$num.'"></div></td></form>';
}else{
$say_pi='    <form name="form4" method="post" action="login_bodys.php?ppiinnss=168"><td nowrap><div align="center"><input type="submit" name="Submit102" value="編輯"><input name="piss2" type="hidden" value="'.$num.'"></div></td></form>
    <form name="form4" method="post" action="rs_pass_all.php"><div align="center"><input type="hidden" name="kings" value="184del_181"><input type="hidden" name="poioq" value="'.$num.'"><td nowrap><input type="submit" name="Submit7" value="刪除"></div></td></form>
';
}


if(1==($asdss_num%2)){
$colors1='#D9ECFF';
}else{
$colors1='#FFE6E6';
}

echo '<tr bgcolor="'.$colors1.'">
    <td nowrap><div align="center">'.$num.'</div></td>
    <td nowrap><a href="login_bodys.php?ppiinnss=293&borad__lens=l02l&vals='.$num.'&check_se='.$check_data.'">'.$title.'</a></td>
    <td nowrap><div align="center">'.$peo.'</div></td>
    <td nowrap><div align="center">'.$ups.'</div></td>
    <td><div align="center">'.$startend.'</div></td>
'.$say_pi.'  </tr>
';

}//end 編輯文章

}



function add_chan_borad($c='顏色',$action=array('0','0','0','0'),$actionss='body',$p_insss='出自哪個流水號'){

echo'<script language="javascript">
function onch(){
if(document.mykings.cs_array6.checked==true){
document.mykings.cs_array666.disabled=false;
}else{
document.mykings.cs_array666.disabled=true;
}
}//end
</script>';



if($action[0]=='1'){
$aaaa1='checked';
}//判定是否選取checked

if($action[1]=='1'){
$aaaa2='checked';
}//判定是否選取checked

if($action[2]=='1'){
$aaaa3='checked';
}//判定是否選取checked

if($action[3]=='1'){
$aaaa4='checked';
}
if($action[4]=='1'){
$aaaa5='checked';
}//判定是否選取checked

if($action[5]=='1'){
$aaaa6='checked';
}else{
$aaaa66='disabled';
}//判定是否選取checked

if($action[6]=='1'){
$aaaa7='checked';
}//判定是否選取checked

if($action[7]=='1'){
$aaaa8='checked';
}
if($action[8]=='1'){
$aaaa9='checked';
}//判定是否選取checked


echo ' <form name="mykings" method="post" action="rs_pass_all.php">
<table  width="200" height="203" border="1" cellpadding="2" cellspacing="0">
    <tr>
      <td height="36" colspan="2" >
        <div align="center">
          <input name="text" type="text" size="20">
      </div></td>
    </tr>
    <tr>
      <td height="134" align="center" valign="top" ><input name="text" type="text" size="10"></td>
      <td >
        <textarea name="textarea2" cols="35" rows="8" wrap="VIRTUAL"></textarea></td>
    </tr>
    <tr>
      <td colspan="2" ><div align="right">
        <input name="Input" type="text">
      </div></td>
    </tr>
  </table>
<table width="0" height="0" border="0" cellpadding="1" cellspacing="1">
    <tr>
      <td width="340">      <div align="left">
        <table width="300" border="0" cellspacing="2" cellpadding="3">
          <tr>
            <td height="26" colspan="2" nowrap>---------留言版---------</td>
          </tr>
      <tr>
      <td nowrap>
	  <input type="checkbox" name="cs_array1" value="1" '.$aaaa1.'>
      開放留言版
	  </td>
     <td nowrap><input type="checkbox" name="cs_array2" value="1" '.$aaaa2.'>
     開放留言
	 </td><td nowrap><input type="checkbox" name="cs_array3" value="1" '.$aaaa3.'>
     公開留言內容</td>
      </tr>
		  
          <tr>
       <td nowrap><input type="checkbox" name="cs_array4" value="1" '.$aaaa4.'>
      開放語法</td>
            <td nowrap><input type="checkbox" name="cs_array5" value="1" '.$aaaa5.'>
      開放語法輔助</td>
	              <td nowrap><input type="checkbox" name="cs_array6" value="1"  '.$aaaa6.'  onChange="onch()">
           限制密碼 <input name="cs_array666" type="text" size="5" maxlength="4" style="font-size:12px"  '.$aaaa66.'  value="'.$action[9].'"></td>
          </tr>
		  
		  
	    <td nowrap><input type="checkbox" name="cs_array7" value="1" '.$aaaa7.'>
      個人資料</td>
            <td nowrap><input type="checkbox" name="cs_array8" value="1" '.$aaaa8.'>
      禁止髒話</td>
	  <td nowrap><input type="checkbox" name="cs_array9" value="1" '.$aaaa9.'>
      驗證碼[建議]</td>
          </tr> 
        </table>
		<br><br>
<div class="borad__div" style="height:120px;width: 320px;background-color:#ffcc00">
<table border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td nowrap><a href="#">[字體]</a> <a href="#">[連結]</a> <a href="#">[音樂]</a> <a href="#">[圖片]</a></td>
    </tr>
    <tr>
      <td nowrap><textarea name="textarea" cols="40" rows="5" wrap="VIRTUAL"></textarea></td>
    </tr>
 </table>
</div>
<br><br>
		
<div class="borad__css">
<table  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="2" class="borad__css_boy_title"> ♀男♂&nbsp;&nbsp;小美_的留言</td>
  </tr>
  <tr>
    <td class="borad__css_boy_bg2"><img src="images/img1.gif" width="50" height="50"></td>
    <td class="borad__css_boy">假如是個男的留言...</td>
  </tr>
  <tr>
    <td colspan="2" class="borad__css_boy_date">日期: 2006/01/01 00:00</td>
  </tr>
</table>
</div>

<br>
<br>

<div class="borad__css">
<table  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="2" class="borad__css_girl_title"> ♀女♂&nbsp;&nbsp;小武_的留言</td>
  </tr>
  <tr>
    <td class="borad__css_girl_bg2"><img src="images/img7.gif"></td>
    <td class="borad__css_girl">假如是個女的留言...</td>
  </tr>
  <tr>
    <td colspan="2" class="borad__css_girl_date">日期: 2006/01/01 00:00</td>
  </tr>
</table>
</div>
        <br>
		        <table border="0" cellspacing="3" cellpadding="3">
          <tr>
            <td nowrap>---------討論區---------</td>
          </tr>
		  <tr><td>
		  
<table border="0" cellspacing="3" cellpadding="3"><tr><td class="thisword__css">
<table border="0" cellspacing="1" cellpadding="1">
        <tr>
          <td align="left"><div align="right" style="font-size:10px">ip:127.0.0.1</div>回覆者:&nbsp;小武</td>
        </tr>
        <tr>
          <td><textarea  cols="36" rows="4" wrap="VIRTUAL" readonly="true">內容</textarea></td>
        </tr>
        <tr>
          <td>日期</td>
        </tr>
      </table></td></tr></table></td></tr>
          <tr>
            <td nowrap>
          <input type="button"  value="粗體" style="font-size:12px" onClick="b_1()">
          <input type="button"  value="字體" style="font-size:12px" onClick="a_1()">
          <input type="button"  value="超連結" style="font-size:12px" onClick="link_1()">
          <input type="button"  value="圖片" style="font-size:12px" onClick="img_1()">
          <input type="button"  value="影片" style="font-size:12px" onClick="mtv_1()">
          <input type="button"  value="Flash" style="font-size:12px" onClick="swf_1()">
          <input type="button"  value="音樂" style="font-size:12px" onClick="music_1()">
    - '.$c.' -> <input type="text" name="color__name" style="font-size:12px" size="7" maxlength="7" ></td>
          </tr>
          <tr>
            <td height="291" nowrap><textarea name="bodys" cols="70" rows="18" wrap="VIRTUAL">'.$actionss.'</textarea></td>
          </tr>
          <tr>
            <td>
              <div align="center"><br><br><br>
                <input type="submit" name="Submit8" value="送出">
              </div></td>
          </tr>
        </table>
      </div></td>
    </tr>
  </table>
    <input type="hidden" name="kings" value="293chan">
  <input type="hidden" name="xd_pin" value="'.$p_insss.'">
  </form>';

}









function borad_show__219($bodys){
echo '<div align="left"><pre>';
echo $bodys;
echo '</pre></div>';
}
function borad_show__220($nums,$titles,$peo_num,$peo__mi,$date_start,$date_end,$check_ses){
echo '<tr>
    <td nowrap><div align="center">'.$nums.'</div></td>
    <td nowrap>&nbsp;<a href="login_bodys.php?ppiinnss=293&borad__lens=l02l&vals='.$nums.'&check_se='.$check_ses.'" target="_self">'.$titles.'</a></td>
    <td nowrap><div align="center">'.$peo_num.'</div></td>
    <td nowrap><div align="center">'.$peo__mi.'</div></td>
    <td><div align="center">'.$date_start.'</div></td>
    <td><div align="center">'.$date_end.'</div></td>
  </tr>';
}

function borad_show__221(){
include('alls/add_121_a.php');
include('alls/add_borads.php');
include('alls/add_borad_css.php');
global $check_se;
$maths=$check_se;
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
<td height="30" align="center">';
if($arrays_value__action[($maths-100)][6]==1){

$str__repl=new mysql_et;
$cools_text_word=$str__repl->str_re($say__text_word[($maths-100)],array('[a=','[/a]','[img]','[/img]',']'),array('<a href=','</a>','<img src=','  >','>'));

echo '<div class="borad__div"><pre>'.$cools_text_word.'</pre></div>';
}
echo '</td>
</tr>
<tr>
<td height="50" align="center">狀態&nbsp;/&nbsp;<font style="color:#0066FF">'.$_open_bodys.'</font>&nbsp;&nbsp;語法&nbsp;/&nbsp;<font style="color:#0066FF">'.$_open_bodys2.'</font>&nbsp;&nbsp;<br><br>留言 '.$add_num_pe.' / 1200 筆</td>
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
		  
		  
if($arrays_value__action[($array_borads__num[$i]-100)][3]==1){
	  $array_borads__body[$i]=str_replace('[a]http://','<a target="_blank" href=http://',$array_borads__body[$i]);
	  $array_borads__body[$i]=str_replace('[/a]','  >-連結-</a>',$array_borads__body[$i]);
}
	echo '    <table  border="1" cellpadding="0" cellspacing="0">
     
	  <tr>
        <td class="borad__css">';
		 echo '<table border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td colspan="2" class="'.$boy___class_title.'">'.$boy___shows.'&nbsp;&nbsp;'.$array_borads__name[$i].'_的留言<br>
	 </td>
      </tr>
      </tr>
    <tr>
      <td  valign="top" align="center" class="'.$boy___class_bg2.'">'.$img__bodys.'<br><br>&nbsp;<a href="login_bodys.php?ppiinnss=293&borad__lens=l310&check_se='.$maths.'&val_i='.$array_borads__num_pass[$i].'">[修改]</a><br>&nbsp;<a href="del_boradorthisword.php?this_val='.$array_borads__num_pass[$i].'&del___val=912" onClick="return confirm('."'".'您確定要刪除此留言?'."'".')" target="_self">[刪除]</a></td>
      <td  class="'.$boy___class.'">';
	    echo '<pre><font style="color:'.$array_borads__color[$i].'">'.$array_borads__body[$i].'</font></pre></td>';
echo '</tr>
    <tr>
      <td align="right" colspan="2" class="'.$boy___class_date.'">日期 :'.$array_borads__date[$i].'&nbsp;</td>
    </tr>
  </table>';
  echo '</td>
      </tr>
    </table><br><br><br><br>';
  
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
//login_bodys.php?ppiinnss=293&borad__lens=l1ll&check_se=100
for($ii=0;$ii<$alls_number;$ii++){
echo '<a href="login_bodys.php?ppiinnss=293&borad__lens=l1ll&check_se='.$maths_.'&num__='.$ii*$stops.'#by">'.($ii+1).'</a>&nbsp;&nbsp;';
}
echo '頁&nbsp;&nbsp;</div>';
}
//00000000
les___pow($array_borads__num,$stop_num,$maths);
//00000000
echo '</td>
    </tr>
  </table></div>';
}//留言版 back




function borad_show_225($body__peo,$body__start,$body__title,$body__body,$body__end,$num___adds_peo){
global $check_se;
echo '<br><div  align="left">';
echo '<font style="font-size:12px;color:#990000">標題: </font><a href="login_bodys.php?ppiinnss=179&check_data='.$check_se.'&val_=show">'.$body__title.'</a> &nbsp;&nbsp;&nbsp;<font style="font-size:12px;color:#990000">發表日期: </font>'.$body__start.' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font style="font-size:12px;color:#990000">人氣 : </font>'.$body__peo.'&nbsp;&nbsp;&nbsp;<font style="font-size:12px;color:#990000">回覆 : </font>'.$num___adds_peo;
echo '<hr width="63%" size="1"></div>';
echo '<div class="broad_str_text"><pre>'.$body__body.'</pre></div>';
echo '<div align="right"><font style="font-size:12px;color:#990000">最後編輯 : </font>'.$body__end.'</div';

}

function chan_fun_293($a,$b,$porss,$tit,$bodyss,$c,$dels,$pors){

include('helps.htm');
echo ' <form name="mykings" method="post" action="rs_pass_all.php">
    <table width="294" height="417" border="0" cellpadding="3" cellspacing="2">
      	  <tr>
    <td align="right">
        <input type="submit" value="修改" style="font-size:12px">
    </td>
  </tr>
	  <tr>
        <td> <div align="left">分類-
            <select name="por">';
for($i=0;$i<count($b);$i++){
if($dels[$i]!='@已刪除無法顯示#'){

if($porss==$b[$i]){

if($dels[$i]=='@刪除不顯示#'){
echo '<option value="'.$b[$i].'"selected >'.$a[$i].' &ne; 刪除中</option>';
}else{
echo '<option value="'.$b[$i].'"selected >'.$a[$i].'</option>';
}

}else{

if($dels[$i]=='@刪除不顯示#'){
echo '<option value="'.$b[$i].'">'.$a[$i].' &ne; 刪除中</option>';
}else{
echo '<option value="'.$b[$i].'">'.$a[$i].'</option>';

}

}//是否等於selected


}//是否已刪除
}//for
echo' </select>
        </div></td>
      </tr>
  <td> <div align="left">文章標題-
            <input name="titles" type="text" style="font-size:12px" size="30" maxlength="20" value="'.$tit.'">
    </div></td>
  </tr>
  <tr>
    <td height="17"> <div align="left">輔助-
          <input type="button"  value="粗體" style="font-size:12px" onClick="b_1()">
          <input type="button"  value="字體" style="font-size:12px" onClick="a_1()">
          <input type="button"  value="超連結" style="font-size:12px" onClick="link_1()">
          <input type="button"  value="圖片" style="font-size:12px" onClick="img_1()">
          <input type="button"  value="影片" style="font-size:12px" onClick="mtv_1()">
          <input type="button"  value="Flash" style="font-size:12px" onClick="swf_1()">
          <input type="button"  value="音樂" style="font-size:12px" onClick="music_1()">
    - '.$c.' -> <input type="text" name="color__name" style="font-size:12px" size="7" maxlength="7" ></div></td>
  </tr>
  <tr>
    <td><textarea name="bodys" cols="80" rows="20" wrap="VIRTUAL">'.$bodyss.'</textarea></td>
  </tr>
    </table>
<input type="hidden" name="kings" value="184chan_181">
<input type="hidden" name="pins" value="'.$pors.'">
  </form>';
}//end 新增文章


function chan_fun_292($a,$b,$porss,$tit,$bodyss,$c,$dels,$pors){
include('helps.htm');
echo ' <form name="mykings" method="post" action="rs_pass_all.php">
    <table width="294" height="417" border="0" cellpadding="3" cellspacing="2">
      <tr>
        <td> <div align="left">分類-
            <select name="por">';
for($i=0;$i<count($b);$i++){
if($dels[$i]!='@已刪除無法顯示#'){

if($porss==$b[$i]){

if($dels[$i]=='@刪除不顯示#'){
echo '<option value="'.$b[$i].'"selected >'.$a[$i].' &ne; 刪除中</option>';
}else{
echo '<option value="'.$b[$i].'"selected >'.$a[$i].'</option>';
}

}else{

if($dels[$i]=='@刪除不顯示#'){
echo '<option value="'.$b[$i].'">'.$a[$i].' &ne; 刪除中</option>';
}else{
echo '<option value="'.$b[$i].'">'.$a[$i].'</option>';

}

}//是否等於selected


}//是否已刪除
}//for
echo' </select>
        </div></td>
      </tr>
  <td> <div align="left">文章標題-
            <input name="titles" type="text" style="font-size:12px" size="30" maxlength="20" value="'.$tit.'">
    </div></td>
  </tr>
  <tr>
    <td height="17"> <div align="left">輔助-
          <input type="button"  value="粗體" style="font-size:12px" onClick="b_1()">
          <input type="button"  value="字體" style="font-size:12px" onClick="a_1()">
          <input type="button"  value="超連結" style="font-size:12px" onClick="link_1()">
          <input type="button"  value="圖片" style="font-size:12px" onClick="img_1()">
          <input type="button"  value="影片" style="font-size:12px" onClick="mtv_1()">
          <input type="button"  value="Flash" style="font-size:12px" onClick="swf_1()">
          <input type="button"  value="音樂" style="font-size:12px" onClick="music_1()">
    - '.$c.' -> <input type="text" name="color__name" style="font-size:12px" size="7" maxlength="7" ></div></td>
  </tr>
  <tr>
    <td><textarea name="bodys" cols="80" rows="20" wrap="VIRTUAL">'.$bodyss.'</textarea></td>
  </tr>
  <tr>
    <td height="80"><div align="center">
        <input type="submit" name="Submit42" value="送出">
    </div></td>
  </tr>
    </table>
<input type="hidden" name="kings" value="184chan">
<input type="hidden" name="pins" value="'.$pors.'">
  </form>';
}//end 新增文章

function change__passwords(){
echo '<form name="form4" method="post" action="rs_pass_all.php"><table width="195" border="1" cellspacing="0" cellpadding="0">
    <tr>
      <td height="30" bgcolor="#FFCC00">&nbsp;&nbsp;更改密碼</td>
    </tr>
    <tr>
      <td height="55">&nbsp;&nbsp;輸入舊密碼&nbsp;
        <input name="passs" type="password" size="12" maxlength="12"></td>
    </tr>
    <tr>
      <td height="30" align="right">
        <input type="submit" value="更改" style="font-size:12px">&nbsp;&nbsp;
       </td>
    </tr>
  </table><input type="hidden" name="kings" value="chan446"></form>';
}





function read_emails_win(){
include('alls/free.php');
echo '<table width="560" height="59" border="1" cellpadding="0" cellspacing="0">
    <tr bgcolor="#FFCC00">
      <td height="37" colspan="3">&nbsp;&nbsp;系統信件</td>
    </tr>
    <tr>
      <th width="25%">寄信人</th>
      <th width="60%">主題</th>
      <th width="15%">刪除</th>
    </tr>';
for($i=0;$i<count($later__is_free_pin);$i++){
if($later__is_free_true[$i]=='1'){
echo ' <tr>
      <th  style="color:#990000">[&nbsp;'.$later__is_free_name[$i].'&nbsp;]</th>
      <td >&nbsp;&nbsp;<a href="login_bodys.php?ppiinnss=53318_chan&pin_table='.$later__is_free_pin[$i].'">'.$later__is_free_title[$i].'</a></td>
      <form  method="post" action="rs_pass_all.php"><td  align="center"><input type="hidden" name="kings" value="del__9873"><input type="hidden" name="pins_this" value="'.$later__is_free_pin[$i].'"><input type="submit" value="刪除"></td></form>
    </tr>';
}//if 是否安裝過 刪除
}	
	
echo '</table>';
}


function read_emails_me(){
include('alls/add_mycool.php');
for($i=(count($cool__99num)-1);$i>-1;$i--){
if($cool__99true[$i]=='1'){
$cool__99true___write='<b style="color:#990000">未閱讀</b>';
}else{
$cool__99true___write='已閱讀';
}
if($cool__99num[$i]!='@已刪除#'){
if($cool__99boy[$i]=='男'){
$colors__boy='#0000FF';
}else{
$colors__boy='#FF0000';
}

if($cool__99true[$i]=='1'){
$true__name_star='<b style="color:#990000">&nbsp;'.$cool__99name[$i].'&nbsp;</b>';
}else{
$true__name_star='<b style="color:#000000">&nbsp;'.$cool__99name[$i].'&nbsp;</b>';
}
echo '<form action="rs_pass_all.php" method="post">
    <tr>
      <td  align="center">&nbsp;&nbsp;'.$true__name_star.'</td>
      <td >&nbsp;<a href="login_bodys.php?ppiinnss=535see&vals_99='.$cool__99num[$i].'">'.$cool__99title[$i].'</a></td>
      <td align="center">&nbsp;'.$cool__99true___write.'</td>
      <td  align="center">&nbsp;'.$cool__99date[$i].'</td>
      <td  align="center"><input value="刪除" type="submit"><input value="'.$cool__99num[$i].'" name="vals__pin" type="hidden"><input value="del__98mys" name="kings" type="hidden"></td>
    </tr>
	</form>
  ';
}
}//end for
echo '</table>';
}


function win_center($trues_ch='on',$name_blog='blog名稱',$localhosts='127001'){

echo '<form method="post" action="rs_pass_all.php"><table width="350"  border="1" cellpadding="2" cellspacing="0"><tr bgcolor="#FFCC00"><td height="30" colspan="2">&nbsp;&nbsp;Blog中心</td></tr>
    <tr>
<td colspan="2"   align="right">
<input type="submit" style="font-size:12px" value="更改">
</td>
</tr>	
	<tr>
      <td >&nbsp;&nbsp;Blog開關</td>
      <td >&nbsp;&nbsp;';
function trues($checkeds){
if($checkeds=='on'){
echo '<input name="trues__1" type="radio" value="on" checked>&nbsp;開&nbsp;<input name="trues__1" type="radio" value="off">&nbsp;關';
}else{
echo '<input name="trues__1" type="radio" value="on" >&nbsp;開&nbsp;<input name="trues__1" type="radio" value="off" checked>&nbsp;關';

}
}
	trues($trues_ch);  
echo '</td>
    </tr>
    <tr>
      <td >&nbsp;&nbsp;Blog名稱</td>
      <td >&nbsp;&nbsp;<input type="text" name="blog_name__1" value="'.$name_blog.'" maxlength="30"></td>
    </tr>
    <tr>
      <td >&nbsp;&nbsp;登入Host</td>
      <td >&nbsp;&nbsp;';
	  if($localhosts=='127001'){
	  echo '<input name="local__1" type="radio" value="127001" checked>&nbsp;本機電腦&nbsp;<input name="local__1" type="radio" value="all">&nbsp;所有電腦</td>';
      }else{
	  echo '<input name="local__1" type="radio" value="127001">&nbsp;本機電腦&nbsp;<input name="local__1" type="radio" value="all"  checked>&nbsp;所有電腦</td>';

	  }
echo'</tr>
	 <tr>
      <td>&nbsp;&nbsp;禁止IP</td>
      <td  align="center"><br><div align="left" class="back_div_text"><br>';
//寫被禁止的IP
@include('alls/ip_no_value.php');	
for($i=(count($no_ip___ip)-1);$i>-1;$i--){
if($no_ip___ip[$i]!=''){
echo '&nbsp;ip:[&nbsp;<font style="color:#0066FF">'.$no_ip___ip[$i].'</font>&nbsp;]<br>&nbsp;<font style="color:#990000">'.$no_ip___time[$i].'</font>&nbsp;'.$no_ip___A[$i].'<br><br>';
}
}  
echo '<br></div><br></td>
    </tr>					
  </table><input type="hidden" name="kings" value="chan481"></form>';
}













function my_center($name__y='小武',$boy__y='0',$bir_1111='2004',$bir_11='1',$bir_29='1',$star_y='天蠍',$o_y='AB',$merry_y='未婚',$int_y='興趣',$dri_y='夢想',$myimg_y='自拍',$img_y='圖片',$love_y='喜愛',$hate_y='討厭',$loves_y='喜歡的事',$hates_y='討厭的事',$pho_y='線上聯絡方式'){

echo '<form method="post" action="rs_pass_all.php"><table width="350" height="53" border="1" cellpadding="2" cellspacing="0"><tr bgcolor="#FFCC00"><td height="35" colspan="2">&nbsp;&nbsp;個人資料</td></tr>
   <tr>
<td colspan="2"align="right" >
<input type="submit" style="font-size:12px" value="更改">
</td>
</tr>
    <tr>
      <td width="30%">&nbsp;&nbsp;暱&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;稱</td>
      <td height="28">&nbsp;&nbsp;<input type="text" name="name___443" value="'.$name__y.'"  maxlength="40" style="font-size:12px" size="12"></td>
    </tr>
    <tr>
      <td width="30%">&nbsp;&nbsp;性&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;別</td>
      <td height="28">&nbsp;&nbsp;';
	  
	  function boys($checked){
	  if($checked==1){
	  echo '<input name="boy__443" type="radio" value="1" checked>&nbsp;男&nbsp;<input name="boy__443" type="radio" value="0">&nbsp;女';
	  }else{//if
	  echo '<input name="boy__443" type="radio" value="1">&nbsp;男&nbsp;<input name="boy__443" type="radio" value="0" checked>&nbsp;女';
     }
	  }//end fun
	  
	  boys($boy__y);
echo '</td>
    </tr>
    <tr>
      <td width="30%">&nbsp;&nbsp;生&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;日</td>
      <td height="28">&nbsp;&nbsp;';
  function birsday($name,$selecteds,$vals){
  echo '&nbsp;<select name="'.$name.'">';
  if($vals=='月'){
  for($i=1;$i<13;$i++){
  if($i==$selecteds){
  echo '<option value="'.$i.'" selected>'.$i.'</option>';
  }else{
   echo '<option value="'.$i.'">'.$i.'</option>';
  }
  }//for
  }
  if($vals=='日'){
    for($i=1;$i<32;$i++){
  if($i==$selecteds){
  echo '<option value="'.$i.'" selected>'.$i.'</option>';
  }else{
   echo '<option value="'.$i.'">'.$i.'</option>';
  }
  }//for
  } 
    if($vals=='年'){
    for($i=1960;$i<2005;$i++){
  if($i==$selecteds){
  echo '<option value="'.$i.'" selected>'.$i.'</option>';
  }else{
   echo '<option value="'.$i.'">'.$i.'</option>';
  }
  }//for
  } 
  echo '</select>&nbsp;';	
  }//end fun
   echo '西元';
   birsday('name___443_2000',$bir_1111,'年');
   birsday('name___443_12',$bir_11,'月');
   echo '月';
   birsday('name___443_31',$bir_29,'日'); 
   echo '日';  
echo '</td>
    </tr>
    <tr>
      <td width="30%">&nbsp;&nbsp;職&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;業</td>
      <td height="28">&nbsp;&nbsp;';
	  //---------------------------
function star_arrays($val_array,$a_array,$selects,$name){
echo '<select name="'.$name.'">';
for($i=0;$i<count($val_array);$i++){
  if($selects==$val_array[$i]){
  echo '<option value="'.$val_array[$i].'" selected>'.$a_array[$i].'</option>';
  }else{
   echo '<option value="'.$val_array[$i].'">'.$a_array[$i].'</option>';
  }
}//for
echo '</select>&nbsp;';	
}//end	  
//--------------------------
$aa=array('待業','學生','服務業','自由業','SOHO族','法律相關行業','大眾傳播','製造業','資訊業','電子業','公家機關','軍人','醫生','會計師','工程師','教育/研究','退休','其他');
star_arrays($aa,$aa,$star_y,'star___443');
echo '</td>
    </tr>
    <tr>
      <td width="30%">&nbsp;&nbsp;血&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;型</td>
      <td height="28">&nbsp;&nbsp;';
$aa=array('O','B','A','AB');
star_arrays($aa,$aa,$o_y,'o___443');
echo '型';
echo '</td>
    </tr>			
    <tr>
      <td width="30%">&nbsp;&nbsp;婚&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;姻</td>
      <td height="28">&nbsp;&nbsp;';
$aa=array('已婚','未婚');
star_arrays($aa,$aa,$merry_y,'merry___443');
	  echo '</td>
    </tr>
	    <tr>
      <td width="30%">&nbsp;&nbsp;自&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;拍</td>
      <td height="28">&nbsp;&nbsp;<input type="text" name="myimg___443" value="'.$myimg_y.'"  maxlength="250" style="font-size:12px" size="35"></td>
    </tr>
    <tr>
      <td width="30%">&nbsp;&nbsp;圖&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;片</td>
      <td height="28">&nbsp;&nbsp;<input type="text" name="img___443" value="'.$img_y.'"  maxlength="250" style="font-size:12px" size="35"></td>
    </tr>	
    <tr>
      <td width="30%">&nbsp;&nbsp;興&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;趣</td>
      <td height="28">&nbsp;&nbsp;<input type="text" name="int___443" value="'.$int_y.'"  maxlength="40" style="font-size:12px"></td>
    </tr>
    <tr>
      <td width="30%">&nbsp;&nbsp;夢&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;想</td>
      <td height="28">&nbsp;&nbsp;<input type="text" name="dri___443" value="'.$dri_y.'"  maxlength="40" style="font-size:12px"></td>
    </tr>					
    <tr>
      <td width="30%">&nbsp;&nbsp;最&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;愛</td>
      <td height="28">&nbsp;&nbsp;<input type="text" name="love___443" value="'.$love_y.'"  maxlength="40" style="font-size:12px"></td>
    </tr>
    <tr>
      <td width="30%">&nbsp;&nbsp;討&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;厭</td>
      <td height="28">&nbsp;&nbsp;<input type="text" name="hate___443" value="'.$hate_y.'"  maxlength="40" style="font-size:12px"></td>
    </tr>			
    <tr>
      <td width="30%">&nbsp;&nbsp;即&nbsp;&nbsp;&nbsp;&nbsp;時&nbsp;&nbsp;&nbsp;&nbsp;通</td>
      <td height="28">&nbsp;&nbsp;<input type="text" name="loves___443" value="'.$loves_y.'" maxlength="100" style="font-size:12px"></td>
    </tr>
    <tr>
      <td width="30%">&nbsp;&nbsp;線&nbsp;&nbsp;上&nbsp;&nbsp;聯&nbsp;&nbsp;絡</td>
      <td height="28">&nbsp;&nbsp;<input type="text" name="hates___443" value="'.$hates_y.'" maxlength="250" style="font-size:12px"></td>
    </tr>						
    <tr>
      <td width="30%">&nbsp;&nbsp;簡&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;介</td>
      <td height="28">&nbsp;&nbsp;<textarea name="pho___443" style="width:18em;height:5em" >'.$pho_y.'</textarea></td>
    </tr>
							
  </table><input type="hidden" name="kings" value="chan419"></form>';
}


function pass_chan($password){
for($i=0;$i<strlen($password);$i++){
switch($password[$i]){
case '1':$pass__array[$i]='ao';
       $Add+=1111; break;
case '2':$pass__array[$i]='bt';
       $Add+=3592;  break;
case '3':$pass__array[$i]='ct';
       $Add+=2795;  break;
case '4':$pass__array[$i]='df';
       $Add+=5297;  break;
case '5':$pass__array[$i]='ef';
       $Add+=6690;  break;
case '6':$pass__array[$i]='fs';
       $Add+=1291;  break;
case '7':$pass__array[$i]='gs';
       $Add+=7001;break;
case '8':$pass__array[$i]='hh';
       $Add+=5007;break;
case '9':$pass__array[$i]='in';
       $Add+=3003;break;
case '0':$pass__array[$i]='jz';
       $Add+=2919;break;
case 'a':$pass__array[$i]='e16';
       $Add+=23;break;
case 'b':$pass__array[$i]='2wS';
       $Add+=3023;break;
case 'c':$pass__array[$i]='3q';
       $Add+=3323;break;
case 'd':$pass__array[$i]='4v';
       $Add+=3063;break;
case 'e':$pass__array[$i]='5d';
       $Add+=3663;break;
case 'f':$pass__array[$i]='6Fz';
       $Add+=3068;break;
case 'g':$pass__array[$i]='73';
       $Add+=3368;break;
case 'h':$pass__array[$i]='83';
       $Add+=3268;break;
case 'i':$pass__array[$i]='31';
       $Add+=3265;break;
case 'j':$pass__array[$i]='91';
       $Add+=5265;break;
case 'k':$pass__array[$i]='Ab';
       $Add+=7258;break;
case 'l':$pass__array[$i]='BG5';
       $Add+=3266; break;
case 'm':$pass__array[$i]='Cg';
       $Add+=366; break;
case 'n':$pass__array[$i]='Dj';
       $Add+=126; break;
case 'o':$pass__array[$i]='3E';
       $Add+=36; break;
case 'p':$pass__array[$i]='de';
       $Add+=3736; break;
case 'q':$pass__array[$i]='42';
       $Add+=5268; break;
case 'r':$pass__array[$i]='Hew';
       $Add+=7266; break;
case 's':$pass__array[$i]='Ias';
       $Add+=252; break;
case 't':$pass__array[$i]='Jcf';
       $Add+=2316; break;
case 'u':$pass__array[$i]='eK';
       $Add+=266; break;
case 'v':$pass__array[$i]='aL';
       $Add+=2326; break;
case 'w':$pass__array[$i]='fM';
       $Add+=2412; break;
case 'x':$pass__array[$i]='Nn';
       $Add+=2321; break;
case 'y':$pass__array[$i]='Omy';
       $Add+=66; break;
case 'z':$pass__array[$i]='rtP';
       $Add+=212; break;
case 'A':$pass__array[$i]='d1';
       $Add+=3; break;
case 'B':$pass__array[$i]='24';
       $Add+=2; break;
case 'C':$pass__array[$i]='3q4';
       $Add+=1; break;
case 'D':$pass__array[$i]='4ll';
       $Add+=34; break;
case 'E':$pass__array[$i]='5sd';
       $Add+=21; break;
case 'F':$pass__array[$i]='6zq';
       $Add+=34; break;
case 'G':$pass__array[$i]='7v3';
       $Add+=55; break;
case 'H':$pass__array[$i]='83a';
       $Add+=75; break;
case 'I':$pass__array[$i]='9v1';
       $Add+=12; break;
case 'J':$pass__array[$i]='A1b';
       $Add+=71; break;
case 'K':$pass__array[$i]='B65';
       $Add+=4; break;
case 'L':$pass__array[$i]='C4vbg';
       $Add+=7; break;
case 'M':$pass__array[$i]='Dloj';
       $Add+=8; break;
case 'N':$pass__array[$i]='3zxE';
       $Add+=21; break;
case 'O':$pass__array[$i]='dDe';
       $Add+=86; break;
case 'P':$pass__array[$i]='4A2';
       $Add+=64; break;
case 'Q':$pass__array[$i]='Hesw';
       $Add+=54; break;
case 'R':$pass__array[$i]='Ias';
       $Add+=0; break;
case 'S':$pass__array[$i]='Jcf';
       $Add+=3; break;
case 'T':$pass__array[$i]='epK';
       $Add+=3; break;
case 'U':$pass__array[$i]='aPL';
       $Add+=52; break;
case 'V':$pass__array[$i]='fM';
       $Add+=65; break;
case 'W':$pass__array[$i]='Nn';
       $Add+=2; break;
case 'X':$pass__array[$i]='Omy';
       $Add+=0; break;
case 'Y':$pass__array[$i]='rLJ';
       $Add+=97; break;
case 'Z':$pass__array[$i]='rtP';
       $Add+=12; break;
default:$loca="您可以離開嚕";
}
}
if($loca=="您可以離開嚕"){
$passwordss='';
}else{

for($i=0;$i<count($pass__array);$i++){
$passwordss=$passwordss.$pass__array[$i];
}
$passwordss="$Add".$passwordss;

}//if 無效元素 例如 _ @ #
return $passwordss;
}


function tops___img(){
global $targets;
echo '<table width="200" border="0" cellspacing="5" cellpadding="5">
          <tr>
            <td><a href="login_bodys.php?ppiinnss=327&targets='.($targets-100).'" target="_self"><img src="images/top2.gif" width="400" height="300"></a></td>
          </tr>
          <tr>
            <td><a href="login_bodys.php?ppiinnss=230&targets='.($targets-100).'" target="_self"><img src="images/top.gif" width="400" height="300"></a></td>
          </tr>
          <tr>
            <td><a href="login_bodys.php?ppiinnss=328&targets='.($targets-100).'" target="_self"><img src="images/top3.gif" width="400" height="300"></a></td>
          </tr>
        </table>';
}


function borad____999(){
global $targets;
$br='<br>';
echo '<script language="JavaScript" type="text/JavaScript">
function Gi_https222(){
http=prompt("連結網址","http://");
word=prompt("名稱","連結");
target=prompt("Target\n-----1._blank  2._self","1");
if(target==1){
target="_self";
}else{
target="_target";
}
document.mykings.text__html.value+="\n"+"[a="+http+" target="+target+"]"+word+"[/a]";
}
function Gi_imgs222(){
http=prompt("圖片網址","http://");
document.mykings.text__html.value+="\n[img]"+http+"[/img]";
}
</script>';
include('alls/add_121_a.php');
include('alls/add_borad_css.php');
echo '<link href="css/style_css.php?num='.$targets.'" rel="stylesheet" type="text/css">';
echo'<script language="javascript">
function onch(){
if(document.mykings.cs_array6.checked==true){
document.mykings.cs_array666.disabled=false;
}else{
document.mykings.cs_array666.disabled=true;
}
}//end
</script>';

$action=$arrays_value__action[$targets];
if($action[0]=='1'){
$aaaa1='checked';
}//判定是否選取checked

if($action[1]=='1'){
$aaaa2='checked';
}//判定是否選取checked

if($action[2]=='1'){
$aaaa3='checked';
}//判定是否選取checked

if($action[3]=='1'){
$aaaa4='checked';
}
if($action[4]=='1'){
$aaaa5='checked';
}//判定是否選取checked

if($action[5]=='1'){
$aaaa6='checked';
}else{
$aaaa66='disabled';
}//判定是否選取checked

if($action[6]=='1'){
$aaaa7='checked';
}//判定是否選取checked

if($action[7]=='1'){
$aaaa8='checked';
}
if($action[8]=='1'){
$aaaa9='checked';
}

echo '<form  name="mykings" method="post" action="rs_pass_all.php">

<div align="right"><input  type="submit" value="更新" style="font-size:12px">&nbsp;&nbsp;</div>';
echo ' <div align="left" style="padding: 10px;">
<table width="300" border="0" cellspacing="2" cellpadding="2">
          <tr>
            <td  colspan="2" nowrap>---------留言版---------</td>
          </tr>
      <tr>
      <td nowrap>
	  <input type="checkbox" name="cs_array1" value="1" '.$aaaa1.'>
      開放留言版
	  </td>
     <td nowrap><input type="checkbox" name="cs_array2" value="1" '.$aaaa2.'>
     開放留言
	 </td><td nowrap><input type="checkbox" name="cs_array3" value="1" '.$aaaa3.'>
     公開留言內容</td>
      </tr>
		  
          <tr>
       <td nowrap><input type="checkbox" name="cs_array4" value="1" '.$aaaa4.'>
      開放語法</td>
            <td nowrap><input type="checkbox" name="cs_array5" value="1" '.$aaaa5.'>
      開放語法輔助</td>
	              <td nowrap><input type="checkbox" name="cs_array6" value="1"  '.$aaaa6.'  onChange="onch()">
           限制密碼 <input name="cs_array666" type="text" size="5" maxlength="4" style="font-size:12px"  '.$aaaa66.'  value="'.$action[9].'"></td>
          </tr>
		  
		  
	    <td nowrap><input type="checkbox" name="cs_array7" value="1" '.$aaaa7.'>
      留言版說明</td>
            <td nowrap><input type="checkbox" name="cs_array8" value="1" '.$aaaa8.'>
      公開暱稱</td>
            <td nowrap><input type="checkbox" name="cs_array9" value="1" '.$aaaa9.'>
      公開ip位址</td>          </tr> 
        </table>';



echo '<hr height="1">';
echo '<div class="borad__css">
		<table border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td colspan="2" class="borad__css_boy_title"> ♀男♂&nbsp;&nbsp;小武_的留言</td>
    </tr>
    <tr>
      <td class="borad__css_boy_bg2"><img src="images/img7.gif"></td>
      <td class="borad__css_boy">假如是個男的留言... </td>
    </tr>
    <tr>
      <td colspan="2" class="borad__css_boy_date">日期: 2006/01/01 00:00</td>
    </tr>
  </table>
  </div>
  '.$br;  		
echo '<div class="borad__css">  
  <table border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td colspan="2" class="borad__css_girl_title"> ♀女♂&nbsp;&nbsp;小美_的留言</td>
    </tr>
    <tr>
      <td class="borad__css_girl_bg2"><img src="images/img1.gif" width="50" height="50"></td>
      <td class="borad__css_girl">假如是個女的留言...</td>
    </tr>
    <tr>
      <td colspan="2" class="borad__css_girl_date">日期: 2006/01/01 00:00</td>
    </tr>
  </table>
  </div>
'.$br; 	
$cools_text_word=$say__text_word[$targets];
$str__repl=new mysql_et;
$cools_text_word=$str__repl->str_re($cools_text_word,array('[a=','[/a]','[img]','[/img]',']'),array('<a href=','</a>','<img src=','  >','>'));
echo'<div class="borad__div" ><pre>'.$cools_text_word.'</pre></div>';		
echo $br.'<table border="0" cellspacing="0" cellpadding="2">
	<tr>
      <td nowrap><a href="http://" onClick="Gi_https222();">[連線]</a><a href="http://" onClick="Gi_imgs222();">[圖片]</a></td>
    </tr>
	<tr>
      <td nowrap><textarea name="text__html" cols="75" rows="10" wrap="VIRTUAL">'.$say__text_word[$targets].'</textarea></td>
    </tr>
  </table>';  
echo $br.'<table  width="200" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td nowrap>名稱&nbsp;</td>
      <td nowrap><input name="name__str1" type="text" size="10" value="'.$this_borad_p1_name[$targets].'" maxlength="30"></td>
      <td nowrap>-<input name="name__str2" type="text" size="10" value="'.$this_borad_p2_name[$targets].'" maxlength="30"></td>
      <td nowrap>-<input name="name__str3" type="text" size="10" value="'.$this_borad_p3_name[$targets].'" maxlength="30"></td>
      <td nowrap>-<input name="name__str4" type="text" size="10" value="'.$this_borad_p4_name[$targets].'" maxlength="30"></td>
      <td nowrap>-<input name="name__str5" type="text" size="10" value="'.$this_borad_p5_name[$targets].'" maxlength="30"></td>
      <td nowrap>-<input name="name__str6" type="text" size="10" value="'.$this_borad_p6_name[$targets].'" maxlength="30"></td>
    </tr>
    <tr>
      <td nowrap>網址&nbsp;</td>
      <td nowrap><input name="name__url1" type="text" size="10" value="'.$this_borad_p1_url[$targets].'" maxlength="300"></td>
      <td nowrap>-<input name="name__url2" type="text" size="10" value="'.$this_borad_p2_url[$targets].'" maxlength="300"></td>
      <td nowrap>-<input name="name__url3" type="text" size="10" value="'.$this_borad_p3_url[$targets].'" maxlength="300"></td>
      <td nowrap>-<input name="name__url4" type="text" size="10" value="'.$this_borad_p4_url[$targets].'" maxlength="300"></td>
      <td nowrap>-<input name="name__url5" type="text" size="10" value="'.$this_borad_p5_url[$targets].'" maxlength="300"></td>
      <td nowrap>-<input name="name__url6" type="text" size="10" value="'.$this_borad_p6_url[$targets].'" maxlength="300"></td>
    </tr>

  </table>';
echo $br.'
<textarea name="css_alls" cols="75" rows="30" wrap="VIRTUAL">'.$css_all_array[$targets].'</textarea>
<input type="hidden" name="kings" value="293chan"><input type="hidden" name="xd_pin" value="'.$targets.'"></form></div>';

}





function chan_fun_borad(){
global $targets;
include('helps.htm');
include('alls/add_121_a.php');
$colors_s=new color_et;
$color_bb=$colors_s->color_select_2('a___color');
echo ' <form name="mykings" method="post" action="rs_pass_all.php">
    <table  border="0" cellpadding="3" cellspacing="2">
	  <tr>
    <td  align="right">
        <input type="submit" style="font-size:12px" value="更新">
    </td>
  </tr>
  <tr>
    <td height="17"> <div align="left">輔助-
          <input type="button"  value="粗體" style="font-size:12px" onClick="b_1()">
          <input type="button"  value="字體" style="font-size:12px" onClick="a_1()">
          <input type="button"  value="超連結" style="font-size:12px" onClick="link_1()">
          <input type="button"  value="圖片" style="font-size:12px" onClick="img_1()">
          <input type="button"  value="影片" style="font-size:12px" onClick="mtv_1()">
          <input type="button"  value="Flash" style="font-size:12px" onClick="swf_1()">
          <input type="button"  value="音樂" style="font-size:12px" onClick="music_1()">
    - '.$color_bb.' -> <input type="text" name="color__name" style="font-size:12px" size="7" maxlength="7" ></div></td>
  </tr>
  <tr>
    <td><textarea name="bodys" cols="80" rows="20" wrap="VIRTUAL">'.$arrays_value__actions[$targets].'</textarea></td>
  </tr>
    </table>
<input type="hidden" name="kings" value="chan_294">
<input type="hidden" name="pins" value="'.$targets.'">
  </form>';
}//end 新增文章

function div_tops(){
global $ppiinnss;

if($ppiinnss==''){
$king__words=array(1);
}//首頁
if($ppiinnss=='121'){
$king__words=array(3,0);
}//新增分類
if($ppiinnss=='148'){
$king__words=array(3,1);
}//編輯分類
if($ppiinnss=='184'){
$king__words=array(3,2);
}//新增文章
if($ppiinnss=='179'){
$king__words=array(3,3);
}//編輯文章
if($ppiinnss=='312'){
$king__words=array(4,4);
}//樣版新增
if($ppiinnss=='315'){
$king__words=array(4,5);
}//樣版編輯
if($ppiinnss=='319'){
$king__words=array(4,6);
}//樣版套用

if($ppiinnss=='424'){
$king__words=array(5,7);
}//控制中心
if($ppiinnss=='434'){
$king__words=array(5,8);
}//個人資料
if($ppiinnss=='335'){
$king__words=array(5,9);
}//更改密碼

if($ppiinnss=='535'){
$king__words=array(6,10);
}//個人信箱
if($ppiinnss=='531'){
$king__words=array(6,11);
}//系統信箱
if($ppiinnss=='219'){
global $targets;
include('alls/add_121_a.php');
$ho_body=$arrays_value__2[$targets-100];
$king__words=array(2,12);
}//討論區

if($ppiinnss=='230'){
global $targets;
include('alls/add_121_a.php');
$ho_body=$arrays_value__2[$targets];
$king__words=array(2,12,1);
}//討論區 留言版編輯

if($ppiinnss=='327'){
global $targets;
include('alls/add_121_a.php');
$ho_body=$arrays_value__2[$targets];
$king__words=array(2,12,0);
}//討論區 討論版

if($ppiinnss=='328'){
global $targets;
include('alls/add_121_a.php');
$ho_body=$arrays_value__2[$targets];
$king__words=array(2,12,2);
}//討論區 插版 


if($ppiinnss=='293'){
global $check_se;
include('alls/add_121_a.php');
$ho_body=$arrays_value__2[$check_se-100];
$king__words=array(2,13);
}//討論區 遊覽


if($ppiinnss=='535see'){

$king__words=array(6,10,3);
}//看信件
if($ppiinnss=='1'){
$king__words=array(7);
}
if($king__words==''){
$king__words=array(0);
}

if($ppiinnss=='53318_chan'){
$king__words=array(6,11,3);
}

if($ppiinnss=='339'){
$king__words=array(5,9,4);
}
$shows___top=new show_et;
$this__array_to_1=array('系統訊息','即時報','討論區','我的文章','Blog樣版','系統管理','我的信箱','編輯首頁');
$this__array_to_2=array('文章分類[新增]','文章分類[分類]','我的文章[新增]','我的文章[分類]','儲存樣版[新增]','儲存樣版[編輯]','儲存樣版[套用]','Blog控制[中心]','個人資料[更改]','Blog密碼[更改]','個人信箱[投訴]','系統信箱[訊息]',$ho_body.'&nbsp;[編輯]',$ho_body);
$this__array_to_3=array('討論版','留言版','插版','閱讀信件','輸入新密碼');
$shows___top->show_kings($this__array_to_1,$this__array_to_2,$this__array_to_3);
$shows___top->show_king($king__words);
}
?>