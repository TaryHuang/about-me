<?
/******************************
用途:前端 main 頁數
********************************/
function homepage_document_page($page_num,$num_a=0,$num_z,$sort){
$ans1=$num_z-$num_a;
$ans=(int)($ans1/$page_num);
if(($ans1%$page_num)!=0)
	$ans++;
if($ans==1)
	return;
	
echo '<div class="main_one_bar">';
for($i=0;$i<$ans;$i++)
	echo '<a href="?action=sort&sort='.$sort.'&page='.$i.'" target="_self">'.($i+1).'</a>&nbsp;&nbsp; ';

echo '</div>';
}


/******************************
用途:前端menu-顯示文章[分類]
********************************/
function show_homepage_document_sort(){
	global $database_link__document;//載入資料夾路徑
	@require($database_link__document."/document_sort.php");//載入檔案
	
echo '<ol class="menu_one_ol"><a href="./">[首頁]</a>';
	for($i=0;$i<count($document_sort_pin);$i++){
		if($document_sort_hidden[$i]==1){
			echo '<li class="menu_one_li"><a href="?action=sort&sort='.$document_sort_pin[$i].'">'.show_html_str($document_sort_title[$i])."</a></li>";
		}//if
	}//for
}//fun end





/******************************
用途:前端main-顯示文章[選取文章]部分
********************************/
function show_homepage_document_menu($get_sort,$page){
	global $database_link__document,$database_link__style;//載入資料夾路徑
	@require($database_link__document."/document_id.php");//載入檔案
	@require($database_link__document."/document_sort.php");//載入檔案
	@require($database_link__style."/ctrl_style.php");//載入檔案
if($document_sort_hidden[array_search($get_sort,$document_sort_pin)]==0){
echo  '<h3>很抱歉，此分類不開放。</h3>';
return ;
}

if(@in_array($get_sort,$document_sort_pin)){
$num=array_search($get_sort,$document_sort_pin);
echo $document_sort_title[$num];

$dates=date("Ymd");
$show_num=0;
for($i=0;$i<count($document_id_pin);$i++){
	if($document_id_sort[$i]==$get_sort && $document_id_html[$i]<=$dates){
	$show_num++;//計算 文章總數 給--PAGE作 加減
	}
}
						if($page==''){
						$number_continue=0;
						}else{
						$number_continue=((int)$page)*$homepage_show_document;
						}//要忽略多少次

$number_end=1;//box
	echo '<ol class="main_one_ol">';

	for($i=count($document_id_pin);$i>=0;$i--){
		if($document_id_sort[$i]==$get_sort && $document_id_html[$i]<=$dates){
			if($number_continue>0){
				$number_continue--;
				continue;
			}//忽略幾次
		
		echo '<div class="main_one"><li class="main_one_li"><h3><a href="?pin='.$document_id_pin[$i].'&page='.$page.'">'.show_html_str($document_id_title[$i]).'</a>';
		if($document_id_pw[$i]!=''){
			echo ' <img src="images/a3.gif">';
		}
	
		echo '</h3><div class="main_one_date"><a href="body.php?pin='.$document_id_pin[$i].'" target="_blank">[庫存頁面]</a> 發表日期 : '.date_change($document_id_start_date[$i]).'</div></li></div>';
			if($homepage_show_document==$number_end)
				break;
			else
				$number_end++;
		}//if 是否是此分類及發佈時間
	}//for
	echo "</ol>";
homepage_document_page($homepage_show_document,0,$show_num,$_GET[sort]);//分頁
}else{
echo '<h3>'.all_word_homepage(22).'</h3>';
}
}//fun end





//留言表單
function leave_message($pin){
global $this_blog_md5;
echo '<script>';
echo '
function clicks(img){
	document.myform.body.focus();
	var range=document.selection.createRange();
	range.text=range.text+"{#"+img+"}";
}';
echo '</script>';
echo '<div class="main_write">';
echo '<form method="post" action="homepage_form.php" name="myform">';
echo '回&nbsp;&nbsp;應&nbsp;&nbsp;文&nbsp;&nbsp;章<p>';
echo '暱 稱 : <input name="name" type="text" size="8"  maxlength="30" /><br>';
echo '隱藏設定 : <input name="switch" type="radio" value="1" checked /> 公開 <input name="switch" type="radio" value="0" /> 悄悄話<br>';
echo '表情 : <img src="images/1.gif" onClick=clicks("01")><img src="images/2.gif" onClick=clicks("02")><img src="images/3.gif" onClick=clicks("03")><img src="images/4.gif" onClick=clicks("04")><img src="images/5.gif" onClick=clicks("05")><img src="images/6.gif" onClick=clicks("06")><img src="images/7.gif" onClick=clicks("07")><img src="images/8.gif" onClick=clicks("08")><br>';

echo '<textarea name="body" cols="25" rows="4"></textarea> <div class="right">10~500字</div>';
echo '請輸入驗證碼 : <input name="img_pin" type="text" size="5" maxlength="5" /><br>';
$num=rand(10000,90000);
$md5_nums=substr(md5($num),$this_blog_md5,8);//不能在這取直 這裡取值 沒法達到效果
echo '<img src="img.php?img_pin='.$num.'"><br>';
echo '<div class="right"><input type="submit" value="回應"/></div>';
echo '<input type="hidden" name="img_md5" value="'.$md5_nums.'"/><input type="hidden" name="pinx" value="leave_message"/><input type="hidden" name="document_id" value="'.$pin.'"/></form>';
echo '</p></div>';
}
?>


