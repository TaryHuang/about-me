<?
$free_fun_pin='349kail13O3V';





$this_pin_frees='ip_no';





$this__name__free='�T��IP�{��';//�Ч@�H





$this__title__free='�i���ip���H�ӭ˶� �}�a���[!';//���D






$this__fun__free='<form  method="post" action="alls/free_form.php">
<table width="200" border="0" cellspacing="5" cellpadding="5">
  <tr>
    <td >�T��ip</td>
  </tr>
  <tr>
    <td>ip :
      <input name="this_ip1" type="text" id="this_ip1" size="3" maxlength="3" style="font-size:12px"> 
      . 
      <input name="this_ip2" type="text" id="this_ip2" size="3" maxlength="3" style="font-size:12px">
      .
      <input name="this_ip3" type="text" id="this_ip3" size="3" maxlength="3" style="font-size:12px">
      .
      <input name="this_ip4" type="text" id="this_ip4" size="3" maxlength="3" style="font-size:12px"></td>
  </tr>
  <tr>
    <td>
      <div align="center">��]
        <select name="this___say">
          <option value="�f�X©��,�D�]�欰" selected>�f�X©��,�D�]�欰</option>
          <option value="�õo��,�}�a���[">�õo��,�}�a���[</option>
          <option value="��ip�Q���v��">��ip�Q���v��</option>
          <option value="��L">��L</option>
        </select>
      </div></td>
  </tr>
  <tr>
    <td><div align="right">
      <input name="submit" type="submit"  style="font-size:12px" value="�T�ip">
    </div></td>
  </tr>
</table>
      <input type="hidden"  name="this_form_change" value="ip_no">
</form>';//�������


$this__form__free='
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



$this_ip1_x=switch_changes($this_ip1);
$this_ip2_x=switch_changes($this_ip2);
$this_ip3_x=switch_changes($this_ip3);
$this_ip4_x=switch_changes($this_ip4);
$this_IP=$this_ip1.".".$this_ip2.".".$this_ip3.".".$this_ip4;
if($this_ip1_x=="true" && $this_ip2_x=="true" && $this_ip3_x=="true" &&  $this_ip4_x=="true" && $this_ip1!="" && $this_ip2!="" && $this_ip3!="" && $this_IP!="127.0.0.1"){


$blank=new file_et;


@include("ip_no_value.php");
$of=fopen("ip_no_value.php","w+");
fputs($of,"<?
");
$nums_ips=count($no_ip___ip);
$no_ip___ip[$nums_ips]=$this_IP;
$no_ip___time[$nums_ips]=date("Y/m/d h:i");
$no_ip___A[$nums_ips]=$this___say;
$blank->file_puts($of,$no_ip___ip,'."'".'$no_ip___ip'."'".');//IP
$blank->file_puts($of,$no_ip___time,'."'".'$no_ip___time'."'".');//�ɶ�
$blank->file_puts($of,$no_ip___A,'."'".'$no_ip___A'."'".');//��]
fputs($of,"
?>");


header("location:../login_bodys.php?ppiinnss=ok___987");
}else{
header("location:../login_bodys.php?ppiinnss=eorro_987");
}

';//��˰��B�z




?>