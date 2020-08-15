using System;
using System.Windows.Controls;
using TARY_Library;
using System.Windows;
using System.Windows.Navigation;
namespace hero
{
    public class STOP : StackPanel
    {
        //遊戲關卡及能力值選單

        Button BTN_GOBACK, BTN_EXIT; 

        public STOP()
        {
            BTN_GOBACK = new Button();
            BTN_GOBACK.Content = LanguageData.STOP_BACK;
            BTN_GOBACK.FontSize = 36;
            BTN_GOBACK.BorderThickness = new Thickness(0, 0, 0, 0);
            BTN_GOBACK.Click += new RoutedEventHandler(BTN_GOBACK_Click);
            BTN_EXIT = new Button();
            BTN_EXIT.FontSize = 36;
            BTN_EXIT.BorderThickness = new Thickness(0, 0, 0, 0);
            BTN_EXIT.Click +=new RoutedEventHandler(BTN_EXIT_Click);
            BTN_EXIT.Content = LanguageData.STOP_EXIT;


            this.Children.Add(BTN_GOBACK);
            this.Children.Add(BTN_EXIT);
        }




        private void BTN_GOBACK_Click(object sender, RoutedEventArgs e)
        {
            GamePage.LOCAL = GamePage.LOCAL2;
        }



        private void BTN_EXIT_Click(object sender, RoutedEventArgs e)
        {

            GamePage.LOCAL = "離開遊戲";
        }


        
    }
}
