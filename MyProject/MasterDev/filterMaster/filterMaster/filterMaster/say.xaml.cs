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
using System.Windows.Media.Imaging;
namespace filterMaster
{
    public partial class say : PhoneApplicationPage
    {
        BitmapImage F;

        public say()
        {
            InitializeComponent();
        }


        
        private void PhoneApplicationPage_Loaded(object sender, RoutedEventArgs e)
        {

            






            try
            {
                int ID = Convert.ToInt32(NavigationContext.QueryString["ID"]);


                MTable MMM = (from table in MainPage.tDBHandler.MTable
                       where table.ID == ID
                       select table).First();

                body.Text = MMM.TEXT;

            }
            catch
            {
                body.Text = "載入失敗..";
            }
        }
    }
}