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
using System.Xml;
using System.Xml.Linq;
using TARY_Library_Silverlight;
using Microsoft.Phone.Shell;
namespace ProverbEN
{
    public partial class MainPage : PhoneApplicationPage
    {
        // 建構函式
        TextBoxR SearchText;

        public static DBHandler tDBHandler = new DBHandler(DBHandler.DBConnection);


        public MainPage()
        {
            InitializeComponent();

            //將xml轉入linq資料中
            if (tDBHandler.DatabaseExists() == false)
            {

                tDBHandler.CreateDatabase();
                XElement XML;


                //載入XML＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊
                Uri uri = new Uri("DATA/data.xml", UriKind.Relative);
                XML = XElement.Load(uri.ToString());
                //＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊載入XML

                ProverbDb[] Pro = new ProverbDb[XML.Elements("row").Count()];
                for (int i = 0; i < XML.Elements("row").Count(); i++)
                {
                    Pro[i] = new ProverbDb();
                    Pro[i].CWORD = XML.Elements("row").ElementAt(i).Attribute("C").Value ;
                    Pro[i].DWORD = XML.Elements("row").ElementAt(i).Attribute("D").Value;

                }//for
                tDBHandler.ProverbDb.InsertAllOnSubmit(Pro);

                tDBHandler.SubmitChanges();
                
            }//if
//            MessageBox.Show(tDBHandler.ProverbDb.Count().ToString());




            SearchText = new TextBoxR(10, "搜尋諺語..");
            SearchText.LostFocus += new RoutedEventHandler(SearchText_LostFocus);
            SearchText.KeyDown += new KeyEventHandler(SearchText_KeyDown);
            Top.Children.Add(SearchText);
        }

        void SearchText_KeyDown(object sender, KeyEventArgs e)
        {
            if (e.Key == Key.Enter)
            {
                button1.Focus();
                Search(SearchText.myText);
            }
        }

        void SearchText_LostFocus(object sender, RoutedEventArgs e)
        {
             Search(SearchText.myText);
        }



        void Search(String Text){
            ProverbDb[] temp = (from TTT in MainPage.tDBHandler.ProverbDb
                                where TTT.CWORD.Contains(Text) || TTT.DWORD.Contains(Text)
                                select TTT).ToArray();


            BOX.Items.Clear();
            for (int i = 0; i < temp.Count(); i++)
            {
                showBody A = new showBody(temp[i].CWORD, temp[i].DWORD);
                BOX.Items.Add(A);
            }
        }



        private void ApplicationBarMenuItem_Click(object sender, EventArgs e)
        {
            //釘選每日一句程式



                ShellTile TileToFind = ShellTile.ActiveTiles.FirstOrDefault(x => x.NavigationUri.ToString().Contains("DefaultKey=OK"));

                if (TileToFind == null)
                {

                    StandardTileData NewTileData = new StandardTileData
                    {
                        Title = "",
                        Count = 0,
                    };
                    NewTileData.BackgroundImage = new Uri("images/V.png", UriKind.Relative);
                    //*************************************************************
                    ShellTile.Create(new Uri("/EveryDayPro.xaml?DefaultKey=OK", UriKind.Relative), NewTileData);
                    return;
                }else{
                    MessageBox.Show("很抱歉，您已釘選了。");
                }//if


        }

        private void ApplicationBarMenuItem_Click_1(object sender, EventArgs e)
        {

            if (BOX.SelectedIndex == -1)
            {
                MessageBox.Show("請先選取諺語");
                return;
            }

            try
            {


                showBody S= (showBody)(BOX.Items[BOX.SelectedIndex]);

                Pages.FacebookLoginPage.ShowWord = S.title;

                //將話語上傳至facebook...
                NavigationService.Navigate(new Uri("/Pages/facebookLoginPage.xaml", UriKind.Relative));

            }
            catch
            {
                MessageBox.Show("請重新選取諺語");
            }

          }




    }
}