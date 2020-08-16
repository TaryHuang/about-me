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
    public partial class Web : PhoneApplicationPage
    {
        public Web()
        {
            InitializeComponent();



            webBoard.Source = MainPage.URL;
        }
    }
}