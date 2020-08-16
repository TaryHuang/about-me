<?
	@require("database_link.php");
	@require($database_link__div."/div_ctrl.php");
	@require($database_link__div."/div_pin.php");
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?
	if($homepage_index_chk==1){

for($i=0;$i<count($div__pin);$i++){
	if($div__loc[$i]=='index' && $div__sort[$i]=='1'){
	if(is_file($database_link__div."/".$div__pin[$i])){
		file_show($database_link__div."/".$div__pin[$i]);
	}else{
	echo '<h3>檔案已遺失...</h3>';
	}
	}
}//for
exit();
	}else{


@require($database_link__document."/document_id.php");
@require($database_link__document."/document_sort.php");
@require($database_link__style."/ctrl_style.php");
$num=$homepage_show_news;

echo "最新文章";
$dates=date('Ymd');
	echo '<ol class="main_one_ol">';
	end($document_id_pin);
	end($document_id_title);
	end($document_id_start_date);
	end($document_id_sort);
	end($document_id_pw);
	end($document_id_html);
	for($i=0;$i<count($document_id_pin);$i++){
	if($num==0){
		break ;
	}
		if(@in_array(pos($document_id_sort),$document_sort_pin)){
		if($document_sort_hidden[array_search(pos($document_id_sort),$document_sort_pin)]==1 && $dates>=pos($document_id_html)){
		echo '<div class="main_one"><li class="main_one_li"><h3><a href="?pin='.pos($document_id_pin).'">'.show_html_str(pos($document_id_title)).'</a> ';
			if(pos($document_id_pw)!=''){
			echo '<img src="images/a3.gif">';
			}
		echo '</h3><div class="main_one_date"><a href="body.php?pin='.pos($document_id_pin).'" target="_blank">[庫存頁面]</a> 發表日期 : '.date_change(pos($document_id_start_date)).'</div></li></div>';
		$num--;
		}
		}
	prev($document_id_pin);
	prev($document_id_title);
	prev($document_id_start_date);
	prev($document_id_sort);
	prev($document_id_pw);
	prev($document_id_html);
	}
	echo "</ol>";
	}
?>