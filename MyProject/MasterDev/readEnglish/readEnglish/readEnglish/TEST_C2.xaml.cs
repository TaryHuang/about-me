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






 







            //**************************************************
            //**************************************************
            //**************************************************
            //**************************************************
            //**************************************************
            //**************************************************





            var tEnglishWord = (from EnglishWord in MainPage.tDBHandler.EnglishWord
                                where MainPage.Ptr == EnglishWord.CTYPE &&
                                                                                                     (
                                    Test.F[0] && EnglishWord.EWORD0 == Test.S[0] ||
                                    Test.F[1] && EnglishWord.EWORD0 == Test.S[1] ||
                                    Test.F[2] && EnglishWord.EWORD0 == Test.S[2] ||
                                    Test.F[3] && EnglishWord.EWORD0 == Test.S[3] ||
                                    Test.F[4] && EnglishWord.EWORD0 == Test.S[4] ||
                                    Test.F[5] && EnglishWord.EWORD0 == Test.S[5] ||
                                    Test.F[6] && EnglishWord.EWORD0 == Test.S[6] ||
                                    Test.F[7] && EnglishWord.EWORD0 == Test.S[7] ||
                                    Test.F[8] && EnglishWord.EWORD0 == Test.S[8] ||
                                    Test.F[9] && EnglishWord.EWORD0 == Test.S[9] ||
                                    Test.F[10] && EnglishWord.EWORD0 == Test.S[10] ||
                                    Test.F[11] && EnglishWord.EWORD0 == Test.S[11] ||
                                    Test.F[12] && EnglishWord.EWORD0 == Test.S[12] ||
                                    Test.F[13] && EnglishWord.EWORD0 == Test.S[13] ||
                                    Test.F[14] && EnglishWord.EWORD0 == Test.S[14] ||
                                    Test.F[15] && EnglishWord.EWORD0 == Test.S[15] ||
                                    Test.F[16] && EnglishWord.EWORD0 == Test.S[16] ||
                                    Test.F[17] && EnglishWord.EWORD0 == Test.S[17] ||
                                    Test.F[18] && EnglishWord.EWORD0 == Test.S[18] ||
                                    Test.F[19] && EnglishWord.EWORD0 == Test.S[19] ||
                                    Test.F[20] && EnglishWord.EWORD0 == Test.S[20] ||
                                    Test.F[21] && EnglishWord.EWORD0 == Test.S[21] ||
                                    Test.F[22] && EnglishWord.EWORD0 == Test.S[22] ||
                                    Test.F[23] && EnglishWord.EWORD0 == Test.S[23] ||
                                    Test.F[24] && EnglishWord.EWORD0 == Test.S[24] ||
                                    Test.F[25] && EnglishWord.EWORD0 == Test.S[25]
                                   )
                                select EnglishWord);


            EnglishWordR[] EngR = new EnglishWordR[tEnglishWord.Count()];
            int Z = 0;
            foreach (EnglishWord R in tEnglishWord)
            {
                EngR[Z] = new EnglishWordR();
                //EngR[i].ID = R.ID;
                //EngR[i].Mylove = R.Mylove;
                EngR[Z].CTYPE = R.CTYPE.ToString();
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
            var RRR = EngR.OrderBy(x => x.R).Take(Test.Test_num);



            question_list = new C2[RRR.Count()];
            int j = 0;
            foreach (EnglishWordR AAA in RRR)
            {
                //update排序

                string[] selects = new string[5];
                int ansR = Rdm.Next(0, 5);

                int[] box ;

                box= new int[] { 1, 2, 3, 4};     
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
            else if (question_list.Count() < Test.Test_num)
            {
                ApplicationTitle.Text += " 您的題庫單字太少..";

            }



            
            loading.Visibility = Visibility.Collapsed;
            button1.Visibility = Visibility.Visible;




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



}