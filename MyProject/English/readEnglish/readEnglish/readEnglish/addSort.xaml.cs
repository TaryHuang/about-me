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
namespace readEnglish
{
    public partial class addSort : PhoneApplicationPage
    {

        TextBoxR2 CNAME; 
        public addSort()
        {
            InitializeComponent();

            CNAME = new TextBoxR2(30,"請輸入名稱.. ","名 稱 : ");

            BOX.Children.Add(CNAME);


        }

        private void button1_Click(object sender, RoutedEventArgs e)
        {


            Sort S = new Sort();
            S.CNAME = CNAME.myText;
            S.Ctype = "";
            S.Num = "";
            MainPage.tDBHandler.Sort.InsertOnSubmit(S);
            MainPage.tDBHandler.SubmitChanges();

            
            NavigationService.GoBack();
        }
    }
}