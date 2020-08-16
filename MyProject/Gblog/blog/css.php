<?
	@require("database_link.php");
	@require($database_link__style."/ctrl_style.php");
	
	if($_GET[loc]=="back"){
	@require($database_link__style."/style_back.php");
		if(@in_array($ctrl_style_back,$style_back_pin)){
			$num_true=@array_search($ctrl_style_back,$style_back_pin);
			if(is_file($database_link__style.'/'.$style_back_pin[$num_true]))
			@include($database_link__style."/".$ctrl_style_back);
			else
			@include($database_link__style."/style.css");			
		}else{
			@include($database_link__style."/style.css");
		}//判定是否存在
	}else{
	@require($database_link__style."/style_homepage.php");
			if(@in_array($ctrl_style_homepage,$style_homepage_pin)){
			
			$num_true=@array_search($ctrl_style_homepage,$style_homepage_pin);
			if(is_file($database_link__style.'/'.$style_homepage_pin[$num_true]))
			@include($database_link__style."/".$ctrl_style_homepage);
			else
			@include($database_link__style."/style.css");	
			
			}else{
			@include($database_link__style."/style.css");
			}		
	}
?>