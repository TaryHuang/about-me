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
    public class EngWordPanel :StackPanel
    {


            public string eng, engW;
            int ctype;

            public int ID;

            TextBlock W = new TextBlock();
            TextBlock E = new TextBlock();
            public EngWordPanel(int id, int CTYPE, string ENG, string ENGW, string S)
            {
                ID = id;
                eng = ENG;
                ctype = CTYPE;
                engW = ENGW;




                W.Text = engW;
                W.Margin = new Thickness(0, 0, 0, 40);
                W.FontSize = 32;
                W.Width = 470;
                W.TextWrapping = TextWrapping.Wrap;


                E.Text = eng;
                E.FontSize = 48;
                E.Width = 470;
                E.TextWrapping = TextWrapping.Wrap;

                this.Children.Add(E);
                this.Children.Add(W);
            }








        

    }
}
