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

namespace toNight
{
    public partial class MainPage : PhoneApplicationPage
    {

        List<Obj> O = new List<Obj>();

        public static Uri URL;
        void Init()
        {
            Obj o1 = new Obj("台中麗寶樂園", "https://googledrive.com/host/0B27F6jEWvL5TMnlxVWZvVlhDTzA/A1.html");
            O.Add(o1);



            Obj o2 = new Obj("台北大稻埕", "https://googledrive.com/host/0B27F6jEWvL5TMnlxVWZvVlhDTzA/A2.html");
            O.Add(o2);


            Obj o3 = new Obj("台北中和烘爐地", "https://googledrive.com/host/0B27F6jEWvL5TMnlxVWZvVlhDTzA/A3.html");
            O.Add(o3);


            Obj o4 = new Obj("高雄金鑽凱旋夜市", "https://googledrive.com/host/0B27F6jEWvL5TMnlxVWZvVlhDTzA/A4.html");
            O.Add(o4);


            Obj o5 = new Obj("台北木柵貓空站", "https://googledrive.com/host/0B27F6jEWvL5TMnlxVWZvVlhDTzA/A5.html");
            O.Add(o5);



            Obj o6 = new Obj("桃園中壢夜市", "https://googledrive.com/host/0B27F6jEWvL5TMnlxVWZvVlhDTzA/A6.html");
            O.Add(o6);



            Obj o7 = new Obj("新北市歡樂耶誕誠", "https://googledrive.com/host/0B27F6jEWvL5TMnlxVWZvVlhDTzA/A7.html");
            O.Add(o7);

            Obj o8 = new Obj("台北淡水", "https://googledrive.com/host/0B27F6jEWvL5TMnlxVWZvVlhDTzA/A8.html");
            O.Add(o8);
        }
        public MainPage()
        {
            InitializeComponent();




            Init();


            for (int i = 0; i < O.Count; i++)
            {
                Button btn = new Button();
                btn.FontSize = 32;
                btn.BorderThickness = new Thickness(0, 0, 0, 0);
                btn.Name = i.ToString();
                btn.Content = O[i].Title;
                btn.Click += new RoutedEventHandler(btn_Click);
                box.Items.Add(btn);
            }
        }

        void btn_Click(object sender, RoutedEventArgs e)
        {
            Button btn = sender as Button;
            MainPage.URL = O[Convert.ToInt32(btn.Name)].URI;

            NavigationService.Navigate(new Uri("/Web.xaml", UriKind.Relative));
        }
    }






    class Obj{
        public string Title;
        public Uri URI;

        public Obj(string t,string u)
        {
            Title = t;
            URI = new Uri(u);
        }
    }
}