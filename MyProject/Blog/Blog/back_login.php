<?
include("alls/date_login.php");
if($____login_ip==$REMOTE_ADDR){
   $of=fopen("alls/date_login.php","w+");

   fputs($of,'<?  
   ');
   $write__fp='$____login_ip="";
   ';
   fputs($of,$write__fp);//�g�Jip
   $write__fp='$____login_time="'.(date("YmdHis")+120).'";
   ';
   fputs($of,$write__fp);//�g�J�����h�֮ɶ�
   $write__fp='$____login_this="'.$____login_this.'";
   ';
   fputs($of,$write__fp);//�g�J�n�J�ɶ�
   $write__fp='$____login_this_s="'.$____login_this_s.'";
   ';
   fputs($of,$write__fp);//�n�J�ɶ����o��
   $write__fp='$____login_next="'.$____login_next.'";
   ';
   fputs($of,$write__fp);//�W�@���n�J�ɶ�
   $write__fp='$____login_next_s="'.$____login_next_s.'";
   ';
   fputs($of,$write__fp);//�W�@���n�J�ɶ��ѿ�

   fputs($of,'  
    ?>');
   fclose($of);
}   
    echo '<script language="JavaScript" type="text/JavaScript">
    parent.lefts.location.href="login_pass.php";
    location.replace("login/index.php?val=back2");
    </script>';


?>