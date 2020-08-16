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
using System.Globalization;
namespace English
{
    public partial class MainPage : PhoneApplicationPage
    {
        // 建構函式
        public static DBHandler tDBHandler = new DBHandler(DBHandler.DBConnection);



        public MainPage()
        {
            TARY_Library_Silverlight.ProdKey.Register(301);



            //將xml轉入linq資料中
            if (tDBHandler.DatabaseExists() == false)
            {

                tDBHandler.CreateDatabase();
                XElement XML;
                //載入XML＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊
                Uri uri = new Uri("DATA/V3.xml", UriKind.Relative);
                XML = XElement.Load(uri.ToString());
                //＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊載入XML
                
                //全部顯示 動詞三態轉入LINQ中
                EnglishWord[] EW = new EnglishWord[XML.Elements("row").Count()];
                for (int i = 0; i < XML.Elements("row").Count(); i++)
                {
                    EW[i] = new EnglishWord();
                    EW[i].Mylove = 0;//初始畫 代表沒有加入我的單題庫中
                    EW[i].DATE = DateTime.Now;
                    EW[i].CTYPE = XML.Elements("row").ElementAt(i).Attribute("CTYPE").Value;
                    EW[i].CWORD = XML.Elements("row").ElementAt(i).Attribute("CWORD").Value;
                    EW[i].EWORD0 = (XML.Elements("row").ElementAt(i).Attribute("EWORD1").Value[0]).ToString().ToUpper();
                    EW[i].EWORD1 = XML.Elements("row").ElementAt(i).Attribute("EWORD1").Value;
                    EW[i].EWORD2 = XML.Elements("row").ElementAt(i).Attribute("EWORD2").Value;
                    EW[i].EWORD3 = XML.Elements("row").ElementAt(i).Attribute("EWORD3").Value;
                }






                //載入XML＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊
                uri = new Uri("DATA/1000.xml", UriKind.Relative);
                XML = XElement.Load(uri.ToString());
                //＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊載入XML

                //全部顯示 單字1000字轉入LINQ中
                EnglishWord[] EW2 = new EnglishWord[XML.Elements("row").Count()];
                for (int i = 0; i < XML.Elements("row").Count(); i++)
                {
                    EW2[i] = new EnglishWord();
                    EW2[i].Mylove = 1;//初始畫 代表沒有加入我的單題庫中
                    EW2[i].CTYPE = "@";
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


                tDBHandler.EnglishWord.InsertAllOnSubmit(EW);
                tDBHandler.EnglishWord.InsertAllOnSubmit(EW2);
                tDBHandler.SubmitChanges();
                
            }


            //MessageBox.Show(tDBHandler.EnglishWord.Count().ToString());
            
            InitializeComponent();


        }

        private void EN_V3_Click(object sender, RoutedEventArgs e)
        {
            NavigationService.Navigate(new Uri("/EN_V3.xaml", UriKind.Relative));
        }

        private void EN_1000_Click(object sender, RoutedEventArgs e)
        {
            NavigationService.Navigate(new Uri("/EN_1000.xaml", UriKind.Relative));
        }

        private void MYWORD_Click(object sender, RoutedEventArgs e)
        {
            NavigationService.Navigate(new Uri("/EN_MYLOVE.xaml", UriKind.Relative));
        }

        private void button2_Click(object sender, RoutedEventArgs e)
        {
            CallPage.CallTaryPage(this);
        }


    }
}