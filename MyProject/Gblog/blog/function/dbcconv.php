<?php
function dbcconv($text , $encode=1){
	if($encode == 0)
	{ 
		require("dbcconv_cht.php");
	}
	elseif($encode ==1)
	{
		require("dbcconv_chs.php");
	}

	for($i=0; $i < strlen($text);$i++ ){
		$str = substr($text,$i,3);
		if(dbcconv_isChinese($str))
		{
			$tmp .= $data[dbcconv_id($str)];
			$i=$i+2;
		}
		else
		{
			$tmp .= substr($text,$i,1);
		}
	}
	return $tmp;
}

function dbcconv_id($str)
{
    $tmp = ((ord($str[0]) - 228) * 4096) + ((ord($str[1]) - 184) * 64) + (ord($str[2]) - 128);
    return $tmp;
}

function dbcconv_isChinese($str)
{
	$id = dbcconv_id($str);
	if($id <= 20901 && $id >= 0)
	{
		return true;
	}
	else
	{
		return false;
	}
}


?>