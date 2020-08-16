<?
$free_fun_pin='349kail13O3V';





$this_pin_frees='p_is_ip_say_hello';//回應此ip 





$this__name__free='回應ip程式..';//創作人





$this__title__free='可以針對特定ip發出訊息或是留言.. 可做警告或交友..';//標題






$this__fun__free='<form  method="post" action="alls/free_form.php">
<table width="192" border="0" cellspacing="2" cellpadding="2">
  <tr>
    <td width="142">回應ip程式</td>
  </tr>
  <tr>
    <td>ip :
      <input name="this_ip1" type="text" id="this_ip1" size="3" maxlength="3" style="font-size:12px"> 
      . 
      <input name="this_ip2" type="text" id="this_ip2" size="3" maxlength="3" style="font-size:12px">
      .
      <input name="this_ip3" type="text" id="this_ip3" size="3" maxlength="3" style="font-size:12px">
      .
      <input name="this_ip4" type="text" id="this_ip4" size="3" maxlength="3" style="font-size:12px"> </td>
  </tr>
    <tr>
    <td>訊息
      <select name="c_title">
        <option value="0" selected>安安ㄚ..</option>
        <option value="1">網站警告..</option>
        <option value="2">我想跟你做朋友..</option>
        <option value="3">回覆您的留言..</option>
        <option value="4">合作提案..</option>
        <option value="5">老師說..</option>
        <option value="6">您提到的問題..</option>
        <option value="7">意不意外 開不開心</option>
        <option value="8">飛鴿傳書</option>
		<option value="9">愛的告白</option>
		<option value="10">履歷表</option>
		<option value="11">恐嚇信</option>
		<option value="12">電腦病毒</option>
		<option value="13">駭客任務</option>
		</select></td>
  </tr>
      <tr>
      <td>過 
        <select name="del_day" id="del_day">
          <option value="1" selected>1天</option>
          <option value="3">3天</option>
          <option value="7">7天</option>
          <option value="10">10天</option>
        </select> 
        後刪除..</td>
  </tr>
  <tr>
    <td>
      <div align="center">
        <textarea name="body" cols="40" rows="7" wrap="VIRTUAL"></textarea>
      </div></td>
  </tr>
  <tr>
    <td valign="top"><div align="right">
      <input name="submit" type="submit"  style="font-size:12px" value="紀錄">
    </div></td>
  </tr>
</table>
      <input type="hidden"  name="this_form_change" value="p_is_ip_say_hello">
</form>
';//給予表單



$this__form__free='
$blank=new file_et;
function switch_changes($num_value){
$J_false="true";
for($i=0;$i<strlen($num_value);$i++){
switch($num_value[$i]){
case "1":;break;
case "2":;break;
case "3":;break;
case "4":;break;
case "5":;break;
case "6":;break;
case "7":;break;
case "8":;break;
case "9":;break;
case "0":;break;
default:$J_false="false";
}//switch
}
return $J_false;
}//end

$blank2=new mysql_et;

$body=$blank2->str_re($body);

$this_ip1_x=switch_changes($this_ip1);
$this_ip2_x=switch_changes($this_ip2);
$this_ip3_x=switch_changes($this_ip3);
$this_ip4_x=switch_changes($this_ip4);
$this_IP=$this_ip1.".".$this_ip2.".".$this_ip3.".".$this_ip4;
if($this_ip1_x=="true" && $this_ip2_x=="true" && $this_ip3_x=="true" &&  $this_ip4_x=="true" && $this_ip1!="" && $this_ip2!="" && $this_ip3!="" && $this_IP!="127.0.0.1" && strlen($body)<1200 && strlen($body)>5){
switch($del_day){
case 1:$days=1;break;
case 3:$days=3;break;
case 7:$days=7;break;
case 10:$days=10;break;
default:$days=3;
}


switch($c_title){
case 0:$title_c_value="安安ㄚ..";break;
case 1:$title_c_value="網站警告..";break;
case 2:$title_c_value="我想跟你做朋友..";break;
case 3:$title_c_value="回覆您的留言..";break;
case 4:$title_c_value="合作提案..";break;
case 5:$title_c_value="老師說..";break;
case 6:$title_c_value="您提到的問題..";break;
case 7:$title_c_value="意不意外 開不開心";break;
case 8:$title_c_value="飛鴿傳書";break;
case 9:$title_c_value="愛的告白";break;
case 10:$title_c_value="恐嚇信";break;
case 11:$title_c_value="履歷表";break;
case 12:$title_c_value="電腦病毒";break;
case 13:$title_c_value="駭客任務";break;
default:$title_c_value="原來你想破解此程式";
}


@include("ob_ip_say_hello.php");
$of=fopen("ob_ip_say_hello.php","w+");
fputs($of,"<?
");
$nums_ips=count($ob_say_hello_ip);
$ob_say_hello_ip[$nums_ips]=$this_IP;
$ob_say_hello_title[$nums_ips]=$title_c_value;
$ob_say_hello_body[$nums_ips]=$body;
$ob_say_hello_date[$nums_ips]=date("Y/m/d H:i:s");
$ob_say_hello_true[$nums_ips]="0";
$ob_say_hello_del_time[$nums_ips]=(date("Ymd")+$days);
$blank->file_puts($of,$ob_say_hello_ip,'."'".'$ob_say_hello_ip'."'".');//IP
$blank->file_puts($of,$ob_say_hello_title,'."'".'$ob_say_hello_title'."'".');//標題
$blank->file_puts($of,$ob_say_hello_body,'."'".'$ob_say_hello_body'."'".');//內容
$blank->file_puts($of,$ob_say_hello_true,'."'".'$ob_say_hello_true'."'".');//是否被開啟
$blank->file_puts($of,$ob_say_hello_date,'."'".'$ob_say_hello_date'."'".');//日期
$blank->file_puts($of,$ob_say_hello_del_time,'."'".'$ob_say_hello_del_time'."'".');//幾天後刪除
fputs($of,"
?>");


header("location:../login_bodys.php?ppiinnss=ok___987");
}else{
header("location:../login_bodys.php?ppiinnss=eorro_987");
}

';//怎樣做處理




?>