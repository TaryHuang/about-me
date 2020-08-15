using System;
using System.Collections.Generic;
using System.Linq;
using System.IO;
using System.Windows;
using System.Windows.Controls;
using System.Windows.Documents;
using System.Windows.Input;
using System.Windows.Media;
using System.Windows.Media.Animation;
using System.Windows.Shapes;
using Microsoft.Phone.Controls;
using System.Xml.Serialization;
using TARY_Library_Silverlight;
namespace hero
{
    public partial class MainPage : PhoneApplicationPage
    {
        // 建構函式
        DBHandler tDBHandler;

        public MainPage()
        {
            TARY_Library_Silverlight.ProdKey.Register(101);//產品序號


            InitializeComponent();
            tDBHandler = new DBHandler(DBHandler.DBConnection);
            if (tDBHandler.DatabaseExists() == false)
            {
                tDBHandler.CreateDatabase();
               
                Contacts A = new Contacts();
                A.CNAME = "HERO";
                A.XML = null;
                tDBHandler.Contacts.InsertOnSubmit(A);
                tDBHandler.SubmitChanges();
            }

            isload();
        }


        //判斷是否可以讀資料
        bool isload(){


            tDBHandler = new DBHandler(DBHandler.DBConnection);
            var tContacts = from Contacts in tDBHandler.Contacts
                            where Contacts.XML != null &&  Contacts.CNAME == "HERO"
                            select Contacts;

            if (tContacts.Count() == 0)
            {
                //無紀錄
                btn_load.Foreground =new SolidColorBrush(Color.FromArgb(255, 39, 33, 33));
                return false;
            }
            else
            {
                //有紀錄
                btn_load.Foreground = new SolidColorBrush(Color.FromArgb(255, 255, 255, 255));
                return true;
            }
        }



        // 簡單按鈕，按一下事件處理常式，把我們帶到第二頁
        private void NEWGAME(object sender, RoutedEventArgs e)
        {
            if (isload())
            {
                MessageBoxResult m = MessageBox.Show(LanguageData.MENU_MSGC, LanguageData.MENU_MSG, MessageBoxButton.OKCancel);
                if (m == MessageBoxResult.OK)
                {
                    MENU_DEAD.DelRecord();//將紀錄給刪除 避免有人直接關手機 然後再破一次

                }
                else
                {
                    return;
                }
            }


                GamePage.LOCAL = "新遊戲";
                NavigationService.Navigate(new Uri("/GamePage.xaml", UriKind.Relative));
        }






        private void LOADGAME(object sender, RoutedEventArgs e)
        {
            if (!isload())
            {
                return;
            }
            tDBHandler = new DBHandler(DBHandler.DBConnection);
            var tContacts = from Contacts in tDBHandler.Contacts
                            where  Contacts.CNAME == "HERO"
                            select Contacts;
            Contacts DATA = tContacts.First();
            //-----------------------------------------
            Byte[] by = DATA.XML;
            

            /*
            string str1="";
            for (int i = 0; i < by.Count();i++ )
            {
                str1 += (char)by[i];
            }

            MessageBox.Show(by.Count().ToString());
            MessageBox.Show(str1);

            return;
            */

            MemoryStream ms = new MemoryStream();
            ms.Write(by, 0, by.Count());
            ms.Position = 0;
            myHERO S = (myHERO)Deserialize(ms, typeof(myHERO));
            ms.Close();
            S.Read();


            GamePage.tR_MENU = true;
            GamePage.LOCAL = "選單";

            NavigationService.Navigate(new Uri("/GamePage.xaml", UriKind.Relative));
        }

        public static object Deserialize(Stream streamObject, Type serializedObjectType)
        {
            if (serializedObjectType == null || streamObject == null)
                return null;

            XmlSerializer serializer = new XmlSerializer(serializedObjectType);
            return serializer.Deserialize(streamObject);
        }

        private void PhoneApplicationPage_Loaded(object sender, RoutedEventArgs e)
        {
            isload();
        }




        private void Button_Click(object sender, RoutedEventArgs e)
        {
            NavigationService.Navigate(new Uri("/GameTeach.xaml", UriKind.Relative));
        }

        private void Button_Click_1(object sender, RoutedEventArgs e)
        {
            NavigationService.Navigate(new Uri("/myScore.xaml", UriKind.Relative));
        }

        private void Button_Click_2(object sender, RoutedEventArgs e)
        {
            TARY_Library_Silverlight.CallPage.CallTaryPage(this);
        }
    }
}