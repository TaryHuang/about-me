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

namespace English
{
    public partial class EN_V3 : PhoneApplicationPage
    {

        public static int Test_num = 0;
        public static int Test_type = 0;
        public EN_V3()
        {

            InitializeComponent();


            var tEnglishWord = from EnglishWord in MainPage.tDBHandler.EnglishWord
                               where EnglishWord.CTYPE == "AAA" ||
                                     EnglishWord.CTYPE == "ABA" ||
                                     EnglishWord.CTYPE == "ABB" ||
                                     EnglishWord.CTYPE == "ABC" 
                               orderby EnglishWord.EWORD1 ascending
                               select EnglishWord;

            V3[] EnglishV3 = new V3[tEnglishWord.Count()];
            int i = 0;
            foreach (EnglishWord TEMP in tEnglishWord)
            {
                EnglishV3[i] = new V3(TEMP.ID, TEMP.CWORD, TEMP.EWORD1, TEMP.EWORD2, TEMP.EWORD3);

                if (TEMP.CTYPE == "AAA")
                {
                    listBox_AAA.Items.Add(EnglishV3[i]);
                }
                else if (TEMP.CTYPE == "ABA")
                {
                    listBox_ABA.Items.Add(EnglishV3[i]);
                }
                else if (TEMP.CTYPE == "ABB")
                {
                    listBox_ABB.Items.Add(EnglishV3[i]);
                }
                else if (TEMP.CTYPE == "ABC")
                {
                    listBox_ABC.Items.Add(EnglishV3[i]);
                }
                i++;
            }//foreach end

            TITLE.Text = "動詞三態";

            T_AAA.Text = "AAA";
            T_ABA.Text = "ABA";
            T_ABB.Text = "ABB";
            T_ABC.Text = "ABC";


        }

        private void PhoneApplicationPage_Loaded(object sender, RoutedEventArgs e)
        {

            //.Header = AAA.Name;
            //ABA.Header = ABA.Name;
            //ABB.Header = ABB.Name;
            //ABC.Header = ABC.Name;

        }


        private void btnA_20_Click(object sender, EventArgs e)
        {
            Test_num = 20;
            NavigationService.Navigate(new Uri("/TEST_V3_A.xaml", UriKind.Relative));
        }
        private void btnA_50_Click(object sender, EventArgs e)
        {
            Test_num = 50;
            NavigationService.Navigate(new Uri("/TEST_V3_A.xaml", UriKind.Relative));
        }
        private void btnA_80_Click(object sender, EventArgs e)
        {
            Test_num = 80;
            NavigationService.Navigate(new Uri("/TEST_V3_A.xaml", UriKind.Relative));
        }


        private void btnB_20_Click(object sender, EventArgs e)
        {
            Test_num = 20;
            NavigationService.Navigate(new Uri("/TEST_V3_B.xaml", UriKind.Relative));

        }

        private void btnB_50_Click(object sender, EventArgs e)
        {
            Test_num = 50;
            NavigationService.Navigate(new Uri("/TEST_V3_B.xaml", UriKind.Relative));
        }


        private void btnB_80_Click(object sender, EventArgs e)
        {
            Test_num = 80;
            NavigationService.Navigate(new Uri("/TEST_V3_B.xaml", UriKind.Relative));
        }

        private void btnC_20_Click(object sender, EventArgs e)
        {
            Test_num = 20;
            Test_type = 0;
            NavigationService.Navigate(new Uri("/TEST_V3_C.xaml", UriKind.Relative));
        }

        private void btnC_50_Click(object sender, EventArgs e)
        {
            Test_num = 50;
            Test_type = 0;
            NavigationService.Navigate(new Uri("/TEST_V3_C.xaml", UriKind.Relative));
        }

        private void btnC_80_Click(object sender, EventArgs e)
        {
            Test_num = 80;
            Test_type = 0;
            NavigationService.Navigate(new Uri("/TEST_V3_C.xaml", UriKind.Relative));
        }

        private void btnD_20_Click(object sender, EventArgs e)
        {
            Test_num = 20;
            Test_type = 1;
            NavigationService.Navigate(new Uri("/TEST_V3_C.xaml", UriKind.Relative));
 
        }

        private void btnD_50_Click(object sender, EventArgs e)
        {
            Test_num = 50;
            Test_type = 1;
            NavigationService.Navigate(new Uri("/TEST_V3_C.xaml", UriKind.Relative));
 
        }

        private void btnD_80_Click(object sender, EventArgs e)
        {
            Test_num = 80;
            Test_type = 1;
            NavigationService.Navigate(new Uri("/TEST_V3_C.xaml", UriKind.Relative));
 
        }


        private void btnE_20_Click(object sender, EventArgs e)
        {
            Test_num = 20;
            Test_type = 2;
            NavigationService.Navigate(new Uri("/TEST_V3_C.xaml", UriKind.Relative));

        }

        private void btnE_50_Click(object sender, EventArgs e)
        {
            Test_num = 50;
            Test_type = 2;
            NavigationService.Navigate(new Uri("/TEST_V3_C.xaml", UriKind.Relative));

        }

        private void btnE_80_Click(object sender, EventArgs e)
        {
            Test_num = 80;
            Test_type = 2;
            NavigationService.Navigate(new Uri("/TEST_V3_C.xaml", UriKind.Relative));

        }
    }
}