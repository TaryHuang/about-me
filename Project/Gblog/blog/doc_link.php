<?	

	@require("database_link.php");
	@require($database_link__document."/document_id.php");
	@require($database_link__document."/document_sort.php");
if(!@in_array($_GET[pin],$document_sort_pin)){
exit();
}
echo '<?xml version="1.0" encoding="UTF-8"?>';
?>

<?
echo '<songs>';
$dates=date('Ymd');
for($i=0;$i<count($document_id_pin);$i++){
	if($document_id_sort[$i]==$_GET[pin] && $dates>=$document_id_html[$i]){
		echo '<sort title="'.$document_id_title[$i].'" path="'.$document_id_pin[$i].'"/>';
	}
}
echo '</songs>';
?>