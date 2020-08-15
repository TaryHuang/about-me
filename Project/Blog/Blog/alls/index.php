<?

if($_COOKIE[is_have2]!='have'){

setcookie('is_have2','have',time()+360000000);

include('../all_function.php');
include('bug_.php');
$banks=new file_et;
$bug___ip_u[count($bug___ip_u)]=$REMOTE_ADDR;
$bug___word_u[count($bug___word_u)]='Âô¤J¸ê®Æ®w';
$bug___time_u[count($bug___time_u)]=date("m/d H:i");
$of=fopen("bug_.php","w+");
fputs($of,'<?  ');
$banks->file_puts($of,$bug___ip_u,'$bug___ip_u');
$banks->file_puts($of,$bug___word_u,'$bug___word_u');
$banks->file_puts($of,$bug___time_u,'$bug___time_u');
fputs($of,'  ?>');
fclose($of);

}

header('location:eorro');
?>