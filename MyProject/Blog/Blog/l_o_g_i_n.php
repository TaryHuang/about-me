<?
include('alls/pass.php');
include('alls/add_423_all.php');
include('login___fun.php');
include('alls/date_login.php');
include('alls/bug_.php');
include('all_function.php');
include("alls/ip_back.php");
$banks=new file_et;
function bug_fun__($word__cool){
$bug___ip_u[count($bug___ip_u)]=$REMOTE_ADDR;
$bug___word_u[count($bug___word_u)]=$word__cool;
$bug___time_u[count($bug___time_u)]=date("m/d H:i");
$of=fopen("alls/bug_.php","w+");
fputs($of,'<?  ');
$banks->file_puts($of,$bug___ip_u,'$bug___ip_u');
$banks->file_puts($of,$bug___word_u,'$bug___word_u');
$banks->file_puts($of,$bug___time_u,'$bug___time_u');
fputs($of,'  ?>');
fclose($of);
}//end  �g�J�����T����fun


$pass_passs=$_POST[pass_b];
$word_passs=$_POST[word_b];
$pass_pass=pass_chan($pass_passs);
if($pass_pass==$pass_____p && $word_passs==$word_____p){

if($time_cookie=='1'){
$times=144000;
}else{
$times=18000;
}


if($win__blog_localhost=="127001"){












if($REMOTE_ADDR=='127.0.0.1'){
   $____login_this______=$____login_this;
   $____login_this_s_____=$____login_this_s;
   //�� �٨S�QW+�� ���O��
   $of=fopen("alls/date_login.php","w+");

   fputs($of,'<?  
   ');
   $write__fp='$____login_ip="'.$REMOTE_ADDR.'";
   ';
   fputs($of,$write__fp);//�g�Jip
   $write__fp='$____login_time="'.(date("YmdHis")+$times).'";
   ';
   fputs($of,$write__fp);//�g�J�����h�֮ɶ�
   $write__fp='$____login_this="'.date("m/d H:i").'";
   ';
   fputs($of,$write__fp);//�g�J�n�J�ɶ�
   $write__fp='$____login_this_s="'.date("YmdHis").'";
   ';
   fputs($of,$write__fp);//�n�J�ɶ����o��
   $write__fp='$____login_next="'.$____login_this______.'";
   ';
   fputs($of,$write__fp);//�W�@���n�J�ɶ�
   $write__fp='$____login_next_s="'.$____login_this_s_____.'";
   ';
   fputs($of,$write__fp);//�W�@���n�J�ɶ��ѿ�

   fputs($of,'  
    ?>');
   fclose($of);


   if($back=='go_back'){
    echo '<script language="JavaScript" type="text/JavaScript">
	alert("�W���n�J:'.$____login_this______.'");
    parent.lefts.location.href="login_pass.php";
	parent.tops.location.href="login_top.php";
    history.go(-2);
    </script>';
    }
	if($back==''){
    echo '<script language="JavaScript" type="text/JavaScript">
    alert("�W���n�J:'.$____login_this______.'");
	location.replace("index_login.htm");
     </script>';
	 }
    if($back=='out_join'){
	echo '<script language="JavaScript" type="text/JavaScript">
	alert("�W���n�J:'.$____login_this______.'");
    parent.lefts.location.href="login_pass.php";
	parent.tops.location.href="login_top.php";
    location.replace("login_bodys.php");
    </script>';
	}

}else{

$bug___ip_u[count($bug___ip_u)]=$REMOTE_ADDR;
$bug___word_u[count($bug___word_u)]='�D�����q���n�J';
$bug___time_u[count($bug___time_u)]=date("m/d H:i");
$of=fopen("alls/bug_.php","w+");
fputs($of,'<?  ');
$banks->file_puts($of,$bug___ip_u,'$bug___ip_u');
$banks->file_puts($of,$bug___word_u,'$bug___word_u');
$banks->file_puts($of,$bug___time_u,'$bug___time_u');
fputs($of,'  ?>');
fclose($of);

echo '<script language="JavaScript" type="text/JavaScript">
alert("-�����q���~�i�i�J-");
history.go(-1);
</script>';
}//���� �ثe��ܥ����q�� ���A���O�����q��














}else{








if($REMOTE_ADDR=='127.0.0.1'){
   $____login_this______=$____login_this;
   $____login_this_s_____=$____login_this_s;
   //�� �٨S�QW+�� ���O��
   $of=fopen("alls/date_login.php","w+");

   fputs($of,'<?  
   ');
   $write__fp='$____login_ip="'.$REMOTE_ADDR.'";
   ';
   fputs($of,$write__fp);//�g�Jip
   $write__fp='$____login_time="'.(date("YmdHis")+$times).'";
   ';
   fputs($of,$write__fp);//�g�J�����h�֮ɶ�
   $write__fp='$____login_this="'.date("m/d H:i").'";
   ';
   fputs($of,$write__fp);//�g�J�n�J�ɶ�
   $write__fp='$____login_this_s="'.date("YmdHis").'";
   ';
   fputs($of,$write__fp);//�n�J�ɶ����o��
   $write__fp='$____login_next="'.$____login_this______.'";
   ';
   fputs($of,$write__fp);//�W�@���n�J�ɶ�
   $write__fp='$____login_next_s="'.$____login_this_s_____.'";
   ';
   fputs($of,$write__fp);//�W�@���n�J�ɶ��ѿ�

   fputs($of,'  
    ?>');
   fclose($of);


   if($back=='go_back'){
    echo '<script language="JavaScript" type="text/JavaScript">
	alert("�W���n�J:'.$____login_this______.'");
    parent.lefts.location.href="login_pass.php";
	parent.tops.location.href="login_top.php";
    history.go(-2);
    </script>';
    }
	if($back==''){
    echo '<script language="JavaScript" type="text/JavaScript">
    alert("�W���n�J:'.$____login_this______.'");
	location.replace("index_login.htm");
     </script>';
	 }
    if($back=='out_join'){
	echo '<script language="JavaScript" type="text/JavaScript">
	alert("�W���n�J:'.$____login_this______.'");
    parent.lefts.location.href="login_pass.php";
	parent.tops.location.href="login_top.php";
    location.replace("login_bodys.php");
    </script>';
	}











}else{
$bug___ip_u[count($bug___ip_u)]=$REMOTE_ADDR;
$bug___word_u[count($bug___word_u)]='�~��IP���\�n�J';
$bug___time_u[count($bug___time_u)]=date("m/d H:i");
$of=fopen("alls/bug_.php","w+");
fputs($of,'<?  ');
$banks->file_puts($of,$bug___ip_u,'$bug___ip_u');
$banks->file_puts($of,$bug___word_u,'$bug___word_u');
$banks->file_puts($of,$bug___time_u,'$bug___time_u');
fputs($of,'  ?>');
fclose($of);



   $____login_this______=$____login_this;
   $____login_this_s_____=$____login_this_s;
   //�� �٨S�QW+�� ���O��
   $of=fopen("alls/date_login.php","w+");

   fputs($of,'<?  
   ');
   $write__fp='$____login_ip="'.$REMOTE_ADDR.'";
   ';
   fputs($of,$write__fp);//�g�Jip
   $write__fp='$____login_time="'.(date("YmdHis")+$times).'";
   ';
   fputs($of,$write__fp);//�g�J�����h�֮ɶ�
   $write__fp='$____login_this="'.date("m/d H:i").'";
   ';
   fputs($of,$write__fp);//�g�J�n�J�ɶ�
   $write__fp='$____login_this_s="'.date("YmdHis").'";
   ';
   fputs($of,$write__fp);//�n�J�ɶ����o��
   $write__fp='$____login_next="'.$____login_this______.'";
   ';
   fputs($of,$write__fp);//�W�@���n�J�ɶ�
   $write__fp='$____login_next_s="'.$____login_this_s_____.'";
   ';
   fputs($of,$write__fp);//�W�@���n�J�ɶ��ѿ�

   fputs($of,'  
    ?>');
   fclose($of);


   if($back=='go_back'){
    echo '<script language="JavaScript" type="text/JavaScript">
	alert("�W���n�J:'.$____login_this______.'");
    parent.lefts.location.href="login_pass.php";
	parent.tops.location.href="login_top.php";
    history.go(-2);
    </script>';
    }
	if($back==''){
    echo '<script language="JavaScript" type="text/JavaScript">
    alert("�W���n�J:'.$____login_this______.'");
	location.replace("index_login.htm");
     </script>';
	 }
    if($back=='out_join'){
	echo '<script language="JavaScript" type="text/JavaScript">
	alert("�W���n�J:'.$____login_this______.'");
    parent.lefts.location.href="login_pass.php";
	parent.tops.location.href="login_top.php";
    location.replace("login_bodys.php");
    </script>';
	}
}//���� �O�_�O"�����q���άO�Ҧ��q��  (�Ҧ��q���]������)"


}
}else{
$if_trues__='';
for($i=0;$i<(count($_ip_back_go));$i++){
if($_ip_back_go[$i]==$REMOTE_ADDR){
$if_trues__='true';
if($_time_back_go[$i]==date("Ymd")){
$_come_back_go[$i]=($_come_back_go[$i]+1);
$you_are_so_go=$_come_back_go[$i];
}//�P�w�p�G���Ѹ򤵤Ѯɶ� ����D  �N����A���ѿ��~�G��
$_time_back_go[$i]=date("Ymd");
$i=count($_ip_back_go)+2;
}
}//for


if($if_trues__!='true'){
$_ip_back_go[count($_ip_back_go)]=$REMOTE_ADDR;
$_time_back_go[count($_time_back_go)]=date("Ymd");
$_come_back_go[count($_come_back_go)]='1';
}


$of=fopen("alls/ip_back.php","w+");
fputs($of,'<?  ');
$banks->file_puts($of,$_ip_back_go,'$_ip_back_go');
$banks->file_puts($of,$_time_back_go,'$_time_back_go');
$banks->file_puts($of,$_come_back_go,'$_come_back_go');

fputs($of,'  ?>');
fclose($of);
if($you_are_so_go==10){
$bug___ip_u[count($bug___ip_u)]=$REMOTE_ADDR;
$bug___word_u[count($bug___word_u)]='�b���K�X���~�F10��';
$bug___time_u[count($bug___time_u)]=date("m/d H:i");
$of=fopen("alls/bug_.php","w+");
fputs($of,'<?  ');
$banks->file_puts($of,$bug___ip_u,'$bug___ip_u');
$banks->file_puts($of,$bug___word_u,'$bug___word_u');
$banks->file_puts($of,$bug___time_u,'$bug___time_u');
fputs($of,'  ?>');
fclose($of);
}//end 

if($you_are_so_go==30){
$bug___ip_u[count($bug___ip_u)]=$REMOTE_ADDR;
$bug___word_u[count($bug___word_u)]='�b���K�X���~�F30��';
$bug___time_u[count($bug___time_u)]=date("m/d H:i");
$of=fopen("alls/bug_.php","w+");
fputs($of,'<?  ');
$banks->file_puts($of,$bug___ip_u,'$bug___ip_u');
$banks->file_puts($of,$bug___word_u,'$bug___word_u');
$banks->file_puts($of,$bug___time_u,'$bug___time_u');
fputs($of,'  ?>');
fclose($of);
}//end 
echo '<script language="JavaScript" type="text/JavaScript">';
if($you_are_so_go>20){
echo 'alert("-���~�w�F20��-");';
echo 'alert("-�б����������g�@-");';
echo 'for(p='.$you_are_so_go.';p>0;p--){
alert("-�g�@�ѤU"+p+"��-");
}';
}else{
echo 'alert("-�b���K�X���~-");';
}
echo 'history.go(-1);
</script>';
}//end



?>