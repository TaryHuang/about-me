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


namespace ProverbEN
{




    public class showBody :StackPanel
    {
        public string title;//諺語
        public string word;//解釋
        TextBlock Ttitle, Tword;
        public showBody(string TITLE, string WORD)
        {
            title = TITLE;
            word = WORD;




            Ttitle = new TextBlock();
            Ttitle.Text = title;
            Ttitle.TextWrapping = TextWrapping.Wrap;
            Ttitle.FontSize = 40;
            Ttitle.Margin = new Thickness(0, 0, 0, 5);
            this.Children.Add(Ttitle);

            Tword = new TextBlock();
            Tword.Text = "[解釋] "+word;
            Tword.TextWrapping = TextWrapping.Wrap;
            Tword.FontSize = 28;
            Tword.Margin = new Thickness(0, 0, 0, 50);
            this.Children.Add(Tword);


        }
    }
}
