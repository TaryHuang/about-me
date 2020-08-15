<?	
	@require("database_link.php");
	@require($database_link__document."/document_sort.php");
echo '<?xml version="1.0" encoding="UTF-8"?>';
?>

<?
echo '<songs>';
for($i=0;$i<count($document_sort_pin);$i++){
	if($document_sort_hidden[$i]==1){
		echo '<sort title="'.$document_sort_title[$i].'" path="'.$document_sort_pin[$i].'"/>';
	}
}
echo '</songs>';
?>