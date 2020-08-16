<?
/******************************* 
所有的class

紀錄[session]_et->
顏色color_et->
        選擇顏色清單＊　color_select_1(名稱)＊return
		選擇顏色清單＊　color_select_2(名稱,刪除色碼[array])＊return
秀出show_et->
         秀連結清單＊　show_arrays(名稱array,連結array)＊return
		 秀連結清單有表格[直]＊　show_arrays2(名稱array,連結array,css)＊return
		 秀連結清單有表格[橫]＊　show_arrays3(名稱array,連結array,css)＊return	
         秀連結清單有表格 (炫窩狀)＊　show_arrays4(title,名稱array,連結array,css)＊return	
         
         秀導覽列＊　show_king(導覽列到多少[數字array]);	
         存秀出的導覽列＊　show_kings(名稱1[array],連結1[array],名稱2[array],連結2[array]...到5); 
資料庫mysql_et->
        取代字串適合存入資料時做的動作＊　str_re(要取代的字串,要取代的字[array],要更換成啥字[array])＊return
筆記本file_et->
        file讀檔案＊　file_open(網址or路徑)＊return
		寫入檔案[array](未fopen)適合存多個array變數＊　file_puts(開檔案,array,array變數)＊
		寫入檔案[array]＊　file_puts1(開檔案,array,array變數)＊
		寫入檔案[string]＊　file_puts2(開檔案,string)＊	
驗證碼pin_et->
　　　  把數字轉為圖　五碼＊pin_show(驗證碼)＊        
廣告G_et->
      //
　　　   ＊G_show(開啟筆記本,開啟輪流號碼)＊return
         做show的動作 且輪流方式顯示出flash 廣告                                   
												        
　　　   ＊G_moto(開啟筆記本,廣告網址[array],廣告寬[array],廣告高[array])＊return
         做存取flash廣告 高度 寬度 等  資料                                 
												       //

*******************************/













//class      **********顏色**********
class color_et{
var $color_all=array('#000000','#2F2F2F','#353535','#4B4B4B','#666666','#999999','#CCCCCC','#FFFFFF','#FF50A7','#FF5096','#FF5084','#FF5073','#FF5061','#FF5050','#FF6250','#FF7C50','#FF8550','#FF8D50','#FF9650','#FF9F50','#FFA850','#FFB050','#FFB950','#FFC250','#FFCB50','#FFD350','#FFDD78','#FFE478','#FFEB78','#FFF278','#FFF878','#FFFF78'
,'#F8FF78','#F1FF78','#EBFF78','#E4FF78','#DDFF78','#D2FF78','#C0FF78','#AEFF78','#9CFF78','#8AFF78','#78FF78','#78FF8A','#78FF9C',
'#78FFAE','#78FFC0','#78FFD2','#78FFDD','#78FFE4','#78FFEB','#78FFF2','#78FFF8','#78FFFF','#78F8FF','#78F1FF','#78EBFF','#78E4FF','#78DDFF','#78D2FF','#78C0FF','#78AEFF','#789CFF'
,'#788AFF','#7878FF','#8A78FF','#9C78FF','#AE78FF','#C778FF','#D278FF','#DD78FF','#E978FF','#F478FF','#FF78FF','#FF78F4','#FF78E8','#FF78DD','#FF78C7','#FFCC00','#FF9900','#990000','#FF99CC','#164FD3','');
//-----------------------------------------------------


function color_select_1($name='名稱',$p_value='無'){
$return_value='<select name="'.$name.'">';
for($i=0;$i<count($this->color_all);$i++){
if($this->color_all[$i]==$p_value){
$return_value=$return_value.'<option value="'.$this->color_all[$i].'" style="background-color:'.$this->color_all[$i].'" selected>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>';
}else{
$return_value=$return_value.'<option value="'.$this->color_all[$i].'" style="background-color:'.$this->color_all[$i].'" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>';

}
}
$return_value=$return_value.'</select>';
return $return_value;
}//選擇顏色清單 





function color_select_2($name='名稱',$del=array('')){
$num=0;
for($i=0;$i<count($this->color_all);$i++){
   for($ii=0;$ii<count($del);$ii++){
      if($this->color_all[$i]==$del[$ii]){
        $ture_false='true';
       }//if 裡面有要刪除的色碼  就達true
   }//for
   if($ture_false!='true'){
   $color_del[$num]=$this->color_all[$i];
   $num++;
   }else{
   $ture_false='false';
}//重來一次就要再設一次$ture_false
}//刪除color  <= 刪除掉過後的array變數為$color_del

$return_value='<select name="'.$name.'" onChange="color__s1()">';
for($i=0;$i<count($color_del);$i++){
$return_value=$return_value.'<option value="'.$color_del[$i].'" style="background-color:'.$color_del[$i].'" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>';
}
$return_value=$return_value.'</select>';

return $return_value;
}//選擇顏色清單



}
//end class **********顏色**********














//class      **********秀出**********
class show_et{


function show_arrays($words=array('連結'),$http=array('http://')){
for($i=0;$i<count($words);$i++){
$return_value=$return_value.'<a href="'.$http[$i].'" target="blank">'.$words[$i].'</a><br>';
}//end

return $return_value;

}//end 秀連結清單



function show_arrays2($words=array('連結'),$http=array('http://'),$css='style'){
echo '<table width="30" height="30" border="0" cellpadding="1" cellspacing="1">';
for($i=0;$i<count($words);$i++){
 echo'<tr>
      <td nowrap class="'.$css.'"><a href="'.$http[$i].'" target="main">'.$words[$i].'</a></td>
      </tr>';
}//for
echo '</table>';
}//end 秀連結清單有表格(直)



function show_arrays3($words=array('連結'),$http=array('http://'),$css='style'){
echo '<table width="30" height="30" border="0" cellpadding="3" cellspacing="3">';
echo'<tr>';
for($i=0;$i<count($words);$i++){
echo '<td nowrap class="'.$css.'"><a href="'.$http[$i].'" target="blank">'.$words[$i].'</a></td>';
      }//for
echo '</tr>';
echo '</table>';
}//end 秀連結清單有表格(橫)


function show_arrays4($title,$words=array('連結'),$http=array('http://'),$css='style'){
echo'<script language="javascript">
function go_self(){
location.replace("login_pass.php");
}//end

</script>';
echo '<table  height="30" border="0" cellpadding="3" cellspacing="3">';
echo '<tr><td>'.$title.'<td></tr>';

for($i=0;$i<count($words);$i++){
echo'<tr>';
echo '<td nowrap class="'.$css.'"> &gt;&gt; <a href="'.$http[$i].'" target="miss" onClick="go_self()">'.$words[$i].'</a></td>';
echo '</tr>';      
}//for

echo '</table>';
}//end 秀連結選單 炫窩是的

function show_arrays5($title,$words=array('連結'),$http=array('http://'),$numss,$dels_true){
echo'<script language="javascript">
function go_self(){
location.replace("login_pass.php");
}//end

</script>';
echo '<table height="30" border="0" cellpadding="0" cellspacing="4">';
echo '<tr><td nowrap>'.$title.'</td></tr>';

for($i=0;$i<count($words);$i++){
if($dels_true[$i]!='@刪除不顯示#' && $dels_true[$i]!='@已刪除無法顯示#' && $dels_true[$i]=='@無刪除#'){
echo'<tr>';
echo '<td nowrap > &gt;&gt; <a href="login_bodys.php?ppiinnss=293&check_se='.$numss[$i].'" target="miss" onClick="go_self()">'.$words[$i].'&nbsp;</a></td>  <td nowrap class="'.$css.'"> <a href="login_bodys.php?ppiinnss=219&targets='.$numss[$i].'" target="miss" onClick="go_self()">[編輯] </a></td>';
echo '</tr>';      
}//ENＤ
}//for

echo '</table>';
}//end 秀連結選單 炫窩是的



//--------
var $fr;

var $center;

var $center2;

var $center3;

var $last;

//--------存導覽列
function show_king($body){
/*
總共只給五個array
*/
echo'您現在的位址：';
for($i=0;$i<count($body);$i++){
switch($i){
case 0:
       $words=$this->fr;break;
case 1:
       $words=$this->center;break;	 
case 2:
       $words=$this->center2;break;
case 3:
       $words=$this->center3;break;
case 4:
       $words=$this->last;break; 
}


if($i!=(count($body)-1)){
echo $words[$body[$i]];
echo ' > ';
}else{
echo $words[$body[$i]];

}

}//判定大ａｒｒａｙ

}//end　旅遊導覽列



function  show_kings($a=array(''),$b=array(''),$c=array(''),$d=array(''),$e=array('')){
//$a='名稱';
//$aa='網址';


$this->fr=$a;//-------------$a


$this->center=$b;//------------$b


$this->center2=$c;//----------$c


$this->center3=$d;//----------$d


$this->last=$e;//-----------$e
}//end 導覽列存變數

}
//end class **********秀出**********















//class      **********筆記本**********
class file_et{

function file_open($files='網址'){
$foreach_for=file($files);
foreach($foreach_for as $value){
$retrun_value=$retrun_value.$value;
}//讀出來的資料是array　所以要ｆｏｒ

return $retrun_value;
}//end 開啟筆記本 

function file_puts($https,$array,$value_name){
fputs($https,'
');
$bos=$value_name.'=array(';
fputs($https,$bos);
for($i=0;$i<count($array);$i++){
if($i!=(count($array)-1)){
$array[$i]=str_replace('\\','\\\\',$array[$i]);
}
fputs($https,"'".$array[$i]."'");

if($i!=count($array)-1){
fputs($https,',');
}//if
}//for

fputs($https,'); 
');

}//簡易存入  非fopen

function file_putssaa1($https,$array,$array_value){
fputs($https,'
');
$bos=$array_value.'=array(';
fputs($https,$bos);


for($i=0;$i<count($array);$i++){
fputs($https,$i.'=>array(');
for($kk=0;$kk<7;$kk++){
fputs($https,"'".$array[$i][$kk]."'");

if($kk<6){
fputs($https,',');
}else{
fputs($https,')');
}//if
}//**
if($i!=count($array)-1){
fputs($https,',');
}else{
fputs($https,');');
}//if*
}

}//簡易存入  非fopen

function file_putssa($https,$array,$array_value){
fputs($https,'
');
$bos=$array_value.'=array(';
fputs($https,$bos);


for($i=0;$i<count($array);$i++){
fputs($https,$i.'=>array(');
for($kk=0;$kk<10;$kk++){
fputs($https,"'".$array[$i][$kk]."'");

if($kk<9){
fputs($https,',');
}else{
fputs($https,')');
}//if
}//**
if($i!=count($array)-1){
fputs($https,',');
}else{
fputs($https,');');
}//if*
}

}//簡易存入  非fopen




function file_puts1($https,$array,$value_name){
$fo=fopen($https,'w+');
$bos='<? '.$value_name.'=array(';
fputs($fo,$bos);

for($i=0;$i<count($array);$i++){
fputs($fo,'"'.$array[$i].'"');

if($i!=count($array)-1){
fputs($fo,',');
}
}//for
fputs($fo,'); ?>');
fclose($fo);
}//寫入array [記錄檔案]

function file_puts2($https,$string){
$fo=fopen($https,'w+');
fputs($fo,$string);
fclose($fo);
}//寫入string [存html碼]



}
//end class **********筆記本**********

















//class      **********資料庫**********
class mysql_et{
function str_re_go($word,$del_a=array("'",'"','<','>'),$del_b=array('','&quot;','&lt;','&gt;')){
$word_a=$word;
for($i=0;$i<(count($del_a));$i++){
$word_a=str_replace($del_a[$i],$del_b[$i],$word_a);
}//取代

return $word_a;
}//取代ｓｔｒ＿ｒｅｐｌａｃｅ


function str_re($word,$del_a=array('&',"'",'"','<','>',"\\"),$del_b=array('&amp;','','&quot;','&lt;','&gt;',"\\\\")){
$word_a=$word;
for($i=0;$i<(count($del_a));$i++){
$word_a=str_replace($del_a[$i],$del_b[$i],$word_a);
}//取代

return $word_a;
}//取代ｓｔｒ＿ｒｅｐｌａｃｅ




function nums_p($w){
switch($w){
case 'No':$true_num='No';break;
case 'no':$true_num='No';break;
case 'nO':$true_num='No';break;
case 'NO':$true_num='No';break;
case 1:$true_num=1;break;
case 2:$true_num=2;break;
case 3:$true_num=3;break;
case 4:$true_num=4;break;
case 5:$true_num=5;break;
case 6:$true_num=6;break;
case 7:$true_num=7;break;
case 8:$true_num=8;break;
case 9:$true_num=9;break;
case 10:$true_num=10;break;
case 11:$true_num=11;break;
case 12:$true_num=12;break;
case 13:$true_num=13;break;
case 14:$true_num=14;break;
case 15:$true_num=15;break;
case 16:$true_num=16;break;
case 17:$true_num=17;break;
case 18:$true_num=18;break;
case 19:$true_num=19;break;
case 20:$true_num=20;break;
case 21:$true_num=21;break;
case 22:$true_num=22;break;
case 23:$true_num=23;break;
case 24:$true_num=24;break;
case 25:$true_num=25;break;
default:$true_num=25;break;
}
return $true_num;
}


}
//end class **********資料庫**********




//class      **********驗證碼**********
class pin_et{
var $a;
var $b;
var $c;
var $d;
//--------------存入器
function bgcolor($img){
for($i=0;$i<15;$i++){
$colors=imagecolorallocate($img, 221, 222, 255);
$add+=10;
imageline($img,0+$add,0,0+$add,70,$colors);
}//for

for($i=0;$i<15;$i++){
$colors=imagecolorallocate($img, 221, 222, 255);
$add_s+=10;
imageline($img,0,0+$add_s,150,0+$add_s,$colors);
}//for


//---------　4　邊

$colors=imagecolorallocate($img, 0, 0, 0);
imageline($img,0,0,150,0,$colors);//top
imageline($img,0,0,0,70,$colors);//left
imageline($img,149,0,149,70,$colors);//down
imageline($img,0,69,149,69,$colors);//down
//---------
}//背景




function line_array($img,$sizes){
$color_switch=rand(1,5);
switch($color_switch){
case 1:$color=imagecolorallocate($img, 255, 204, 0);break;
case 2:$color=imagecolorallocate($img, 102, 103, 255);break;
case 3:$color=imagecolorallocate($img, 153, 0, 0);break;
case 4:$color=imagecolorallocate($img, 255, 153, 255);break;
case 5:$color=imagecolorallocate($img, 102, 102, 102);break;
}
//---------------
$size=25;//距離
$moto=15;//-距離
$up=rand(-10,10);
for($i=0;$i<(count($this->a));$i++){
imageline($img,$this->a[$i]+($size*$sizes)-$moto,$this->b[$i]+$up,$this->c[$i]+($size*$sizes)-$moto,$this->d[$i]+$up,$color);
imageline($img,$this->a[$i]+($size*$sizes)-$moto+1,$this->b[$i]+1+$up,$this->c[$i]+($size*$sizes)-$moto+1,$this->d[$i]+1+$up,$color);
imageline($img,$this->a[$i]+($size*$sizes)-$moto-1,$this->b[$i]-1+$up,$this->c[$i]+($size*$sizes)-$moto-1,$this->d[$i]-1+$up,$color);
imageline($img,$this->a[$i]+($size*$sizes)-$moto-2,$this->b[$i]-2+$up,$this->c[$i]+($size*$sizes)-$moto-2,$this->d[$i]-2+$up,$color);
}//for
}//end array填寫筆劃　畫圖




function pin_switch($num){
switch($num){
case '0':$this->a=array(29,45,29,28);
       $this->b=array(20,20,20,50);
       $this->c=array(28,49,45,48);
       $this->d=array(50,50,20,50);break;
	   
case '1':$this->a=array(29,29,29);
       $this->b=array(25,25,25);
       $this->c=array(28,28,28);
       $this->d=array(50,50,50);break;
	   
case '2':$this->a=array(32,20,20);
       $this->b=array(32,32,50);
       $this->c=array(20,32,40);
       $this->d=array(50,32,40);break;
	   
case '3':$this->a=array(20,35,20,40);
       $this->b=array(30,32,40,44);
       $this->c=array(35,20,40,20);
       $this->d=array(32,40,44,50);break;
	   	   	   
case '4':$this->a=array(29,24,32);
       $this->b=array(25,40,25);
       $this->c=array(24,39,30);
       $this->d=array(40,40,48);break;
	   	   
case '5':$this->a=array(21,21,23,37,43);
       $this->b=array(23,23,37,33,33);
       $this->c=array(38,23,37,43,37);
       $this->d=array(20,37,33,33,50);break;
	   
case '6':$this->a=array(29,28,40,40);
       $this->b=array(30,50,50,40);
       $this->c=array(28,40,40,30);
       $this->d=array(50,50,44,40);break;
	   
case '7':$this->a=array(43,29,29);
       $this->b=array(20,20,20);
       $this->c=array(40,45,29);
       $this->d=array(45,20,30);break;
	   
case '8':$this->a=array(34,28,40,40,40,40);
       $this->b=array(20,50,50,40,25,25);
       $this->c=array(28,40,40,30,40,29);
       $this->d=array(50,50,40,40,50,20);break;
	   	   	   
case '9':$this->a=array(43,29,29,29);
       $this->b=array(20,20,20,32);
       $this->c=array(40,45,29,40);
       $this->d=array(50,20,32,30);break;	   

}//end switch
}//end 









function pin_show($word_pin){
$img = imagecreate(150, 70);
imagecolorallocate($img, 255, 255, 255);
$this->bgcolor($img);
for($i=0;$i<5;$i++){

$this->pin_switch($word_pin[$i]);
$this->line_array($img,$i);
}//end　圖片編寫完成

//************************************
header("Content-type: image/png");
imagepng($img);
imagedestroy($img);
//************************************
}//end　做到只要一個函數　就可以寫出圖片




}
//end class **********驗證碼**********











//clas      **********廣告**********
class G_et extends file_et{
function G_show($file='開啟筆記本',$file_num='開啟筆記本查幾號'){
include($file);
$num_file=parent::file_open($file_num);
if($num_file<(count($g_array_http))-1){
$num_file++;
}else{
$num_file='0';
}
$return_value='<embed src="'.$g_array_http[$num_file].'" width="'.$g_array_w[$num_file].'" height="'.$g_array_h[$num_file].'">';
//------ 下方開啟寫入


parent::file_puts2($file_num,$num_file);

return $return_value;
}//end 目前Show出檔案 [做完]



function G_moto($file='開啟筆記本',$g_array_http='廣告網址',$g_array_w='寬',$g_array_h='高'){

$fo=fopen($file,'w+');
fputs($fo,'<?  ');
parent::file_puts($fo,$g_array_http,'$g_array_http');
parent::file_puts($fo,$g_array_w,'$g_array_w');
parent::file_puts($fo,$g_array_h,'$g_array_h');
fputs($fo,' ?>');
fclose($fo);
}//end 存檔案 [做完]





}
//end class  **********廣告**********


?>