<?

switch($kinsy){
case 'add__borad':$kin_go='新增留言';break;
case 'add__thisword':$kin_go='新增回覆文章';break;
case 'add__mycool':$kin_go='新增來信';break;
case 'add__passwords':$kin_go='請輸入密碼';break;
}

if($kin_go=='新增留言'){
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
$num_add=count($array_borads__num);//新增的array[$i]
$array_borads__num[$num_add]=$fater__num;//父編號

$array_borads__num_pass[$num_add]=$pin_box;//pass編號

$array_borads__name[$num_add]=$name_box;//name
if($boy_box=='男'){
$boy_box='男';
}else{
$boy_box='女';
}
$array_borads__boy[$num_add]=$boy_box;//性別

$array_borads__color[$num_add]=$color_box;//顏色


$array_borads__date[$num_add]=date('Y-m-d H:i');//時間

$array_borads__ip[$num_add]=$REMOTE_ADDR;//ip
$array_borads__img[$num_add]=$select__img;//圖片
$array_borads__body[$num_add]=$body_box;//內容

fputs($of,'<?   ');
$sfile_puts->file_puts($of,$array_borads__num,'$array_borads__num');//編號
$sfile_puts->file_puts($of,$array_borads__num_pass,'$array_borads__num_pass');//驗證碼
$sfile_puts->file_puts($of,$array_borads__name,'$array_borads__name');//暱稱
$sfile_puts->file_puts($of,$array_borads__boy,'$array_borads__boy');//性別
$sfile_puts->file_puts($of,$array_borads__color,'$array_borads__color');//顏色
$sfile_puts->file_puts($of,$array_borads__date,'$array_borads__date');//日期
$sfile_puts->file_puts($of,$array_borads__ip,'$array_borads__ip');//ip位址
$sfile_puts->file_puts($of,$array_borads__img,'$array_borads__img');//留言內容
$sfile_puts->file_puts($of,$array_borads__body,'$array_borads__body');//留言內容
fputs($of,'   ?>');
fclose($of);
header('location:location.php?loc=lborad&nums='.($array_borads__num[$num_add]));
}else{
header('location:location.php?loc=noborad');//您輸入的驗證碼錯誤
}//if

}else{
header('location:location.php?loc=this__input_error');//您輸入字元不對
}
}else{
header('location:location.php?loc=this__all_add_up');//滿人
}

}//end





if($kin_go=='新增回覆文章'){
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
$this_pin='已經重複到嚕';
}
}

if($this_pin!='已經重複到嚕' && $this_pin==$val__fun_pin){
$re__plac=new mysql_et;
$this_name=$re__plac->str_re($this_name);
$this_body=$re__plac->str_re($this_body);
$this_father=$re__plac->str_re($this_father);
$this_fathers=$re__plac->str_re($this_fathers);

if(strlen($this_body)>=5  && strlen($this_body)<=200 && strlen($this_name)>=3 && strlen($this_name)<=24 ){
$of=fopen('alls/add_thisword.php','w+');
$num_add=count($add__thisword__num);//新增的array[$i]

$add__thisword__nums[$num_add]=$this_fathers;//父類別

$add__thisword__num[$num_add]=$this_father;//子類別

$add__thisword__pass[$num_add]=$this_pin;//驗證碼

$add__thisword__name[$num_add]=$this_name;//暱稱

$add__thisword__body[$num_add]=$this_body;//內容

$add__thisword__date[$num_add]=date('Y/m/d H:i');//日期

$add__thisword__ip[$num_add]=$REMOTE_ADDR;//ip

fputs($of,'<?   ');
$sfile_puts->file_puts($of,$add__thisword__num,'$add__thisword__num');//編號
$sfile_puts->file_puts($of,$add__thisword__nums,'$add__thisword__nums');//編號
$sfile_puts->file_puts($of,$add__thisword__pass,'$add__thisword__pass');//驗證碼
$sfile_puts->file_puts($of,$add__thisword__name,'$add__thisword__name');//暱稱
$sfile_puts->file_puts($of,$add__thisword__body,'$add__thisword__body');//內容
$sfile_puts->file_puts($of,$add__thisword__date,'$add__thisword__date');//日期
$sfile_puts->file_puts($of,$add__thisword__ip,'$add__thisword__ip');//ip位址
fputs($of,'   ?>');
fclose($of);

header('location:location.php?loc=lthisword&mothss='.$add__thisword__num[$num_add].'&hots='.$add__thisword__nums[$num_add]);

}else{
header('location:location.php?loc=this__input_error');
}//判定是否字元正確


}else{
header('location:location.php?loc=nothisword');//您輸入的驗證碼錯誤
}

}else{
header('location:location.php?loc=this__all_add_up');//判定此篇文章是否已滿人嚕
}
}








if($kin_go=='新增來信'){
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
$this_pin='已經重複到嚕';
}
}

if($this_pin!='已經重複到嚕' && $this_pin==$val__fun_pin){

$re__plac=new mysql_et;
$cool_name=$re__plac->str_re($cool_name);
$cool_title=$re__plac->str_re($cool_title);
$cool_body=$re__plac->str_re($cool_body);
if(strlen($cool_name)>=3 && strlen($cool_name)<=24 && strlen($cool_title)>=4 && strlen($cool_title)<=60  && strlen($cool_body)>=15 && strlen($cool_body)<=1200){
$of=fopen('alls/add_mycool.php','w+');
$num_add=count($cool__99name);//新增的array[$i]

$cool__99name[$num_add]=$cool_name;//暱稱

$cool__99num[$num_add]=$this_pin;//密碼編號
if($cool_boy=='男'){
$cool_boy='男';
}else{
$cool_boy='女';
}
$cool__99boy[$num_add]=$cool_boy;//性別

$cool__99title[$num_add]=$cool_title;//標題

$cool__99body[$num_add]=$cool_body;//內容

$cool__99ip[$num_add]=$REMOTE_ADDR;//ip

$cool__99date[$num_add]=date('Y-m-d H:i');//時間

$cool__99true[$num_add]='1';//閱讀

fputs($of,'<?   ');
$sfile_puts->file_puts($of,$cool__99name,'$cool__99name');//暱稱
$sfile_puts->file_puts($of,$cool__99num,'$cool__99num');//驗證碼
$sfile_puts->file_puts($of,$cool__99boy,'$cool__99boy');//性別
$sfile_puts->file_puts($of,$cool__99title,'$cool__99title');//標題
$sfile_puts->file_puts($of,$cool__99body,'$cool__99body');//內容
$sfile_puts->file_puts($of,$cool__99date,'$cool__99date');//日期
$sfile_puts->file_puts($of,$cool__99ip,'$cool__99ip');//ip位址
$sfile_puts->file_puts($of,$cool__99true,'$cool__99true');//ip位址
fputs($of,'   ?>');
fclose($of);

header('location:location.php?loc=lmycools');
}else{
header('location:location.php?loc=this__input_error');//判定您輸入的字元不對
}






}else{
header('location:location.php?loc=nothisword');//您輸入的驗證碼錯誤
}
}

if($kin_go=='請輸入密碼'){
include('alls/add_121_a.php');
for($i=0;$i<(count($arrays_value__0));$i++){
if($arrays_value__0[$i]==$m_a_t_h_s){
if($pass__ya==$arrays_value__action[$i][9]){
setcookie('pass__ya99',$pass__ya,time()+360000);
echo '<script>
alert("-密碼正確-");
location.replace("index.php?comes=borad&maths='.$m_a_t_h_s.'#by");
</script>';
}else{
echo '<script>
alert("-密碼錯誤-");
location.replace("index.php?comes=borad&maths='.$m_a_t_h_s.'#by");
</script>';
}//判定是否cookie
}
}//for
}


?>