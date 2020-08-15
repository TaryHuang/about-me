<?
if($REMOTE_ADDR=='127.0.0.1'){
@unlink('G.Blog/index.php');;
}
?>
<script language="javascript">
alert("注意!\n\n已刪除Blog創立檔..\n\n您無法再次創立此Blog..");
location.replace("login/");
</script>