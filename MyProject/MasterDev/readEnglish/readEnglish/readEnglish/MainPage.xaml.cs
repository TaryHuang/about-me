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
using System.Collections.ObjectModel;
namespace readEnglish
{
    public partial class MainPage : PhoneApplicationPage
    {

        public static DBHandler tDBHandler = new DBHandler(DBHandler.DBConnection);

        // 建構函式

        public static int Ptr=-1;
        public static string SortName = "";
        public MainPage()
        {
            InitializeComponent();



            if (tDBHandler.DatabaseExists() == false)
            {


                tDBHandler.CreateDatabase();


                //新增分類
                Sort S1 = new Sort();
                S1.ID = 1;
                S1.CNAME = "英文單字1000字";
                S1.Ctype = "";
                S1.Num = "";
                tDBHandler.Sort.InsertOnSubmit(S1);



                





                XElement XML;
                //載入XML＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊
                 Uri uri = new Uri("DATA/1000.xml", UriKind.Relative);
                XML = XElement.Load(uri.ToString());
                //＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊載入XML

                //全部顯示 單字1000字轉入LINQ中
                EnglishWord[] EW2 = new EnglishWord[XML.Elements("row").Count()];
                for (int i = 0; i < XML.Elements("row").Count(); i++)
                {
                    EW2[i] = new EnglishWord();
                    //EW2[i].Mylove = 1;//初始畫 代表沒有加入我的單題庫中
                    EW2[i].CTYPE = 1;
                    EW2[i].DATE = DateTime.Now.Date;
                    EW2[i].CWORD = XML.Elements("row").ElementAt(i).Attribute("CWORD").Value;
                    EW2[i].EWORD0 = (XML.Elements("row").ElementAt(i).Attribute("EWORD1").Value[0]).ToString().ToUpper();
                    EW2[i].EWORD1 = XML.Elements("row").ElementAt(i).Attribute("EWORD1").Value;


                    EW2[i].C1 = XML.Elements("row").ElementAt(i).Attribute("C1").Value;
                    EW2[i].C2 = XML.Elements("row").ElementAt(i).Attribute("C2").Value;
                    EW2[i].C3 = XML.Elements("row").ElementAt(i).Attribute("C3").Value;
                    EW2[i].C4 = XML.Elements("row").ElementAt(i).Attribute("C4").Value;
                    EW2[i].C5 = XML.Elements("row").ElementAt(i).Attribute("C5").Value;
                    EW2[i].C6 = XML.Elements("row").ElementAt(i).Attribute("C6").Value;
                    EW2[i].C7 = XML.Elements("row").ElementAt(i).Attribute("C7").Value;
                    EW2[i].C8 = XML.Elements("row").ElementAt(i).Attribute("C8").Value;


                }


                
                tDBHandler.EnglishWord.InsertAllOnSubmit(EW2);
                tDBHandler.SubmitChanges();
            }

        }

        private void ApplicationBarMenuItem_Click(object sender, EventArgs e)
        {
            CallPage.CallTaryPage(this);

        }

        private void ApplicationBarMenuItem_Click_1(object sender, EventArgs e)
        {
            NavigationService.Navigate(new Uri("/addSort.xaml", UriKind.Relative));
        }


        public void LoadSort(){
            
            var tSort = (from Sort in MainPage.tDBHandler.Sort
                         select Sort);



   
            int i = 1;


            BOX.Items.Clear();
            foreach (Sort R in tSort)
            {
                SortPanel AAA = new SortPanel(R.ID,i.ToString(),R.CNAME);
                AAA.Hold += new EventHandler<GestureEventArgs>(AAA_Hold);
                i++;

                BOX.Items.Add(AAA);
            }
        }

        void AAA_Hold(object sender, GestureEventArgs e)
        {
            SortPanel A = sender as SortPanel;

            MessageBoxResult m = MessageBox.Show("您是否要將＂" + A.msg + "＂刪除？", "系統", MessageBoxButton.OKCancel);
            if (m == MessageBoxResult.OK)
            {

                Sort tSortSingle = (from tSort in tDBHandler.Sort
                                 where tSort.ID == A.ID
                                 select tSort).First();

                tDBHandler.Sort.DeleteOnSubmit(tSortSingle);





                EnglishWord[] tEngSingle = (from tEng in MainPage.tDBHandler.EnglishWord
                                            where tEng.CTYPE == A.ID
                                            select tEng).ToArray();

                MainPage.tDBHandler.EnglishWord.DeleteAllOnSubmit(tEngSingle);


                tDBHandler.SubmitChanges();
                LoadSort();


                
            }
        }

        private void PhoneApplicationPage_Loaded(object sender, RoutedEventArgs e)
        {
            LoadSort();
        }

        private void button1_Click(object sender, RoutedEventArgs e)
        {

            if (BOX.SelectedIndex != -1)
            {
                Ptr = (BOX.Items[BOX.SelectedIndex] as SortPanel).ID;
                SortName = (BOX.Items[BOX.SelectedIndex] as SortPanel).Cname;
                
                

                NavigationService.Navigate(new Uri("/EnWord.xaml", UriKind.Relative));

            }
            else
            {
                MessageBox.Show("請選擇字庫!");
            }
        }
    }
}