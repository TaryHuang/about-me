<?


function back_document_page($page_num,$num_a=0,$num_z,$sort){
$ans1=$num_z-$num_a;
$ans=(int)($ans1/$page_num);
if(($ans1%$page_num)!=0)
	$ans++;
if($ans==1)
	return;
echo '<div class="main_one_bar">';
for($i=0;$i<$ans;$i++)
	echo '<a href="?action=text_sort&sort='.$sort.'&page='.$i.'" target="_self">'.($i+1).'</a> &nbsp;&nbsp; ';
echo '</div>';
}



function select_show($name,$check=5,$add=5,$num_a=5,$num_z=50){
$w='<select name="'.$name.'">';
	for($i=$num_a;$i<=$num_z;$i+=$add){
		if($i==$check)
    	$w.='<option value="'.$i.'" selected>'.$i.'</option>';
		else
		$w.='<option value="'.$i.'">'.$i.'</option>';
	}
$w.='</select>';
return $w;
}



function select_show2($name,$selected){
$w='<select name="'.$name.'">';
		if($selected==1){
    	$w.='<option value="1" selected>縮排</option>';
	  	$w.='<option value="0" >展開</option>';
		}else{
		$w.='<option value="1">縮排</option>';
		$w.='<option value="0" selected>展開</option>';
		}
$w.='</select>';
return $w;
}


function show_back_menu($menu,$menu_link){
	for($i=0;$i<count($menu);$i++){
		echo '<li class="menu_one_li"><a href="?action='.$menu_link[$i].'">'.$menu[$i].'</a></li>';
	}
}






function show_back_main_text(){
	global $database_link__document;//載入資料夾路徑
	@require("../".$database_link__document."/document_sort.php");//載路檔案
	echo '<a href="?action=add_sort">[新增分類]</a>';
	echo '<div class="back_div"><ol>';
	for($i=0;$i<count($document_sort_pin);$i++){
	if($document_sort_hidden[$i]==1)
		$show_hidden_title="";
	else
		$show_hidden_title="&nbsp;&nbsp;&nbsp;&nbsp;[隱藏]";
		echo '<li><a href="?action=text_sort&sort='.$document_sort_pin[$i].'">'.show_html_str($document_sort_title[$i]).'</a>'.$show_hidden_title.'</li>';
	}
	echo "</ol></div>";
}//fun


function select_date($check,$name){
$array_date=array('2009/1/1 00:00','2009-1-1 00:00','January 1,2009 00:00','00:00, Jan 1, 2009 ','2009/1/1','2009-1-1','January 1,2009','Jan 1,2009','1/1 00:00','1-1 00:00','January 1 00:00','Jan 1 00:00');
$array_date_value=array(0,1,2,3,4,5,6,7,8,9,10,11);

$w='<select name="'.$name.'">';
	for($i=0;$i<count($array_date);$i++){
		if($array_date_value[$i]==$check)
    	$w.='<option value="'.$array_date_value[$i].'" selected>'.$array_date[$i].'</option>';
		else
    	$w.='<option value="'.$array_date_value[$i].'" >'.$array_date[$i].'</option>';
	}
$w.='</select>';
return $w;

}//fun


//::文章管理-選單::
function show_back_main_text_sort($get_sort,$page){
	global $database_link__document,$database_link__style;//載入資料夾路徑
	@require("../".$database_link__document."/document_id.php");//載路檔案
	@require("../".$database_link__document."/document_sort.php");//載路檔案
	@require("../".$database_link__style."/ctrl_style.php");//載路檔案

//顯示分類
if(@in_array($get_sort,$document_sort_pin)){
$num=array_search($get_sort,$document_sort_pin);
echo '<div class="right">';
echo '<a href="?action=updatas_sort&sort='.$get_sort.'">[編輯]</a> ';//編輯分類
echo '<a href="?action=del_sort&sort='.$get_sort.'">[刪除]</a> ';//編輯分類
echo "</div>";
echo "<h3>".show_html_str($document_sort_title[$num])."</h3>".'<a href="?action=add_document&sort='.$get_sort.'">[新增文章]</a> ';

$show_num=0;
for($i=0;$i<count($document_id_pin);$i++){
	if($document_id_sort[$i]==$get_sort){
	$show_num++;//計算 文章總數 給--PAGE作 加減
	}
}
						if($page==''){
						$number_continue=0;
						}else{
						$number_continue=((int)$page)*$back_show_document;
						}//要忽略多少次

$number_end=1;//box
	echo '<ol class="main_one_ol">';
	for($i=count($document_id_pin);$i>=0;$i--){
		if($document_id_sort[$i]==$get_sort){
					if($number_continue>0){
						$number_continue--;
						continue;
					}//忽略幾次
		echo '<div class="main_one"><li class="main_one_li"><h3><a href="?action=show_document&pin='.$document_id_pin[$i].'&page='.$page.'" target="_self">'.show_html_str($document_id_title[$i]).'</a>';
		if($document_id_pw[$i]!=''){
			echo ' <img src="../images/a3.gif">';
		}
	echo '</h3><div class="main_one_date"><a href="../body.php?pin='.$document_id_pin[$i].'" target="_blank"> [庫存頁面] </a><a href="?action=updata_document_check&pin='.$document_id_pin[$i].'">[編輯]</a> 發表日期 : '.date_change($document_id_start_date[$i]).'</div>';
		echo '</li></div>';
			if($back_show_document==$number_end)
				break;
			else
				$number_end++;
		}//if
	}//for
echo "</ol>";
back_document_page($back_show_document,0,$show_num,$get_sort);//分頁
}else{
echo "<h3>很抱歉，找不到此分類。</h3>";
}
}//fun




function show_back_main_add_document($get_sort){
	global $database_link__document,$database_link__style;//載入資料夾路徑
	@require("../".$database_link__document."/document_sort.php");//載路檔案
	@require("../".$database_link__style."/style_document.php");//載路檔案
echo '<script>var word=Array("紀錄","換行","粗體","斜體","連結","空格","字型","標題字元有誤"," 請輸入網址 : ","圖案");</script>';
echo '<script type="text/javascript" src="add.js"></script>';
if(@in_array($get_sort,$document_sort_pin)){
$num=array_search($get_sort,$document_sort_pin);
echo '<div class="right"><a href="javascript:history.go(-1);"> 返回 </a></div>';
echo "<h3>".show_html_str($document_sort_title[$num])."</h3>";
//::取得style::
	$text_style='<select name="style">';
	$text_style.='<option value="0" selected>無</option>';
	for($i=0;$i<count($style_document_pin);$i++){
		$text_style.='<option value="'.$style_document_pin[$i].'">'.$style_document_name[$i].'</option>';
	}
	$text_style.='</select>';
//::取得style::
echo '<form  name="myform" method="post" action="file_form.php">';
echo '標題 : <input name="title" type="text" size="50" maxlength="120" /> 鑰匙 : <input name="password" type="text" size="4" maxlength="8" /><br>';
echo '庫存樣式 : '.$text_style.'<br>';
echo '發佈時間 : ';
echo '<select name="html">
<option value="0" selected>現在</option>
<option value="1">明天</option>
<option value="3">三天</option>
<option value="5">五天</option>
<option value="7">七天</option>
<option value="10">十天</option>
</select>';
echo '<br>';
echo '開放留言 : <input name="message" type="radio" value="1"  checked />開放 &nbsp;&nbsp;<input name="message" type="radio" value="0" /> 關閉';
echo '<div class="main_document" id="dir"></div>';


echo '<p><input value="紀錄內容" type="button" onClick="show(1)"/><input value="換行" type="button" onClick="n()"/><input value="空格" type="button" onClick="nbsp()"/><br><input value="粗體" type="button" onClick="b()"/><input value="斜體" type="button" onClick="em()"/><input value="連結" type="button" onClick="link()"/><input value="圖案" type="button" onClick="img()"/> - ';
echo ' <input value="Join" type="button" onClick="font()"/>
<select name="styles">
	<option value="font">文字</option>
	<option value="p">段落</option>
</select>


<select name="size">
	<option value="12">12</option>
	<option value="14">14</option>
	<option value="16">16</option>
	<option value="18">18</option>
	<option value="24">24</option>
	<option value="36">36</option>
</select>

<select name="fontcolor">
    <option style="color:#000000" value="#000000">style 0</option>
    <option style="color:#006699" value="#006699">style 1</option>
    <option style="color:#FFCC00" value="#FFCC00">style 2</option>
    <option style="color:#990000" value="#990000">style 3</option>
	<option style="color:#FF6699" value="#FF6699">style 4</option>
    <option style="color:#CC9900" value="#CC9900">style 5</option>
    <option style="color:#00FF99" value="#00FF99">style 6</option>
    <option style="color:#9999CC" value="#9999CC">style 7</option>
    <option style="color:#66FF33" value="#66FF33">style 8</option>
</select>



<select name="color">
    <option style="background-color:#ffffff" value="#ffffff">style 0</option>
    <option style="background-color:#006699" value="#006699">style 1</option>
    <option style="background-color:#FFCC00" value="#FFCC00">style 2</option>
    <option style="background-color:#990000" value="#990000">style 3</option>
	<option style="background-color:#FF6699" value="#FF6699">style 4</option>
    <option style="background-color:#CC9900" value="#CC9900">style 5</option>
    <option style="background-color:#00FF99" value="#00FF99">style 6</option>
    <option style="background-color:#9999CC" value="#9999CC">style 7</option>
    <option style="background-color:#66FF33" value="#66FF33">style 8</option>
  </select> ';
echo '<br><textarea name="body" id="bodys" cols="45" rows="12" wrap="virtual" style="font-size:18px"></textarea><span id="spans"><select size="12"></select></span></p>';


echo '<p align="right"><input value="新增" type="submit" onClick="return check()" /></p>';
echo '<input name="pinx" type="hidden" value="add_document" />
<input name="sort" type="hidden" value="'.$get_sort.'" />';//分類
echo '</form>';
}else{
echo "<h3>很抱歉，找不到此分類。</h3>";
}
}//fun



//::文章管理-更新文章check::
function show_back_main_updata_document_check($pin){
	global $database_link__document,$database_link__style;//載入資料夾路徑
	@require("../".$database_link__document."/document_sort.php");//載路檔案
	@require("../".$database_link__document."/document_id.php");//載路檔案
	@require("../".$database_link__style."/style_document.php");//載路檔案	

if(@in_array($pin,$document_id_pin)){
echo '<div class="right"><a href="javascript:history.go(-1);"> 返回 </a></div>';

echo '文章資訊';
echo '<div class="back_div">';

	$num=array_search($pin,$document_id_pin);
	$num_sort=array_search($document_id_sort[$num],$document_sort_pin);
	echo '<h3>'.show_html_str($document_id_title[$num]);
	if($document_id_pw[$num]!=''){
	echo ' <img src="../images/a3.gif">';
	}
	echo '</h3>';
	echo '<ol>';
	echo '分類 : '.show_html_str($document_sort_title[$num_sort]).'<br>';
	if(date('Ymd')>=$document_id_html[$num]){
	$say_date='- 已發佈';
	}else{
	$say_date='- 尚未發佈';
	}
	echo '發佈時間 : '.date_change($document_id_html[$num],4).' '.$say_date.'<br>';
	echo '發表日期 : '.date_change($document_id_start_date[$num]).'<br>';
	echo '最後編輯日期 : '.date_change($document_id_end_date[$num]).'<br>';
	if(@in_array($document_id_style[$num],$style_document_pin)){
	$num_style=array_search($document_id_style[$num],$style_document_pin);//樣式
	echo '庫存樣式 : '.$style_document_name[$num_style].'<br>';
	}else{
	echo '庫存樣式 : 無'.'<br>';
	}
if($document_id_open_message[$num]=='1')
	$message_value="開放".'<br>';
else
	$message_value="關閉";
	echo '開放留言 : '.$message_value;
	echo '</ol>';
echo '<form action="file_form.php" name="myform" method="post" class="right"><input value="編輯" type="submit"   onClick="document.myform.pinx.value='."'".'updata_document_check'."'".'" /><input value="刪除" type="submit" onClick="return confirm('."'".'您確定要刪除此文章嗎?'."'".')" onmouseover="document.myform.pinx.value='."'".'del_document'."'".'" />
<input  name="pinx" type="hidden" />
<input value="'.$pin.'" name="pin" type="hidden" />
	</form></div>';

}else{
echo "<h3>很抱歉，找不到此文章。</h3>";
}
}

//::正式更新文章::
function show_back_main_updata_document($pin){
	global $database_link__document,$database_link__style;//載入資料夾路徑
	@require("../".$database_link__document."/document_sort.php");//載路檔案
	@require("../".$database_link__document."/document_id.php");//載路檔案
	@require("../".$database_link__style."/style_document.php");//載路檔案
echo '<script>var word=Array("紀錄","換行","粗體","斜體","連結","空格","字型","標題字元有誤"," 請輸入網址 : ","圖案");</script>';
echo '<script type="text/javascript" src="add.js"></script>';
if(@in_array($pin,$document_id_pin)){
$num=array_search($pin,$document_id_pin);//~~~取得位址~~~
//::取得分類::
	$text_sort='<select name="sort">';
	for($i=0;$i<count($document_sort_pin);$i++){
    if($document_sort_pin[$i]==$document_id_sort[$num])
		$text_sort.='<option value="'.$document_sort_pin[$i].'" selected>'.show_html_str($document_sort_title[$i]).'</option>';
    else
		$text_sort.='<option value="'.$document_sort_pin[$i].'">'.show_html_str($document_sort_title[$i]).'</option>';
	}
	$text_sort.='</select>';
//::取得分類::


//::取得style::
	$text_style='<select name="style">';
	$text_style.='<option value="0" selected>無</option>';
	for($i=0;$i<count($style_document_pin);$i++){
    if($style_document_pin[$i]==$document_id_style[$num])
		$text_style.='<option value="'.$style_document_pin[$i].'" selected>'.$style_document_name[$i].'</option>';
    else
		$text_style.='<option value="'.$style_document_pin[$i].'">'.$style_document_name[$i].'</option>';
	}
	$text_style.='</select>';
//::取得style::


echo '<div class="right"><a href="javascript:history.go(-1);"> 返回 </a></div>';
echo '<form method="post" name="myform" action="file_form.php">';
echo '分類 : '.$text_sort.'<br>';
echo '標題 : <input name="title" type="text" size="50" maxlength="120" value="'.$document_id_title[$num].'" /> 鑰匙 : <input name="password" type="text" size="4" maxlength="8"  value="'.show_html_str($document_id_pw[$num]).'" /><br>';
echo '庫存樣式 : '.$text_style.'<br>';



if($document_id_open_message[$num]=='1'){
	$open_check_t="checked";
}else{
	$open_check_f="checked";
}
echo '開放留言 : <input name="message" type="radio" value="1" '.$open_check_t.' />開放 &nbsp;&nbsp;<input name="message" type="radio" value="0" '.$open_check_f.'/> 關閉<br>';

echo '<div class="main_document" id="dir"></div>';

echo '<p><input value="紀錄內容" type="button" onClick="show(1)"/><input value="換行" type="button" onClick="n()"/><input value="空格" type="button" onClick="nbsp()"/><br><input value="粗體" type="button" onClick="b()"/><input value="斜體" type="button" onClick="em()"/><input value="連結" type="button" onClick="link()"/><input value="圖案" type="button" onClick="img()"/> - ';
echo ' <input value="Join" type="button" onClick="font()"/>
<select name="styles">
	<option value="font">文字</option>
	<option value="p">段落</option>
</select>
<select name="size">
	<option value="12">12</option>
	<option value="14">14</option>
	<option value="16">16</option>
	<option value="18">18</option>
	<option value="24">24</option>
	<option value="36">36</option>
</select>

<select name="fontcolor">
    <option style="color:#000000" value="#000000">style 0</option>
    <option style="color:#006699" value="#006699">style 1</option>
    <option style="color:#FFCC00" value="#FFCC00">style 2</option>
    <option style="color:#990000" value="#990000">style 3</option>
	<option style="color:#FF6699" value="#FF6699">style 4</option>
    <option style="color:#CC9900" value="#CC9900">style 5</option>
    <option style="color:#00FF99" value="#00FF99">style 6</option>
    <option style="color:#9999CC" value="#9999CC">style 7</option>
    <option style="color:#66FF33" value="#66FF33">style 8</option>
</select>



<select name="color">
    <option style="background-color:#ffffff" value="#ffffff">style 0</option>
    <option style="background-color:#006699" value="#006699">style 1</option>
    <option style="background-color:#FFCC00" value="#FFCC00">style 2</option>
    <option style="background-color:#990000" value="#990000">style 3</option>
	<option style="background-color:#FF6699" value="#FF6699">style 4</option>
    <option style="background-color:#CC9900" value="#CC9900">style 5</option>
    <option style="background-color:#00FF99" value="#00FF99">style 6</option>
    <option style="background-color:#9999CC" value="#9999CC">style 7</option>
    <option style="background-color:#66FF33" value="#66FF33">style 8</option>
  </select> ';
  
echo '<textarea name="body" id="bodys" cols="45" rows="12" wrap="virtual" style="font-size:18px">';
	$foreach_for=@file("../".$database_link__document."/".$document_id_pin[$num]);//載路檔案);
	foreach($foreach_for as $value_s){
	echo $value_s;
	}
echo '</textarea><span id="spans"><select size="12"></select></span></p>';
echo '<p align="right"><input value="編輯" type="submit" /></p>';
echo '
<input  name="pinx" type="hidden" value="updata_documents" />
<input value="'.$pin.'" name="pin" type="hidden" /></form>';
}else{
echo "<h3>很抱歉，找不到此文章。</h3>";
}
}



//::文章管理-新增分類::
function show_back_main_add_sort(){
echo '新增分類';
echo '<form	 action="file_form.php"  method="post">';
	echo '分類 : <input name="title" type="text"  size="12" maxlength="30" /> <input value="建立" type="submit" />';
	echo '<input value="add_sort" name="pinx" type="hidden" />';
echo "</form>";
}//end

//::文章管理-編輯分類::
function show_back_main_updatas_sort($sort){
	global $database_link__document;//載入資料夾路徑
	@require("../".$database_link__document."/document_sort.php");//載路檔案
if(@in_array($sort,$document_sort_pin)){
$num=array_search($sort,$document_sort_pin);
	if($document_sort_hidden[$num]==1){
		$hidden_checked_0="";
		$hidden_checked_1="checked";//開啟
	}else{
		$hidden_checked_0="checked";//隱藏
		$hidden_checked_1="";
	}
echo '<div class="right"><a href="javascript:history.go(-1);"> 返回 </a></div>';
echo '<form method="post" action="file_form.php" ><table width="200">';
echo '<tr><td>編輯分類</td></tr>';
echo '<tr><td>分類開關 : <input name="hidden_sort" type="radio" value="1" '.$hidden_checked_1.'/>公開 <input name="hidden_sort" type="radio" value="0" '.$hidden_checked_0.' />隱藏</td></tr>';
echo '<tr><td>名稱 : <input name="title" type="text" size="12" value="'.show_html_str($document_sort_title[$num]).'" /></td></tr>';
echo '<tr><td align="right"><input type="submit" value="編輯" /></td></tr>';
echo '</table><input name="pin" type="hidden" value="'.$sort.'" /><input name="pinx" type="hidden" value="updatas_sort" /></form>';
}else{
echo "<h3>很抱歉，找不到此分類。</h3>";
}//if 是否有此分類
}//end


//::文章管理-刪除分類::
function show_back_main_del_sort($sort){
	global $database_link__document;//載入資料夾路徑
	@require("../".$database_link__document."/document_sort.php");//載路檔案
	@require("../".$database_link__document."/document_id.php");//載路檔案
	if(@in_array($sort,$document_sort_pin)){
$num=array_search($sort,$document_sort_pin);
echo '<div class="right"><a href="javascript:history.go(-1);"> 返回 </a></div>';
echo '<form action="file_form.php" method="post">';
echo'將 <b>'.show_html_str($document_sort_title[$num]).'</b> 的文章 <br>&nbsp;&nbsp;&nbsp;&nbsp;<input name="del_ctrl" type="radio" value="1" checked /> 全部刪除 ';
	if((count($document_sort_pin)-1)!=0){
	echo '<input name="del_ctrl" type="radio" value="0" />轉向 ';
	echo '<select name="change_sort">';
	for($i=0;$i<count($document_sort_pin);$i++){
		if($document_sort_pin[$i]!=$sort){
			echo '<option value="'.$document_sort_pin[$i].'">'.$document_sort_title[$i].'</option>';
		}
	}//for
	echo"</select>";
	}//判定是否只有一個分類 若YES 那就不跑轉向
	
	echo '<div class="back_div"><ol>';
		for($i=0;$i<count($document_id_pin);$i++){
			if($document_id_sort[$i]==$sort){
			echo "<li>".show_html_str($document_id_title[$i])."</li>";
			}
		}
	echo "</ol>";
echo '<div class="right"><input type="submit" value="刪除" onClick="return confirm('."'".'您確定要刪除此文章嗎?'."'".')" /></div></div>';
echo '<input type="hidden" value="del_sort" name="pinx" />';
echo '<input type="hidden" value="'.$sort.'" name="pin" />';

echo "</form>";
	}else{
		echo "<h3>很抱歉，找不到此分類。</h3>";
	}//IF

}//end
?>







<?

function show_back_main_message(){
	global $database_link__function,$database_link__style;//載入資料夾路徑
	@require("../".$database_link__function."/log.php");//載路檔案	
	@require("../".$database_link__style."/ctrl_style.php");//載路檔案	

//訊息
for($i=0;$i<count($log_pin);$i++){
	for($j=0;$j<count($log_pin);$j++){
		if($log_date[$i]<$log_date[$j]){
			$sort_log_date=$log_date[$i];
			$sort_log_pin=$log_pin[$i];
			$sort_log_pinx=$log_pinx[$i];
			$sort_log_message=$log_message[$i];
			$sort_log_sort=$log_sort[$i];
			
			$log_date[$i]=$log_date[$j];
			$log_pin[$i]=$log_pin[$j];
			$log_pinx[$i]=$log_pinx[$j];
			$log_message[$i]=$log_message[$j];
			$log_sort[$i]=$log_sort[$j];
			
			$log_date[$j]=$sort_log_date;
			$log_pin[$j]=$sort_log_pin;
			$log_pinx[$j]=$sort_log_pinx;
			$log_message[$j]=$sort_log_message;
			$log_sort[$j]=$sort_log_sort;
		}
	}
}

	echo "系統訊息";
	echo '<ol>';
	$num=1;
	for($i=(count($log_pin)-1);$i>=0;$i--){
		echo "<li>";
		
		switch($log_sort[$i]){
		case 0;echo date_change($log_date[$i]).' 系統錯誤 - '.$log_message[$i];break;
		case 1;echo date_change($log_date[$i]).' 系統警告 - 您的'.$log_message[$i].'資料夾 被 IP : '.$log_pinx[$i].' 找到了。';break;
		case 2;echo date_change($log_date[$i]).' 登入失敗 - IP : '.$log_message[$i].' 登入失敗達 5 次';break;
		case 3;echo date_change($log_date[$i]).' - 更新管理系統 - ';break;
		case 4;echo date_change($log_date[$i]).' - 更新系統樣式 -'.$log_message[$i];break;
		case 5;echo date_change($log_date[$i]).' '.$log_message[$i].$log_pinx[$i].'。';break;
		case 6;echo date_change($log_date[$i]).' - 更新分類排序 - ';break;
		case 7;echo '<a TITLE=" IP: '.$log_message[$i].' ">'.date_change($log_date[$i]).' - 您成功登入 - </a>';break;
		case 8;echo date_change($log_date[$i]).' - 更新版面設定 - ';break;
		case 10;echo '<a href="?action=text_sort&sort='.$log_pinx[$i].'" target="_self">'.date_change($log_date[$i]).' 建立分類 - '.$log_message[$i].'</a>';break;
		case 11;echo date_change($log_date[$i]).' 刪除分類 - [ '.$log_message[$i].' ]';break;
		case 12;echo '<a href="?action=text_sort&sort='.$log_pinx[$i].'" target="_self">'.date_change($log_date[$i]).' 更新分類 - '.$log_message[$i].'</a>';break;
		case 20;echo '<a href="?action=show_document&pin='.$log_pinx[$i].'" target="_self">'.date_change($log_date[$i]).' 新增一筆文章 - '.$log_message[$i].'</a>';break;
		case 21;echo date_change($log_date[$i]).' 刪除文章 - '.$log_message[$i];break;
		case 22;echo '<a href="?action=updata_document_check&pin='.$log_pinx[$i].'" target="_self">'.date_change($log_date[$i]).' 更新文章 - '.$log_message[$i].'</a>';break;
		case 30;echo '<a href="?action=reply_message&pin='.$log_pinx[$i].'" target="_self">'.date_change($log_date[$i]).' 新留言 - '.$log_message[$i].' 說．．．</a>';break;
		case 31;echo date_change($log_date[$i]).' 您刪除了 '.$log_message[$i].' 的留言。';break;
		case 32;echo '<a href="?action=reply_message&pin='.$log_pinx[$i].'" target="_self">'.date_change($log_date[$i]).' 您回覆了 '.$log_message[$i].' 的留言。</a>';break;
		case 40;echo '<a href="?action=rss_read&pin='.$log_pinx[$i].'" target="_self">'.date_change($log_date[$i]).' 您新增了一筆 RSS - '.$log_message[$i].'</a>';break;
		case 41;echo date_change($log_date[$i]).' 刪除RSS - '.$log_message[$i];break;
		case 42;echo '<a href="?action=rss_read&pin='.$log_pinx[$i].'" target="_self">'.date_change($log_date[$i]).' 您更新了一筆 RSS - '.$log_message[$i].'</a>';break;
		case 50;echo '<a href="?action=updata_style2_div" target="_self">'.date_change($log_date[$i]).' - 您新增的版面 - '.$log_message[$i].'</a>';break;
		case 51;echo date_change($log_date[$i]).' - 您刪除的版面 - '.$log_message[$i];break;
		case 52;echo '<a href="?action=updata_style2_div" target="_self">'.date_change($log_date[$i]).' - 您更新的版面 - '.$log_message[$i].'</a>';break;
		case 99;echo date_change($log_date[$i]).' - 系統紀錄<div class="back_div">'.$log_pinx[$i].'<br>'.$log_message[$i].'</div>';break;
		}
		
		echo "</li>";
		
		
		
		
		if($back_show_message==$num)
			break;
		else
			$num++;
	}
	echo "</ol>";
}
?>









<?

function show_back_main_style_menu($array_name,$array_pin){
echo '<form  method="get" action="./">';
echo '樣版模組 <br>';
echo '請選擇 - <select name="action">';
 for($i=0;$i<count($array_pin);$i++){
 	echo '<option value="'.$array_pin[$i].'" >'.$array_name[$i].'</option>';
 }
echo '</select>';
echo ' <input type="submit" value="確定" />';
echo '</form>';
}






//給系統訊息做的表單
function select__message($back_show_message_array){

echo '<script language="javascript">';
echo 'var send_array=Array('.implode(',',$back_show_message_array).');';
echo '</script>';
?>

<script language="javascript">
var option_name=Array("系統錯誤","系統警告","登入失敗","成功登入","系統管理","系統樣式","安裝模組","分類排序",'版面設定',"新增分類","刪除分類","更新分類","新增文章","刪除文章","更新文章","新增留言","刪除留言","回覆留言","新增RSS","刪除RSS","更新RSS","新增版面","刪除版面","更新版面");
var option_value=Array("0","1","2","7","3","4","5","6","8","10","11","12","20","21","22","30","31","32","40","41","42","50","51","52");
var option_t1_name=Array(0);
var option_t1_value=Array(0);
var option_t2_name=Array(0);
var option_t2_value=Array(0);
	function sorts(){
		var trues=true;
		option_t1_name=Array(0);
		option_t1_value=Array(0);
		option_t2_name=Array(0);
		option_t2_value=Array(0);
		for(i=0;i<option_value.length;i++){
			for(j=0;j<send_array.length;j++){
				if(send_array[j]==option_value[i]){
				option_t1_name.push(option_name[i]);
				option_t1_value.push(option_value[i]);
				trues=false;
				break;
				}
			}
			if(trues){
			option_t2_name.push(option_name[i]);
			option_t2_value.push(option_value[i]);
			}else{
			trues=true;
			}
		}
	}

function add(){
//改變
if(!document.myform.t2.value){
	alert("請選擇清單");
	return ;
}
	send_array.unshift(document.myform.t2.value);
	sorts();
	show();
}

function del(){
//改變
if(!document.myform.t1.value){
	alert("請選擇清單");
	return ;
}

	for(i=0;i<send_array.length;i++){
		if(document.myform.t1.value==send_array[i]){
			send_array.splice
(i,1);
			break;
		}
	}
	
	sorts();
	show();
}


function show(){
	var writes=String();
	writes+="您想知道的訊息 : ";
	writes+='<table cellpadding="5"><tr><td rowspan="2">';
	writes+='<select size="8" name="t2">';
	for(i=0;i<option_t2_name.length;i++)
		writes+='<option value="'+option_t2_value[i]+'">'+option_t2_name[i]+'</option>';
		
	writes+='</select>';
	
writes+='</td> <td><input type="button" value="加入 >>" onClick="add()" /><br><br><input type="button" value="<< 退出"  onClick="del()" /></td> <td>';
	
	writes+='<select size="8" name="t1" >';
	for(i=0;i<option_t1_name.length;i++)
		writes+='<option value="'+option_t1_value[i]+'">'+option_t1_name[i]+'</option>';
	writes+='</select>';
	writes+='</td></tr></table>';
writes+='<input type="hidden" name="send_array" value="'+send_array.join(',')+'">';

	shows.innerHTML=writes;
}//show
sorts();
show();
</script>
<?
}//end function





function show_back_main_updata_style(){
	global $database_link__style;
	@require("../".$database_link__style."/style_back.php");//載路檔案
	@require("../".$database_link__style."/style_homepage.php");//載路檔案
	@require("../".$database_link__style."/ctrl_style.php");//載路檔案
echo '<form   method="post" action="file_form.php" name="myform">';
echo '系統樣式';
echo '<div class="back_div">';
echo '<h3>前端樣式</h3><ol>';
echo '<p>整體佈景 ';
echo '<select name="t_homepage">';
		 echo '<option value="0">系統樣式</option>';
	for($i=0;$i<count($style_homepage_pin);$i++){
		if($style_homepage_pin[$i]==$ctrl_style_homepage){
		 echo '<option value="'.$style_homepage_pin[$i].'" selected="selected">'.$style_homepage_name[$i].'</option>';
		}else{
		 echo '<option value="'.$style_homepage_pin[$i].'">'.$style_homepage_name[$i].'</option>';
		}//if
	}//for
echo '</select><br>';
echo '最新文章 '.select_show('homepage_show_news',$homepage_show_news).' 筆</p>';
echo '<table  cellpadding="2">';
echo '<tr><td>文章顯示 '.select_show('homepage_show_document',$homepage_show_document).' 筆<BR>';
echo '文章自動 '.select_show2("homepage_document_switch",$homepage_show_document_switch)."<br>";
echo '日期 '.select_date($homepage_document_date,"homepage_document_date").'</td><td>';
echo '<p>留言顯示 '.select_show('homepage_leave_message',$homepage_leave_message).' 筆<BR>';
echo '留言自動 '.select_show2("homepage_message_switch",$homepage_show_message_switch).'<br>';
echo '日期 '.select_date($homepage_message_date,'homepage_message_date').'</td></tr>';
echo '</table>';

echo '</ol><hr>';

echo '<h4>後端樣式</h4><ol>';//故意改小
echo '整體佈景 ';
echo '<select name="t_back">';
		 echo '<option value="0">系統樣式</option>';
	for($i=0;$i<count($style_back_pin);$i++){
		if($style_back_pin[$i]==$ctrl_style_back){
		 echo '<option value="'.$style_back_pin[$i].'" selected="selected">'.$style_back_name[$i].'</option>';
		}else{
		 echo '<option value="'.$style_back_pin[$i].'">'.$style_back_name[$i].'</option>';
		}//if
	}//for
echo '</select><br>';
echo '系統訊息 '.select_show('back_show_message',$back_show_message,10,10,100).' 筆';
echo '<p id="shows">';
select__message($back_show_message_array);
echo '</p>';
echo '<table  cellpadding="5">';
echo '<tr><td>文章顯示 '.select_show('back_show_document',$back_show_document).' 筆<br>';
echo '文章自動 '.select_show2("back_document_switch",$back_show_document_switch).'<br>';
echo '日期 '.select_date($back_document_date,'back_document_date').'</td><td>';
echo '留言顯示 '.select_show('back_leave_message',$back_leave_message).' 筆<br>';
echo '留言自動 '.select_show2("back_message_switch",$back_show_message_switch).'<br>';
echo '日期 '.select_date($back_message_date,'back_message_date').'</td></tr>';
echo '</table>';


echo '<div class="right"><input value="更新" type="submit" /></div>';
echo '<input value="ctrl_style" type="hidden" name="pinx" />';
echo '</form>';
echo '</ol>';
}



function show_back_main_updata_sort(){
global $database_link__document;

@require("../".$database_link__document."/document_sort.php");//載入檔案
//php給予script的陣列
$script_pin="script_pin=Array(";
$script_hidden="script_hidden=Array(";
$script_title="script_title=Array(";
for($i=0;$i<count($document_sort_pin);$i++){
	$script_pin.='"'.$document_sort_pin[$i].'"';
	$script_hidden.='"'.$document_sort_hidden[$i].'"';
	$script_title.='"'.show_html_str($document_sort_title[$i]).'"';
	if($i!=(count($document_sort_pin)-1)){
		$script_pin.=",";
		$script_hidden.=",";
		$script_title.=",";
	}
}
$script_pin.=");";
$script_hidden.=");";
$script_title.=");";
?>
<script>
<?=$script_pin;?>

<?=$script_title;?>

<?=$script_hidden;?>

function show(){
	document.write('<ol>');
	for(i=0;i<script_pin.length;i++){
		if(i==0){
	document.write('<li>'+script_title[i]+'</li>');
		}else{
	document.write('<li>'+script_title[i]+' &nbsp;&nbsp;<a href="#" onclick="up('+i+')">[往上]</a></li>');
		}
	}//FOR
	document.write('</ol>');
	
}


function up(num){
	num_change=(num-1);
	//交換
		var box_p=script_pin[num];
		var box_t=script_title[num];
		//----------
		script_pin[num]=script_pin[num_change];
		script_title[num]=script_title[num_change];
		//----------
		script_pin[num_change]=box_p;
		script_title[num_change]=box_t;
		var w=String();
		w+="<ol>";
		for(i=0;i<script_pin.length;i++){
		if(i==0)
			w+='<li>'+script_title[i]+'</li>';
		else
			w+='<li>'+script_title[i]+' &nbsp;&nbsp;<a href="#" onclick="up('+i+')">[往上]</a></li>';
		}//for
		w+="</ol>";
		w+='<div class="right"><input  type="submit" value="儲存" onclick="send()" /></div>';
show_div.innerHTML=w;
}//end

function send(){
if(script_pin.length!=0){
	for(i=0;i<script_pin.length;i++){
	if(i==((script_pin.length)-1)){
		document.myform.h_pin.value+=script_pin[i];
	}else{
		document.myform.h_pin.value+=script_pin[i]+",";	
	}//if
	}//for
}
}//fun
</script>
分類排序
<form  name="myform" method="post" action="file_form.php">
<input  type="hidden" value="" name="h_pin" />
<input  type="hidden" value="updata_sorts" name="pinx" />

<div id="show_div" class="back_div">
<script>
show();
</script>
<div class="right"><input  type="submit" value="儲存" onclick="send()" /></div>
</form>
</div>


<?
}//end 不可少---更新分類
?>








<?

function show_back_main_ctrl(){
global $database_link__function;
	@require("../".$database_link__function."/ctrl.php");//載路檔案
echo '<form action="file_form.php" method="post">
系統管理<table class="back_div" border="0" cellpadding="2" cellspacing="2">';
if($ctrl_blog_switch==1)
	$switch_t="checked";//開
else
	$switch_f="checked";//關

echo '<tr><td>網站開關 <input name="switch" type="radio" value="1" '.$switch_t.'>開<input name="switch" type="radio" value="0" '.$switch_f.'>關  <input type="text" size="10" name="switch_say" value="'.$ctrl_blog_switch_say.'"></td></tr>';

echo '<tr><td>網站命名 <input type="text" name="blog_name" value="'.show_html_str($ctrl_blog_name).'"></td></tr>';
echo '<tr><td>您在網站的暱稱 <input type="text" name="blog_myname" value="'.show_html_str($ctrl_blog_myname).'"></td></tr>';
if($ctrl_blog_host==1)
	$host_t="checked";//開
else
	$host_f="checked";//關
echo '<tr><td>登入Host <input name="host" type="radio" value="0" '.$host_f.'>本機電腦 <input name="host" type="radio" value="1"  '.$host_t.'>所有電腦 </td></tr>';

echo '<tr><td align="right"><input name="pinx" type="hidden" value="updata_ctrl"><input type="submit"  value="更新"></td></tr>
</table></form>';
}
?>







<?
//顯示文章
function show_document($pin,$page){
	global $database_link__document,$database_link__style;
	@require("../".$database_link__document."/document_id.php");//載路檔案
	@require("../".$database_link__style."/ctrl_style.php");//載路檔案
	
if(@in_array($pin,$document_id_pin)){
$usehtml=$document_id_html[array_search($pin,$document_id_pin)];
$nums=array_search($pin,$document_id_pin);
echo '<script language = "javascript">';
echo 'var usehtml="'.$usehtml.'";';
echo '</script>';
?>
<?php
echo '<div class="right"><a href="?action=text_sort&sort='.$document_id_sort[$nums].'&page='.$page.'" target="_self"> 返回 </a></div>';
echo '<div class="main_title">'.$document_id_title[$nums].'</div>';
?>
<div id="document_div" class="main_document">
<?	
	if($back_show_document_switch=='0'){
	file_show('../'.$database_link__document.'/'.$_GET[pin]);
	echo '<div class="main_document_date">';
	echo date_change($document_id_end_date[$nums],$back_document_date);
	echo '</div>';
	}else{
		echo '<a href="#" onClick=loadData('."'".'document_body_back.php?pin='."'".'+pin,'."'".'document_div'."'".');>展開文章 <img src="../images/a1.jpg" border="0"></a>';
	}//
?>
</div>
<?
echo '<div id="message_div" class="main_message">';
	if($back_show_message_switch=='0'){
	echo '<script> loadData(\'leave_message_back.php?pin=\'+pin, \'message_div\');</script>';
	}else{
	echo '<a href="#" onClick=loadData('."'".'leave_message_back.php?pin='."'".'+pin,'."'".'message_div'."'".');>展開留言 <img src="../images/a1.jpg" border="0"></a>';
	}
echo '</div>';
}else{
		echo "<H3>很抱歉，找不到此文章。</H3>";
}
}

?>












<?
function reply_message_updata($pin){
	global $database_link__message,$database_link__document,$ctrl_blog_myname,$database_link__style;
	@require("../".$database_link__message."/leave_message.php");//載路檔案
	@require("../".$database_link__message."/reply_message.php");//載路檔案
	if(@in_array($pin,$leave_message_pin)){
	@require("../".$database_link__document."/document_id.php");//載路檔案
	@require("../".$database_link__style."/ctrl_style.php");//載路檔案
$nums=array_search($pin,$leave_message_pin);

echo '<script>';
echo 'var pin="'.$leave_message_document[$nums].'";';
echo 'var usehtml="'.$document_id_html[array_search($leave_message_document[$nums],$document_id_pin)].'";';
echo 'function clicks(img){
	document.myform.body.focus();
	var range=document.selection.createRange();
	range.text=range.text+"{#"+img+"}";
}';
echo '</script>';
echo '<div class="right"><a href="?action=show_document&pin='.$leave_message_document[$nums].'" target="_self"> 返回 </a></div>';
echo '<div class="main_title">';
echo $document_id_title[array_search($leave_message_document[$nums],$document_id_pin)];
echo '</div>';
echo '<div id="document_div" class="main_document">';
echo '<a href="#" onClick="loadData('."'".'document_body_back.php?html='."'".'+usehtml+'."'".'&pin='."'".'+pin,'."'".'document_div'."'".');">展開文章 <img src="../images/a1.jpg" border="0"></a>';
echo '</div>';
		$num=array_search($pin,$leave_message_pin);
	echo '<form method="post" action="file_form.php" name="myform">';
	echo '<div class="main_message"><div class="main_message_one">';
	if($leave_message_switch[$num]==0){
	$say=" <b>悄悄的</b> 說 : ";
	}else{
	$say=" 說 : ";
	}
	echo '<font title="IP:'.$leave_message_ip[$num].'">'.show_html_str($leave_message_name[$num]).'</font>'.$say;
					$f=@file("../".$database_link__message."/".$leave_message_pin[$num]);
					echo '<ol>';
					for($j=0;$j<count($f);$j++){
						$str=show_html_str($f[$j]);
						echo show_message($str,0);
					}//for
					echo '</ol>';
	echo '<div class="right">'.date_change($leave_message_date[$num],$back_message_date).'</div>';
	echo '<div class="main_message_two">'.$ctrl_blog_myname.' 說 : <br><br>';
	echo '表情 : <img src="../images/1.gif" onClick=clicks("01")><img src="../images/2.gif" onClick=clicks("02")><img src="../images/3.gif" onClick=clicks("03")><img src="../images/4.gif" onClick=clicks("04")><img src="../images/5.gif" onClick=clicks("05")><img src="../images/6.gif" onClick=clicks("06")><img src="../images/7.gif" onClick=clicks("07")><img src="../images/8.gif" onClick=clicks("08")><br>';
	echo '<textarea name="body" cols="45" rows="7">';
	if(@in_array($pin,$back_reply_message_pinx)){
	$num2=array_search($pin,$back_reply_message_pinx);
	$f=@file("../".$database_link__message."/".$back_reply_message_pin[$num2]);
		for($i=0;$i<count($f);$i++){
			echo $f[$i];
		}//for
	}
	echo '</textarea>';
	echo '<div class="right"><input type="submit" value="回 覆"></div></div>';
	echo '</div></div>';	


	
	echo '<input type="hidden" name="pinx" value="reply_message">';
	echo '<input type="hidden" name="pin" value="'.$leave_message_pin[$num].'">';
	echo '</form>';
	}else{
		echo "<H3>很抱歉，找不到此留言。</H3>";
	}//判定是否有此資料
}
?>










<?
//安裝與卸下模組及系統訊息處裡
function show_back_setup(){
global $database_link__style;
	@require('../'.$database_link__style."/style_center_data.php");//資料夾連線
	@require('../'.$database_link__style."/style_document.php");//資料夾連線
	@require('../'.$database_link__style."/style_homepage.php");//資料夾連線
	@require('../'.$database_link__style."/style_back.php");//資料夾連線

	echo '安裝模組';
	echo '<div class="right"><a href="./?action=setup_add">新增模組</a></div>';
	echo '<div class="back_div"><ol>';
	for($i=0;$i<count($style_center_pin);$i++){
		if($style_center_sort[$i]=="back"){
			if(@in_array($style_center_pin[$i],$style_back_pin)){
			echo '<li><a href="?action=del_setup&pin='.$style_center_pin[$i].'">'.date_change($style_center_date[$i]).' - 後端佈景 - '.$style_back_name[array_search($style_center_pin[$i],$style_back_pin)]." </a></li>";
			}else{
			echo "<li>".date_change($style_center_date[$i]).' - 後端佈景 找不到編號 '.$style_center_pin[$i].' 檔案...</li>';
			}
		}else if($style_center_sort[$i]=="homepage"){
			if(@in_array($style_center_pin[$i],$style_homepage_pin)){
			echo '<li><a href="?action=del_setup&pin='.$style_center_pin[$i].'">'.date_change($style_center_date[$i]).' - 前端佈景 - '.$style_homepage_name[array_search($style_center_pin[$i],$style_homepage_pin)]."</a></li>";
			}else{
			echo "<li>".date_change($style_center_date[$i]).' - 前端佈景 找不到編號 '.$style_center_pin[$i].' 檔案...</li>';
			}
		}else{
			if(@in_array($style_center_pin[$i],$style_document_pin)){
			echo '<li><a href="?action=del_setup&pin='.$style_center_pin[$i].'">'.date_change($style_center_date[$i]).' - 庫存樣式 - '.$style_document_name[array_search($style_center_pin[$i],$style_document_pin)]."</a></li>";
			}else{
			echo "<li>".date_change($style_center_date[$i]).' - 庫存樣式 找不到編號 '.$style_center_pin[$i].' 檔案...</li>';
			}
		}
	}
	echo '</ol></div>';
	
		
}




function show_back_setup_add(){
	echo '檢查模組';
global $database_link__free;
	echo '<div class="right"><a href="./?action=setup">返回</a></div>';
echo '<div class="back_div"><ol>';
$dirdata=opendir('../'.$database_link__free.'/');

while ($file = readdir($dirdata)) {
if($file=='.' || $file=='..'){
continue ;
}


		$filename=strrchr($file, ".h");
	
		if($filename=='.h'){
		$main = substr($file,0,strrpos($file,'.'));		
		if(!chk_value($main,0)){
			continue ;
		}
		echo '<li><a href="?action=setup_check&pin='.$main .'">檔 名 : '.$main.'</a></li>';
		}
}
closedir($dirdata);
echo '</ol></div>';
}

function show_back_setup_check($pin){
global $database_link__free;
echo '安裝模組';
	echo '<div class="right"><a href="./?action=setup_add">返回</a></div>';
if(is_file('../'.$database_link__free.'/'.$pin.'.h')){


if(!chk_value($pin,0)){
		echo '<h3>很抱歉，檔案格式錯誤。</h3>';
		return ;
}


$num_pins=hexdec($pin);
		if((num_pins%77==0 && $num_pins%11==0 && $num_pins%7==0)){
			if($num_pins%3==1)
			$sort='前端背景';
			else if($num_pins%3==2)
			$sort='後端背景';
			else
			$sort='庫存樣式';
		}else{
		echo '<h3>很抱歉，檔案格式錯誤。</h3>';
		return ;
		}
		echo '<form method="post" action="file_form.php">';
		echo '<ol>';
		echo '檔案 : '.$pin.'<br>';
		echo '目標 : '.$sort.'<br>';
		$size_num=(filesize('../'.$database_link__free.'/'.$pin.'.h')/1000);
		if($size_num>=20)
		$size_say=' - 檔案大小似乎不正常';
		echo '檔案大小 : 約 '.round($size_num,1)." Kb ".$size_say."<br>";
		echo '樣式命名 : <input name="name" type="text" size="10" maxlength="30" /> <input type="submit" value="安裝" />';
		echo '</ol>';
		echo '<input name="pinx" type="hidden" value="add_setup"/><input name="pin" type="hidden" value="'.$pin.'"/>';
		echo '</form>';
}else{
echo '<H3>很抱歉，找不到您要的檔案。</H3>';
}
}







function del_setup($pin){
global $database_link__style;
@require('../'.$database_link__style."/style_center_data.php");//資料夾連線



if(@in_array($pin,$style_center_pin)){
$num=array_search($pin,$style_center_pin);
echo '卸下模組';
	echo '<div class="right"><a href="./?action=setup">返回</a></div>';
echo '<ol class="back_div"><form action="file_form.php" method="post">';
	if($style_center_sort[$num]=='back'){
		@require('../'.$database_link__style."/style_back.php");//資料夾連線
		$num=array_search($pin,$style_back_pin);
		echo '您確定要卸下後端佈景的 '.$style_back_name[$num].' 模組？ ';
		echo '<input type="submit" value="確定" />';
	}else if($style_center_sort[$num]=='homepage'){
		@require('../'.$database_link__style."/style_homepage.php");//資料夾連線
		$num=array_search($pin,$style_homepage_pin);
		echo '您確定要卸下前端佈景的 '.$style_homepage_name[$num].' 模組？ ';
		echo '<input type="submit" value="確定" />';
	}else{
		@require('../'.$database_link__style."/style_document.php");//資料夾連線
		$num=array_search($pin,$style_document_pin);
		echo '您確定要卸下庫存樣式的 '.$style_document_name[$num].' 模組？ ';
		echo '<input type="submit" value="確定" />';
	}
	
	echo '<input name="pinx" value="del_setup" type="hidden">';
	echo '<input name="pin" value="'.$pin.'" type="hidden">';
echo '</form></ol>';
}else{
echo '<h3>很抱歉，找不到您要的模組。</h3>';
}
}


function show_updata_div(){
global $database_link__div;
@require('../'.$database_link__div."/div_pin.php");//資料夾連線
echo '<div class="right"><a href="./?action=updata_style2">[返回]</a></div>';
echo '<a href="./?action=show_add_div">新增版面</a>';
echo '<div class="back_div"><H3>前端版面</H3><ol>';
for($i=0;$i<count($div__pin);$i++){
switch($div__loc[$i]){
case 'top':$say_loc='上方';break;
case 'down':$say_loc='下方';break;
case 'index':$say_loc='首頁';break;
case 'menu2':$say_loc='擴充';break;
default:$say_loc='無';
}
	if($div__sort[$i]==1){
	echo '<li><div class="main_document"> <a href="./?action=show__div&pin='.$div__pin[$i].'">'.show_html_str($div__name[$i]).'</a> - [ '.$say_loc.' ]<div class="right"><a href="./?action=updata_div&pin='.$div__pin[$i].'">[編輯]</a> <a href="file_form.php?pin_x=del_div&pin='.$div__pin[$i].'"  onClick="return confirm('."'".'您確定要刪除此版面嗎?'."'".')">[刪除]</a> </div></div></li>';
	}
}
echo '</ol><H3>後端版面</H3><ol>';
for($i=0;$i<count($div__pin);$i++){
switch($div__loc[$i]){
case 'top':$say_loc='上方';break;
case 'down':$say_loc='下方';break;
case 'index':$say_loc='首頁';break;
case 'menu2':$say_loc='擴充';break;
default:$say_loc='無';
}
	if($div__sort[$i]==0){
	echo '<li><div class="main_document"> <a href="./?action=show__div&pin='.$div__pin[$i].'">'.show_html_str($div__name[$i]).'</a> - [ '.$say_loc.' ]<div class="right"><a href="./?action=updata_div&pin='.$div__pin[$i].'">[編輯]</a> <a href="file_form.php?pin_x=del_div&pin='.$div__pin[$i].'"  onClick="return confirm('."'".'您確定要刪除此版面嗎?'."'".')">[刪除]</a> </div></div></li>';
	}
}
echo '</ol></div>';
}

function show_add_div(){
echo '<div class="right"><a href="javascript:history.go(-1);">[返回]</a></div>';
echo '新增版面';
echo '<form action="file_form.php" method="post"><table>';
echo '<tr><td>版面名稱 : <input name="name" type="text" /></td></tr>';
echo '<tr><td>目標 : <input name="sorts" type="radio" value="1" checked/> 前端 <input name="sorts" type="radio" value="0" /> 後端';
echo '<tr><td><textarea name="body" cols="50" rows="8"></textarea></td></tr>';
echo '<tr><td class="right"><input value="新增" type="submit" /></td></tr>';
echo '</table>';
	echo '<input name="pinx" value="add_div" type="hidden">';
echo '</form>';
}


function updata_div($pin){
global $database_link__div;
@require('../'.$database_link__div."/div_pin.php");//資料夾連線


if(@in_array($pin,$div__pin)){
$num=array_search($pin,$div__pin);
echo '<div class="right"><a href="javascript:history.go(-1);">[返回]</a></div>';
echo '編輯版面';
echo '<form action="file_form.php" method="post"><table>';
echo '<tr><td>版面名稱 : <input name="name" type="text" value="'.$div__name[$num].'" /></td></tr>';
if($div__sort[$num]==1){
$sort_back='';
$sort_home='checked';
}else{
$sort_back='checked';
$sort_home='';
}
echo '<tr><td>目標 : <input name="sorts" type="radio" value="1" '.$sort_home.' /> 前端 <input name="sorts" type="radio" value="0" '.$sort_back.' /> 後端';
echo '</td></tr>';
echo '<tr><td>位址 : ';
echo '<select name="loc">';
$loc_value=array('0','index','top','menu2','down');
$loc_name=array('無','首頁','上方','擴充','下方');
for($i=0;$i<count($loc_value);$i++){
	if($loc_value[$i]==$div__loc[$num]){
	echo '<option value="'.$loc_value[$i].'" selected>'.$loc_name[$i].'</option>';
	}else{
	echo '<option value="'.$loc_value[$i].'" >'.$loc_name[$i].'</option>';
	}
}
echo '<select>';
echo '</td></tr>';
echo '<tr><td><textarea name="body" cols="50" rows="8">';
if(is_file('../'.$database_link__div."/".$pin)){
file_show('../'.$database_link__div."/".$pin);
}else{
echo '<h3>檔案已遺失。</h3>';
}
echo '</textarea></td></tr>';
echo '<tr><td class="right"><input value="編輯" type="submit" /></td></tr>';
echo '</table>';
	echo '<input name="pin" value="'.$pin.'" type="hidden"><input name="pinx" value="updata_div" type="hidden">';
echo '</form>';
}else{
echo '<h3>很抱歉，找不到此版面。</h3>';
}
}

function show__div($pin){
global $database_link__div;
@require('../'.$database_link__div."/div_pin.php");//資料夾連線
echo '<div class="right"><a href="javascript:history.go(-1);">[返回]</a></div>';
if(@in_array($pin,$div__pin)){
	if(is_file('../'.$database_link__div.'/'.$pin)){
	file_show('../'.$database_link__div.'/'.$pin);
	}else{
	echo '<H3>檔案已遺失</H3>';
	}
}else{
echo '<h3>很抱歉，找不到此版面。</h3>';
}

}





function show_updata_style2(){

global $database_link__div;
@require('../'.$database_link__div."/div_ctrl.php");//資料夾連線
if($homepage_top_chk==1){
$homepage_top_chk='checked';
}
							if($homepage_down_chk==1){
							$homepage_down_chk='checked';
							}
if($homepage_menu_chk==1){
$homepage_menu_chk='checked';
}
							if($homepage_menu2_chk==1){
							$homepage_menu2_chk='checked';
							}
if($homepage_index_chk==1){
$homepage_index_chk1='checked';
$homepage_index_chk0='';
}else{
$homepage_index_chk1='';
$homepage_index_chk0='checked';
}
echo '版面設定';
echo '<div class="right"><a href="./?action=updata_style2_div">[版面樣式]</a></div>';
echo '<form action="file_form.php" method="post"><div class="back_div">';
echo '<h3>前端版面</h3>';
echo '<ol>';
echo '<div>';
echo '上方版面 <input name="homepage_top_chk" type="checkbox" value="1" '.$homepage_top_chk.' /> [勾選顯示]<br><br>';
echo '選單版面 <input name="homepage_menu_chk" type="checkbox" value="1" '.$homepage_menu_chk.' /> [勾選顯示]<br><br>';
echo '擴充版面 <input name="homepage_menu2_chk" type="checkbox" value="1" '.$homepage_menu2_chk.' /> [勾選顯示]<br><br>';
echo '下方版面 <input name="homepage_down_chk" type="checkbox" value="1"  '.$homepage_down_chk.'/> [勾選顯示]<br><br>';
echo '首頁版面 <input name="homepage_index_chk" type="radio" value="0" '.$homepage_index_chk0.' />最新文章 <input name="homepage_index_chk" type="radio" value="1" '.$homepage_index_chk1.' />自訂<br><br>';
echo '</div>';
echo '</ol>';
echo '<hr>';


if($back_top_chk==1){
$back_top_chk='checked';
}
							if($back_index_chk==1){
							$back_index_chk1='checked';
							$back_index_chk0='';
							}else{
							$back_index_chk1='';
							$back_index_chk0='checked';
							}
if($back_menu2_chk==1){
$back_menu2_chk='checked';
}
					if($back_down_chk==1){
					$back_down_chk='checked';
					}
echo '<h3>後端版面</h3>';
echo '<ol>';
echo '上方版面 <input name="back_top_chk" type="checkbox" value="1" '.$back_top_chk.' /> [勾選顯示]<br><br>';
echo '擴充版面 <input name="back_menu2_chk" type="checkbox" value="1" '.$back_menu2_chk.' /> [勾選顯示]<br><br>';
echo '下方版面 <input name="back_down_chk" type="checkbox" value="1" '.$back_down_chk.' /> [勾選顯示]<br><br>';
echo '首頁版面 <input name="back_index_chk" type="radio" value="0" '.$back_index_chk0.' />系統狀態 <input name="back_index_chk" type="radio" value="1" '.$back_index_chk1.' />自訂<br><br>';
echo '</ol>';
echo '<div class="right"><input value="更新" type="submit" /></div>';
echo '</div><input type="hidden" name="pinx" value="updata_style2"></form>';

}





function show_back_rss(){
global $database_link__document;
@require('../'.$database_link__document."/myrss.php");//資料夾連線
echo '<a href="./?action=add_rss">[新增RSS]</a>';
echo '<div class="back_div"><ol>';
	for($i=0;$i<count($myrss_pin);$i++){
	echo '<li><a href="./?action=rss_read&pin='.$myrss_pin[$i].'">'.$myrss_name[$i].'</a></li>';
	}
echo '</ol></div>';
}




function show_add_rss(){
echo '新增RSS';
echo '<form	 action="file_form.php"  method="post">RSS : <input name="title" type="text"  size="12" maxlength="80" /> <input value="新增" type="submit" /><input value="add_rss" name="pinx" type="hidden" /></form></div>';
}

function show_updata_rss($pin){
global $database_link__document;
@require('../'.$database_link__document."/myrss.php");
if(@in_array($pin,$myrss_pin)){
$num=array_search($pin,$myrss_pin);

echo '<div class="right"><a href="javascript:history.go(-1);">返回</a></div>';
echo '編輯RSS';
echo '<form	 action="file_form.php"  method="post">';
echo '<table   border="0" cellpadding="2" cellspacing="1">';
echo '<tr><td>RSS : <input name="title" type="text"  size="12" value="'.$myrss_name[$num].'" maxlength="80" /> </td></tr>';
echo '<tr><td>RSS編碼 : ';
echo '<select name="language">';
if($myrss_language[$num]==0){
$w0='selected';$w1='';$w2='';$w3='';$w4='';
}else if($myrss_language[$num]==1){
$w0='';$w1='selected';$w2='';$w3='';$w4='';
}else if($myrss_language[$num]==2){
$w0='';$w1='';$w2='selected';$w3='';$w4='';
}else if($myrss_language[$num]==3){
$w0='';$w1='';$w2='';$w3='selected';$w4='';
}else{
$w0='';$w1='';$w2='';$w3='';$w4='selected';
}

echo '<option value="0" '.$w0.'>Utf-8</option>';
echo '<option value="4" '.$w4.'>Utf-8+繁體</option>';
echo '<option value="1" '.$w1.'>Big-5</option>';
echo '<option value="2" '.$w2.'>GB2312</option>';
echo '<option value="3" '.$w3.'>GB2312+繁體</option>';
echo '</select>';

echo '</td></tr>';

if($myrss_open[$num]==1){
$opens1='checked';
$opens0='';
}else{
$opens1='';
$opens0='checked';
}
echo '<tr><td>是否展開 :  <input name="open" type="radio" value="1" '.$opens1.' /> 展開 <input name="open" type="radio" value="0" '.$opens0.' /> 縮排';
echo '</td></tr>';

echo '<tr><td>顯示 :  ';
$num_arrays=array('5','8','10','12','15','20','25','30');
echo '<select name="number">';
for($i=0;$i<count($num_arrays);$i++){
if($num_arrays[$i]==$myrss_num[$num])
	echo '<option value="'.$num_arrays[$i].'" selected>'.$num_arrays[$i].'</option>';
else
	echo '<option value="'.$num_arrays[$i].'">'.$num_arrays[$i].'</option>';
}
echo '</select>';
echo ' 筆 </td></tr>';


echo '<tr><td>網址 : <input name="url" type="text"  size="30" value="'.$myrss_url[$num].'" /></td></tr>';
echo '<tr><td align="right"><input value="編輯" type="submit" /></td></tr>';
echo '</table>';
echo '<input value="'.$pin.'" name="pin" type="hidden" /><input value="updata_rss" name="pinx" type="hidden" /></form>';
}else{
echo '<h3>很抱歉，找不到此RSS。</h3>';
}
}//fun


function show_rss_read($pin){
global $database_link__document;
@require('../'.$database_link__document."/myrss.php");//資料夾連線
if(@in_array($pin,$myrss_pin)){
	$num=array_search($pin,$myrss_pin);
echo '<h3><a href="rss.php?pin='.$myrss_pin[$num].'" target="_blank">'.$myrss_name[$num].'</a></h3>';
echo '<div class="right"><a href="./?action=rss_updata&pin='.$pin.'" target="_self">[編輯]</a> <a href="file_form.php?pinx=del_rss&pin='.$pin.'"  onClick="return confirm(\'您確定要刪除嗎?\')">[刪除]</a></div>';
echo '<script>var pin="'.$pin.'";</script>';
echo '<div id="rss_div">';
?>
		<script> loadData('rss.php?&pin='+pin, 'rss_div');</script>
<?
echo '</div>';
}else{
echo '<h3>很抱歉，找不到RSS位址。</h3>';
}

}
?>