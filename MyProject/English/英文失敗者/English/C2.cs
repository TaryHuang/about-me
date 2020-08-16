using System;
using System.Net;
using System.Windows;
using System.Windows.Controls;
using System.Windows.Documents;
using System.Windows.Ink;
using System.Windows.Input;
using System.Windows.Media;
using System.Windows.Media.Animation;
using System.Windows.Shapes;

namespace English
{
    public class C2 : StackPanel
    {

        int ans;
        public bool isCorrect=false;//答案是否正確


        public bool isChk = false;//是否已經選擇 
        public int orderR;//亂數排序用 和 正排序用ptr用
        public TextBlock question, HR;
        public string question2;//錯誤題目(正解)用
        public RadioButton[] ANS_SELECT;

        public C2(int R,string q,string[] select,int ANS)
        {
            ANS_SELECT = new RadioButton[select.Length];
            ans=ANS;
            orderR = R;


            
            question = new TextBlock();
            question.FontSize = 30;
            question.Text = q;
            this.Children.Add(question);




            for (int i = 0; i < ANS_SELECT.Length;i++ )
            {
                ANS_SELECT[i] = new RadioButton();
                ANS_SELECT[i].Content = select[i];
                ANS_SELECT[i].Width = 300;
                ANS_SELECT[i].Checked+=new RoutedEventHandler(ANS_SELECT_Checked);
                //question.Margin = new Thickness(0,0,0,0);
                this.Children.Add(ANS_SELECT[i]);
            }


            HR = new TextBlock();
            HR.Text = "\n";
            //question.Margin = new Thickness(0,0,0,0);
            this.Children.Add(HR);



            question2 = " (" + ANS_SELECT[ans].Content + ")";
        }






        private void ANS_SELECT_Checked(object sender, RoutedEventArgs e)
        {
            isChk = true;
        }






        public void Result()
        {
            bool v = false;
            for (int i = 0; i < ANS_SELECT.Length; i++)
            {
                if (ANS_SELECT[i].IsChecked == true && i == ans)
                {
                    v = true;
                    
                }
                ANS_SELECT[i].IsEnabled = false;
            }//for


            if (v)
            {
                question.Text += "  (正確)";
                isCorrect = true;//正確答案
            }
            else
            {
                question.Text += "  (錯誤)";
                ANS_SELECT[ans].Content += "  (正解)";
            }

        }
    }
}
