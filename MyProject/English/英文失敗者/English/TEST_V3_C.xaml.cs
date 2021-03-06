﻿using System;
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
using TARY_Library_Silverlight;
namespace English
{
    public partial class TEST_V3_C : PhoneApplicationPage
    {
        int ERRORptr = -1;
        C0[] DATA;
        int Ptr;//目前指到的指標
        System.Windows.Threading.DispatcherTimer Timer = new System.Windows.Threading.DispatcherTimer();
        Random Rdm = new Random();

        public TEST_V3_C()
        {
            InitializeComponent();

            Timer.Tick += new EventHandler(Timer_Tick);
            Timer.Interval = new TimeSpan(0, 0, 0, 0, 100);
            Timer.Start();
        }

        private void button1_Click(object sender, RoutedEventArgs e)
        {
            //交卷
            for (int i = 0; i < DATA.Count();i++ )
            {
                //驗證是否已經寫完了
                if(DATA[i].INPUT==""){

                    NowPtr = i;
                    scrollNum.ScrollToHorizontalOffset(90 * Ptr - 1);
                    MessageBox.Show("第"+(i+1).ToString()+"題 尚未作答…");
                    return;
                }//if
            }//for
            






            //已經驗證所有單字都有填寫後
            //開始判斷是否正確

            L1.Text += DATA.Count().ToString();
            int L2Num = 0;
            int L3Num = 0;
            for (int i = 0; i < DATA.Count(); i++)
            {
                if (DATA[i].INPUT != DATA[i].EWORD)
                {
                    MyTextBlock question = new MyTextBlock(DATA[i].ptr, (DATA[i].ptr + 1).ToString() + "." + DATA[i].CWORD + " (" + DATA[i].EWORD + ")");
                    listbox_ERROR.Items.Add(question);                  
                    L3Num++;
                }
                else
                {
                    DATA[i].isCorrect = true;
                     L2Num++;
                }
            }
            L2.Text += L2Num;
            L3.Text += L3Num;

            button1.Visibility = Visibility.Collapsed;
            BODY.Visibility = Visibility.Collapsed;
            myInput.IsEnabled = false;
            
            BAR_Result.Visibility = Visibility.Visible;
            BODY2.Visibility = Visibility.Visible;

            //目前的指標 重新整理 (增加 錯誤或正確標語用)
            NowPtr = NowPtr;
        }







        public void Timer_Tick(object sender, EventArgs e)
        {



            var tEnglishWord = (from EnglishWord in  MainPage.tDBHandler.EnglishWord
                                where
                                (
                                    EnglishWord.CTYPE == "AAA" ||
                                    EnglishWord.CTYPE == "ABA" ||
                                    EnglishWord.CTYPE == "ABB" ||
                                    EnglishWord.CTYPE == "ABC"
                                ) && !(EnglishWord.EWORD2.Contains("/") || EnglishWord.EWORD3.Contains("/") )
                                select EnglishWord);


            EnglishWordR[] EngR = new EnglishWordR[tEnglishWord.Count()];
            int i = 0;
            foreach (EnglishWord R in tEnglishWord)
            {
                EngR[i] = new EnglishWordR();
                //EngR[i].ID = R.ID;
                //EngR[i].Mylove = R.Mylove;
                //EngR[i].CTYPE = R.CTYPE;
                //EngR[i].CWORD = R.CWORD;
                //EngR[i].EWORD0 = R.EWORD0;
                EngR[i].EWORD1 = R.EWORD1;
                EngR[i].EWORD2 = R.EWORD2;
                EngR[i].EWORD3 = R.EWORD3;
                //EngR[i].DATE = R.DATE;
                //EngR[i].C1 = R.C1;
                //EngR[i].C2 = R.C2;
                //EngR[i].C3 = R.C3;
                //EngR[i].C4 = R.C4;
                //EngR[i].C5 = R.C5;
                //EngR[i].C6 = R.C6;
                //EngR[i].C7 = R.C7;
                //EngR[i].C8 = R.C8;
                //EngR[i].N = R.N;
                i++;
            }
            var RRR = EngR.OrderBy(x => x.R).Take(EN_V3.Test_num);




            DATA = new C0[RRR.Count()];
            int j=0;
            foreach (EnglishWordR AAA in RRR)
            {
                if(EN_V3.Test_type==0){
                    if (j%2==1)
                    {
                        DATA[j] = new C0(j, AAA.EWORD1 + " 過去分詞", AAA.EWORD3);                  
                    }
                    else
                    {
                        DATA[j] = new C0(j, AAA.EWORD1 + " 過去", AAA.EWORD2);
                    }
                }
                else if (EN_V3.Test_type == 1)
                {
                    DATA[j] = new C0(j, AAA.EWORD1 + " 過去", AAA.EWORD2);
                }
                else
                {
                    DATA[j] = new C0(j, AAA.EWORD1 + " 過去分詞", AAA.EWORD3);
                }



                //增加scollbar連結
                myButton mybtn = new myButton(j,(j+1).ToString());

                mybtn.Click += new RoutedEventHandler(scollbarBtn_Click);
                bar_Number.Children.Add(mybtn);

                j++;
            }


            ApplicationTitle.Text = "共 " + RRR.Count().ToString() + " 題 ";

            switch(EN_V3.Test_type){
                case 0: ApplicationTitle.Text +="(動詞三態)"; break;
                case 1: ApplicationTitle.Text += "(動詞過去)"; break;
                case 2: ApplicationTitle.Text += "(動詞過去分詞)"; break;
            }


            if (RRR.Count() == 0)
            {
                loading.Text = " 查無題庫單字..";
            }
            else if (RRR.Count() < EN_V3.Test_num)
            {
                ApplicationTitle.Text += " 您的題庫單字太少..";
                NowPtr = 0;
                loading.Visibility = Visibility.Collapsed;
                BODY.Visibility = Visibility.Visible;
            }
            else
            {

                NowPtr = 0;
                loading.Visibility = Visibility.Collapsed;
                BODY.Visibility = Visibility.Visible;
            }



            Timer.Stop();
        }


        private void scollbarBtn_Click(object sender, RoutedEventArgs e)
        {
            myButton mybtn = sender as myButton;

            NowPtr = mybtn.ptr;


            if (mybtn.getLocX() + scrollNum.Width <= scrollNum.HorizontalOffset)
            {
                scrollNum.ScrollToHorizontalOffset(mybtn.getLocX());
            }

            //myInput.Focus();
        }


        int NowPtr
        {
            get
            {
                return Ptr;
            }
            set
            {
                Ptr = value;

                title.Text = "第 " + (Ptr + 1).ToString()+" 題";
                CWORD.Text = DATA[Ptr].CWORD;//題目
                myInput.Text = DATA[Ptr].INPUT;//自己輸入的資料





                //正解用
                if(!myInput.IsEnabled){
                    if (DATA[Ptr].isCorrect)
                    {
                        title.Text += " (正確)";
                    }
                    else
                    {

                        title.Text += " (錯誤)";
                    }

                }

            }
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




        private void listbox_ERROR_SelectionChanged(object sender, SelectionChangedEventArgs e)
        {
            if (listbox_ERROR.SelectedIndex > -1)
            {
                MyTextBlock btn = listbox_ERROR.Items[listbox_ERROR.SelectedIndex] as MyTextBlock;
                NowPtr = btn.ptr;
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

        private void NEXT_Click(object sender, RoutedEventArgs e)
        {
            if (NowPtr < DATA.Count() - 1)
            {
                NowPtr++;


                //判斷scollbar是否需要跟著移動
                scrollNum.ScrollToHorizontalOffset(90 * Ptr - 1);
            }
        }

        private void PREV_Click(object sender, RoutedEventArgs e)
        {
            if (NowPtr > 0)
            {
                NowPtr--;


                //判斷scollbar是否需要跟著移動
                scrollNum.ScrollToHorizontalOffset(90 * Ptr - 1);
            }
        }

        private void listbox_ERROR_MouseLeftButtonUp(object sender, MouseButtonEventArgs e)
        {
            if (listbox_ERROR.SelectedIndex > -1)
            {
                MyTextBlock btn = listbox_ERROR.Items[listbox_ERROR.SelectedIndex] as MyTextBlock;
                if (ERRORptr == btn.ptr)
                {
                    NowPtr = btn.ptr;
                    BTN_TEST_Click(sender, e);
                }
                else
                {
                    ERRORptr = btn.ptr;
                }

            }//if
        }

        private void myInput_KeyUp(object sender, KeyEventArgs e)
        {

            if (DATA.Count() == 0)
            {
                return;
            }




            DATA[NowPtr].INPUT = myInput.Text;

            if (e.Key == Key.Enter)
            {
                if (NowPtr < DATA.Count() - 1)
                {
                    NowPtr++;


                    //判斷scollbar是否需要跟著移動
                    scrollNum.ScrollToHorizontalOffset(90 * Ptr - 1);
                }
                else
                {
                    button1.Focus();
                }
            }
        }

    }



    
}