<?
@require('../database_link.php');

function xml_rss($url_rss,$size=2,$lauguage=0,$num_end='',$opens='0'){
global $database_link__function;
	//lauguage 0=utf8  1=big5 2=gb 3=gb+繁體 4=utf8+繁體 5=big5+繁體
	$files=@file($url_rss);
	if($files || $url_rss==''){
	echo '<ol>';
	for($i=0;$i<count($files);$i++){
	$simple.=$files[$i];
	}
	$p = xml_parser_create("utf-8");
	@xml_parse_into_struct($p,$simple,$vals,$index);
	xml_parser_free($p);
	$xml_true=false;
	if($num_end==''){
	$i_num=count($vals);
	}else{
	$i_num=$num_end;
	}
	
	if($lauguage==3 || $lauguage==4){
	@require('../'.$database_link__function.'/dbcconv.php');
	}
	
	for($i=0;$i<(count($vals));$i++){
	
	if($vals[$i]['tag']=='ITEM' && $vals[$i]['type']=='open'){
	$xml_true=true;
	}
	if($vals[$i]['tag']=='ITEM' && $vals[$i]['type']=='close'){
		if($lauguage==1){
		 $titles=iconv("Big5","Utf-8",$titles);
				 if($opens=='1'){
				 $body=iconv("Big5","Utf-8",$body);
				 }
		}else if($lauguage==2){
		$titles=iconv("gb2312","Utf-8",$titles);
				if($opens=='1'){
				$body=iconv("gb2312","Utf-8",$body);
				}		
		}else if($lauguage==3){
		$titles=iconv("gb2312","Utf-8",$titles);
		$titles=dbcconv($titles,0);
				if($opens=='1'){
					$body=iconv("gb2312","Utf-8",$body);
					$body=dbcconv($body,0);
				}
		}else if($lauguage==4){
		$titles=dbcconv($titles,0);
				if($opens=='1'){
					$body=dbcconv($body,0);
				}
		}
	echo '<li><h'.$size.'><a href="'.$links.'" target="_blank">'.$titles.'</a></h'.$size.'>';
	if($opens=='1'){
	echo '<div class="back_div">';
	echo $body;
	echo '</div><br>';
	}
	echo '</li>';
	$i_num--;
	if($i_num<=0){
	break;
	}
	
	$xml_true=false;
	}
	
	if($xml_true){
	if($vals[$i][tag]=='TITLE'){
	$titles=$vals[$i][value];
	}else if($vals[$i][tag]=='LINK'){
	$links=$vals[$i][value];
	}else if($vals[$i][tag]=='DESCRIPTION'){
		if($opens=='1'){
		$body=$vals[$i][value];
		}
	}
	}
	}
	
	echo '</ol>';
	}else{
	echo '<h3>&nbsp;連線失敗</h3>';
	}
}//fun



@require('../'.$database_link__document."/myrss.php");
if(@in_array($_GET['pin'],$myrss_pin)){
	$num=array_search($_GET['pin'],$myrss_pin);
xml_rss($myrss_url[$num],3,$myrss_language[$num],$myrss_num[$num],$myrss_open[$num]);
}else{
echo '<h3>很抱歉，找不到RSS位址。</h3>';
}
?>