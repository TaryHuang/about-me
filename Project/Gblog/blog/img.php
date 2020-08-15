<?
class pin_et{
var $a;
var $b;
var $c;
var $d;
function bgcolor($img,$numbers){
if($numbers<=600){
$color_add=-(rand(80,100));
}

for($i=0;$i<15;$i++){
$colors=imagecolorallocate($img, (222+$color_add), (222+$color_add), (255+$color_add));
$add+=10;
imageline($img,0+$add,0,0+$add,70,$colors);
}//for

for($i=0;$i<15;$i++){
$colors=imagecolorallocate($img, (222+$color_add), (222+$color_add), (255+$color_add));
$add_s+=10;
imageline($img,0,0+$add_s,150,0+$add_s,$colors);
}//for


//---------　4　邊

$colors=imagecolorallocate($img, 0, 0, 0);
imageline($img,0,0,150,0,$colors);//top
imageline($img,0,0,0,70,$colors);//left
imageline($img,149,0,149,70,$colors);//down
imageline($img,0,69,149,69,$colors);//down
//---------
}//背景




function line_array($img,$sizes){
$color_switch=rand(1,6);
switch($color_switch){
case 1:$color=imagecolorallocate($img, 255, 204, 51);break;
case 2:$color=imagecolorallocate($img, 0, 102, 102);break;//OK
case 3:$color=imagecolorallocate($img, 255, 100, 100);break;//OK
case 4:$color=imagecolorallocate($img, 103, 103, 52);break;
case 5:$color=imagecolorallocate($img, 153, 102, 153);break;//OK
case 6:$color=imagecolorallocate($img, 0, 0, 0);break;
}
//---------------
$size=rand(22,25);//距離
$moto=4;//-距離
$up=rand(-10,10);
for($i=0;$i<(count($this->a));$i++){
imageline($img,$this->a[$i]+($size*$sizes)-$moto,$this->b[$i]+$up,$this->c[$i]+($size*$sizes)-$moto,$this->d[$i]+$up,$color);
imageline($img,$this->a[$i]+($size*$sizes)-$moto+1,$this->b[$i]+1+$up,$this->c[$i]+($size*$sizes)-$moto+1,$this->d[$i]+1+$up,$color);
imageline($img,$this->a[$i]+($size*$sizes)-$moto-1,$this->b[$i]-1+$up,$this->c[$i]+($size*$sizes)-$moto-1,$this->d[$i]-1+$up,$color);
imageline($img,$this->a[$i]+($size*$sizes)-$moto-2,$this->b[$i]-2+$up,$this->c[$i]+($size*$sizes)-$moto-2,$this->d[$i]-2+$up,$color);
}//for
}//end array填寫筆劃　畫圖




function pin_switch($num){
switch($num){
case '0':$this->a=array(rand(25,30),45,29,28);
       $this->b=array(18,18,20,50);
       $this->c=array(rand(25,30),45,45,48);
       $this->d=array(50,50,20,50);break;
	   
case '1':$num_r=rand(5,18);
		$this->a=array(29,29,29);
       $this->b=array(40,25,25);
       $this->c=array(28,28,28);
       $this->d=array(40+$num_r,40+$num_r,40+$num_r);break;
	   
case '2':$this->a=array(32,20,20);
       $this->b=array(32,32,50);
       $this->c=array(20,32,40);
       $this->d=array(50,32,40);break;
	   
case '3':$this->a=array(20,35,20,40);
       $this->b=array(30,32,40,44);
       $this->c=array(35,20,40,20);
       $this->d=array(32,40,44,50);break;
	   	   	   
case '4':$this->a=array(rand(30,35),24,rand(32,45));
       $this->b=array(25,40,25);
       $this->c=array(24,rand(40,45),30);
       $this->d=array(40,40,48);break;
	   	   
case '5':$this->a=array(21,21,23,37,43);
       $this->b=array(rand(28,35),23,37,33,33);
       $this->c=array(rand(30,50),23,37,43,37);
       $this->d=array(20,37,33,33,50);break;
	   
case '6':$this->a=array(rand(28,35),28,40,40);
       $this->b=array(30,50,50,40);
       $this->c=array(28,40,40,30);
       $this->d=array(50,50,44,40);break;
	   
case '7':$this->a=array(43,29,29);
       $this->b=array(20,20,20);
       $this->c=array(40,45,29);
       $this->d=array(45,20,30);break;
	   
case '8':$this->a=array(rand(25,35),28,40,40,40,40);
       $this->b=array(20,50,50,40,25,25);
       $this->c=array(28,40,40,30,40,29);
       $this->d=array(50,50,40,40,50,20);break;
	   	   	   
case '9':$this->a=array(43,29,29,29);
       $this->b=array(20,20,20,32);
       $this->c=array(40,45,29,40);
       $this->d=array(50,20,32,30);break;	   

}//end switch
}//end 









function pin_show($word_pin){
$img = imagecreate(150, 70);
$rands_1=rand(180,250);
$rands_2=rand(180,250);
$rands_3=rand(180,250);
imagecolorallocate($img, $rands_1, $rands_2, $rands_3);
$this->bgcolor($img,($rands_1+$rands_2+$rands_3));
for($i=0;$i<strlen($word_pin);$i++){
$this->pin_switch($word_pin[$i]);
$this->line_array($img,$i);
}//end　圖片編寫完成

//************************************
header("Content-type: image/png");
imagepng($img);
imagedestroy($img);
//************************************
}//end




}
//end class **********驗證碼**********
?>
<?
$img=new pin_et;
$img->pin_show($_GET[img_pin]);
?>