<?
	//**前端
	function all_word_homepage($num){
		switch($num){
		case 0:return "網站關閉中。";break;
		case 3:return "安裝成功，系統即將刪除安裝檔案。";break;
		case 10:return "失敗，密碼錯誤。";break;
		case 11:return "失敗，找不到要留言的文章。";break;
		case 13:return "成功，完成留言。";break;
		case 14:return "失敗，驗證碼遭重覆。";break;
		case 15:return "失敗，驗證碼錯誤。";break;
		case 16:return "很抱歉，此文章不開放留言。";break;
		case 17:return "很抱歉，請稍後在試....";break;
		case 18:return "很抱歉，您似乎沒有權限。";break;
		case 20:return "很抱歉，找不到您要的文章。";break;
		case 22:return "很抱歉，找不到此分類。";break;
		default: 0;
		}
	}
	//*************
	
	
	
	
	
	
	
	//**後端
	function all_word_back($num){
		switch($num){
		case 10:return array("文章管理",'RSS閱讀',"樣版模組","系統訊息","管理系統");break;
		case 101:return array("text",'rss',"style","message","ctrl");break;
		case 20:return array('系統樣式','版面設定',"分類排序",'安裝模組');break;
		case 201:return array("updata_style",'updata_style2',"updata_sort",'setup');break;
		default: 0;
		}
	}
	//*************
	
	
	
	//**location -傳送點
	function all_str_send($num){
		switch($num){
		case 00:return "成功登入。";break;
		case 01:return "登入失敗。";break;
		case 02:return "失敗，字元錯誤。";break;
		case 03:return "系統發生錯誤。";break;
		case 04:return "登入錯誤達 5 次。\\n請逾三分鐘後 再試．．．";break;
		case 05:return "您無法進入。";break;
		case 05:return "請稍後再試．．．";break;
		case 10:return "成功，新增一筆文章。";break; 
		case 11:return "成功，刪除文章。";break; 
		case 12:return "成功，編輯文章。";break; 
		case 20:return "成功，更新樣式。";break; 
		case 21:return "成功，更新系統。";break; 
		case 30:return "成功，更新Style。";break;
		case 31:return "成功，排序分類。";break;
		case 32:return "成功，建立分類。";break;
		case 33:return "成功，編輯分類。";break;
		case 34:return "成功，刪除分類。";break;
		case 35:return "成功，回覆留言。";break;
		case 36:return "成功，更新回覆留言。";break;
		case 37:return "成功，刪除留言。";break;
		case 38:return "成功，安裝模組。";break;
		case 39:return "成功，卸下模組。";break;
		case 40:return "成功，更新版面。";break;
		case 41:return "成功，新增RSS。";break;
		case 42:return "成功，刪除RSS。";break;
		case 43:return "成功，更新RSS。";break;
		case 44:return "完成，系統修復。";break;
		case 45:return "成功，檢測已紀錄。";break;
		case 46:return "成功，新增版面樣式。";break;
		case 47:return "成功，刪除版面樣式。";break;
		case 48:return "成功，修改版面樣式。";break;
		default:0;
		}
	}
?>