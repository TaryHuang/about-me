<?

include("password_loge.h");

/***********************
數目    :
哪個Http:
用途    :
使用方法:function();
***********************/


function pass_u_go_out($a){

$s_1=array('>','<','"',"'");//將改變的物質
$s_2=array('&gt;','&lt;','&quot;','');//將物質改變成

for($i=0;$i<count($s_1);$i++){
$a=str_replace($s_1[$i],$s_2[$i],$a);
}//for

return $a;
}//end

function pass_u_go_out_333($a){

$s_1=array('[/psq_==_2]','[psq_=','=_2]');//將改變的物質
$s_2=array('</font>','<font style="','">');//將物質改變成

for($i=0;$i<count($s_1);$i++){
$a=str_replace($s_1[$i],$s_2[$i],$a);
}//for

return $a;
}//end




function pass_u_go_out_2($a){

$s_1=array('[url=http://','[/url]','[img]http://','[/img]','[b]','[/b]','[em]','[/em]','[swf=http://','.swf]','[/swf]','[MTV=http://',']width=','[/MTV]','[mid]http://','[/mid]','[fonts=','px]','[/fonts]',';];','[quotes]','[/quotes]');//將改變的物質
$s_2=array('<a href="http://','</a>','<img src="http://','">','<b>','</b>','<em>','</em>',' <embed src="http://','.swf"  type="audio/x-pn-realaudio-plugin" autostart="false" controls="ControlPanel" ','></embed>','<embed autostart="true" loop="2" hidden="no"  src="http://','"width=','>','<embed  src="http://','">','<font style="','px">','</font>','" target="_blank">','<blockquote><blockquote>','</blockquote></blockquote>');//將物質改變成

for($i=0;$i<count($s_1);$i++){
$a=str_replace($s_1[$i],$s_2[$i],$a);
}//for

return $a;
}//end








	/* 帳號與密碼等設定 */
	
	$host = "localhost";
   	$user = $user_mys_1;
   	$pass = $pass_mys_2;   
   	$database = $database_mys_3;


/*************************************************
功能說明:SQL查詢A(適合 INSERT、UPDATE、DELETE 之類)
建立人員:孫仲岳
建立日期:2004-02-10
修改日期:2004-09-07
代值說明:SQL語法字串
輸入格式:字串
輸出格式:執行結果(布林)
其他補充:無
**************************************************/
function sql_a($query)
{	
	global $host,$user,$pass,$database;
   	
   	$conn=@mysql_connect( $host, $user, $pass);	
	@mysql_select_db($database,$conn);
	$result = @mysql_query($query);
	@mysql_close($conn);
		
	return $result;
}

/*************************************************
功能說明:SQL查詢B(適合 SELECT 之類的)
建立人員:孫仲岳
建立日期:2004-02-10
修改日期:2004-09-07
代值說明:SQL語法字串
輸入格式:字串
輸出格式:執行結果(布林)
其他補充:無
**************************************************/
function sql_b($query)
{
	global $host,$user,$pass,$database;
	   	
	$conn=@mysql_connect( $host, $user, $pass );
	$result=@mysql_db_query( $database, $query, $conn);	
	@mysql_data_seek($result,0);
	while($row=@mysql_fetch_row($result))
	{        
        	$output[] = $row;	
	} 		              	
	@mysql_free_result($result);
	@mysql_close($conn);
	
	return $output;
}

/*************************************************
功能說明:SQL查詢I(適合 INSERT 且是自動產生編號的)
建立人員:孫仲岳
建立日期:2004-02-10
修改日期:2004-09-07
代值說明:SQL語法字串
輸入格式:字串
輸出格式:執行結果(布林) / 新增的流水號
其他補充:無
**************************************************/
function sql_i($query)
{	
	global $host,$user,$pass,$database;
   	
   	$conn=@mysql_connect( $host, $user, $pass);	
	@mysql_select_db($database,$conn);
	$result = @mysql_query($query);
	$result = @mysql_insert_id();
	@mysql_close($conn);
		
	return $result;
}











/***********************
數目    :1
哪個Http:index.php
用途    :秀出選單
使用方法:function(名稱array,給網址待變數也可以);
***********************/
$son_1000="SELECT * FROM `bar`";
$son_1000i=sql_b($son_1000);//資料庫選單
//-------------------------------
function in_index_1($a,$b){


for($i=0;$i<100;$i++){
for($k=$i+1;$k<count($a);$k++){

if($a[$i][2]>$a[$k][2]){
$power=$a[$i];
$a[$i]=$a[$k];
$a[$k]=$power;
}


}//for 流水號 自己可編排 順序




if($i<count($a)){
if($a[$i][2]!='99'){
echo '<a href="'.$b.$a[$i][0].'">'.$a[$i][1].'</a><br>';
}

}else{
$i=101;
}

}//for
}//end






/***********************
數目    :2
哪個Http:index.php
用途    :秀出選單 點選後的body
使用方法:function(名稱array);
***********************/
$son_1001="SELECT * 
FROM `bar_all` 
WHERE 1 AND `true` = '開' AND `pin_s` 
= '$http'";
$son_1001i=sql_b($son_1001);
//------------------------------show出body
function in_index_2($a,$b,$c,$d,$e,$f,$clor,$clorc){

echo '<table width="675" height="65" border="1" cellpadding="1" cellspacing="1" bordercolor="#000000" bgcolor="'.$clorc.'">
          <tr bgcolor="'.$clor.'">
            <th height="29" colspan="4" nowrap><div align="left">類別: '.$f.'</div></th>
          </tr>
          <tr>
            <th width="401" nowrap><div align="center">版面</div></th>
            <th width="61" nowrap><div align="center">主題</div></th>
            <th width="62" nowrap><div align="center">回覆</div></th>
            <th width="128" nowrap><div align="center">版主</div></th>
          </tr>';
		for($i=0;$i<count($a);$i++){  
		
		$yua_1=0;//發文
		for($s1=0;$s1<count($d);$s1++){
		if($d[$s1][12]==$a[$i][13]){
		$yua_1++;
		}
		}//發文
		
		
		
		$yua_2=0;//回覆
		
		for($s1=0;$s1<count($e);$s1++){
		if($e[$s1][10]==$a[$i][13]){
		for($s2=0;$s2<count($d);$s2++){
		if($d[$s2][13]=='開' && $e[$s1][7]==$d[$s2][0]){
		$yua_2++;
		}
		}//for
		}//if
		}//回覆
		
		if($a[$i][6]!=''){
		$a[$i][6]=$a[$i][6].'(版主)';
		}
				if($a[$i][7]!=''){
		$a[$i][7]=$a[$i][7].'(副版主)';
		}
		
         echo'<tr >
		  
            <th nowrap><div align="left">
              <table width="400" height="21" border="0" cellpadding="1" cellspacing="1" bordercolor="#999999">
              <tr>
                <td width="50"><div align="center"><img src="'.$a[$i][1].'" ></div></td> 
                <td width="50"><div align="center"><a href="'.$b.$c.'&value='.$a[$i][13].'&pins=qq1" target="_self"><img src="'.$a[$i][11].'" width="48" height="48" border="0"></a></div></td>
                <td width="303" bgcolor="#666666"><a href="'.$b.$c.'&value='.$a[$i][13].'&pins=qq1"  target="_self">'.$a[$i][2].'</a><br>'.$a[$i][3].'</td>
              </tr>
            </table>
            </div></th>
            <th nowrap>'.$yua_1.'</th>
            <th nowrap>'.$yua_2.'</th>
            <th nowrap bordercolor="#000000">'.$a[$i][6].'<br>'.$a[$i][7].'</th>
          </tr>';
		  }//for
     echo ' </table>';

}//end


/***********************
數目    :3
哪個Http:index.php
用途    :申請帳號
使用方法:function();
***********************/
function in_index_3($as,$ass){
echo '<form name="form2" method="post" action="abc_cool/url_header.php">


<table width="350" border="1" cellspacing="2" cellpadding="2"  bgcolor="'.$as.'"  bordercolor="#000000">
    <tr bgcolor="'.$ass.'">
    <th nowrap   colspan="3" height="20"><div align="left">申請帳號</div></th>
  </tr>
  <tr>
    <td nowrap >暱稱</td>
    <td nowrap><div align="left"><input name="name_d100" type="text" size="15" maxlength="20"></div></td>
    <td nowrap>4 ~ 12 字元</td>
  </tr>
  <tr>
    <td nowrap >帳號</td>
    <td nowrap><div align="left"><input name="user_d100" type="text" size="15" maxlength="20"></td>
    <td nowrap>4 ~ 12 字元</td>
  </tr>
  <tr>
    <td nowrap >密碼</td>
    <td nowrap><div align="left"><input name="pass_d100" type="password" size="15" maxlength="20"></td>
    <td nowrap>4 ~ 12 字元</td>
  </tr>
  <tr>
    <td nowrap >確認密碼</td>
    <td nowrap><div align="left"><input name="pass_2_d100" type="password" size="15" maxlength="20"></td>
    <td nowrap>4 ~ 12 字元</td>
  </tr>
  <tr>
    <td colspan="3" nowrap>---------------------------------------------------------------------------------------</td>
  </tr>
  <tr>
    <td nowrap >姓名</td>
    <td nowrap><div align="left"><input name="name_1_d100" type="text" size="15" maxlength="20"></td>
    <td nowrap>&nbsp;</td>
  </tr>
  <tr>
    <td nowrap >性別</td>
    <td nowrap><div align="left">

   男生 <input name="boy_1_d100" type="radio" value="男生" checked> 
   女生 <input name="boy_1_d100" type="radio" value="女生">

  </td>
    <td nowrap>&nbsp;</td>
  </tr>
  <tr>
    <td nowrap >出生</td>
    <td nowrap><div align="left"> 西元 <input name="bir_1_d100" type="text" size="5" maxlength="4"> ';
	
	
  echo '<select name="bir_2_d100"><option value="1" selected>1</option>';
  for($i=2;$i<13;$i++){
echo '<option value="'.$i.'">'.$i.'</option>';
  }//for 
  echo '</select>  月 ';
  
  
  echo '<select name="bir_3_d100"><option value="1" selected>1</option>';
  for($i=2;$i<32;$i++){
echo '<option value="'.$i.'">'.$i.'</option>';
  }//for 
  echo '</select>  日';
  
  
echo '</td>
    <td nowrap>&nbsp;</td>
  </tr>
  <tr>
    <td nowrap >問題</td>
    <td nowrap><div align="left">';
	
	$abc_1s=array('1','2','3','4');
	$abc_2s=array('我的好朋友是..','我的偶像明星是..','我最喜歡的人是..','我的身份證後四碼..');
echo '<select name="pass_Q_d100">';
  for($i=0;$i<count($abc_1s);$i++){
echo '<option value="'.$abc_1s[$i].'">'.$abc_2s[$i].'</option>';
  }//for 
echo '</select>  ';
  
  
  
echo '</td>
    <td nowrap>&nbsp;</td>
  </tr>
    <tr>
    <td nowrap >答案</td>
    <td nowrap><div align="left"><input name="pass_A_d100" type="text" size="15" maxlength="20"></td>
    <td nowrap>&nbsp;</td>
  </tr>
  <tr>
    <td nowrap >E-mail</td>
    <td nowrap><div align="left"><input name="email" type="text" size="15" maxlength="80"></td>
    <td nowrap>&nbsp;</td>
  </tr>
  <tr>
    <td nowrap>&nbsp;</td>
    <td nowrap>&nbsp;</td>
    <td nowrap><input type="submit" name="Submit" value="送出"></td>
  </tr>
</table>


<input type="hidden" name="pin_kk47" value="aaa3">
</form>
';
}//end



/***********************  
數目    :4
哪個Http:all  用於選單系統:(後)系統   
用途    :製做array 讓array的資料成選單 且跟連結做function  好擴充
使用方法:function(連結名稱,連結的URL);
***********************/
//-------------------------------系統
$son_1002_a=array('登出','逛論壇去','日誌消息','更改密碼');
$son_1002_b=array('../url_header.php?pin_password=登出','index.php','indax.php?adds=u2s','indax.php?windown=passwords_pin');
//-------------------------------

//-------------------------------基本選單
$son_1004_a=array('通訊錄','我的文章','我的摯愛文章','更改基本資料','更改個人資料');
$son_1004_b=array('indax.php?windown=good_f','indax.php?windown=my_words','indax.php?windown=good','indax.php?windown=myhobe_1','indax.php?windown=myhobe');
//-------------------------------

//-------------------------------信箱
$son_1003_a=array('發送私信','我的收信箱','私人備份信件');
$son_1003_b=array('indax.php?windown=email','indax.php?windown=emails','indax.php?windown=email_add');
//-------------------------------

//-------------------------------系統
$son_1005_a=array('我的日誌','系統公告','最新消息','論壇黑名單');
$son_1005_b=array('indax.php?adds=u2s','index.php?https=us','index.php?https=lv','index.php?https=show');
//-------------------------------

//-------------------------------系統
$son_1008_a=array('系統公告','最新消息');
$son_1008_b=array('index.php?adds=us','index.php?add=lv');
//-------------------------------

function all_index_4($a,$b){
for($i=0;$i<count($a);$i++){
echo '<a href="'.$b[$i].'">'.$a[$i].'</a><br>';
}//for
}//end


function all_index_66($a,$b,$c){
for($i=0;$i<count($a);$i++){
echo '<a href="'.$b[$i].'">'.$a[$i].'</a><br>';
}//for

if($c=='管理員(最高權限)'){

echo'<a href="../myhouse.php">論壇管理系統</a><br>';
}
}//end



function all_index_55($a,$b,$c,$d){

for($i=0;$i<count($a);$i++){
if($i==1){


if($c[0][0]==''){
echo '<a href="'.$b[$i].'">'.$a[$i].'</a><br>';
}else{
echo '<a href="'.$b[$i].'">'.$a[$i].'</a> <font style="font-size:12px;color:#CC0000">new ('.count($c).')</font><br>';


if($d!='出聲音'){
setcookie('power_2006s','出聲音',time()+180);
echo '<embed src="sound/sa.mp3"  visibility: hidden>';
}
}//您是否有信件

}else{
echo '<a href="'.$b[$i].'">'.$a[$i].'</a><br>';
}//假如用到 我的信箱  讀$c 看有沒有未讀的信件

}//for


}//end




/***********************
數目    :5
哪個Http:imdex.php
用途    :body列出 
使用方法:function();
***********************/

function im_imdex_5($a,$b,$c,$e,$f,$gs,$looa_c,$looa_cc){
global $http,$value;

echo '<table width="666" border="0" cellspacing="2" cellpadding="2" >
   
    <tr>
      <td width="80" nowrap><div align="left"><a href="imdex.php?pins=qq2&http='.$http.'&value='.$value.'">[ 發表文章 ] </a></div></td>
      <td width="328" nowrap><div align="left">&nbsp;</div></td>
      <td width="102" nowrap><div align="right">發表文章 '.$e.' </div></td>
      <td width="110" nowrap><div align="right">回覆文章 '.$f.' </div></td>
      </tr>
  </table>
<br>';//發表選單 

echo '<table width="670" height="40" border="1" cellpadding="2" cellspacing="2" bordercolor="#000000" bgcolor="'.$looa_cc.'">
  <tr bgcolor="'.$looa_c.'">
    <th height="30" colspan="2" nowrap>主題</th>
    <th width="80" nowrap>作者</th>
    <th width="54" nowrap>人氣</th>
    <th width="56" nowrap>回覆</th>
    <th  width="80" nowrap>最後更新</th>
  </tr>';  
  
  
  if($c!=''){
  for($i=0;$i<count($c);$i++){
  $h01aaa_a=0;
  for($sa=0;$sa<count($gs);$sa++){
  if($gs[$sa][7]==$c[$i][0]){
  
  $h01aaa_a++;
  }
  }//判定 回覆有多少
  
  
  
  
  switch($c[$i][15]){
case 0:$aaa_url='&nbsp;';break;
  case 1:$aaa_url='<img src="im/im_7.gif"width="18" height="18">';break;
  case 2:$aaa_url='<img src="im/im_8.gif"width="22" height="8">';break;  }//end
  
  echo '<tr>
    <td width="41" nowrap >'.$aaa_url.'</td>
    <th width="300" height="30"><div align="left"><font style="color:#CC3300;font-size=12px">[置頂]</font><a href="../abc_cool/url_header.php?pin_kk47=aaa23&gg_2006_7_9_1='.$c[$i][0].'" target="_blank">'.$c[$i][1].'</a></div></th>
    <td nowrap><a href="in_body.php?na_num='.$c[$i][14].'" target="_blank">'.$c[$i][2].'</a></td>
    <td nowrap>'.$c[$i][3].'</td>
    <td nowrap>'.$h01aaa_a.'</td>
    <td width="100">'.$c[$i][4].'</td>
  </tr>';
  
  
}//for
}



  for($i=0;$i<count($a);$i++){
  $h01aaa_b=0;
   for($sa=0;$sa<count($gs);$sa++){
  if($gs[$sa][7]==$a[$i][0]){
  
  $h01aaa_b++;
  }
  }//判定 回覆有多少
  

    switch($a[$i][15]){
  case 0:$aaa_url='&nbsp;';break;
  case 1:$aaa_url='<img src="im/im_7.gif"width="18" height="18">';break;
  case 2:$aaa_url='<img src="im/im_8.gif"width="22" height="8">';break;
  }//end
  echo '<tr>
    <td width="41" nowrap>'.$aaa_url.'</td>
    <th width="300" nowrap height="30"><div align="left"><a href="../abc_cool/url_header.php?pin_kk47=aaa23&gg_2006_7_9_1='.$a[$i][0].'" target="_blank">'.$a[$i][1].'</a></div></th>
    <td nowrap><a href="in_body.php?na_num='.$a[$i][14].'" target="_blank">'.$a[$i][2].'</a></td>
    <td nowrap>'.$a[$i][3].'</td>
    <td nowrap>'.$h01aaa_b.'</td>
    <td width="100">'.$a[$i][4].'</td>
  </tr>';
    
}//for
echo '</table>' ;
}


/***********************
數目    :6
哪個Http:imdex.php
用途    :body列出 文章選單
使用方法:function();
***********************/
function mi_index_6($a,$b,$q){
if($a[3]!=''){

$maAam='<font style="font-size:12px">日期 : '.$a[6].'<br>最後編輯人 : '.$a[3].'</font>';

}else{
$maAam='';
}//if有最後編輯人 就寫出 最後更新 最後編輯人



echo '<table width="964" border="0" cellspacing="2" cellpadding="3">
    <tr>
      <td>回覆者 : <a href="h_ya/in_body.php?na_num='.$a[9].'">'.$a[1].'</a> 發文日期: '.$a[5].' ( '.$b.'樓 )</td>
    </tr>
    <tr>
      <td bgcolor="#CCCCCC"><br>        <table width="958" border="0" cellspacing="1" cellpadding="1">
        <tr>
          <td><pre>'.$a[4].'</pre></td>
        </tr>
      </table>      <div align="right"><br>
                <table width="135" border="0" cellspacing="1" cellpadding="1">
            <tr>
			<td width="200" nowrap><div align="right">'.$maAam.'</div></td>
              <td width="50" nowrap><div align="left"><a href="index_mi.php?num_10s='.$q.'&fun=b&anum='.$a[0].'&#hi_http">[引用]</a></div></td>
              <td width="50" nowrap><div align="left"><a href="index_mi.php?num_10s='.$q.'&fun=d&anum_2006='.$a[0].'&#hi_http">[編輯]</a></div></td>
              <td width="50" nowrap><div align="left"><a href="url_header.php?out_num='.$a[0].'&pass_my='.$a[9].'&pin_password=aaa7&gotos='.$a[7].'">[刪除]</a></div></td>
            </tr>
          </table>
      </div></td>
    </tr>
  </table>';

}//回覆



/***********************
數目    :7
哪個Http:indax.php
用途    :e-mail 表單 寄私信
使用方法:function(給予通訊錄);
***********************/
function in_indax_7($a,$b,$looa_c,$looa_cc){
echo'<form name="form1" method="post" action="../abc_cool/url_header.php">


<table width="579" height="435" border="1" cellpadding="1" cellspacing="1" bordercolor="#000000"  bgcolor="'.$looa_cc.'">
  <tr>
    <td width="571" height="39" bgcolor="'.$looa_c.'"><div align="left"> &nbsp; 寄一份私信</div></td>
  </tr>
  <tr>
    <td height="40" ><div align="left"> &nbsp; <input name="send_2006_7_5_a" type="radio" value="0" checked> &nbsp;對方的暱稱 
        <input type="text" name="send_2006_7_5_b" maxlength="20">
    </div></td>
  </tr>
  <tr>
    <td height="41" ><div align="left">&nbsp; <input name="send_2006_7_5_a" type="radio" value="1" > &nbsp;通訊錄 
        ';
		echo '<select name="send_2006_7_5_c"  >';
    for($i=0;$i<count($a);$i++){
	echo'<option value="'.$a[$i][5].'"  >'.$a[$i][1].'</option>';
	}
       echo ' </select>';
   echo ' </div></td>
  </tr>
  <tr>
    <td height="42" ><div align="left">&nbsp; 標題
        <input type="text" name="send_2006_7_5_d" maxlength="30">
    </div></td>
  </tr>
  <tr>
    <td height="198" ><div align="center">
      <p>
        <br>
        <textarea name="send_2006_7_5_f" cols="70" rows="12" wrap="VIRTUAL"></textarea>
  </p>
      <p align="left">&nbsp; 我想要保留我這封私信
        <input type="checkbox" name="send_2006_7_5_e" value="yes">
</p>
      <p align="left">&nbsp;      </p>
    </div></td>
  </tr>
  <tr>
    <td height="35" ><div align="center">
      <input type="submit" name="Submit" value="送出">
    </div></td>
  </tr>
</table>

<input type="hidden" name="send_2006_7_5_i" value="'.$b.'">
<input type="hidden" name="pin_kk47" value="aaa2">
</form>
';

}



/***********************
數目    :8
哪個Http:indax.php
用途    :e-mail 我的信箱
使用方法:function(資料庫資料,帳號);
***********************/
function in_indax_8($a,$b,$looa_c,$looa_cc){

echo '<table width="669" height="54" border="1" cellpadding="2" cellspacing="2" bordercolor="#000000" bgcolor="'.$looa_cc.'">
  <tr bgcolor="'.$looa_c.'">
    <td colspan="5" height="25"><div align="left">我的信箱</div></td>
  </tr>
  <tr>
    <th width="120"  height="30">寄信人</th>
    <th width="302">主題</th>
    <th width="72">閱讀</th>
    <th width="91">時間</th>
    <th width="68">刪除</th>
  </tr>';  
  
  for($i=0;$i<count($a);$i++){
   echo'<tr>
    <td width="108" height="30"><a href="in_body.php?na_num='.$a[$i][10].'" target="_black">'.$a[$i][2].'</a></td>
    <td width="300"><div align="left"><a href="indax.php?wins='.$a[$i][0].'&windown=mypassword_13" >'.$a[$i][4].'</a></div></td>
    <td width="72">'.$a[$i][6].'</td>
    <td width="91">'.$a[$i][3].'</td>
	<form name="form1" method="post" action="../abc_cool/url_header.php">
    <td width="68">		
	<input type="hidden" name="sss_2006_7_5_a" value="'.$b.'">
	<input type="hidden" name="pin_kk47" value="aaa12">
	<input type="hidden" name="sss_2006_7_5_b" value="'.$a[$i][0].'">
	<input type="submit" name="Submit" value="刪除">		
	</td>
	</form>
  </tr>'; 
  
  }//end
  
  
echo '</table>';
}//end







/***********************
數目    :10
哪個Http:indax.php
用途    :通訊錄
使用方法:function();
***********************/
function in_indax_10($a,$b,$looa_c,$looa_cc){
echo '<table width="353" height="80" border="1" cellpadding="1" cellspacing="1" bordercolor="#000000" bgcolor="'.$looa_cc.'">
    <tr bgcolor="'.$looa_c.'">
    <th colspan="3" height="22"><div align="left">通訊錄</div></th>
  </tr>
  <tr>
    <td width="265" height="20" nowrap>我的好友</td>
    <td width="75" nowrap>刪除</td>
  </tr>';
  for($i=0;$i<count($a);$i++){
  echo '<tr>
    <td><a href="in_body.php?na_num='.$a[$i][5].'" target="_black">'.$a[$i][1].'</a></td>
   <form name="form1" method="post" action="../abc_cool/url_header.php"> <td><div align="center">
     <input type="submit" name="Submit2" value="刪除">
    </div></td>
<input type="hidden" name="f_200675_a" value="'.$b.'">
<input type="hidden" name="f_200675_b" value="'.$a[$i][0].'">
<input type="hidden" name="pin_kk47" value="aaa13">
	
	</form>
  </tr>';//f_200675  一個是 帳號  一個是編號
  }

echo'</table>';
}//end


/***********************
數目    :11
哪個Http:indax.php
用途    :更改密碼
使用方法:function(帳號);
***********************/
function in_indax_11($a,$looa_c,$looa_cc){
echo '<form name="form1" method="post" action="../abc_cool/url_header.php">



<table width="240" height="177" border="1" cellpadding="2" cellspacing="2" bordercolor="#000000"  bgcolor="'.$looa_cc.'">
  <tr bgcolor="'.$looa_c.'">
    <td colspan="2" nowrap height="22"><div align="left">更改密碼</div></td>
  </tr>
  <tr>
    <td  nowrap><div align="left">請輸入舊密碼</div></td>
    <td nowrap><input name="password_aass106_0" type="password" size="15" maxlength="15"></td>
  </tr>
  <tr >
    <td  nowrap><div align="left">請輸入新密碼</div></td>
    <td nowrap><input name="password_aass106_1" type="password" size="15" maxlength="15"></td>
  </tr>
  <tr>
    <td  nowrap><div align="left">請再次輸入新密碼</div></td>
    <td nowrap><input name="password_aass106_2" type="password" size="15" maxlength="15"></td>
  </tr>
  <tr >
    <td nowrap colspan="2"><div align="right">
      <input type="submit" name="Submit2" value="送出">
    </div></td>
  </tr>
</table>


<input type="hidden" name="pin_myuser_1988" value="'.$a.'">
<input type="hidden" name="pin_kk47" value="aaa1">
</form>';
}//end





/***********************
數目    :12
哪個Http:indax.php
用途    :私人備份信封
使用方法:function();
***********************/
function in_indax_12($a,$b,$looa_c,$looa_cc){
echo '<table width="450" height="40" border="1" cellpadding="1" cellspacing="1" bordercolor="#000000" bgcolor="'.$looa_cc.'">
    <tr bgcolor="'.$looa_c.'">
	
    <td  nowrap  height="30"><div align="left">我的備份信件 </div></td>
 <td   nowrap>&nbsp;</td>
  </tr>
  <tr >
    <th width="333" height="30"  nowrap>信 封</th>
    <th nowrap>刪除</th>
  </tr>';
  for($i=0;$i<count($a);$i++){
  echo '<tr>
    <td><a href="indax.php?a12s='.$a[$i][0].'&windown=mypassword_11"> '.$a[$i][2].' </a></td>
    <form name="form1" method="post" action="../abc_cool/url_header.php"><td><div align="center">
	

      <input name="Submit2" type="submit" value="刪除">
	  
	   <input name="a2006_7_5" type="hidden" value="'.$a[$i][0].'">
	    <input name="b2006_7_5" type="hidden" value="'.$b.'">
		<input name="pin_kk47" type="hidden" value="aaa15">
	  

    </div></td></form>
  </tr>';
  }

echo'</table>';
}//end




/***********************
數目    :13
哪個Http:indax.php
用途    :個人資料修改
使用方法:function();
***********************/
function in_indax_13($a,$b,$asadqwd,$looa_c,$looa_cc){


switch($a[0][2]){

}//end



//----------------------------------職業
$a__2='<select name="bo_2006_7_4_a">';

$ss1=array('電腦師','設計師','美容師','木匠師','教師','學徒','學生','模特兒','藝人','火影','賣菜的','其他');
$ss2=array('1','2','3','4','5','6','7','8','9','10','11','12');
for($i=0;$i<count($ss1);$i++){

if($a[0][20]==$ss2[$i]){
$a__2=$a__2.'<option value="'.$ss2[$i].'" selected>'.$ss1[$i].'</option>';
}else{
$a__2=$a__2.'<option value="'.$ss2[$i].'" >'.$ss1[$i].'</option>';
}

}//for

$a__2=$a__2.'</select>';
//-------------------------------------




//------------------------------------婚姻
$a__3='<select name="bo_2006_7_4_b">';

$ss1=array('未婚','已婚');
$ss2=array('0','1');
for($i=0;$i<count($ss1);$i++){

if($a[0][21]==$ss2[$i]){
$a__3=$a__3.'<option value="'.$ss2[$i].'" selected>'.$ss1[$i].'</option>';
}else{
$a__3=$a__3.'<option value="'.$ss2[$i].'" >'.$ss1[$i].'</option>';
}

}//for

$a__3=$a__3.'</select>';
//------------------------------------





//------------------------------------系統圖片
$a__4='<select name="bo_2006_7_4_c">';

$ss1=array('天堂(1)','天堂(2)','天堂(3)','天堂(4)','天堂(5)','神奇寶貝(1)','神奇寶貝(2)','神奇寶貝(3)','火影忍者(1)','火影忍者(2)','火影忍者(3)','火影忍者(4)','火影忍者(5)','火影忍者(6)');
$ss2=array('1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18');
for($i=0;$i<count($ss1);$i++){

if($a[0][26]==$ss2[$i]){
$a__4=$a__4.'<option value="'.$ss2[$i].'" selected>'.$ss1[$i].'</option>';
}else{
$a__4=$a__4.'<option value="'.$ss2[$i].'" >'.$ss1[$i].'</option>';
}

}//for

$a__4=$a__4.'</select>';

//-----------------------------




//------------------------------------圖片大小
$a__5='<select name="bo_2006_7_4_d">';

$ss1=array('100*100','130*130','170*170','200*200','145*129','160*118','180*60','200*300','100*50','120*200','200*400','150*400','220*400','225*320','210*350');
$ss2=array('1','2','3','4','5','6','7','8','9','10','11','12','13','14','15');
for($i=0;$i<count($ss1);$i++){

if($a[0][27]==$ss2[$i]){
$a__5=$a__5.'<option value="'.$ss2[$i].'" selected>'.$ss1[$i].'</option>';
}else{
$a__5=$a__5.'<option value="'.$ss2[$i].'" >'.$ss1[$i].'</option>';
}

}//for

$a__5=$a__5.'</select>';

//-----------------------------





//------------------------------------圖片 無  有
if($a[0][28]=='0'){
$a__6_a='checked';
$a__6_b='';
}else{
$a__6_a='';
$a__6_b='checked';

}//end

echo '<form name="form1" method="post" action="../abc_cool/url_header.php">';

echo '<table width="483" height="500" border="1" cellpadding="1" cellspacing="1" bordercolor="#000000" bgcolor="'.$looa_cc.'">
  <tr bgcolor="'.$looa_c.'">
    <th height="25" colspan="2" ><div align="left">我的資料</div></th>
  </tr>
  <tr >
    <td width="80">&nbsp; 編號：</td>
    <td width="390"><div align="left">
      <table width="342" border="0" cellspacing="1" cellpadding="1">
          <tr>
            <td>'.$a[0][0].'</td>
          </tr>
          </table>
    </div></td>
  </tr>
  <tr >
    <td> &nbsp; 暱稱：</td>
    <td ><div align="left">
      <table width="342" border="0" cellspacing="1" cellpadding="1">
          <tr>
            <td>'.$a[0][3].'</td>
          </tr>
          </table>
    </div></td>
  </tr>
  <tr >
    <td>&nbsp; 性別：</td>
    <td ><div align="left">
      <table width="342" border="0" cellspacing="1" cellpadding="1">
          <tr>
            <td>'.$a[0][4].'</td>
          </tr>
          </table>
    </div></td>
  </tr>
  <tr >
    <td>&nbsp; 生日：</td>
    <td><div align="left">
      <table width="342" border="0" cellspacing="1" cellpadding="1">
          <tr>
            <td width="80"> 西元 '.$a[0][6].' 年 </td> <td>'.$a[0][7].' 月'.$a[0][8].'  日</td>
          </tr>
          </table>
    </div></td>
  </tr>
    <tr >
    <td>&nbsp; 圖片：</td>
    <td ><div align="left">
      <table width="342" border="0" cellspacing="1" cellpadding="1">
          <tr>
            <td><table width="265" border="0" cellspacing="1" cellpadding="1">
  <tr>
    <td width="13" nowrap>無</td>
    <td width="22" nowrap><input name="bo_2006_7_4_e" type="radio" value="0"  '.$a__6_a.' ></td>
    <td width="55" nowrap> '.$a__4.' </td>
    <td width="136" nowrap>&nbsp;</td>
  </tr>
  <tr>
    <td nowrap>有</td>
    <td nowrap><input name="bo_2006_7_4_e" type="radio" value="1" '.$a__6_b.'></td>
    <td nowrap> '.$a__5.' </td>
    <td nowrap>網址
    <input name="bo_2006_7_4_j" type="text" size="20" value="'.$a[0][16].'"  maxlength="300"></td>
  </tr>
</table></td>
          </tr>
      </table>
    </div></td>
  </tr>
  <tr >
    <td>&nbsp; 來自：</td>
    <td ><div align="left">
      <table width="342" border="0" cellspacing="1" cellpadding="1">
          <tr>
            <td><input type="text" name="bo_2006_7_4_g" value="'.$a[0][11].'" size="20" maxlength="40"></td>
          </tr>
          </table>
    </div></td>
  </tr>
  <tr >
    <td> &nbsp; 職業：</td>
    <td><div align="left">
      <table width="342" border="0" cellspacing="1" cellpadding="1">
          <tr>
            <td>
			'.$a__2.'</td>
          </tr>
          </table>
    </div></td>
  </tr>
  <tr>
    <td>&nbsp; 婚姻狀況：</td>
    <td><div align="left">
      <table width="342" border="0" cellspacing="1" cellpadding="1">
          <tr>
            <td>'.$a__3.'</td>
          </tr>
          </table>
    </div></td>
  </tr>
  <tr>
    <td>&nbsp; 個人網頁：</td>
    <td><div align="left">
      <table width="342" border="0" cellspacing="1" cellpadding="1">
          <tr>
            <td><input type="text" name="bo_2006_7_4_f" value="'.$a[0][12].'" size="40" maxlength="300"></td>
          </tr>
          </table>
    </div></td>
  </tr>
  <tr >
    <td >&nbsp; 我的文章：</td>
    <td ><div align="left">
      <table width="342" border="0" cellspacing="1" cellpadding="1">
          <tr>
            <td>'.$asadqwd.'</td>
          </tr>
          </table>
    </div></td>
  </tr>
  <tr >
    <td>&nbsp; 上站次數：</td>
    <td ><div align="left">
      <table width="342" border="0" cellspacing="1" cellpadding="1">
          <tr>
            <td>'.$a[0][18].'</td>
          </tr>
          </table>
    </div></td>
  </tr>
  <tr >
    <td> &nbsp; 論壇職務： </td>
    <td ><div align="left">
      <table width="342" border="0" cellspacing="1" cellpadding="1">
          <tr>
            <td>'.$a[0][15].'</td>
          </tr>
          </table>
    </div></td>
  </tr>
  <tr >
    <td>&nbsp; 興趣：</td>
    <td><div align="left">
      <table width="342" border="0" cellspacing="1" cellpadding="1">
          <tr>
            <td><input type="text" name="bo_2006_7_4_h" value="'.$a[0][14].'" size="20" maxlength="40"></td>
          </tr>
          </table>
    </div></td>
  </tr>
  <tr >
    <td>&nbsp; 簡介：</td>
    <td ><div align="center">
      <br>
      <textarea name="bo_2006_7_4_i" cols="50" rows="5" wrap="VIRTUAL">'.$a[0][13].'</textarea>
      <br>
      <br>
    </div></td>
  </tr>
  <tr >
    <td colspan="2"><div align="right">
      <table width="72" height="38" border="0" cellpadding="3" cellspacing="3">
        <tr>
          <td><div align="center">
            <input type="submit" name="Submit3" value="送出">
          </div></td>
        </tr>
      </table>
    </div></td>
  </tr>
</table>';

echo '<input type="hidden" name="user_2006_7_4_a" value="'.$b.'">
<input type="hidden" name="pin_kk47" value="aaa11">';//一個是pin 一個是帳號


echo '</form>';
}//end



/***********************
數目    :14
哪個Http:indax.php
用途    :基本資料
使用方法:function();
***********************/
function in_indax_14($a,$b,$looa_c,$looa_cc){

//判定密碼提示  更換
$a__2='<select name="qq_2006_7_4">';

$ss1=array('我的好朋友是..','我的偶像明星是..','我最喜歡的人是..','我的身份證後四碼..');
$ss2=array('1','2','3','4');
for($i=0;$i<count($ss1);$i++){

if($a[0][2]==$ss2[$i]){
$a__2=$a__2.'<option value="'.$ss2[$i].'" selected>'.$ss1[$i].'</option>';
}else{
$a__2=$a__2.'<option value="'.$ss2[$i].'" >'.$ss1[$i].'</option>';
}

}//for

$a__2=$a__2.'</select>';



echo '<form name="form1" method="post" action="../abc_cool/url_header.php">';

echo '<table width="400" height="115" border="1" cellpadding="1" cellspacing="1" bordercolor="#000000" bgcolor="'.$looa_cc.'">
  <tr bgcolor="'.$looa_c.'">
    <th height="25" colspan="2" nowrap ><div align="left">基本資料</div></th>
  </tr>
  <tr >
    <td width="80" height="21" nowrap>&nbsp; 聯絡電話 ：</td>
    <td width="390" nowrap><div align="left">
      <table width="238" border="0" cellspacing="2" cellpadding="2">
        <tr>
          <td width="230"><input type="text" name="ph_2006_7_4" value="'.$a[0][4].'" size="20" maxlength="20"></td>
        </tr>
      </table>
</div></td>
  </tr>
  <tr >
    <td height="21" nowrap> &nbsp; E-mail：</td>
    <td nowrap ><div align="left">
      <table width="238" border="0" cellspacing="2" cellpadding="2">
        <tr>
          <td width="230"><input type="text" name="em_2006_7_4" value="'.$a[0][1].'" size="40" maxlength="60"></td>
        </tr>
      </table>
    </div></td>
  </tr>
  <tr >
    <td height="21" nowrap>&nbsp; 密碼問題：</td>
    <td nowrap ><div align="left">
      <table width="238" border="0" cellspacing="2" cellpadding="2">
        <tr>
          <td width="230">'.$a__2.'</td>
        </tr>
      </table>
    </div></td>
  </tr>
  <tr >
    <td nowrap>&nbsp; 密碼的答：</td>
    <td nowrap ><div align="left">
      <table width="238" border="0" cellspacing="2" cellpadding="2">
        <tr>
          <td width="230"><input type="text" name="aa_2006_7_4" value="'.$a[0][3].'" size="15" maxlength="16"></td>
        </tr>
      </table>
    </div></td>
  </tr>
  <tr >
    <td colspan="2" nowrap><div align="right">
      <table width="75" border="0" cellspacing="1" cellpadding="1">
        <tr>
          <td><div align="center">
            <input type="submit" name="Submit3" value="送出">
          </div></td>
        </tr>
      </table>
    </div></td>
  </tr>
</table>';


echo '<input type="hidden" name="user_2006_7_4_a" value="'.$b.'">
<input type="hidden" name="pin_kk47" value="aaa10">';//一個是pin 一個是帳號

echo '</form>';
}//end



/***********************
數目    :15
哪個Http:indax.php
用途    :偏好
使用方法:function();
***********************/
function in_indax_15($a){
echo '<table width="269" border="1" cellpadding="1" cellspacing="1" bordercolor="#000000">
  <tr>
    <th height="32" colspan="2" bgcolor="#0066FF"><div align="left">偏好設定</div></th>
  </tr>
  <tr bgcolor="#E7E7E7">
    <td width="86" height="36" nowrap><div align="left"> 版面顏色 </div></td>
    <td width="170" nowrap>
      <div align="left">
        <table width="161" border="0" cellspacing="2" cellpadding="2">
          <tr>
            <td width="149"><select name="select3">
              </select> 
            顏色表</td>
          </tr>
                  </table>
    </div></td>
  </tr>
  <tr bgcolor="#E7E7E7">
    <td nowrap><div align="left"> 使用者顯示</div></td>
    <td nowrap>
      <div align="left">
        <table width="161" border="0" cellspacing="2" cellpadding="2">
          <tr>
            <td width="230"><select name="select4">
              </select> 
            資訊 或 圖片</td>
          </tr>
                  </table>
    </div></td>
  </tr>
  <tr bgcolor="#E7E7E7">
    <td nowrap><div align="left"> 帳號密碼儲存</div></td>
    <td nowrap>
      <div align="left">
        <table width="161" border="0" cellspacing="2" cellpadding="2">
          <tr>
            <td width="230"><select name="select5">
              </select> 
            小時</td>
          </tr>
                  </table>
    </div></td>
  </tr>
  <tr bgcolor="#E7E7E7">
    <td colspan="2" nowrap><div align="right">
      <table width="75" border="0" cellspacing="1" cellpadding="1">
        <tr>
          <td><div align="center">
            <input type="submit" name="Submit4" value="送出">
          </div></td>
        </tr>
      </table>
    </div></td>
  </tr>
</table>';

}//end

/***********************
數目    :16
哪個Http:indax.php
用途    :購買等級
使用方法:function();
***********************/
function in_indax_16($a){
echo'<table width="295" height="142" border="1" cellpadding="1" cellspacing="1" bordercolor="#000000">
  <tr bgcolor="#0066FF">
    <td height="32" colspan="2">購買等級</td>
  </tr>
  <tr>
    <td width="95">目前等級</td>
    <td width="187">&nbsp;</td>
  </tr>
  <tr>
    <td>您目前頭銜</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>您目前金錢</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="51" colspan="2"><div align="center">
      <input type="submit" name="Submit5" value="升級">  
    </div></td>
  </tr>
</table>';

}//end



/***********************
數目    :17
哪個Http:index.php
用途    :忘記密碼
使用方法:function();
***********************/
function in_index_17($a,$c){
echo'<form name="form2" method="post" action="abc_cool/url_header.php">


<table width="300" height="188" border="1" cellpadding="1" cellspacing="1" bordercolor="#000000"  bgcolor="'.$c.'">
  <tr bgcolor="'.$a.'">
    <td height="22" colspan="2" nowrap><div align="left">忘記密碼</div></td>
  </tr>
  <tr>
    <td width="100" height="32" nowrap>請輸入真實姓名</td>
    <td width="200" nowrap><table width="178" border="0" cellspacing="1" cellpadding="1">
      <tr>
        <td width="170"><input name="name_d101" type="text" size="15" maxlength="12"></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="28" nowrap>請輸入帳號</td>
    <td nowrap><table width="178" border="0" cellspacing="1" cellpadding="1">
      <tr>
        <td width="170"><input name="user_d101" type="text" size="15" maxlength="12"></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="25" colspan="2" nowrap><div align="center">
      <input type="submit" name="Submit5" value="查詢">
    </div></td>
  </tr>
</table>




<input type="hidden" name="pin_kk47" value="aaa4">
</form>';

}//end


/***********************
數目    :18
哪個Http:index.php
用途    :密碼提示
使用方法:function();
***********************/

function in_index_18($a,$b,$c,$d,$loa_c,$loa_cc){
switch($a){
case 1:$aaaa='我的好朋友是..';break;
case 2:$aaaa='我的偶像明星是..';break;
case 3:$aaaa='我最喜歡的人是..';break;
case 4:$aaaa='我的身份證後四碼..';break;
}
echo'<form name="form2" method="post" action="url_header.php">


<table width="300" height="188" border="1" cellpadding="3" cellspacing="5" bordercolor="#000000"  bgcolor="'.$loa_cc.'">
  <tr bgcolor="'.$loa_c.'">
    <td height="32" colspan="2" nowrap><div align="left">忘記密碼</div></td>
  </tr>
  <tr>
    <td width="100" height="32" nowrap>密碼提示</td>
    <td width="200" nowrap><table width="178" border="0" cellspacing="1" cellpadding="1">
        <tr>
          <td width="170">'.$aaaa.'</td>
        </tr>
    </table></td>
  </tr>
  <tr>
    <td height="28" nowrap>請輸入答案</td>
    <td nowrap><table width="178" border="0" cellspacing="1" cellpadding="1">
        <tr>
          <td width="170"><input name="anser_d102" type="text" size="15" maxlength="12"></td>
        </tr>
    </table></td>
  </tr>
  <tr>
    <td height="25" colspan="2" nowrap><div align="center">
        <input type="submit" name="Submit52" value="查詢">
    </div></td>
  </tr>
</table>

<input type="hidden" name="user_d102" value="'.$b.'">
<input type="hidden" name="number_d102" value="'.$c.'">
<input type="hidden" name="number_d103" value="'.$d.'">
<input type="hidden" name="pin_password" value="aaa5">
</form>' ;
}//end



/***********************
數目    :19
哪個Http:all
用途    :用於 所有文字 只要輸入在這個程式裡面  就可以改顏色 跟 字體大小
使用方法:function();
***********************/
function all_color_font($a,$b,$c){
switch($b){
case 藍色:$bb="#0066FF";break;
case 橘色:$bb="#FF9900";break;
case 紅色:$bb="#990000";break;
case 黃色:$bb="#FFCC00";break;
case 白色:$bb="#FFFFFF";break;
case 黑色:$bb="#000000";break;
}


echo '<font style="color:'.$bb.';font-size:'.$c.'px">';
echo $a;
echo '</font>';
}



/***********************
數目    :20
哪個Http:index.php  imdex
用途    :用於 使用者地方 貼圖 
使用方法:function(圖片url,圖片大小,發表文章數,上站次數,系統圖片,選擇系統或自己);
***********************/
function in_im_20($a,$b,$c,$d,$e,$f){

//選擇圖片
switch($e){
case 1:$ccc='im/li_1.gif';break;
case 2:$ccc='im/li_2.gif';break;
case 3:$ccc='im/li_3.gif';break;
case 4:$ccc='im/li_4.gif';break;
case 5:$ccc='im/li_8.gif';break;

case 6:$ccc='im/gi_1.gif';break;
case 7:$ccc='im/gi_2.gif';break;
case 8:$ccc='im/gi_3.gif';break;

case 9:$ccc='im/p_1.jpg';break;
case 10:$ccc='im/p_2.jpg';break;
case 11:$ccc='im/p_3.jpg';break;
case 12:$ccc='im/p_4.jpg';break;
case 13:$ccc='im/p_5.gif';break;
case 14:$ccc='im/p_6.jpg';break;
}//end


if($f=='1'){
switch($b){
case 1:$bbbb='<img src="'.$a.'"   width="100" height="100">';break;
case 2:$bbbb='<img src="'.$a.'"   width="130" height="130">';break;
case 3:$bbbb='<img src="'.$a.'"   width="170" height="170">';break;
case 4:$bbbb='<img src="'.$a.'"   width="200" height="200">';break;
case 5:$bbbb='<img src="'.$a.'"   width="145" height="129">';break;
case 6:$bbbb='<img src="'.$a.'"   width="160" height="118">';break;
case 7:$bbbb='<img src="'.$a.'"   width="180" height="60">';break;
case 8:$bbbb='<img src="'.$a.'"   width="200" height="300">';break;
case 9:$bbbb='<img src="'.$a.'"   width="100" height="50">';break;
case 10:$bbbb='<img src="'.$a.'"   width="120" height="200">';break;
case 11:$bbbb='<img src="'.$a.'"   width="200" height="400">';break;
case 12:$bbbb='<img src="'.$a.'"   width="150" height="400">';break;
case 13:$bbbb='<img src="'.$a.'"   width="220" height="400">';break;
case 14:$bbbb='<img src="'.$a.'"   width="225" height="320">';break;
case 15:$bbbb='<img src="'.$a.'"   width="210" height="350">';break;
}//end
}else{
$bbbb='<img src="'.$ccc.'" >';
}//判定是否要選擇 系統圖片 或是 自己圖片  


echo '<table width="212" height="185" border="0" cellpadding="1" cellspacing="1">
  <tr>
    <td height="144" colspan="2"><div align="center">'.$bbbb.'</div></td>
  </tr>
  <tr>
    <td width="0" height="22" nowrap><div align="left">發文次數: </div></td>
    <td width="141" nowrap><div align="left">'.$c.' </div></td>
  </tr>
  <tr>
    <td height="0" nowrap><div align="left"> 回覆次數:</div></td>
    <td nowrap><div align="left">'.$d.' </div></td>
  </tr>
</table>';
}

/***********************
數目    :21
哪個Http:index.php  imdex
用途    :用於 Show出個人資料 選擇 圖片
使用方法:function(圖片url,圖片大小,系統圖片,選擇系統或自己);
***********************/
function in_im_21($a,$b,$e,$f){

//選擇圖片
switch($e){
case 1:$ccc='im/li_1.gif';break;
case 2:$ccc='im/li_2.gif';break;
case 3:$ccc='im/li_3.gif';break;
case 4:$ccc='im/li_4.gif';break;
case 5:$ccc='im/li_8.gif';break;

case 6:$ccc='im/gi_1.gif';break;
case 7:$ccc='im/gi_2.gif';break;
case 8:$ccc='im/gi_3.gif';break;

case 9:$ccc='im/p_1.jpg';break;
case 10:$ccc='im/p_2.jpg';break;
case 11:$ccc='im/p_3.jpg';break;
case 12:$ccc='im/p_4.jpg';break;
case 13:$ccc='im/p_5.gif';break;
case 14:$ccc='im/p_6.jpg';break;
}//end


if($f=='1'){
switch($b){
case 1:$bbbb='<img src="'.$a.'"   width="100" height="100">';break;
case 2:$bbbb='<img src="'.$a.'"   width="130" height="130">';break;
case 3:$bbbb='<img src="'.$a.'"   width="170" height="170">';break;
case 4:$bbbb='<img src="'.$a.'"   width="200" height="200">';break;
case 5:$bbbb='<img src="'.$a.'"   width="145" height="129">';break;
case 6:$bbbb='<img src="'.$a.'"   width="160" height="118">';break;
case 7:$bbbb='<img src="'.$a.'"   width="180" height="60">';break;
case 8:$bbbb='<img src="'.$a.'"   width="200" height="300">';break;
case 9:$bbbb='<img src="'.$a.'"   width="100" height="50">';break;
case 10:$bbbb='<img src="'.$a.'"   width="120" height="200">';break;
case 11:$bbbb='<img src="'.$a.'"   width="200" height="400">';break;
case 12:$bbbb='<img src="'.$a.'"   width="150" height="400">';break;
case 13:$bbbb='<img src="'.$a.'"   width="220" height="400">';break;
case 14:$bbbb='<img src="'.$a.'"   width="225" height="320">';break;
case 15:$bbbb='<img src="'.$a.'"   width="210" height="350">';break;
}//end switch
}else{
$bbbb='<img src="'.$ccc.'" >';
}//判定是否要選擇 系統圖片 或是 自己圖片  
echo $bbbb;
}











/***********************
數目    :22
哪個Http:indax.php
用途    :e-mail 表單 寄私信
使用方法:function(給予通訊錄);
***********************/
function in_indax_22($a,$b,$c,$looa_c){
echo'<form name="form1" method="post" action="../abc_cool/url_header.php">


<table width="579" height="435" border="1" cellpadding="1" cellspacing="1" bordercolor="#000000">
  <tr>
    <td width="571" height="39" bgcolor="'.$looa_c.'"><div align="left"> &nbsp; 寄一份私信</div></td>
  </tr>
  <tr>
    <td height="40" bgcolor="#EFEFEF"><div align="left"> &nbsp; <input name="send_2006_7_5_a" type="radio" value="0" checked> &nbsp;對方的暱稱 
        <input type="text" name="send_2006_7_5_b" maxlength="20">
    </div></td>
  </tr>
  <tr>
    <td height="41" bgcolor="#EFEFEF"><div align="left">&nbsp; <input name="send_2006_7_5_a" type="radio" value="1" > &nbsp;通訊錄 
        ';
		echo '<select name="send_2006_7_5_c">';
    for($i=0;$i<count($a);$i++){
	echo'<option value="'.$a[$i][5].'"  >'.$a[$i][1].'</option>';
	}
       echo ' </select>';
	   
	   
   echo ' </div></td>
  </tr>
  <tr>
    <td height="42" bgcolor="#EFEFEF"><div align="left">&nbsp; 標題
        <input type="text" name="send_2006_7_5_d" value="'.$c[0][2].'" maxlength="30">
    </div></td>
  </tr>
  <tr>
    <td height="198" bgcolor="#EFEFEF"><div align="center">
      <p>
        <br>
        <textarea name="send_2006_7_5_f" cols="70" rows="12" wrap="VIRTUAL">'.$c[0][3].'</textarea>
  </p>

      <p align="left">&nbsp;      </p>
    </div></td>
  </tr>
  <tr>
    <td height="35" bgcolor="#EFEFEF"><div align="center">
      <input type="submit" name="Submit" value="送出">
    </div></td>
  </tr>
</table>

<input type="hidden" name="send_2006_7_5_i" value="'.$b.'">
<input type="hidden" name="pin_kk47" value="aaa2">
</form>
';

}














/***********************
數目    :23
哪個Http:indax.php
用途    :看信封內容
使用方法:function(給予通訊錄);
***********************/
function in_indax_23($a,$b,$looa_c,$looa_cc){
echo'<table width="560" height="193" border="1" cellpadding="1" cellspacing="1" bordercolor="#000000" bgcolor="'.$looa_cc.'">
  <tr bgcolor="'.$looa_c.'">
    <td height="37" colspan="2"> <div align="left"> 閱讀信件 </div></td>
  </tr>
  <tr>
    <td height="38"><div align="center"> 寄信者</div></td>
    <td width="312"><div align="left"><pre><br> <a href="in_body.php?na_num='.$a[0][10].'" target="_black" style="font-size:15px">'.$a[0][2].'</a></pre></div></td>
  </tr>
  <tr>
    <td height="34"><div align="center"> 標題</div></td>
    <td><div align="left">'.$a[0][4].'</div></td>
  </tr>
  <tr>
    <td height="75" colspan="2" >
      <div align="center"><br>

      <table width="480" height="21" border="0" cellpadding="0" cellspacing="0">
	     <tr>
          <th height="17" nowrap ><div align="left">內容 :</div></th>
		  <th height="17"><div align="left">&nbsp;</div></th>
        </tr>
        <tr>
		<td height="17" bgcolor="#000000"><div align="left">&nbsp;</div></td>

          <td height="17" width="430" bgcolor="#000000"><br><br>
<br><div align="left"><pre><font style="color:#ffffff">'.$a[0][5].'</font></pre></div><br><br></td>
		          </tr>
      </table>
      <p>&nbsp;</p>
      <p>&nbsp;          </p>
      </div></td>
  </tr>
</table>';
}//end





/***********************
數目    :24
哪個Http:
用途    :寫文章
使用方法:function(給予通訊錄);
***********************/
function in_indax_24($a,$b,$c,$d,$e,$looa_c){
echo '<br><br>';
echo '<form name="myform" method="post" action="../abc_cool/url_header.php">';

echo'<table width="551" height="445" border="2" cellpadding="1" cellspacing="1" bordercolor="#000000" >
  <tr>
    <td width="109" height="49" ><div align="center">作者 : </div></td>
    <td width="475" bgcolor="'.$looa_c.'"><div align="left"><pre><br>  '.$b.'</pre></div></td>
  </tr>
  <tr>
    <td height="59" bgcolor="'.$looa_c.'"><div align="center">標題 : </div></td>
    <td> <div align="left"><table width="389" border="0" cellspacing="7" cellpadding="9" >
        <tr>
          <td width="381"><div align="left">
            <input name="send_2006_7_6_a" type="text"  size="40" maxlength="27">
          </div></td>
        </tr>
      </table>
    </div></td>
  </tr>
  <tr>
    <td bgcolor="'.$looa_c.'"><div align="center">內容 : <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
    </div></td>
    <td><div align="center">
      <table width="445" border="0" cellspacing="1" cellpadding="1">
        <tr>
          <td width="430"><div align="left">
		  
<input type="button" name="Submit" value="粗體" onClick="js_2006_7_10_2();"  style="background-color:#000000;font-size:14px;color:#FFCC00">
<input type="button" name="Submit" value="斜體" onClick="js_2006_7_10_3();"  style="background-color:#000000;font-size:14px;color:#FFCC00">
<input type="button" name="Submit" value="字體" onClick="js_2006_7_10_9();"  style="background-color:#000000;font-size:14px;color:#FFCC00">
<input type="button" name="Submit" value="連結" onClick="js_2006_7_10_1();"  style="background-color:#000000;font-size:14px;color:#FFCC00">
<input type="button" name="Submit" value="圖片" onClick="js_2006_7_10_5();"  style="background-color:#000000;font-size:14px;color:#FFCC00">
<input type="button" name="Submit" value="Flash" onClick="js_2006_7_10_6();"  style="background-color:#000000;font-size:14px;color:#FFCC00">
<input type="button" name="Submit" value="音樂" onClick="js_2006_7_10_8()"  style="background-color:#000000;font-size:14px;color:#FFCC00">
<input type="button" name="Submit" value="影片" onClick="js_2006_7_10_7();"  style="background-color:#000000;font-size:14px;color:#FFCC00">

</div></td>
        </tr>
      </table>
      <div align="left"></div>
      <p>
        <textarea name="send_2006_7_6_b" cols="60" rows="15" wrap="VIRTUAL"></textarea>
      </p>
      </div> </td>
  </tr>
  <tr>
    <td height="50" colspan="2"><div align="center">
      <input type="submit" name="Submit2" value="送出">
    </div></td>
  </tr>
</table>
<input type="hidden" name="send_2006_7_6_c" value="'.$e.'">
<input type="hidden" name="send_2006_7_6_d" value="'.$c.'">
<input type="hidden" name="send_2006_7_6_e" value="'.$d.'">
<input type="hidden" name="pin_kk47" value="aaa16">
</from>';//d 是http   c是value
}



/***********************
數目    :25
哪個Http:imdex.php
用途    :body列出 文章選單  我的文章
使用方法:function();
***********************/

function im_imdex_25($a,$c,$d,$looa_c,$looa_cc){

echo '<table width="670" height="40" border="1" cellpadding="2" cellspacing="2" bordercolor="#000000" bgcolor="'.$looa_cc.'">
  <tr bgcolor="'.$looa_c.'">
    <th height="30" colspan="2" nowrap>主題</th>
    <th width="92" nowrap>作者</th>
    <th width="54" nowrap>人氣</th>
    <th width="56" nowrap>回覆</th>
    <th width="96" nowrap>最後更新</th>
  </tr>';  
  for($i=0;$i<count($c);$i++){
    if($c[$i][13]=='關'){
  $de_word='<font style="color:#CC0000;font-size:12px">[關閉]</font>';
  }else{
   $de_word='';
  }//關閉文章的話 就寫出 紅色的關閉二字
  
  
  $aas_peo_a=0;
  for($ba=0;$ba<count($d);$ba++){
  if($c[$i][0]==$d[$ba][7]){
  $aas_peo_a++;
  }
  }//回覆數
  
  switch($c[$i][15]){
case 0:$aaa_url='&nbsp;';break;
  case 1:$aaa_url='<img src="im/im_7.gif"width="18" height="18">';break;
  case 2:$aaa_url='<img src="im/im_8.gif"width="22" height="8">';break;  }//end
  
  echo '<tr>
    <td width="41" nowrap>'.$aaa_url.'</td>
    <th width="280"  height="30"><div align="left"><a href="../index_mi.php?num_10s='.$c[$i][0].'" target="_blank"><font style="color:#CC0000;font-size:12px">[置頂]</font>'.$de_word.$c[$i][1].'</a></div></th>
    <td ><a href="in_body.php?na_num='.$c[$i][14].'" target="_blank">'.$c[$i][2].'</a></td>
    <td nowrap>'.$c[$i][3].'</td>
    <td nowrap>'.$aas_peo_a.'</td>
    <td >'.$c[$i][10].'</td>
  </tr>';
}//for





  for($i=0;$i<count($a);$i++){
    if($a[$i][13]=='關'){
  $de_word='<font style="color:#CC0000;font-size:12px">[關閉]</font>';
  }else{
   $de_word='';
  }//關閉文章的話 就寫出 紅色的關閉二字
  
    
  $aas_peo_b=0;
  for($ba=0;$ba<count($d);$ba++){
  if($a[$i][0]==$d[$ba][7]){
  $aas_peo_b++;
  }
  }//回覆數
  
    switch($a[$i][15]){
  case 0:$aaa_url='&nbsp;';break;
  case 1:$aaa_url='<img src="im/im_7.gif"width="18" height="18">';break;
  case 2:$aaa_url='<img src="im/im_8.gif"width="22" height="8">';break;
  }//end
  echo '<tr>
    <td width="41" nowrap>'.$aaa_url.'</td>
    <th width="280" height="30"><div align="left"><a href="../index_mi.php?num_10s='.$a[$i][0].'" target="_blank">'.$de_word.$a[$i][1].'</a></div></th>
    <td nowrap><a href="in_body.php?na_num='.$a[$i][14].'" target="_blank">'.$a[$i][2].'</a></td>
    <td nowrap>'.$a[$i][3].'</td>
    <td nowrap>'.$aas_peo_b.'</td>
    <td >'.$a[$i][10].'</td>
  </tr>';
}//for
echo '</table>' ;
}






/***********************
數目    :26
哪個Http:imdex.php
用途    :body列出 好文章收集
使用方法:function();
***********************/

function im_imdex_26($a,$b,$cc,$ddd){

    switch($a[15]){
  case 0:$aaa_url='&nbsp;';break;
  case 1:$aaa_url='<img src="im/im_7.gif"width="18" height="18">';break;
  case 2:$aaa_url='<img src="im/im_8.gif"width="22" height="8">';break;
  }//end
  if($a[13]=='關'){
  $de_word='<font style="color:#CC3300;font-size=12px">[關閉]</font>';
  }else{
   $de_word='';
  }//關閉文章的話 就寫出 紅色的關閉二字
  
  
  
  echo '<tr >
    <td width="41" nowrap>'.$aaa_url.'</td>
    <th width="280" height="30"><div align="left">'.$de_word.'<a href="../index_mi.php?num_10s='.$a[0].'" target="_blank" title="出自 : '.$cc.'"> '.$a[1].'</a></div></th>
    <td nowrap><a href="in_body.php?na_num='.$a[14].'"target="_blank">'.$a[2].'</a></td>
    <td nowrap>'.$a[3].'</td>
    <td nowrap>'.$ddd.'</td>
    
	<form name="form2" method="post" action="../abc_cool/url_header.php">
	<td nowrap>
	
	<input type="hidden" name="sem_2006_7_7_a" value="'.$b.'">
	<input type="hidden" name="sem_2006_7_7_b" value="'.$a[0].'">
	<input type="hidden" name="pin_kk47" value="aaa19">
	<input type="submit" name="Submit" value="刪除">
	</td>
	</form>
  </tr>';


}







/***********************
數目    :29
哪個Http:imdex.php
用途    :body列出 好文章收集
使用方法:function();
***********************/
function im_imdex_29($a,$bb,$looa_c,$looa_cc){

echo '<table width="700" height="25" border="1" cellpadding="1" cellspacing="1" bordercolor="#000000" bgcolor="'.$looa_cc.'">
  
  <tr bgcolor="'.$looa_c.'">
    <th height="30" colspan="2" nowrap  >暱稱</th>
    <th nowrap  >禁言時間</th>
    <th width="50" nowrap>懲罰</th>
    <th width="250" nowrap>原因</th>
    <th nowrap>操作人</th>
  </tr>';
  
  for($i=0;$i<count($a);$i++){
  
  
  for($assss=0;$assss<count($bb);$assss++){
  if($a[$i][6]==$bb[$assss][13]){
  $bbwqdqwd=$bb[$assss][2];
  }//end if
  if($a[$i][6]=='0'){
  $bbwqdqwd='新手謙虛三日';
  }
  
  }
  
  
  
  
  echo '  <tr bgcolor="#ffffff">
    <td height="35" colspan="2"  >'.$a[$i][1].'</td>
    <td width="60">'.$a[$i][4].' </td>
    <td  >'.$a[$i][8].'天</td>
    <td ><div align="left"><b style="font-size:12px;color:#990000">[ '.$bbwqdqwd.' ]</b></div>'.$a[$i][7].'</td>
    <td >'.$a[$i][5].'</td>
  </tr>';
  
  
  }
  
  

echo '</table>';

}//end







/***********************
數目    :30
哪個Http:index.php
用途    :秀出選單
使用方法:function(名稱array,給網址待變數也可以);
*******************/
function im_imdex_30($a,$b,$c,$num){
$sa_21=$a/$num;
$sa_22=$a%$num;

if($sa_22!=0){
$sa_2qweqwe='true';
$sa_21++;
}
$numss=$num*9;

$asdcqwd22QWDWQ=($b/$num);



$b_kkkbo_1=$b-$num;//上一頁

echo'<br>';
if($b!=0){
echo '<a href="'.$c.'&a_value=0"> [第一頁] </a> ';
}
if($b!=0){
echo '<a href="'.$c.'&a_value='.$b_kkkbo_1.'"> [上一頁] </a>';
}else{
echo ' [上一頁] ';
}




echo '[共 '.floor($sa_21).' 頁] ';

if($sa_2qweqwe=='true'){
$sa_21--;
}//end
for($i=0;$i<$sa_21;$i++){
$ii=$i+1;

$qwegfqfqwf++;
$i_asd=($ii*$num)-$num;




if($ii==1){
echo '<font style="font-size:13px"><a href="'.$c.'&a_value=0">'.$ii.'</a> </font>';
}else{
echo '<font style="font-size:13px"><a href="'.$c.'&a_value='.$i_asd.'">'.$ii.'</a> </font>';

if($qwegfqfqwf==25){
$qwegfqfqwf=0;
echo '<br>';

}

}


}//for



$b_kkkbo_2=$b+$num;//下一頁

$qdqwd=$a-$b;

if($num<$qdqwd){
echo '<a href="'.$c.'&a_value='.$b_kkkbo_2.'"> [下一頁] </a>';
}else{
echo ' [下一頁] ';
}//end
if($num<$qdqwd){
echo '<a href="'.$c.'&a_value='.($i_asd).'"> [最後一頁] </a>';
}


$qwdqwd=($b/$num)+1;

echo'<br><br>第 '.$qwdqwd.' 頁';


}//end















/***********************
數目    :31
哪個Http:index.php
用途    :秀出選單
使用方法:function(名稱array,給網址待變數也可以);
*******************/
function im_imdex_31($a){

echo '<form name="form1" method="post" action="'.$a.'">
  <table width="236" border="0" cellpadding="2" cellspacing="2" bordercolor="#000000">
    <tr>
      <td width="48" nowrap>收尋器</td>
      <td width="107" nowrap><input type="text" name="say_jo" maxlength="20"></td>
      <td width="27" nowrap><input type="submit" name="Submit" value="收尋"></td>
    </tr>
  </table>
</form>';


}//end


/***********************
數目    :32
哪個Http:index.php
用途    :秀出選單
使用方法:function(名稱array,給網址待變數也可以);
*******************/
function im_imdex_32($a,$gs,$e,$f,$looa_c,$looa_cc){
global $http,$value;
echo '<table width="666" border="0" cellspacing="2" cellpadding="2">
    <tr>
      <td width="80" nowrap><div align="left"><a href="imdex.php?pins=qq2&http='.$http.'&value='.$value.'">[ 發表文章 ] </a></div></td>
      <td width="328" nowrap><div align="left">&nbsp;</div></td>
      <td width="102" nowrap><div align="right">發表文章 '.$e.' </div></td>
      <td width="110" nowrap><div align="right">回覆文章 '.$f.' </div></td>
      </tr>
  </table>
<br>';//發表選單 

echo '<table width="670" height="40" border="1" cellpadding="2" cellspacing="2" bordercolor="#000000" bgcolor="'.$looa_cc.'">
  <tr bgcolor="'.$looa_c.'">
    <th height="30" colspan="2" nowrap>主題</th>
    <th width="80" nowrap>作者</th>
    <th width="54" nowrap>人氣</th>
    <th width="56" nowrap>回覆</th>
    <th  width="80" nowrap>最後更新</th>
  </tr>';  

  for($i=0;$i<count($a);$i++){
  $h01aaa_b=0;
   for($sa=0;$sa<count($gs);$sa++){
  if($gs[$sa][7]==$a[$i][0]){
  
  $h01aaa_b++;
  }
  }//判定 回覆有多少
  

    switch($a[$i][15]){
  case 0:$aaa_url='&nbsp;';break;
  case 1:$aaa_url='<img src="im/im_7.gif"width="18" height="18">';break;
  case 2:$aaa_url='<img src="im/im_8.gif"width="22" height="8">';break;
  }//end
  echo '<tr>
    <td width="41" nowrap>'.$aaa_url.'</td>
    <th width="300" nowrap height="30"><div align="left"><a href="../abc_cool/url_header.php?pin_kk47=aaa23&gg_2006_7_9_1='.$a[$i][0].'" target="_blank">'.$a[$i][1].'</a></div></th>
    <td nowrap><a href="in_body.php?na_num='.$a[$i][14].'" target="_blank">'.$a[$i][2].'</a></td>
    <td nowrap>'.$a[$i][3].'</td>
    <td nowrap>'.$h01aaa_b.'</td>
    <td width="100">'.$a[$i][4].'</td>
  </tr>';
    
}//for
echo '</table>' ;


}






/***********************
數目    :33
哪個Http:index.php
用途    :秀出選單
使用方法:function(名稱array,給網址待變數也可以);
*******************/
function im_imdex_33(){
echo'<input type="button" name="Submit" value="粗體" onClick="js_2006_7_10_2();"  style="background-color:#000000;font-size:14px;color:#FFCC00">
<input type="button" name="Submit" value="斜體" onClick="js_2006_7_10_3();"  style="background-color:#000000;font-size:14px;color:#FFCC00">
<input type="button" name="Submit" value="字體" onClick="js_2006_7_10_9();"  style="background-color:#000000;font-size:14px;color:#FFCC00">
<input type="button" name="Submit" value="連結" onClick="js_2006_7_10_1();"  style="background-color:#000000;font-size:14px;color:#FFCC00">
<input type="button" name="Submit" value="圖片" onClick="js_2006_7_10_5();"  style="background-color:#000000;font-size:14px;color:#FFCC00">
<input type="button" name="Submit" value="Flash" onClick="js_2006_7_10_6();"  style="background-color:#000000;font-size:14px;color:#FFCC00">
<input type="button" name="Submit" value="音樂" onClick="js_2006_7_10_8()"  style="background-color:#000000;font-size:14px;color:#FFCC00">
<input type="button" name="Submit" value="影片" onClick="js_2006_7_10_7();"  style="background-color:#000000;font-size:14px;color:#FFCC00">
<input type="button" name="Submit" value="表格" onClick="jss_2006_7_10_101();"  style="background-color:#000000;font-size:14px;color:#FFCC00">
';

}




/***********************
數目    :34
哪個Http:index.php
用途    :查詢人事
使用方法:function(名稱array,給網址待變數也可以);
*******************/
function im_imdex_34($a){

echo '<form name="form1" method="post" action="'.$a.'">
  <table width="236" border="0" cellpadding="2" cellspacing="2" bordercolor="#000000">
    <tr>
      <td width="150" nowrap>&nbsp; 選擇 &nbsp; 
	<select name="m_star_1">
    <option selected value="3">暱稱</option>
    <option value="1">編號</option>
    <option value="2">帳號</option>
    <option value="4">真實姓名</option>
    <option value="6">性別</option>
	<option value="5">開關</option>
  </select>
	  </td>
      <td width="107" nowrap><input type="text" name="m_star_2" maxlength="20"></td>
      <td width="27" nowrap><input type="submit" name="Submit" value="收尋"></td>
    </tr>
  </table>
</form>';


}//end



/***********************
數目    :35
哪個Http:index.php
用途    :查詢文章
使用方法:function(名稱array,給網址待變數也可以);
*******************/
function im_imdex_35($a){

echo '<form name="form1" method="post" action="'.$a.'">
  <table width="236" border="0" cellpadding="2" cellspacing="2" bordercolor="#000000">
    <tr>
      <td width="150" nowrap>&nbsp; 選擇 &nbsp; 
	<select name="m_star_1">
    <option selected value="1">主題</option>
    <option value="2">作者</option>
    <option value="3">置頂</option>
    <option value="4">精華</option> 
	<option value="5">關閉</option>
  </select>
	  </td>
      <td width="107" nowrap><input type="text" name="m_star_2" maxlength="20"></td>
      <td width="27" nowrap><input type="submit" name="Submit" value="收尋"></td>
    </tr>
  </table>
</form>';


}//end




/***********************
數目    :36
哪個Http:index.php
用途    :查詢30筆資料 都必須用這ㄍ
使用方法:function(名稱array,給網址待變數也可以);
*******************/
function im_imdex_36($a,$ssss){
echo'<table width="600" height="40" border="1" cellpadding="2" cellspacing="2" bordercolor="#000000">
  <tr bgcolor="#FFCC00">
    <th height="30" colspan="2" nowrap>主題</th>
    <th width="80" nowrap>作者</th>
    <th width="54" nowrap>人氣</th>
    <th width="56" nowrap>回覆</th>
    <th  width="80" nowrap>最後更新</th>
  </tr>';

for($i=0;$i<count($a);$i++){

for($j=$i+1;$j<count($a);$j++){
if($a[$i][3]<$a[$j][3]){
$b=$a[$i];//把資料給分
$a[$i]=$a[$j];//把大的資料給本尊
$a[$j]=$b;
}
}

$power_num=0;
for($vvv=0;$vvv<count($ssss);$vvv++){
if($ssss[$vvv][7]==$a[$i][0]){
$power_num++;
}
}





echo'  <tr >
    <th height="30" colspan="2" nowrap><a href="abc_cool/url_header.php?pin_kk47=aaa23&gg_2006_7_9_1='.$a[$i][0].'" style="color:#0066FF" target="_blank" >'.$a[$i][1].'</a></th>
    <td width="80" nowrap>'.$a[$i][2].'</td>
    <td width="54" nowrap>'.$a[$i][3].'</td>
    <td width="56" nowrap>'.$power_num.'</td>
    <td  width="80" nowrap>'.$a[$i][4].'</td>
  </tr>';
  
  if($i>=35){
  $i=count($a);
  }
  

}


echo'</table>';

echo'<br><br><br><br><br><br>';
}









/***********************
數目    :37
哪個Http:index.php
用途    :查詢30筆資料 都必須用這ㄍ
使用方法:function(名稱array,給網址待變數也可以);
*******************/
function im_imdex_37($a,$ssss){
echo'<table width="600" height="40" border="1" cellpadding="2" cellspacing="2" bordercolor="#000000">
  <tr bgcolor="#FFCC00">
    <th height="30" colspan="2" nowrap>主題</th>
    <th width="80" nowrap>作者</th>
    <th width="54" nowrap>人氣</th>
    <th width="56" nowrap>回覆</th>
    <th  width="80" nowrap>最後更新</th>
  </tr>';

for($i=0;$i<count($a);$i++){

for($j=$i+1;$j<count($a);$j++){

$power_num_1=0;
for($vvv=0;$vvv<count($ssss);$vvv++){
if($ssss[$vvv][7]==$a[$i][0]){
$power_num_1++;
}//if
}//for

$power_num_2=0;
for($vvv=0;$vvv<count($ssss);$vvv++){
if($ssss[$vvv][7]==$a[$j][0]){
$power_num_2++;
}//if
}//for
if($power_num_1<$power_num_2){
$b=$a[$i];
$a[$i]=$a[$j];
$a[$j]=$b;


$power_num_1=$power_num_2;
}




}//end----for  j








echo'  <tr >
    <th height="30" colspan="2" nowrap><a href="abc_cool/url_header.php?pin_kk47=aaa23&gg_2006_7_9_1='.$a[$i][0].'" style="color:#0066FF" target="_blank" >'.$a[$i][1].'</a></th>
    <td width="80" nowrap>'.$a[$i][2].'</td>
    <td width="54" nowrap>'.$a[$i][3].'</td>
    <td width="56" nowrap>'.$power_num_1.'</td>
    <td  width="80" nowrap>'.$a[$i][4].'</td>
  </tr>';
  
  if($i>=35){
  $i=count($a);
  }
  

}


echo'</table>';

echo'<br><br><br><br><br><br>';
}













/***********************
數目    :38
哪個Http:index.php
用途    :選找人事
使用方法:function(名稱array,給網址待變數也可以);
*******************/
function im_imdex_38($a){
echo'<table width="500" height="40" border="1" cellpadding="2" cellspacing="2" bordercolor="#000000">
  <tr bgcolor="#FFCC00">
    <th height="30" colspan="2" nowrap>編號</th>
    <th width="80" nowrap>暱稱</th>
    <th width="84" nowrap>職務</th>
    <th width="56" nowrap>真實姓名</th>
	<th width="56" nowrap>性別</th>
	<th width="56" nowrap>開關</th>
  </tr>';

for($i=0;$i<count($a);$i++){


  echo'<tr >
    <th height="30" colspan="2" nowrap>'.$a[$i][0].'</th>
    <th width="80" nowrap>'.$a[$i][3].'</th>
    <th width="84" nowrap>'.$a[$i][15].'</th>
    <th width="56" nowrap>'.$a[$i][24].'</th>
	<th width="56" nowrap>'.$a[$i][4].'</th>
	<td width="56" nowrap>'.$a[$i][19].'</td>
  </tr>';

}//end----for  j
echo'</table>';



}











/***********************
數目    :39
哪個Http:index.php
用途    :選找文章
使用方法:function(名稱array,給網址待變數也可以);
*******************/
function im_imdex_39($a){
echo'<table width="600" height="40" border="1" cellpadding="2" cellspacing="2" bordercolor="#000000">
  <tr bgcolor="#FFCC00">
    <th height="30" colspan="2" nowrap>主題</th>
    <th width="80" nowrap>給予置頂</th>
    <th width="80" nowrap>作者</th>
    <th width="56" nowrap>人氣</th>
    <th  width="80" nowrap>最後更新</th>
  </tr>';






for($i=0;$i<count($a);$i++){




echo'  <tr >
    <th height="30" colspan="2" nowrap><a href="abc_cool/url_header.php?pin_kk47=aaa23&gg_2006_7_9_1='.$a[$i][0].'" style="color:#0066FF" target="_blank" >'.$a[$i][1].'</a></th>
    <td width="80" nowrap>'.$a[$i][5].'</td>
	<td width="80" nowrap>'.$a[$i][2].'</td>
    <td width="54" nowrap>'.$a[$i][3].'</td>
    <td  width="80" nowrap>'.$a[$i][4].'</td>
  </tr>';

}//end----for  j
echo'</table>';



}









/***********************
數目    :40
哪個Http:index.php
用途    :發表投票
使用方法:function(名稱array,給網址待變數也可以);
*******************/
function in_indax_40($a,$b,$c,$d,$e){
echo '<form name="myform" method="post" action="../abc_cool/url_header.php">';

echo'<table width="591" height="445" border="0" cellpadding="1" cellspacing="1" bordercolor="#000000">
  <tr>
    <td width="109" height="49" bgcolor="#0099FF"><div align="center">作者 : </div></td>
    <td width="475"><div align="left"><pre><br>  '.$b.'</pre></div></td>
  </tr>
  <tr>
    <td height="59" bgcolor="#0099FF"><div align="center">標題 : </div></td>
    <td> <div align="left"><table width="389" border="0" cellspacing="7" cellpadding="9" >
        <tr>
          <td width="381"><div align="left">
            <input name="send_2006_7_6_a" type="text"  size="40" maxlength="27">
          </div></td>
        </tr>
      </table>
    </div></td>
  </tr>
  <tr>
    <td bgcolor="#0099FF"><div align="center">內容 : <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
    </div></td>
    <td><div align="center">
      <table width="445" border="0" cellspacing="1" cellpadding="1">
        <tr>
          <td width="430"><div align="left">
		  
<input type="button" name="Submit" value="粗體" onClick="js_2006_7_10_2();"  style="background-color:#000000;font-size:14px;color:#FFCC00">
<input type="button" name="Submit" value="斜體" onClick="js_2006_7_10_3();"  style="background-color:#000000;font-size:14px;color:#FFCC00">
<input type="button" name="Submit" value="字體" onClick="js_2006_7_10_8();"  style="background-color:#000000;font-size:14px;color:#FFCC00">
<input type="button" name="Submit" value="連結" onClick="js_2006_7_10_1();"  style="background-color:#000000;font-size:14px;color:#FFCC00">
<input type="button" name="Submit" value="圖片" onClick="js_2006_7_10_5();"  style="background-color:#000000;font-size:14px;color:#FFCC00">
<input type="button" name="Submit" value="Flash" onClick="js_2006_7_10_6();"  style="background-color:#000000;font-size:14px;color:#FFCC00">
<input type="button" name="Submit" value="音樂" onClick="js_2006_7_10_8()"  style="background-color:#000000;font-size:14px;color:#FFCC00">
<input type="button" name="Submit" value="影片" onClick="js_2006_7_10_7();"  style="background-color:#000000;font-size:14px;color:#FFCC00">

</div></td>
        </tr>
      </table>
      <div align="left"></div>
      <p>
        <textarea name="send_2006_7_6_b" cols="60" rows="15" wrap="VIRTUAL"></textarea>
      </p>
      </div> </td>
  </tr>
  <tr>
    <td height="50" colspan="2"><div align="center">
      <input type="submit" name="Submit2" value="送出">
    </div></td>
  </tr>
</table>
<input type="hidden" name="send_2006_7_6_c" value="'.$e.'">
<input type="hidden" name="send_2006_7_6_d" value="'.$c.'">
<input type="hidden" name="send_2006_7_6_e" value="'.$d.'">
<input type="hidden" name="pin_kk47" value="aaa16">
</from>';//d 是http   c是value
}






/***********************
數目    :41
哪個Http:index.php
用途    :版主管理
使用方法:function(名稱array,給網址待變數也可以);
*******************/
function in_indax_41($a,$b){
echo'<div align="right"><table width="190" border="0" cellspacing="4" cellpadding="8">
  <tr>
    <td><a href="imdex.php?value='.$a.'&http='.$b.'&pins=qq1">[ 所有文章 ]</a></td>
  <td ><a href="imdex.php?value='.$a.'&http='.$b.'&pins=qq4">[ 版主管理 ]</a></td>
  </tr>
</table></div>';

}


/***********************
數目    :42
哪個Http:index.php
用途    :版主管理 (扣文章)
使用方法:function();
*******************/
function in_indax_42($a,$b,$c,$d,$looa_c,$looa_cc){
echo'<table width="671" border="1" cellpadding="1" cellspacing="1" bordercolor="#000000"  bgcolor="'.$looa_cc.'">
  <tr bgcolor="'.$looa_c.'">
    <th height="37" colspan="5" nowrap> <div align="left"> 非自行刪除的文章</div></th>
  </tr>
  <tr bgcolor="#FFFFFF">
    <th width="42" height="30" nowrap>編號</th>
    <th width="305" nowrap>主題</th>
    <th width="82" nowrap>作者</th>
    <th width="111" nowrap>最後編輯人</th>
    <th width="103" nowrap>開/關</th>
  </tr>';
  for($i=0;$i<count($a);$i++){
  
  echo'<tr bgcolor="#FFFFFF">
    <td width="42" height="23" nowrap height="30">'.$a[$i][0].'</td>
    <td width="305" nowrap>'.$a[$i][1].'</td>
    <td width="82" nowrap>'.$a[$i][2].'</td>
    <td width="111" nowrap>'.$a[$i][7].'</td>
	<form name="form1" method="post" action="../abc_cool/url_header.php">
    <td width="103" nowrap><input type="submit" name="Submit" value="打開"></td>
	<input type="hidden" name="pin_kk47aid111" value="'.$c.'">
	<input type="hidden" name="pin_kk47aid222" value="'.$d.'">
	<input type="hidden" name="pin_kk47aid" value="'.$b.'">
	<input type="hidden" name="pin_kk47a222" value="'.$a[$i][0].'">
	<input type="hidden" name="pin_kk47" value="aaa25">
	</form>
  </tr>';
  
  
  
  }//end
  
  
echo '</table>';
}

/***********************
數目    :43
哪個Http:index.php
用途    :版主管理 (黑名單)
使用方法:function(名稱array,給網址待變數也可以);
*******************/
function in_indax_43($a,$b){
echo'<div align="right"><table width="190" border="0" cellspacing="4" cellpadding="8">
  <tr>
    <td><a href="imdex.php?value='.$a.'&http='.$b.'&pins=qq1">[ 所有文章 ]</a></td>
  <td ><a href="imdex.php?value='.$a.'&http='.$b.'&pins=qq5">[ 黑名單 ]</a></td>
  </tr>
</table></div>';

}

/***********************
數目    :44
哪個Http:index.php
用途    :版主管理 (扣留文章)
使用方法:function(名稱array,給網址待變數也可以);
*******************/
function in_indax_44($a,$b){
echo'<div align="right"><table width="710" border="0" cellspacing="4" cellpadding="8">
  <tr>
  <td><div align="left"><a href="imdex.php?value='.$a.'&http='.$b.'&pins=qq6">[ 新增一筆資料 ]</a></div></td>
  <td width="450"><a href="imdex.php?value='.$a.'&http='.$b.'&pins=qq1">[ 所有文章 ]</a></td>
  <td ><a href="imdex.php?value='.$a.'&http='.$b.'&pins=qq4">[ 扣留文章 ]</a></td>
  </tr>
</table></div>';

}

/***********************
數目    :45
哪個Http:imdex.php
用途    :body列出 好文章收集
使用方法:function();
***********************/
function im_imdex_45($a,$looa_c,$looa_cc){

echo '<table width="700" height="25" border="1" cellpadding="1" cellspacing="1" bordercolor="#000000" bgcolor="'.$looa_cc.'">
  <tr bgcolor="'.$looa_c.'">
    <th height="30" colspan="2" nowrap  >暱稱</th>
    <th nowrap  >禁言時間</th>
    <th width="50" nowrap>懲罰</th>
    <th width="250" nowrap>原因</th>
    <th nowrap>操作人</th>
  </tr>';
  
  for($i=0;$i<count($a);$i++){
  
  echo '  <tr bgcolor="#ffffff">
    <td height="35" colspan="2"  >'.$a[$i][1].'</td>
    <td width="60">'.$a[$i][4].'</td>
    <td  >'.$a[$i][8].'天</td>
    <td >'.$a[$i][7].'</td>
    <td >'.$a[$i][5].'</td>
  </tr>';
  
  
  }
  
  

echo '</table>';

}//end







/***********************
數目    :46
哪個Http:imdex.php
用途    :body列出 好文章收集
使用方法:function();
***********************/
function im_imdex_46($a,$b,$looa_c,$looa_cc){
echo'<br>';
echo'<form name="body_a_s" method="post" action="imdex.php?value='.$a.'&http='.$b.'&pins=qq7">';
echo'<table width="600" border="1" cellpadding="1" cellspacing="1" bordercolor="#000000" bgcolor="'.$looa_cc.'">
  <tr>
    <th width="466" bgcolor="'.$looa_c.'" height="20"><div align="left"> 黑名單</div></th>
  </tr>
  <tr>
    <td height="35" bgcolor="#CCCCCC">編號
      <input name="pc_number" type="text" size="12" readonly="true">
原因
<input name="pc_becuse" type="text" size="35" readonly="true">
(禁言)
<select name="pc_sssaaa">
  <option value="3" selected>3天</option>
  <option value="7">7天</option>
  <option value="14">14天</option>
</select> <input type="submit" name="Submit2" value="傳送"></td>
  </tr>
</table>';


echo'
<input type="hidden" name="valuessss" value="'.$a.'">

</form>';
}



/***********************
數目    :47
哪個Http:index.php
用途    :版主管理 (扣留文章)
使用方法:function(名稱array,給網址待變數也可以);
*******************/
function in_indax_47($a,$b){
echo'<div align="right"><table width="190" border="0" cellspacing="4" cellpadding="8">
  <tr>
    <td><a href="imdex.php?value='.$a.'&http='.$b.'&pins=qq1">[ 所有文章 ]</a></td>
  <td ><a href="imdex.php?value='.$a.'&http='.$b.'&pins=qq4">[ 扣留文章 ]</a></td>
  </tr>
</table></div>';

}










/***********************
數目    :48
哪個Http:index.php
用途    :版主管理 (扣留文章)
使用方法:function(名稱array,給網址待變數也可以);
*******************/
function in_indax_48($a,$b,$c,$d,$e,$f,$looa_c,$looa_cc){

echo'<br><br><br><table width="318" border="1" cellpadding="2" cellspacing="2" bordercolor="#000000"  bgcolor="'.$looa_cc.'">
  <tr bgcolor="'.$looa_c.'">
    <th width="34" height="30" nowrap>編號</th>
  <td width="254"><div align="left"> '.$a[0][0].'#</div></td>
  </tr>
  <tr>
    <th nowrap>暱稱</th>
  <td> <div align="left">'.$a[0][3].'</div></td>
  </tr>
  <tr>
    <th nowrap>職務</th>
  <td> <div align="left">'.$a[0][15].'</div></td>
  </tr>
  <tr>
    <th nowrap>禁言</th>
  <td> <div align="left"> '.$b.' 天</div></td>
  </tr>
  <tr>
    <th nowrap>原因</th>
  <td> <div align="left"> '.$c.'</div></td>
  </tr>
  <tr>
    <th nowrap>&nbsp;</th>
    ';
	if($a[0][19]=='開'){
	if($a[0][15]=='無'){
	echo'<form name="form1" method="post" action="../abc_cool/url_header.php">
	<td><div align="right">
      <input type="submit" name="Submit" value="禁言">
	  <input type="hidden" name="pin_kk47" value="aaa26">
	  
	  
	  <input type="hidden" name="aa_2006_7_14_a" value="'.$a[0][0].'">
	  <input type="hidden" name="aa_2006_7_14_b" value="'.$a[0][3].'">
	  <input type="hidden" name="aa_2006_7_14_c" value="'.$c.'">
	  <input type="hidden" name="aa_2006_7_14_d" value="'.$d.'">
	  <input type="hidden" name="aa_2006_7_14_e" value="'.$e.'">
	  <input type="hidden" name="aa_2006_7_14_f" value="'.$b.'">
	   <input type="hidden" name="aa_2006_7_14_h" value="'.$f.'">
    </div></td>
	</form>';
	}else{
	
	echo'<td><div align="right">[ 無法禁言 ]</div></td>';
	}
	}else{
	
		echo'<td><div align="right">[ 已被禁言 ]</div></td>';
	}
	
  echo'</tr>
</table>';
}





function body_power12_087($a,$b,$c){
$asd=floor($a/$b);
$asd1=$a%$b;
if($asd1!=0){
$asd+=1;
}





echo'共 '.$asd.' 頁';
$num_body=0; //幾筆數字

for($i=$asd;$i>0;$i--){
$ii=$i-1;
$num_body++;

$words_asd=' <a href="index_mi.php?loas='.$ii.'&num_10s='.$c.'">'.$i.'</a> '.$words_asd;

}//end

echo $words_asd;
}




function see_words_100($a,$b,$cc){
echo'<form name="form1" method="post" action="index.php?add=adder">';
echo '<table width="395" height="81" border="1" cellpadding="1" cellspacing="1" bordercolor="#000000" bgcolor="'.$cc.'">
  <tr>
    <td height="39" bgcolor="'.$a.'"> <div align="left">同意書</div></td>
  </tr>
  <tr>
    <td height="15"><div align="left">';
	
echo'<pre>';
foreach($b as $bbbs){
echo $bbbs;
}
echo'</pre>';
	
	echo'</div></td>
  </tr>
  <tr>
    <td height="15"><div align="center">
      <input type="submit" name="Submit3" value="我已閱讀完 !   我接受">
    </div></td>
  </tr>
</table>';

echo'</form>';

}//end 最後一樣 同意以上抉擇

?>