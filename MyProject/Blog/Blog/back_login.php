<?
include("alls/date_login.php");
if($____login_ip==$REMOTE_ADDR){
   $of=fopen("alls/date_login.php","w+");

   fputs($of,'<?  
   ');
   $write__fp='$____login_ip="";
   ';
   fputs($of,$write__fp);//寫入ip
   $write__fp='$____login_time="'.(date("YmdHis")+120).'";
   ';
   fputs($of,$write__fp);//寫入給予多少時間
   $write__fp='$____login_this="'.$____login_this.'";
   ';
   fputs($of,$write__fp);//寫入登入時間
   $write__fp='$____login_this_s="'.$____login_this_s.'";
   ';
   fputs($of,$write__fp);//登入時間的油錯
   $write__fp='$____login_next="'.$____login_next.'";
   ';
   fputs($of,$write__fp);//上一次登入時間
   $write__fp='$____login_next_s="'.$____login_next_s.'";
   ';
   fputs($of,$write__fp);//上一次登入時間由錯

   fputs($of,'  
    ?>');
   fclose($of);
}   
    echo '<script language="JavaScript" type="text/JavaScript">
    parent.lefts.location.href="login_pass.php";
    location.replace("login/index.php?val=back2");
    </script>';


?>