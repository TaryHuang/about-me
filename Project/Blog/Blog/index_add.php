<?

switch($kinsy){
case 'add__borad':$kin_go='�s�W�d��';break;
case 'add__thisword':$kin_go='�s�W�^�Ф峹';break;
case 'add__mycool':$kin_go='�s�W�ӫH';break;
case 'add__passwords':$kin_go='�п�J�K�X';break;
}

if($kin_go=='�s�W�d��'){
include('all_function.php');
include('alls/add_borads.php');
include('alls/add_121_a.php');
$pin_box_s=0;
for($i=0;$i<count($array_borads__num);$i++){
if($array_borads__num[$i]==$fater__num){
$pin_box_s++;
}//end
}
$pin_box_words='false';
for($i=0;$i<count($arrays_value__0);$i++){
if($arrays_value__0[$i]==$fater__num){
$pin_box_words='true';
$is_values=$i;
$i=count($arrays_value__0)+2;
}//end
}

if($pin_box_s<=1200  && $arrays_value__action[$is_values][0]=='1'  && $arrays_value__action[$is_values][1]=='1'){

function number_pins1__funs($number_pins){
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
//----------------
$re__plac=new mysql_et;
$pin_box=number_pins1__funs($pin_k);
$name_box=$re__plac->str_re($name_box);
$color_box=$re__plac->str_re($color_box);
$select__img=$re__plac->str_re($select__img);
$body_box=$re__plac->str_re($body_box);
//----------
if(strlen($name_box)>=3 && strlen($name_box)<=30 && strlen($body_box)>=10 && strlen($body_box)<=500  && strlen($body_box)>=10 && strlen($body_box)<=500 && strlen($color_box)==7){
if($pin_box==$val__fun_pin){
$of=fopen('alls/add_borads.php','w+');
$sfile_puts=new file_et;
$num_add=count($array_borads__num);//�s�W��array[$i]
$array_borads__num[$num_add]=$fater__num;//���s��

$array_borads__num_pass[$num_add]=$pin_box;//pass�s��

$array_borads__name[$num_add]=$name_box;//name
if($boy_box=='�k'){
$boy_box='�k';
}else{
$boy_box='�k';
}
$array_borads__boy[$num_add]=$boy_box;//�ʧO

$array_borads__color[$num_add]=$color_box;//�C��


$array_borads__date[$num_add]=date('Y-m-d H:i');//�ɶ�

$array_borads__ip[$num_add]=$REMOTE_ADDR;//ip
$array_borads__img[$num_add]=$select__img;//�Ϥ�
$array_borads__body[$num_add]=$body_box;//���e

fputs($of,'<?   ');
$sfile_puts->file_puts($of,$array_borads__num,'$array_borads__num');//�s��
$sfile_puts->file_puts($of,$array_borads__num_pass,'$array_borads__num_pass');//���ҽX
$sfile_puts->file_puts($of,$array_borads__name,'$array_borads__name');//�ʺ�
$sfile_puts->file_puts($of,$array_borads__boy,'$array_borads__boy');//�ʧO
$sfile_puts->file_puts($of,$array_borads__color,'$array_borads__color');//�C��
$sfile_puts->file_puts($of,$array_borads__date,'$array_borads__date');//���
$sfile_puts->file_puts($of,$array_borads__ip,'$array_borads__ip');//ip��}
$sfile_puts->file_puts($of,$array_borads__img,'$array_borads__img');//�d�����e
$sfile_puts->file_puts($of,$array_borads__body,'$array_borads__body');//�d�����e
fputs($of,'   ?>');
fclose($of);
header('location:location.php?loc=lborad&nums='.($array_borads__num[$num_add]));
}else{
header('location:location.php?loc=noborad');//�z��J�����ҽX���~
}//if

}else{
header('location:location.php?loc=this__input_error');//�z��J�r������
}
}else{
header('location:location.php?loc=this__all_add_up');//���H
}

}//end





if($kin_go=='�s�W�^�Ф峹'){
include('all_function.php');
include('alls/add_thisword.php');
include('allls/add_121_a.php');
$num___alls_add_up=0;
for($i=0;$i<(count($add__thisword__pass));$i++){
if($this_fathers==$add__thisword__nums[$i]){
$num___alls_add_up++;
}
}
if($num___alls_add_up<=35){
$sfile_puts=new file_et;
function number_pins2__fun($number_pins){
for($i=0;$i<(strlen($number_pins));$i++){	 
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
$this_pin=number_pins2__fun($pass_pin);
 
for($i=0;$i<(count($add__thisword__pass));$i++){
if($add__thisword__pass[$i]==$this_pin){
$this_pin='�w�g���ƨ��P';
}
}

if($this_pin!='�w�g���ƨ��P' && $this_pin==$val__fun_pin){
$re__plac=new mysql_et;
$this_name=$re__plac->str_re($this_name);
$this_body=$re__plac->str_re($this_body);
$this_father=$re__plac->str_re($this_father);
$this_fathers=$re__plac->str_re($this_fathers);

if(strlen($this_body)>=5  && strlen($this_body)<=200 && strlen($this_name)>=3 && strlen($this_name)<=24 ){
$of=fopen('alls/add_thisword.php','w+');
$num_add=count($add__thisword__num);//�s�W��array[$i]

$add__thisword__nums[$num_add]=$this_fathers;//�����O

$add__thisword__num[$num_add]=$this_father;//�l���O

$add__thisword__pass[$num_add]=$this_pin;//���ҽX

$add__thisword__name[$num_add]=$this_name;//�ʺ�

$add__thisword__body[$num_add]=$this_body;//���e

$add__thisword__date[$num_add]=date('Y/m/d H:i');//���

$add__thisword__ip[$num_add]=$REMOTE_ADDR;//ip

fputs($of,'<?   ');
$sfile_puts->file_puts($of,$add__thisword__num,'$add__thisword__num');//�s��
$sfile_puts->file_puts($of,$add__thisword__nums,'$add__thisword__nums');//�s��
$sfile_puts->file_puts($of,$add__thisword__pass,'$add__thisword__pass');//���ҽX
$sfile_puts->file_puts($of,$add__thisword__name,'$add__thisword__name');//�ʺ�
$sfile_puts->file_puts($of,$add__thisword__body,'$add__thisword__body');//���e
$sfile_puts->file_puts($of,$add__thisword__date,'$add__thisword__date');//���
$sfile_puts->file_puts($of,$add__thisword__ip,'$add__thisword__ip');//ip��}
fputs($of,'   ?>');
fclose($of);

header('location:location.php?loc=lthisword&mothss='.$add__thisword__num[$num_add].'&hots='.$add__thisword__nums[$num_add]);

}else{
header('location:location.php?loc=this__input_error');
}//�P�w�O�_�r�����T


}else{
header('location:location.php?loc=nothisword');//�z��J�����ҽX���~
}

}else{
header('location:location.php?loc=this__all_add_up');//�P�w���g�峹�O�_�w���H�P
}
}








if($kin_go=='�s�W�ӫH'){
include('all_function.php');
include('alls/add_mycool.php');


$sfile_puts=new file_et;
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


$this_pin=number_pins1__fun($pass_pin);
 
for($i=0;$i<(count($cool__99name));$i++){
if($cool__99num[$i]==$this_pin){
$this_pin='�w�g���ƨ��P';
}
}

if($this_pin!='�w�g���ƨ��P' && $this_pin==$val__fun_pin){

$re__plac=new mysql_et;
$cool_name=$re__plac->str_re($cool_name);
$cool_title=$re__plac->str_re($cool_title);
$cool_body=$re__plac->str_re($cool_body);
if(strlen($cool_name)>=3 && strlen($cool_name)<=24 && strlen($cool_title)>=4 && strlen($cool_title)<=60  && strlen($cool_body)>=15 && strlen($cool_body)<=1200){
$of=fopen('alls/add_mycool.php','w+');
$num_add=count($cool__99name);//�s�W��array[$i]

$cool__99name[$num_add]=$cool_name;//�ʺ�

$cool__99num[$num_add]=$this_pin;//�K�X�s��
if($cool_boy=='�k'){
$cool_boy='�k';
}else{
$cool_boy='�k';
}
$cool__99boy[$num_add]=$cool_boy;//�ʧO

$cool__99title[$num_add]=$cool_title;//���D

$cool__99body[$num_add]=$cool_body;//���e

$cool__99ip[$num_add]=$REMOTE_ADDR;//ip

$cool__99date[$num_add]=date('Y-m-d H:i');//�ɶ�

$cool__99true[$num_add]='1';//�\Ū

fputs($of,'<?   ');
$sfile_puts->file_puts($of,$cool__99name,'$cool__99name');//�ʺ�
$sfile_puts->file_puts($of,$cool__99num,'$cool__99num');//���ҽX
$sfile_puts->file_puts($of,$cool__99boy,'$cool__99boy');//�ʧO
$sfile_puts->file_puts($of,$cool__99title,'$cool__99title');//���D
$sfile_puts->file_puts($of,$cool__99body,'$cool__99body');//���e
$sfile_puts->file_puts($of,$cool__99date,'$cool__99date');//���
$sfile_puts->file_puts($of,$cool__99ip,'$cool__99ip');//ip��}
$sfile_puts->file_puts($of,$cool__99true,'$cool__99true');//ip��}
fputs($of,'   ?>');
fclose($of);

header('location:location.php?loc=lmycools');
}else{
header('location:location.php?loc=this__input_error');//�P�w�z��J���r������
}






}else{
header('location:location.php?loc=nothisword');//�z��J�����ҽX���~
}
}

if($kin_go=='�п�J�K�X'){
include('alls/add_121_a.php');
for($i=0;$i<(count($arrays_value__0));$i++){
if($arrays_value__0[$i]==$m_a_t_h_s){
if($pass__ya==$arrays_value__action[$i][9]){
setcookie('pass__ya99',$pass__ya,time()+360000);
echo '<script>
alert("-�K�X���T-");
location.replace("index.php?comes=borad&maths='.$m_a_t_h_s.'#by");
</script>';
}else{
echo '<script>
alert("-�K�X���~-");
location.replace("index.php?comes=borad&maths='.$m_a_t_h_s.'#by");
</script>';
}//�P�w�O�_cookie
}
}//for
}


?>