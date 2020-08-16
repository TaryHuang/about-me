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
using TARY_Library_Silverlight.Photo;
using System.IO;
using System.Windows.Media.Imaging;
using System.Diagnostics;
using Microsoft.Xna.Framework.Media;
namespace filterMaster
{
    public partial class show : PhoneApplicationPage
    {
        public static PhotoBoard Board;
        public static MemoryStream Sendms;
        public show()
        {
            InitializeComponent();

            Board = new PhotoBoard(this, 480, 730);
            PHOTO.Children.Add(Board);
            Board.Source = MainPage.Bimg;
        }

        private void PhoneApplicationPage_Loaded(object sender, RoutedEventArgs e)
        {
            
        }

        private void ApplicationBarIconButton_Click(object sender, EventArgs e)
        {
            //轉向
            Board.Turn();
        }

        private void ApplicationBarIconButton_Click_1(object sender, EventArgs e)
        {
            //還原
            Board.Reload();
        }

        private void ApplicationBarMenuItem_Click(object sender, EventArgs e)
        {
            WriteableBitmap WBimg = new WriteableBitmap(Board.Source);


            Sendms = new MemoryStream();

            WBimg.SaveJpeg(Sendms, WBimg.PixelWidth, WBimg.PixelHeight, 0, 100);
            Sendms.Seek(0, SeekOrigin.Begin);

            NavigationService.Navigate(new Uri("/Pages/FacebookLoginPage.xaml", UriKind.Relative));
            
        }

        private void ApplicationBarMenuItem_Click_1(object sender, EventArgs e)
        {
            //直接儲存
            //儲存檔案
            try
            {



                MediaLibrary MLib = new MediaLibrary();
                WriteableBitmap SaveImage = new WriteableBitmap(Board.Source);


                MemoryStream ms = new MemoryStream();
                SaveImage.SaveJpeg(ms, SaveImage.PixelWidth, SaveImage.PixelHeight, 0, 100);
                ms.Seek(0, SeekOrigin.Begin);
                MediaLibrary l = new MediaLibrary();
                l.SavePicture("M_" + DateTime.Now.ToString("yyyyMMdd"), ms);
                l.Dispose();
                ms.Dispose();
                ms.Close();
                MessageBox.Show("已儲存檔案!");
            }
            catch
            {
                MessageBox.Show("很抱歉,儲存失敗!");
            }


        }

        private void M_LIGHT_Click(object sender, EventArgs e)
        {
            NavigationService.Navigate(new Uri("/setLight.xaml", UriKind.Relative));

        }

        private void M_Contrast_Click(object sender, EventArgs e)
        {
            NavigationService.Navigate(new Uri("/setContrast.xaml", UriKind.Relative));

        }

        private void M_RGB_Click(object sender, EventArgs e)
        {
            NavigationService.Navigate(new Uri("/setRgb.xaml", UriKind.Relative));

        }

        private void M_COLOR_Click(object sender, EventArgs e)
        {
            NavigationService.Navigate(new Uri("/setStyle.xaml", UriKind.Relative));

        }

        private void M_MASK_Click(object sender, EventArgs e)
        {
            NavigationService.Navigate(new Uri("/MASK.xaml", UriKind.Relative));
        }
    }
}