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

namespace readEnglish
{
    public class SortPanel :StackPanel
    {



        public int ID;
        public string msg;
        public string Cname;
        TextBlock W = new TextBlock();
        public SortPanel(int id, string N, string cname)
        {
            ID = id;
            Cname = cname;



            msg = N + ". " + cname;
            W.Text = msg;
            W.Margin = new Thickness(0, 0, 0, 25);
            W.FontSize = 40;
            W.TextWrapping = TextWrapping.Wrap;

            this.Children.Add(W);
        }

    



    }
}
