<?
	@require("database_link.php");
	@require($database_link__function."/ctrl.php");
	
	if($ctrl_blog_switch=='0'){
	echo '- 無法讀取 -';
	exit();
	}
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?
	@require($database_link__document."/document_id.php");
if(!@in_array($_GET[pin],$document_id_pin)){
	echo '- 無法讀取 -';
	exit();
}
if(!($_COOKIE[$_GET[pin]]==$document_id_pw[array_search($_GET[pin],$document_id_pin)])){
	echo '- 無法讀取 -';
	exit();
}
function show_homepage_leave_message($pin,$page){
	global $database_link__message,$database_link__style,$ctrl_blog_myname;
	@require($database_link__style."/ctrl_style.php");
	@require($database_link__message."/leave_message.php");
	@require($database_link__message."/reply_message.php");
	

if(!@in_array($pin,$leave_message_document)){
echo '- 尚無留言 -';
return ;
}
						if($page==''){
						$number_continue=0;
						}else{
						$number_continue=((int)$page)*$homepage_leave_message;
						}
$number_end=1;
	for($i=count($leave_message_pin);$i>=0;$i--){
	if($leave_message_document[$i]==$pin){
				if($number_continue>0){
				$number_continue--;
				continue;
				}
		echo '<div class="main_message_one">';
				if($leave_message_switch[$i]==1){
				echo show_html_str($leave_message_name[$i]).' 說 : ';
				}else{
				echo show_html_str($leave_message_name[$i]).' <b>悄悄的</b> 說 : ';
				}
				$f=@file($database_link__message."/".$leave_message_pin[$i]);
				echo '<ol>';
				if($leave_message_switch[$i]==1){
					for($j=0;$j<count($f);$j++){
						$str=show_html_str($f[$j]);
						echo show_message($str);
					}
				}else{
				
				switch(rand(1,5)){
				case 1:$say_echo="似乎被鎖住了..";break;
				case 2:$say_echo="悄悄的被上了鎖..";break;
				case 3:$say_echo="一股力量..盡使我說不出話來...";break;
				case 4:$say_echo="一切的一切..都需要鑰匙";break;
				case 5:$say_echo="我的言語似乎說不出話來...";break;
				case 6:$say_echo="心靜...";break;
				case 7:$say_echo="似乎上了一道鎖...";break;
				}
				
					echo $say_echo.' <img src="images/a2.gif">';
				}//if
				echo '</ol>';
				echo '<div class="message_date">'.date_change($leave_message_date[$i],$homepage_message_date).'</div>';	
		
		if(@in_array($leave_message_pin[$i],$back_reply_message_pinx)){
				$reply_num=array_search($leave_message_pin[$i],$back_reply_message_pinx);
				echo '<div class="main_message_two">';
					$f=@file($database_link__message."/".$back_reply_message_pin[$reply_num]);
					echo show_html_str($ctrl_blog_myname).' 說 : ';
					echo '<ol>';
						for($j=0;$j<count($f);$j++){
						$str=show_html_str($f[$j]);
						echo show_message($str);
						}
					echo '</ol>';
					echo '<div class="message_date">'.date_change($back_reply_message_date[$reply_num],$homepage_message_date).'</div>';
				echo '</div>';
		}
		
		
		echo '</div>';
			if($homepage_leave_message==$number_end)
				break;
			else
				$number_end++;
	}
	}


$box_num=0;
for($i=0;$i<count($leave_message_pin);$i++){
	if($leave_message_document[$i]==$pin)
	$box_num++;
}
$page_num=$homepage_leave_message;
$ans1=$box_num;
$ans=(int)($ans1/$page_num);
if(($ans1%$page_num)!=0)
	$ans++;
	
if($ans==1)
	return ;

echo '<div class="main_message_bar">';
for($i=0;$i<$ans;$i++)
	echo '<a href="#" onClick="loadData('."'".'leave_message.php?pin='.$pin.'&page='.$i."'".','."'".'message_div'."'".')" target="_self">'.($i+1).'</a> &nbsp;&nbsp; ';
echo '</div>';


exit();
}
show_homepage_leave_message($_GET[pin],$_GET[page]);
?>