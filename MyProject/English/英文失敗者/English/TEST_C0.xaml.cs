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
using TARY_Library_Silverlight;

namespace English
{
    public partial class TEST_C0 : PhoneApplicationPage
    {
        int ERRORptr = -1;
        C0[] DATA;
        int Ptr;//目前指到的指標
        System.Windows.Threading.DispatcherTimer Timer = new System.Windows.Threading.DispatcherTimer();
        Random Rdm = new Random();

        public TEST_C0()
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
            //MessageBox.Show(tEnglishWord.Count().ToString());

            EnglishWordR[] EngR = new EnglishWordR[tEnglishWord.Count()];
            int i = 0;
            foreach (EnglishWord R in tEnglishWord)
            {
                EngR[i] = new EnglishWordR();
                //EngR[i].ID = R.ID;
                //EngR[i].Mylove = R.Mylove;
                //EngR[i].CTYPE = R.CTYPE;
                EngR[i].CWORD = R.CWORD;
                //EngR[i].EWORD0 = R.EWORD0;
                EngR[i].EWORD1 = R.EWORD1;
                //EngR[i].EWORD2 = R.EWORD2;
                //EngR[i].EWORD3 = R.EWORD3;
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
            var RRR = EngR.OrderBy(x => x.R).Take(EN_MYLOVE.Test_num);




            DATA = new C0[RRR.Count()];
            int j=0;
            foreach (EnglishWordR AAA in RRR)
            {

                DATA[j] = new C0(j, AAA.CWORD, AAA.EWORD1);


                //增加scollbar連結
                myButton mybtn = new myButton(j,(j+1).ToString());

                mybtn.Click += new RoutedEventHandler(scollbarBtn_Click);
                bar_Number.Children.Add(mybtn);

                j++;
            }


            ApplicationTitle.Text = "共 " + RRR.Count().ToString() + " 題 ";



            if (RRR.Count() == 0)
            {
                loading.Text = " 查無題庫單字..";
            }
            else if (RRR.Count() < EN_MYLOVE.Test_num)
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


        private void PhoneApplicationPage_Loaded_1(object sender, RoutedEventArgs e)
        {




            try
            {
                string box = NavigationContext.QueryString["BOX"];

                for (int i = 0; i < box.Count(); i++)
                {
                    switch (box[i])
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
        }

    }



    class myButton : Button
    {
        public int ptr;//指標

        public myButton(int p,string content)
        {

            ptr = p;
            this.Width = 90;
            this.Height = 70;
            this.BorderBrush = new SolidColorBrush(Color.FromArgb(0, 0, 0, 0));
            this.Content = content;

        }



        public double getLocX()
        {
            //回傳scollbar因該的指向的位置
            return this.Width * ptr;
        }

    }
    
}