﻿using System;
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
using TARY_Library_Silverlight.Photo;
using TARY_Library_Silverlight.Popup;
using System.Windows.Threading;


namespace filterMaster
{
    public partial class setContrast : PhoneApplicationPage
    {

        PhotoBoard Board;
        StackPanel Bar = new StackPanel();
        Slider BarL;
        double tempN;
        Button btnOk = new Button();
        DispatcherTimer dt;
        public setContrast()
        {
            InitializeComponent();
            Board  = new PhotoBoard(this);
            Board.Margin = new Thickness(0, 80, 0, 0);
            PHOTO.Children.Add(Board);





            BarL = new Slider();
            BarL.Value = 0;
            tempN = 0;
            BarL.Maximum = 4;
            //Bar.Foreground = new SolidColorBrush(Color.FromArgb(127,255,255,255));
            BarL.ValueChanged += new RoutedPropertyChangedEventHandler<double>(Bar_ValueChanged);


            dt = new DispatcherTimer();
            dt.Interval = TimeSpan.FromMilliseconds(120);
            dt.Tick += new EventHandler(dt_Tick);
            dt.Stop();
            Bar.Children.Add(BarL);


            Bar.VerticalAlignment = System.Windows.VerticalAlignment.Center;
            PHOTO.Children.Add(Bar);







            btnOk = new Button();
            btnOk.Content = "確定";
            btnOk.Width = 150;
            btnOk.FontSize = 32;
            btnOk.VerticalAlignment = System.Windows.VerticalAlignment.Top;
            btnOk.HorizontalAlignment = System.Windows.HorizontalAlignment.Right;
            btnOk.Click += new RoutedEventHandler(btnOk_Click);
            //btnOk.BorderBrush = myStyle.ButtonColor;
            //btnOk.Foreground = myStyle.ButtonColor;
            PHOTO.Children.Add(btnOk);
        }

        void btnOk_Click(object sender, RoutedEventArgs e)
        {
            show.Board.Source = this.Board.Source;

            this.NavigationService.GoBack();
        }


        void dt_Tick(object sender, EventArgs e)
        {



            double N = (BarL.Value)+1;
            Board.Contrast(N, N, N);




            
            dt.Stop();
        }



        void Bar_ValueChanged(object sender, RoutedPropertyChangedEventArgs<double> e)
        {
            dt.Stop();
            dt.Start();
        }




        private void PHOTO_Loaded(object sender, RoutedEventArgs e)
        {
            Board.Source = show.Board.Source;
        }

        private void PhoneApplicationPage_OrientationChanged(object sender, OrientationChangedEventArgs e)
        {
            if (this.Orientation == PageOrientation.PortraitDown || this.Orientation == PageOrientation.PortraitUp)
            {
                Board.Margin = new Thickness(0, 80, 0, 0);
            }
            else if (this.Orientation == PageOrientation.LandscapeLeft || this.Orientation == PageOrientation.LandscapeRight)
            {
                Board.Margin = new Thickness(0, 0, 0, 0);
            }
        }
    }
}