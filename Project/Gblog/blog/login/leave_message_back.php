<?
	session_start();
	@require("../database_link.php");
	@require("../$database_link__function/pass.php");
if($_SESSION[open_login_id]!=$blog_login_id || $_SESSION[open_login_pass]!=$blog_login_pass){
	echo '- 無法讀取 -';
	exit();
}
	@require("../".$database_link__function.'/ctrl.php');

//留言
function show_homepage_leave_message($pin,$page){
	global $database_link__message,$database_link__style,$ctrl_blog_myname;
	@require("../".$database_link__style."/ctrl_style.php");
	@require("../".$database_link__message."/leave_message.php");//載入檔案
	@require("../".$database_link__message."/reply_message.php");//載入檔案
if(!@in_array($pin,$leave_message_document)){
echo '- 尚無留言 -';
return ;
}//沒有留言
						if($page==''){
						$number_continue=0;
						}else{
						$number_continue=((int)$page)*$homepage_leave_message;
						}//要忽略多少次
$number_end=1;
	for($i=count($leave_message_pin);$i>=0;$i--){
	if($leave_message_document[$i]==$pin){
				if($number_continue>0){
				$number_continue--;
				continue;
				}//忽略幾次
		echo '<div class="main_message_one">';
				echo '<div align="right"><a href="?action=reply_message&pin='.$leave_message_pin[$i].'" target="_self">[回覆]</a> <a href="file_form.php?pinx=del_message&pin='.$leave_message_pin[$i].'" target="_self">[刪除]</a></div>';

				echo '<font title="IP:'.$leave_message_ip[$i].'">'.show_html_str($leave_message_name[$i]).'</font>';
					if($leave_message_switch[$i]==0)
				 	echo ' <b>悄悄的</b> 說 : ';
					else
					echo ' 說 : ';
				echo '<ol>';
				$f=@file("../".$database_link__message."/".$leave_message_pin[$i]);
					for($j=0;$j<count($f);$j++){
						$str=show_html_str($f[$j]);
						echo show_message($str,0);
					}//for
				echo '</ol>';
					echo '<div class="message_date">'.date_change($leave_message_date[$i],$back_message_date).'</div>';
				if(@in_array($leave_message_pin[$i],$back_reply_message_pinx)){
				$reply_num=array_search($leave_message_pin[$i],$back_reply_message_pinx);
				echo '<div class="main_message_two">';
					$f=@file("../".$database_link__message."/".$back_reply_message_pin[$reply_num]);
					echo $ctrl_blog_myname.' 說 : ';
					echo '<ol>';
						for($j=0;$j<count($f);$j++){
						$str=show_html_str($f[$j]);
						echo show_message($str,0);
						}//for
					echo '</ol>';
					echo '<div class="message_date">'.date_change($back_reply_message_date[$reply_num],$back_message_date).'</div>';
				echo '</div>';
				}//回覆的留言
		echo '</div>';
			if($homepage_leave_message==$number_end)
				break;
			else
				$number_end++;
	}
	}//for


//-----------------------------------------
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
	echo '<a href="#" onClick="loadData('."'".'leave_message_back.php?pin='.$pin.'&page='.$i."'".','."'".'message_div'."'".')" target="_self">'.($i+1).'</a> &nbsp;&nbsp; ';
echo '</div>';
//-----------------------------------------
}//fun

show_homepage_leave_message($_GET[pin],$_GET[page]);
?>