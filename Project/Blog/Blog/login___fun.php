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
number__up.innerHTML="'.$word.'<br><br> �˼� "+nums+" �Y�N����";
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
      <td class="back__a1"><div align="left" >�t�ΰT��</div></td>
    </tr>
    <tr >
      <td class="back__a2"><div align="center" id="number__up">'.$word.'<br><br> �˼� 100 ���Y�N����</div></td>
    </tr>
  </table>';

}//en��@�n�D��s

function say__show_2($word){
echo '<br><br><br><br><br>
<table width="160" border="0" cellpadding="0" cellspacing="0">
    <tr >
      <td  class="back__a1"><div align="left" >�t�ΰT��</div></td>
    </tr>
    <tr  >
      <td class="back__a2"> <div align="center">'.$word.'<br><br><a onClick="javascript:history.go(-1)" href="login_pass.php" target="lefts">[��^]</a></div></td>
    </tr>
  </table>';
}//en��@�n�D�^�W�@��
function say__show_3($word){
echo '<br><br><br><br><br>
<table width="160"  border="0" cellpadding="0" cellspacing="0">
    <tr >
      <td  class="back__a1"><div align="left" >�t�Τ��i</div></td>
    </tr>
    <tr  >
      <td class="back__a2"><div align="center"><font style="font-size:15px">��&nbsp;�\&nbsp;</font>'.$word.'</div></td>
    </tr>
  </table>';
}//en��@���ǰe�����a�I

//****************************
function add_fun_121(){
echo '<br><br><br><br><br><br>';
echo '<form action="rs_pass_all.php" method="post" name="form" target="_self">

<table width="230" border="0" cellpadding="2" cellspacing="2" >
    <tr>
      <td width="203" height="35" nowrap >�������� : [
        <input name="nums" type="text"  style="font-size:12px" size="4" maxlength="2"> 
      ] </td>
    </tr>
    <tr>
      <td nowrap height="35">�����W�� : [
        <input name="names" type="text"  style="font-size:12px" size="20" maxlength="15">
      ]</td>
    </tr>
    <tr>
      <td height="35" nowrap><div align="right">
        <input type="submit" name="Submit2" style="font-size:12px" value="�s�W">
      </div></td>
    </tr>
  </table>

        <input type="hidden" name="kings"  value="121">
</form>';

}//end �s�W����


function change_fun_148($a=array(),$b=array(),$c=array(),$dels){
echo '<br><br><br>';
echo '<table height="65" border="0" cellpadding="1" cellspacing="1" >
<tr>
      <td  height="25" nowrap  ><div align="center">���� [ �}�� ]</div></td>
      <td colspan="2" nowrap><div align="center">-�s��-</div></td>
    </tr>';
$nums_i=0;
for($i=0;$i<count($a);$i++){
if($dels[$i]!='@�w�R���L�k���#' && $dels[$i]!='@�R�������#' && $dels[$i]=='@�L�R��#'){
if($b[$i]!='no' && $b[$i]!='NO' && $b[$i]!='No' && $b[$i]!='nO'){
$nums_i++;
if(0==(($nums_i)%2)){
$ps='#FFD0FF';
}else{
$ps='#C8DAFF';
}//num

   echo'<tr>
      <td nowrap bgcolor="'.$ps.'" >&nbsp; '.$nums_i.'. '.$a[$i].'  &ne;�Ƨ�[ '.$b[$i].' ]</td>
        <form name="form2" method="post" action="login_bodys.php?ppiinnss=149"><td width="30" nowrap bgcolor="'.$ps.'">       
        <input type="submit" name="Submit4" value="�ק�"  ><input type="hidden" name="snums" value="'.($c[$i]-100).'">
       </td> </form>
      <form name="form2" method="post" action="rs_pass_all.php" ><td width="30" nowrap bgcolor="'.$ps.'"><input type="submit" name="Submit3" value="�R��" ><input type="hidden" name="snums" value="'.($c[$i]-100).'"><input type="hidden" name="kings" value="148del"></td></form>
    </tr>';
}//end if
}//end if @�R�������#
}//end

echo ' </table>';
//--------------------------
echo '<br><br><br><br>';
echo '<table  height="65" border="0" cellpadding="1" cellspacing="1" >';

echo '<tr >
      <td  height="30" nowrap ><div align="center">���� [ ���� ]</div></td>
      <td colspan="2" nowrap><div align="center">-�s��-</div></td>
    </tr>';
for($i=0;$i<count($a);$i++){
if($dels[$i]!='@�w�R���L�k���#' && $dels[$i]!='@�R�������#' && $dels[$i]=='@�L�R��#'){
if($b[$i]=='no' || $b[$i]=='NO' || $b[$i]=='No' || $b[$i]=='nO'){
$nums_i++;
if(0==(($nums_i)%2)){
$ps='#FFD0FF';
}else{
$ps='#C8DAFF';
}//num
   echo'<tr>
      <td nowrap bgcolor="'.$ps.'" >&nbsp; '.$nums_i.'. '.$a[$i].'  &ne;�Ƨ�[ '.$b[$i].' ]</td>
       <form name="form2" method="post" action="login_bodys.php?ppiinnss=149"><td width="30" nowrap bgcolor="'.$ps.'">       
        <input type="submit" name="Submit4" value="�ק�"><input type="hidden" name="snums" value="'.($c[$i]-100).'">
       </td></form>
      <form name="form2" method="post" action="rs_pass_all.php">
<td width="30" nowrap bgcolor="'.$ps.'" ><input type="submit" name="Submit3" value="�R��"  ><input type="hidden" name="kings" value="148del"><input type="hidden" name="snums" value="'.($c[$i]-100).'"></td>
</form>
    </tr>';
}
}//end if @�R�������#  
}//end

echo ' </table>';
}//end �s�����



function change_fun_148_a($word,$num,$vas){
echo '<form name="forms" method="post" action="rs_pass_all.php">
<table width="230" border="0" cellpadding="2" cellspacing="2" >
    <tr>
      <td width="203" height="35" nowrap >�������� : [
        <input name="namse_148_num" type="text"   value="'.$num.'"   style="font-size:12px" size="4" maxlength="2"> 
      ] </td>
    </tr>
    <tr>
      <td nowrap height="35">�����W�� : [
        <input name="namse_148_name" type="text"   value="'.$word.'"   style="font-size:12px" size="20" maxlength="15">
      ]</td>
    </tr>
    <tr>
      <td height="35" nowrap><div align="right">
        <input type="submit" name="Submit2" style="font-size:12px" value="�ק�">
      </div></td>
    </tr>
  </table>
<input type="hidden" name="kings"  value="148chan">';
echo '<input name="namse_148_0" type="hidden"   value="'.$vas.'"   >';
//---����@�Ϣ����B�Ģ�
echo '</from>';

}//end �e�ק�����f















function add_fun_184($a,$b,$c,$dels){

include('helps.htm');
echo ' <form name="mykings" method="post" action="rs_pass_all.php">
    <table width="294" height="417" border="0" cellpadding="3" cellspacing="2">
	  <tr>
    <td align="right">
        <input type="submit" value="�s�W" style="font-size:12px">
    </td>
  </tr>
      <tr>
        <td> <div align="left">����-
            <select name="por">
              <option value="�L" selected>���</option>';
for($i=0;$i<count($b);$i++){
if($dels[$i]!='@�w�R���L�k���#' && $dels[$i]!='@�R�������#' && $dels[$i]=='@�L�R��#'){
echo '<option value="'.$b[$i].'" >'.$a[$i].'</option>';
}//end if 
}
echo' </select>
        </div></td>
      </tr>
  <td> <div align="left">�峹���D-
            <input name="titles" type="text" style="font-size:12px" size="30" maxlength="20">
    </div></td>
  </tr>
  <tr>
    <td height="17"> <div align="left">���U-
          <input type="button"  value="����" style="font-size:12px" onClick="b_1()">
          <input type="button"  value="�r��" style="font-size:12px" onClick="a_1()">
          <input type="button"  value="�W�s��" style="font-size:12px" onClick="link_1()">
          <input type="button"  value="�Ϥ�" style="font-size:12px" onClick="img_1()">
          <input type="button"  value="�v��" style="font-size:12px" onClick="mtv_1()">
          <input type="button"  value="Flash" style="font-size:12px" onClick="swf_1()">
          <input type="button"  value="����" style="font-size:12px" onClick="music_1()">
    - '.$c.' -> <input type="text" name="color__name" style="font-size:12px" size="7" maxlength="7" ></div></td>
  </tr>
  <tr>
    <td><textarea name="bodys" cols="80" rows="20" wrap="VIRTUAL"></textarea></td>
  </tr>
    </table>
<input type="hidden" name="kings" value="184add">

  </form>';
}//end �s�W�峹







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
      <td ><div align="left">��ܤ����峹</div></td>
    </tr>
    <tr>
      <td>
<div align="center"><select name="select__values" onChange="myaasd()"><option value="login_bodys.php?ppiinnss=179" selected>���</option>';
    for($i=0;$i<count($word);$i++){
	if($dels[$i]=='@�L�R��#'){
	if($ns_val[$i]!='No'){
       echo '<option value="login_bodys.php?ppiinnss=179&check_data='.$http[$i].'">'.$word[$i].'</option>';
     }else{
	 echo '<option value="login_bodys.php?ppiinnss=179&check_data='.$http[$i].'">'.$word[$i].'&ne;������</option>';
	 }//���p������NO �N�O�Ƨ�  ����NO�N�O ����
	 }
	 if($dels[$i]!='@�w�R���L�k���#' && $dels[$i]=='@�R�������#' ){
		 echo '<option value="login_bodys.php?ppiinnss=179&check_data='.$http[$i].'">'.$word[$i].'&ne;�R����</option>';
		}//end
		}//end for
echo'</select></div>
</td>
    </tr>
  </table></form>';
}//end �s��峹 ���




function change_fun_180($asdss_num,$pi,$title='�W��',$peo='�H��',$num='�s��',$ups='�^�t��',$startdate='�o����',$startend='�̫�s��'){
if($pi!='[���A]@��Ƥw�R��#'){

if($pi=='[���A]@��ƧR����#'){
$say_pi='
      <form name="form" method="post" action="rs_pass_all.php"><td ><div align="center"><input type="submit" name="Submit1" value="�٭�"><input type="hidden" name="kings" value="184ohmygod"><input type="hidden" name="del_val" value="'.$num.'"></div></td></form>';
}else{
$say_pi='    <form name="form4" method="post" action="login_bodys.php?ppiinnss=178"><td nowrap><input type="submit" name="Submit102" value="�s��"><input name="piss2" type="hidden" value="'.$num.'"></td></form>
    <form name="form4" method="post" action="rs_pass_all.php"><input type="hidden" name="kings" value="184del"><input type="hidden" name="poioq" value="'.$num.'"><td nowrap><input type="submit" name="Submit7" value="�R��"></td></form>
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

}//end �s��峹

}


function change_fun_181($asdss_num,$pi,$title='�W��',$peo='�H��',$num='�s��',$ups='�^�t��',$startdate='�o����',$startend='�̫�s��'){
global $check_data;
if($pi!='[���A]@��Ƥw�R��#'){

if($pi=='[���A]@��ƧR����#'){
$say_pi='<td nowrap><div align="center">�R����</div></td>
      <form name="form" method="post" action="rs_pass_all.php"><td ><div align="center"><input type="submit" name="Submit1" value="�٭�"><input type="hidden" name="kings" value="184ohmygod_181"><input type="hidden" name="del_val" value="'.$num.'"></div></td></form>';
}else{
$say_pi='    <form name="form4" method="post" action="login_bodys.php?ppiinnss=168"><td nowrap><div align="center"><input type="submit" name="Submit102" value="�s��"><input name="piss2" type="hidden" value="'.$num.'"></div></td></form>
    <form name="form4" method="post" action="rs_pass_all.php"><div align="center"><input type="hidden" name="kings" value="184del_181"><input type="hidden" name="poioq" value="'.$num.'"><td nowrap><input type="submit" name="Submit7" value="�R��"></div></td></form>
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

}//end �s��峹

}



function add_chan_borad($c='�C��',$action=array('0','0','0','0'),$actionss='body',$p_insss='�X�ۭ��Ӭy����'){

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
}//�P�w�O�_���checked

if($action[1]=='1'){
$aaaa2='checked';
}//�P�w�O�_���checked

if($action[2]=='1'){
$aaaa3='checked';
}//�P�w�O�_���checked

if($action[3]=='1'){
$aaaa4='checked';
}
if($action[4]=='1'){
$aaaa5='checked';
}//�P�w�O�_���checked

if($action[5]=='1'){
$aaaa6='checked';
}else{
$aaaa66='disabled';
}//�P�w�O�_���checked

if($action[6]=='1'){
$aaaa7='checked';
}//�P�w�O�_���checked

if($action[7]=='1'){
$aaaa8='checked';
}
if($action[8]=='1'){
$aaaa9='checked';
}//�P�w�O�_���checked


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
            <td height="26" colspan="2" nowrap>---------�d����---------</td>
          </tr>
      <tr>
      <td nowrap>
	  <input type="checkbox" name="cs_array1" value="1" '.$aaaa1.'>
      �}��d����
	  </td>
     <td nowrap><input type="checkbox" name="cs_array2" value="1" '.$aaaa2.'>
     �}��d��
	 </td><td nowrap><input type="checkbox" name="cs_array3" value="1" '.$aaaa3.'>
     ���}�d�����e</td>
      </tr>
		  
          <tr>
       <td nowrap><input type="checkbox" name="cs_array4" value="1" '.$aaaa4.'>
      �}��y�k</td>
            <td nowrap><input type="checkbox" name="cs_array5" value="1" '.$aaaa5.'>
      �}��y�k���U</td>
	              <td nowrap><input type="checkbox" name="cs_array6" value="1"  '.$aaaa6.'  onChange="onch()">
           ����K�X <input name="cs_array666" type="text" size="5" maxlength="4" style="font-size:12px"  '.$aaaa66.'  value="'.$action[9].'"></td>
          </tr>
		  
		  
	    <td nowrap><input type="checkbox" name="cs_array7" value="1" '.$aaaa7.'>
      �ӤH���</td>
            <td nowrap><input type="checkbox" name="cs_array8" value="1" '.$aaaa8.'>
      �T��ż��</td>
	  <td nowrap><input type="checkbox" name="cs_array9" value="1" '.$aaaa9.'>
      ���ҽX[��ĳ]</td>
          </tr> 
        </table>
		<br><br>
<div class="borad__div" style="height:120px;width: 320px;background-color:#ffcc00">
<table border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td nowrap><a href="#">[�r��]</a> <a href="#">[�s��]</a> <a href="#">[����]</a> <a href="#">[�Ϥ�]</a></td>
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
    <td colspan="2" class="borad__css_boy_title"> ��k��&nbsp;&nbsp;�p��_���d��</td>
  </tr>
  <tr>
    <td class="borad__css_boy_bg2"><img src="images/img1.gif" width="50" height="50"></td>
    <td class="borad__css_boy">���p�O�Өk���d��...</td>
  </tr>
  <tr>
    <td colspan="2" class="borad__css_boy_date">���: 2006/01/01 00:00</td>
  </tr>
</table>
</div>

<br>
<br>

<div class="borad__css">
<table  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="2" class="borad__css_girl_title"> ��k��&nbsp;&nbsp;�p�Z_���d��</td>
  </tr>
  <tr>
    <td class="borad__css_girl_bg2"><img src="images/img7.gif"></td>
    <td class="borad__css_girl">���p�O�Ӥk���d��...</td>
  </tr>
  <tr>
    <td colspan="2" class="borad__css_girl_date">���: 2006/01/01 00:00</td>
  </tr>
</table>
</div>
        <br>
		        <table border="0" cellspacing="3" cellpadding="3">
          <tr>
            <td nowrap>---------�Q�װ�---------</td>
          </tr>
		  <tr><td>
		  
<table border="0" cellspacing="3" cellpadding="3"><tr><td class="thisword__css">
<table border="0" cellspacing="1" cellpadding="1">
        <tr>
          <td align="left"><div align="right" style="font-size:10px">ip:127.0.0.1</div>�^�Ъ�:&nbsp;�p�Z</td>
        </tr>
        <tr>
          <td><textarea  cols="36" rows="4" wrap="VIRTUAL" readonly="true">���e</textarea></td>
        </tr>
        <tr>
          <td>���</td>
        </tr>
      </table></td></tr></table></td></tr>
          <tr>
            <td nowrap>
          <input type="button"  value="����" style="font-size:12px" onClick="b_1()">
          <input type="button"  value="�r��" style="font-size:12px" onClick="a_1()">
          <input type="button"  value="�W�s��" style="font-size:12px" onClick="link_1()">
          <input type="button"  value="�Ϥ�" style="font-size:12px" onClick="img_1()">
          <input type="button"  value="�v��" style="font-size:12px" onClick="mtv_1()">
          <input type="button"  value="Flash" style="font-size:12px" onClick="swf_1()">
          <input type="button"  value="����" style="font-size:12px" onClick="music_1()">
    - '.$c.' -> <input type="text" name="color__name" style="font-size:12px" size="7" maxlength="7" ></td>
          </tr>
          <tr>
            <td height="291" nowrap><textarea name="bodys" cols="70" rows="18" wrap="VIRTUAL">'.$actionss.'</textarea></td>
          </tr>
          <tr>
            <td>
              <div align="center"><br><br><br>
                <input type="submit" name="Submit8" value="�e�X">
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
global $num__;//��ܦh�֯d��
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
}//�P�w�X���Ʀr

if($arrays_value__action[($maths-100)][2]==1){
if($arrays_value__action[($maths-100)][7]==1){
$_open_bodys="���}";
}else{
$_open_bodys="�����}�ʺ�";
}
}else{
if($arrays_value__action[($maths-100)][7]==1){
$_open_bodys="�����}���e";
}else{
$_open_bodys="�����}";
}
}//�O�_�O���} �d�����e


if($arrays_value__action[($maths-100)][3]==1){
$_open_bodys2="�}��";
}else{
$_open_bodys2="����";
}//�O�_�O�}�� �y�k 
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
<td height="50" align="center">���A&nbsp;/&nbsp;<font style="color:#0066FF">'.$_open_bodys.'</font>&nbsp;&nbsp;�y�k&nbsp;/&nbsp;<font style="color:#0066FF">'.$_open_bodys2.'</font>&nbsp;&nbsp;<br><br>�d�� '.$add_num_pe.' / 1200 ��</td>
</tr>
<tr>
<td height="500" valign="top"><div align="center">
<br>
';        
          $stop_nums=0;//��show�X�X�����
		  $num__s=$num__;//��continue�X���@�@�]�N�O���L�X��
		  for($i=count($array_borads__num);$i>-1;$i--){
		  if($maths==$array_borads__num[$i] && $array_borads__num_pass!='#�d���w�R��'){
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
		  if($array_borads__boy[$i]=='�k'){
		  $boy___shows='��k��';
		  $boy___class='borad__css_boy';
		  $boy___class_title='borad__css_boy_title';
		  $boy___class_bg2='borad__css_boy_bg2';
		  $boy___class_date='borad__css_boy_date';
		  }else{
		  $boy___shows='��k��';
		  $boy___class='borad__css_girl';
		  $boy___class_title='borad__css_girl_title';
		  $boy___class_bg2='borad__css_girl_bg2';
		  $boy___class_date='borad__css_girl_date';
		  }
		  
		  
if($arrays_value__action[($array_borads__num[$i]-100)][3]==1){
	  $array_borads__body[$i]=str_replace('[a]http://','<a target="_blank" href=http://',$array_borads__body[$i]);
	  $array_borads__body[$i]=str_replace('[/a]','  >-�s��-</a>',$array_borads__body[$i]);
}
	echo '    <table  border="1" cellpadding="0" cellspacing="0">
     
	  <tr>
        <td class="borad__css">';
		 echo '<table border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td colspan="2" class="'.$boy___class_title.'">'.$boy___shows.'&nbsp;&nbsp;'.$array_borads__name[$i].'_���d��<br>
	 </td>
      </tr>
      </tr>
    <tr>
      <td  valign="top" align="center" class="'.$boy___class_bg2.'">'.$img__bodys.'<br><br>&nbsp;<a href="login_bodys.php?ppiinnss=293&borad__lens=l310&check_se='.$maths.'&val_i='.$array_borads__num_pass[$i].'">[�ק�]</a><br>&nbsp;<a href="del_boradorthisword.php?this_val='.$array_borads__num_pass[$i].'&del___val=912" onClick="return confirm('."'".'�z�T�w�n�R�����d��?'."'".')" target="_self">[�R��]</a></td>
      <td  class="'.$boy___class.'">';
	    echo '<pre><font style="color:'.$array_borads__color[$i].'">'.$array_borads__body[$i].'</font></pre></td>';
echo '</tr>
    <tr>
      <td align="right" colspan="2" class="'.$boy___class_date.'">��� :'.$array_borads__date[$i].'&nbsp;</td>
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
<td height="30"><div align="right">��&nbsp;&nbsp;';
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
echo '��&nbsp;&nbsp;</div>';
}
//00000000
les___pow($array_borads__num,$stop_num,$maths);
//00000000
echo '</td>
    </tr>
  </table></div>';
}//�d���� back




function borad_show_225($body__peo,$body__start,$body__title,$body__body,$body__end,$num___adds_peo){
global $check_se;
echo '<br><div  align="left">';
echo '<font style="font-size:12px;color:#990000">���D: </font><a href="login_bodys.php?ppiinnss=179&check_data='.$check_se.'&val_=show">'.$body__title.'</a> &nbsp;&nbsp;&nbsp;<font style="font-size:12px;color:#990000">�o����: </font>'.$body__start.' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font style="font-size:12px;color:#990000">�H�� : </font>'.$body__peo.'&nbsp;&nbsp;&nbsp;<font style="font-size:12px;color:#990000">�^�� : </font>'.$num___adds_peo;
echo '<hr width="63%" size="1"></div>';
echo '<div class="broad_str_text"><pre>'.$body__body.'</pre></div>';
echo '<div align="right"><font style="font-size:12px;color:#990000">�̫�s�� : </font>'.$body__end.'</div';

}

function chan_fun_293($a,$b,$porss,$tit,$bodyss,$c,$dels,$pors){

include('helps.htm');
echo ' <form name="mykings" method="post" action="rs_pass_all.php">
    <table width="294" height="417" border="0" cellpadding="3" cellspacing="2">
      	  <tr>
    <td align="right">
        <input type="submit" value="�ק�" style="font-size:12px">
    </td>
  </tr>
	  <tr>
        <td> <div align="left">����-
            <select name="por">';
for($i=0;$i<count($b);$i++){
if($dels[$i]!='@�w�R���L�k���#'){

if($porss==$b[$i]){

if($dels[$i]=='@�R�������#'){
echo '<option value="'.$b[$i].'"selected >'.$a[$i].' &ne; �R����</option>';
}else{
echo '<option value="'.$b[$i].'"selected >'.$a[$i].'</option>';
}

}else{

if($dels[$i]=='@�R�������#'){
echo '<option value="'.$b[$i].'">'.$a[$i].' &ne; �R����</option>';
}else{
echo '<option value="'.$b[$i].'">'.$a[$i].'</option>';

}

}//�O�_����selected


}//�O�_�w�R��
}//for
echo' </select>
        </div></td>
      </tr>
  <td> <div align="left">�峹���D-
            <input name="titles" type="text" style="font-size:12px" size="30" maxlength="20" value="'.$tit.'">
    </div></td>
  </tr>
  <tr>
    <td height="17"> <div align="left">���U-
          <input type="button"  value="����" style="font-size:12px" onClick="b_1()">
          <input type="button"  value="�r��" style="font-size:12px" onClick="a_1()">
          <input type="button"  value="�W�s��" style="font-size:12px" onClick="link_1()">
          <input type="button"  value="�Ϥ�" style="font-size:12px" onClick="img_1()">
          <input type="button"  value="�v��" style="font-size:12px" onClick="mtv_1()">
          <input type="button"  value="Flash" style="font-size:12px" onClick="swf_1()">
          <input type="button"  value="����" style="font-size:12px" onClick="music_1()">
    - '.$c.' -> <input type="text" name="color__name" style="font-size:12px" size="7" maxlength="7" ></div></td>
  </tr>
  <tr>
    <td><textarea name="bodys" cols="80" rows="20" wrap="VIRTUAL">'.$bodyss.'</textarea></td>
  </tr>
    </table>
<input type="hidden" name="kings" value="184chan_181">
<input type="hidden" name="pins" value="'.$pors.'">
  </form>';
}//end �s�W�峹


function chan_fun_292($a,$b,$porss,$tit,$bodyss,$c,$dels,$pors){
include('helps.htm');
echo ' <form name="mykings" method="post" action="rs_pass_all.php">
    <table width="294" height="417" border="0" cellpadding="3" cellspacing="2">
      <tr>
        <td> <div align="left">����-
            <select name="por">';
for($i=0;$i<count($b);$i++){
if($dels[$i]!='@�w�R���L�k���#'){

if($porss==$b[$i]){

if($dels[$i]=='@�R�������#'){
echo '<option value="'.$b[$i].'"selected >'.$a[$i].' &ne; �R����</option>';
}else{
echo '<option value="'.$b[$i].'"selected >'.$a[$i].'</option>';
}

}else{

if($dels[$i]=='@�R�������#'){
echo '<option value="'.$b[$i].'">'.$a[$i].' &ne; �R����</option>';
}else{
echo '<option value="'.$b[$i].'">'.$a[$i].'</option>';

}

}//�O�_����selected


}//�O�_�w�R��
}//for
echo' </select>
        </div></td>
      </tr>
  <td> <div align="left">�峹���D-
            <input name="titles" type="text" style="font-size:12px" size="30" maxlength="20" value="'.$tit.'">
    </div></td>
  </tr>
  <tr>
    <td height="17"> <div align="left">���U-
          <input type="button"  value="����" style="font-size:12px" onClick="b_1()">
          <input type="button"  value="�r��" style="font-size:12px" onClick="a_1()">
          <input type="button"  value="�W�s��" style="font-size:12px" onClick="link_1()">
          <input type="button"  value="�Ϥ�" style="font-size:12px" onClick="img_1()">
          <input type="button"  value="�v��" style="font-size:12px" onClick="mtv_1()">
          <input type="button"  value="Flash" style="font-size:12px" onClick="swf_1()">
          <input type="button"  value="����" style="font-size:12px" onClick="music_1()">
    - '.$c.' -> <input type="text" name="color__name" style="font-size:12px" size="7" maxlength="7" ></div></td>
  </tr>
  <tr>
    <td><textarea name="bodys" cols="80" rows="20" wrap="VIRTUAL">'.$bodyss.'</textarea></td>
  </tr>
  <tr>
    <td height="80"><div align="center">
        <input type="submit" name="Submit42" value="�e�X">
    </div></td>
  </tr>
    </table>
<input type="hidden" name="kings" value="184chan">
<input type="hidden" name="pins" value="'.$pors.'">
  </form>';
}//end �s�W�峹

function change__passwords(){
echo '<form name="form4" method="post" action="rs_pass_all.php"><table width="195" border="1" cellspacing="0" cellpadding="0">
    <tr>
      <td height="30" bgcolor="#FFCC00">&nbsp;&nbsp;���K�X</td>
    </tr>
    <tr>
      <td height="55">&nbsp;&nbsp;��J�±K�X&nbsp;
        <input name="passs" type="password" size="12" maxlength="12"></td>
    </tr>
    <tr>
      <td height="30" align="right">
        <input type="submit" value="���" style="font-size:12px">&nbsp;&nbsp;
       </td>
    </tr>
  </table><input type="hidden" name="kings" value="chan446"></form>';
}





function read_emails_win(){
include('alls/free.php');
echo '<table width="560" height="59" border="1" cellpadding="0" cellspacing="0">
    <tr bgcolor="#FFCC00">
      <td height="37" colspan="3">&nbsp;&nbsp;�t�ΫH��</td>
    </tr>
    <tr>
      <th width="25%">�H�H�H</th>
      <th width="60%">�D�D</th>
      <th width="15%">�R��</th>
    </tr>';
for($i=0;$i<count($later__is_free_pin);$i++){
if($later__is_free_true[$i]=='1'){
echo ' <tr>
      <th  style="color:#990000">[&nbsp;'.$later__is_free_name[$i].'&nbsp;]</th>
      <td >&nbsp;&nbsp;<a href="login_bodys.php?ppiinnss=53318_chan&pin_table='.$later__is_free_pin[$i].'">'.$later__is_free_title[$i].'</a></td>
      <form  method="post" action="rs_pass_all.php"><td  align="center"><input type="hidden" name="kings" value="del__9873"><input type="hidden" name="pins_this" value="'.$later__is_free_pin[$i].'"><input type="submit" value="�R��"></td></form>
    </tr>';
}//if �O�_�w�˹L �R��
}	
	
echo '</table>';
}


function read_emails_me(){
include('alls/add_mycool.php');
for($i=(count($cool__99num)-1);$i>-1;$i--){
if($cool__99true[$i]=='1'){
$cool__99true___write='<b style="color:#990000">���\Ū</b>';
}else{
$cool__99true___write='�w�\Ū';
}
if($cool__99num[$i]!='@�w�R��#'){
if($cool__99boy[$i]=='�k'){
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
      <td  align="center"><input value="�R��" type="submit"><input value="'.$cool__99num[$i].'" name="vals__pin" type="hidden"><input value="del__98mys" name="kings" type="hidden"></td>
    </tr>
	</form>
  ';
}
}//end for
echo '</table>';
}


function win_center($trues_ch='on',$name_blog='blog�W��',$localhosts='127001'){

echo '<form method="post" action="rs_pass_all.php"><table width="350"  border="1" cellpadding="2" cellspacing="0"><tr bgcolor="#FFCC00"><td height="30" colspan="2">&nbsp;&nbsp;Blog����</td></tr>
    <tr>
<td colspan="2"   align="right">
<input type="submit" style="font-size:12px" value="���">
</td>
</tr>	
	<tr>
      <td >&nbsp;&nbsp;Blog�}��</td>
      <td >&nbsp;&nbsp;';
function trues($checkeds){
if($checkeds=='on'){
echo '<input name="trues__1" type="radio" value="on" checked>&nbsp;�}&nbsp;<input name="trues__1" type="radio" value="off">&nbsp;��';
}else{
echo '<input name="trues__1" type="radio" value="on" >&nbsp;�}&nbsp;<input name="trues__1" type="radio" value="off" checked>&nbsp;��';

}
}
	trues($trues_ch);  
echo '</td>
    </tr>
    <tr>
      <td >&nbsp;&nbsp;Blog�W��</td>
      <td >&nbsp;&nbsp;<input type="text" name="blog_name__1" value="'.$name_blog.'" maxlength="30"></td>
    </tr>
    <tr>
      <td >&nbsp;&nbsp;�n�JHost</td>
      <td >&nbsp;&nbsp;';
	  if($localhosts=='127001'){
	  echo '<input name="local__1" type="radio" value="127001" checked>&nbsp;�����q��&nbsp;<input name="local__1" type="radio" value="all">&nbsp;�Ҧ��q��</td>';
      }else{
	  echo '<input name="local__1" type="radio" value="127001">&nbsp;�����q��&nbsp;<input name="local__1" type="radio" value="all"  checked>&nbsp;�Ҧ��q��</td>';

	  }
echo'</tr>
	 <tr>
      <td>&nbsp;&nbsp;�T��IP</td>
      <td  align="center"><br><div align="left" class="back_div_text"><br>';
//�g�Q�T�IP
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













function my_center($name__y='�p�Z',$boy__y='0',$bir_1111='2004',$bir_11='1',$bir_29='1',$star_y='����',$o_y='AB',$merry_y='���B',$int_y='����',$dri_y='�ڷQ',$myimg_y='�۩�',$img_y='�Ϥ�',$love_y='�߷R',$hate_y='�Q��',$loves_y='���w����',$hates_y='�Q������',$pho_y='�u�W�p���覡'){

echo '<form method="post" action="rs_pass_all.php"><table width="350" height="53" border="1" cellpadding="2" cellspacing="0"><tr bgcolor="#FFCC00"><td height="35" colspan="2">&nbsp;&nbsp;�ӤH���</td></tr>
   <tr>
<td colspan="2"align="right" >
<input type="submit" style="font-size:12px" value="���">
</td>
</tr>
    <tr>
      <td width="30%">&nbsp;&nbsp;��&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;��</td>
      <td height="28">&nbsp;&nbsp;<input type="text" name="name___443" value="'.$name__y.'"  maxlength="40" style="font-size:12px" size="12"></td>
    </tr>
    <tr>
      <td width="30%">&nbsp;&nbsp;��&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;�O</td>
      <td height="28">&nbsp;&nbsp;';
	  
	  function boys($checked){
	  if($checked==1){
	  echo '<input name="boy__443" type="radio" value="1" checked>&nbsp;�k&nbsp;<input name="boy__443" type="radio" value="0">&nbsp;�k';
	  }else{//if
	  echo '<input name="boy__443" type="radio" value="1">&nbsp;�k&nbsp;<input name="boy__443" type="radio" value="0" checked>&nbsp;�k';
     }
	  }//end fun
	  
	  boys($boy__y);
echo '</td>
    </tr>
    <tr>
      <td width="30%">&nbsp;&nbsp;��&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;��</td>
      <td height="28">&nbsp;&nbsp;';
  function birsday($name,$selecteds,$vals){
  echo '&nbsp;<select name="'.$name.'">';
  if($vals=='��'){
  for($i=1;$i<13;$i++){
  if($i==$selecteds){
  echo '<option value="'.$i.'" selected>'.$i.'</option>';
  }else{
   echo '<option value="'.$i.'">'.$i.'</option>';
  }
  }//for
  }
  if($vals=='��'){
    for($i=1;$i<32;$i++){
  if($i==$selecteds){
  echo '<option value="'.$i.'" selected>'.$i.'</option>';
  }else{
   echo '<option value="'.$i.'">'.$i.'</option>';
  }
  }//for
  } 
    if($vals=='�~'){
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
   echo '�褸';
   birsday('name___443_2000',$bir_1111,'�~');
   birsday('name___443_12',$bir_11,'��');
   echo '��';
   birsday('name___443_31',$bir_29,'��'); 
   echo '��';  
echo '</td>
    </tr>
    <tr>
      <td width="30%">&nbsp;&nbsp;¾&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;�~</td>
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
$aa=array('�ݷ~','�ǥ�','�A�ȷ~','�ۥѷ~','SOHO��','�k�߬�����~','�j���Ǽ�','�s�y�~','��T�~','�q�l�~','���a����','�x�H','���','�|�p�v','�u�{�v','�Ш|/��s','�h��','��L');
star_arrays($aa,$aa,$star_y,'star___443');
echo '</td>
    </tr>
    <tr>
      <td width="30%">&nbsp;&nbsp;��&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;��</td>
      <td height="28">&nbsp;&nbsp;';
$aa=array('O','B','A','AB');
star_arrays($aa,$aa,$o_y,'o___443');
echo '��';
echo '</td>
    </tr>			
    <tr>
      <td width="30%">&nbsp;&nbsp;�B&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;��</td>
      <td height="28">&nbsp;&nbsp;';
$aa=array('�w�B','���B');
star_arrays($aa,$aa,$merry_y,'merry___443');
	  echo '</td>
    </tr>
	    <tr>
      <td width="30%">&nbsp;&nbsp;��&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;��</td>
      <td height="28">&nbsp;&nbsp;<input type="text" name="myimg___443" value="'.$myimg_y.'"  maxlength="250" style="font-size:12px" size="35"></td>
    </tr>
    <tr>
      <td width="30%">&nbsp;&nbsp;��&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;��</td>
      <td height="28">&nbsp;&nbsp;<input type="text" name="img___443" value="'.$img_y.'"  maxlength="250" style="font-size:12px" size="35"></td>
    </tr>	
    <tr>
      <td width="30%">&nbsp;&nbsp;��&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;��</td>
      <td height="28">&nbsp;&nbsp;<input type="text" name="int___443" value="'.$int_y.'"  maxlength="40" style="font-size:12px"></td>
    </tr>
    <tr>
      <td width="30%">&nbsp;&nbsp;��&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;�Q</td>
      <td height="28">&nbsp;&nbsp;<input type="text" name="dri___443" value="'.$dri_y.'"  maxlength="40" style="font-size:12px"></td>
    </tr>					
    <tr>
      <td width="30%">&nbsp;&nbsp;��&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;�R</td>
      <td height="28">&nbsp;&nbsp;<input type="text" name="love___443" value="'.$love_y.'"  maxlength="40" style="font-size:12px"></td>
    </tr>
    <tr>
      <td width="30%">&nbsp;&nbsp;�Q&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;��</td>
      <td height="28">&nbsp;&nbsp;<input type="text" name="hate___443" value="'.$hate_y.'"  maxlength="40" style="font-size:12px"></td>
    </tr>			
    <tr>
      <td width="30%">&nbsp;&nbsp;�Y&nbsp;&nbsp;&nbsp;&nbsp;��&nbsp;&nbsp;&nbsp;&nbsp;�q</td>
      <td height="28">&nbsp;&nbsp;<input type="text" name="loves___443" value="'.$loves_y.'" maxlength="100" style="font-size:12px"></td>
    </tr>
    <tr>
      <td width="30%">&nbsp;&nbsp;�u&nbsp;&nbsp;�W&nbsp;&nbsp;�p&nbsp;&nbsp;��</td>
      <td height="28">&nbsp;&nbsp;<input type="text" name="hates___443" value="'.$hates_y.'" maxlength="250" style="font-size:12px"></td>
    </tr>						
    <tr>
      <td width="30%">&nbsp;&nbsp;²&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;��</td>
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
default:$loca="�z�i�H���}�P";
}
}
if($loca=="�z�i�H���}�P"){
$passwordss='';
}else{

for($i=0;$i<count($pass__array);$i++){
$passwordss=$passwordss.$pass__array[$i];
}
$passwordss="$Add".$passwordss;

}//if �L�Ĥ��� �Ҧp _ @ #
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
http=prompt("�s�����}","http://");
word=prompt("�W��","�s��");
target=prompt("Target\n-----1._blank  2._self","1");
if(target==1){
target="_self";
}else{
target="_target";
}
document.mykings.text__html.value+="\n"+"[a="+http+" target="+target+"]"+word+"[/a]";
}
function Gi_imgs222(){
http=prompt("�Ϥ����}","http://");
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
}//�P�w�O�_���checked

if($action[1]=='1'){
$aaaa2='checked';
}//�P�w�O�_���checked

if($action[2]=='1'){
$aaaa3='checked';
}//�P�w�O�_���checked

if($action[3]=='1'){
$aaaa4='checked';
}
if($action[4]=='1'){
$aaaa5='checked';
}//�P�w�O�_���checked

if($action[5]=='1'){
$aaaa6='checked';
}else{
$aaaa66='disabled';
}//�P�w�O�_���checked

if($action[6]=='1'){
$aaaa7='checked';
}//�P�w�O�_���checked

if($action[7]=='1'){
$aaaa8='checked';
}
if($action[8]=='1'){
$aaaa9='checked';
}

echo '<form  name="mykings" method="post" action="rs_pass_all.php">

<div align="right"><input  type="submit" value="��s" style="font-size:12px">&nbsp;&nbsp;</div>';
echo ' <div align="left" style="padding: 10px;">
<table width="300" border="0" cellspacing="2" cellpadding="2">
          <tr>
            <td  colspan="2" nowrap>---------�d����---------</td>
          </tr>
      <tr>
      <td nowrap>
	  <input type="checkbox" name="cs_array1" value="1" '.$aaaa1.'>
      �}��d����
	  </td>
     <td nowrap><input type="checkbox" name="cs_array2" value="1" '.$aaaa2.'>
     �}��d��
	 </td><td nowrap><input type="checkbox" name="cs_array3" value="1" '.$aaaa3.'>
     ���}�d�����e</td>
      </tr>
		  
          <tr>
       <td nowrap><input type="checkbox" name="cs_array4" value="1" '.$aaaa4.'>
      �}��y�k</td>
            <td nowrap><input type="checkbox" name="cs_array5" value="1" '.$aaaa5.'>
      �}��y�k���U</td>
	              <td nowrap><input type="checkbox" name="cs_array6" value="1"  '.$aaaa6.'  onChange="onch()">
           ����K�X <input name="cs_array666" type="text" size="5" maxlength="4" style="font-size:12px"  '.$aaaa66.'  value="'.$action[9].'"></td>
          </tr>
		  
		  
	    <td nowrap><input type="checkbox" name="cs_array7" value="1" '.$aaaa7.'>
      �d��������</td>
            <td nowrap><input type="checkbox" name="cs_array8" value="1" '.$aaaa8.'>
      ���}�ʺ�</td>
            <td nowrap><input type="checkbox" name="cs_array9" value="1" '.$aaaa9.'>
      ���}ip��}</td>          </tr> 
        </table>';



echo '<hr height="1">';
echo '<div class="borad__css">
		<table border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td colspan="2" class="borad__css_boy_title"> ��k��&nbsp;&nbsp;�p�Z_���d��</td>
    </tr>
    <tr>
      <td class="borad__css_boy_bg2"><img src="images/img7.gif"></td>
      <td class="borad__css_boy">���p�O�Өk���d��... </td>
    </tr>
    <tr>
      <td colspan="2" class="borad__css_boy_date">���: 2006/01/01 00:00</td>
    </tr>
  </table>
  </div>
  '.$br;  		
echo '<div class="borad__css">  
  <table border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td colspan="2" class="borad__css_girl_title"> ��k��&nbsp;&nbsp;�p��_���d��</td>
    </tr>
    <tr>
      <td class="borad__css_girl_bg2"><img src="images/img1.gif" width="50" height="50"></td>
      <td class="borad__css_girl">���p�O�Ӥk���d��...</td>
    </tr>
    <tr>
      <td colspan="2" class="borad__css_girl_date">���: 2006/01/01 00:00</td>
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
      <td nowrap><a href="http://" onClick="Gi_https222();">[�s�u]</a><a href="http://" onClick="Gi_imgs222();">[�Ϥ�]</a></td>
    </tr>
	<tr>
      <td nowrap><textarea name="text__html" cols="75" rows="10" wrap="VIRTUAL">'.$say__text_word[$targets].'</textarea></td>
    </tr>
  </table>';  
echo $br.'<table  width="200" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td nowrap>�W��&nbsp;</td>
      <td nowrap><input name="name__str1" type="text" size="10" value="'.$this_borad_p1_name[$targets].'" maxlength="30"></td>
      <td nowrap>-<input name="name__str2" type="text" size="10" value="'.$this_borad_p2_name[$targets].'" maxlength="30"></td>
      <td nowrap>-<input name="name__str3" type="text" size="10" value="'.$this_borad_p3_name[$targets].'" maxlength="30"></td>
      <td nowrap>-<input name="name__str4" type="text" size="10" value="'.$this_borad_p4_name[$targets].'" maxlength="30"></td>
      <td nowrap>-<input name="name__str5" type="text" size="10" value="'.$this_borad_p5_name[$targets].'" maxlength="30"></td>
      <td nowrap>-<input name="name__str6" type="text" size="10" value="'.$this_borad_p6_name[$targets].'" maxlength="30"></td>
    </tr>
    <tr>
      <td nowrap>���}&nbsp;</td>
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
        <input type="submit" style="font-size:12px" value="��s">
    </td>
  </tr>
  <tr>
    <td height="17"> <div align="left">���U-
          <input type="button"  value="����" style="font-size:12px" onClick="b_1()">
          <input type="button"  value="�r��" style="font-size:12px" onClick="a_1()">
          <input type="button"  value="�W�s��" style="font-size:12px" onClick="link_1()">
          <input type="button"  value="�Ϥ�" style="font-size:12px" onClick="img_1()">
          <input type="button"  value="�v��" style="font-size:12px" onClick="mtv_1()">
          <input type="button"  value="Flash" style="font-size:12px" onClick="swf_1()">
          <input type="button"  value="����" style="font-size:12px" onClick="music_1()">
    - '.$color_bb.' -> <input type="text" name="color__name" style="font-size:12px" size="7" maxlength="7" ></div></td>
  </tr>
  <tr>
    <td><textarea name="bodys" cols="80" rows="20" wrap="VIRTUAL">'.$arrays_value__actions[$targets].'</textarea></td>
  </tr>
    </table>
<input type="hidden" name="kings" value="chan_294">
<input type="hidden" name="pins" value="'.$targets.'">
  </form>';
}//end �s�W�峹

function div_tops(){
global $ppiinnss;

if($ppiinnss==''){
$king__words=array(1);
}//����
if($ppiinnss=='121'){
$king__words=array(3,0);
}//�s�W����
if($ppiinnss=='148'){
$king__words=array(3,1);
}//�s�����
if($ppiinnss=='184'){
$king__words=array(3,2);
}//�s�W�峹
if($ppiinnss=='179'){
$king__words=array(3,3);
}//�s��峹
if($ppiinnss=='312'){
$king__words=array(4,4);
}//�˪��s�W
if($ppiinnss=='315'){
$king__words=array(4,5);
}//�˪��s��
if($ppiinnss=='319'){
$king__words=array(4,6);
}//�˪��M��

if($ppiinnss=='424'){
$king__words=array(5,7);
}//�����
if($ppiinnss=='434'){
$king__words=array(5,8);
}//�ӤH���
if($ppiinnss=='335'){
$king__words=array(5,9);
}//���K�X

if($ppiinnss=='535'){
$king__words=array(6,10);
}//�ӤH�H�c
if($ppiinnss=='531'){
$king__words=array(6,11);
}//�t�ΫH�c
if($ppiinnss=='219'){
global $targets;
include('alls/add_121_a.php');
$ho_body=$arrays_value__2[$targets-100];
$king__words=array(2,12);
}//�Q�װ�

if($ppiinnss=='230'){
global $targets;
include('alls/add_121_a.php');
$ho_body=$arrays_value__2[$targets];
$king__words=array(2,12,1);
}//�Q�װ� �d�����s��

if($ppiinnss=='327'){
global $targets;
include('alls/add_121_a.php');
$ho_body=$arrays_value__2[$targets];
$king__words=array(2,12,0);
}//�Q�װ� �Q�ת�

if($ppiinnss=='328'){
global $targets;
include('alls/add_121_a.php');
$ho_body=$arrays_value__2[$targets];
$king__words=array(2,12,2);
}//�Q�װ� ���� 


if($ppiinnss=='293'){
global $check_se;
include('alls/add_121_a.php');
$ho_body=$arrays_value__2[$check_se-100];
$king__words=array(2,13);
}//�Q�װ� �C��


if($ppiinnss=='535see'){

$king__words=array(6,10,3);
}//�ݫH��
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
$this__array_to_1=array('�t�ΰT��','�Y�ɳ�','�Q�װ�','�ڪ��峹','Blog�˪�','�t�κ޲z','�ڪ��H�c','�s�譺��');
$this__array_to_2=array('�峹����[�s�W]','�峹����[����]','�ڪ��峹[�s�W]','�ڪ��峹[����]','�x�s�˪�[�s�W]','�x�s�˪�[�s��]','�x�s�˪�[�M��]','Blog����[����]','�ӤH���[���]','Blog�K�X[���]','�ӤH�H�c[��D]','�t�ΫH�c[�T��]',$ho_body.'&nbsp;[�s��]',$ho_body);
$this__array_to_3=array('�Q�ת�','�d����','����','�\Ū�H��','��J�s�K�X');
$shows___top->show_kings($this__array_to_1,$this__array_to_2,$this__array_to_3);
$shows___top->show_king($king__words);
}
?>