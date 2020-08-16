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

namespace COOL2
{
    public partial class MainPage : PhoneApplicationPage
    {
        int TTT_NUM = 1;
        string ANS = "";
        // 建構函式
        public MainPage()
        {
            InitializeComponent();
            border1.BorderBrush = ApplicationTitle.Foreground;
            RND();//規則亂數給電腦
            NUM.Text = "";
            CHKNUM();

        }

        private void btn_Click(object sender, RoutedEventArgs e)
        {

            if (T4NUM())
            {
                return;
            }

            Button btn = sender as Button;
            NUM.Text = NUM.Text+btn.Content;
            CHKNUM();
        }
        public bool T4NUM()
        {
            string STR = NUM.Text.ToString();

            if (STR.Length>=4)
            {
                return true;
            }else{
                return false;
            }
            
        }


        public void RND()
        {
            string[] rnum = new string[4];
            string box = "";

            Random rnd = new Random();
            for (int i = 0; i < 4; i++)
            {
                //第一碼不準為0
                if (i==0)
                    box = (rnd.Next(1, 10)).ToString();
                else
                    box = (rnd.Next(0, 10)).ToString();



                if (System.Array.IndexOf(rnum, box) == -1)
                {
                    rnum[i] = box;
                }
                else
                    i--;
            }


            box = "";
            box = box + rnum[0].ToString();
            box = box + rnum[1].ToString();
            box = box + rnum[2].ToString();
            box = box + rnum[3].ToString();
            //T1.Text = box + "請輸入第1位數字！" ;
            ANS = box;
        }


        public void CHKNUM()
        {
            if (T1.Text == "正確答案！")
            {

                for (int i = 0; i <= 9; i++)
                {
                    Button BTN = (Button)(this.FindName("btn" + i.ToString()));
                    BTN.IsEnabled = false;
                }
                btng.IsEnabled = false;//確認
                btnc.IsEnabled = false;//清除 
                button1.IsEnabled = false;//放棄
                return ;
            }


            string STR = NUM.Text.ToString();
            //先將所有按鈕解開
            for(int i=0;i<=9;i++){
                Button BTN = (Button)(this.FindName("btn" + i.ToString()));
                BTN.IsEnabled = true;
            }
            btng.IsEnabled = true;//確認
            btnc.IsEnabled = true;//清除 




           
            //判斷輸入的數字後 判斷該鎖定之按鈕
            if(STR.Length==0){
                //＊很重要＊　須判斷是否是按下確認後之訊息
                if (T1.Text != "沒猜中但很接近了！" && T1.Text != "很可惜沒猜中！")
                {
                    T1.Text = "請輸入第1位數字！"; 
                }
                //當一個數字都沒輸入時 就停用0及清除和確認
                btn0.IsEnabled = false;
                btng.IsEnabled = false;//確認
                btnc.IsEnabled = false;//清除 
            }
            else if (STR.Length >= 4)
            {
                //表示一組數字已經key完成
                for (int i = 0; i <= 9; i++)
                {
                    Button BTN = (Button)(this.FindName("btn" + i.ToString()));
                    BTN.IsEnabled = false;
                }
                T1.Text = "請確認此組數字！？"; 
            }
            else
            {
                for (int i = 0; i < STR.Length; i++)
                {
                    Button BTN = (Button)(this.FindName("btn" + STR[i].ToString()));
                    BTN.IsEnabled = false;
                }
                T1.Text = "請輸入第" + (STR.Length+1).ToString() + "位數字！"; 
                btng.IsEnabled = false;//確認

            }


            if (TTT_NUM >= 6)
            {
                button1.IsEnabled = true;
            }
            else
            {
                button1.IsEnabled = false;
            }
        }


        public string CHKANS(string str1, string str2)
        {
           
            if(str1==str2){
                T1.Text = "正確答案！";
                return "【4A0B】";
            }else{
                int GNUMA = CHKANS_A(str1, str2);//判定正確位子的個數
                int GNUMB = CHKANS_B(str1, str2);//判定不正確位子的個數


                if ((GNUMA + GNUMB) >= 3)
                {
                    T1.Text = "沒猜中但很接近了！";
                }
                else
                {
                    T1.Text = "很可惜沒猜中！";    
                }
                return "【" +GNUMA.ToString() + "A" + GNUMB.ToString() + "B】";
            }
        }


        public int CHKANS_A(string str1, string str2)
        {
            int box = 0;
            for (int i = 0; i < 4;i++ )
            {
                if (str1.Substring(i, 1) == str2.Substring(i, 1))
                    box++;
            }

            return box;
        }



        public int CHKANS_B(string str1, string str2)
        {
            int box = 0;
            for (int i = 0; i < 4; i++)
            {
                for (int j = 0; j < 4; j++)
                {
                    //當正確位址時不+1 , 當不正確位址但有此數字才+1
                    if ((str1.Substring(i, 1) != str2.Substring(i, 1)) && (str1.Substring(i, 1) == str2.Substring(j, 1)))
                    {
                        box++;
                        break;
                    }
                }
            }

            return box;
        }

        private void btng_Click(object sender, RoutedEventArgs e)
        {
            TextBlock TTT = new TextBlock();

            TTT.Text = " 第 " + TTT_NUM.ToString() + " 猜 " + NUM.Text + CHKANS(ANS, NUM.Text);
            TTT.Name = "TTT" + TTT_NUM.ToString();

            TTT_NUM++;
            NUM.Text = "";
            RECORDS.Children.Add(TTT);
            CHKNUM();
            panorama1.DefaultItem = A2;
            
        }

        private void btnc_Click(object sender, RoutedEventArgs e)
        {
            //清除按鈕
            string STR = NUM.Text.ToString();
            if (STR.Length > 0)
            {
                NUM.Text = STR.Substring(0, STR.Length - 1);
            }
            CHKNUM();
        }

        private void button1_Click(object sender, RoutedEventArgs e)
        {
            T1.Text = "正確答案為【" + ANS + "】";
        }

        private void button2_Click(object sender, RoutedEventArgs e)
        {

            //清除猜測簿

            RECORDS.Children.Clear();
            TTT_NUM = 1;
            NUM.Text = "";
            T1.Text = "";
            RND();
            CHKNUM();
            panorama1.DefaultItem = A1;
        }
    }
}