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

namespace English
{
    public class V3 : StackPanel
    {
        TextBlock SHOW_CWORD;
        public TextBlock SHOW_EWORD1;
        TextBlock SHOW_DATE;
        public TextBlock SHOW_INDB;
        public CheckBox SHOW_checkbox;

        StackPanel body;
        public int DbMylove, MYLOVE;//前者為資料庫的,後者為目前可更動的
        public bool UpdateData = false;//判斷是否需要回傳回資料庫修改資料
        //當Mylove=DbMylove 就無需更動資料庫 故將isUpdateData=true;


        int ID;//在資料庫中的唯一值編號


        public V3(int id, string cword, string eword1, string eword2, string eword3)
        {
            ID = id;


            //增加英文單字原型
            SHOW_EWORD1 = new TextBlock();
            SHOW_EWORD1.FontSize = 32;
            SHOW_EWORD1.TextWrapping = TextWrapping.Wrap;
            SHOW_EWORD1.Text = "原型："+eword1 + "\n過去：" + eword2 + "\n過去分詞：" + eword3;
            this.Children.Add(SHOW_EWORD1);

            //增加中文
            SHOW_CWORD = new TextBlock();
            SHOW_CWORD.FontSize = 40;
            SHOW_CWORD.TextWrapping = TextWrapping.Wrap;
            SHOW_CWORD.Text = cword + "\n";
            this.Children.Add(SHOW_CWORD); 


        }



        public V3(int id, string cword, string eword1, int mylove)
        {
            ID = id;
            DbMylove = mylove;
            MYLOVE = mylove;

            body = new StackPanel();
            body.Orientation = Orientation.Horizontal;

            SHOW_checkbox = new CheckBox();
            if (MYLOVE == 1)
            {
                SHOW_checkbox.IsChecked = true;//已加入至最愛      
            }

            SHOW_checkbox.Click += new RoutedEventHandler(SHOW_checkbox_Click);
            SHOW_checkbox.Visibility = System.Windows.Visibility.Collapsed;






            //增加英文單字原型
            SHOW_EWORD1 = new TextBlock();
            SHOW_EWORD1.FontSize = 32;
            SHOW_EWORD1.TextWrapping = TextWrapping.Wrap;
            SHOW_EWORD1.Text = eword1;


            //增加中文（已入庫）
            SHOW_INDB = new TextBlock();
            SHOW_INDB.FontSize = 18;
            SHOW_INDB.TextWrapping = TextWrapping.Wrap;
            SHOW_INDB.Text = "  (已入庫)";
            if (MYLOVE == 0)
            {
                SHOW_INDB.Visibility = System.Windows.Visibility.Collapsed;
            }



            body.Children.Add(SHOW_checkbox);
            body.Children.Add(SHOW_EWORD1);
            body.Children.Add(SHOW_INDB);
            //-----------------------------------------------------





            //增加中文
            SHOW_CWORD = new TextBlock();
            SHOW_CWORD.FontSize = 36;
            SHOW_CWORD.TextWrapping = TextWrapping.Wrap;
            SHOW_CWORD.Text = cword + "\n";
            




            this.Children.Add(body);
            this.Children.Add(SHOW_CWORD);


        }















        public void ACTION()
        {

            if (SHOW_checkbox.IsChecked == true)
            {
                MYLOVE = 1;
            }
            else
            {
                MYLOVE = 0;
            }


            //判定此選取是否需要異動資料庫
            if (MYLOVE == DbMylove)
            {
                UpdateData = false;//目前選取與資料庫一樣
            }
            else
            {
                UpdateData = true;//代表此資筆資料  需要異動到資料庫
            }
        }
        private void SHOW_checkbox_Click(object sender, RoutedEventArgs e)
        {
            ACTION();
        }

        

        public int getID()
        {
            return ID;
        }



        public V3(int id, string cword, string eword1,DateTime DATE)
        {
            //＊＊我的題庫＊＊
            ID = id;


            body = new StackPanel();
            body.Orientation = Orientation.Horizontal;

            SHOW_checkbox = new CheckBox();
            SHOW_checkbox.Click += new RoutedEventHandler(SHOW_checkbox_Click);
            SHOW_checkbox.Visibility = System.Windows.Visibility.Collapsed;




            //增加英文單字原型
            SHOW_EWORD1 = new TextBlock();
            SHOW_EWORD1.FontSize = 32;
            SHOW_EWORD1.TextWrapping = TextWrapping.Wrap;
            SHOW_EWORD1.Text = eword1;
            body.Children.Add(SHOW_checkbox);
            body.Children.Add(SHOW_EWORD1);
            this.Children.Add(body);




            //增加中文
            SHOW_CWORD = new TextBlock();
            SHOW_CWORD.FontSize = 36;
            SHOW_CWORD.TextWrapping = TextWrapping.Wrap;
            SHOW_CWORD.Text = cword;
            this.Children.Add(SHOW_CWORD);
            //-----------------------------------------------------
            



            //增加入庫日期
            SHOW_DATE = new TextBlock();
            SHOW_DATE.FontSize = 18;
            SHOW_DATE.Text = "入庫日期："+DATE.ToString("yyyy/MM/dd") + "\n";
            this.Children.Add(SHOW_DATE);
        }
    }
}
