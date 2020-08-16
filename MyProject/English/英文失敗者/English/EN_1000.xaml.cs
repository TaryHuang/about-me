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
    public partial class EN_1000 : PhoneApplicationPage
    {
        System.Windows.Threading.DispatcherTimer SearchTimer = new System.Windows.Threading.DispatcherTimer();

        bool[] F = new bool[26];
        string[] S = new string[26];
        bool SHOW_CHECKBOX = false;
        SolidColorBrush SBrush = new SolidColorBrush(Color.FromArgb(255, 255, 0, 0));


        public EN_1000()
        {
            InitializeComponent();


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


            SearchTimer.Tick += new EventHandler(SearchTimer_Tick);
            SearchTimer.Interval = new TimeSpan(0, 0, 0, 0, 100);
            SearchTimer.Stop();
        }


        public void FUNC_SEARCH(string AAA)
        {
            
            //AA = 開頭英文字限定
            //AAA = 特定字串

            //處理F 
            Button btn;
            for (int i = 0; i < S.Count();i++ )
            {
                btn = (Button)(this.FindName("BTN_"+S[i].ToString()));
                if (btn.Background == SBrush)
                {
                    F[i] = true;
                }
                else
                {
                    F[i] = false;
                }
            }


            int joinNum = 0;

            if(radio_1.IsChecked==true){
                joinNum = 1;
            }


            string radioR = "";
            if (radioR_0.IsChecked == true)
            {
                radioR = "@";
            }
            else
            {
                radioR = "#";
            }



            var tEnglishWord = from EnglishWord in MainPage.tDBHandler.EnglishWord
                               where EnglishWord.CTYPE == radioR &&
                               EnglishWord.Mylove <= joinNum
                               && (
                                   F[0] && EnglishWord.EWORD0 == S[0] ||
                                   F[1] && EnglishWord.EWORD0 == S[1] ||
                                   F[2] && EnglishWord.EWORD0 == S[2] ||
                                   F[3] && EnglishWord.EWORD0 == S[3] ||
                                   F[4] && EnglishWord.EWORD0 == S[4] ||
                                   F[5] && EnglishWord.EWORD0 == S[5] ||
                                   F[6] && EnglishWord.EWORD0 == S[6] ||
                                   F[7] && EnglishWord.EWORD0 == S[7] ||
                                   F[8] && EnglishWord.EWORD0 == S[8] ||
                                   F[9] && EnglishWord.EWORD0 == S[9] ||
                                   F[10] && EnglishWord.EWORD0 == S[10] ||
                                   F[11] && EnglishWord.EWORD0 == S[11] ||
                                   F[12] && EnglishWord.EWORD0 == S[12] ||
                                   F[13] && EnglishWord.EWORD0 == S[13] ||
                                   F[14] && EnglishWord.EWORD0 == S[14] ||
                                   F[15] && EnglishWord.EWORD0 == S[15] ||
                                   F[16] && EnglishWord.EWORD0 == S[16] ||
                                   F[17] && EnglishWord.EWORD0 == S[17] ||
                                   F[18] && EnglishWord.EWORD0 == S[18] ||
                                   F[19] && EnglishWord.EWORD0 == S[19] ||
                                   F[20] && EnglishWord.EWORD0 == S[20] ||
                                   F[21] && EnglishWord.EWORD0 == S[21] ||
                                   F[22] && EnglishWord.EWORD0 == S[22] ||
                                   F[23] && EnglishWord.EWORD0 == S[23] ||
                                   F[24] && EnglishWord.EWORD0 == S[24] ||
                                   F[25] && EnglishWord.EWORD0 == S[25] 
                                  )
                               && (EnglishWord.CWORD.Contains(AAA) || EnglishWord.EWORD1.Contains(AAA) )
                               orderby EnglishWord.EWORD1 ascending
                               select EnglishWord;


                V3[] EnglishV3 = new V3[tEnglishWord.Count()];
                int j = 0;
                foreach (EnglishWord TEMP in tEnglishWord)
                {
                    EnglishV3[j] = new V3(TEMP.ID, TEMP.CWORD, TEMP.EWORD1, TEMP.Mylove);
                    EnglishV3[j].Name = "EngList_" + j.ToString();
                    EnglishV3[j].Hold += new EventHandler<GestureEventArgs>(DELETE_Hold);

                    
                    listBox_data.Items.Add(EnglishV3[j]);
                    j++;
                }//foreach end


            WORD.Header = "搜尋結果";
            SearchTimer.Stop();
        }



        private void button1_Click(object sender, RoutedEventArgs e)
        {

            WORD.Header = "請稍候...";
            listBox_data.Items.Clear();
            MYFORM.DefaultItem = WORD;
            SearchTimer.Start();
        }

        public void SearchTimer_Tick(object sender, EventArgs e)
        {
            FUNC_SEARCH(textbox_search.Text);
        }


        private void btn_Click(object sender, RoutedEventArgs e)
        {
            Button btn = sender as Button;
            if (btn.Background == SBrush)
            {
                btn.Background = new SolidColorBrush(Color.FromArgb(0, 0, 0, 0));
            }else{
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

        private void clear_Click(object sender, RoutedEventArgs e)
        {
            for (int i = 0; i < S.Count();i++ )
            {
                Button btn = (Button)(this.FindName("BTN_"+S[i].ToString()));
                btn.Background = new SolidColorBrush(Color.FromArgb(0, 0, 0, 0));
            }
        }



        private void textbox_search_KeyDown(object sender, KeyEventArgs e)
        {

            //TEXTBOX焦點狀態 按下ENTER 搜尋
            if (e.Key == Key.Enter)
            {
                button1.Focus();//移除觸發的手機鍵盤
                WORD.Header = "請稍候...";
                listBox_data.Items.Clear();
                MYFORM.DefaultItem = WORD;
                SearchTimer.Start();
            }
        }





        public void saveAction(){
            if (SHOW_CHECKBOX)
            {
                BAR_BOTTOM.Visibility = System.Windows.Visibility.Visible;


                listBox_data.Height = 630;
                listBox_data.Margin = new Thickness(0, -20, 0, 0);
                SEARCH.IsEnabled = false;
                SAVE.Content = "入庫";
                WORD.Header = "加入題庫";
            }else{
                BAR_BOTTOM.Visibility = System.Windows.Visibility.Collapsed;

                listBox_data.Height = 680;
                listBox_data.Margin = new Thickness(0, 0, 0, 0);
                SEARCH.IsEnabled = true;
                SAVE.Content = "選取題庫";
                WORD.Header = "搜尋結果";
            }
        }


        public void CANCEL()
        {
            //取消存檔
            MYFORM.DefaultItem = WORD;
            SHOW_CHECKBOX = !SHOW_CHECKBOX;

            for (int i = listBox_data.Items.Count() - 1; i >= 0; i--)
            {
                V3 tV3 = (V3)(listBox_data.Items[i]);

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




        private void CLEAR_Click(object sender, RoutedEventArgs e)
        {
            for (int i = listBox_data.Items.Count() - 1; i >= 0; i--)
            {
                V3 tV3 = (V3)(listBox_data.Items[i]);
                tV3.SHOW_checkbox.IsChecked = false;
                tV3.ACTION();
            }
        }




        private void ALL_Click(object sender, RoutedEventArgs e)
        {
            for (int i = listBox_data.Items.Count() - 1; i >= 0; i--)
            {
                V3 tV3 = (V3)(listBox_data.Items[i]);
                tV3.SHOW_checkbox.IsChecked = true;
                tV3.ACTION();
            }
        }

        private void SAVE_Click(object sender, RoutedEventArgs e)
        {

            MYFORM.DefaultItem = WORD;
            SHOW_CHECKBOX = !SHOW_CHECKBOX;

            if (SHOW_CHECKBOX)
            {
                for (int i = 0; i < listBox_data.Items.Count(); i++)
                {
                    V3 tV3 = (V3)(listBox_data.Items[i]);

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
                for (int i = 0; i < listBox_data.Items.Count(); i++)
                {
                    V3 tV3 = (V3)(listBox_data.Items[i]);
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




                for (int i = listBox_data.Items.Count() - 1; i >= 0; i--)
                {
                    V3 tV3 = (V3)(listBox_data.Items[i]);


                    if (tV3.UpdateData)
                    {
                        //需要異動到資料庫內的資料
                        //MessageBox.Show(tV3.getID().ToString());            

                        var tEnglishWord = from EnglishWord in MainPage.tDBHandler.EnglishWord
                                           where EnglishWord.ID == tV3.getID()
                                           select EnglishWord;

                        EnglishWord t2EnglishWord = tEnglishWord.First();
                        t2EnglishWord.Mylove = tV3.MYLOVE;
                        t2EnglishWord.DATE = DateTime.Now.Date;

                        if (tV3.MYLOVE == 0)
                        {
                            tV3.SHOW_INDB.Visibility = System.Windows.Visibility.Collapsed;
                        }
                        else
                        {
                            tV3.SHOW_INDB.Visibility = System.Windows.Visibility.Visible;
                        }


                        tV3.DbMylove = tV3.MYLOVE;
                    }

                    if (tV3 != null)
                    {
                        tV3.SHOW_checkbox.Visibility = System.Windows.Visibility.Collapsed;
                    }//if



                    if (tV3.MYLOVE == 1 && radio_0.IsChecked == true)
                    {
                        listBox_data.Items.RemoveAt(i);
                    }

                }//for

                 MainPage.tDBHandler.SubmitChanges();
            }
            saveAction();//啟動存檔選取事件 變換樣式

        }






        protected override void OnBackKeyPress(System.ComponentModel.CancelEventArgs e)
        {
            if (SHOW_CHECKBOX)
            {
                CANCEL();
                e.Cancel = true;
            }
        }









        private void DELETE_Hold(object sender, GestureEventArgs e)
        {

            if (listBox_data.SelectedIndex==-1)
            {
                return;
            }


        
            V3 V= listBox_data.Items[listBox_data.SelectedIndex] as V3;





            MessageBoxResult m = MessageBox.Show("您確定要刪除" + V.SHOW_EWORD1.Text+ "單字？請注意已入庫的單字也將會刪除！", "刪除訊息", MessageBoxButton.OKCancel);
            if (m == MessageBoxResult.OK)
            {


                var tEnglishWord = from EnglishWord in  MainPage.tDBHandler.EnglishWord
                                   where EnglishWord.ID == V.getID()
                                select EnglishWord;

                EnglishWord Data = tEnglishWord.First();
                MainPage.tDBHandler.EnglishWord.DeleteOnSubmit(Data);
                MainPage.tDBHandler.SubmitChanges();


                listBox_data.Items.RemoveAt(listBox_data.SelectedIndex);
            }
        }







        private void btn_add_Click(object sender, RoutedEventArgs e)
        {
            NavigationService.Navigate(new Uri("/DATA_ADD.xaml", UriKind.Relative));
        }




    }

}