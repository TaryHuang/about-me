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

namespace readEnglish
{
    public partial class DATA_ADD : PhoneApplicationPage
    {


        myTextBox EWORD1, CWORD, C1, C2, C3, C4;
        TextBlock A1, A2, A3;
        public DATA_ADD()
        {
            InitializeComponent();
        }




        private void button1_Click(object sender, RoutedEventArgs e)
        {

            if (!isEWORD(EWORD1.myText) || EWORD1.myText.Length == 0)
            {
                MessageBox.Show("很抱歉,英文單字不符合格式..");
                return;
            }


            if (CWORD.myText.Length == 0)
            {
                MessageBox.Show("很抱歉,中文解釋不符合格式..");
                return;
            }

            /*
            if (C1.myText.Length == 0 || C2.myText.Length == 0 || C3.myText.Length == 0 || C4.myText.Length == 0)
            {
                MessageBox.Show("很抱歉,錯誤選項清單不符合格式..");
                return;
            }
            */
            EnglishWord EN = new EnglishWord();
            EN.CTYPE = MainPage.Ptr;
            EN.EWORD1 = EWORD1.myText;
            EN.EWORD0 = EWORD1.Text[0].ToString().ToUpper();
            EN.CWORD = CWORD.Text;
            EN.DATE = DateTime.Now;
            EN.C1 = C1.Text;
            EN.C2 = C2.Text;
            EN.C3 = C3.Text;
            EN.C4 = C4.Text;


            MainPage.tDBHandler.EnglishWord.InsertOnSubmit(EN);
            MainPage.tDBHandler.SubmitChanges();


            MessageBox.Show("您已成功新增單字！");




            EWORD1.myText = "";
            CWORD.myText = "";
            C1.myText = "";
            C2.myText = "";
            C3.myText = "";
            C4.myText = "";
        }

        private void PhoneApplicationPage_Loaded(object sender, RoutedEventArgs e)
        {
            A1 = new TextBlock();
            A1.FontSize = 28;
            A1.Text = "英文單字";
            EWORD1 = new myTextBox(28, "apple");
            EWORD1.KeyDown += new KeyEventHandler(myKeyDown);
            BOX.Children.Add(A1);
            BOX.Children.Add(EWORD1);
            


            //---------
            A2 = new TextBlock();
            A2.FontSize = 28;
            A2.Text = "中文解釋";
            CWORD = new myTextBox(18, "蘋果");
            CWORD.KeyDown += new KeyEventHandler(myKeyDown);
            BOX.Children.Add(A2);
            BOX.Children.Add(CWORD);






            //---------
            A3 = new TextBlock();
            A3.FontSize = 28;
            A3.Text = "錯誤選項清單 (測驗選擇題)";
            C1 = new myTextBox(18, "香蕉");
            C1.KeyDown += new KeyEventHandler(myKeyDown);
            C2 = new myTextBox(18, "橘子");
            C2.KeyDown += new KeyEventHandler(myKeyDown);
            C3 = new myTextBox(18, "西瓜");
            C3.KeyDown += new KeyEventHandler(myKeyDown);
            C4 = new myTextBox(18, "草莓");
            C4.KeyDown += new KeyEventHandler(myKeyDown);
            BOX.Children.Add(A3);
            BOX.Children.Add(C1);
            BOX.Children.Add(C2);
            BOX.Children.Add(C3);
            BOX.Children.Add(C4);

        }



        //判定是否可以接受的英文單字格式
        bool isEWORD(string str)
        {
            string s = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ,'-. ";
            string s2 = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";

            for (int i = 0; i < str.Length; i++)
            {

                if (i == 0)
                {
                    if (!s2.Contains(str[i]))
                    {
                        return false;
                    }
                    
                }
                else
                {
                    if (!s.Contains(str[i]))
                    {
                        return false;
                    }
                }
            }

            return true;
        }



        void myKeyDown(object sender, KeyEventArgs e)
        {
            if(e.Key == Key.Enter){
                button1.Focus();
            }
        }

    }





    public class myTextBox : TextBox
    {
        
        string nullText = "";
        string text = "";
        public myTextBox(int maxlen,string str)
        {
            this.Width = 350;
            this.MaxLength = maxlen;
            nullText = str;


            myText = "";
        }



        public string myText{
            get
            {
                return text;
            }

            set
            {
                text = value;
                isNulltext();
            }
        }


        protected override void OnGotFocus(RoutedEventArgs e)
        {
            base.OnGotFocus(e);

            if(myText==""){
                this.Text = "";//轉為空空
            }

            this.Foreground = new SolidColorBrush(Colors.Black);
        }









        protected override void OnLostFocus(RoutedEventArgs e)
        {
            base.OnLostFocus(e);

            Text = Text.Trim();//去前後空白

            if (Text.Length > MaxLength)
            {
                Text = Text.Substring(0, MaxLength);
            }



            myText =  Text;
            isNulltext();
        }






        void isNulltext()
        {
            if (myText == "")
            {
                this.Text = nullText; //空值輸入
                this.Foreground = new SolidColorBrush(Colors.Gray);
            }
            else
            {
                this.Text = myText;//有值輸入
                this.Foreground = new SolidColorBrush(Colors.Black);
            }
        }

    }
}