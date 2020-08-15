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

namespace hero
{
    public partial class myScore : PhoneApplicationPage
    {
        public myScore()
        {
            InitializeComponent();

            DBHandler tDBHandler = new DBHandler(DBHandler.DBConnection);
            var tContacts = from Contacts_Score in tDBHandler.Contacts_Score
                            orderby Contacts_Score.Datetime descending
                            select Contacts_Score;


            foreach (Contacts_Score Data in tContacts)
            {
                listBox2.Items.Add(new myGrid(Data.Datetime,Data.Lv, Data.Score));
            }




            var tContacts2 = (from Contacts_Score in tDBHandler.Contacts_Score
                            orderby Contacts_Score.Score descending
                            select Contacts_Score).Take(10);

            int n = 1;
            foreach (Contacts_Score Data in tContacts2)
            {
                listBox1.Items.Add(new myGrid(n, Data.Score));
                n++;
            }
            //MessageBox.Show(tContacts.Count().ToString());
        }


        class myGrid : Grid
        {
            TextBlock Cscore, Title;


            public myGrid(int lv, int score)
            {
                this.Width = 360;

                Cscore = new TextBlock();
                Cscore.FontSize = 30;
                Cscore.Text = score.ToString();
                Cscore.TextAlignment = TextAlignment.Right;

                Title = new TextBlock();
                Title.FontSize = 30;
                Title.Text ="     第 "+lv.ToString()+" 名";



                this.Children.Add(Title);
                this.Children.Add(Cscore);

            }

            public myGrid(DateTime date, int lv, int score)
            {
                this.Width = 407;

                Cscore = new TextBlock();
                Cscore.FontSize = 24;
                Cscore.Text = score.ToString();
                Cscore.TextAlignment = TextAlignment.Right;

                Title = new TextBlock();
                Title.FontSize = 24;
                Title.Text = date.ToString("yyyy/MM/dd HH:mm") + "     ";
                if(lv==23)
                    Title.Text +=" 破關";
                else
                    Title.Text += "Lv " + lv.ToString();
                

                this.Children.Add(Title);
                this.Children.Add(Cscore);

            }
        }
    }
}