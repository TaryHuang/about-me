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
using Microsoft.Phone.Shell;

namespace English
{
    public partial class EN_MYLOVE : PhoneApplicationPage
    {
        System.Windows.Threading.DispatcherTimer SearchTimer = new System.Windows.Threading.DispatcherTimer();

        bool SHOW_CHECKBOX = false;
        public static int radioCtype = -1;
        public static bool[] F = new bool[26];
        public static string[] S = new string[26];
        public static string sdate, edate;

        TestNumBtn[] testBtn = new TestNumBtn[30];

        ButtonList showT;

        //考試出題用＊＊＊＊＊＊＊＊＊
        public static int Test_num=10;//出題數
        int Test_type = 0;//題型種類 (０單字、１刻漏字、２選擇題)
        SolidColorBrush SBrush = new SolidColorBrush(Color.FromArgb(255, 255, 0, 0));
        string[] ListShow=new String[30];


        ButtonDate SDATE, EDATE;
        TextBlock rDATE=new TextBlock();
        public EN_MYLOVE()
        {


            InitializeComponent();




            //日期起訖

            SDATE = new ButtonDate(this, Convert.ToDateTime("2013/01/01"));
            SDATE.BorderThickness = new Thickness(0, 0, 0, 0);
            EDATE = new ButtonDate(this, DateTime.Now.Date);
            EDATE.BorderThickness = new Thickness(0, 0, 0, 0);
            rDATE.Text = "~";
            rDATE.FontSize=48;

            G_DATE.Children.Add(SDATE);
            G_DATE.Children.Add(rDATE);
            G_DATE.Children.Add(EDATE);

            //**********************************************
            for (int i = 0; i < 10; i++)
            {
                ListShow[(i * 3) + 0] = 10 * (i + 1) + "題 (單字)";
                ListShow[(i * 3) + 1] = 10 * (i + 1) + "題 (克漏字)";
                ListShow[(i * 3) + 2] = 10 * (i + 1) + "題 (選擇題)";
            }
            showT = new ButtonList(this, ListShow, 0);
            showT.FontSize = 36;
            showT.BorderBrush =  new SolidColorBrush(Colors.Transparent); 
            Grid_showT.Children.Add(showT);
            //**********************************************



            //處理題型＊＊＊＊＊＊＊
            int j = 1;
            for (int i = 0; i < testBtn.Count(); i += 3)
            {
                testBtn[i] = new TestNumBtn(0, j *10);
                testBtn[i+1] = new TestNumBtn(1, j * 10);
                testBtn[i+2] = new TestNumBtn(2, j * 10);

                testBtn[i].Click += testbtn_Click;
                testBtn[i + 1].Click += testbtn_Click;
                testBtn[i + 2].Click += testbtn_Click;

                listBox_testbtn.Items.Add(testBtn[i]);
                listBox_testbtn.Items.Add(testBtn[i + 1]);
                listBox_testbtn.Items.Add(testBtn[i + 2]);
                j++;
            }
            //＊＊＊＊＊＊＊處理題型



            S = new string[]{"A","B","C","D","E","F","G","H","I","J",
                                 "K","L","M","N","O","P","Q","R","S","T",
                                 "U","V","W","X","Y","Z"};
            for (int i = 0; i < S.Count(); i++)
            {

                Button R = new Button();
                R.Name = "BTN_" + S[i].ToString();
                R.FontSize = 28;
                R.Width = 75;
                R.Content = S[i].ToString();
                R.Background = SBrush;
                R.Click += new RoutedEventHandler(btn_Click);
                body.Children.Add(R);
            }




            MYLOVE.Header = "查詢題庫";

            SearchTimer.Tick += new EventHandler(SearchTimer_Tick);
            SearchTimer.Interval = new TimeSpan(0, 0, 0, 0, 500);
            //SearchTimer.Start();
        }

        public void SearchTimer_Tick(object sender, EventArgs e)
        {
            FUNC_SEARCH(SEARCH.Text);
        }



        public void FUNC_SEARCH(string AAA)
        {




            //兩者排序判斷用   -因為orderby 在linq語言無法拆解出來
            if(radio_DATE.IsChecked==true){
                var tEnglishWord = from EnglishWord in  MainPage.tDBHandler.EnglishWord
                                   where
                                    (
                                    (radioCtypeS1.IsChecked == true && EnglishWord.CTYPE == "@") ||
                                    (radioCtypeS2.IsChecked == true && EnglishWord.CTYPE == "#")
                                    ) &&

                                   EnglishWord.Mylove == 1 
                                   && (EnglishWord.CWORD.Contains(AAA) || EnglishWord.EWORD1.Contains(AAA)) ||
                                      (isDATE(AAA) && EnglishWord.DATE == isDATE2(AAA))
                                   orderby EnglishWord.DATE descending, EnglishWord.EWORD1 ascending
                                   select EnglishWord;


                V3[] EnglishV3 = new V3[tEnglishWord.Count()];
                int j = 0;
                foreach (EnglishWord TEMP in tEnglishWord)
                {
                    EnglishV3[j] = new V3(TEMP.ID, TEMP.CWORD, TEMP.EWORD1, TEMP.DATE);
                    EnglishV3[j].Name = "EngList_" + j.ToString();
                    LISTBOX_DATA.Items.Add(EnglishV3[j]);
                    j++;
                }//foreach end
            }else{
                var tEnglishWord = from EnglishWord in MainPage.tDBHandler.EnglishWord
                                   where
                                    (
                                    (radioCtypeS1.IsChecked == true && EnglishWord.CTYPE == "@") ||
                                    (radioCtypeS2.IsChecked == true && EnglishWord.CTYPE == "#")
                                    ) &&
                                   EnglishWord.Mylove == 1 
                                   && (EnglishWord.CWORD.Contains(AAA) || EnglishWord.EWORD1.Contains(AAA)) ||
                                     (isDATE(AAA) && EnglishWord.DATE == isDATE2(AAA))
                                   orderby EnglishWord.EWORD1 ascending
                                   select EnglishWord;


                V3[] EnglishV3 = new V3[tEnglishWord.Count()];
                int j = 0;
                foreach (EnglishWord TEMP in tEnglishWord)
                {
                    EnglishV3[j] = new V3(TEMP.ID, TEMP.CWORD, TEMP.EWORD1, TEMP.DATE);
                    EnglishV3[j].Name = "EngList_" + j.ToString();
                    LISTBOX_DATA.Items.Add(EnglishV3[j]);
                    j++;
                }//foreach end

            }

            MYLOVE.Header = "查詢題庫";
            SearchTimer.Stop();
        }

        private void BTN_SEARCH_Click(object sender, RoutedEventArgs e)
        {

            MYLOVE.Header = "請稍候...";
            LISTBOX_DATA.Items.Clear();
            MYFORM.DefaultItem = MYLOVE;
            SearchTimer.Start();
        }






        private void BTN1_Click(object sender, RoutedEventArgs e)
        {



            MYFORM.DefaultItem = MYLOVE;
            SHOW_CHECKBOX = !SHOW_CHECKBOX;

            if (SHOW_CHECKBOX)
            {
                for (int i = 0; i < LISTBOX_DATA.Items.Count(); i++)
                {
                    V3 tV3 = (V3)(LISTBOX_DATA.Items[i]);

                    if (tV3 != null)
                    {
                        tV3.SHOW_checkbox.Visibility = System.Windows.Visibility.Visible;
                    }//if
                }//for

            }
            else
            {


                //若異動資料大於120筆時 就顯示提示 是否要異動
                int VNum = 0;
                for (int i = 0; i < LISTBOX_DATA.Items.Count(); i++)
                {
                    V3 tV3 = (V3)(LISTBOX_DATA.Items[i]);
                    if (tV3.UpdateData)
                    {
                        VNum++;
                    }
                }

                if (VNum >= 120)
                {


                    MessageBoxResult m = MessageBox.Show("您所要異動的資料過多，需要一會兒等待時間！您是否要繼續進行？", "系統訊息", MessageBoxButton.OKCancel);
                    if (m != MessageBoxResult.OK)
                    {
                        SHOW_CHECKBOX = !SHOW_CHECKBOX;
                        return;
                    }
                }
                //若異動資料大於120筆時 就顯示提示 是否要異動



                for (int i = LISTBOX_DATA.Items.Count() - 1; i >= 0; i--)
                {
                    V3 tV3 = (V3)(LISTBOX_DATA.Items[i]);


                    if (tV3.UpdateData)
                    {
                        //需要異動到資料庫內的資料
                        //MessageBox.Show(tV3.getID().ToString());            

                        var tEnglishWord = from EnglishWord in MainPage.tDBHandler.EnglishWord
                                           where EnglishWord.ID == tV3.getID()
                                           select EnglishWord;

                        EnglishWord t2EnglishWord = tEnglishWord.First();
                        t2EnglishWord.Mylove = 0;


                        LISTBOX_DATA.Items.RemoveAt(i);//將英文移除
                    }

                    if (tV3 != null)
                    {
                        tV3.SHOW_checkbox.Visibility = System.Windows.Visibility.Collapsed;
                    }//if

                }//for

                MainPage.tDBHandler.SubmitChanges();
            }
            saveAction();//啟動存檔選取事件 變換樣式
        }




        public void saveAction()
        {
            if (SHOW_CHECKBOX)
            {
                BAR_SEARCH.Visibility = System.Windows.Visibility.Collapsed;
                BAR_BOTTOM.Visibility = System.Windows.Visibility.Visible;

                MYTEST.IsEnabled = false;

                LISTBOX_DATA.Margin = new Thickness(0, -20, 0, 0);
                LISTBOX_DATA.Height = 630;
                BTN1.Content = "移除";
                MYLOVE.Header = "移除單字";
            }
            else
            {
                BAR_SEARCH.Visibility = System.Windows.Visibility.Visible;
                BAR_BOTTOM.Visibility = System.Windows.Visibility.Collapsed;
                MYTEST.IsEnabled = true;
                LISTBOX_DATA.Height = 540;
                LISTBOX_DATA.Margin = new Thickness(0, 140, 0, 0);

                BTN1.Content = "選取移除";
                MYLOVE.Header = "查詢題庫";
            }
        }







        void CANCEL()
        {
            //取消存檔
            MYFORM.DefaultItem = MYLOVE;
            SHOW_CHECKBOX = !SHOW_CHECKBOX;

            for (int i = LISTBOX_DATA.Items.Count() - 1; i >= 0; i--)
            {
                V3 tV3 = (V3)(LISTBOX_DATA.Items[i]);

                if (tV3.UpdateData)
                {
                    tV3.SHOW_checkbox.IsChecked = !tV3.SHOW_checkbox.IsChecked;
                    tV3.ACTION();
                }

                if (tV3 != null)
                {
                    tV3.SHOW_checkbox.Visibility = System.Windows.Visibility.Collapsed;
                }//if

            }

            saveAction();
        }

        private void ALL_Click(object sender, RoutedEventArgs e)
        {
            for (int i = LISTBOX_DATA.Items.Count() - 1; i >= 0; i--)
            {
                V3 tV3 = (V3)(LISTBOX_DATA.Items[i]);
                tV3.SHOW_checkbox.IsChecked = true;
                tV3.ACTION();
            }
        }

        private void CLEAR_Click(object sender, RoutedEventArgs e)
        {
            for (int i = LISTBOX_DATA.Items.Count() - 1; i >= 0; i--)
            {
                V3 tV3 = (V3)(LISTBOX_DATA.Items[i]);
                tV3.SHOW_checkbox.IsChecked = false;
                tV3.ACTION();
            }
        }

        private void SEARCH_KeyDown(object sender, KeyEventArgs e)
        {

            //TEXTBOX焦點狀態 按下ENTER 搜尋
            if (e.Key == Key.Enter)
            {
                BTN1.Focus();//移除觸發的手機鍵盤
                MYLOVE.Header = "請稍候...";
                LISTBOX_DATA.Items.Clear();
                MYFORM.DefaultItem = MYLOVE;
                SearchTimer.Start();
            }
        }



        private void btn_Click(object sender, RoutedEventArgs e)
        {
            Button btn = sender as Button;
            if (btn.Background == SBrush)
            {
                btn.Background = new SolidColorBrush(Color.FromArgb(0, 0, 0, 0));
            }
            else
            {
                btn.Background = SBrush;
            }
        }

        private void all_chked_Click(object sender, RoutedEventArgs e)
        {
            for (int i = 0; i < S.Count(); i++)
            {
                Button btn = (Button)(this.FindName("BTN_" + S[i].ToString()));
                btn.Background = SBrush;
            }
        }

        private void button1_Click(object sender, RoutedEventArgs e)
        {
            for (int i = 0; i < S.Count(); i++)
            {
                Button btn = (Button)(this.FindName("BTN_" + S[i].ToString()));
                btn.Background = new SolidColorBrush(Color.FromArgb(0, 0, 0, 0));
            }
        }





        public static bool isDATE(string inputDatetime)
        {
            try
            {
                    DateTime dp =  DateTime.Parse(inputDatetime);
            }
            catch
            {
                return false;
            }

            return true;
        }


        public static DateTime isDATE2(string inputDatetime)
        {
            DateTime dp;
            try
            {
                dp = DateTime.Parse(inputDatetime);
                
            }
            catch
            {
                dp = DateTime.Parse("2012/01/01");
            }
            return dp;
        }




        private void textBlock5_MouseLeftButtonUp(object sender, MouseButtonEventArgs e)
        {
            //顯示最大題數選擇
            MYFORM.Visibility = System.Windows.Visibility.Collapsed;
            BAR_testNum.Visibility = System.Windows.Visibility.Visible;

        }


        protected override void OnBackKeyPress(System.ComponentModel.CancelEventArgs e)
        {

            if (SHOW_CHECKBOX)
            {
                //取消選取用
                CANCEL();
                e.Cancel = true;
                return;
            }



            if(MYFORM.Visibility == System.Windows.Visibility.Collapsed){
                MYFORM.Visibility = System.Windows.Visibility.Visible;
                BAR_testNum.Visibility = System.Windows.Visibility.Collapsed;
                e.Cancel = true;
            }
            
        }





        private void testbtn_Click(object sender, RoutedEventArgs e)
        {

            TestNumBtn btnN = sender as TestNumBtn;
            Test_num = btnN.Test_num;
            Test_type = btnN.Test_type;
            MYFORM.Visibility = System.Windows.Visibility.Visible;
            BAR_testNum.Visibility = System.Windows.Visibility.Collapsed;

        }



        private void test_Click(object sender, RoutedEventArgs e)
        {
            /*
            //驗證權限及題目數量
            if (showT.Index >= 3)
            {
                //已過試用期 - 判定app是否已購買
                if (!TARY_Library_Silverlight.ProdKey.ProdPass())
                {
                    //尚未購買
                    TARY_Library_Silverlight.ProdKey.ShowAppMarketplace();
                    return;
                }
            }
            */








            //將ABC...Z回傳給F*******************************
            for (int i = 0; i < S.Count(); i++)
            {
                Button btn = (Button)(this.FindName("BTN_" + S[i].ToString()));
                if (btn.Background == SBrush)
                {
                    F[i] = true;
                }
                else
                {
                    F[i] = false;
                }
            }
            //*******************************將ABC...Z回傳給F


            if (radioCtype1.IsChecked == true)
            {
                //全部
                radioCtype = 0;
            }
            else if (radioCtype2.IsChecked == true)
            {
                //系統單字
                radioCtype = 1;
            }else{
                //自訂單字
                radioCtype = 2;
            }



            //日期
            sdate = SDATE.Date.ToString("yyyy/MM/dd");
            edate = EDATE.Date.ToString("yyyy/MM/dd");



            //題目數量
            Test_num = ((showT.Index + 3) / 3) * 10;

            

            if (showT.Index % 3 == 0)
            {
                NavigationService.Navigate(new Uri("/TEST_C0.xaml", UriKind.Relative));
            }
            else if (showT.Index % 3 == 1)
            {
                NavigationService.Navigate(new Uri("/TEST_C1.xaml", UriKind.Relative));
            }
            else if (showT.Index % 3 == 2)
            {
                NavigationService.Navigate(new Uri("/TEST_C2.xaml", UriKind.Relative));
            }
        }

        private void SDATE_KeyDown(object sender, KeyEventArgs e)
        {
            if(e.Key ==Key.Enter){
                test.Focus();
            }
        }

        private void EDATE_KeyDown(object sender, KeyEventArgs e)
        {
            if (e.Key == Key.Enter)
            {
                test.Focus();
            }
        }









        private void addTile_Click(object sender, RoutedEventArgs e)
        {


            //尚未購買或獲得試用版本
            //已過試用期 - 判定app是否已購買
            if (TARY_Library_Silverlight.ProdKey.ProdPass())
            {

            }
            else
            {
                TARY_Library_Silverlight.ProdKey.ShowAppMarketplace();
                return;
            }



                for (int j = 1; j < 99; j++)
                {
                    ShellTile TileToFind = ShellTile.ActiveTiles.FirstOrDefault(x => x.NavigationUri.ToString().Contains("DefaultTitle=@" + j + "@"));

                    if (TileToFind == null)
                    {


                        string TileboxString = "";
                        //****************************************************
                        for (int i = 0; i < S.Count(); i++)
                        {
                            Button btn = (Button)(this.FindName("BTN_" + S[i].ToString()));
                            if (btn.Background == SBrush)
                            {
                                F[i] = true;
                            }
                            else
                            {
                                F[i] = false;
                            }
                        }


                        for (int i = 0; i < F.Count(); i++)
                        {
                            if (F[i])
                            {
                                TileboxString += S[i];
                            }
                        }
                        //****************************************************
                        string TileradioCtype = "";
                        string TileradioTitle = "";
                        if (radioCtype1.IsChecked == true)
                        {
                            //全部
                            TileradioCtype = "0";
                            TileradioTitle = "全部單字";
                        }
                        else if (radioCtype2.IsChecked == true)
                        {
                            //系統單字
                            TileradioCtype = "1";
                            TileradioTitle = "系統單字";
                        }
                        else
                        {
                            //自訂單字
                            TileradioCtype = "2";
                            TileradioTitle = "自訂單字";
                        }

                        string TileSdate = SDATE.Date.ToString("yyyy/MM/dd");
                        string TileEdate = EDATE.Date.ToString("yyyy/MM/dd");
                        string TileNum = (((showT.Index + 3) / 3) * 10).ToString();



                        string TileTitle = "";
                        switch (showT.Index % 3)
                        {
                            case 0: TileTitle = "單字 (" + TileNum + "題)"; break;
                            case 1: TileTitle = "克漏字 (" + TileNum + "題)"; break;
                            case 2: TileTitle = "選擇題 (" + TileNum + "題)"; break;
                        }


                        string TileContent = TileSdate + "\n~" + TileEdate + "\n" + TileradioTitle;
                        //*************************************************************


                        int testNumber = TestNumber(TileboxString, TileSdate, TileEdate, TileradioCtype);







                        StandardTileData NewTileData = new StandardTileData
                        {
                            Title = TileTitle,
                            Count = j,
                            BackTitle = "題庫總數：" + testNumber.ToString(),
                            BackContent = TileContent,
                            BackBackgroundImage = new Uri("red.png", UriKind.Relative)
                        };
                        switch (j % 4)
                        {
                            case 0: NewTileData.BackgroundImage = new Uri("images/pinBg4.png", UriKind.Relative); break;
                            case 1: NewTileData.BackgroundImage = new Uri("images/pinBg1.png", UriKind.Relative); break;
                            case 2: NewTileData.BackgroundImage = new Uri("images/pinBg2.png", UriKind.Relative); break;
                            case 3: NewTileData.BackgroundImage = new Uri("images/pinBg3.png", UriKind.Relative); break;
                        }
                        //*************************************************************


                        if (showT.Index % 3 == 0)
                        {
                            ShellTile.Create(new Uri("/TEST_C0.xaml?DefaultTitle=@" + j + "@&BOX=" + TileboxString + "&NUM=" + TileNum + "&sdate=" + TileSdate + "&edate=" + TileEdate + "&radioCtype=" + TileradioCtype, UriKind.Relative), NewTileData);
                            return;
                        }
                        else if (showT.Index % 3 == 1)
                        {
                            ShellTile.Create(new Uri("/TEST_C1.xaml?DefaultTitle=@" + j + "@&BOX=" + TileboxString + "&NUM=" + TileNum + "&sdate=" + TileSdate + "&edate=" + TileEdate + "&radioCtype=" + TileradioCtype, UriKind.Relative), NewTileData);
                            return;
                        }
                        else if (showT.Index % 3 == 2)
                        {
                            ShellTile.Create(new Uri("/TEST_C2.xaml?DefaultTitle=@" + j + "@&BOX=" + TileboxString + "&NUM=" + TileNum + "&sdate=" + TileSdate + "&edate=" + TileEdate + "&radioCtype=" + TileradioCtype, UriKind.Relative), NewTileData);
                            return;
                        }


                    }//if end

                }//for

        }

        public static void UpdateTile(string Pin, int num)
        {
            ShellTile TileToFind = ShellTile.ActiveTiles.FirstOrDefault(x => x.NavigationUri.ToString().Contains("DefaultTitle="+Pin));

            if (TileToFind != null)
            {
                StandardTileData NewTileData = new StandardTileData
                {
                    BackTitle = "題庫總數：" + num.ToString()
                };

                TileToFind.Update(NewTileData);
            }
        }




        //回傳題數用
        int TestNumber(string BOX,string SDATE,string EDATE,string Ctype)
        {

                for (int i = 0; i < BOX.Count(); i++)
                {
                    switch (BOX[i])
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
                EN_MYLOVE.sdate = SDATE;
                EN_MYLOVE.edate = EDATE;
                EN_MYLOVE.radioCtype = Convert.ToInt32(Ctype);




                int tEnglishWord = (from EnglishWord in MainPage.tDBHandler.EnglishWord
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
                                    select EnglishWord).Count();
                     return tEnglishWord; 
               }
               
    }




    //選取最大題數用
    public class TestNumBtn :Button
    {
        public int Test_num = 0;//出題數
        public int Test_type = 0;//題型種類 (０單字、１刻漏字、２選擇題)



        public TestNumBtn(int ctype, int num)
        {


            this.FontSize = 40;
            this.Width = 400;
            this.BorderBrush = new SolidColorBrush(Color.FromArgb(0, 0, 0, 0));
            Test_num = num;
            Test_type = ctype;

            if (ctype==0)
            {
                this.Content = num.ToString()+"題 (單字)";
            }

            if (ctype == 1)
            {
                this.Content = num.ToString() + "題 (克漏字)";
            }


            if (ctype == 2)
            {
                this.Content = num.ToString() + "題 (選擇題)";
            }

        }
    }
}