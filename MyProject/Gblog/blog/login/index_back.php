<?
	session_start();
	@require("../database_link.php");//載路檔案
	@require("../".$database_link__function."/pass.php");//載路檔案
if($_SESSION[open_login_id]!=$blog_login_id || $_SESSION[open_login_pass]!=$blog_login_pass){
	echo '- 無法讀取 -';
	exit();
}
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?	
	@require("../".$database_link__function."/ctrl.php");//載路檔案
	@require("../".$database_link__div."/div_ctrl.php");//載路檔案
	@require("../".$database_link__div."/div_pin.php");//載路檔案
	if($back_index_chk==1){
for($i=0;$i<count($div__pin);$i++){
	if($div__loc[$i]=='index' && $div__sort[$i]=='0'){
	if('../'.is_file($database_link__div."/".$div__pin[$i])){
		file_show('../'.$database_link__div."/".$div__pin[$i]);
	}else{
	echo '<h3>檔案已遺失...</h3>';
	}
	}
}//for
		exit();
	}

function check_filesize($array,$loc){
$num=0;//size  loc=目錄
	for($i=0;$i<count($array);$i++){
		$num+=@filesize($loc.$array[$i]);
	}
	return $num;
}	
	
	
$action=$_GET['action'];
if($action=='check'){
function chk_document(){
global $database_link__document,$document_id_pin,$document_id_title,$document_id_sort,$document_sort_pin;
$dirdata=opendir("../".$database_link__document.'/');
$box=0;//array
$box_array;
while ($file = readdir($dirdata)) {
if($file=='.' || $file=='..'){
continue ;
}
		$filename=strrchr($file, '.php');
		if($filename!='.php'){
			if(!@in_array($file,$document_id_pin)){
			$box_array[]='文章資料庫中 [ '.$file.' ] 神秘的檔案．．';
			}
		}
}
closedir($dirdata);
		for($i=0;$i<count($document_id_pin);$i++){
			if(!is_file("../".$database_link__document.'/'.$document_id_pin[$i])){
					$box_array[]='文章資料庫中 [ '.$document_id_title[$i].' ] 文章遺失．．';	
			}
			if(!@in_array($document_id_sort[$i],$document_sort_pin)){
					$box_array[]='文章資料庫中 [ '.$document_id_title[$i].' ] ．．．<ol>找不到分類對象! =口=....系統直呼太扯啦</ol>';	
			}
		}
		return $box_array;
}


function chk_message(){
global $database_link__message,$leave_message_pin,$leave_message_document,$document_id_pin;
$dirdata=opendir("../".$database_link__message.'/');
$box_array;
while ($file = readdir($dirdata)) {
if($file=='.' || $file=='..'){
continue ;
}
		$filename=strrchr($file, '.php');
		if($filename!='.php' &&  strlen($file)>=6){
			if(!@in_array($file,$leave_message_pin)){
				$box_array[]='留言資料庫中 [ '.$file.' ] 莫名的留言．．';
			}
		}
}
closedir($dirdata);
		for($i=0;$i<count($leave_message_pin);$i++){
			if(!is_file("../".$database_link__message.'/'.$leave_message_pin[$i])){
					$box_array[]='留言資料庫中 [ 編號 : '.$leave_message_pin[$i].' ] 已遺失..';
			}
			if(!@in_array($leave_message_document[$i],$document_id_pin)){
					$box_array[]='留言資料庫中 [ 編號 : '.$leave_message_pin[$i].' ] ．．<ol>找沒有! 要留言的文章! =口=．．昏倒!</ol>';	
			}
		}
return $box_array;
}


function chk_reply(){
global $database_link__message,$back_reply_message_pin,$leave_message_pin,$back_reply_message_pinx;
$dirdata=opendir("../".$database_link__message.'/');
$box_array;
while ($file = readdir($dirdata)) {
if($file=='.' || $file=='..'){
continue ;
}
		$filename=strrchr($file, '.php');
		if($filename!='.php' &&  strlen($file)<=5){
			if(!@in_array($file,$back_reply_message_pin)){
				$box_array[]='回覆資料庫中 [ '.$file.' ] 有封! 無名的訊息．．';
			}
		}
}
closedir($dirdata);
	if(count($back_reply_message_pin)==$box){
		return $box_array;
	}else{
		for($i=0;$i<count($back_reply_message_pin);$i++){
			if(!is_file("../".$database_link__message.'/'.$back_reply_message_pin[$i])){
					$box_array[]='回覆資料庫中 [ 編號 : '.$back_reply_message_pin[$i].' ] 莫名的消失了 ...';
			}
			if(!@in_array($back_reply_message_pinx[$i],$leave_message_pin)){
					$box_array[]='回覆資料庫中 [ 編號 : '.$back_reply_message_pin[$i].' ] 不知道在對誰.. 說些什麼...';
			}
		}
		return $box_array;
	}
}



function floats($num,$user=0){
	if($num>=1024){
		$num1=(int)($num/1024);
		if(($num%1024)>=512){
			$num1+=1;
		}

	if($user==1){
	return $num1;
	}else{
	return '　約 : '.$num1.' Kb';
	}	
	}
}

function birthdays($date){
	$y=substr($date,0,4);
	$m=substr($date,4,2);
	$d=substr($date,6,2);
	return "$y / $m / $d";
}

function use_month($date){
	$y=substr($date,0,4);
	$m=substr($date,4,2);
	$d=substr($date,6,2);
	
	$t_y=date("Y");
	$t_m=date("m");
	$t_d=date("d");
	
	if(($t_d-$d)>=0)
		$num=1;
	else
		$num=0;
	$num+=((($t_y-$y)*12)+($t_m-$m));
return $num;
}
		@require("../".$database_link__document."/document_sort.php");//載路檔案
		@require("../".$database_link__document."/document_id.php");//載路檔案
		@require("../".$database_link__message."/leave_message.php");//載路檔案
		@require("../".$database_link__message."/reply_message.php");//載路檔案	
$num_document=check_filesize($document_id_pin,"../".$database_link__document.'/');
$num_message=check_filesize($leave_message_pin,"../".$database_link__message.'/');
$num_reply=check_filesize($back_reply_message_pin,"../".$database_link__message.'/');
$total=floats($num_document,1)+floats($num_message,1)+floats($num_reply,1);
		echo '<div class="back_div">';
		echo '型號 : '.$this_blog_model.'<br>';
		echo '出場 : '.birthdays($this_blog_birthday).'<BR>';
		echo '啟動引擎 : '.birthdays($this_user_day).'<BR>';
		echo '使用月齡 : '.use_month($this_user_day).' 個月<BR>';
		echo '文章總數 : '.(count($document_id_pin)).' 筆 ， 容量 : '.$num_document.' 位元組 '.floats($num_document).'<br>';
		echo '留言總數 : '.(count($leave_message_pin)).' 筆 ， 容量 : '.$num_message.' 位元組 '.floats($num_message).'<br>';
		echo '回覆總數 : '.(count($back_reply_message_pin)).' 筆 ， 容量 : '.$num_reply.' 位元組 '.floats($num_reply).'<BR>';
		echo '共 '.((count($document_id_pin))+(count($leave_message_pin))+(count($back_reply_message_pin))).' 筆資料 ，  ';
		if($total!=0){
		echo '總容量 約 : '.$total.' Kb';
		}else{
		echo '總容量 約 : 0 Kb';
		}
		echo '<div class="right">'.date('F').' '.(int)(date('d')).' , '.date('Y').'</div>';
		echo '</div>';
echo '<div class="back_div">';
echo '<H3>檢 測 報 告</H3>';



echo '<ol>';
$array_message=(array)chk_message();
$array_document=(array)chk_document();
$array_reply=(array)chk_reply();
$array_all= array_merge($array_message,$array_document,$array_reply);
shuffle($array_all);
for($i=0;$i<count($array_all);$i++){
	echo '<li>'.$array_all[$i].'</li>';
}
echo '</ol>';

if(count($array_all)==0 && use_month($this_user_day)<=6 && (count($document_id_pin)<=80)  && (count($leave_message_pin))<=200){
echo '<h1 class="right">健&nbsp;&nbsp;康 &nbsp;&nbsp;</h1>';
$say_num=0;
}else if(count($array_all)==0){
$say_num=1;
echo '<h1 class="right">正&nbsp;&nbsp;常 &nbsp;&nbsp;</h1>';
}else if(count($array_all)<=5){
$say_num=2;
echo '<h1 class="right">小&nbsp;感&nbsp;冒</h1>';
}else{
$say_num=3;
echo '<h1 class="right">生&nbsp;&nbsp;病&nbsp;&nbsp;</h1>';
}

echo '<div class="back_div">';
echo '<H3>評 語</H3>';
echo '<ol>';
$say_number=rand(1,5);
if($say_number==1){
	if(use_month($this_blog_birthday)<24){
	echo '本系統 ! 很高興滴~為您做任何服務 ^_^<br><br>';
	}else if(use_month($this_blog_birthday)>=24 && use_month($this_blog_birthday)<=30){
	echo '系統型號 - 似乎有2年了..再次感謝您的支持...<br><br>';
	}else if(use_month($this_blog_birthday)>30 && use_month($this_blog_birthday)<=45){
	echo '系統型號 - 似乎有點年紀了...<br><br>';
	}else if(use_month($this_blog_birthday)>45){
	echo '系統年代已久...是否有更新的版本 ?<br><br>';
	}
}

if($say_num==0){
	echo '您的資料庫非常健康。<br>';
	$rands=rand(1,8);
	switch($rands){
	case 1:echo '似乎可吞下整片大海...';break;
		case 2:echo '健康得令人難以置信...';break;
			case 3:echo '主人我願意跟隨您左右...';break;
				case 4:echo '一天疊一點.. 我站的和大樹一樣高...';break;
					case 5:echo '自私的最高藝術.. 就是對健康自私....';break;
						case 6:echo '能為您工作.. 我真的感到榮幸...';break;
							case 7:echo '主人..我已強的無法取代...';	break;
								case 8:echo '有容乃大...我需要更多的文章';break;
	}
	$button=0;
}
if($say_num==1){
	echo '您的資料庫正常運作中。<br>';
if(use_month($this_user_day)<=6){
	echo '一點一滴壯大中...<BR>';
}else{
	echo '資料庫似乎已使用了很久...<BR>';
}
	$rands=rand(1,6);
	switch($rands){
	case 1:echo '主人! 請再多給我一點資料吧 !!';break;
		case 2:echo '我願用一切達到...近乎完美';break;
			case 3:echo '走在黑色與白色之間的...灰色';break;
				case 4:echo '我是您的出氣筒..我願為您發洩您生活的不悅...';break;
					case 5:echo '我不要求完美..也不喪失自我.. 主人的話 我願意聽從..';break;
						case 6:echo '有容乃大...我需要更多的文章';break;
	}
	$button=0;
}


if($say_num==2){
	echo '您的資料庫有點小感冒唷。<br>';
if(use_month($this_user_day)<=6){
	echo '資料庫正在壯大中...<BR>';
}else{
	echo '資料庫似乎有點年紀了...<BR>';
}
	$rands=rand(1,6);
	switch($rands){
	case 1:echo '一切的一切..都得等到我感冒好...';break;
		case 2:echo '小感冒...吹不倒我滴~';break;
			case 3:echo '休息的下一步..我們該往哪兒走!?';break;
				case 4:echo '停下腳步...請回味您所存入的資料吧...';break;
					case 5:echo '今天的休息..是為了成就以後更偉大的事情...';break;
						case 6:echo '我沒事的..請不用為我擔心...';break;

	}
	$button=1;
}


if($say_num==3){
	echo '您的資料庫似乎得了重病。 抑或...<br>';
if(use_month($this_user_day)>=6){
	echo '資料庫似乎用了很久也...<BR>';
}
	$rands=rand(1,8);
	switch($rands){
	case 1:echo '我的日子..不多了';break;
		case 2:echo '請好好的愛護我吧 主人!';break;
			case 3:echo '休息之後...我該怎麼走呢!?';break;
				case 4:echo '我需要更多幫助..及主人的愛...';break;
					case 5:echo '您是否還愛我呢!?';break;
						case 6:echo '我..我...我休已..';break;
							case 7:echo '得了重病.. 我還能動嗎!?';break;
								case 8:echo '我沒事的..請不用為我擔心...';break;
	}
	$button=1;
}


echo '<ol>';
if($button==1){
		echo '<div class="right"><table><tr><td><form action="file_form.php" method="post">';
		echo '<input value="修復" type="submit" onClick="return confirm('."'".'::系統叮嚀::\n\n修復的過程中，將會刪除不存在的檔案。'."'".')">';
		echo '<input value="check_blog" name="pinx" type="hidden">';
		echo '</form>';
		echo '</td><td>';
		echo '<form action="file_form.php" method="post">';
		echo '<input value="'.$total.'" name="total" type="hidden">';
		echo '<input value="'.use_month($this_user_day).'" name="use_month" type="hidden">';
		echo '<input value="'.(count($document_id_pin)).'" name="t1" type="hidden">';
		echo '<input value="'.(count($leave_message_pin)).'" name="t2" type="hidden">';
		echo '<input value="'.(count($back_reply_message_pin)).'" name="t3" type="hidden">';
		echo '<input value="'.$say_num.'" name="tt" type="hidden">';		
		echo '<input value="check_blog_log" name="pinx" type="hidden">';
		echo '<input value="'.$say_num.'" name="tt" type="hidden">';
		echo '<input  type="submit" value="紀錄">';
		echo '</form>';
		echo '</td></tr>';
		echo '</div>';
}else{
		echo '<div class="right"><form action="file_form.php" method="post">';
		echo '<input value="'.$total.'" name="total" type="hidden">';
		echo '<input value="'.use_month($this_user_day).'" name="use_month" type="hidden">';
		echo '<input value="'.(count($document_id_pin)).'" name="t1" type="hidden">';
		echo '<input value="'.(count($leave_message_pin)).'" name="t2" type="hidden">';
		echo '<input value="'.(count($back_reply_message_pin)).'" name="t3" type="hidden">';
		echo '<input value="'.$say_num.'" name="tt" type="hidden">';		
		echo '<input value="check_blog_log" name="pinx" type="hidden">';
		echo '<input value="'.$say_num.'" name="tt" type="hidden">';
		echo '<input  type="submit" value="紀錄">';
		echo '</form></div>';
}
echo '</div>';

echo '</div>';




?>












<?
}else{
function check__document(){
global $database_link__document,$document_id_pin;
$dirdata=opendir("../".$database_link__document.'/');
$box=0;//array
while ($file = readdir($dirdata)) {
if($file=='.' || $file=='..'){
continue ;
}
		$filename=strrchr($file, '.php');
		if($filename!='.php'){
			if(!@in_array($file,$document_id_pin)){
			return false;
			}else{
			$box++;
			}
		}
}
closedir($dirdata);
if(count($document_id_pin)==$box){
	return true;
}else{
	return false;
}
}//end 0沒有問題 1有問題!!





function check__message(){
global $database_link__message,$leave_message_pin;
$dirdata=opendir("../".$database_link__message.'/');
$box=0;//array
while ($file = readdir($dirdata)) {
if($file=='.' || $file=='..'){
continue ;
}
		$filename=strrchr($file, '.php');
		if($filename!='.php' && strlen($file)>=6){
			if(!@in_array($file,$leave_message_pin)){
			return false;
			}else{
			$box++;
			}
		}
}
closedir($dirdata);
if(count($leave_message_pin)==$box){
	return true;
}else{
	return false;
}
}//end 0沒有問題 1有問題!!




function check__relpy(){
global $database_link__message,$back_reply_message_pin;
$dirdata=opendir("../".$database_link__message.'/');
$box=0;//array
while ($file = readdir($dirdata)) {
if($file=='.' || $file=='..'){
continue ;
}
		$filename=strrchr($file, '.php');
		if($filename!='.php' && strlen($file)<=5){
			if(!@in_array($file,$back_reply_message_pin)){
			return false;
			}else{
			$box++;
			}
		}
}
closedir($dirdata);
if(count($back_reply_message_pin)==$box){
	return true;
}else{
	return false;
}
}//end 0沒有問題 1有問題!!

		@require("../".$database_link__document."/document_id.php");//載路檔案
		@require("../".$database_link__message."/leave_message.php");//載路檔案
		@require("../".$database_link__message."/reply_message.php");//載路檔案	
$num_document=check_filesize($document_id_pin,"../".$database_link__document.'/');
$num_message=check_filesize($leave_message_pin,"../".$database_link__message.'/');
$num_reply=check_filesize($back_reply_message_pin,"../".$database_link__message.'/');

if(check__document()){
$document__t="[ 正常 ]";
}else{
$document__t="[ 異常 ]";
}


if(check__message()){
$message__t="[ 正常 ]";
}else{
$message__t="[ 異常 ]";
}

if(check__relpy()){
$relpy__t="[ 正常 ]";
}else{
$relpy__t="[ 異常 ]";
}

		echo '<div class="right">'.date('l').', '.date('F').' '.(int)(date('d')).' &nbsp; </div>';
		echo '<h3>'.$ctrl_blog_myname.' 您好!</h3> ';
		echo '您目前的資料庫狀況 :<div class="back_div"> ';
		echo '文章總數 : '.(count($document_id_pin)).' 筆 ， 容量 : '.$num_document.' 位元組 '.$document__t.'<br>';
		echo '留言總數 : '.(count($leave_message_pin)).' 筆 ， 容量 : '.$num_message.' 位元組 '.$message__t.'<br>';
		echo '回覆總數 : '.(count($back_reply_message_pin)).' 筆 ， 容量 : '.$num_reply.' 位元組 '.$relpy__t;
		echo '<div class="right"><a href="#" onClick="loadData(\'index_back.php?action=check\',\'index_div\');">系統檢查</a></div>';
		echo '</div>';
	
}		
?>