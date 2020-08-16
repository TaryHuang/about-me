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
using System.Windows.Threading;
using TARY_Library_Silverlight;
using Microsoft.Phone.Shell;
namespace Stopwatch
{
    public partial class MainPage : PhoneApplicationPage
    {
        // 建構函式
        DateTime TimeV;//現在時間
        int NO = 1;
        List<long> TimeDiff=new List<long>();//停下來時的時間差
        DateTime TimeStart, TimeStop, showTime;
        public static DBHandler tDBHandler = new DBHandler(DBHandler.DBConnection);

        DispatcherTimer dt = new DispatcherTimer();


        bool Zero = true;


        public MainPage()
        {
            
            InitializeComponent();



            if (tDBHandler.DatabaseExists() == false)
            {
                tDBHandler.CreateDatabase();
                tDBHandler.SubmitChanges();
            }









            dt.Interval = TimeSpan.FromMilliseconds(1);
            dt.Tick += new EventHandler(dt_Tick);
            dt.Stop();


            show();
        }



        private void dt_Tick(object sender, EventArgs e)
        {
            setTimer();
        }



        void setTimer()
        {
            TimeV = DateTime.Now;
            showTime = new DateTime(TimeV.Ticks - TimeStart.Ticks);


            for (int i = 0; i < TimeDiff.Count;i++ )
            {
                showTime = new DateTime(showTime.Ticks - TimeDiff[i]);
            }

            show();
        }



        void show(){

            timer1.Text = toNumber(2, showTime.Hour) + ":" + toNumber(2, showTime.Minute) + ":" + toNumber(2, showTime.Second);

            timer2.Text = toNumber(3, showTime.Millisecond);
        }


        private void Start_Click(object sender, RoutedEventArgs e)
        {


            if (dt.IsEnabled)
            {
                TimeStop = DateTime.Now;

                dt.Stop();
                Start.Content = "Start";

            }
            else
            {
                if (Zero)
                {

                    TimeStart = DateTime.Now;
                    TimeDiff.Clear();

                    Zero = false;
                }
                else
                {

                    TimeDiff.Add(DateTime.Now.Ticks - TimeStop.Ticks);

  
                }


                dt.Start();
                Start.Content = "Stop";

            }
           
        }

        private void reset_Click(object sender, RoutedEventArgs e)
        {

            dt.Stop();
            Start.Content = "Start";
            showTime = new DateTime(0);
            listBox1.Items.Clear();
            NO = 1;
            Zero = true;

            show();
        }









        string toNumber(int K,int num)
        {
            if(K==2){
                if (num <= 9)
                {
                    return "0" + num.ToString();
                }
                else
                {
                    return num.ToString();
                }
            }
            else if (K == 3)
            {
                if (num <= 9)
                {
                    return "00" + num.ToString();
                }
                else if (num >= 10 && num <= 99)
                {
                    return "0" + num.ToString();
                }
                else
                {
                    return num.ToString();
                }
            }

            return num.ToString();
        }

        private void Cbtn_Click(object sender, RoutedEventArgs e)
        {


            Box W = new Box(NO, timer1.Text, timer2.Text);


            listBox1.Items.Add(W);
            NO++;

            listBox1.SelectedIndex = listBox1.Items.Count-1 ;
        }

        private void ApplicationBarMenuItem_Click(object sender, EventArgs e)
        {
            TARY_Library_Silverlight.CallPage.CallTaryPage(this);
        }



        private void ApplicationBarIconButton_Click(object sender, EventArgs e)
        {
            //存檔
            //****************************************************
            //MTABLE
            MTABLE m = new MTABLE();
            m.DATE =DateTime.Now.ToString("yyyy/MM/dd HH:mm");
            tDBHandler.MTABLE.InsertOnSubmit(m);
            tDBHandler.SubmitChanges();



            int MERI = (from t in MainPage.tDBHandler.MTABLE
                         orderby t.ID descending
                        select t.ID).First();



            for (int i = 0; i < listBox1.Items.Count;i++ )
            {
                Box B = (Box)(listBox1.Items[i]);

                DTABLE D = new DTABLE();
                D.Masteri = MERI;
                D.N = B.No;
                D.CWORD = B.Time;

                tDBHandler.DTABLE.InsertOnSubmit(D);
            }
            tDBHandler.SubmitChanges();

            //****************************************************

            for (int j = 1; j < 99; j++)
            {
                ShellTile TileToFind = ShellTile.ActiveTiles.FirstOrDefault(x => x.NavigationUri.ToString().Contains("DefaultTitle=@" + j + "@"));

                if (TileToFind == null)
                {


                    //****************************************************


                    StandardTileData NewTileData = new StandardTileData
                    {
                        Title = m.DATE,
                        Count = 0

                    };

                    NewTileData.BackgroundImage = new Uri("v1.png", UriKind.Relative);
                    //*************************************************************


                    ShellTile.Create(new Uri("/ShowRecord.xaml?DefaultTitle=@" + j + "@&ERI="+MERI.ToString(), UriKind.Relative), NewTileData);

                    return;

                }//if end
            }//FOR
        }
    }
}