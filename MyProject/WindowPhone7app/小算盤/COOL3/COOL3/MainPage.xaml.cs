using System;
using System.Collections.Generic;
using System.Linq;
using System.Net;
using System.Windows;
using System.Windows.Controls;
using System.Windows.Documents;
using System.Windows.Input;
using System.Windows.Media;
using System.Windows.Media.Animation;
using System.Windows.Shapes;
using Microsoft.Phone.Controls;

namespace COOL3
{
    public partial class MainPage : PhoneApplicationPage
    {
        public int NUMMAX = 15;//被X數
        public string NUM ;//被X數
        public string NUM2 ;//X數
        public bool Tbln ;//旗標
        public bool TERROR;//是否除以0 或超出範圍
        public string Tcheck ;//加減乘除
        public bool ISSETNUM2;//是否已經輸入NUM2 在尚未輸入前 都可以換加減符號
        //--------------------------------------------------------------------
        public bool GAME_START = false;//遊戲開關
        public int GAME_SSEC = 600;//起始秒數
        public int GAME_NSEC = 600;//目前秒數
        public int GAME_PTR = 0;//指標
        public string[] GAME_BOX = { "BTN1", "BTN2", "BTN3", "BTN4", "BTN5", "BTN6", "BTN7", "BTN8", "BTN9" };
        public string[] GAME1_BOX = { "BTN1", "BTN2", "BTN3", "BTN4", "BTN5", "BTN6", "BTN7", "BTN8", "BTN9" };
        public string[] GAME2_BOX = { "BTN3", "BTN2", "BTN6", "BTN1", "BTN5", "BTN9", "BTN4", "BTN8", "BTN7" };
        public string[] GAME3_BOX = { "BTN7", "BTN8", "BTN9", "BTN6", "BTN3", "BTN2", "BTN1", "BTN4", "BTN5" };
        public string[] GAME4_BOX = { "BTN9", "BTN6", "BTN3", "BTN8", "BTN5", "BTN2", "BTN7", "BTN4", "BTN1" };

        public int LOVE_PTR = 0;//指標
        public string[] LOVE_BOX = { "B1", "B2", "B3", "B4", "B5", "B6", "B7", "B8", "B9", "B10", "B11", "B12", "B11" ,"B10","B9","B8","B7","B6","B5","B4","B3","B2"};

        public string GAME_BTN1 = "";//指標
        System.Windows.Threading.DispatcherTimer GAME = new System.Windows.Threading.DispatcherTimer();
        //System.Windows.Threading.DispatcherTimer LOVEA = new System.Windows.Threading.DispatcherTimer(); 
        // 建構函式







        public MainPage()
        {
            InitializeComponent();


            //改變top圖片
            PhoneApplicationPage pap = new PhoneApplicationPage();

            if ((pap.Resources["PhoneBackgroundColor"]).ToString()=="#FF000000")
            {
                Uri dir = new Uri("Images/LOVE2.png", UriKind.Relative);
                ImageSource source = new System.Windows.Media.Imaging.BitmapImage(dir);
                image3.Source = source; 
            }else{
                Uri dir = new Uri("Images/LOVE1.png", UriKind.Relative);
                ImageSource source = new System.Windows.Media.Imaging.BitmapImage(dir);
                image3.Source = source; 
            }
            
            

            ALL_Initialize();
            GAME.Tick += new EventHandler(GAME1_Tick);

            SIGN.Text = "";
            OUTPUT_NUM();
            
        }


        public string ANS_SHOW(string STR)
        {
            if(TERROR){
                return STR;
            }
            //字體逗點分隔
            int START = STR.IndexOf(".");
            int num = 0;//計算三次給予逗點一次
            string STRBOX = "";


            if (START == -1)
            {
                for (int i = STR.Length; i > 0; i--)
                {
                    if (num % 3 == 0 && num != 0 && STR.Substring(i - 1, 1) != "-")
                    {
                        STRBOX = ',' + STRBOX;
                    }
                    STRBOX = STR.Substring(i - 1, 1) + STRBOX;
                    num++;
                }

            }
            else
            {
                for (int i = STR.Length; i > 0; i--)
                {
                    if (i <= START)
                    {
                        if (num % 3 == 0 && num != 0 && STR.Substring(i - 1, 1) != "-" )
                        {
                            STRBOX = ',' + STRBOX;
                        } num++;
                    }
                    STRBOX = STR.Substring(i - 1, 1) + STRBOX;
                   
                }
            }
            return STRBOX;
        }



        public void ANS_FONTSIZE()
        {
            //字體大小變換
            string str = ANS.Text;
            if (str.Length > 7)
            {
                if (str.Length > 9)
                {
                    if (str.Length > 11)
                    {
                        if (str.Length > 13)
                        {
                            ANS.FontSize = 42;
                        }else{
                             ANS.FontSize = 48;
                        }
                    }else{
                        ANS.FontSize = 56;
                    }
                }else{
                    ANS.FontSize = 72;
                }
            }
            else
            {
                ANS.FontSize = 80;
            }
            ANS.Text = ANS_SHOW(ANS.Text);
        }

        public void OUTPUT_NUM(){
            if (Tbln)
            {
                ANS.Text = NUM.ToString();
            }
            else
            {
                ANS.Text = NUM2.ToString();
            }
            ANS_FONTSIZE();
        }

        public bool CHKNUMMAX()
        {
            string STR;
            if(Tbln){
                STR=NUM;
                if (STR.IndexOf("-") == -1)
                {
                    if (NUM.Length >= NUMMAX)
                    {
                        return false;
                    }
                }
                else
                {
                    if (NUM.Length-1 >= NUMMAX)
                    {
                        return false;
                    }
                }
            }else{
                STR = NUM2;
                if (STR.IndexOf("-") == -1)
                {
                    if (NUM2.Length >= NUMMAX)
                    {
                        return false;
                    }
                }
                else
                {
                    if (NUM2.Length-1 >= NUMMAX)
                    {
                        return false;
                    }
                }
            }
            return true;

        }


        private void NUMBTN_Click(object sender, RoutedEventArgs e)
        {

            if (TERROR)
            {
                return;
            }


            //驗證是否數字過多 無法增加
            if (!CHKNUMMAX())
            {
                return;
            }

            Button BTN = sender as Button;
            if(Tbln){
                if (NUM == "0")
                {
                    if (BTN.Content.ToString()=="0")
                    {
                        return;
                    }
                    NUM = BTN.Content.ToString() ;
                }
                else
                {
                    NUM = NUM.ToString() + BTN.Content.ToString();
                }
            }else{
                if (NUM2 == "0")
                {
                    if (BTN.Content.ToString()=="0")
                    {
                        OUTPUT_NUM();
                        return;
                    }
                    ISSETNUM2 = true;
                    NUM2 = BTN.Content.ToString() ;
                }
                else
                {
                    ISSETNUM2 = true;
                    NUM2 = NUM2.ToString() + BTN.Content.ToString();
                }
            }
            
            OUTPUT_NUM();
            ACTION_ANS2();//看板
        }


        private void sign_Click(object sender, RoutedEventArgs e)
        {

            if (TERROR)
            {
                return;
            }

            //加減符號處理
            Button BTN = sender as Button;
            

            if (Tbln)
            {
                Tcheck = BTN.Content.ToString();
                Tbln = false;
            }
            else
            {
                if (ISSETNUM2)
                {
                    ACTION_ANS();
                    ANS_Initialize();
                    OUTPUT_NUM();
                    Tcheck = BTN.Content.ToString();
                    Tbln = false;
                }
                else
                {
                    //可更換符號 但不去計算ANS值
                    Tcheck = BTN.Content.ToString();
                }
                
            }
            sign_OUTPUT();
            ACTION_ANS2();//看板
        }

        public void sign_OUTPUT()
        {
            //加減符號顯示UI上
            SIGN.Text = Tcheck;
        }


        public void ALL_Initialize()
        {
            NUM = "0";//被X數
            NUM2 = "0";//X數
            Tbln = true;//旗標
            Tcheck = "";//加減乘除
            SIGN.Text = "";
            ISSETNUM2 = false;
            TERROR = false;//是否已經除以0
            ACTION_ANS2();//看板
        }


        public void ANS_Initialize()
        {
            NUM2 = "0";//X數
            Tbln = true;//旗標
            ISSETNUM2 = false;
            Tcheck = "";//加減乘除
            SIGN.Text = "";
            ACTION_ANS2();//看板
        }

        public void ACTION_ANS2()
        {
            
            //看板
            if (ISSETNUM2)
            {
                ANS2.Text = ANS_SHOW(NUM) + Tcheck;
            }
            else
            {
                ANS2.Text ="";
            }
        }



        private void clear_Click(object sender, RoutedEventArgs e)
        {
            //全部清除 重來
            ALL_Initialize();
            OUTPUT_NUM();
        }
        private void back_Click(object sender, RoutedEventArgs e)
        {

            if (TERROR)
            {
                return;
            }


            //刪除一個數字 若已經按了符號 就先刪除符號 
            if (Tbln)
            {
             //處理被x數
                if (NUM.Length > 1)
                {
                    if (NUM.Substring(0, 1) == "-" && NUM.Length == 2)
                    {
                        NUM = "0";
                    }
                    else
                    {
                        NUM = NUM.Substring(0, NUM.Length - 1);
                    }
                }
                else
                {              
                    NUM = "0";
                }
            }
            else
            {
            //處理x數
                if (NUM2 == "0")
                {
                    Tcheck = "";
                    Tbln = true;
                    ISSETNUM2 = false;
                    sign_OUTPUT();
                }
                else
                {
                    if (NUM2.Length > 1)
                    {
                        if (NUM2.Substring(0, 1) == "-" && NUM2.Length == 2)
                        {
                            NUM2 = "0";
                        }
                        else
                        {
                            NUM2 = NUM2.Substring(0, NUM2.Length - 1);
                        }
                    }
                    else
                    {
                        NUM2 = "0";
                    }
                    
                }
            }

            OUTPUT_NUM();
            ACTION_ANS2();//看板
        }



 


        public string  DEL_0(string STR)
        {
            if(STR.IndexOf(".")!=-1){
                for (int i = STR.Length; i >= 0 ; i--)
                {
                    if (STR.Substring(i - 1, 1) == ".")
                    {
                        STR = STR.Substring(0, STR.Length - 1);
                        break;
                    }  
                  


                    if (STR.Substring(i-1, 1) == "0")
                    {
 
                        STR = STR.Substring(0, STR.Length - 1);
                    }
                    else
                    {
                        break;
                    }
                }
            }
            return STR;
        }

        public void ACTION_ANS()
        {
            NUM = DEL_0(NUM);
            NUM2 = DEL_0(NUM2);

            try
            {



                //計算等於值
                if (!Tbln)
                {
                    if (Tcheck == "＋")
                    {
                        NUM = (Convert.ToDecimal(NUM) + Convert.ToDecimal(NUM2)).ToString();
                    }


                    if (Tcheck == "－")
                    {
                        NUM = (Convert.ToDecimal(NUM) - Convert.ToDecimal(NUM2)).ToString();
                    }



                    if (Tcheck == "×")
                    {
                        NUM = (Convert.ToDecimal(NUM) * Convert.ToDecimal(NUM2)).ToString();
                    }


                    if (Tcheck == "÷")
                    {
                        if (NUM2 == "0")
                        {
                            TERROR = true;
                            NUM = "無法除以０";
                            return;
                        }
                        else
                        {
                            NUM = (Convert.ToDecimal(NUM) / Convert.ToDecimal(NUM2)).ToString();
                        }
                    }

                }



                NUM = DEL_0(NUM);
                NUM = (System.Math.Round(Convert.ToDecimal(NUM), 6)).ToString();
                NUM = DEL_0(NUM);
                if (NUM.IndexOf("-") == -1)
                {
                    if (NUM.Length > NUMMAX)
                    {
                        TERROR = true;
                        NUM = "超出範圍…";
                    }
                }
                else
                {
                    if (NUM.Length - 1 > NUMMAX)
                    {
                        TERROR = true;
                        NUM = "超出範圍…";
                    }
                }
            }
            catch
            {
                TERROR = true;
                NUM = "超出範圍…";
            }
        }

        private void BTN_ANS_Click(object sender, RoutedEventArgs e)
        {

            if (TERROR)
            {
                return;
            }
            ACTION_ANS();
            ANS_Initialize();
            OUTPUT_NUM();

        }







        public void CHANGE_NUMSIGN(object sender, RoutedEventArgs e)
        {
            if (TERROR)
            {
                return;
            }

            if (Tbln)
            {
                NUM = (Convert.ToDecimal(NUM) * -1).ToString();
                OUTPUT_NUM();
            }
            else
            {
                if (NUM2!="0")
                {
                    NUM2 = (Convert.ToDecimal(NUM2) * -1).ToString();
                    OUTPUT_NUM();
                }
            }
            
        }

        private void BTN_D_Click(object sender, RoutedEventArgs e)
        {
            if (TERROR)
            {
                return;
            }


            //驗證是否數字過多 無法增加
            if (!CHKNUMMAX())
            {
                return;
            }


            //驗證是否已經輸入.
            if (Tbln)
            {
                
                if (NUM.IndexOf(".") == -1)
                {
                    NUM = NUM + ".";
                }else{
                    return;
                }
            }else{
                if (NUM2.IndexOf(".") == -1)
                {
                     NUM2 = NUM2 + ".";
                }
                else
                {
                    return;
                }
            }

            OUTPUT_NUM();
        }







        //＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊以下為遊戲事件
        //＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊以下為遊戲事件
        
        private void GAME1_MouseEnter(object sender, MouseEventArgs e)
        {
            
            if (!GAME_START && !GAME.IsEnabled)
            {
                string TEMP_BOX = GAME_BOX[GAME_PTR]; //暫存指標
                //亂數給予關卡
                Random rnd = new Random();
                int MinValue = 1;
                int MaxValue = 5;

                switch (rnd.Next(MinValue, MaxValue).ToString())
                {
                    case "1": GAME_BOX = GAME1_BOX; break;
                    case "2": GAME_BOX = GAME2_BOX; break;
                    case "3": GAME_BOX = GAME3_BOX; break;
                    case "4": GAME_BOX = GAME4_BOX; break;
                }


                for (int i = 0; i < 9;i++ )
                {
                    if (GAME_BOX[i] == TEMP_BOX)
                    {
                        GAME_PTR = i;
                        break;
                    }
                }
            }

            if (GAME_NSEC >= GAME_SSEC-50)
            {
                GAME_NSEC = GAME_SSEC;//將起始秒數給予目前秒數
            }
           GAME.Interval = new TimeSpan(0, 0, 0, 0, GAME_NSEC);
           GAME.Start();
           GAME_START = true;

        }

        




        public void GAME1_Tick(object sender, EventArgs e)
        {
            if(GAME_START){
                if (GAME_NSEC >= 12)
                {
                    GAME_NSEC -= Convert.ToInt16(GAME_NSEC/5);
                    if (GAME_NSEC<=10)
                    {
                        GAME_NSEC = 10;
                    }
                    GAME.Stop();
                    GAME.Interval = new TimeSpan(0, 0, 0, 0, GAME_NSEC);
                    GAME.Start();
                }
            }else{
                if (GAME_NSEC <= GAME_SSEC)
                {
                    GAME_NSEC += Convert.ToInt16(GAME_NSEC / 5);
                    GAME.Stop();
                    GAME.Interval = new TimeSpan(0, 0, 0, 0, GAME_NSEC); 
                    GAME.Start();
                    
                    
                }
                else
                {
                    GAME.Stop();
                }
            }
            CHG_COLOR();

        }

        
        public void CHG_COLOR()
        {
            
            
                Button BTN = (Button)(this.FindName(GAME_BOX[GAME_PTR]));
                BTN.Background = new SolidColorBrush(Color.FromArgb(0, 0, 0, 0));

                if (GAME1_BOX.Length - 1 == GAME_PTR)
                    GAME_PTR = 0 ;
                else
                    GAME_PTR += 1;

                Button BTN2 = (Button)(this.FindName(GAME_BOX[GAME_PTR]));
                BTN2.Background = new SolidColorBrush(Color.FromArgb(255, 255, 0, 0));
           

          //---------------
                Uri dir = new Uri("Images/" + LOVE_BOX[LOVE_PTR] + ".png", UriKind.Relative);
                ImageSource source = new System.Windows.Media.Imaging.BitmapImage(dir);
                LOVE1.Source = source; 
                if (LOVE_BOX.Length - 1 == LOVE_PTR)
                    LOVE_PTR = 0;
                else
                    LOVE_PTR += 1;


        }

        private void GAME1_MouseLeave(object sender, MouseEventArgs e)
        {
            GAME_START = false;
        }


    }
}