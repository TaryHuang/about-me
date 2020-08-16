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

namespace readEnglish
{
    public partial class Test : PhoneApplicationPage
    {

        ButtonListR BtnCtype,BtnNum;
        string[] T1, T2;
        public static bool[] F = new bool[26];
        public static string[] S = new string[]{"A","B","C","D","E","F","G","H","I","J",
                                 "K","L","M","N","O","P","Q","R","S","T",
                                 "U","V","W","X","Y","Z"};
        SolidColorBrush SBrush = new SolidColorBrush(Color.FromArgb(255, 255, 0, 0));
        public static int Test_num = 0;
        public Test()
        {
            InitializeComponent();






            for (int i = 0; i < S.Count(); i++)
            {

                Button R = new Button();
                R.Name = "BTN_" + S[i].ToString();
                R.FontSize = 28;
                R.Width = 75;
                R.Content = S[i].ToString();
                R.Background = SBrush;
                R.Click += new RoutedEventHandler(btn_Click);
                bodyWord.Children.Add(R);
            }

            title.Text = MainPage.SortName;
            string[] T1={"單字","克漏字","選擇題"};
            BtnCtype = new ButtonListR("考題項目 : ",this, T1, 0);

            string[] T2 = { "10 題", "20 題", "30 題", "40 題", "50 題", "60 題", "70 題", "80 題", "90 題", "100 題" };
            BOX.Children.Add(BtnCtype);

            BtnNum = new ButtonListR("考題數目 : ", this, T2, 1);
            BOX.Children.Add(BtnNum);
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
        private void go_Click(object sender, RoutedEventArgs e)
        {



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


            
            Test_num = (BtnNum.Index + 1) * 10;

            if(BtnCtype.Index == 0){
                NavigationService.Navigate(new Uri("/TEST_C0.xaml", UriKind.Relative));
            }
            else if (BtnCtype.Index == 1)
            {
                NavigationService.Navigate(new Uri("/TEST_C1.xaml", UriKind.Relative));
              
                
            }else{
                NavigationService.Navigate(new Uri("/TEST_C2.xaml", UriKind.Relative));
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







        string TileboxString, TilePtr;
        
        private void button2_Click(object sender, RoutedEventArgs e)
        {
            //裝訂


            TilePtr = MainPage.Ptr.ToString();

            for (int j = 1; j < 99; j++)
            {
                ShellTile TileToFind = ShellTile.ActiveTiles.FirstOrDefault(x => x.NavigationUri.ToString().Contains("DefaultTitle=@" + j + "@"));

                if (TileToFind == null)
                {


                    //****************************************************


                    StandardTileData NewTileData = new StandardTileData
                    {
                        Title = MainPage.SortName,
                        Count = 0,
                        BackTitle = "",
                        BackContent = MainPage.SortName,
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


                    ShellTile.Create(new Uri("/Test.xaml?DefaultTitle=@" + j + "@&PTR=" + TilePtr, UriKind.Relative), NewTileData);

                    return;

                }//if end

            }//for
        }

        private void PhoneApplicationPage_Loaded(object sender, RoutedEventArgs e)
        {

            try
            {

                string PTR = NavigationContext.QueryString["PTR"];

                
                if(PTR != ""){
                    title.Text = "此字庫已不存在..";
                    //代表是裝訂 從資料庫 撈出SORT的NAME

                    Sort tSortSin = (from tSort in MainPage.tDBHandler.Sort
                                    where tSort.ID == Convert.ToInt32(PTR) 
                                    select tSort).First();

                    MainPage.Ptr = tSortSin.ID;
                    title.Text = tSortSin.CNAME;
                    

                }


            }
            catch
            {
                if (MainPage.Ptr >=0)
                {
                    button2.Visibility = System.Windows.Visibility.Visible;
                }
            }
        }

    }
}