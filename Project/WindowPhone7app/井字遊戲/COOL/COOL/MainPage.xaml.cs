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
using System.Windows.Media.Imaging;

namespace COOL
{
    public partial class MainPage : PhoneApplicationPage
    {
        List<string> PLAYER_A = new List<string>();//玩家一號
        List<string> PLAYER_B = new List<string>();//玩家二號


        int num = 0;//順序
        int TCHECK = 0;//是否驗證 是否贏的旗標
        byte R = 190;
        byte G = 30;
        byte B = 30;
        // 建構函式
        public MainPage()
        {
            InitializeComponent();
            PAGECOLOR.Visibility = PAGECOLOR.Visibility = Visibility.Collapsed;

        }









        private void RESET_Click(object sender, RoutedEventArgs e)
        {

            for (int i = 1; i <= 9; i++)
            {
                Button BTN = ((Button)(this.FindName("BTN" + i)));
                BTN.Content = "";
                BTN.IsEnabled = true;

                TextBlock TT = ((TextBlock)(this.FindName("T" + i)));
                TT.Foreground = ApplicationTitle.Foreground;
                TT.Text = "";
            }
            PLAYER_A.Clear();
            PLAYER_B.Clear();
            MSG.Text = "圈圈";
            num = 0;
            TCHECK = 0;
        }

        public string VSTR(string V,int NUM){
            return V.Substring(NUM,1);
        }




        public void CHKWIN()
        {
            //123,456,789    147,258,369   159,357
            if (PLAYER_A.Contains("1") && PLAYER_A.Contains("2") && PLAYER_A.Contains("3"))
            {
                WINMSG("1", "2", "3");
            }
            if (PLAYER_A.Contains("4") && PLAYER_A.Contains("5") && PLAYER_A.Contains("6"))
            {
                WINMSG("4", "5", "6");
            }
            if (PLAYER_A.Contains("7") && PLAYER_A.Contains("8") && PLAYER_A.Contains("9"))
            {
                WINMSG("7", "8", "9");
            }
            if (PLAYER_A.Contains("1") && PLAYER_A.Contains("4") && PLAYER_A.Contains("7"))
            {
                WINMSG("1", "4", "7");
            }
            if (PLAYER_A.Contains("2") && PLAYER_A.Contains("5") && PLAYER_A.Contains("8"))
            {
                WINMSG("2", "5", "8");
            }
            if (PLAYER_A.Contains("3") && PLAYER_A.Contains("6") && PLAYER_A.Contains("9"))
            {
                WINMSG("3", "6", "9");
            }
            if (PLAYER_A.Contains("1") && PLAYER_A.Contains("5") && PLAYER_A.Contains("9"))
            {
                WINMSG("1", "5", "9");
            }
            if (PLAYER_A.Contains("3") && PLAYER_A.Contains("5") && PLAYER_A.Contains("7"))
            {
                WINMSG("3", "5", "7");
            }


            //--AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBB


            if (PLAYER_B.Contains("1") && PLAYER_B.Contains("2") && PLAYER_B.Contains("3"))
            {
                WINMSG("1", "2", "3"); 
            }
            if (PLAYER_B.Contains("4") && PLAYER_B.Contains("5") && PLAYER_B.Contains("6"))
            {
                WINMSG("4", "5", "6");
            }
            if (PLAYER_B.Contains("7") && PLAYER_B.Contains("8") && PLAYER_B.Contains("9"))
            {
                WINMSG("7", "8", "9");
            }
            if (PLAYER_B.Contains("1") && PLAYER_B.Contains("4") && PLAYER_B.Contains("7"))
            {
                WINMSG("1", "4", "7");
            }
            if (PLAYER_B.Contains("2") && PLAYER_B.Contains("5") && PLAYER_B.Contains("8"))
            {
                WINMSG("2", "5", "8");
            }
            if (PLAYER_B.Contains("3") && PLAYER_B.Contains("6") && PLAYER_B.Contains("9"))
            {
                WINMSG("3", "6", "9");
            }

            //---

            if (PLAYER_B.Contains("1") && PLAYER_B.Contains("5") && PLAYER_B.Contains("9"))
            {
                WINMSG("1", "5", "9");
            }
            if (PLAYER_B.Contains("3") && PLAYER_B.Contains("5") && PLAYER_B.Contains("7"))
            {
                WINMSG("3","5","7");
            }


            if (num == 9 && TCHECK==0)
            {
                MSG.Text = "平手！";
            }


        }

        public void WINMSG(string S1, string S2, string S3)
        {
            if (num % 2 == 0)
                MSG.Text = "叉叉贏了！";
            else
                MSG.Text = "圈圈贏了！";

            TCHECK = 1;



            TextBlock XT1 = ((TextBlock)(this.FindName("T" + S1)));
            XT1.Foreground = new SolidColorBrush(Color.FromArgb(255, R, G, B));

            TextBlock XT2 = ((TextBlock)(this.FindName("T" + S2)));
            XT2.Foreground = new SolidColorBrush(Color.FromArgb(255, R, G, B));

            TextBlock XT3 = ((TextBlock)(this.FindName("T" + S3)));
            XT3.Foreground = new SolidColorBrush(Color.FromArgb(255, R, G, B));

            for (int i = 1; i <= 9;i++ )
            {
                Button BTN = ((Button)(this.FindName("BTN" + i)));
                BTN.IsEnabled = false;
            }

        }






        private void BTN_ManipulationStarted(object sender, ManipulationStartedEventArgs e)
        {

            Button btn = sender as Button;
            if (num % 2 == 0)
            {
                PLAYER_A.Add(VSTR(btn.Name.ToString(),3));
                
                TextBlock TT = ((TextBlock)(this.FindName("T"+VSTR(btn.Name.ToString(),3))));
                TT.Text = "Ｏ";
                btn.Content = "";
                MSG.Text = "叉叉";
            }
            else
            {
                PLAYER_B.Add(VSTR(btn.Name.ToString(),3));
                TextBlock TT = ((TextBlock)(this.FindName("T" + VSTR(btn.Name.ToString(),3))));
                TT.Text = "Ｘ";
                btn.Content = "";
                MSG.Text = "圈圈";
            }
            btn.Foreground = new SolidColorBrush(Color.FromArgb(255, 255, 255, 255));

            btn.IsEnabled = false;
            num++;
            CHKWIN();
            
 
        }

        private void SETCOLOR_Click(object sender, RoutedEventArgs e)
        {
            if (PAGECOLOR.Visibility == Visibility.Visible)
            {
                PAGECOLOR.Visibility = Visibility.Collapsed;
            }
            else
            {
                PAGECOLOR.Visibility = Visibility.Visible;
            }
        }

        private void BCOLOR_Click(object sender, RoutedEventArgs e)
        {
            Button btn = sender as Button;
            if (btn.Name == "BCOLOR1")
            {
                R = 190;
                G = 30;
                B = 30;
            }

            if (btn.Name == "BCOLOR2")
            {
                R = 215;
                G = 158;
                B = 9;
            }

            if (btn.Name == "BCOLOR3")
            {
                R = 2;
                G = 133;
                B = 156;
            }

            if (btn.Name == "BCOLOR4")
            {
                R = 178;
                G = 195;
                B = 30;
            }

            if (btn.Name == "BCOLOR5")
            {
                R = 30;
                G = 74;
                B = 195;
            }

            if (btn.Name == "BCOLOR6")
            {
                R = 219;
                G = 38;
                B = 82;
            }

            if (btn.Name == "BCOLOR7")
            {
                R = 255;
                G = 122;
                B = 26;
            }

            if (btn.Name == "BCOLOR8")
            {
                R = 216;
                G = 216;
                B = 216;
            }

            //btn改變選取的邊框--
            CHG_BTNCOLOR("BCOLOR", btn.Name);
            CHKWIN();
        }


        public void CHG_BTNCOLOR(string AA ,string BB)
        {

           
            for(int i=1;i<=8;i++){

                 Button BTN = (Button)(this.FindName(AA + i.ToString()));

                 if ((AA + i.ToString()) == BB)
                 {
                     BTN.BorderBrush = new SolidColorBrush(Color.FromArgb(255, 255, 255, 255));
                 }
                 else
                 {
                     BTN.BorderBrush = new SolidColorBrush(Color.FromArgb(0, 255, 255, 255));
                 }
            }
        }

        private void ACOLOR_Click(object sender, RoutedEventArgs e)
        {
            Button btn = sender as Button;
            //btn改變選取的邊框--



            //改變井字顏色
            Uri dir = new Uri("Images/B" + VSTR(btn.Name,6) + ".png", UriKind.Relative);
            ImageSource source = new System.Windows.Media.Imaging.BitmapImage(dir);
            image1.Source = source; 



            CHG_BTNCOLOR("ACOLOR", btn.Name);
        }











    }
}