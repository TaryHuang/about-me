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
<div align="right"><br><a href="index.php?comes=myQQ#by" style="color:#000000">[&nbsp;�����&nbsp;]</a>&nbsp;</div>
	  </div>';

}//end ����� �ӤH���


function myhourse_2(){
include("alls/add_121_a.php");
include("alls/add_184_all.php");
include("alls/add_184_alls.php");
global $maths;
echo '<table  height="75" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td class="blog_table__up">&nbsp;&nbsp;���</td>
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
}//for ��
for($i=0;$i<count($arrays_value__2);$i++){
if($arrays_value__end[$i]=='@�L�R��#' && $arrays_value__1[$i]!='No'){
$num++;
if($maths==$arrays_value__0[$i]){
echo '&nbsp;&nbsp;<b style="color:#666666">'.$arrays_value__2[$i].'</b><br>';
}else{
echo '&nbsp;&nbsp;<a href="index.php?comes=myborad&maths='.$arrays_value__0[$i].'#by" target="_self">'.$arrays_value__2[$i].'</a><br>';
}
if($maths!=''){
for($j=0;$j<count($por___184);$j++){
if($maths==$por___184[$j] && $maths==$arrays_value__0[$i] && $end_ture__184[$j]=='[���A]@��ܸ��#'){
echo '<li>&nbsp;&nbsp;<a href="add_thisword.php?maths='.$arrays_value__0[$i].'&hot='.$num___184[$j].'#by" target="_self">'.$title___184[$j].'</a></li><br>';
}//if
}//for
}//--------------if�P�w�O�_�O�nshow�X ��椤���峹

}//if
}//for	  
echo '
</td>
    </tr>
    <tr>
      <td class="blog_table__down">&nbsp;</td>
    </tr>
  </table>';
}//end �����


function myhourse_3(){
include("alls/add_121_a.php");
include("alls/add_184_all.php");
include("alls/add_184_alls.php");
echo '<table  height="75" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td class="blog_table__up">&nbsp;&nbsp;�̷s�峹</td>
    </tr>
    <tr>
      <td class="blog_table__center">';
	 for($i=0;$i<count($date_add__184);$i++){
	 for($j=$i+1;$j<count($date_add__184);$j++){
	 if($date_add__184[$i]<$date_add__184[$j]){
	     $box_val=$date_add__184[$i];
		 $date_add__184[$i]=$date_add__184[$j];
		 $date_add__184[$j]=$box_val;//--�̫�s��ɶ�
		 
		 $box_val=$por___184[$i];
		 $por___184[$i]=$por___184[$j];
		 $por___184[$j]=$box_val;//--���I
		 
		 $box_val=$num___184[$i];
		 $num___184[$i]=$num___184[$j];
		 $num___184[$j]=$box_val;//--�l�I
		 
		 $box_val=$title___184[$i];
		 $title___184[$i]=$title___184[$j];
		 $title___184[$j]=$box_val;//--title		
		 
		 $box_val= $end_ture__184[$i];
		 $end_ture__184[$i]= $end_ture__184[$j];
		 $end_ture__184[$j]=$box_val;//--�O�_��ܸ��	

	 }//if
	 }//for
	 }//for ------------�̫�s�誺  �N����̤�
	 $nums_b=8;
	 for($i=count($end_ture__184)-1;$i>-1;$i--){
	 if($title___184[$i]!='' && $end_ture__184[$i]=='[���A]@��ܸ��#' && $arrays_value__end[($por___184[$i]-100)]=='@�L�R��#' && $arrays_value__1[($por___184[$i]-100)]!='No'){
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
}//end �̷s����

function myhourse_4(){
include("alls/add_num.php");
echo '<table border="0" cellspacing="0" cellpadding="0">
        <tr >
          <td class="blog_table__up">&nbsp;&nbsp;�H�����</td>
        </tr>
        <tr >
          <td class="blog_table__center">&nbsp;&nbsp;����H�� : &nbsp;'.$le___num_today.' �H<br>
          &nbsp;&nbsp;�Q��H�� : &nbsp;'.$le___num_terday.' �H<br>
          &nbsp;&nbsp;�ӹL�H�� : &nbsp;'.$le___alls.' �H </td>
        </tr>
        <tr>
          <td colspan="2" class="blog_table__down">&nbsp;</td>
        </tr>
      </table>';
}//end �H�����

function myhourse_5(){
echo '<table  height="75" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td height="30" bgcolor="#FFCC00"> ��������</td>
    </tr>
    <tr>
      <td height="33" bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
    <tr>
      <td bgcolor="#FFCC00">&nbsp;</td>
    </tr>
  </table>';
}//end ��������

function myhourse_pass(){
echo '        <form action="l_o_g_i_n.php" method="post">
          <font style="color:#FFCC33;">�K�X</font>
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
$no_thiswrite='&nbsp;����';
}
echo '<table width="100" border="0" cellspacing="5" cellpadding="1">
    <tr>
	  <td nowrap>[&nbsp;'.$arrays_value__2[$i].'&nbsp;]'.$no_thiswrite.'</td>
      <td nowrap><a href="index.php?comes=myborad&maths='.$arrays_value__0[$i].'#by">[�Q�ת�]</a></td>
      <td nowrap><a href="index.php?comes=borad&maths='.$arrays_value__0[$i].'#by">[�d����]</a></td>
      <td nowrap><a href="index.php?comes=allword&maths='.$arrays_value__0[$i].'#by">[�Ҧ��峹]</a></td>
	</tr>
  </table>';
  }
}//for
}//--------maths�O�_����
if($comes=='myQQ' && $maths==''){
echo '&nbsp;&nbsp;[&nbsp;�����&nbsp;]<br><br>
';
}
if($comes=='' && $maths==''){
echo '&nbsp;&nbsp;[&nbsp;����&nbsp;]<br><br>
';
}
if($comes=='getmore' && $maths==''){
echo '&nbsp;&nbsp;[&nbsp;�g�H����&nbsp;]<br><br>
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
          <td width="75%" height="17"><div align="left"><font style="font-size:12px;color:#990000">&nbsp;���D: </font>'.$body__title.' &nbsp;&nbsp;&nbsp;<font style="font-size:12px;color:#990000">�o����: </font>'.$body__start.'</div></td>
         <td width="25%"><font style="font-size:12px;color:#990000">�H�� : </font>'.$body__peo.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font style="font-size:12px;color:#990000">�^�� : </font>'.$v_nums.'</td>
        </tr>
		<tr>
		<td align="left"><hr size="1" width="98%"></td>
		</tr>
        <tr>
          <td colspan="2" class="thisword__text" >'.$body__body.'</td>
          </tr>
        <tr>
          <td colspan="2"><div align="right"><font style="font-size:12px;color:#990000">�̫�s�� : </font>'.$body__end.'</div></td>
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
          <td align="left"><br><b style="font-size:13px;color:#222222">'.$add__thisword__name[$i].'</b>_���d��'.($i+1000).'#</td>
        </tr>
        <tr>
          <td><textarea  wrap="VIRTUAL" readonly="true"  class="thisword__texts">'.$add__thisword__body[$i].'</textarea></td>
        </tr>
        <tr>
          <td>���:'.$add__thisword__date[$i].'</td>
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
    <th height="40" colspan="3" nowrap>�D�D</th>
    <th colspan="2" nowrap>���</th>
    </tr>
  <tr>
    <td width="54%" nowrap height="20"><div align="center">���D</div></td>
    <td width="10%" nowrap><div align="center">�H��</div></td>
    <td width="10%" nowrap><div align="center">�^��</div></td>
    <td width="13%" nowrap><div align="center">�o��ɶ�</div></td>
    <td width="13%" nowrap><div align="center">�̫�s��</div></td>
  </tr>';
  
  
for($i=0;$i<count($num___184);$i++){
if($por___184[$i]==$maths && $end_ture__184[$i]=='[���A]@��ܸ��#' ){
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
      <td colspan="2" ><div align="right"><a href="index.php?comes=getmore#by">[�g�H����]</a>&nbsp;</div></td>
    </tr>
    <tr align="left">
      <td width="30%" >��&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;��</td>
      <td >'.$name__444.'</td>
    </tr>
    <tr align="left">
      <td>��&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;�O</td>
      <td>';
	  if($boy__444=='1'){
	  echo '��k��';
	  }else{
	  echo '��k��';
	  }
	  
	  echo '</td>
    </tr>
    <tr align="left">
      <td>�X&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;��</td>
      <td>�褸 '.$bir__444_2000.' &nbsp;&nbsp;'.$bir__444_12.' �� '.$bir__444_31.' ��</td>
    </tr>
    <tr align="left">
      <td>¾&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;�~</td>
      <td>'.$star__444.'</td>
    </tr>
    <tr align="left">
      <td>��&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;��</td>
      <td>'.$o__444.'��</td>
    </tr>
    <tr align="left">
      <td>�B&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;��</td>
      <td>'.$merry__444.'</td>
    </tr>
    <tr align="left">
      <td>��&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;��</td>
      <td>'.$int__444.'</td>
    </tr>
    <tr align="left">
      <td>��&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;�Q</td>
      <td>'.$dri__444.'</td>
    </tr>
    <tr align="left">
      <td>��&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;�R</td>
      <td>'.$love__444.'</td>
    </tr>
    <tr align="left">
      <td>�Q&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;��</td>
      <td>'.$hate__444.'</td>
    </tr>
    <tr align="left">
      <td>�Y&nbsp;&nbsp;&nbsp;��&nbsp;&nbsp;&nbsp;�q</td>
      <td>'.$loves__444.'</td>
    </tr>
	    <tr align="left">
      <td>��&nbsp;&nbsp;�e&nbsp;&nbsp;��&nbsp;&nbsp;�A</td>
      <td>';
	 if($____login_time>=date('YmdHis') && $____login_ip!=''){
	 echo '<img src="images/my_login.gif">';
	 }else{
	 echo '<img src="images/my_login2.gif">';
	 }
	  echo '</td>
    </tr>
	    <tr align="left">
      <td>��&nbsp;&nbsp;��&nbsp;&nbsp;�n&nbsp;&nbsp;�J</td>
      <td>��&nbsp;��&nbsp;[&nbsp;'.$____login_this.'&nbsp;]</td>
    </tr>
    <tr align="left">
      <td>�u&nbsp;&nbsp;�W&nbsp;&nbsp;�p&nbsp;&nbsp;��&nbsp;</td>
      <td>'.$hates__444.'</td>
    </tr>
    <tr align="left">
      <td width="200" valign="top">²&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;��</td>
      <td><textarea name="textarea" wrap="VIRTUAL" style="width:18em;height:5em" readonly="true" style="color:#999999;background-color:#000000">'.$pho__444.'</textarea></td>
    </tr>
  </table></div></div>';
}

function myhourse_12(){
include('alls/add_121_a.php');
include('alls/add_borads.php');
include('alls/add_borad_css.php');
global $maths;
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
<td height="30">';
if($arrays_value__action[($maths-100)][6]==1){
$str__repl=new mysql_et;
$cools_text_word=$str__repl->str_re($say__text_word[($maths-100)],array('[a=','[/a]','[img]','[/img]',']'),array('<a href=','</a>','<img src=','  >','>'));

echo'<div class="borad__div">'.$cools_text_word.'</div>';
}//end �O�_��ܯd�������e
echo '</td>
</tr>
<tr>
<td height="50">���A&nbsp;/&nbsp;<font style="color:#0066FF">'.$_open_bodys.'</font>&nbsp;&nbsp;�y�k&nbsp;/&nbsp;<font style="color:#0066FF">'.$_open_bodys2.'</font>&nbsp;&nbsp;<br><br>�d�� '.$add_num_pe.' / 1200 ��</td>
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
	echo '    <table  border="1" cellpadding="0" cellspacing="0">
      <tr>
        <td class="borad__css">';
		
if($arrays_value__action[($maths-100)][7]!=1){
$array_borads__name[$i]='���K..';
}		
		
		 echo '<table border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td colspan="2" class="'.$boy___class_title.'">'.$boy___shows.'&nbsp;&nbsp;'.$array_borads__name[$i].'_���d��';
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
	  $array_borads__body[$i]=str_replace('[/a]','  >-�s��-</a>',$array_borads__body[$i]);
	   		echo '<font style="color:'.$array_borads__color[$i].'">'.$array_borads__body[$i].'</font></td>';
			}else{
		echo '<font style="color:'.$array_borads__color[$i].'">'.$array_borads__body[$i].'</font></td>';

	}//�P�w�O�_�}��y�k
		}else{
		echo '���}��d�����e..</td>';
		}//�}��d�����e
echo '</tr>
    <tr>
      <td align="right" colspan="2" class="'.$boy___class_date.'">��� :'.$array_borads__date[$i].'&nbsp;</td>
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
for($ii=0;$ii<$alls_number;$ii++){
echo '<a href="index.php?comes=borad&maths='.$maths_.'&num__='.$ii*$stops.'#by">'.($ii+1).'</a>&nbsp;&nbsp;';
}
echo '��&nbsp;&nbsp;</div>';
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
      <td colspan="2"><div align="left">---��&nbsp;�n&nbsp;�d&nbsp;��---</div></td>
    </tr>
    <tr>
      <td width="27" nowrap><div align="left">��&nbsp;&nbsp;&nbsp;��</div></td>
      <td width="160"><div align="left">
        <input name="name_box" type="text" size="12" maxlength="12">
      </div></td>
    </tr>
	    <tr>
      <td width="27" nowrap><div align="left">��&nbsp;&nbsp;&nbsp;�O</div></td>
      <td width="160"><div align="left">
          <input name="boy_box" type="radio" value="�k" checked>
        �k
          <input name="boy_box" type="radio" value="�k">
          �k</div></td>
    </tr>
    <tr>
      <td nowrap><div align="left">�C&nbsp;&nbsp;&nbsp;��</div></td>
      <td><div align="left">';
echo $color__989->color_select_2('color_box'); 

if($arrays_value__action[$maths-100][3]=='1'){
$this_body_html='�}��';
}else{
$this_body_html='����';
}//���  �O�_�O�}��y�k
if($arrays_value__action[$maths-100][4]=='1'){
echo '<script language="javascript">
function link__helps(){
word=prompt("�п�J���}","http://");
myform.body_box.value+='."'[a]'".'+word+'."'[/a]'".';
}//end 

</script>';
$this_body_html_help='<a href="http://" onClick="link__helps()">�s��</a>';
}else{
$this_body_html_help='�L';
}//���  �O�_�O�y�k���U
echo '</div></td>
    </tr>
    <tr>
      <td valign="top" nowrap><div align="left">�y�k: '.$this_body_html.'<br>
        ���U: '.$this_body_html_help.'</div></td>
      <td><div align="right">10~500�r��</div><div align="left">
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
      <td nowrap><div align="left">��J���ҽX</div></td>
      <td><div align="left">
        <input name="pin_k" type="text" size="8" maxlength="5">
      </div></td>
    </tr>
	<tr><td ><div align="right">[�Ʀr]<br>
<br>��<br>��<br>�X</div></td>
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
$trues_bx='�w�g���s���P';
}
}//for 
if($trues_bx!='�w�g���s���P'){
$js=15001;
}//if
}//for
echo '<input type="hidden" value="'.$nums9.'"  name="val__fun_pin">';
return $numbers; //�Ǧ^���\���s��
}
$pins_imgs=number_pins2__fun();  
echo '<img src="alls/pins_img.php?pinss='.$pins_imgs.'">';	  
echo '</div></td>
    </tr>
    <tr>
      <td height="50" colspan="2"><div align="right">
	  <input type="hidden" name="kinsy" value="add__borad">
	  <input type="hidden" name="fater__num" value="'.$maths.'">
        <input type="submit" name="Submit2" value="�d��">
      </div></td>
    </tr>	
  </table></form>';
  
  }else{
  echo '&nbsp;&nbsp;---��&nbsp;�}&nbsp;��&nbsp;�d&nbsp;��---<br><br><br>';
  }
}



function myhourse_14(){
global $hot,$maths;
echo '<form method="post" action="index_add.php"><table border="0" cellspacing="1" cellpadding="5">
          <tr>
            <td height="30" colspan="2">---�^&nbsp;��&nbsp;��&nbsp;��---</td>
          </tr>
          <tr>
            <td height="30" nowrap>��&nbsp;&nbsp;&nbsp;�� : <br>
            </td>
            <td><input name="this_name" type="text" size="12" maxlength="12"></td>
          </tr>
          <tr>
            <td height="50" valign="top" nowrap>�y�k : �L</td>
            <td><div align="right">5&nbsp;~&nbsp;200�r��</div><textarea name="this_body" cols="25" rows="3" wrap="VIRTUAL"></textarea></td>
          </tr>
          <tr>
            <td height="50" valign="top" nowrap>[�Ʀr]<br><br><div align="right">��<br><br>��<br><br>�X</div></td>
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
$trues_bx='�w�g���s���P';
}
}//for 
if($trues_bx!='�w�g���s���P'){
$js=12001;
}
}//for
echo '<input type="hidden" value="'.$nums9.'"  name="val__fun_pin">';
return $numbers; //�Ǧ^���\���s��
}




$pins_imgs=number_pins2__fun(); 
echo '<img src="alls/pins_img.php?pinss='.$pins_imgs.'">';	 
echo '</td>
          </tr>
          <tr>
            <td height="50" colspan="2"><div align="right">
              <input type="submit" name="Submit5" value="�^��">
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
      <td class="blog_table__up">&nbsp;&nbsp;�̷s�^��</td>
    </tr>
    <tr>
      <td class="blog_table__center">';
	  $stops__num=0;
for($i=(count($add__thisword__num)-1);$i>-1;$i--){
if($add__thisword__pass[$i]!='@�w�R��#' && $end_ture__184[$add__thisword__nums[$i]-1000]=='[���A]@��ܸ��#'){
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
}//for show�X �^���峹	  
echo '</td>
    </tr>
    <tr>
      <td class="blog_table__down">&nbsp;</td>
    </tr>
  </table>';
}
function myhourse_thistime(){
if($_COOKIE['today_peo']!='�w�g�[�L�P'){
setcookie('today_peo','�w�g�[�L�P',time()+3600);
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

}//end �H����� �@�Ѵ��H


function myhourse_19(){
include("alls/add_443_alls.php");
echo '<div align="center"><br><br><table  border="1" cellspacing="5" cellpadding="5">
        <tr>
          <td><img src="'.$myimg__444.'" ></td>
        </tr>
</table></div>';
echo '<form method="post" action="index_add.php"><table border="0" cellspacing="1" cellpadding="3">

          <tr>
            <td height="30" colspan="2">---�g&nbsp;�H&nbsp;��&nbsp;��---</td>
          </tr>
          <tr>
            <td height="30" nowrap>��&nbsp;&nbsp;&nbsp;�� : 
            </td>
            <td><input name="cool_name" type="text" size="12" maxlength="12"></td>
          </tr>
		   <tr>
            <td height="30" nowrap>��&nbsp;&nbsp;&nbsp;�O : 
            </td>
            <td><input name="cool_boy" type="radio" value="�k" checked>
        �k
          <input name="cool_boy" type="radio" value="�k">
          �k</td>
          </tr>
		            <tr>
            <td height="30" nowrap>��&nbsp;&nbsp;&nbsp;�D : 
            </td>
            <td><input name="cool_title" type="text" size="20" maxlength="15"></td>
          </tr>
          <tr>
            <td height="50" valign="top" nowrap>�y�k : �L</td>
            <td><div align="right">15~1200�r��</div><textarea name="cool_body" cols="35" rows="5" wrap="VIRTUAL"></textarea></td>
          </tr>
          <tr>
            <td height="50" valign="top" nowrap>[�Ʀr]<br><br><div align="right">��<br><br>��<br><br>�X</div></td>
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
$trues_bx='�w�g���s���P';
}
}//for 
if($trues_bx!='�w�g���s���P'){
$js=12001;
}
}//for
echo '<input type="hidden" value="'.$nums9.'"  name="val__fun_pin">';
return $numbers; //�Ǧ^���\���s��
}
$pins_imgs=number_pins2__fun(); 
echo '<img src="alls/pins_img.php?pinss='.$pins_imgs.'">';	 
echo '</td>
          </tr>
          <tr>
            <td height="50" colspan="2"><div align="right">
              <input type="submit" name="Submit5" value="�H�H">
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