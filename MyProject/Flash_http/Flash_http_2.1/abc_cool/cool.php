<?

include("password_loge.h");

/***********************
�ƥ�    :
����Http:
�γ~    :
�ϥΤ�k:function();
***********************/


function pass_u_go_out($a){

$s_1=array('>','<','"',"'");//�N���ܪ�����
$s_2=array('&gt;','&lt;','&quot;','');//�N������ܦ�

for($i=0;$i<count($s_1);$i++){
$a=str_replace($s_1[$i],$s_2[$i],$a);
}//for

return $a;
}//end

function pass_u_go_out_333($a){

$s_1=array('[/psq_==_2]','[psq_=','=_2]');//�N���ܪ�����
$s_2=array('</font>','<font style="','">');//�N������ܦ�

for($i=0;$i<count($s_1);$i++){
$a=str_replace($s_1[$i],$s_2[$i],$a);
}//for

return $a;
}//end




function pass_u_go_out_2($a){

$s_1=array('[url=http://','[/url]','[img]http://','[/img]','[b]','[/b]','[em]','[/em]','[swf=http://','.swf]','[/swf]','[MTV=http://',']width=','[/MTV]','[mid]http://','[/mid]','[fonts=','px]','[/fonts]',';];','[quotes]','[/quotes]');//�N���ܪ�����
$s_2=array('<a href="http://','</a>','<img src="http://','">','<b>','</b>','<em>','</em>',' <embed src="http://','.swf"  type="audio/x-pn-realaudio-plugin" autostart="false" controls="ControlPanel" ','></embed>','<embed autostart="true" loop="2" hidden="no"  src="http://','"width=','>','<embed  src="http://','">','<font style="','px">','</font>','" target="_blank">','<blockquote><blockquote>','</blockquote></blockquote>');//�N������ܦ�

for($i=0;$i<count($s_1);$i++){
$a=str_replace($s_1[$i],$s_2[$i],$a);
}//for

return $a;
}//end








	/* �b���P�K�X���]�w */
	
	$host = "localhost";
   	$user = $user_mys_1;
   	$pass = $pass_mys_2;   
   	$database = $database_mys_3;


/*************************************************
�\�໡��:SQL�d��A(�A�X INSERT�BUPDATE�BDELETE ����)
�إߤH��:�]��
�إߤ��:2004-02-10
�ק���:2004-09-07
�N�Ȼ���:SQL�y�k�r��
��J�榡:�r��
��X�榡:���浲�G(���L)
��L�ɥR:�L
**************************************************/
function sql_a($query)
{	
	global $host,$user,$pass,$database;
   	
   	$conn=@mysql_connect( $host, $user, $pass);	
	@mysql_select_db($database,$conn);
	$result = @mysql_query($query);
	@mysql_close($conn);
		
	return $result;
}

/*************************************************
�\�໡��:SQL�d��B(�A�X SELECT ������)
�إߤH��:�]��
�إߤ��:2004-02-10
�ק���:2004-09-07
�N�Ȼ���:SQL�y�k�r��
��J�榡:�r��
��X�榡:���浲�G(���L)
��L�ɥR:�L
**************************************************/
function sql_b($query)
{
	global $host,$user,$pass,$database;
	   	
	$conn=@mysql_connect( $host, $user, $pass );
	$result=@mysql_db_query( $database, $query, $conn);	
	@mysql_data_seek($result,0);
	while($row=@mysql_fetch_row($result))
	{        
        	$output[] = $row;	
	} 		              	
	@mysql_free_result($result);
	@mysql_close($conn);
	
	return $output;
}

/*************************************************
�\�໡��:SQL�d��I(�A�X INSERT �B�O�۰ʲ��ͽs����)
�إߤH��:�]��
�إߤ��:2004-02-10
�ק���:2004-09-07
�N�Ȼ���:SQL�y�k�r��
��J�榡:�r��
��X�榡:���浲�G(���L) / �s�W���y����
��L�ɥR:�L
**************************************************/
function sql_i($query)
{	
	global $host,$user,$pass,$database;
   	
   	$conn=@mysql_connect( $host, $user, $pass);	
	@mysql_select_db($database,$conn);
	$result = @mysql_query($query);
	$result = @mysql_insert_id();
	@mysql_close($conn);
		
	return $result;
}











/***********************
�ƥ�    :1
����Http:index.php
�γ~    :�q�X���
�ϥΤ�k:function(�W��array,�����}���ܼƤ]�i�H);
***********************/
$son_1000="SELECT * FROM `bar`";
$son_1000i=sql_b($son_1000);//��Ʈw���
//-------------------------------
function in_index_1($a,$b){


for($i=0;$i<100;$i++){
for($k=$i+1;$k<count($a);$k++){

if($a[$i][2]>$a[$k][2]){
$power=$a[$i];
$a[$i]=$a[$k];
$a[$k]=$power;
}


}//for �y���� �ۤv�i�s�� ����




if($i<count($a)){
if($a[$i][2]!='99'){
echo '<a href="'.$b.$a[$i][0].'">'.$a[$i][1].'</a><br>';
}

}else{
$i=101;
}

}//for
}//end






/***********************
�ƥ�    :2
����Http:index.php
�γ~    :�q�X��� �I��᪺body
�ϥΤ�k:function(�W��array);
***********************/
$son_1001="SELECT * 
FROM `bar_all` 
WHERE 1 AND `true` = '�}' AND `pin_s` 
= '$http'";
$son_1001i=sql_b($son_1001);
//------------------------------show�Xbody
function in_index_2($a,$b,$c,$d,$e,$f,$clor,$clorc){

echo '<table width="675" height="65" border="1" cellpadding="1" cellspacing="1" bordercolor="#000000" bgcolor="'.$clorc.'">
          <tr bgcolor="'.$clor.'">
            <th height="29" colspan="4" nowrap><div align="left">���O: '.$f.'</div></th>
          </tr>
          <tr>
            <th width="401" nowrap><div align="center">����</div></th>
            <th width="61" nowrap><div align="center">�D�D</div></th>
            <th width="62" nowrap><div align="center">�^��</div></th>
            <th width="128" nowrap><div align="center">���D</div></th>
          </tr>';
		for($i=0;$i<count($a);$i++){  
		
		$yua_1=0;//�o��
		for($s1=0;$s1<count($d);$s1++){
		if($d[$s1][12]==$a[$i][13]){
		$yua_1++;
		}
		}//�o��
		
		
		
		$yua_2=0;//�^��
		
		for($s1=0;$s1<count($e);$s1++){
		if($e[$s1][10]==$a[$i][13]){
		for($s2=0;$s2<count($d);$s2++){
		if($d[$s2][13]=='�}' && $e[$s1][7]==$d[$s2][0]){
		$yua_2++;
		}
		}//for
		}//if
		}//�^��
		
		if($a[$i][6]!=''){
		$a[$i][6]=$a[$i][6].'(���D)';
		}
				if($a[$i][7]!=''){
		$a[$i][7]=$a[$i][7].'(�ƪ��D)';
		}
		
         echo'<tr >
		  
            <th nowrap><div align="left">
              <table width="400" height="21" border="0" cellpadding="1" cellspacing="1" bordercolor="#999999">
              <tr>
                <td width="50"><div align="center"><img src="'.$a[$i][1].'" ></div></td> 
                <td width="50"><div align="center"><a href="'.$b.$c.'&value='.$a[$i][13].'&pins=qq1" target="_self"><img src="'.$a[$i][11].'" width="48" height="48" border="0"></a></div></td>
                <td width="303" bgcolor="#666666"><a href="'.$b.$c.'&value='.$a[$i][13].'&pins=qq1"  target="_self">'.$a[$i][2].'</a><br>'.$a[$i][3].'</td>
              </tr>
            </table>
            </div></th>
            <th nowrap>'.$yua_1.'</th>
            <th nowrap>'.$yua_2.'</th>
            <th nowrap bordercolor="#000000">'.$a[$i][6].'<br>'.$a[$i][7].'</th>
          </tr>';
		  }//for
     echo ' </table>';

}//end


/***********************
�ƥ�    :3
����Http:index.php
�γ~    :�ӽбb��
�ϥΤ�k:function();
***********************/
function in_index_3($as,$ass){
echo '<form name="form2" method="post" action="abc_cool/url_header.php">


<table width="350" border="1" cellspacing="2" cellpadding="2"  bgcolor="'.$as.'"  bordercolor="#000000">
    <tr bgcolor="'.$ass.'">
    <th nowrap   colspan="3" height="20"><div align="left">�ӽбb��</div></th>
  </tr>
  <tr>
    <td nowrap >�ʺ�</td>
    <td nowrap><div align="left"><input name="name_d100" type="text" size="15" maxlength="20"></div></td>
    <td nowrap>4 ~ 12 �r��</td>
  </tr>
  <tr>
    <td nowrap >�b��</td>
    <td nowrap><div align="left"><input name="user_d100" type="text" size="15" maxlength="20"></td>
    <td nowrap>4 ~ 12 �r��</td>
  </tr>
  <tr>
    <td nowrap >�K�X</td>
    <td nowrap><div align="left"><input name="pass_d100" type="password" size="15" maxlength="20"></td>
    <td nowrap>4 ~ 12 �r��</td>
  </tr>
  <tr>
    <td nowrap >�T�{�K�X</td>
    <td nowrap><div align="left"><input name="pass_2_d100" type="password" size="15" maxlength="20"></td>
    <td nowrap>4 ~ 12 �r��</td>
  </tr>
  <tr>
    <td colspan="3" nowrap>---------------------------------------------------------------------------------------</td>
  </tr>
  <tr>
    <td nowrap >�m�W</td>
    <td nowrap><div align="left"><input name="name_1_d100" type="text" size="15" maxlength="20"></td>
    <td nowrap>&nbsp;</td>
  </tr>
  <tr>
    <td nowrap >�ʧO</td>
    <td nowrap><div align="left">

   �k�� <input name="boy_1_d100" type="radio" value="�k��" checked> 
   �k�� <input name="boy_1_d100" type="radio" value="�k��">

  </td>
    <td nowrap>&nbsp;</td>
  </tr>
  <tr>
    <td nowrap >�X��</td>
    <td nowrap><div align="left"> �褸 <input name="bir_1_d100" type="text" size="5" maxlength="4"> ';
	
	
  echo '<select name="bir_2_d100"><option value="1" selected>1</option>';
  for($i=2;$i<13;$i++){
echo '<option value="'.$i.'">'.$i.'</option>';
  }//for 
  echo '</select>  �� ';
  
  
  echo '<select name="bir_3_d100"><option value="1" selected>1</option>';
  for($i=2;$i<32;$i++){
echo '<option value="'.$i.'">'.$i.'</option>';
  }//for 
  echo '</select>  ��';
  
  
echo '</td>
    <td nowrap>&nbsp;</td>
  </tr>
  <tr>
    <td nowrap >���D</td>
    <td nowrap><div align="left">';
	
	$abc_1s=array('1','2','3','4');
	$abc_2s=array('�ڪ��n�B�ͬO..','�ڪ��������P�O..','�ڳ̳��w���H�O..','�ڪ������ҫ�|�X..');
echo '<select name="pass_Q_d100">';
  for($i=0;$i<count($abc_1s);$i++){
echo '<option value="'.$abc_1s[$i].'">'.$abc_2s[$i].'</option>';
  }//for 
echo '</select>  ';
  
  
  
echo '</td>
    <td nowrap>&nbsp;</td>
  </tr>
    <tr>
    <td nowrap >����</td>
    <td nowrap><div align="left"><input name="pass_A_d100" type="text" size="15" maxlength="20"></td>
    <td nowrap>&nbsp;</td>
  </tr>
  <tr>
    <td nowrap >E-mail</td>
    <td nowrap><div align="left"><input name="email" type="text" size="15" maxlength="80"></td>
    <td nowrap>&nbsp;</td>
  </tr>
  <tr>
    <td nowrap>&nbsp;</td>
    <td nowrap>&nbsp;</td>
    <td nowrap><input type="submit" name="Submit" value="�e�X"></td>
  </tr>
</table>


<input type="hidden" name="pin_kk47" value="aaa3">
</form>
';
}//end



/***********************  
�ƥ�    :4
����Http:all  �Ω���t��:(��)�t��   
�γ~    :�s��array ��array����Ʀ���� �B��s����function  �n�X�R
�ϥΤ�k:function(�s���W��,�s����URL);
***********************/
//-------------------------------�t��
$son_1002_a=array('�n�X','�}�׾¥h','��x����','���K�X');
$son_1002_b=array('../url_header.php?pin_password=�n�X','index.php','indax.php?adds=u2s','indax.php?windown=passwords_pin');
//-------------------------------

//-------------------------------�򥻿��
$son_1004_a=array('�q�T��','�ڪ��峹','�ڪ����R�峹','���򥻸��','���ӤH���');
$son_1004_b=array('indax.php?windown=good_f','indax.php?windown=my_words','indax.php?windown=good','indax.php?windown=myhobe_1','indax.php?windown=myhobe');
//-------------------------------

//-------------------------------�H�c
$son_1003_a=array('�o�e�p�H','�ڪ����H�c','�p�H�ƥ��H��');
$son_1003_b=array('indax.php?windown=email','indax.php?windown=emails','indax.php?windown=email_add');
//-------------------------------

//-------------------------------�t��
$son_1005_a=array('�ڪ���x','�t�Τ��i','�̷s����','�׾¶¦W��');
$son_1005_b=array('indax.php?adds=u2s','index.php?https=us','index.php?https=lv','index.php?https=show');
//-------------------------------

//-------------------------------�t��
$son_1008_a=array('�t�Τ��i','�̷s����');
$son_1008_b=array('index.php?adds=us','index.php?add=lv');
//-------------------------------

function all_index_4($a,$b){
for($i=0;$i<count($a);$i++){
echo '<a href="'.$b[$i].'">'.$a[$i].'</a><br>';
}//for
}//end


function all_index_66($a,$b,$c){
for($i=0;$i<count($a);$i++){
echo '<a href="'.$b[$i].'">'.$a[$i].'</a><br>';
}//for

if($c=='�޲z��(�̰��v��)'){

echo'<a href="../myhouse.php">�׾º޲z�t��</a><br>';
}
}//end



function all_index_55($a,$b,$c,$d){

for($i=0;$i<count($a);$i++){
if($i==1){


if($c[0][0]==''){
echo '<a href="'.$b[$i].'">'.$a[$i].'</a><br>';
}else{
echo '<a href="'.$b[$i].'">'.$a[$i].'</a> <font style="font-size:12px;color:#CC0000">new ('.count($c).')</font><br>';


if($d!='�X�n��'){
setcookie('power_2006s','�X�n��',time()+180);
echo '<embed src="sound/sa.mp3"  visibility: hidden>';
}
}//�z�O�_���H��

}else{
echo '<a href="'.$b[$i].'">'.$a[$i].'</a><br>';
}//���p�Ψ� �ڪ��H�c  Ū$c �ݦ��S����Ū���H��

}//for


}//end




/***********************
�ƥ�    :5
����Http:imdex.php
�γ~    :body�C�X 
�ϥΤ�k:function();
***********************/

function im_imdex_5($a,$b,$c,$e,$f,$gs,$looa_c,$looa_cc){
global $http,$value;

echo '<table width="666" border="0" cellspacing="2" cellpadding="2" >
   
    <tr>
      <td width="80" nowrap><div align="left"><a href="imdex.php?pins=qq2&http='.$http.'&value='.$value.'">[ �o��峹 ] </a></div></td>
      <td width="328" nowrap><div align="left">&nbsp;</div></td>
      <td width="102" nowrap><div align="right">�o��峹 '.$e.' </div></td>
      <td width="110" nowrap><div align="right">�^�Ф峹 '.$f.' </div></td>
      </tr>
  </table>
<br>';//�o���� 

echo '<table width="670" height="40" border="1" cellpadding="2" cellspacing="2" bordercolor="#000000" bgcolor="'.$looa_cc.'">
  <tr bgcolor="'.$looa_c.'">
    <th height="30" colspan="2" nowrap>�D�D</th>
    <th width="80" nowrap>�@��</th>
    <th width="54" nowrap>�H��</th>
    <th width="56" nowrap>�^��</th>
    <th  width="80" nowrap>�̫��s</th>
  </tr>';  
  
  
  if($c!=''){
  for($i=0;$i<count($c);$i++){
  $h01aaa_a=0;
  for($sa=0;$sa<count($gs);$sa++){
  if($gs[$sa][7]==$c[$i][0]){
  
  $h01aaa_a++;
  }
  }//�P�w �^�Ц��h��
  
  
  
  
  switch($c[$i][15]){
case 0:$aaa_url='&nbsp;';break;
  case 1:$aaa_url='<img src="im/im_7.gif"width="18" height="18">';break;
  case 2:$aaa_url='<img src="im/im_8.gif"width="22" height="8">';break;  }//end
  
  echo '<tr>
    <td width="41" nowrap >'.$aaa_url.'</td>
    <th width="300" height="30"><div align="left"><font style="color:#CC3300;font-size=12px">[�m��]</font><a href="../abc_cool/url_header.php?pin_kk47=aaa23&gg_2006_7_9_1='.$c[$i][0].'" target="_blank">'.$c[$i][1].'</a></div></th>
    <td nowrap><a href="in_body.php?na_num='.$c[$i][14].'" target="_blank">'.$c[$i][2].'</a></td>
    <td nowrap>'.$c[$i][3].'</td>
    <td nowrap>'.$h01aaa_a.'</td>
    <td width="100">'.$c[$i][4].'</td>
  </tr>';
  
  
}//for
}



  for($i=0;$i<count($a);$i++){
  $h01aaa_b=0;
   for($sa=0;$sa<count($gs);$sa++){
  if($gs[$sa][7]==$a[$i][0]){
  
  $h01aaa_b++;
  }
  }//�P�w �^�Ц��h��
  

    switch($a[$i][15]){
  case 0:$aaa_url='&nbsp;';break;
  case 1:$aaa_url='<img src="im/im_7.gif"width="18" height="18">';break;
  case 2:$aaa_url='<img src="im/im_8.gif"width="22" height="8">';break;
  }//end
  echo '<tr>
    <td width="41" nowrap>'.$aaa_url.'</td>
    <th width="300" nowrap height="30"><div align="left"><a href="../abc_cool/url_header.php?pin_kk47=aaa23&gg_2006_7_9_1='.$a[$i][0].'" target="_blank">'.$a[$i][1].'</a></div></th>
    <td nowrap><a href="in_body.php?na_num='.$a[$i][14].'" target="_blank">'.$a[$i][2].'</a></td>
    <td nowrap>'.$a[$i][3].'</td>
    <td nowrap>'.$h01aaa_b.'</td>
    <td width="100">'.$a[$i][4].'</td>
  </tr>';
    
}//for
echo '</table>' ;
}


/***********************
�ƥ�    :6
����Http:imdex.php
�γ~    :body�C�X �峹���
�ϥΤ�k:function();
***********************/
function mi_index_6($a,$b,$q){
if($a[3]!=''){

$maAam='<font style="font-size:12px">��� : '.$a[6].'<br>�̫�s��H : '.$a[3].'</font>';

}else{
$maAam='';
}//if���̫�s��H �N�g�X �̫��s �̫�s��H



echo '<table width="964" border="0" cellspacing="2" cellpadding="3">
    <tr>
      <td>�^�Ъ� : <a href="h_ya/in_body.php?na_num='.$a[9].'">'.$a[1].'</a> �o����: '.$a[5].' ( '.$b.'�� )</td>
    </tr>
    <tr>
      <td bgcolor="#CCCCCC"><br>        <table width="958" border="0" cellspacing="1" cellpadding="1">
        <tr>
          <td><pre>'.$a[4].'</pre></td>
        </tr>
      </table>      <div align="right"><br>
                <table width="135" border="0" cellspacing="1" cellpadding="1">
            <tr>
			<td width="200" nowrap><div align="right">'.$maAam.'</div></td>
              <td width="50" nowrap><div align="left"><a href="index_mi.php?num_10s='.$q.'&fun=b&anum='.$a[0].'&#hi_http">[�ޥ�]</a></div></td>
              <td width="50" nowrap><div align="left"><a href="index_mi.php?num_10s='.$q.'&fun=d&anum_2006='.$a[0].'&#hi_http">[�s��]</a></div></td>
              <td width="50" nowrap><div align="left"><a href="url_header.php?out_num='.$a[0].'&pass_my='.$a[9].'&pin_password=aaa7&gotos='.$a[7].'">[�R��]</a></div></td>
            </tr>
          </table>
      </div></td>
    </tr>
  </table>';

}//�^��



/***********************
�ƥ�    :7
����Http:indax.php
�γ~    :e-mail ��� �H�p�H
�ϥΤ�k:function(�����q�T��);
***********************/
function in_indax_7($a,$b,$looa_c,$looa_cc){
echo'<form name="form1" method="post" action="../abc_cool/url_header.php">


<table width="579" height="435" border="1" cellpadding="1" cellspacing="1" bordercolor="#000000"  bgcolor="'.$looa_cc.'">
  <tr>
    <td width="571" height="39" bgcolor="'.$looa_c.'"><div align="left"> &nbsp; �H�@���p�H</div></td>
  </tr>
  <tr>
    <td height="40" ><div align="left"> &nbsp; <input name="send_2006_7_5_a" type="radio" value="0" checked> &nbsp;��誺�ʺ� 
        <input type="text" name="send_2006_7_5_b" maxlength="20">
    </div></td>
  </tr>
  <tr>
    <td height="41" ><div align="left">&nbsp; <input name="send_2006_7_5_a" type="radio" value="1" > &nbsp;�q�T�� 
        ';
		echo '<select name="send_2006_7_5_c"  >';
    for($i=0;$i<count($a);$i++){
	echo'<option value="'.$a[$i][5].'"  >'.$a[$i][1].'</option>';
	}
       echo ' </select>';
   echo ' </div></td>
  </tr>
  <tr>
    <td height="42" ><div align="left">&nbsp; ���D
        <input type="text" name="send_2006_7_5_d" maxlength="30">
    </div></td>
  </tr>
  <tr>
    <td height="198" ><div align="center">
      <p>
        <br>
        <textarea name="send_2006_7_5_f" cols="70" rows="12" wrap="VIRTUAL"></textarea>
  </p>
      <p align="left">&nbsp; �ڷQ�n�O�d�ڳo�ʨp�H
        <input type="checkbox" name="send_2006_7_5_e" value="yes">
</p>
      <p align="left">&nbsp;      </p>
    </div></td>
  </tr>
  <tr>
    <td height="35" ><div align="center">
      <input type="submit" name="Submit" value="�e�X">
    </div></td>
  </tr>
</table>

<input type="hidden" name="send_2006_7_5_i" value="'.$b.'">
<input type="hidden" name="pin_kk47" value="aaa2">
</form>
';

}



/***********************
�ƥ�    :8
����Http:indax.php
�γ~    :e-mail �ڪ��H�c
�ϥΤ�k:function(��Ʈw���,�b��);
***********************/
function in_indax_8($a,$b,$looa_c,$looa_cc){

echo '<table width="669" height="54" border="1" cellpadding="2" cellspacing="2" bordercolor="#000000" bgcolor="'.$looa_cc.'">
  <tr bgcolor="'.$looa_c.'">
    <td colspan="5" height="25"><div align="left">�ڪ��H�c</div></td>
  </tr>
  <tr>
    <th width="120"  height="30">�H�H�H</th>
    <th width="302">�D�D</th>
    <th width="72">�\Ū</th>
    <th width="91">�ɶ�</th>
    <th width="68">�R��</th>
  </tr>';  
  
  for($i=0;$i<count($a);$i++){
   echo'<tr>
    <td width="108" height="30"><a href="in_body.php?na_num='.$a[$i][10].'" target="_black">'.$a[$i][2].'</a></td>
    <td width="300"><div align="left"><a href="indax.php?wins='.$a[$i][0].'&windown=mypassword_13" >'.$a[$i][4].'</a></div></td>
    <td width="72">'.$a[$i][6].'</td>
    <td width="91">'.$a[$i][3].'</td>
	<form name="form1" method="post" action="../abc_cool/url_header.php">
    <td width="68">		
	<input type="hidden" name="sss_2006_7_5_a" value="'.$b.'">
	<input type="hidden" name="pin_kk47" value="aaa12">
	<input type="hidden" name="sss_2006_7_5_b" value="'.$a[$i][0].'">
	<input type="submit" name="Submit" value="�R��">		
	</td>
	</form>
  </tr>'; 
  
  }//end
  
  
echo '</table>';
}//end







/***********************
�ƥ�    :10
����Http:indax.php
�γ~    :�q�T��
�ϥΤ�k:function();
***********************/
function in_indax_10($a,$b,$looa_c,$looa_cc){
echo '<table width="353" height="80" border="1" cellpadding="1" cellspacing="1" bordercolor="#000000" bgcolor="'.$looa_cc.'">
    <tr bgcolor="'.$looa_c.'">
    <th colspan="3" height="22"><div align="left">�q�T��</div></th>
  </tr>
  <tr>
    <td width="265" height="20" nowrap>�ڪ��n��</td>
    <td width="75" nowrap>�R��</td>
  </tr>';
  for($i=0;$i<count($a);$i++){
  echo '<tr>
    <td><a href="in_body.php?na_num='.$a[$i][5].'" target="_black">'.$a[$i][1].'</a></td>
   <form name="form1" method="post" action="../abc_cool/url_header.php"> <td><div align="center">
     <input type="submit" name="Submit2" value="�R��">
    </div></td>
<input type="hidden" name="f_200675_a" value="'.$b.'">
<input type="hidden" name="f_200675_b" value="'.$a[$i][0].'">
<input type="hidden" name="pin_kk47" value="aaa13">
	
	</form>
  </tr>';//f_200675  �@�ӬO �b��  �@�ӬO�s��
  }

echo'</table>';
}//end


/***********************
�ƥ�    :11
����Http:indax.php
�γ~    :���K�X
�ϥΤ�k:function(�b��);
***********************/
function in_indax_11($a,$looa_c,$looa_cc){
echo '<form name="form1" method="post" action="../abc_cool/url_header.php">



<table width="240" height="177" border="1" cellpadding="2" cellspacing="2" bordercolor="#000000"  bgcolor="'.$looa_cc.'">
  <tr bgcolor="'.$looa_c.'">
    <td colspan="2" nowrap height="22"><div align="left">���K�X</div></td>
  </tr>
  <tr>
    <td  nowrap><div align="left">�п�J�±K�X</div></td>
    <td nowrap><input name="password_aass106_0" type="password" size="15" maxlength="15"></td>
  </tr>
  <tr >
    <td  nowrap><div align="left">�п�J�s�K�X</div></td>
    <td nowrap><input name="password_aass106_1" type="password" size="15" maxlength="15"></td>
  </tr>
  <tr>
    <td  nowrap><div align="left">�ЦA����J�s�K�X</div></td>
    <td nowrap><input name="password_aass106_2" type="password" size="15" maxlength="15"></td>
  </tr>
  <tr >
    <td nowrap colspan="2"><div align="right">
      <input type="submit" name="Submit2" value="�e�X">
    </div></td>
  </tr>
</table>


<input type="hidden" name="pin_myuser_1988" value="'.$a.'">
<input type="hidden" name="pin_kk47" value="aaa1">
</form>';
}//end





/***********************
�ƥ�    :12
����Http:indax.php
�γ~    :�p�H�ƥ��H��
�ϥΤ�k:function();
***********************/
function in_indax_12($a,$b,$looa_c,$looa_cc){
echo '<table width="450" height="40" border="1" cellpadding="1" cellspacing="1" bordercolor="#000000" bgcolor="'.$looa_cc.'">
    <tr bgcolor="'.$looa_c.'">
	
    <td  nowrap  height="30"><div align="left">�ڪ��ƥ��H�� </div></td>
 <td   nowrap>&nbsp;</td>
  </tr>
  <tr >
    <th width="333" height="30"  nowrap>�H ��</th>
    <th nowrap>�R��</th>
  </tr>';
  for($i=0;$i<count($a);$i++){
  echo '<tr>
    <td><a href="indax.php?a12s='.$a[$i][0].'&windown=mypassword_11"> '.$a[$i][2].' </a></td>
    <form name="form1" method="post" action="../abc_cool/url_header.php"><td><div align="center">
	

      <input name="Submit2" type="submit" value="�R��">
	  
	   <input name="a2006_7_5" type="hidden" value="'.$a[$i][0].'">
	    <input name="b2006_7_5" type="hidden" value="'.$b.'">
		<input name="pin_kk47" type="hidden" value="aaa15">
	  

    </div></td></form>
  </tr>';
  }

echo'</table>';
}//end




/***********************
�ƥ�    :13
����Http:indax.php
�γ~    :�ӤH��ƭק�
�ϥΤ�k:function();
***********************/
function in_indax_13($a,$b,$asadqwd,$looa_c,$looa_cc){


switch($a[0][2]){

}//end



//----------------------------------¾�~
$a__2='<select name="bo_2006_7_4_a">';

$ss1=array('�q���v','�]�p�v','���e�v','��K�v','�Юv','�Ǯ{','�ǥ�','�үS��','���H','���v','��檺','��L');
$ss2=array('1','2','3','4','5','6','7','8','9','10','11','12');
for($i=0;$i<count($ss1);$i++){

if($a[0][20]==$ss2[$i]){
$a__2=$a__2.'<option value="'.$ss2[$i].'" selected>'.$ss1[$i].'</option>';
}else{
$a__2=$a__2.'<option value="'.$ss2[$i].'" >'.$ss1[$i].'</option>';
}

}//for

$a__2=$a__2.'</select>';
//-------------------------------------




//------------------------------------�B��
$a__3='<select name="bo_2006_7_4_b">';

$ss1=array('���B','�w�B');
$ss2=array('0','1');
for($i=0;$i<count($ss1);$i++){

if($a[0][21]==$ss2[$i]){
$a__3=$a__3.'<option value="'.$ss2[$i].'" selected>'.$ss1[$i].'</option>';
}else{
$a__3=$a__3.'<option value="'.$ss2[$i].'" >'.$ss1[$i].'</option>';
}

}//for

$a__3=$a__3.'</select>';
//------------------------------------





//------------------------------------�t�ιϤ�
$a__4='<select name="bo_2006_7_4_c">';

$ss1=array('�Ѱ�(1)','�Ѱ�(2)','�Ѱ�(3)','�Ѱ�(4)','�Ѱ�(5)','���_�_��(1)','���_�_��(2)','���_�_��(3)','���v�Ԫ�(1)','���v�Ԫ�(2)','���v�Ԫ�(3)','���v�Ԫ�(4)','���v�Ԫ�(5)','���v�Ԫ�(6)');
$ss2=array('1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18');
for($i=0;$i<count($ss1);$i++){

if($a[0][26]==$ss2[$i]){
$a__4=$a__4.'<option value="'.$ss2[$i].'" selected>'.$ss1[$i].'</option>';
}else{
$a__4=$a__4.'<option value="'.$ss2[$i].'" >'.$ss1[$i].'</option>';
}

}//for

$a__4=$a__4.'</select>';

//-----------------------------




//------------------------------------�Ϥ��j�p
$a__5='<select name="bo_2006_7_4_d">';

$ss1=array('100*100','130*130','170*170','200*200','145*129','160*118','180*60','200*300','100*50','120*200','200*400','150*400','220*400','225*320','210*350');
$ss2=array('1','2','3','4','5','6','7','8','9','10','11','12','13','14','15');
for($i=0;$i<count($ss1);$i++){

if($a[0][27]==$ss2[$i]){
$a__5=$a__5.'<option value="'.$ss2[$i].'" selected>'.$ss1[$i].'</option>';
}else{
$a__5=$a__5.'<option value="'.$ss2[$i].'" >'.$ss1[$i].'</option>';
}

}//for

$a__5=$a__5.'</select>';

//-----------------------------





//------------------------------------�Ϥ� �L  ��
if($a[0][28]=='0'){
$a__6_a='checked';
$a__6_b='';
}else{
$a__6_a='';
$a__6_b='checked';

}//end

echo '<form name="form1" method="post" action="../abc_cool/url_header.php">';

echo '<table width="483" height="500" border="1" cellpadding="1" cellspacing="1" bordercolor="#000000" bgcolor="'.$looa_cc.'">
  <tr bgcolor="'.$looa_c.'">
    <th height="25" colspan="2" ><div align="left">�ڪ����</div></th>
  </tr>
  <tr >
    <td width="80">&nbsp; �s���G</td>
    <td width="390"><div align="left">
      <table width="342" border="0" cellspacing="1" cellpadding="1">
          <tr>
            <td>'.$a[0][0].'</td>
          </tr>
          </table>
    </div></td>
  </tr>
  <tr >
    <td> &nbsp; �ʺ١G</td>
    <td ><div align="left">
      <table width="342" border="0" cellspacing="1" cellpadding="1">
          <tr>
            <td>'.$a[0][3].'</td>
          </tr>
          </table>
    </div></td>
  </tr>
  <tr >
    <td>&nbsp; �ʧO�G</td>
    <td ><div align="left">
      <table width="342" border="0" cellspacing="1" cellpadding="1">
          <tr>
            <td>'.$a[0][4].'</td>
          </tr>
          </table>
    </div></td>
  </tr>
  <tr >
    <td>&nbsp; �ͤ�G</td>
    <td><div align="left">
      <table width="342" border="0" cellspacing="1" cellpadding="1">
          <tr>
            <td width="80"> �褸 '.$a[0][6].' �~ </td> <td>'.$a[0][7].' ��'.$a[0][8].'  ��</td>
          </tr>
          </table>
    </div></td>
  </tr>
    <tr >
    <td>&nbsp; �Ϥ��G</td>
    <td ><div align="left">
      <table width="342" border="0" cellspacing="1" cellpadding="1">
          <tr>
            <td><table width="265" border="0" cellspacing="1" cellpadding="1">
  <tr>
    <td width="13" nowrap>�L</td>
    <td width="22" nowrap><input name="bo_2006_7_4_e" type="radio" value="0"  '.$a__6_a.' ></td>
    <td width="55" nowrap> '.$a__4.' </td>
    <td width="136" nowrap>&nbsp;</td>
  </tr>
  <tr>
    <td nowrap>��</td>
    <td nowrap><input name="bo_2006_7_4_e" type="radio" value="1" '.$a__6_b.'></td>
    <td nowrap> '.$a__5.' </td>
    <td nowrap>���}
    <input name="bo_2006_7_4_j" type="text" size="20" value="'.$a[0][16].'"  maxlength="300"></td>
  </tr>
</table></td>
          </tr>
      </table>
    </div></td>
  </tr>
  <tr >
    <td>&nbsp; �ӦۡG</td>
    <td ><div align="left">
      <table width="342" border="0" cellspacing="1" cellpadding="1">
          <tr>
            <td><input type="text" name="bo_2006_7_4_g" value="'.$a[0][11].'" size="20" maxlength="40"></td>
          </tr>
          </table>
    </div></td>
  </tr>
  <tr >
    <td> &nbsp; ¾�~�G</td>
    <td><div align="left">
      <table width="342" border="0" cellspacing="1" cellpadding="1">
          <tr>
            <td>
			'.$a__2.'</td>
          </tr>
          </table>
    </div></td>
  </tr>
  <tr>
    <td>&nbsp; �B�ê��p�G</td>
    <td><div align="left">
      <table width="342" border="0" cellspacing="1" cellpadding="1">
          <tr>
            <td>'.$a__3.'</td>
          </tr>
          </table>
    </div></td>
  </tr>
  <tr>
    <td>&nbsp; �ӤH�����G</td>
    <td><div align="left">
      <table width="342" border="0" cellspacing="1" cellpadding="1">
          <tr>
            <td><input type="text" name="bo_2006_7_4_f" value="'.$a[0][12].'" size="40" maxlength="300"></td>
          </tr>
          </table>
    </div></td>
  </tr>
  <tr >
    <td >&nbsp; �ڪ��峹�G</td>
    <td ><div align="left">
      <table width="342" border="0" cellspacing="1" cellpadding="1">
          <tr>
            <td>'.$asadqwd.'</td>
          </tr>
          </table>
    </div></td>
  </tr>
  <tr >
    <td>&nbsp; �W�����ơG</td>
    <td ><div align="left">
      <table width="342" border="0" cellspacing="1" cellpadding="1">
          <tr>
            <td>'.$a[0][18].'</td>
          </tr>
          </table>
    </div></td>
  </tr>
  <tr >
    <td> &nbsp; �׾�¾�ȡG </td>
    <td ><div align="left">
      <table width="342" border="0" cellspacing="1" cellpadding="1">
          <tr>
            <td>'.$a[0][15].'</td>
          </tr>
          </table>
    </div></td>
  </tr>
  <tr >
    <td>&nbsp; ����G</td>
    <td><div align="left">
      <table width="342" border="0" cellspacing="1" cellpadding="1">
          <tr>
            <td><input type="text" name="bo_2006_7_4_h" value="'.$a[0][14].'" size="20" maxlength="40"></td>
          </tr>
          </table>
    </div></td>
  </tr>
  <tr >
    <td>&nbsp; ²���G</td>
    <td ><div align="center">
      <br>
      <textarea name="bo_2006_7_4_i" cols="50" rows="5" wrap="VIRTUAL">'.$a[0][13].'</textarea>
      <br>
      <br>
    </div></td>
  </tr>
  <tr >
    <td colspan="2"><div align="right">
      <table width="72" height="38" border="0" cellpadding="3" cellspacing="3">
        <tr>
          <td><div align="center">
            <input type="submit" name="Submit3" value="�e�X">
          </div></td>
        </tr>
      </table>
    </div></td>
  </tr>
</table>';

echo '<input type="hidden" name="user_2006_7_4_a" value="'.$b.'">
<input type="hidden" name="pin_kk47" value="aaa11">';//�@�ӬOpin �@�ӬO�b��


echo '</form>';
}//end



/***********************
�ƥ�    :14
����Http:indax.php
�γ~    :�򥻸��
�ϥΤ�k:function();
***********************/
function in_indax_14($a,$b,$looa_c,$looa_cc){

//�P�w�K�X����  ��
$a__2='<select name="qq_2006_7_4">';

$ss1=array('�ڪ��n�B�ͬO..','�ڪ��������P�O..','�ڳ̳��w���H�O..','�ڪ������ҫ�|�X..');
$ss2=array('1','2','3','4');
for($i=0;$i<count($ss1);$i++){

if($a[0][2]==$ss2[$i]){
$a__2=$a__2.'<option value="'.$ss2[$i].'" selected>'.$ss1[$i].'</option>';
}else{
$a__2=$a__2.'<option value="'.$ss2[$i].'" >'.$ss1[$i].'</option>';
}

}//for

$a__2=$a__2.'</select>';



echo '<form name="form1" method="post" action="../abc_cool/url_header.php">';

echo '<table width="400" height="115" border="1" cellpadding="1" cellspacing="1" bordercolor="#000000" bgcolor="'.$looa_cc.'">
  <tr bgcolor="'.$looa_c.'">
    <th height="25" colspan="2" nowrap ><div align="left">�򥻸��</div></th>
  </tr>
  <tr >
    <td width="80" height="21" nowrap>&nbsp; �p���q�� �G</td>
    <td width="390" nowrap><div align="left">
      <table width="238" border="0" cellspacing="2" cellpadding="2">
        <tr>
          <td width="230"><input type="text" name="ph_2006_7_4" value="'.$a[0][4].'" size="20" maxlength="20"></td>
        </tr>
      </table>
</div></td>
  </tr>
  <tr >
    <td height="21" nowrap> &nbsp; E-mail�G</td>
    <td nowrap ><div align="left">
      <table width="238" border="0" cellspacing="2" cellpadding="2">
        <tr>
          <td width="230"><input type="text" name="em_2006_7_4" value="'.$a[0][1].'" size="40" maxlength="60"></td>
        </tr>
      </table>
    </div></td>
  </tr>
  <tr >
    <td height="21" nowrap>&nbsp; �K�X���D�G</td>
    <td nowrap ><div align="left">
      <table width="238" border="0" cellspacing="2" cellpadding="2">
        <tr>
          <td width="230">'.$a__2.'</td>
        </tr>
      </table>
    </div></td>
  </tr>
  <tr >
    <td nowrap>&nbsp; �K�X�����G</td>
    <td nowrap ><div align="left">
      <table width="238" border="0" cellspacing="2" cellpadding="2">
        <tr>
          <td width="230"><input type="text" name="aa_2006_7_4" value="'.$a[0][3].'" size="15" maxlength="16"></td>
        </tr>
      </table>
    </div></td>
  </tr>
  <tr >
    <td colspan="2" nowrap><div align="right">
      <table width="75" border="0" cellspacing="1" cellpadding="1">
        <tr>
          <td><div align="center">
            <input type="submit" name="Submit3" value="�e�X">
          </div></td>
        </tr>
      </table>
    </div></td>
  </tr>
</table>';


echo '<input type="hidden" name="user_2006_7_4_a" value="'.$b.'">
<input type="hidden" name="pin_kk47" value="aaa10">';//�@�ӬOpin �@�ӬO�b��

echo '</form>';
}//end



/***********************
�ƥ�    :15
����Http:indax.php
�γ~    :���n
�ϥΤ�k:function();
***********************/
function in_indax_15($a){
echo '<table width="269" border="1" cellpadding="1" cellspacing="1" bordercolor="#000000">
  <tr>
    <th height="32" colspan="2" bgcolor="#0066FF"><div align="left">���n�]�w</div></th>
  </tr>
  <tr bgcolor="#E7E7E7">
    <td width="86" height="36" nowrap><div align="left"> �����C�� </div></td>
    <td width="170" nowrap>
      <div align="left">
        <table width="161" border="0" cellspacing="2" cellpadding="2">
          <tr>
            <td width="149"><select name="select3">
              </select> 
            �C���</td>
          </tr>
                  </table>
    </div></td>
  </tr>
  <tr bgcolor="#E7E7E7">
    <td nowrap><div align="left"> �ϥΪ����</div></td>
    <td nowrap>
      <div align="left">
        <table width="161" border="0" cellspacing="2" cellpadding="2">
          <tr>
            <td width="230"><select name="select4">
              </select> 
            ��T �� �Ϥ�</td>
          </tr>
                  </table>
    </div></td>
  </tr>
  <tr bgcolor="#E7E7E7">
    <td nowrap><div align="left"> �b���K�X�x�s</div></td>
    <td nowrap>
      <div align="left">
        <table width="161" border="0" cellspacing="2" cellpadding="2">
          <tr>
            <td width="230"><select name="select5">
              </select> 
            �p��</td>
          </tr>
                  </table>
    </div></td>
  </tr>
  <tr bgcolor="#E7E7E7">
    <td colspan="2" nowrap><div align="right">
      <table width="75" border="0" cellspacing="1" cellpadding="1">
        <tr>
          <td><div align="center">
            <input type="submit" name="Submit4" value="�e�X">
          </div></td>
        </tr>
      </table>
    </div></td>
  </tr>
</table>';

}//end

/***********************
�ƥ�    :16
����Http:indax.php
�γ~    :�ʶR����
�ϥΤ�k:function();
***********************/
function in_indax_16($a){
echo'<table width="295" height="142" border="1" cellpadding="1" cellspacing="1" bordercolor="#000000">
  <tr bgcolor="#0066FF">
    <td height="32" colspan="2">�ʶR����</td>
  </tr>
  <tr>
    <td width="95">�ثe����</td>
    <td width="187">&nbsp;</td>
  </tr>
  <tr>
    <td>�z�ثe�Y��</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>�z�ثe����</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="51" colspan="2"><div align="center">
      <input type="submit" name="Submit5" value="�ɯ�">  
    </div></td>
  </tr>
</table>';

}//end



/***********************
�ƥ�    :17
����Http:index.php
�γ~    :�ѰO�K�X
�ϥΤ�k:function();
***********************/
function in_index_17($a,$c){
echo'<form name="form2" method="post" action="abc_cool/url_header.php">


<table width="300" height="188" border="1" cellpadding="1" cellspacing="1" bordercolor="#000000"  bgcolor="'.$c.'">
  <tr bgcolor="'.$a.'">
    <td height="22" colspan="2" nowrap><div align="left">�ѰO�K�X</div></td>
  </tr>
  <tr>
    <td width="100" height="32" nowrap>�п�J�u��m�W</td>
    <td width="200" nowrap><table width="178" border="0" cellspacing="1" cellpadding="1">
      <tr>
        <td width="170"><input name="name_d101" type="text" size="15" maxlength="12"></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="28" nowrap>�п�J�b��</td>
    <td nowrap><table width="178" border="0" cellspacing="1" cellpadding="1">
      <tr>
        <td width="170"><input name="user_d101" type="text" size="15" maxlength="12"></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="25" colspan="2" nowrap><div align="center">
      <input type="submit" name="Submit5" value="�d��">
    </div></td>
  </tr>
</table>




<input type="hidden" name="pin_kk47" value="aaa4">
</form>';

}//end


/***********************
�ƥ�    :18
����Http:index.php
�γ~    :�K�X����
�ϥΤ�k:function();
***********************/

function in_index_18($a,$b,$c,$d,$loa_c,$loa_cc){
switch($a){
case 1:$aaaa='�ڪ��n�B�ͬO..';break;
case 2:$aaaa='�ڪ��������P�O..';break;
case 3:$aaaa='�ڳ̳��w���H�O..';break;
case 4:$aaaa='�ڪ������ҫ�|�X..';break;
}
echo'<form name="form2" method="post" action="url_header.php">


<table width="300" height="188" border="1" cellpadding="3" cellspacing="5" bordercolor="#000000"  bgcolor="'.$loa_cc.'">
  <tr bgcolor="'.$loa_c.'">
    <td height="32" colspan="2" nowrap><div align="left">�ѰO�K�X</div></td>
  </tr>
  <tr>
    <td width="100" height="32" nowrap>�K�X����</td>
    <td width="200" nowrap><table width="178" border="0" cellspacing="1" cellpadding="1">
        <tr>
          <td width="170">'.$aaaa.'</td>
        </tr>
    </table></td>
  </tr>
  <tr>
    <td height="28" nowrap>�п�J����</td>
    <td nowrap><table width="178" border="0" cellspacing="1" cellpadding="1">
        <tr>
          <td width="170"><input name="anser_d102" type="text" size="15" maxlength="12"></td>
        </tr>
    </table></td>
  </tr>
  <tr>
    <td height="25" colspan="2" nowrap><div align="center">
        <input type="submit" name="Submit52" value="�d��">
    </div></td>
  </tr>
</table>

<input type="hidden" name="user_d102" value="'.$b.'">
<input type="hidden" name="number_d102" value="'.$c.'">
<input type="hidden" name="number_d103" value="'.$d.'">
<input type="hidden" name="pin_password" value="aaa5">
</form>' ;
}//end



/***********************
�ƥ�    :19
����Http:all
�γ~    :�Ω� �Ҧ���r �u�n��J�b�o�ӵ{���̭�  �N�i�H���C�� �� �r��j�p
�ϥΤ�k:function();
***********************/
function all_color_font($a,$b,$c){
switch($b){
case �Ŧ�:$bb="#0066FF";break;
case ���:$bb="#FF9900";break;
case ����:$bb="#990000";break;
case ����:$bb="#FFCC00";break;
case �զ�:$bb="#FFFFFF";break;
case �¦�:$bb="#000000";break;
}


echo '<font style="color:'.$bb.';font-size:'.$c.'px">';
echo $a;
echo '</font>';
}



/***********************
�ƥ�    :20
����Http:index.php  imdex
�γ~    :�Ω� �ϥΪ̦a�� �K�� 
�ϥΤ�k:function(�Ϥ�url,�Ϥ��j�p,�o��峹��,�W������,�t�ιϤ�,��ܨt�ΩΦۤv);
***********************/
function in_im_20($a,$b,$c,$d,$e,$f){

//��ܹϤ�
switch($e){
case 1:$ccc='im/li_1.gif';break;
case 2:$ccc='im/li_2.gif';break;
case 3:$ccc='im/li_3.gif';break;
case 4:$ccc='im/li_4.gif';break;
case 5:$ccc='im/li_8.gif';break;

case 6:$ccc='im/gi_1.gif';break;
case 7:$ccc='im/gi_2.gif';break;
case 8:$ccc='im/gi_3.gif';break;

case 9:$ccc='im/p_1.jpg';break;
case 10:$ccc='im/p_2.jpg';break;
case 11:$ccc='im/p_3.jpg';break;
case 12:$ccc='im/p_4.jpg';break;
case 13:$ccc='im/p_5.gif';break;
case 14:$ccc='im/p_6.jpg';break;
}//end


if($f=='1'){
switch($b){
case 1:$bbbb='<img src="'.$a.'"   width="100" height="100">';break;
case 2:$bbbb='<img src="'.$a.'"   width="130" height="130">';break;
case 3:$bbbb='<img src="'.$a.'"   width="170" height="170">';break;
case 4:$bbbb='<img src="'.$a.'"   width="200" height="200">';break;
case 5:$bbbb='<img src="'.$a.'"   width="145" height="129">';break;
case 6:$bbbb='<img src="'.$a.'"   width="160" height="118">';break;
case 7:$bbbb='<img src="'.$a.'"   width="180" height="60">';break;
case 8:$bbbb='<img src="'.$a.'"   width="200" height="300">';break;
case 9:$bbbb='<img src="'.$a.'"   width="100" height="50">';break;
case 10:$bbbb='<img src="'.$a.'"   width="120" height="200">';break;
case 11:$bbbb='<img src="'.$a.'"   width="200" height="400">';break;
case 12:$bbbb='<img src="'.$a.'"   width="150" height="400">';break;
case 13:$bbbb='<img src="'.$a.'"   width="220" height="400">';break;
case 14:$bbbb='<img src="'.$a.'"   width="225" height="320">';break;
case 15:$bbbb='<img src="'.$a.'"   width="210" height="350">';break;
}//end
}else{
$bbbb='<img src="'.$ccc.'" >';
}//�P�w�O�_�n��� �t�ιϤ� �άO �ۤv�Ϥ�  


echo '<table width="212" height="185" border="0" cellpadding="1" cellspacing="1">
  <tr>
    <td height="144" colspan="2"><div align="center">'.$bbbb.'</div></td>
  </tr>
  <tr>
    <td width="0" height="22" nowrap><div align="left">�o�妸��: </div></td>
    <td width="141" nowrap><div align="left">'.$c.' </div></td>
  </tr>
  <tr>
    <td height="0" nowrap><div align="left"> �^�Ц���:</div></td>
    <td nowrap><div align="left">'.$d.' </div></td>
  </tr>
</table>';
}

/***********************
�ƥ�    :21
����Http:index.php  imdex
�γ~    :�Ω� Show�X�ӤH��� ��� �Ϥ�
�ϥΤ�k:function(�Ϥ�url,�Ϥ��j�p,�t�ιϤ�,��ܨt�ΩΦۤv);
***********************/
function in_im_21($a,$b,$e,$f){

//��ܹϤ�
switch($e){
case 1:$ccc='im/li_1.gif';break;
case 2:$ccc='im/li_2.gif';break;
case 3:$ccc='im/li_3.gif';break;
case 4:$ccc='im/li_4.gif';break;
case 5:$ccc='im/li_8.gif';break;

case 6:$ccc='im/gi_1.gif';break;
case 7:$ccc='im/gi_2.gif';break;
case 8:$ccc='im/gi_3.gif';break;

case 9:$ccc='im/p_1.jpg';break;
case 10:$ccc='im/p_2.jpg';break;
case 11:$ccc='im/p_3.jpg';break;
case 12:$ccc='im/p_4.jpg';break;
case 13:$ccc='im/p_5.gif';break;
case 14:$ccc='im/p_6.jpg';break;
}//end


if($f=='1'){
switch($b){
case 1:$bbbb='<img src="'.$a.'"   width="100" height="100">';break;
case 2:$bbbb='<img src="'.$a.'"   width="130" height="130">';break;
case 3:$bbbb='<img src="'.$a.'"   width="170" height="170">';break;
case 4:$bbbb='<img src="'.$a.'"   width="200" height="200">';break;
case 5:$bbbb='<img src="'.$a.'"   width="145" height="129">';break;
case 6:$bbbb='<img src="'.$a.'"   width="160" height="118">';break;
case 7:$bbbb='<img src="'.$a.'"   width="180" height="60">';break;
case 8:$bbbb='<img src="'.$a.'"   width="200" height="300">';break;
case 9:$bbbb='<img src="'.$a.'"   width="100" height="50">';break;
case 10:$bbbb='<img src="'.$a.'"   width="120" height="200">';break;
case 11:$bbbb='<img src="'.$a.'"   width="200" height="400">';break;
case 12:$bbbb='<img src="'.$a.'"   width="150" height="400">';break;
case 13:$bbbb='<img src="'.$a.'"   width="220" height="400">';break;
case 14:$bbbb='<img src="'.$a.'"   width="225" height="320">';break;
case 15:$bbbb='<img src="'.$a.'"   width="210" height="350">';break;
}//end switch
}else{
$bbbb='<img src="'.$ccc.'" >';
}//�P�w�O�_�n��� �t�ιϤ� �άO �ۤv�Ϥ�  
echo $bbbb;
}











/***********************
�ƥ�    :22
����Http:indax.php
�γ~    :e-mail ��� �H�p�H
�ϥΤ�k:function(�����q�T��);
***********************/
function in_indax_22($a,$b,$c,$looa_c){
echo'<form name="form1" method="post" action="../abc_cool/url_header.php">


<table width="579" height="435" border="1" cellpadding="1" cellspacing="1" bordercolor="#000000">
  <tr>
    <td width="571" height="39" bgcolor="'.$looa_c.'"><div align="left"> &nbsp; �H�@���p�H</div></td>
  </tr>
  <tr>
    <td height="40" bgcolor="#EFEFEF"><div align="left"> &nbsp; <input name="send_2006_7_5_a" type="radio" value="0" checked> &nbsp;��誺�ʺ� 
        <input type="text" name="send_2006_7_5_b" maxlength="20">
    </div></td>
  </tr>
  <tr>
    <td height="41" bgcolor="#EFEFEF"><div align="left">&nbsp; <input name="send_2006_7_5_a" type="radio" value="1" > &nbsp;�q�T�� 
        ';
		echo '<select name="send_2006_7_5_c">';
    for($i=0;$i<count($a);$i++){
	echo'<option value="'.$a[$i][5].'"  >'.$a[$i][1].'</option>';
	}
       echo ' </select>';
	   
	   
   echo ' </div></td>
  </tr>
  <tr>
    <td height="42" bgcolor="#EFEFEF"><div align="left">&nbsp; ���D
        <input type="text" name="send_2006_7_5_d" value="'.$c[0][2].'" maxlength="30">
    </div></td>
  </tr>
  <tr>
    <td height="198" bgcolor="#EFEFEF"><div align="center">
      <p>
        <br>
        <textarea name="send_2006_7_5_f" cols="70" rows="12" wrap="VIRTUAL">'.$c[0][3].'</textarea>
  </p>

      <p align="left">&nbsp;      </p>
    </div></td>
  </tr>
  <tr>
    <td height="35" bgcolor="#EFEFEF"><div align="center">
      <input type="submit" name="Submit" value="�e�X">
    </div></td>
  </tr>
</table>

<input type="hidden" name="send_2006_7_5_i" value="'.$b.'">
<input type="hidden" name="pin_kk47" value="aaa2">
</form>
';

}














/***********************
�ƥ�    :23
����Http:indax.php
�γ~    :�ݫH�ʤ��e
�ϥΤ�k:function(�����q�T��);
***********************/
function in_indax_23($a,$b,$looa_c,$looa_cc){
echo'<table width="560" height="193" border="1" cellpadding="1" cellspacing="1" bordercolor="#000000" bgcolor="'.$looa_cc.'">
  <tr bgcolor="'.$looa_c.'">
    <td height="37" colspan="2"> <div align="left"> �\Ū�H�� </div></td>
  </tr>
  <tr>
    <td height="38"><div align="center"> �H�H��</div></td>
    <td width="312"><div align="left"><pre><br> <a href="in_body.php?na_num='.$a[0][10].'" target="_black" style="font-size:15px">'.$a[0][2].'</a></pre></div></td>
  </tr>
  <tr>
    <td height="34"><div align="center"> ���D</div></td>
    <td><div align="left">'.$a[0][4].'</div></td>
  </tr>
  <tr>
    <td height="75" colspan="2" >
      <div align="center"><br>

      <table width="480" height="21" border="0" cellpadding="0" cellspacing="0">
	     <tr>
          <th height="17" nowrap ><div align="left">���e :</div></th>
		  <th height="17"><div align="left">&nbsp;</div></th>
        </tr>
        <tr>
		<td height="17" bgcolor="#000000"><div align="left">&nbsp;</div></td>

          <td height="17" width="430" bgcolor="#000000"><br><br>
<br><div align="left"><pre><font style="color:#ffffff">'.$a[0][5].'</font></pre></div><br><br></td>
		          </tr>
      </table>
      <p>&nbsp;</p>
      <p>&nbsp;          </p>
      </div></td>
  </tr>
</table>';
}//end





/***********************
�ƥ�    :24
����Http:
�γ~    :�g�峹
�ϥΤ�k:function(�����q�T��);
***********************/
function in_indax_24($a,$b,$c,$d,$e,$looa_c){
echo '<br><br>';
echo '<form name="myform" method="post" action="../abc_cool/url_header.php">';

echo'<table width="551" height="445" border="2" cellpadding="1" cellspacing="1" bordercolor="#000000" >
  <tr>
    <td width="109" height="49" ><div align="center">�@�� : </div></td>
    <td width="475" bgcolor="'.$looa_c.'"><div align="left"><pre><br>  '.$b.'</pre></div></td>
  </tr>
  <tr>
    <td height="59" bgcolor="'.$looa_c.'"><div align="center">���D : </div></td>
    <td> <div align="left"><table width="389" border="0" cellspacing="7" cellpadding="9" >
        <tr>
          <td width="381"><div align="left">
            <input name="send_2006_7_6_a" type="text"  size="40" maxlength="27">
          </div></td>
        </tr>
      </table>
    </div></td>
  </tr>
  <tr>
    <td bgcolor="'.$looa_c.'"><div align="center">���e : <br>
        <br>
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
    <td><div align="center">
      <table width="445" border="0" cellspacing="1" cellpadding="1">
        <tr>
          <td width="430"><div align="left">
		  
<input type="button" name="Submit" value="����" onClick="js_2006_7_10_2();"  style="background-color:#000000;font-size:14px;color:#FFCC00">
<input type="button" name="Submit" value="����" onClick="js_2006_7_10_3();"  style="background-color:#000000;font-size:14px;color:#FFCC00">
<input type="button" name="Submit" value="�r��" onClick="js_2006_7_10_9();"  style="background-color:#000000;font-size:14px;color:#FFCC00">
<input type="button" name="Submit" value="�s��" onClick="js_2006_7_10_1();"  style="background-color:#000000;font-size:14px;color:#FFCC00">
<input type="button" name="Submit" value="�Ϥ�" onClick="js_2006_7_10_5();"  style="background-color:#000000;font-size:14px;color:#FFCC00">
<input type="button" name="Submit" value="Flash" onClick="js_2006_7_10_6();"  style="background-color:#000000;font-size:14px;color:#FFCC00">
<input type="button" name="Submit" value="����" onClick="js_2006_7_10_8()"  style="background-color:#000000;font-size:14px;color:#FFCC00">
<input type="button" name="Submit" value="�v��" onClick="js_2006_7_10_7();"  style="background-color:#000000;font-size:14px;color:#FFCC00">

</div></td>
        </tr>
      </table>
      <div align="left"></div>
      <p>
        <textarea name="send_2006_7_6_b" cols="60" rows="15" wrap="VIRTUAL"></textarea>
      </p>
      </div> </td>
  </tr>
  <tr>
    <td height="50" colspan="2"><div align="center">
      <input type="submit" name="Submit2" value="�e�X">
    </div></td>
  </tr>
</table>
<input type="hidden" name="send_2006_7_6_c" value="'.$e.'">
<input type="hidden" name="send_2006_7_6_d" value="'.$c.'">
<input type="hidden" name="send_2006_7_6_e" value="'.$d.'">
<input type="hidden" name="pin_kk47" value="aaa16">
</from>';//d �Ohttp   c�Ovalue
}



/***********************
�ƥ�    :25
����Http:imdex.php
�γ~    :body�C�X �峹���  �ڪ��峹
�ϥΤ�k:function();
***********************/

function im_imdex_25($a,$c,$d,$looa_c,$looa_cc){

echo '<table width="670" height="40" border="1" cellpadding="2" cellspacing="2" bordercolor="#000000" bgcolor="'.$looa_cc.'">
  <tr bgcolor="'.$looa_c.'">
    <th height="30" colspan="2" nowrap>�D�D</th>
    <th width="92" nowrap>�@��</th>
    <th width="54" nowrap>�H��</th>
    <th width="56" nowrap>�^��</th>
    <th width="96" nowrap>�̫��s</th>
  </tr>';  
  for($i=0;$i<count($c);$i++){
    if($c[$i][13]=='��'){
  $de_word='<font style="color:#CC0000;font-size:12px">[����]</font>';
  }else{
   $de_word='';
  }//�����峹���� �N�g�X ���⪺�����G�r
  
  
  $aas_peo_a=0;
  for($ba=0;$ba<count($d);$ba++){
  if($c[$i][0]==$d[$ba][7]){
  $aas_peo_a++;
  }
  }//�^�м�
  
  switch($c[$i][15]){
case 0:$aaa_url='&nbsp;';break;
  case 1:$aaa_url='<img src="im/im_7.gif"width="18" height="18">';break;
  case 2:$aaa_url='<img src="im/im_8.gif"width="22" height="8">';break;  }//end
  
  echo '<tr>
    <td width="41" nowrap>'.$aaa_url.'</td>
    <th width="280"  height="30"><div align="left"><a href="../index_mi.php?num_10s='.$c[$i][0].'" target="_blank"><font style="color:#CC0000;font-size:12px">[�m��]</font>'.$de_word.$c[$i][1].'</a></div></th>
    <td ><a href="in_body.php?na_num='.$c[$i][14].'" target="_blank">'.$c[$i][2].'</a></td>
    <td nowrap>'.$c[$i][3].'</td>
    <td nowrap>'.$aas_peo_a.'</td>
    <td >'.$c[$i][10].'</td>
  </tr>';
}//for





  for($i=0;$i<count($a);$i++){
    if($a[$i][13]=='��'){
  $de_word='<font style="color:#CC0000;font-size:12px">[����]</font>';
  }else{
   $de_word='';
  }//�����峹���� �N�g�X ���⪺�����G�r
  
    
  $aas_peo_b=0;
  for($ba=0;$ba<count($d);$ba++){
  if($a[$i][0]==$d[$ba][7]){
  $aas_peo_b++;
  }
  }//�^�м�
  
    switch($a[$i][15]){
  case 0:$aaa_url='&nbsp;';break;
  case 1:$aaa_url='<img src="im/im_7.gif"width="18" height="18">';break;
  case 2:$aaa_url='<img src="im/im_8.gif"width="22" height="8">';break;
  }//end
  echo '<tr>
    <td width="41" nowrap>'.$aaa_url.'</td>
    <th width="280" height="30"><div align="left"><a href="../index_mi.php?num_10s='.$a[$i][0].'" target="_blank">'.$de_word.$a[$i][1].'</a></div></th>
    <td nowrap><a href="in_body.php?na_num='.$a[$i][14].'" target="_blank">'.$a[$i][2].'</a></td>
    <td nowrap>'.$a[$i][3].'</td>
    <td nowrap>'.$aas_peo_b.'</td>
    <td >'.$a[$i][10].'</td>
  </tr>';
}//for
echo '</table>' ;
}






/***********************
�ƥ�    :26
����Http:imdex.php
�γ~    :body�C�X �n�峹����
�ϥΤ�k:function();
***********************/

function im_imdex_26($a,$b,$cc,$ddd){

    switch($a[15]){
  case 0:$aaa_url='&nbsp;';break;
  case 1:$aaa_url='<img src="im/im_7.gif"width="18" height="18">';break;
  case 2:$aaa_url='<img src="im/im_8.gif"width="22" height="8">';break;
  }//end
  if($a[13]=='��'){
  $de_word='<font style="color:#CC3300;font-size=12px">[����]</font>';
  }else{
   $de_word='';
  }//�����峹���� �N�g�X ���⪺�����G�r
  
  
  
  echo '<tr >
    <td width="41" nowrap>'.$aaa_url.'</td>
    <th width="280" height="30"><div align="left">'.$de_word.'<a href="../index_mi.php?num_10s='.$a[0].'" target="_blank" title="�X�� : '.$cc.'"> '.$a[1].'</a></div></th>
    <td nowrap><a href="in_body.php?na_num='.$a[14].'"target="_blank">'.$a[2].'</a></td>
    <td nowrap>'.$a[3].'</td>
    <td nowrap>'.$ddd.'</td>
    
	<form name="form2" method="post" action="../abc_cool/url_header.php">
	<td nowrap>
	
	<input type="hidden" name="sem_2006_7_7_a" value="'.$b.'">
	<input type="hidden" name="sem_2006_7_7_b" value="'.$a[0].'">
	<input type="hidden" name="pin_kk47" value="aaa19">
	<input type="submit" name="Submit" value="�R��">
	</td>
	</form>
  </tr>';


}







/***********************
�ƥ�    :29
����Http:imdex.php
�γ~    :body�C�X �n�峹����
�ϥΤ�k:function();
***********************/
function im_imdex_29($a,$bb,$looa_c,$looa_cc){

echo '<table width="700" height="25" border="1" cellpadding="1" cellspacing="1" bordercolor="#000000" bgcolor="'.$looa_cc.'">
  
  <tr bgcolor="'.$looa_c.'">
    <th height="30" colspan="2" nowrap  >�ʺ�</th>
    <th nowrap  >�T���ɶ�</th>
    <th width="50" nowrap>�g�@</th>
    <th width="250" nowrap>��]</th>
    <th nowrap>�ާ@�H</th>
  </tr>';
  
  for($i=0;$i<count($a);$i++){
  
  
  for($assss=0;$assss<count($bb);$assss++){
  if($a[$i][6]==$bb[$assss][13]){
  $bbwqdqwd=$bb[$assss][2];
  }//end if
  if($a[$i][6]=='0'){
  $bbwqdqwd='�s������T��';
  }
  
  }
  
  
  
  
  echo '  <tr bgcolor="#ffffff">
    <td height="35" colspan="2"  >'.$a[$i][1].'</td>
    <td width="60">'.$a[$i][4].' </td>
    <td  >'.$a[$i][8].'��</td>
    <td ><div align="left"><b style="font-size:12px;color:#990000">[ '.$bbwqdqwd.' ]</b></div>'.$a[$i][7].'</td>
    <td >'.$a[$i][5].'</td>
  </tr>';
  
  
  }
  
  

echo '</table>';

}//end







/***********************
�ƥ�    :30
����Http:index.php
�γ~    :�q�X���
�ϥΤ�k:function(�W��array,�����}���ܼƤ]�i�H);
*******************/
function im_imdex_30($a,$b,$c,$num){
$sa_21=$a/$num;
$sa_22=$a%$num;

if($sa_22!=0){
$sa_2qweqwe='true';
$sa_21++;
}
$numss=$num*9;

$asdcqwd22QWDWQ=($b/$num);



$b_kkkbo_1=$b-$num;//�W�@��

echo'<br>';
if($b!=0){
echo '<a href="'.$c.'&a_value=0"> [�Ĥ@��] </a> ';
}
if($b!=0){
echo '<a href="'.$c.'&a_value='.$b_kkkbo_1.'"> [�W�@��] </a>';
}else{
echo ' [�W�@��] ';
}




echo '[�@ '.floor($sa_21).' ��] ';

if($sa_2qweqwe=='true'){
$sa_21--;
}//end
for($i=0;$i<$sa_21;$i++){
$ii=$i+1;

$qwegfqfqwf++;
$i_asd=($ii*$num)-$num;




if($ii==1){
echo '<font style="font-size:13px"><a href="'.$c.'&a_value=0">'.$ii.'</a> </font>';
}else{
echo '<font style="font-size:13px"><a href="'.$c.'&a_value='.$i_asd.'">'.$ii.'</a> </font>';

if($qwegfqfqwf==25){
$qwegfqfqwf=0;
echo '<br>';

}

}


}//for



$b_kkkbo_2=$b+$num;//�U�@��

$qdqwd=$a-$b;

if($num<$qdqwd){
echo '<a href="'.$c.'&a_value='.$b_kkkbo_2.'"> [�U�@��] </a>';
}else{
echo ' [�U�@��] ';
}//end
if($num<$qdqwd){
echo '<a href="'.$c.'&a_value='.($i_asd).'"> [�̫�@��] </a>';
}


$qwdqwd=($b/$num)+1;

echo'<br><br>�� '.$qwdqwd.' ��';


}//end















/***********************
�ƥ�    :31
����Http:index.php
�γ~    :�q�X���
�ϥΤ�k:function(�W��array,�����}���ܼƤ]�i�H);
*******************/
function im_imdex_31($a){

echo '<form name="form1" method="post" action="'.$a.'">
  <table width="236" border="0" cellpadding="2" cellspacing="2" bordercolor="#000000">
    <tr>
      <td width="48" nowrap>���M��</td>
      <td width="107" nowrap><input type="text" name="say_jo" maxlength="20"></td>
      <td width="27" nowrap><input type="submit" name="Submit" value="���M"></td>
    </tr>
  </table>
</form>';


}//end


/***********************
�ƥ�    :32
����Http:index.php
�γ~    :�q�X���
�ϥΤ�k:function(�W��array,�����}���ܼƤ]�i�H);
*******************/
function im_imdex_32($a,$gs,$e,$f,$looa_c,$looa_cc){
global $http,$value;
echo '<table width="666" border="0" cellspacing="2" cellpadding="2">
    <tr>
      <td width="80" nowrap><div align="left"><a href="imdex.php?pins=qq2&http='.$http.'&value='.$value.'">[ �o��峹 ] </a></div></td>
      <td width="328" nowrap><div align="left">&nbsp;</div></td>
      <td width="102" nowrap><div align="right">�o��峹 '.$e.' </div></td>
      <td width="110" nowrap><div align="right">�^�Ф峹 '.$f.' </div></td>
      </tr>
  </table>
<br>';//�o���� 

echo '<table width="670" height="40" border="1" cellpadding="2" cellspacing="2" bordercolor="#000000" bgcolor="'.$looa_cc.'">
  <tr bgcolor="'.$looa_c.'">
    <th height="30" colspan="2" nowrap>�D�D</th>
    <th width="80" nowrap>�@��</th>
    <th width="54" nowrap>�H��</th>
    <th width="56" nowrap>�^��</th>
    <th  width="80" nowrap>�̫��s</th>
  </tr>';  

  for($i=0;$i<count($a);$i++){
  $h01aaa_b=0;
   for($sa=0;$sa<count($gs);$sa++){
  if($gs[$sa][7]==$a[$i][0]){
  
  $h01aaa_b++;
  }
  }//�P�w �^�Ц��h��
  

    switch($a[$i][15]){
  case 0:$aaa_url='&nbsp;';break;
  case 1:$aaa_url='<img src="im/im_7.gif"width="18" height="18">';break;
  case 2:$aaa_url='<img src="im/im_8.gif"width="22" height="8">';break;
  }//end
  echo '<tr>
    <td width="41" nowrap>'.$aaa_url.'</td>
    <th width="300" nowrap height="30"><div align="left"><a href="../abc_cool/url_header.php?pin_kk47=aaa23&gg_2006_7_9_1='.$a[$i][0].'" target="_blank">'.$a[$i][1].'</a></div></th>
    <td nowrap><a href="in_body.php?na_num='.$a[$i][14].'" target="_blank">'.$a[$i][2].'</a></td>
    <td nowrap>'.$a[$i][3].'</td>
    <td nowrap>'.$h01aaa_b.'</td>
    <td width="100">'.$a[$i][4].'</td>
  </tr>';
    
}//for
echo '</table>' ;


}






/***********************
�ƥ�    :33
����Http:index.php
�γ~    :�q�X���
�ϥΤ�k:function(�W��array,�����}���ܼƤ]�i�H);
*******************/
function im_imdex_33(){
echo'<input type="button" name="Submit" value="����" onClick="js_2006_7_10_2();"  style="background-color:#000000;font-size:14px;color:#FFCC00">
<input type="button" name="Submit" value="����" onClick="js_2006_7_10_3();"  style="background-color:#000000;font-size:14px;color:#FFCC00">
<input type="button" name="Submit" value="�r��" onClick="js_2006_7_10_9();"  style="background-color:#000000;font-size:14px;color:#FFCC00">
<input type="button" name="Submit" value="�s��" onClick="js_2006_7_10_1();"  style="background-color:#000000;font-size:14px;color:#FFCC00">
<input type="button" name="Submit" value="�Ϥ�" onClick="js_2006_7_10_5();"  style="background-color:#000000;font-size:14px;color:#FFCC00">
<input type="button" name="Submit" value="Flash" onClick="js_2006_7_10_6();"  style="background-color:#000000;font-size:14px;color:#FFCC00">
<input type="button" name="Submit" value="����" onClick="js_2006_7_10_8()"  style="background-color:#000000;font-size:14px;color:#FFCC00">
<input type="button" name="Submit" value="�v��" onClick="js_2006_7_10_7();"  style="background-color:#000000;font-size:14px;color:#FFCC00">
<input type="button" name="Submit" value="���" onClick="jss_2006_7_10_101();"  style="background-color:#000000;font-size:14px;color:#FFCC00">
';

}




/***********************
�ƥ�    :34
����Http:index.php
�γ~    :�d�ߤH��
�ϥΤ�k:function(�W��array,�����}���ܼƤ]�i�H);
*******************/
function im_imdex_34($a){

echo '<form name="form1" method="post" action="'.$a.'">
  <table width="236" border="0" cellpadding="2" cellspacing="2" bordercolor="#000000">
    <tr>
      <td width="150" nowrap>&nbsp; ��� &nbsp; 
	<select name="m_star_1">
    <option selected value="3">�ʺ�</option>
    <option value="1">�s��</option>
    <option value="2">�b��</option>
    <option value="4">�u��m�W</option>
    <option value="6">�ʧO</option>
	<option value="5">�}��</option>
  </select>
	  </td>
      <td width="107" nowrap><input type="text" name="m_star_2" maxlength="20"></td>
      <td width="27" nowrap><input type="submit" name="Submit" value="���M"></td>
    </tr>
  </table>
</form>';


}//end



/***********************
�ƥ�    :35
����Http:index.php
�γ~    :�d�ߤ峹
�ϥΤ�k:function(�W��array,�����}���ܼƤ]�i�H);
*******************/
function im_imdex_35($a){

echo '<form name="form1" method="post" action="'.$a.'">
  <table width="236" border="0" cellpadding="2" cellspacing="2" bordercolor="#000000">
    <tr>
      <td width="150" nowrap>&nbsp; ��� &nbsp; 
	<select name="m_star_1">
    <option selected value="1">�D�D</option>
    <option value="2">�@��</option>
    <option value="3">�m��</option>
    <option value="4">���</option> 
	<option value="5">����</option>
  </select>
	  </td>
      <td width="107" nowrap><input type="text" name="m_star_2" maxlength="20"></td>
      <td width="27" nowrap><input type="submit" name="Submit" value="���M"></td>
    </tr>
  </table>
</form>';


}//end




/***********************
�ƥ�    :36
����Http:index.php
�γ~    :�d��30����� �������γo�|
�ϥΤ�k:function(�W��array,�����}���ܼƤ]�i�H);
*******************/
function im_imdex_36($a,$ssss){
echo'<table width="600" height="40" border="1" cellpadding="2" cellspacing="2" bordercolor="#000000">
  <tr bgcolor="#FFCC00">
    <th height="30" colspan="2" nowrap>�D�D</th>
    <th width="80" nowrap>�@��</th>
    <th width="54" nowrap>�H��</th>
    <th width="56" nowrap>�^��</th>
    <th  width="80" nowrap>�̫��s</th>
  </tr>';

for($i=0;$i<count($a);$i++){

for($j=$i+1;$j<count($a);$j++){
if($a[$i][3]<$a[$j][3]){
$b=$a[$i];//���Ƶ���
$a[$i]=$a[$j];//��j����Ƶ����L
$a[$j]=$b;
}
}

$power_num=0;
for($vvv=0;$vvv<count($ssss);$vvv++){
if($ssss[$vvv][7]==$a[$i][0]){
$power_num++;
}
}





echo'  <tr >
    <th height="30" colspan="2" nowrap><a href="abc_cool/url_header.php?pin_kk47=aaa23&gg_2006_7_9_1='.$a[$i][0].'" style="color:#0066FF" target="_blank" >'.$a[$i][1].'</a></th>
    <td width="80" nowrap>'.$a[$i][2].'</td>
    <td width="54" nowrap>'.$a[$i][3].'</td>
    <td width="56" nowrap>'.$power_num.'</td>
    <td  width="80" nowrap>'.$a[$i][4].'</td>
  </tr>';
  
  if($i>=35){
  $i=count($a);
  }
  

}


echo'</table>';

echo'<br><br><br><br><br><br>';
}









/***********************
�ƥ�    :37
����Http:index.php
�γ~    :�d��30����� �������γo�|
�ϥΤ�k:function(�W��array,�����}���ܼƤ]�i�H);
*******************/
function im_imdex_37($a,$ssss){
echo'<table width="600" height="40" border="1" cellpadding="2" cellspacing="2" bordercolor="#000000">
  <tr bgcolor="#FFCC00">
    <th height="30" colspan="2" nowrap>�D�D</th>
    <th width="80" nowrap>�@��</th>
    <th width="54" nowrap>�H��</th>
    <th width="56" nowrap>�^��</th>
    <th  width="80" nowrap>�̫��s</th>
  </tr>';

for($i=0;$i<count($a);$i++){

for($j=$i+1;$j<count($a);$j++){

$power_num_1=0;
for($vvv=0;$vvv<count($ssss);$vvv++){
if($ssss[$vvv][7]==$a[$i][0]){
$power_num_1++;
}//if
}//for

$power_num_2=0;
for($vvv=0;$vvv<count($ssss);$vvv++){
if($ssss[$vvv][7]==$a[$j][0]){
$power_num_2++;
}//if
}//for
if($power_num_1<$power_num_2){
$b=$a[$i];
$a[$i]=$a[$j];
$a[$j]=$b;


$power_num_1=$power_num_2;
}




}//end----for  j








echo'  <tr >
    <th height="30" colspan="2" nowrap><a href="abc_cool/url_header.php?pin_kk47=aaa23&gg_2006_7_9_1='.$a[$i][0].'" style="color:#0066FF" target="_blank" >'.$a[$i][1].'</a></th>
    <td width="80" nowrap>'.$a[$i][2].'</td>
    <td width="54" nowrap>'.$a[$i][3].'</td>
    <td width="56" nowrap>'.$power_num_1.'</td>
    <td  width="80" nowrap>'.$a[$i][4].'</td>
  </tr>';
  
  if($i>=35){
  $i=count($a);
  }
  

}


echo'</table>';

echo'<br><br><br><br><br><br>';
}













/***********************
�ƥ�    :38
����Http:index.php
�γ~    :���H��
�ϥΤ�k:function(�W��array,�����}���ܼƤ]�i�H);
*******************/
function im_imdex_38($a){
echo'<table width="500" height="40" border="1" cellpadding="2" cellspacing="2" bordercolor="#000000">
  <tr bgcolor="#FFCC00">
    <th height="30" colspan="2" nowrap>�s��</th>
    <th width="80" nowrap>�ʺ�</th>
    <th width="84" nowrap>¾��</th>
    <th width="56" nowrap>�u��m�W</th>
	<th width="56" nowrap>�ʧO</th>
	<th width="56" nowrap>�}��</th>
  </tr>';

for($i=0;$i<count($a);$i++){


  echo'<tr >
    <th height="30" colspan="2" nowrap>'.$a[$i][0].'</th>
    <th width="80" nowrap>'.$a[$i][3].'</th>
    <th width="84" nowrap>'.$a[$i][15].'</th>
    <th width="56" nowrap>'.$a[$i][24].'</th>
	<th width="56" nowrap>'.$a[$i][4].'</th>
	<td width="56" nowrap>'.$a[$i][19].'</td>
  </tr>';

}//end----for  j
echo'</table>';



}











/***********************
�ƥ�    :39
����Http:index.php
�γ~    :���峹
�ϥΤ�k:function(�W��array,�����}���ܼƤ]�i�H);
*******************/
function im_imdex_39($a){
echo'<table width="600" height="40" border="1" cellpadding="2" cellspacing="2" bordercolor="#000000">
  <tr bgcolor="#FFCC00">
    <th height="30" colspan="2" nowrap>�D�D</th>
    <th width="80" nowrap>�����m��</th>
    <th width="80" nowrap>�@��</th>
    <th width="56" nowrap>�H��</th>
    <th  width="80" nowrap>�̫��s</th>
  </tr>';






for($i=0;$i<count($a);$i++){




echo'  <tr >
    <th height="30" colspan="2" nowrap><a href="abc_cool/url_header.php?pin_kk47=aaa23&gg_2006_7_9_1='.$a[$i][0].'" style="color:#0066FF" target="_blank" >'.$a[$i][1].'</a></th>
    <td width="80" nowrap>'.$a[$i][5].'</td>
	<td width="80" nowrap>'.$a[$i][2].'</td>
    <td width="54" nowrap>'.$a[$i][3].'</td>
    <td  width="80" nowrap>'.$a[$i][4].'</td>
  </tr>';

}//end----for  j
echo'</table>';



}









/***********************
�ƥ�    :40
����Http:index.php
�γ~    :�o��벼
�ϥΤ�k:function(�W��array,�����}���ܼƤ]�i�H);
*******************/
function in_indax_40($a,$b,$c,$d,$e){
echo '<form name="myform" method="post" action="../abc_cool/url_header.php">';

echo'<table width="591" height="445" border="0" cellpadding="1" cellspacing="1" bordercolor="#000000">
  <tr>
    <td width="109" height="49" bgcolor="#0099FF"><div align="center">�@�� : </div></td>
    <td width="475"><div align="left"><pre><br>  '.$b.'</pre></div></td>
  </tr>
  <tr>
    <td height="59" bgcolor="#0099FF"><div align="center">���D : </div></td>
    <td> <div align="left"><table width="389" border="0" cellspacing="7" cellpadding="9" >
        <tr>
          <td width="381"><div align="left">
            <input name="send_2006_7_6_a" type="text"  size="40" maxlength="27">
          </div></td>
        </tr>
      </table>
    </div></td>
  </tr>
  <tr>
    <td bgcolor="#0099FF"><div align="center">���e : <br>
        <br>
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
    <td><div align="center">
      <table width="445" border="0" cellspacing="1" cellpadding="1">
        <tr>
          <td width="430"><div align="left">
		  
<input type="button" name="Submit" value="����" onClick="js_2006_7_10_2();"  style="background-color:#000000;font-size:14px;color:#FFCC00">
<input type="button" name="Submit" value="����" onClick="js_2006_7_10_3();"  style="background-color:#000000;font-size:14px;color:#FFCC00">
<input type="button" name="Submit" value="�r��" onClick="js_2006_7_10_8();"  style="background-color:#000000;font-size:14px;color:#FFCC00">
<input type="button" name="Submit" value="�s��" onClick="js_2006_7_10_1();"  style="background-color:#000000;font-size:14px;color:#FFCC00">
<input type="button" name="Submit" value="�Ϥ�" onClick="js_2006_7_10_5();"  style="background-color:#000000;font-size:14px;color:#FFCC00">
<input type="button" name="Submit" value="Flash" onClick="js_2006_7_10_6();"  style="background-color:#000000;font-size:14px;color:#FFCC00">
<input type="button" name="Submit" value="����" onClick="js_2006_7_10_8()"  style="background-color:#000000;font-size:14px;color:#FFCC00">
<input type="button" name="Submit" value="�v��" onClick="js_2006_7_10_7();"  style="background-color:#000000;font-size:14px;color:#FFCC00">

</div></td>
        </tr>
      </table>
      <div align="left"></div>
      <p>
        <textarea name="send_2006_7_6_b" cols="60" rows="15" wrap="VIRTUAL"></textarea>
      </p>
      </div> </td>
  </tr>
  <tr>
    <td height="50" colspan="2"><div align="center">
      <input type="submit" name="Submit2" value="�e�X">
    </div></td>
  </tr>
</table>
<input type="hidden" name="send_2006_7_6_c" value="'.$e.'">
<input type="hidden" name="send_2006_7_6_d" value="'.$c.'">
<input type="hidden" name="send_2006_7_6_e" value="'.$d.'">
<input type="hidden" name="pin_kk47" value="aaa16">
</from>';//d �Ohttp   c�Ovalue
}






/***********************
�ƥ�    :41
����Http:index.php
�γ~    :���D�޲z
�ϥΤ�k:function(�W��array,�����}���ܼƤ]�i�H);
*******************/
function in_indax_41($a,$b){
echo'<div align="right"><table width="190" border="0" cellspacing="4" cellpadding="8">
  <tr>
    <td><a href="imdex.php?value='.$a.'&http='.$b.'&pins=qq1">[ �Ҧ��峹 ]</a></td>
  <td ><a href="imdex.php?value='.$a.'&http='.$b.'&pins=qq4">[ ���D�޲z ]</a></td>
  </tr>
</table></div>';

}


/***********************
�ƥ�    :42
����Http:index.php
�γ~    :���D�޲z (���峹)
�ϥΤ�k:function();
*******************/
function in_indax_42($a,$b,$c,$d,$looa_c,$looa_cc){
echo'<table width="671" border="1" cellpadding="1" cellspacing="1" bordercolor="#000000"  bgcolor="'.$looa_cc.'">
  <tr bgcolor="'.$looa_c.'">
    <th height="37" colspan="5" nowrap> <div align="left"> �D�ۦ�R�����峹</div></th>
  </tr>
  <tr bgcolor="#FFFFFF">
    <th width="42" height="30" nowrap>�s��</th>
    <th width="305" nowrap>�D�D</th>
    <th width="82" nowrap>�@��</th>
    <th width="111" nowrap>�̫�s��H</th>
    <th width="103" nowrap>�}/��</th>
  </tr>';
  for($i=0;$i<count($a);$i++){
  
  echo'<tr bgcolor="#FFFFFF">
    <td width="42" height="23" nowrap height="30">'.$a[$i][0].'</td>
    <td width="305" nowrap>'.$a[$i][1].'</td>
    <td width="82" nowrap>'.$a[$i][2].'</td>
    <td width="111" nowrap>'.$a[$i][7].'</td>
	<form name="form1" method="post" action="../abc_cool/url_header.php">
    <td width="103" nowrap><input type="submit" name="Submit" value="���}"></td>
	<input type="hidden" name="pin_kk47aid111" value="'.$c.'">
	<input type="hidden" name="pin_kk47aid222" value="'.$d.'">
	<input type="hidden" name="pin_kk47aid" value="'.$b.'">
	<input type="hidden" name="pin_kk47a222" value="'.$a[$i][0].'">
	<input type="hidden" name="pin_kk47" value="aaa25">
	</form>
  </tr>';
  
  
  
  }//end
  
  
echo '</table>';
}

/***********************
�ƥ�    :43
����Http:index.php
�γ~    :���D�޲z (�¦W��)
�ϥΤ�k:function(�W��array,�����}���ܼƤ]�i�H);
*******************/
function in_indax_43($a,$b){
echo'<div align="right"><table width="190" border="0" cellspacing="4" cellpadding="8">
  <tr>
    <td><a href="imdex.php?value='.$a.'&http='.$b.'&pins=qq1">[ �Ҧ��峹 ]</a></td>
  <td ><a href="imdex.php?value='.$a.'&http='.$b.'&pins=qq5">[ �¦W�� ]</a></td>
  </tr>
</table></div>';

}

/***********************
�ƥ�    :44
����Http:index.php
�γ~    :���D�޲z (���d�峹)
�ϥΤ�k:function(�W��array,�����}���ܼƤ]�i�H);
*******************/
function in_indax_44($a,$b){
echo'<div align="right"><table width="710" border="0" cellspacing="4" cellpadding="8">
  <tr>
  <td><div align="left"><a href="imdex.php?value='.$a.'&http='.$b.'&pins=qq6">[ �s�W�@����� ]</a></div></td>
  <td width="450"><a href="imdex.php?value='.$a.'&http='.$b.'&pins=qq1">[ �Ҧ��峹 ]</a></td>
  <td ><a href="imdex.php?value='.$a.'&http='.$b.'&pins=qq4">[ ���d�峹 ]</a></td>
  </tr>
</table></div>';

}

/***********************
�ƥ�    :45
����Http:imdex.php
�γ~    :body�C�X �n�峹����
�ϥΤ�k:function();
***********************/
function im_imdex_45($a,$looa_c,$looa_cc){

echo '<table width="700" height="25" border="1" cellpadding="1" cellspacing="1" bordercolor="#000000" bgcolor="'.$looa_cc.'">
  <tr bgcolor="'.$looa_c.'">
    <th height="30" colspan="2" nowrap  >�ʺ�</th>
    <th nowrap  >�T���ɶ�</th>
    <th width="50" nowrap>�g�@</th>
    <th width="250" nowrap>��]</th>
    <th nowrap>�ާ@�H</th>
  </tr>';
  
  for($i=0;$i<count($a);$i++){
  
  echo '  <tr bgcolor="#ffffff">
    <td height="35" colspan="2"  >'.$a[$i][1].'</td>
    <td width="60">'.$a[$i][4].'</td>
    <td  >'.$a[$i][8].'��</td>
    <td >'.$a[$i][7].'</td>
    <td >'.$a[$i][5].'</td>
  </tr>';
  
  
  }
  
  

echo '</table>';

}//end







/***********************
�ƥ�    :46
����Http:imdex.php
�γ~    :body�C�X �n�峹����
�ϥΤ�k:function();
***********************/
function im_imdex_46($a,$b,$looa_c,$looa_cc){
echo'<br>';
echo'<form name="body_a_s" method="post" action="imdex.php?value='.$a.'&http='.$b.'&pins=qq7">';
echo'<table width="600" border="1" cellpadding="1" cellspacing="1" bordercolor="#000000" bgcolor="'.$looa_cc.'">
  <tr>
    <th width="466" bgcolor="'.$looa_c.'" height="20"><div align="left"> �¦W��</div></th>
  </tr>
  <tr>
    <td height="35" bgcolor="#CCCCCC">�s��
      <input name="pc_number" type="text" size="12" readonly="true">
��]
<input name="pc_becuse" type="text" size="35" readonly="true">
(�T��)
<select name="pc_sssaaa">
  <option value="3" selected>3��</option>
  <option value="7">7��</option>
  <option value="14">14��</option>
</select> <input type="submit" name="Submit2" value="�ǰe"></td>
  </tr>
</table>';


echo'
<input type="hidden" name="valuessss" value="'.$a.'">

</form>';
}



/***********************
�ƥ�    :47
����Http:index.php
�γ~    :���D�޲z (���d�峹)
�ϥΤ�k:function(�W��array,�����}���ܼƤ]�i�H);
*******************/
function in_indax_47($a,$b){
echo'<div align="right"><table width="190" border="0" cellspacing="4" cellpadding="8">
  <tr>
    <td><a href="imdex.php?value='.$a.'&http='.$b.'&pins=qq1">[ �Ҧ��峹 ]</a></td>
  <td ><a href="imdex.php?value='.$a.'&http='.$b.'&pins=qq4">[ ���d�峹 ]</a></td>
  </tr>
</table></div>';

}










/***********************
�ƥ�    :48
����Http:index.php
�γ~    :���D�޲z (���d�峹)
�ϥΤ�k:function(�W��array,�����}���ܼƤ]�i�H);
*******************/
function in_indax_48($a,$b,$c,$d,$e,$f,$looa_c,$looa_cc){

echo'<br><br><br><table width="318" border="1" cellpadding="2" cellspacing="2" bordercolor="#000000"  bgcolor="'.$looa_cc.'">
  <tr bgcolor="'.$looa_c.'">
    <th width="34" height="30" nowrap>�s��</th>
  <td width="254"><div align="left"> '.$a[0][0].'#</div></td>
  </tr>
  <tr>
    <th nowrap>�ʺ�</th>
  <td> <div align="left">'.$a[0][3].'</div></td>
  </tr>
  <tr>
    <th nowrap>¾��</th>
  <td> <div align="left">'.$a[0][15].'</div></td>
  </tr>
  <tr>
    <th nowrap>�T��</th>
  <td> <div align="left"> '.$b.' ��</div></td>
  </tr>
  <tr>
    <th nowrap>��]</th>
  <td> <div align="left"> '.$c.'</div></td>
  </tr>
  <tr>
    <th nowrap>&nbsp;</th>
    ';
	if($a[0][19]=='�}'){
	if($a[0][15]=='�L'){
	echo'<form name="form1" method="post" action="../abc_cool/url_header.php">
	<td><div align="right">
      <input type="submit" name="Submit" value="�T��">
	  <input type="hidden" name="pin_kk47" value="aaa26">
	  
	  
	  <input type="hidden" name="aa_2006_7_14_a" value="'.$a[0][0].'">
	  <input type="hidden" name="aa_2006_7_14_b" value="'.$a[0][3].'">
	  <input type="hidden" name="aa_2006_7_14_c" value="'.$c.'">
	  <input type="hidden" name="aa_2006_7_14_d" value="'.$d.'">
	  <input type="hidden" name="aa_2006_7_14_e" value="'.$e.'">
	  <input type="hidden" name="aa_2006_7_14_f" value="'.$b.'">
	   <input type="hidden" name="aa_2006_7_14_h" value="'.$f.'">
    </div></td>
	</form>';
	}else{
	
	echo'<td><div align="right">[ �L�k�T�� ]</div></td>';
	}
	}else{
	
		echo'<td><div align="right">[ �w�Q�T�� ]</div></td>';
	}
	
  echo'</tr>
</table>';
}





function body_power12_087($a,$b,$c){
$asd=floor($a/$b);
$asd1=$a%$b;
if($asd1!=0){
$asd+=1;
}





echo'�@ '.$asd.' ��';
$num_body=0; //�X���Ʀr

for($i=$asd;$i>0;$i--){
$ii=$i-1;
$num_body++;

$words_asd=' <a href="index_mi.php?loas='.$ii.'&num_10s='.$c.'">'.$i.'</a> '.$words_asd;

}//end

echo $words_asd;
}




function see_words_100($a,$b,$cc){
echo'<form name="form1" method="post" action="index.php?add=adder">';
echo '<table width="395" height="81" border="1" cellpadding="1" cellspacing="1" bordercolor="#000000" bgcolor="'.$cc.'">
  <tr>
    <td height="39" bgcolor="'.$a.'"> <div align="left">�P�N��</div></td>
  </tr>
  <tr>
    <td height="15"><div align="left">';
	
echo'<pre>';
foreach($b as $bbbs){
echo $bbbs;
}
echo'</pre>';
	
	echo'</div></td>
  </tr>
  <tr>
    <td height="15"><div align="center">
      <input type="submit" name="Submit3" value="�ڤw�\Ū�� !   �ڱ���">
    </div></td>
  </tr>
</table>';

echo'</form>';

}//end �̫�@�� �P�N�H�W���

?>