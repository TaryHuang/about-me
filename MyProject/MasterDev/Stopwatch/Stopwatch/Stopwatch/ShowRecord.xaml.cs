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

namespace Stopwatch
{
    public partial class ShowRecord : PhoneApplicationPage
    {
        public ShowRecord()
        {
            InitializeComponent();


                
        }

        private void PhoneApplicationPage_Loaded(object sender, RoutedEventArgs e)
        {

            try
            {



                string ERI = NavigationContext.QueryString["ERI"];






                MTABLE m = (from t in MainPage.tDBHandler.MTABLE
                            where t.ID == Convert.ToInt32(ERI)
                            select t).First();

                textBlock1.Text = m.DATE;



                DTABLE[] D = (from t in MainPage.tDBHandler.DTABLE
                              where t.Masteri == Convert.ToInt32(ERI)
                              orderby t.N
                              select t).ToArray();



                for (int i = 0; i < D.Count(); i++)
                {
                    Box B = new Box(D[i].N, D[i].CWORD);

                    listBox1.Items.Add(B);
                }

            }
            catch
            {

            }
        }
    }
}