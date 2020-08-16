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
using System.IO;
using System.Windows.Media.Imaging;
using Microsoft.Phone.Tasks;
using System.IO.IsolatedStorage;
namespace filterMaster
{
    public partial class MainPage : PhoneApplicationPage
    {
        // 建構函式
        public static BitmapImage Bimg;//原始圖

        PhotoChooserTask photoChooserTask = new PhotoChooserTask();
        public static DBHandler tDBHandler = new DBHandler(DBHandler.DBConnection);

        bool Ctype = false;
        public MainPage()
        {
            if (tDBHandler.DatabaseExists() == false)
            {

                tDBHandler.CreateDatabase();
                tDBHandler.SubmitChanges();
            }



            InitializeComponent();


            photoChooserTask.Completed += PhotoChooserTaskCompleted;
        }

        private void button1_Click(object sender, RoutedEventArgs e)
        {
            Ctype = true;
            photoChooserTask.Show();
        }







        void PhotoChooserTaskCompleted(object sender, PhotoResult e)
        {

            switch (e.TaskResult)
            {
                case TaskResult.OK:
                    Bimg = new BitmapImage(new Uri(e.OriginalFileName));

                    image1.Source = Bimg;
                    break;

                //**********************************************
                //2013.06.07  為了修改 連續按兩下執行PhotoChooserTaskCompleted 使app跳出程式
                default:
                    BitmapImage bbb = new BitmapImage(new Uri("/PhotoJ;component/Images/BG1.png"));
                    //image2.Source = bbb; 
                    break;
                //**********************************************
            }



        }

        private void image1_ImageOpened(object sender, RoutedEventArgs e)
        {

            if(Ctype){
                NavigationService.Navigate(new Uri("/show.xaml", UriKind.Relative));
            }else{
                
            }
        }

        private void button2_Click(object sender, RoutedEventArgs e)
        {

            NavigationService.Navigate(new Uri("/pin.xaml", UriKind.Relative));
        }

        private void button3_Click(object sender, RoutedEventArgs e)
        {
            TARY_Library_Silverlight.CallPage.CallTaryPage(this);
            
        }


    }
}