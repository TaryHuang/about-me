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
namespace ProverbEN
{
    public partial class EveryDayPro : PhoneApplicationPage
    {


        ButtonDate myDate;
        int Day;
        public EveryDayPro()
        {
            InitializeComponent();

            myDate = new ButtonDate(this, DateTime.Now);
            myDate.FontSize = 32;
            myDate.BorderThickness = new Thickness(0, 0, 0, 0);
            myDate.Loaded += new RoutedEventHandler(myDate_Loaded);


            bottom.Children.Add(myDate);
        }



        void UPDATE(){
            ProverbDb temp = (from TTT in MainPage.tDBHandler.ProverbDb
                              where TTT.ID == Day
                              select TTT).First();



            title.Text = temp.CWORD+"\n\n[解釋] "+temp.DWORD;
            //body.Text = 
        }
        void myDate_Loaded(object sender, RoutedEventArgs e)
        {
            Day = myDate.Date.DayOfYear % MainPage.tDBHandler.ProverbDb.Count()+1;

            UPDATE();
        }

        private void ApplicationBarMenuItem_Click(object sender, EventArgs e)
        {
            try
            {



                Pages.FacebookLoginPage.ShowWord = title.Text;

                //將話語上傳至facebook...
                NavigationService.Navigate(new Uri("/Pages/facebookLoginPage.xaml", UriKind.Relative));

            }
            catch
            {
                
            }
        }
    }
}