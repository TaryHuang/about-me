<?
$this_blog_birthday='20090901'; 
$this_blog_model='G.B引擎 2.0'; 
	


function date_change($date,$fun=''){
	$y=substr($date,0,4);
	$m=substr($date,4,2);
	$d=substr($date,6,2);
	$h=substr($date,8,2);
	$i=substr($date,10,2);
	$s=substr($date,12,2);
if($fun!=''){
$d=(int)($d);
$m=(int)($m);
}

if($fun==2 || $fun==6 || $fun==10){
switch($m){
	case 1:$m="January";break;
	case 2:$m="February";break;
	case 3:$m="March";break;
	case 4:$m="April";break;
	case 5:$m="May";break;
	case 6:$m="June";break;
	case 7:$m="July";break;
	case 8:$m="August";break;
	case 9:$m="September";break;
	case 10:$m="October";break;
	case 11:$m="November";break;
	case 12:$m="December";break;
}
}//end if

if($fun==3 || $fun==7 || $fun==11){

switch($m){
	case 1:$m="Jan";break;
	case 2:$m="Feb";break;
	case 3:$m="Mar";break;
	case 4:$m="Apr";break;
	case 5:$m="May";break;
	case 6:$m="Jun";break;
	case 7:$m="Jul";break;
	case 8:$m="Aug";break;
	case 9:$m="Sep";break;
	case 10:$m="Oct";break;
	case 11:$m="Nov";break;
	case 12:$m="Dec";break;
}
}

if($fun==1){
	return "$y-$m-$d $h:$i";
}else if($fun==2){
	return "$m $d, $y $h:$i";
}else if($fun==3){
	return "$h:$i, $m $d, $y ";
}else if($fun==4){
	return "$y/$m/$d ";
}else if($fun==5){
	return "$y-$m-$d ";
}else if($fun==6){	
	return "$m $d, $y ";
}else if($fun==7){	
	return "$m $d, $y ";
}else if($fun==8){	
	return "$m/$d $h:$i";
}else if($fun==9){	
	return "$m-$d $h:$i";
}else if($fun==10){	
	return "$m $d $h:$i";
}else if($fun==11){	
	return "$m $d $h:$i";
}else{
	return "$y/$m/$d $h:$i";
}//if


}//function





function clean_html_str($str){	
	$str=trim($str);
	$str=str_replace("'","",$str);
	$str=str_replace('"',"",$str);
	$str=str_replace('\\',"",$str);
	return $str;
}
function clean_html_str2($str){	
	$str=trim($str);
	$str=str_replace("<","",$str);
	$str=str_replace(">","",$str);
	$str=str_replace("'","",$str);
	$str=str_replace('"',"",$str);
	$str=str_replace('\\',"",$str);
	return $str;
}

function show_html_str($str){
	$str=htmlspecialchars($str);
	$str=nl2br($str);
	return $str;
}

function show_message($str,$loc=1){
//loc=1前端,0等於後端
if($loc==0){
	$t='../';
}else{
	$t='';
}
	$str=str_replace("{#01}",'<img src="'.$t.'images/1.gif">',$str);
	$str=str_replace("{#02}",'<img src="'.$t.'images/2.gif">',$str);
	$str=str_replace("{#03}",'<img src="'.$t.'images/3.gif">',$str);
	$str=str_replace("{#04}",'<img src="'.$t.'images/4.gif">',$str);
	$str=str_replace("{#05}",'<img src="'.$t.'images/5.gif">',$str);
	$str=str_replace("{#06}",'<img src="'.$t.'images/6.gif">',$str);
	$str=str_replace("{#07}",'<img src="'.$t.'images/7.gif">',$str);
	$str=str_replace("{#08}",'<img src="'.$t.'images/8.gif">',$str);

	return $str;
}


function strlen_ban($str,$num_a=2,$num_z=200){
	if(strlen($str)>=$num_a && strlen($str)<=$num_z)
		return true;
	else
		return false;
}

//------------------------------



function chk_text($str){
$v=25;
if(strlen($str)<=$v){
return true;
}
$num=(int)(strlen($str)/$v);
if((int)(strlen($str)%$v)!=0)
	$num++;

for($i=0;$i<($num);$i++){
$a1=$i*$v;

$an=($i+1)*$v;
	if($an>=strlen($str)){
	$an=strlen($str);
	$v=$an;
	}
	$fun="^[a-zA-Z0-9_~!@#$%^&*()+={}?:<>,`]{".$v."}$";//請輸入英文或數字 6~15個字 可做申請帳號
	if(ereg($fun,substr($str,$a1,$v))){
	return false;
	}
}
return true;
}//傳回true/false


function chk_value($str,$fun_num){
switch($fun_num){
case 0:$fun="^[0-9a-fA-F]{4,5}$";break;
case 1:$fun="^[a-zA-Z0-9_]{0,8}$";break;
default:$fun="^$";
}
	if(ereg($fun,$str)){
	return true;
	}else{
	return false;
	}
}//傳回true/false


function file_show($loc,$s='1'){
	$f=@file($loc);
		if($s=='0'){
			for($i=0;$i<count($f);$i++){
			echo show_html_str($f[$i]);	
			}
		}else{
			for($i=0;$i<count($f);$i++){
			echo $f[$i];	
			}
		}
}

?>