<?
if($loc=='lborads'){
echo '<script language="javascript">
alert("-您成功完成留言 !-");
location.replace("index.php?comes=borad&maths='.$nums.'");
</script>';
}
if($loc=='lborad'){
echo '<script language="javascript">
location.replace("location.php?loc=lborads&nums='.$nums.'");
</script>';
}

if($loc=='noborad'){
echo '<script language="javascript">
alert("-您輸入的驗證碼有誤!-");
history.go(-1);
</script>';
}

if($loc=='this__input_error'){
echo '<script language="javascript">
alert("-您輸入的字元有誤!-");
history.go(-1);
</script>';
}
if($loc=='this__all_add_up'){
echo '<script language="javascript">
alert("- Sorry! 回覆已達上限-");
history.go(-1);
</script>';
}

if($loc=='lthisword'){
echo '<script language="javascript">
location.replace("location.php?loc=lthiswords&maths='.$mothss.'&hot='.$hots.'");
</script>';
}
if($loc=='lthiswords'){
echo '<script language="javascript">
alert("-您成功完成回覆 !-");
location.replace("index.php?comes=thisword&maths='.$maths.'&hot='.$hot.'");
</script>';
}


if($loc=='lmycool'){
echo '<script language="javascript">
location.replace("location.php?loc=lmycools");
</script>';
}
if($loc=='lmycools'){
echo '<script language="javascript">
alert("-您成功寄信 !-");
location.replace("index.php");
</script>';
}



if($loc=='nothisword'){
echo '<script language="javascript">
alert("-您輸入的驗證碼有誤!-");
history.go(-1);
</script>';
}
?>