<?
$free_fun_pin='349kail13O3V';





$this_pin_frees='p_is_ip_say_hello';//�^����ip 





$this__name__free='�^��ip�{��..';//�Ч@�H





$this__title__free='�i�H�w��S�wip�o�X�T���άO�d��.. �i��ĵ�i�Υ��..';//���D






$this__fun__free='<form  method="post" action="alls/free_form.php">
<table width="192" border="0" cellspacing="2" cellpadding="2">
  <tr>
    <td width="142">�^��ip�{��</td>
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
    <td>�T��
      <select name="c_title">
        <option value="0" selected>�w�w��..</option>
        <option value="1">����ĵ�i..</option>
        <option value="2">�ڷQ��A���B��..</option>
        <option value="3">�^�бz���d��..</option>
        <option value="4">�X�@����..</option>
        <option value="5">�Ѯv��..</option>
        <option value="6">�z���쪺���D..</option>
        <option value="7">�N���N�~ �}���}��</option>
        <option value="8">���F�Ǯ�</option>
		<option value="9">�R���i��</option>
		<option value="10">�i����</option>
		<option value="11">���~�H</option>
		<option value="12">�q���f�r</option>
		<option value="13">�b�ȥ���</option>
		</select></td>
  </tr>
      <tr>
      <td>�L 
        <select name="del_day" id="del_day">
          <option value="1" selected>1��</option>
          <option value="3">3��</option>
          <option value="7">7��</option>
          <option value="10">10��</option>
        </select> 
        ��R��..</td>
  </tr>
  <tr>
    <td>
      <div align="center">
        <textarea name="body" cols="40" rows="7" wrap="VIRTUAL"></textarea>
      </div></td>
  </tr>
  <tr>
    <td valign="top"><div align="right">
      <input name="submit" type="submit"  style="font-size:12px" value="����">
    </div></td>
  </tr>
</table>
      <input type="hidden"  name="this_form_change" value="p_is_ip_say_hello">
</form>
';//�������



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
case 0:$title_c_value="�w�w��..";break;
case 1:$title_c_value="����ĵ�i..";break;
case 2:$title_c_value="�ڷQ��A���B��..";break;
case 3:$title_c_value="�^�бz���d��..";break;
case 4:$title_c_value="�X�@����..";break;
case 5:$title_c_value="�Ѯv��..";break;
case 6:$title_c_value="�z���쪺���D..";break;
case 7:$title_c_value="�N���N�~ �}���}��";break;
case 8:$title_c_value="���F�Ǯ�";break;
case 9:$title_c_value="�R���i��";break;
case 10:$title_c_value="���~�H";break;
case 11:$title_c_value="�i����";break;
case 12:$title_c_value="�q���f�r";break;
case 13:$title_c_value="�b�ȥ���";break;
default:$title_c_value="��ӧA�Q�}�Ѧ��{��";
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
$blank->file_puts($of,$ob_say_hello_title,'."'".'$ob_say_hello_title'."'".');//���D
$blank->file_puts($of,$ob_say_hello_body,'."'".'$ob_say_hello_body'."'".');//���e
$blank->file_puts($of,$ob_say_hello_true,'."'".'$ob_say_hello_true'."'".');//�O�_�Q�}��
$blank->file_puts($of,$ob_say_hello_date,'."'".'$ob_say_hello_date'."'".');//���
$blank->file_puts($of,$ob_say_hello_del_time,'."'".'$ob_say_hello_del_time'."'".');//�X�ѫ�R��
fputs($of,"
?>");


header("location:../login_bodys.php?ppiinnss=ok___987");
}else{
header("location:../login_bodys.php?ppiinnss=eorro_987");
}

';//��˰��B�z




?>