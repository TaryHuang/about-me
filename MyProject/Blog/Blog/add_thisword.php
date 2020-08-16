<?
if($_COOKIE['thisword___add']!=$hot){

setcookie('thisword___add',$hot,time()+60);
include("all_function.php");
include("alls/add_184_all.php");
//-------
$files=new file_et;
//-------
$of=fopen('alls/add_184_all.php','w+');
fputs($of,'<?
');
$peo_num___184[$hot-1000]=($peo_num___184[$hot-1000]+1);
$files->file_puts($of,$num___184,'$num___184');
$files->file_puts($of,$date_start___184,'$date_start___184');
$files->file_puts($of,$por___184,'$por___184');
$files->file_puts($of,$peo_num___184,'$peo_num___184');
$files->file_puts($of,$date_add__184,'$date_add__184');
$files->file_puts($of,$ips___184,'$ips___184');
$files->file_puts($of,$end_ture__184,'$end_ture__184');
fputs($of,'
?>');
fclose($of);
header('location:index.php?comes=thisword&maths='.$maths.'&hot='.$hot.'#by');
}else{
header('location:index.php?comes=thisword&maths='.$maths.'&hot='.$hot.'#by');
}
?>