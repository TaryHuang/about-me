using System;
using System.Net;
using System.Windows;
using System.Windows.Controls;
using System.Windows.Documents;
using System.Windows.Ink;
using System.Windows.Input;
using System.Windows.Media;
using System.Windows.Media.Animation;
using System.Windows.Shapes;

namespace Stopwatch
{
    public class Box : StackPanel
    {
        int NO;
        string TimeStr;
        public Box(int no,string t1,string t2){

            NO = no;
            TimeStr = t1 + "'" + t2;

            this.Orientation = System.Windows.Controls.Orientation.Horizontal;
            this.Margin = new Thickness(0, 0, 0, 5);

            TextBlock S = new TextBlock();
            S.Width = 80;
            S.Text = NO.ToString() + ".";
            S.FontSize = 42;
            this.Children.Add(S);


            TextBlock M = new TextBlock();
            M.Text = TimeStr;
            M.FontSize = 42;
            this.Children.Add(M);
        }












        public Box(int no, string t1)
        {

            NO = no;
            TimeStr = t1;

            this.Orientation = System.Windows.Controls.Orientation.Horizontal;
            this.Margin = new Thickness(0, 0, 0, 5);

            TextBlock S = new TextBlock();
            S.Width = 80;
            S.Text = NO.ToString() + ".";
            S.FontSize = 48;
            this.Children.Add(S);


            TextBlock M = new TextBlock();
            M.Text = TimeStr;
            M.FontSize = 48;
            this.Children.Add(M);
        }



        public int No{
            get{
                return NO;
            }
        }


        public string Time
        {
            get
            {
                return TimeStr;
            }
        }
    }
}
