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

namespace English
{
    public partial class TEST_C2 : PhoneApplicationPage
    {
        C2[] question_list;

        int ERRORptr = -1;
        Random Rdm = new Random();
        public TEST_C2()
        {
            InitializeComponent();

        }





        private void button1_Click(object sender, RoutedEventArgs e)
        {
            listBox_question.SelectedIndex = -1;
            for (int i = 0; i < question_list.Count();i++ )
            {
                if(!question_list[i].isChk){
                    listBox_question.SelectedIndex = question_list[i].orderR;
                    MessageBox.Show("第" + (i + 1).ToString() + "題 尚未作答…");
                    return;
                }
            }





            //已經完成是否填寫資料
            
            int Result_L2num = 0;
            int Result_L3num = 0;
            for (int i = 0; i < question_list.Count(); i++)
            {
                question_list[i].Result();
                if (question_list[i].isCorrect)
                {
                    //正確答案
                    Result_L2num++;
                }else{
                    Result_L3num++;

                    MyTextBlock question = new MyTextBlock(question_list[i].orderR, question_list[i].question2);
                    listbox_ERROR.Items.Add(question);
                }
            }

            L1.Text += question_list.Count().ToString();
            L2.Text += Result_L2num.ToString();
            L3.Text += Result_L3num.ToString();
            

            button1.Visibility = Visibility.Collapsed;
            BAR_Result.Visibility = Visibility.Visible;
            BODY.Visibility = Visibility.Collapsed;
            BODY2.Visibility = Visibility.Visible;
        }



        int[] shuffle(int[] box)
        {
            Random R=new Random();
            int Rnum;
            int t = 0;//暫存
            for (int i = 0; i < box.Count() - 1;i++ )
            {
                Rnum=R.Next(0,box.Count());

                t=box[i];
                box[i]=box[Rnum];
                box[Rnum] = t;
            }

            return box;
        }










        private void PhoneApplicationPage_Loaded(object sender, RoutedEventArgs e)
        {






            try
            {

                string boxs = NavigationContext.QueryString["BOX"];

                for (int i = 0; i < boxs.Count(); i++)
                {
                    switch (boxs[i])
                    {
                        case 'A': EN_MYLOVE.F[0] = true; EN_MYLOVE.S[0] = "A"; break;
                        case 'B': EN_MYLOVE.F[1] = true; EN_MYLOVE.S[1] = "B"; break;
                        case 'C': EN_MYLOVE.F[2] = true; EN_MYLOVE.S[2] = "C"; break;
                        case 'D': EN_MYLOVE.F[3] = true; EN_MYLOVE.S[3] = "D"; break;
                        case 'E': EN_MYLOVE.F[4] = true; EN_MYLOVE.S[4] = "E"; break;
                        case 'F': EN_MYLOVE.F[5] = true; EN_MYLOVE.S[5] = "F"; break;
                        case 'G': EN_MYLOVE.F[6] = true; EN_MYLOVE.S[6] = "G"; break;
                        case 'H': EN_MYLOVE.F[7] = true; EN_MYLOVE.S[7] = "H"; break;
                        case 'I': EN_MYLOVE.F[8] = true; EN_MYLOVE.S[8] = "I"; break;
                        case 'J': EN_MYLOVE.F[9] = true; EN_MYLOVE.S[9] = "J"; break;
                        case 'K': EN_MYLOVE.F[10] = true; EN_MYLOVE.S[10] = "K"; break;
                        case 'L': EN_MYLOVE.F[11] = true; EN_MYLOVE.S[11] = "L"; break;
                        case 'M': EN_MYLOVE.F[12] = true; EN_MYLOVE.S[12] = "M"; break;
                        case 'N': EN_MYLOVE.F[13] = true; EN_MYLOVE.S[13] = "N"; break;
                        case 'O': EN_MYLOVE.F[14] = true; EN_MYLOVE.S[14] = "O"; break;
                        case 'P': EN_MYLOVE.F[15] = true; EN_MYLOVE.S[15] = "P"; break;
                        case 'Q': EN_MYLOVE.F[16] = true; EN_MYLOVE.S[16] = "Q"; break;
                        case 'R': EN_MYLOVE.F[17] = true; EN_MYLOVE.S[17] = "R"; break;
                        case 'S': EN_MYLOVE.F[18] = true; EN_MYLOVE.S[18] = "S"; break;
                        case 'T': EN_MYLOVE.F[19] = true; EN_MYLOVE.S[19] = "T"; break;
                        case 'U': EN_MYLOVE.F[20] = true; EN_MYLOVE.S[20] = "U"; break;
                        case 'V': EN_MYLOVE.F[21] = true; EN_MYLOVE.S[21] = "V"; break;
                        case 'W': EN_MYLOVE.F[22] = true; EN_MYLOVE.S[22] = "W"; break;
                        case 'X': EN_MYLOVE.F[23] = true; EN_MYLOVE.S[23] = "X"; break;
                        case 'Y': EN_MYLOVE.F[24] = true; EN_MYLOVE.S[24] = "Y"; break;
                        case 'Z': EN_MYLOVE.F[25] = true; EN_MYLOVE.S[25] = "Z"; break;
                    }
                }

                EN_MYLOVE.Test_num = Convert.ToInt32(NavigationContext.QueryString["NUM"]);
                EN_MYLOVE.sdate = NavigationContext.QueryString["sdate"].ToString();
                EN_MYLOVE.edate = NavigationContext.QueryString["edate"].ToString();
                EN_MYLOVE.radioCtype = Convert.ToInt32(NavigationContext.QueryString["radioCtype"]);
            }
            catch
            {

            }








            //**************************************************
            //**************************************************
            //**************************************************
            //**************************************************
            //**************************************************
            //**************************************************





            var tEnglishWord = (from EnglishWord in MainPage.tDBHandler.EnglishWord
                                where
                                (
                                (EN_MYLOVE.radioCtype == 1 && EnglishWord.CTYPE == "@") ||
                                (EN_MYLOVE.radioCtype == 2 && EnglishWord.CTYPE == "#") ||
                                (EN_MYLOVE.radioCtype == 0 && (EnglishWord.CTYPE == "@" || EnglishWord.CTYPE == "#"))
                                ) &&
                                EnglishWord.Mylove == 1
                                && (
                                    EN_MYLOVE.F[0] && EnglishWord.EWORD0 == EN_MYLOVE.S[0] ||
                                    EN_MYLOVE.F[1] && EnglishWord.EWORD0 == EN_MYLOVE.S[1] ||
                                    EN_MYLOVE.F[2] && EnglishWord.EWORD0 == EN_MYLOVE.S[2] ||
                                    EN_MYLOVE.F[3] && EnglishWord.EWORD0 == EN_MYLOVE.S[3] ||
                                    EN_MYLOVE.F[4] && EnglishWord.EWORD0 == EN_MYLOVE.S[4] ||
                                    EN_MYLOVE.F[5] && EnglishWord.EWORD0 == EN_MYLOVE.S[5] ||
                                    EN_MYLOVE.F[6] && EnglishWord.EWORD0 == EN_MYLOVE.S[6] ||
                                    EN_MYLOVE.F[7] && EnglishWord.EWORD0 == EN_MYLOVE.S[7] ||
                                    EN_MYLOVE.F[8] && EnglishWord.EWORD0 == EN_MYLOVE.S[8] ||
                                    EN_MYLOVE.F[9] && EnglishWord.EWORD0 == EN_MYLOVE.S[9] ||
                                    EN_MYLOVE.F[10] && EnglishWord.EWORD0 == EN_MYLOVE.S[10] ||
                                    EN_MYLOVE.F[11] && EnglishWord.EWORD0 == EN_MYLOVE.S[11] ||
                                    EN_MYLOVE.F[12] && EnglishWord.EWORD0 == EN_MYLOVE.S[12] ||
                                    EN_MYLOVE.F[13] && EnglishWord.EWORD0 == EN_MYLOVE.S[13] ||
                                    EN_MYLOVE.F[14] && EnglishWord.EWORD0 == EN_MYLOVE.S[14] ||
                                    EN_MYLOVE.F[15] && EnglishWord.EWORD0 == EN_MYLOVE.S[15] ||
                                    EN_MYLOVE.F[16] && EnglishWord.EWORD0 == EN_MYLOVE.S[16] ||
                                    EN_MYLOVE.F[17] && EnglishWord.EWORD0 == EN_MYLOVE.S[17] ||
                                    EN_MYLOVE.F[18] && EnglishWord.EWORD0 == EN_MYLOVE.S[18] ||
                                    EN_MYLOVE.F[19] && EnglishWord.EWORD0 == EN_MYLOVE.S[19] ||
                                    EN_MYLOVE.F[20] && EnglishWord.EWORD0 == EN_MYLOVE.S[20] ||
                                    EN_MYLOVE.F[21] && EnglishWord.EWORD0 == EN_MYLOVE.S[21] ||
                                    EN_MYLOVE.F[22] && EnglishWord.EWORD0 == EN_MYLOVE.S[22] ||
                                    EN_MYLOVE.F[23] && EnglishWord.EWORD0 == EN_MYLOVE.S[23] ||
                                    EN_MYLOVE.F[24] && EnglishWord.EWORD0 == EN_MYLOVE.S[24] ||
                                    EN_MYLOVE.F[25] && EnglishWord.EWORD0 == EN_MYLOVE.S[25]
                                   ) &&

                                   (EN_MYLOVE.isDATE(EN_MYLOVE.sdate) && EnglishWord.DATE >= EN_MYLOVE.isDATE2(EN_MYLOVE.sdate)) &&
                                   (EN_MYLOVE.isDATE(EN_MYLOVE.edate) && EnglishWord.DATE <= EN_MYLOVE.isDATE2(EN_MYLOVE.edate))

                                select EnglishWord);


            EnglishWordR[] EngR = new EnglishWordR[tEnglishWord.Count()];
            int Z = 0;
            foreach (EnglishWord R in tEnglishWord)
            {
                EngR[Z] = new EnglishWordR();
                //EngR[i].ID = R.ID;
                //EngR[i].Mylove = R.Mylove;
                EngR[Z].CTYPE = R.CTYPE;
                EngR[Z].CWORD = R.CWORD;
                //EngR[i].EWORD0 = R.EWORD0;
                EngR[Z].EWORD1 = R.EWORD1;
                //EngR[i].EWORD2 = R.EWORD2;
                //EngR[i].EWORD3 = R.EWORD3;
                //EngR[i].DATE = R.DATE;
                EngR[Z].C1 = R.C1;
                EngR[Z].C2 = R.C2;
                EngR[Z].C3 = R.C3;
                EngR[Z].C4 = R.C4;
                EngR[Z].C5 = R.C5;
                EngR[Z].C6 = R.C6;
                EngR[Z].C7 = R.C7;
                EngR[Z].C8 = R.C8;
                //EngR[i].N = R.N;
                Z++;
            }
            var RRR = EngR.OrderBy(x => x.R).Take(EN_MYLOVE.Test_num);



            question_list = new C2[RRR.Count()];
            int j = 0;
            foreach (EnglishWordR AAA in RRR)
            {
                //update排序

                string[] selects = new string[5];
                int ansR = Rdm.Next(0, 5);

                int[] box ;
                if (AAA.CTYPE=="#")
                {
                    box= new int[] { 1, 2, 3, 4};
                }else{
                    box= new int[] { 1, 2, 3, 4, 5, 6, 7, 8 };
                }
                
                
                box = shuffle(box);




                selects[ansR] = AAA.CWORD;
                int zzz = 0;
                for (int z = 0; z < selects.Length; z++)
                {
                    if (z != ansR)
                    {


                        switch (box[zzz])
                        {
                            case 1: selects[z] = AAA.C1; break;
                            case 2: selects[z] = AAA.C2; break;
                            case 3: selects[z] = AAA.C3; break;
                            case 4: selects[z] = AAA.C4; break;
                            case 5: selects[z] = AAA.C5; break;
                            case 6: selects[z] = AAA.C6; break;
                            case 7: selects[z] = AAA.C7; break;
                            case 8: selects[z] = AAA.C8; break;
                        }

                        zzz++;
                    }
                }


                question_list[j] = new C2(Rdm.Next(0, 100), AAA.EWORD1, selects, ansR);
                j++;
            }

            



            //＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊
            for (int i = 0; i < question_list.Count(); i++)
            {
                question_list[i].orderR = i;//ptr指標
                question_list[i].question.Text = (i + 1).ToString() + ". " + question_list[i].question.Text;
                question_list[i].question2 = question_list[i].question.Text +question_list[i].question2;//正解用
                listBox_question.Items.Add(question_list[i]);
            }



            ApplicationTitle.Text = "共 " + question_list.Count().ToString() + " 題 ";
            if (question_list.Count() == 0)
            {
                ApplicationTitle.Text += " 查無題庫單字..";
                button1.IsEnabled = false;
            }
            else if (question_list.Count() < EN_MYLOVE.Test_num)
            {
                ApplicationTitle.Text += " 您的題庫單字太少..";

            }



            
            loading.Visibility = Visibility.Collapsed;
            button1.Visibility = Visibility.Visible;




            //@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
            //更新動態磁磚
            try
            {
                EN_MYLOVE.UpdateTile(NavigationContext.QueryString["DefaultTitle"], tEnglishWord.Count());
            }
            catch
            {

            }
            //@@@@@@@@@@@@@@@@@@@@@@@@@@@@@

        }

        private void BTN_TEST_Click(object sender, RoutedEventArgs e)
        {
            BODY.Visibility = Visibility.Visible;
            BODY2.Visibility = Visibility.Collapsed;
        }

        private void BTN_Result_Click(object sender, RoutedEventArgs e)
        {
            BODY.Visibility = Visibility.Collapsed;
            BODY2.Visibility = Visibility.Visible;
        }



        private void listbox_ERROR_MouseLeftButtonUp(object sender, MouseButtonEventArgs e)
        {
            if (listbox_ERROR.SelectedIndex > -1)
            {
                MyTextBlock btn = listbox_ERROR.Items[listbox_ERROR.SelectedIndex] as MyTextBlock;
                if (ERRORptr == btn.ptr)
                {
                    listBox_question.SelectedIndex = btn.ptr;
                    BTN_TEST_Click(sender, e);
                }
                else
                {
                    ERRORptr = btn.ptr;
                }

            }
        }
        protected override void OnBackKeyPress(System.ComponentModel.CancelEventArgs e)
        {
             MessageBoxResult m = MessageBox.Show("您確定要離開測驗？", "系統訊息", MessageBoxButton.OKCancel);
             if (m != MessageBoxResult.OK)
             {
                 e.Cancel = true;
             }
        }




    }



    class MyTextBlock : Grid 
    {
        public int ptr;//給予選取指標用  (正解用)
        TextBlock r=new TextBlock();
        public MyTextBlock(int p,string str)
        {
            ptr = p;
            r.FontSize = 30;
            r.Text = str;
            this.Children.Add(r);
        }
    }
}