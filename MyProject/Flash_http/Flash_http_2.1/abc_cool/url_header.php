<?

ob_start();

include("cool.php");//全部的網址都來這轉址且做動作

$pin_kk47_WINS=$_POST[pin_kk47];

if($pin_kk47=='aaa23'){
$my_pin_kk47="文章人氣加分";
}//end
switch($pin_kk47_WINS){
case aaa1:$my_pin_kk47="更改密碼";break;
case aaa2:$my_pin_kk47="發送私信";break;
case aaa3:$my_pin_kk47="申請帳號";break;
case aaa4:$my_pin_kk47="忘記密碼";break;
case aaa10:$my_pin_kk47="基本資料修改";break;
case aaa11:$my_pin_kk47="個人資料修改";break;
case aaa12:$my_pin_kk47="刪除私信";break;
case aaa13:$my_pin_kk47="刪除通訊錄資料";break;
case aaa14:$my_pin_kk47="加入通訊錄";break;
case aaa15:$my_pin_kk47="刪除備份信封";break;
case aaa16:$my_pin_kk47="新增一筆文章";break;
case aaa17:$my_pin_kk47="加入我的最愛";break;
case aaa18:$my_pin_kk47="回覆文章";break;
case aaa19:$my_pin_kk47="刪除我的最愛";break;
case aaa20:$my_pin_kk47="修改此文章";break;
case aaa24:$my_pin_kk47="修改回覆文章a";break;
case aaa25:$my_pin_kk47="復活文章a";break;

case aaa26:$my_pin_kk47="加入黑名單";break;
}
/*--------------------------------------------
$sql="";
$data=sql_b($sql);
-------------------------------*/
if($my_pin_kk47=="更改密碼"){
$b__2006_7_8_1=$_POST[pin_myuser_1988];//帳號
$b__2006_7_8_2=$_POST[password_aass106_0];//密碼舊
//-----------------------------------------



$b__2006_7_8_3=$_POST[password_aass106_2];//密碼新
$b__2006_7_8_4=$_POST[password_aass106_1];//密碼新

$b__2006_7_8_3=pass_u_go_out($b__2006_7_8_3);
$b__2006_7_8_4=pass_u_go_out($b__2006_7_8_4);
 
if(strlen($b__2006_7_8_3)>=4){
if($b__2006_7_8_3==$b__2006_7_8_4){
if(preg_match("/[^0-9a-zA-Z]+/",$b__2006_7_8_3)){
header("location:../h_ya/indax.php?windown=mypassword_15");
}else{

$b__2006_7_8_44="OK";
}

if($b__2006_7_8_44=="OK"){
$sql="SELECT `user` , `pass` 
FROM `pass` 
WHERE 1 AND `user` = '$b__2006_7_8_1' AND `pass` = '$b__2006_7_8_2'";
$data_sssssss=sql_b($sql);

if($data_sssssss[0][0]!=''){
$sql="UPDATE `pass` SET `pass` = '$b__2006_7_8_3' WHERE  `user` = '$b__2006_7_8_1' AND `pass` = '$b__2006_7_8_2' ";
$data=sql_a($sql);
//這邊要注意的事  就是帳號要先確認 不要讓不是自己登入帳號  但可以修改其他人密碼
header("location:../h_ya/indax.php?windown=mypassword_1");
}else{

header("location:../h_ya/indax.php?windown=mypassword_2");

}//判定 舊密碼 是否是正確的

}else{

header("location:../h_ya/indax.php?windown=mypassword_2");

}//判定 舊密碼 是否是正確的

}else{
header("location:../h_ya/indax.php?windown=mypassword_3");

}//判定 密碼 跟密碼確認  是否一樣mypassword_1
}else{
header("location:../h_ya/indax.php?windown=mypassword_31");
}//密碼低於 四個字元

}//end







































if($my_pin_kk47=="發送私信"){
$f_2006_7_8_1=$_POST[send_2006_7_5_i];
$f_2006_7_8_2=$_POST[send_2006_7_5_d];
$f_2006_7_8_3=$_POST[send_2006_7_5_f];
$f_2006_7_8_4=$_POST[send_2006_7_5_a];
$f_2006_7_8_5=$_POST[send_2006_7_5_e];
$f_2006_7_8_6=$_POST[send_2006_7_5_b];
$f_2006_7_8_7=$_POST[send_2006_7_5_c];
//-------------




$f_2006_7_8_3=pass_u_go_out($f_2006_7_8_3);
$f_2006_7_8_2=pass_u_go_out($f_2006_7_8_2);

$sql2212_b="SELECT * 
FROM `pass` 
WHERE 1 AND `user` = '$f_2006_7_8_1' AND `win` = '開' ";

$sqldhiu1hd=sql_b($sql2212_b);

if($sqldhiu1hd[0][0]!=''){

//----------
if($_COOKIE["powers_a"]!='不可寫入'){





if($f_2006_7_8_5=='yes'){

//-----開啟檔案+流水編號
$f_4_f=file("f_4.h");//取資料
$f_4_o=fopen("f_4.h","w+");//開啟檔案
$f_4_f[0]++;
fputs($f_4_o,$f_4_f[0]);//寫入
fclose($f_4_o);//關閉檔案
//-----

$ssql="INSERT INTO `e_mails` ( `num` , `uesr` , `title` , `body` ) 
VALUES (
'$f_4_f[0]', '$f_2006_7_8_1', '$f_2006_7_8_2', '$f_2006_7_8_3'
);";
sql_a($ssql);

}//end 判定是否要 備份

switch($f_2006_7_8_4){
case '0':$my_2006_7_5_aa="暱稱";break;
case '1':$my_2006_7_5_aa="通訊錄";break;
}//判定 通訊錄 選擇 還是暱稱





$rabs_1=rand(1,13);
$aaaas_color=array('#000000','#666666','#999999','#CCCCCC','#FFFFFF','#FF50A7','#FF5096','#FF5084','#FF5073','#FF5061','#FF5050','#FF6250','#FF7C50','#FF8550','#FF8D50','#FF9650','#FF9F50','#FFA850','#FFB050','#FFB950','#FFC250','#FFCB50','#FFD350','#FFDD78','#FFE478','#FFEB78','#FFF278','#FFF878','#FFFF78'
,'#F8FF78','#F1FF78','#EBFF78','#E4FF78','#DDFF78','#D2FF78','#C0FF78','#AEFF78','#9CFF78','#8AFF78','#78FF78','#78FF8A','#78FF9C',
'#78FFAE','#78FFC0','#78FFD2','#78FFDD','#78FFE4','#78FFEB','#78FFF2','#78FFF8','#78FFFF','#78F8FF','#78F1FF','#78EBFF','#78E4FF','#78DDFF','#78D2FF','#78C0FF','#78AEFF','#789CFF'
,'#788AFF','#7878FF','#8A78FF','#9C78FF','#AE78FF','#C778FF','#D278FF','#DD78FF','#E978FF','#F478FF','#FF78FF','#FF78F4','#FF78E8','#FF78DD','#FF78C7','#FFCC00','#FF9900','#990000','#663399','#3366FF','#0033FF','#FFFF00','#996600','#FF0066','');

$rabs_1_a=rand(0,count($aaaas_color));
switch($rabs_1){
case 1;$rabs_2='
[psq_=color:'.$aaaas_color[$rabs_1_a].'=_2]
∴╭┐┌╮ 
╭┘└┘└╮ 
└┐．．┌┘─╮　　　 
╭┴──┤★~~├╮ 信 封 灌 灌 水 ^^ 
│ｏ　ｏ│　　│● 　 
╰┬──╯　　│ ~~~~~~~~~哞 
▲△▲△▲△▲△▲△▲△▲△▲△▲△▲△▲ 
[/psq_==_2]';break;
case 2;$rabs_2='
[psq_=color:'.$aaaas_color[$rabs_1_a].'=_2]

╭═════╮ 
║★★★★★ ＼     - 一千顆星星 給您許個願望 -
║我來灌水囉!! ╰╡     
║★★★★★★★★★★★ 
║灌水水★★★╭╡ ★★★ ★ 
║★★★★★ ╱　 　★★★★★★★★
╰═════╯ 　　　★★★ ★★★★★★★★★
[/psq_==_2]
';break;
case 3;$rabs_2='
[psq_=color:'.$aaaas_color[$rabs_1_a].'=_2]
╭╮＿＿╭╭╭╭╭＿＿╭╮ 
│　　　　　　　　　　　│　　　╭─────╮ 
│　　　　　　　　　　　│　　　│ＨＥＬＬＯ│ 
│　．　╭───╮　．　│　╭╮│今天安安阿│ 　 
│≡　　│●　●│　　≡│Ｏ╰╯╰─────╯ 
│　　　╰───╯　　　│　 
╰──┬○────┬─○╯ 
[/psq_==_2]';break;

case 4;$rabs_2='
[psq_=color:'.$aaaas_color[$rabs_1_a].'=_2]
* ☆∵ ▁▂▄▂▁．★∵∴☆．★∵∴ 
∴★◢█████◣* ☆．∴★∵★ * ☆ 
☆◢████☆██◣．∴天氣冷了,☆ 
◢■◤█████◥█◣．送你一件毛衣,* ★ 
◥◤∴█████．◥◤∵小心別著涼了！∵☆ 
* ☆∴█████:∴★∵* * ☆．:∴★∵ 
◇∵★█████☆．∵★*:☆∵*◇∵ ☆ 希望我都有份啦!!!!!! 
:∴★∵* * ☆．:∴★∵ ☆．∴★∵* * ☆ 
[/psq_==_2]
';break;
case 5;$rabs_2='
[psq_=color:'.$aaaas_color[$rabs_1_a].'=_2]
◢██████◣　　　　　　◢████◣      給我胡羅菠!
◢◤　　　　　　◥◣　　　　◢◤　　　　◥◣ 
◤　　　　　　　　◥◣　　◢◤　　　　　　█ 
▎　　　◢█◣　　　◥◣◢◤　　◢█　　　█ 
◣　　◢◤　　◥◣　　　　　　◢◣◥◣　◢◤ 
◥██◤ ◢◤ 　　　　　　◥██◤ 
　　　　　　█　●　　　　　　　●　█ 
　　　　　　█　〃　　　▄　　　〃　█ 
　　　　 　 ◥◣　　　╚╩╝　　　◢◤ 
　　　　　　　◥█▅▃▃　▃▃▅█◤ 
　　　　　　　　　◢◤　　　◥◣ 
　　　　　　　　　█　　　　　█ 
　　　　　　　　◢◤▕　　　▎◥◣ 
　　　　　　　▕▃◣◢▅▅▅◣◢▃ 
[/psq_==_2]
';break;
case 6;$rabs_2='    
[psq_=color:'.$aaaas_color[$rabs_1_a].'=_2]
        
Ζ╭═∩═∩═╮zｚZΖ︻︻ 
·z∥ (－﹏－) ∥▂▂︴◣◢ 
╭═●═══●═╮▄︻═—．‧碰

[/psq_==_2]
';break;
case 7;$rabs_2='
[psq_=color:'.$aaaas_color[$rabs_1_a].'=_2]
    ╦╦　　　　　　　　 ══ 
　╔╬╬╗　═╬═　　　 ╔╗　　　╔══╗ 
　╚╩╩╝　╦╩╦　═　 ╚╝　╔╗╠══╝ 
　　╬╬　　╩╦╩　╦╯╔╦╗ ║║╠╦══ 
　　╰╬　　═╬═　╣⊕╠╬╣ ╚╝║╚╦╣ 
　　　　　　　　　　　　╚╩╝　 　╯　╬ 
　　　　　　　　　　　　　　　　　 　═╩═
[/psq_==_2]
';break;

case 8;$rabs_2='
[psq_=color:'.$aaaas_color[$rabs_1_a].'=_2]
送你六隻可愛的貓咪呀!!~cc
 ∩︵∩ 　∩︵∩ 　∩︵∩
（◎◎） （⊙⊙） （☆★）
⊿ˍ）╯ ⊿ ˍ）╯ ⊿ ˍ）╯
晚上的貓 白天的貓 害羞的貓 


 ∩︵∩　∩︵∩ 　∩︵∩
（◎★）（⊕⊕） （！！）
⊿ˍ）╯ ⊿ˍ）╯ ⊿ˍ）╯
惡作劇的貓 深夜的貓 愛哭的貓 
[/psq_==_2]
';break;
case 9;$rabs_2='
[psq_=color:'.$aaaas_color[$rabs_1_a].'=_2]
。 
滿　能　　。 
祝　帶　　。　　　◢█◣▁▁▁▁▁▁▁▁◢█◣ 
福　給　　。　　　◤　　　　　　　　　　　　◥ 
的　你　　　。　　▏　◢█◣　　　　◢█◣　　│ 
幸　無　　　　◢█◣　██●　◥◤　●██　　│ 
運　數　　　　◥██◣◥█◤　　　　◥█◤　　/ 
草　的　　　　　◥█◤▂▃▄▅▆▇▇▆▅▄▃╱ 
　　幸　　　　　　│　　　　趴趴熊　　　　　◢█◣ 
　　運　　　　　　│　　　　　　　　　　　　◥██◣ 
　　與　　　　　◢◣　　　　　　　　　　　◢◣◥█◤ 
　　快　　　　◢██◣　　　　　　　　　◢██◣ 
　　樂　　　　████─────────████ 
[/psq_==_2]';break;
case 10;$rabs_2='
[psq_=color:'.$aaaas_color[$rabs_1_a].'=_2]
            找到摯愛友嚕

☆．°∴°☆﹒﹒‧☆°∴°☆．∴°☆☆．°∴°☆ ☆．°∴°☆☆．°∴°
　　╰／∕﹨＼　　　／∕﹨＼　╰╮／∕﹨＼ 
　　／　　　　＼　／　　　　＼　／　　　　＼ 
　／　　　 　　／　　　　　　＼　　 　　　 ＼ 
∕ ●　　　● ∕ 　● 　●　 ﹨　●　　●　﹨ 
| ○　 ▽　　 |　○　 ▽ 　○　︱ 　 ▽　 ○︱ 
◥███████████████████████████◤

[/psq_==_2]
';break;
case 11;$rabs_2='
[psq_=color:'.$aaaas_color[$rabs_1_a].'=_2]

~~~~~~~~~~~︿       別再讓我死一次..
ㄒㄒㄒㄒ~／　　＼ 
ㄏㄏㄏ~／∕ ︳﹨　＼ 
灌水~／ ∕　︳﹨　　＼ 
^^~／　　　　　　　　＼ 
~／　　　　　　　　　　 ＼ 
∕　　﹏﹏　 　　﹏﹏　　 ﹨ 
| 　　　　　　　　　　　　︱ 
╰▄▄▃▃▂▽▂▃▃▄▄╯ 
';break;
case 12;$rabs_2='
 [psq_=color:'.$aaaas_color[$rabs_1_a].'=_2]                      
					    
★★★★★★★★★★★ 
╭／＼☆────／＼╮　╭／＼─────／＼╮ 
│　　　　　　　　　│　│　＼　　　　　／　│ 
│　●　　　　　●　│　│　●　　　　　●　│ 
│○　╰───╯　○│　│〃　╰┬┬┬╯　〃│ 
│　　　　　　　　　│　│　　　╰─╯　　　│ 
╰─┬Ｏ───Ｏ┬─╯　╰─┬○───○┬─╯  
[/psq_==_2]
';break;

case 13;$rabs_2='
[psq_=color:'.$aaaas_color[$rabs_1_a].'=_2]
                        
啊～～～～夢想找到沒.. 
＿═════∩═════ ＿
　　　　　╭╬╮　　　　　　　　　 ◢ 
▁╭▅▆▇□□█▇▆▅▄▃▂▁(╳)█╮ 
　╰═▃__▁▁▁▁▁∠════▔▔▔　 
　　　　╙O 　 ╙O 
[/psq_==_2]
';break;
}//end 圖案





















if($my_2006_7_5_aa=='暱稱'){



if($f_2006_7_8_2!='' && strlen($f_2006_7_8_3)>=5  ){

$f_2006_7_8_3=$f_2006_7_8_3.'





'.$rabs_2;


$sql_a="SELECT * 
FROM `pass` 
WHERE 1 AND `name` 
= '$f_2006_7_8_6'";
$data_a=sql_b($sql_a);

//判定暱稱日否有人
if($data_a[0][0]=='' || $data_a[0][1]==$f_2006_7_8_1){
header('location:../h_ya/indax.php?windown=mypassword_19');
}else{
//-----開啟檔案+流水編號
$f_2_f=file("f_2.h");//取資料
$f_2_o=fopen("f_2.h","w+");//開啟檔案
$f_2_f[0]++;
fputs($f_2_o,$f_2_f[0]);//寫入
fclose($f_2_o);//關閉檔案
//-----
$sql_a="SELECT * 
FROM `pass` 
WHERE 1 AND `name` 
= '$f_2006_7_8_6'";
$data_a=sql_b($sql_a);
$data1_you=$data_a[0][1];//你的帳號
$data2_you=$data_a[0][3];//你的暱稱

//----------------------------收信 你
$sql_b="SELECT * 
FROM `pass` 
WHERE 1 AND `user` 
= '$f_2006_7_8_1'";
$data_b=sql_b($sql_b);
$data1_my=$data_b[0][1];//我的帳號
$data2_my=$data_b[0][3];//我的暱稱
$data3_my=$data_b[0][0];//給人看我的資料的
//----------------------------寄信 我






$sql333="INSERT INTO `e_mail` ( `num` , `name` , `name_2` , `time` , `title` , `body` , `true` , `uesr` , `pin_gs` , `ip`, `ddddd` ) 
VALUES (
'$f_2_f[0]', '$data2_you', '$data2_my', NOW( ) , '$f_2006_7_8_2', '$f_2006_7_8_3', '未閱讀', '$data1_you', '$data1_my', '$REMOTE_ADDR', '$data3_my'
);
";
sql_a($sql333);

setcookie('powers_a','不可寫入',time()+30);
header('location:../h_ya/indax.php?windown=mypassword_8');
}

}else{
header('location:../h_ya/indax.php?windown=mypassword_18');

}

}




if($my_2006_7_5_aa=='通訊錄'){


if($f_2006_7_8_2!='' && strlen($f_2006_7_8_3)>=5 && $f_2006_7_8_7!=''){
$sql_a21="SELECT * 
FROM `pass` 
WHERE 1 AND `Num` 
= '$f_2006_7_8_7'";


$f_2006_7_8_3=$f_2006_7_8_3.'




'.$rabs_2;



$data_a=sql_b($sql_a21);
if($data_a[0][1]!=''){
//-----開啟檔案+流水編號
$f_2_f=file("f_2.h");//取資料
$f_2_o=fopen("f_2.h","w+");//開啟檔案
$f_2_f[0]++;
fputs($f_2_o,$f_2_f[0]);//寫入
fclose($f_2_o);//關閉檔案
//-----

$data1_you=$data_a[0][1];//你的帳號
$data2_you=$data_a[0][3];//你的暱稱

//----------------------------收信 你
$sql_b="SELECT * 
FROM `pass` 
WHERE 1 AND `user` 
= '$f_2006_7_8_1'";
$data_b=sql_b($sql_b);
$data1_my=$data_b[0][1];//我的帳號
$data2_my=$data_b[0][3];//我的暱稱
$data3_my=$data_b[0][0];//給人看我的資料的
//----------------------------寄信 我







$sql333="INSERT INTO `e_mail` ( `num` , `name` , `name_2` , `time` , `title` , `body` , `true` , `uesr` , `pin_gs` , `ip`, `ddddd` ) 
VALUES (
'$f_2_f[0]', '$data2_you', '$data2_my', NOW( ) , '$f_2006_7_8_2', '$f_2006_7_8_3', '未閱讀', '$data1_you', '$data1_my', '$REMOTE_ADDR', '$data3_my'
);
";
sql_a($sql333);

setcookie('powers_a','不可寫入',time()+30);
header('location:../h_ya/indax.php?windown=mypassword_8');

}else{
header('location:../h_ya/indax.php?windown=mypassword_19');

}//通訊錄


}else{

header('location:../h_ya/indax.php?windown=mypassword_18');
}


}















}else{

header('location:../h_ya/indax.php?windown=mypassword_20');
}

}else{
header('location:../h_ya/indax.php?windown=mypassword_101');

}//end 被禁言



}//end

































if($my_pin_kk47=="申請帳號"){
//---------------------------------------------------必須被 正規表示
$a__2006_7_8_1=$_POST[user_d100]; //帳號 OK
$a__2006_7_8_2=$_POST[pass_d100]; //密碼 OK
$a__2006_7_8_3=$_POST[pass_2_d100]; //再輸入一次密碼  ok
$a__2006_7_8_4=$_POST[name_d100]; //暱稱 OK
$a__2006_7_8_5=$_POST[email]; //E-MAIL 
$a__2006_7_8_6=$_POST[bir_1_d100]; //西元 ok
$a__2006_7_8_7=$_POST[name_1_d100]; //真實姓名 
$a__2006_7_8_8=$_POST[pass_A_d100]; //答案 
//----------------------------------
$a__2006_7_8_9=$_POST[bir_2_d100]; //生日 月   ok
$a__2006_7_8_10=$_POST[bir_3_d100]; //生日 日 ok
$a__2006_7_8_11=$_POST[pass_Q_d100]; //問題 ok
$a__2006_7_8_12=$_POST[boy_1_d100]; //性別 ok

//------------------正規表示

if($a__2006_7_8_1!='' && $a__2006_7_8_2!='' && $a__2006_7_8_3!='' && $a__2006_7_8_4!=''  && $a__2006_7_8_5!='' && $a__2006_7_8_6!='' && $a__2006_7_8_7!=''){

if($a__2006_7_8_1!=$a__2006_7_8_2){

$sql___1="SELECT * 
FROM `pass` 
WHERE 1 AND `user` = '$a__2006_7_8_1' ";
$sql___1i=sql_b($sql___1);
if($sql___1i[0][0]==''){
$a__2006_7_8_ok='成功1_1';
}else{
header('location:../index.php?add=open_3');
}//是否有重複 帳號 

if($a__2006_7_8_ok=='成功1_1'){


$a__2006_7_8_4=pass_u_go_out($a__2006_7_8_4);

if(strlen($a__2006_7_8_4)>=4 && strlen($a__2006_7_8_4)<=20 ){


$a__2006_7_8_ok='成功1';

}else{

header('location:../index.php?add=open_5');
}//END
}//把不規則的字取代掉




if($a__2006_7_8_ok=='成功1'){
$sql___1="SELECT * 
FROM `pass` 
WHERE 1 AND `name` = '$a__2006_7_8_4' ";
$sql___1i=sql_b($sql___1);
if($sql___1i[0][0]==''){
$a__2006_7_8_ok='成功2';
}else{
header('location:../index.php?add=open_4');

}
}//是否暱稱


if($a__2006_7_8_ok=='成功2'){
if(strlen($a__2006_7_8_1)>=4 && strlen($a__2006_7_8_1)<=12 ){

if(preg_match("/[^0-9a-zA-Z_]+/",$a__2006_7_8_1)){
header('location:../index.php?add=open_1');
}else{
$a__2006_7_8_ok='成功3';
}//END

}else{

header('location:../index.php?add=open_2');
}//END
}//帳號是否有



if($a__2006_7_8_ok=='成功3'){

if($a__2006_7_8_2==$a__2006_7_8_3){

if(strlen($a__2006_7_8_3)>=4 && strlen($a__2006_7_8_3)<=12 ){

if(preg_match("/[^0-9a-zA-Z]+/",$a__2006_7_8_1)){
header('location:../index.php?add=open_6');
}else{
$a__2006_7_8_ok='成功4';
}//END

}else{

header('location:../index.php?add=open_8');
}//END


}else{

header('location:../index.php?add=open_7');
}//判定確認密碼 是否正確

}//判定密碼是否正確



if($a__2006_7_8_ok=='成功4'){


$a__2006_7_8_7=pass_u_go_out($a__2006_7_8_7);

$a__2006_7_8_8=pass_u_go_out($a__2006_7_8_8);

$a__2006_7_8_5=pass_u_go_out($a__2006_7_8_5);

$a__2006_7_8_6=pass_u_go_out($a__2006_7_8_6);


$a__2006_7_8_ok='成功5';

}//解決所有的阻礙


if($a__2006_7_8_ok=='成功5'){
if(strlen($a__2006_7_8_6)==4){
if(preg_match("/[^0-9]+/",$a__2006_7_8_6)){
header('location:../index.php?add=open_9');
}else{
$a__2006_7_8_ok='成功6';
}//END
}else{
header('location:../index.php?add=open_9');
}//end 字元對吧 
}//end


if($a__2006_7_8_ok=='成功6'){
if(strlen($a__2006_7_8_7)>=2){

$a__2006_7_8_ok='成功7';


}else{

header('location:../index.php?add=open_10');
}//end 字元對吧 
}//end



if($a__2006_7_8_ok=='成功7'){
if(strlen($a__2006_7_8_8)>=2){

$a__2006_7_8_ok='成功8';


}else{

header('location:../index.php?add=open_12');
}//end 
}//end 答案


if($a__2006_7_8_ok=='成功8'){
if(strlen($a__2006_7_8_5)>=8){


if(preg_match("/[^0-9a-zA-Z_.@]+/",$a__2006_7_8_1)){
header('location:../index.php?add=open_13');
}else{
$a__2006_7_8_ok='成功AA';
}//END

}else{

header('location:../index.php?add=open_13');
}//end 字元對吧 
}//end  







if($a__2006_7_8_ok=='成功AA'){
$f_1_f=file("f_1.h");//取資料
$f_1_o=fopen("f_1.h","w+");//開啟檔案
$f_1_f[0]++;
fputs($f_1_o,$f_1_f[0]);//寫入
fclose($f_1_o);//關閉檔案






$sql="INSERT INTO `pass` ( `Num` , `user` , `pass` , `name` , `boy_girl` , `email` , `birsday_1` , `birsday_2` , `birsday_3` , `Q_` , `A_` , `from` , `my_HTTP` , `W` , `INT` , `JOB` , `P_URL` , `Lv100` , `come_num` , `win` , `kkss1` , `kkss2` , `kkss3` , `landtime` , `true_name` ,`p_url_2`,`p_true` ) 
VALUES (
'$f_1_f[0]', '$a__2006_7_8_1', '$a__2006_7_8_2', '$a__2006_7_8_4', '$a__2006_7_8_12', '$a__2006_7_8_5', '$a__2006_7_8_6', '$a__2006_7_8_9', '$a__2006_7_8_10', '$a__2006_7_8_11', '$a__2006_7_8_8', '台灣..', 'http://', '', '', '無', 'http://', '5', '1', '關', '1', '1', '0', NOW( ) , '$a__2006_7_8_7','1','0'
);";
sql_a($sql);//申請成功  接下來是 寫入私信+上 一天無法 發言


//-----開啟檔案+流水編號
$f_2_f8=file("f_2.h");//取資料
$f_2_o8=fopen("f_2.h","w+");//開啟檔案
$f_2_f8[0]++;
fputs($f_2_o8,$f_2_f8[0]);//寫入
fclose($f_2_o8);//關閉檔案
//-----

$title_s201='[新手報到 謙虛三天]' ;
$body_s201='歡迎 '.$a__2006_7_8_4 .' 加入此論壇
由於您是[psq_=color:#FFCC00=_2]新加入的成員[/psq_==_2] 且為了維護[psq_=color:#FFCC00=_2]論壇品質[/psq_==_2] 
新手將3天的時間[psq_=color:#FF6699=_2][ 無法發言 ][/psq_==_2]  請您見諒 ^^&

在此您可以填入個人資料 讓所有人更認識妳
請不忘您之前填入的(同意書) 尊重別人 也修養自己!

';






$rabs_1=rand(1,13);
$aaaas_color=array('#000000','#666666','#999999','#CCCCCC','#FFFFFF','#FF50A7','#FF5096','#FF5084','#FF5073','#FF5061','#FF5050','#FF6250','#FF7C50','#FF8550','#FF8D50','#FF9650','#FF9F50','#FFA850','#FFB050','#FFB950','#FFC250','#FFCB50','#FFD350','#FFDD78','#FFE478','#FFEB78','#FFF278','#FFF878','#FFFF78'
,'#F8FF78','#F1FF78','#EBFF78','#E4FF78','#DDFF78','#D2FF78','#C0FF78','#AEFF78','#9CFF78','#8AFF78','#78FF78','#78FF8A','#78FF9C',
'#78FFAE','#78FFC0','#78FFD2','#78FFDD','#78FFE4','#78FFEB','#78FFF2','#78FFF8','#78FFFF','#78F8FF','#78F1FF','#78EBFF','#78E4FF','#78DDFF','#78D2FF','#78C0FF','#78AEFF','#789CFF'
,'#788AFF','#7878FF','#8A78FF','#9C78FF','#AE78FF','#C778FF','#D278FF','#DD78FF','#E978FF','#F478FF','#FF78FF','#FF78F4','#FF78E8','#FF78DD','#FF78C7','#FFCC00','#FF9900','#990000','#663399','#3366FF','#0033FF','#FFFF00','#996600','#FF0066','');

$rabs_1_a=rand(0,count($aaaas_color));
switch($rabs_1){
case 1;$rabs_2='
[psq_=color:'.$aaaas_color[$rabs_1_a].'=_2]
∴╭┐┌╮ 
╭┘└┘└╮ 
└┐．．┌┘─╮　　　 
╭┴──┤★~~├╮  信 封 灌 灌 水 ^^ 
│ｏ　ｏ│　　│● 　 
╰┬──╯　　│ ~~~~~~~~~哞 
▲△▲△▲△▲△▲△▲△▲△▲△▲△▲△▲ 
[/psq_==_2]';break;
case 2;$rabs_2='
[psq_=color:'.$aaaas_color[$rabs_1_a].'=_2]

╭═════╮ 
║★★★★★ ＼     - 一千顆星星 給您許個願望 -
║我來灌水囉!! ╰╡     
║★★★★★★★★★★★ 
║灌水水★★★╭╡ ★★★ ★ 
║★★★★★ ╱　 　★★★★★★★★
╰═════╯ 　　　★★★ ★★★★★★★★★
[/psq_==_2]
';break;
case 3;$rabs_2='
[psq_=color:'.$aaaas_color[$rabs_1_a].'=_2]
╭╮＿＿╭╭╭╭╭＿＿╭╮ 
│　　　　　　　　　　　│　　　╭─────╮ 
│　　　　　　　　　　　│　　　│ＨＥＬＬＯ│ 
│　．　╭───╮　．　│　╭╮│今天安安阿│ 　 
│≡　　│●　●│　　≡│Ｏ╰╯╰─────╯ 
│　　　╰───╯　　　│　 
╰──┬○────┬─○╯ 
[/psq_==_2]';break;

case 4;$rabs_2='
[psq_=color:'.$aaaas_color[$rabs_1_a].'=_2]
* ☆∵ ▁▂▄▂▁．★∵∴☆．★∵∴ 
∴★◢█████◣* ☆．∴★∵★ * ☆ 
☆◢████☆██◣．∴天氣冷了,☆ 
◢■◤█████◥█◣．送你一件毛衣,* ★ 
◥◤∴█████．◥◤∵小心別著涼了！∵☆ 
* ☆∴█████:∴★∵* * ☆．:∴★∵ 
◇∵★█████☆．∵★*:☆∵*◇∵ ☆ 希望我都有份啦!!!!!! 
:∴★∵* * ☆．:∴★∵ ☆．∴★∵* * ☆ 
[/psq_==_2]
';break;
case 5;$rabs_2='
[psq_=color:'.$aaaas_color[$rabs_1_a].'=_2]
◢██████◣　　　　　　◢████◣      給我胡羅菠!
◢◤　　　　　　◥◣　　　　◢◤　　　　◥◣ 
◤　　　　　　　　◥◣　　◢◤　　　　　　█ 
▎　　　◢█◣　　　◥◣◢◤　　◢█　　　█ 
◣　　◢◤　　◥◣　　　　　　◢◣◥◣　◢◤ 
◥██◤ ◢◤ 　　　　　　◥██◤ 
　　　　　　█　●　　　　　　　●　█ 
　　　　　　█　〃　　　▄　　　〃　█ 
　　　　 　 ◥◣　　　╚╩╝　　　◢◤ 
　　　　　　　◥█▅▃▃　▃▃▅█◤ 
　　　　　　　　　◢◤　　　◥◣ 
　　　　　　　　　█　　　　　█ 
　　　　　　　　◢◤▕　　　▎◥◣ 
　　　　　　　▕▃◣◢▅▅▅◣◢▃ 
[/psq_==_2]
';break;
case 6;$rabs_2='    
[psq_=color:'.$aaaas_color[$rabs_1_a].'=_2]
        
Ζ╭═∩═∩═╮zｚZΖ︻︻ 
·z∥ (－﹏－) ∥▂▂︴◣◢ 
╭═●═══●═╮▄︻═—．‧碰

[/psq_==_2]
';break;
case 7;$rabs_2='
[psq_=color:'.$aaaas_color[$rabs_1_a].'=_2]
    ╦╦　　　　　　　　 ══ 
　╔╬╬╗　═╬═　　　 ╔╗　　　╔══╗ 
　╚╩╩╝　╦╩╦　═　 ╚╝　╔╗╠══╝ 
　　╬╬　　╩╦╩　╦╯╔╦╗ ║║╠╦══ 
　　╰╬　　═╬═　╣⊕╠╬╣ ╚╝║╚╦╣ 
　　　　　　　　　　　　╚╩╝　 　╯　╬ 
　　　　　　　　　　　　　　　　　 　═╩═
[/psq_==_2]
';break;

case 8;$rabs_2='
[psq_=color:'.$aaaas_color[$rabs_1_a].'=_2]
送你六隻可愛的貓咪呀!!~cc
 ∩︵∩ 　∩︵∩ 　∩︵∩
（◎◎） （⊙⊙） （☆★）
⊿ˍ）╯ ⊿ ˍ）╯ ⊿ ˍ）╯
晚上的貓 白天的貓 害羞的貓 


 ∩︵∩　∩︵∩ 　∩︵∩
（◎★）（⊕⊕） （！！）
⊿ˍ）╯ ⊿ˍ）╯ ⊿ˍ）╯
惡作劇的貓 深夜的貓 愛哭的貓 
[/psq_==_2]
';break;
case 9;$rabs_2='
[psq_=color:'.$aaaas_color[$rabs_1_a].'=_2]
。 
滿　能　　。 
祝　帶　　。　　　◢█◣▁▁▁▁▁▁▁▁◢█◣ 
福　給　　。　　　◤　　　　　　　　　　　　◥ 
的　你　　　。　　▏　◢█◣　　　　◢█◣　　│ 
幸　無　　　　◢█◣　██●　◥◤　●██　　│ 
運　數　　　　◥██◣◥█◤　　　　◥█◤　　/ 
草　的　　　　　◥█◤▂▃▄▅▆▇▇▆▅▄▃╱ 
　　幸　　　　　　│　　　　趴趴熊　　　　　◢█◣ 
　　運　　　　　　│　　　　　　　　　　　　◥██◣ 
　　與　　　　　◢◣　　　　　　　　　　　◢◣◥█◤ 
　　快　　　　◢██◣　　　　　　　　　◢██◣ 
　　樂　　　　████─────────████ 
[/psq_==_2]';break;
case 10;$rabs_2='
[psq_=color:'.$aaaas_color[$rabs_1_a].'=_2]
            找到摯愛友嚕

☆．°∴°☆﹒﹒‧☆°∴°☆．∴°☆☆．°∴°☆ ☆．°∴°☆☆．°∴°
　　╰／∕﹨＼　　　／∕﹨＼　╰╮／∕﹨＼ 
　　／　　　　＼　／　　　　＼　／　　　　＼ 
　／　　　 　　／　　　　　　＼　　 　　　 ＼ 
∕ ●　　　● ∕ 　● 　●　 ﹨　●　　●　﹨ 
| ○　 ▽　　 |　○　 ▽ 　○　︱ 　 ▽　 ○︱ 
◥███████████████████████████◤

[/psq_==_2]
';break;
case 11;$rabs_2='
[psq_=color:'.$aaaas_color[$rabs_1_a].'=_2]

~~~~~~~~~~~︿       別再讓我死一次..
ㄒㄒㄒㄒ~／　　＼ 
ㄏㄏㄏ~／∕ ︳﹨　＼ 
灌水~／ ∕　︳﹨　　＼ 
^^~／　　　　　　　　＼ 
~／　　　　　　　　　　 ＼ 
∕　　﹏﹏　 　　﹏﹏　　 ﹨ 
| 　　　　　　　　　　　　︱ 
╰▄▄▃▃▂▽▂▃▃▄▄╯ 
';break;
case 12;$rabs_2='
 [psq_=color:'.$aaaas_color[$rabs_1_a].'=_2]                      
					    
★★★★★★★★★★★ 
╭／＼☆────／＼╮　╭／＼─────／＼╮ 
│　　　　　　　　　│　│　＼　　　　　／　│ 
│　●　　　　　●　│　│　●　　　　　●　│ 
│○　╰───╯　○│　│〃　╰┬┬┬╯　〃│ 
│　　　　　　　　　│　│　　　╰─╯　　　│ 
╰─┬Ｏ───Ｏ┬─╯　╰─┬○───○┬─╯  
[/psq_==_2]
';break;

case 13;$rabs_2='
[psq_=color:'.$aaaas_color[$rabs_1_a].'=_2]
                        
啊～～～～夢想找到沒.. 
＿═════∩═════ ＿
　　　　　╭╬╮　　　　　　　　　 ◢ 
▁╭▅▆▇□□█▇▆▅▄▃▂▁(╳)█╮ 
　╰═▃__▁▁▁▁▁∠════▔▔▔　 
　　　　╙O 　 ╙O 
[/psq_==_2]
';break;
}//end 圖案

$body_s201=$body_s201.'

'.$rabs_2;


$sql3331o="INSERT INTO `e_mail` ( `num` , `name` , `name_2` , `time` , `title` , `body` , `true` , `uesr` , `pin_gs` , `ip`, `ddddd` ) 
VALUES (
'$f_2_f8[0]', '$a__2006_7_8_4', '[ 論壇系統 ]', NOW( ) , '$title_s201', '$body_s201', '未閱讀', '$a__2006_7_8_1', '[系統]', '[系統]', '001'
);
";
sql_a($sql3331o);

$timessss=259200;
$job_star=array('[ 我是個謙虛的新手 ]','[ 低調新手誕生 ]','[ 我是新手請跟我做朋友 ]','[ 新手欠教育 老兵指教了 ]','[ 庵是新手請跟我通信 ]');

$randsss=rand(0,count($job_star));

$randsss_job=$job_star[$randsss];

$sql3331o11="INSERT INTO `lea_user` ( `num` , `user` , `true_now` , `false_time` , `day_time_now` , `user_num` , `mmqw` , `fqewqw` , `daysssss` ) 
VALUES (
'$f_1_f[0]', '$a__2006_7_8_4', NOW( ) , NOW( )+$timessss , NOW( ), '[ 論壇系統 ]', '0', '$randsss_job', '3'
);";
sql_a($sql3331o11);


//這邊要注意的事  就是帳號要先確認 不要讓不是自己登入帳號  但可以修改其他人密碼

header('location:../index.php?add=worry105');

}


}else{

header('location:../index.php?add=worry106');
}//end 無法帳號 密碼相等


}else{
header('location:../index.php?add=worry107');
}


}//end 申請帳號














if($my_pin_kk47=="忘記密碼"){
$c_2006_7_8_1=$_POST[user_d101]; //帳號
$c_2006_7_8_2=$_POST[name_d101]; //真實信明


$sql="SELECT `Num` , `user` , `birsday_2` , `birsday_3` , `true_name` 
FROM `pass` 
WHERE 1 AND `user` 
= '$c_2006_7_8_1' AND `true_name` 
= '$c_2006_7_8_2'";
$data_d101=sql_b($sql);


if($data_d101[0][1]!=''){

$nnnns=rand(5,9);
//2006-($save108_d101_A[0][1]*$save108_d101_A[0][2])+($nnnns*$nnnns*$nnnns)
$num_d101=2006-($data_d101[0][3]*$data_d101[0][2])+($nnnns*$nnnns*$nnnns);
$data_d101data_d101=$data_d101[0][0]+1365;
header('location:../index.php?add=save108&number_d101='.$num_d101.'&user_d101='.$data_d101data_d101.'&nnnns='.$nnnns);
//這邊要注意的事 生日+總來 header();
}//end 判定是否正確
else{

header('location:../index.php?add=say_102');

}
}




if($my_pin_kk47=="基本資料修改"){
$d_2006_7_8_1=$_POST[qq_2006_7_4]; //問題
$d_2006_7_8_2=$_POST[aa_2006_7_4]; //答案
$d_2006_7_8_3=$_POST[user_2006_7_4_a]; //帳號
$d_2006_7_8_4=$_POST[ph_2006_7_4]; //電話
$d_2006_7_8_5=$_POST[em_2006_7_4]; //email

$d_2006_7_8_2=pass_u_go_out($d_2006_7_8_2);

$d_2006_7_8_5=pass_u_go_out($d_2006_7_8_5);

$d_2006_7_8_4=pass_u_go_out($d_2006_7_8_4);


if(strlen($d_2006_7_8_2)>=4){

$d_2006_7_8_6='成功1';
}else{
header("location:../h_ya/indax.php?windown=mypassword_17");
}

if($d_2006_7_8_6=='成功1'){
if(strlen($d_2006_7_8_5)>=9){
$d_2006_7_8_6='OK';
}else{
header("location:../h_ya/indax.php?windown=mypassword_16");
}
}//end



if($d_2006_7_8_6=='OK'){
$sql="UPDATE `pass` SET `email` = '$d_2006_7_8_5',
`Q_` = '$d_2006_7_8_1',
`A_` = '$d_2006_7_8_2',
`pho_num` = '$d_2006_7_8_4' WHERE `user` = '$d_2006_7_8_3' ";
sql_a($sql);


header("location:../h_ya/indax.php?windown=mypassword_4");
}//end
}



if($my_pin_kk47=="個人資料修改"){
$e_2006_7_8_1=$_POST[bo_2006_7_4_i]; //問題
$e_2006_7_8_2=$_POST[bo_2006_7_4_h]; //答案
$e_2006_7_8_3=$_POST[bo_2006_7_4_f]; //帳號
$e_2006_7_8_4=$_POST[bo_2006_7_4_j]; //電話
$e_2006_7_8_5=$_POST[bo_2006_7_4_a]; //email
$e_2006_7_8_6=$_POST[bo_2006_7_4_b]; //問題
$e_2006_7_8_7=$_POST[bo_2006_7_4_c]; //答案
$e_2006_7_8_8=$_POST[bo_2006_7_4_d]; //帳號
$e_2006_7_8_9=$_POST[bo_2006_7_4_e]; //電話
$e_2006_7_8_10=$_POST[bo_2006_7_4_g]; //email
$e_2006_7_8_11=$_POST[user_2006_7_4_a];


//-------------
$e_2006_7_8_4=pass_u_go_out($e_2006_7_8_4);

$e_2006_7_8_10=pass_u_go_out($e_2006_7_8_10);

$e_2006_7_8_3=pass_u_go_out($e_2006_7_8_3);

$e_2006_7_8_2=pass_u_go_out($e_2006_7_8_2);

$e_2006_7_8_1=pass_u_go_out($e_2006_7_8_1);

//--------------

$sql="UPDATE `pass` SET `W` = '$e_2006_7_8_1',
`INT` = '$e_2006_7_8_2' ,`my_HTTP`='$e_2006_7_8_3',`P_URL`='$e_2006_7_8_4'
,`kkss1`='$e_2006_7_8_5'
,`kkss2`='$e_2006_7_8_6'
,`p_url_2`='$e_2006_7_8_7'
,`p_size`='$e_2006_7_8_8'
,`P_true`='$e_2006_7_8_9'
,`from`='$e_2006_7_8_10'
  WHERE `user` = '$e_2006_7_8_11'";
sql_a($sql);


header("location:../h_ya/indax.php?windown=mypassword_5");
}



if($my_pin_kk47=="刪除私信"){

$sql="SELECT `num` , `uesr` 
FROM `e_mail` 
WHERE 1 AND `num` = '$sss_2006_7_5_b' AND `uesr` = '$sss_2006_7_5_a' ";
$ddddd_2006_7_5=sql_b($sql);//判定查詢 此email 是否等於 當時人的

if($ddddd_2006_7_5[0][0]!=''){
$sql="DELETE FROM `e_mail` WHERE `num` = '$sss_2006_7_5_b' AND `uesr` = '$sss_2006_7_5_a'";
sql_a($sql);
header("location:../h_ya/indax.php?windown=mypassword_6");

}else{

header("location:../h_ya/indax.php?windown=mypassword_7");

}//判定是否是 帳號的當事人
}//end




if($my_pin_kk47=="刪除通訊錄資料"){
$g__2006_7_8_1=$_POST[f_200675_b];
$g__2006_7_8_2=$_POST[f_200675_a];

$sql="DELETE FROM `f_s` WHERE `num` = '$g__2006_7_8_1' AND `user2` = '$g__2006_7_8_2' ";
sql_a($sql);


header("location:../h_ya/indax.php?windown=mypassword_10");
}



if($my_pin_kk47=="加入通訊錄"){
$j__2006_7_8_1=$_POST[my_200675_ss];
$j__2006_7_8_2=$_POST[my_200675_s];
$f_3_f=file("f_3.h");//取資料
$f_3_o=fopen("f_3.h","w+");//開啟檔案
$f_3_f[0]++;
fputs($f_3_o,$f_3_f[0]);//寫入
fclose($f_3_o);//關閉檔案

$sql_a="SELECT * 
FROM `pass` 
WHERE 1 AND `Num` 
= '$j__2006_7_8_1'";
$data_a=sql_b($sql_a);
$data1_you=$data_a[0][1];//你的帳號
$data2_you=$data_a[0][3];//你的暱稱
$data3_you=$data_a[0][0];//你的暱稱
//----------------------------好友
$sql_b="SELECT * 
FROM `pass` 
WHERE 1 AND `user` 
= '$j__2006_7_8_2'";
$data_b=sql_b($sql_b);
$data1_my=$data_b[0][1];//我的帳號
$data2_my=$data_b[0][3];//我的暱稱
//----------------------------我自己的



$sql="INSERT INTO `f_s` ( `num` , `name` , `name2` , `user` , `user2` , `pin` ) 
VALUES (
'$f_3_f[0]', '$data2_you', '$data2_my', '$data1_you', '$data1_my', '$data3_you'
);
";
sql_a($sql);


header("location:../h_ya/in_body.php?na_num=$j__2006_7_8_1");
}









if($my_pin_kk47=="刪除備份信封"){
$k__2006_7_8_1=$_POST[a2006_7_5];
$k__2006_7_8_2=$_POST[b2006_7_5];
$sql="DELETE FROM `e_mails` WHERE `num` = '$k__2006_7_8_1' AND `uesr` = '$k__2006_7_8_2'";
sql_a($sql);


header("location:../h_ya/indax.php?windown=mypassword_12");
}



if($my_pin_kk47=="新增一筆文章"){
$l__2006_7_8_1=$_POST[send_2006_7_6_c];
$l__2006_7_8_2=$_POST[send_2006_7_6_a];
$l__2006_7_8_3=$_POST[send_2006_7_6_b];
$l__2006_7_8_4=$_POST[send_2006_7_6_e];
$l__2006_7_8_5=$_POST[send_2006_7_6_d];

$l__2006_7_8_2=pass_u_go_out($l__2006_7_8_2);//開頭 絕不會有圖片之類的語法
$l__2006_7_8_3=pass_u_go_out($l__2006_7_8_3);



if($l__2006_7_8_2=='' || $l__2006_7_8_3==''){
header('location:../h_ya/imdex.php?http='.$l__2006_7_8_4.'&value='.$l__2006_7_8_5.'&pins=qq1');


}else{

$sql_aa="SELECT * 
FROM `pass` 
WHERE 1 AND `user` = '$l__2006_7_8_1' AND `win` = '開'";
$sql_bb=sql_b($sql_aa);
$sql_bb_1=$sql_bb[0][3];
$sql_bb_2=$sql_bb[0][0];
if($sql_bb_2!=''){

if($_COOKIE["powers_2006"]!='不可寫入'){

setcookie('powers_2006','不可寫入',time()+60);



//-----開啟檔案+流水編號
$f_5_f=file("f5.h");//取資料
$f_5_o=fopen("f5.h","w+");//開啟檔案
$f_5_f[0]++;
fputs($f_5_o,$f_5_f[0]);//寫入
fclose($f_5_o);//關閉檔案
//-----




$sql="INSERT INTO `bar_all_all` ( `Num` , `title` , `peo` , `peo_num` , `peos_num` , `good` , `body` , `id` , `ip` , `time` , `times` , `bar` , `bar_all` , `true` , `numID` , `P_S` ) 
VALUES (
'$f_5_f[0]', '$l__2006_7_8_2', '$sql_bb_1', '0', NOW( ), '不置頂', '$l__2006_7_8_3', '', '$REMOTE_ADDR', NOW( ) , NOW( ) , '$l__2006_7_8_4', '$l__2006_7_8_5', '開', '$sql_bb_2', '0'
);
";
sql_a($sql);



header('location:../h_ya/imdex.php?http='.$l__2006_7_8_4.'&value='.$l__2006_7_8_5.'&pins=qq1');


}else{
header('location:../h_ya/imdex.php?http='.$l__2006_7_8_4.'&value='.$l__2006_7_8_5.'&pins=qq1&say_2006=dsa');

}





}else{

header('location:../h_ya/imdex.php?http='.$l__2006_7_8_4.'&value='.$l__2006_7_8_5.'&pins=qq1&say_2006=dsss');


}


}//if
}//end










if($my_pin_kk47=="加入我的最愛"){

//-----開啟檔案+流水編號
$f_5_f=file("f6.h");//取資料
$f_5_o=fopen("f6.h","w+");//開啟檔案
$f_5_f[0]++;
fputs($f_5_o,$f_5_f[0]);//寫入
fclose($f_5_o);//關閉檔案
//-----
$sqlaaaa="SELECT * 
FROM `bar_all_all` 
WHERE 1 AND `Num` = '$my_word_aaa'";
$sqlaaaaaaa=sql_b($sqlaaaa);
$sqlaaaaaaas=$sqlaaaaaaa[0][12];
$sql="INSERT INTO `my_f_word` ( `Num` , `Num_http` , `user` ,`bar_num`) 
VALUES (
'$f_5_f[0]', '$my_word_aaa', '$my_user_aaa','$sqlaaaaaaas'
);";
sql_a($sql);



header('location:../index_mi.php?num_10s='.$my_word_aaa);
}




if($my_pin_kk47=="回覆文章"){


$o__2006_7_9_a=$_POST[send_2006_7_7_b]; 
$o__2006_7_9_b=$_POST[send_2006_7_7_body]; 
$o__2006_7_9_c=$_POST[send_2006_7_7_d]; 
$o__2006_7_9_d=$_POST[send_2006_7_7_a]; 
$o__2006_7_9_e=$_POST[send_2006_7_7_e]; //bar

$o__2006_7_9_ffaa=$_POST[send_2006_7_7_ff]; //bar


$o__2006_7_9_b=pass_u_go_out($o__2006_7_9_b);

if($_COOKIE["pass_200s"]!='不可寫入'){




$o__2006_7_9_ff_1="SELECT * 
FROM `pass` 
WHERE 1 AND `Num` = '$o__2006_7_9_ffaa' ";
$o__2006_7_9_ff_2=sql_b($o__2006_7_9_ff_1);
$o__2006_7_9_ff_3=$o__2006_7_9_ff_2[0][1];//給予"本"發文人的帳號

//--------------
$adqwd_us="SELECT * 
FROM `pass` 
WHERE 1 AND `Num` = '$o__2006_7_9_d' AND `win` = '開' ";
$adqwd_us_i=sql_b($adqwd_us);
//--------------------

if($adqwd_us_i[0][0]!=''){
setcookie('pass_200s','不可寫入',time()+60);

//-----開啟檔案+流水編號
$f_5_f=file("f7.h");//取資料
$f_5_o=fopen("f7.h","w+");//開啟檔案
$f_5_f[0]++;
fputs($f_5_o,$f_5_f[0]);//寫入
fclose($f_5_o);//關閉檔案
//-----


$sql="INSERT INTO `bar_all_alls` ( `num` , `name` , `qwqwqw` , `id` , `body` , `time` , `times` , `pin` , `true` , `in_http` , `barrrr` , `user_us` ) 
VALUES (
'$f_5_f[0]', '$o__2006_7_9_a', '$REMOTE_ADDR', '', '$o__2006_7_9_b', NOW( ) , NOW( ) , '$o__2006_7_9_c', '開', '$o__2006_7_9_d', '$o__2006_7_9_e','$o__2006_7_9_ff_3'
);";
sql_a($sql);

$sql_asd2="UPDATE `bar_all_all` SET `peos_num` = NOW() WHERE `Num` = '$o__2006_7_9_c'  ";

sql_a($sql_asd2);
header('location:../index_mi.php?num_10s='.$o__2006_7_9_c);

}else{

header('location:../index_mi.php?num_10s='.$o__2006_7_9_c.'&fun=h#hi_http');
}

}else{

header('location:../index_mi.php?num_10s='.$o__2006_7_9_c.'&fun=ff#hi_http');

}//if cookie 不可寫入

}//end



if($my_pin_kk47=="刪除我的最愛"){

$sql="DELETE FROM `my_f_word` WHERE  `Num_http` = '$sem_2006_7_7_b' AND `user` = '$sem_2006_7_7_a'";
sql_a($sql);


header("location:../h_ya/indax.php?windown=mypassword_14");
}





if($my_pin_kk47=="修改此文章"){
$oo__2006_7_9_a=$_POST[ttiittllee]; 
$oo__2006_7_9_b=$_POST[send_2006_7_7_body]; 
$oo__2006_7_9_c=$_POST[send_2006_7_7_bb]; 
$oo__2006_7_9_d=$_POST[send_2006_7_7_dd]; 
$oo__2006_7_9_e=$_POST[send_2006_7_7_aa]; 



$oo__2006_7_9_a=pass_u_go_out($oo__2006_7_9_a);//開頭不會有圖片之類的語法


$sql="UPDATE `bar_all_all` SET `title` = '$oo__2006_7_9_a',
`body` = '$oo__2006_7_9_b',
`id` = '$oo__2006_7_9_c',
`ip` = '$REMOTE_ADDR',`good` = '$java_1',`P_s` = '$java_2',
`times` = NOW() WHERE `Num` = '$oo__2006_7_9_d'  ";
sql_a($sql);


header('location:../index_mi.php?num_10s='.$oo__2006_7_9_d);
}





if($my_pin_kk47=="文章人氣加分"){

$gg_2006_7_9_1;//是編號

$gg_2006_7_9_2="SELECT * 
FROM `bar_all_all` 
WHERE 1 AND `Num` = '$gg_2006_7_9_1'  AND `true` = '開' ";
$gg_2006_7_9_3=sql_b($gg_2006_7_9_2);//得到資料庫資料

$gg_2006_7_9_4=$gg_2006_7_9_3[0][3]+1;
$gg_2006_7_9_5="UPDATE `bar_all_all` SET `peo_num` = '$gg_2006_7_9_4' WHERE `Num` = '$gg_2006_7_9_1' AND  `true` = '開' ";

sql_a($gg_2006_7_9_5);//得到資料庫資料


header('location:../index_mi.php?num_10s='.$gg_2006_7_9_1);


}//end








if($my_pin_kk47=="修改回覆文章a"){
$oo__2006_7_9_a=$_POST[send_2006_7_7_a]; //編號
$oo__2006_7_9_b=$_POST[send_2006_7_7_b]; 
$oo__2006_7_9_c=$_POST[send_2006_7_7_body]; 
$oo__2006_7_9_d=$_POST[send_2006_7_7_e]; 
$oo__2006_7_9_e=$_POST[send_2006_7_7_d]; 


$oo__2006_7_9_c=pass_u_go_out($oo__2006_7_9_c);



$oo__2006_7_9_a=pass_u_go_out($oo__2006_7_9_a);//開頭不會有圖片之類的語法
$sql="UPDATE `bar_all_alls` SET `qwqwqw` = '$REMOTE_ADDR',
`id` = '$oo__2006_7_9_b',
`body` = '$oo__2006_7_9_c',
`times` = NOW() WHERE `num` = '$oo__2006_7_9_d' ";
sql_a($sql);


header('location:../index_mi.php?num_10s='.$oo__2006_7_9_e);
}














if($my_pin_kk47=="復活文章a"){
$oo__2006_7_9_a=$_POST[pin_kk47aid]; 
$oo__2006_7_9_b=$_POST[pin_kk47a222]; 

$oo__2006_7_9_c=$_POST[pin_kk47aid111]; 
$oo__2006_7_9_d=$_POST[pin_kk47aid222]; 

$sqssa1111="SELECT * 
FROM `pass` 
WHERE 1 AND `user` = '$oo__2006_7_9_a'";
$sqssa1111111=sql_b($sqssa1111);

$sqssa1111111s=$sqssa1111111[0][3];

$sqssa="UPDATE `bar_all_all` SET `ip` = '$REMOTE_ADDR',
`id` = '$sqssa1111111s',
`times` = NOW() ,
`true` = '開' WHERE `Num` = '$oo__2006_7_9_b' AND `true` = '關' ";
sql_a($sqssa);



header('location:../h_ya/imdex.php?value='.$oo__2006_7_9_c.'&http='.$oo__2006_7_9_d.'&pins=qq4');
}











if($my_pin_kk47=="加入黑名單"){
$oo__2006_7_9_a=$_POST[aa_2006_7_14_a]; //被風的編號
$oo__2006_7_9_b=$_POST[aa_2006_7_14_b]; //被風的暱稱
$oo__2006_7_9_c=$_POST[aa_2006_7_14_c]; //被風的原因
$oo__2006_7_9_d=$_POST[aa_2006_7_14_d]; //被風的暱稱
$oo__2006_7_9_e=$_POST[aa_2006_7_14_e]; //操作者
$oo__2006_7_9_f=$_POST[aa_2006_7_14_f]; //天數
$oo__2006_7_9_h=$_POST[aa_2006_7_14_h]; //天數
switch($oo__2006_7_9_f){
case '3':$oo__2006_7_9_fff=259200;break;
case '7':$oo__2006_7_9_fff=604800;break;
case '14':$oo__2006_7_9_fff=1209600;break;
}//end


$sqssa1111="INSERT INTO `lea_user` ( `num` , `user` , `true_now` , `false_time` , `day_time_now` , `user_num` , `mmqw` , `fqewqw` , `daysssss` ) 
VALUES (
'$oo__2006_7_9_a', '$oo__2006_7_9_b', NOW( ) , NOW( )+$oo__2006_7_9_fff , NOW( ), '$oo__2006_7_9_e', '$oo__2006_7_9_d', '$oo__2006_7_9_c', '$oo__2006_7_9_f'
);";
$sqssa1111111=sql_b($sqssa1111);


$sqssa="UPDATE `pass` SET `win` = '關' WHERE `Num` = '$oo__2006_7_9_a' ";
sql_a($sqssa);
















$rabs_1=rand(1,13);
$aaaas_color=array('#000000','#3A3A3A','#666666','#999999','#CCCCCC','#FFFFFF','#FF50A7','#FF5096','#FF5084','#FF5073','#FF5061','#FF5050','#FF6250','#FF7C50','#FF8550','#FF8D50','#FF9650','#FF9F50','#FFA850','#FFB050','#FFB950','#FFC250','#FFCB50','#FFD350','#FFDD78','#FFE478','#FFEB78','#FFF278','#FFF878','#FFFF78'
,'#F8FF78','#F1FF78','#EBFF78','#E4FF78','#DDFF78','#D2FF78','#C0FF78','#AEFF78','#9CFF78','#8AFF78','#78FF78','#78FF8A','#78FF9C',
'#78FFAE','#78FFC0','#78FFD2','#78FFDD','#78FFE4','#78FFEB','#78FFF2','#78FFF8','#78FFFF','#78F8FF','#78F1FF','#78EBFF','#78E4FF','#78DDFF','#78D2FF','#78C0FF','#78AEFF','#789CFF'
,'#788AFF','#7878FF','#8A78FF','#9C78FF','#AE78FF','#C778FF','#D278FF','#DD78FF','#E978FF','#F478FF','#FF78FF','#FF78F4','#FF78E8','#FF78DD','#FF78C7','#FFCC00','#FF9900','#990000','#663399','#3366FF','#0033FF','#FFFF00','#996600','#FF0066','#003366','');

$rabs_1_a=rand(0,count($aaaas_color));
switch($rabs_1){
case 1;$rabs_2='
[psq_=color:'.$aaaas_color[$rabs_1_a].'=_2]
∴╭┐┌╮ 
╭┘└┘└╮ 
└┐．．┌┘─╮　　　 
╭┴──┤★~~├╮ 信 封 灌 灌 水 ^^ 
│ｏ　ｏ│　　│● 　 
╰┬──╯　　│ ~~~~~~~~~哞 
▲△▲△▲△▲△▲△▲△▲△▲△▲△▲△▲ 
[/psq_==_2]';break;
case 2;$rabs_2='
[psq_=color:'.$aaaas_color[$rabs_1_a].'=_2]

╭═════╮ 
║★★★★★ ＼     - 一千顆星星 給您許個願望 -
║我來灌水囉!! ╰╡     
║★★★★★★★★★★★ 
║灌水水★★★╭╡ ★★★ ★ 
║★★★★★ ╱　 　★★★★★★★★
╰═════╯ 　　　★★★ ★★★★★★★★★
[/psq_==_2]
';break;
case 3;$rabs_2='
[psq_=color:'.$aaaas_color[$rabs_1_a].'=_2]
╭╮＿＿╭╭╭╭╭＿＿╭╮ 
│　　　　　　　　　　　│　　　╭─────╮ 
│　　　　　　　　　　　│　　　│ＨＥＬＬＯ│ 
│　．　╭───╮　．　│　╭╮│今天安安阿│ 　 
│≡　　│●　●│　　≡│Ｏ╰╯╰─────╯ 
│　　　╰───╯　　　│　 
╰──┬○────┬─○╯ 
[/psq_==_2]';break;

case 4;$rabs_2='
[psq_=color:'.$aaaas_color[$rabs_1_a].'=_2]
* ☆∵ ▁▂▄▂▁．★∵∴☆．★∵∴ 
∴★◢█████◣* ☆．∴★∵★ * ☆ 
☆◢████☆██◣．∴天氣冷了,☆ 
◢■◤█████◥█◣．送你一件毛衣,* ★ 
◥◤∴█████．◥◤∵小心別著涼了！∵☆ 
* ☆∴█████:∴★∵* * ☆．:∴★∵ 
◇∵★█████☆．∵★*:☆∵*◇∵ ☆ 希望我都有份啦!!!!!! 
:∴★∵* * ☆．:∴★∵ ☆．∴★∵* * ☆ 
[/psq_==_2]
';break;
case 5;$rabs_2='
[psq_=color:'.$aaaas_color[$rabs_1_a].'=_2]
◢██████◣　　　　　　◢████◣      給我胡羅菠!
◢◤　　　　　　◥◣　　　　◢◤　　　　◥◣ 
◤　　　　　　　　◥◣　　◢◤　　　　　　█ 
▎　　　◢█◣　　　◥◣◢◤　　◢█　　　█ 
◣　　◢◤　　◥◣　　　　　　◢◣◥◣　◢◤ 
◥██◤ ◢◤ 　　　　　　◥██◤ 
　　　　　　█　●　　　　　　　●　█ 
　　　　　　█　〃　　　▄　　　〃　█ 
　　　　 　 ◥◣　　　╚╩╝　　　◢◤ 
　　　　　　　◥█▅▃▃　▃▃▅█◤ 
　　　　　　　　　◢◤　　　◥◣ 
　　　　　　　　　█　　　　　█ 
　　　　　　　　◢◤▕　　　▎◥◣ 
　　　　　　　▕▃◣◢▅▅▅◣◢▃ 
[/psq_==_2]
';break;
case 6;$rabs_2='    
[psq_=color:'.$aaaas_color[$rabs_1_a].'=_2]
        
Ζ╭═∩═∩═╮zｚZΖ︻︻ 
·z∥ (－﹏－) ∥▂▂︴◣◢ 
╭═●═══●═╮▄︻═—．‧碰

[/psq_==_2]
';break;
case 7;$rabs_2='
[psq_=color:'.$aaaas_color[$rabs_1_a].'=_2]
    ╦╦　　　　　　　　 ══ 
　╔╬╬╗　═╬═　　　 ╔╗　　　╔══╗ 
　╚╩╩╝　╦╩╦　═　 ╚╝　╔╗╠══╝ 
　　╬╬　　╩╦╩　╦╯╔╦╗ ║║╠╦══ 
　　╰╬　　═╬═　╣⊕╠╬╣ ╚╝║╚╦╣ 
　　　　　　　　　　　　╚╩╝　 　╯　╬ 
　　　　　　　　　　　　　　　　　 　═╩═
[/psq_==_2]
';break;

case 8;$rabs_2='
[psq_=color:'.$aaaas_color[$rabs_1_a].'=_2]
送你六隻可愛的貓咪呀!!~cc
 ∩︵∩ 　∩︵∩ 　∩︵∩
（◎◎） （⊙⊙） （☆★）
⊿ˍ）╯ ⊿ ˍ）╯ ⊿ ˍ）╯
晚上的貓 白天的貓 害羞的貓 


 ∩︵∩　∩︵∩ 　∩︵∩
（◎★）（⊕⊕） （！！）
⊿ˍ）╯ ⊿ˍ）╯ ⊿ˍ）╯
惡作劇的貓 深夜的貓 愛哭的貓 
[/psq_==_2]
';break;
case 9;$rabs_2='
[psq_=color:'.$aaaas_color[$rabs_1_a].'=_2]
。 
滿　能　　。 
祝　帶　　。　　　◢█◣▁▁▁▁▁▁▁▁◢█◣ 
福　給　　。　　　◤　　　　　　　　　　　　◥ 
的　你　　　。　　▏　◢█◣　　　　◢█◣　　│ 
幸　無　　　　◢█◣　██●　◥◤　●██　　│ 
運　數　　　　◥██◣◥█◤　　　　◥█◤　　/ 
草　的　　　　　◥█◤▂▃▄▅▆▇▇▆▅▄▃╱ 
　　幸　　　　　　│　　　　趴趴熊　　　　　◢█◣ 
　　運　　　　　　│　　　　　　　　　　　　◥██◣ 
　　與　　　　　◢◣　　　　　　　　　　　◢◣◥█◤ 
　　快　　　　◢██◣　　　　　　　　　◢██◣ 
　　樂　　　　████─────────████ 
[/psq_==_2]';break;
case 10;$rabs_2='
[psq_=color:'.$aaaas_color[$rabs_1_a].'=_2]
            找到摯愛友嚕

☆．°∴°☆﹒﹒‧☆°∴°☆．∴°☆☆．°∴°☆ ☆．°∴°☆☆．°∴°
　　╰／∕﹨＼　　　／∕﹨＼　╰╮／∕﹨＼ 
　　／　　　　＼　／　　　　＼　／　　　　＼ 
　／　　　 　　／　　　　　　＼　　 　　　 ＼ 
∕ ●　　　● ∕ 　● 　●　 ﹨　●　　●　﹨ 
| ○　 ▽　　 |　○　 ▽ 　○　︱ 　 ▽　 ○︱ 
◥███████████████████████████◤

[/psq_==_2]
';break;
case 11;$rabs_2='
[psq_=color:'.$aaaas_color[$rabs_1_a].'=_2]

~~~~~~~~~~~︿       別再讓我死一次..
ㄒㄒㄒㄒ~／　　＼ 
ㄏㄏㄏ~／∕ ︳﹨　＼ 
灌水~／ ∕　︳﹨　　＼ 
^^~／　　　　　　　　＼ 
~／　　　　　　　　　　 ＼ 
∕　　﹏﹏　 　　﹏﹏　　 ﹨ 
| 　　　　　　　　　　　　︱ 
╰▄▄▃▃▂▽▂▃▃▄▄╯ 
';break;
case 12;$rabs_2='
 [psq_=color:'.$aaaas_color[$rabs_1_a].'=_2]                      
					    
★★★★★★★★★★★ 
╭／＼☆────／＼╮　╭／＼─────／＼╮ 
│　　　　　　　　　│　│　＼　　　　　／　│ 
│　●　　　　　●　│　│　●　　　　　●　│ 
│○　╰───╯　○│　│〃　╰┬┬┬╯　〃│ 
│　　　　　　　　　│　│　　　╰─╯　　　│ 
╰─┬Ｏ───Ｏ┬─╯　╰─┬○───○┬─╯  
[/psq_==_2]
';break;

case 13;$rabs_2='
[psq_=color:'.$aaaas_color[$rabs_1_a].'=_2]
                        
啊～～～～夢想找到沒.. 
＿═════∩═════ ＿
　　　　　╭╬╮　　　　　　　　　 ◢ 
▁╭▅▆▇□□█▇▆▅▄▃▂▁(╳)█╮ 
　╰═▃__▁▁▁▁▁∠════▔▔▔　 
　　　　╙O 　 ╙O 
[/psq_==_2]
';break;
}//end 圖案

//-----開啟檔案+流水編號
$f_2_f8=file("f_2.h");//取資料
$f_2_o8=fopen("f_2.h","w+");//開啟檔案
$f_2_f8[0]++;
fputs($f_2_o8,$f_2_f8[0]);//寫入
fclose($f_2_o8);//關閉檔案

$power_0912_1="SELECT * 
FROM `pass` 
WHERE 1 AND `Num` = '$oo__2006_7_9_a' ";
$power_0912_1i=sql_b($power_0912_1);
$power_0912_1i_1=$power_0912_1i[0][1];
$power_0912_1i_2=$power_0912_1i[0][3];


$power_0912_2="SELECT * 
FROM `bar_all` 
WHERE 1 AND `pin_bar` = '$oo__2006_7_9_d'";
$power_0912_2i=sql_b($power_0912_2);
$power_0912_2i_1=$power_0912_2i[0][2];

$body_s2061='
Sorry !  由於你違反本論壇規定被禁言'.$oo__2006_7_9_f.'天

[psq_=color:#990000=_2]出自[[/psq_==_2] '.$power_0912_2i_1.' [psq_=color:#990000=_2]][/psq_==_2]
[psq_=color:#990000=_2]主要原因[[/psq_==_2] '.$oo__2006_7_9_c.' [psq_=color:#990000=_2]][/psq_==_2]
                                           
                                            [psq_=color:#990000=_2]操作人[[/psq_==_2]'.$oo__2006_7_9_e.'[psq_=color:#990000=_2]][/psq_==_2]';
		
$body_s2061=$body_s2061.$rabs_2;			
											
											

$asd_2006_7_18="INSERT INTO `e_mail` ( `num` , `name` , `name_2` , `time` , `title` , `body` , `true` , `uesr` , `pin_gs` , `ip`, `ddddd` ) 
VALUES (
'$f_2_f8[0]', '$power_0912_1i_2', '[ 論壇系統 ]', NOW( ) , '[ 論壇禁言訊息 ]', '$body_s2061', '未閱讀', '$power_0912_1i_1', '[系統]', '[系統]', '001'
);";
sql_a($asd_2006_7_18);







header('location:../h_ya/imdex.php?value='.$oo__2006_7_9_d.'&http='.$oo__2006_7_9_h.'&pins=qq1');
}




?>