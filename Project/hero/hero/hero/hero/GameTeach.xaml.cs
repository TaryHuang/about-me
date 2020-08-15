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
    public partial class GameTeach : PhoneApplicationPage
    {
        System.Windows.Threading.DispatcherTimer mytime= new System.Windows.Threading.DispatcherTimer();
        int A_ptr = 0;
        string[] A_array = { "teach_a2", "teach_a1", "teach_a2", "teach_a3" };

        public GameTeach()
        {
            InitializeComponent();

            mytime.Interval = new TimeSpan(0, 0, 0, 0, 1000);
            mytime.Start();
            mytime.Tick += new EventHandler(mytime_Tick);



            A_DESC.Text = "說明：\n\t請將手機傾斜，即可讓戰機左右移動，而傾斜的程度也將影響戰機移動的速度。";


            B_DESC.Text = "說明：\n\t若畫面出現寶物，您可以前後搖晃使得寶物往下掉，接著讓戰機去觸碰寶物，即可獲得此寶物；搖晃越多次寶物掉下來的速度將越快。";

            C_DESC.Text = "說明：\n\t遊戲下方的左右兩邊各有一個灰色的按鈕，左邊按鈕為黃球發射，右邊按鈕為藍球發射，當擊中敵人時，黃球比藍球的攻擊損傷多2且移動速度較快；您也可以選擇同時發射藍球與黃球，則球的數量也相對減少。";


            D_DESC.Text = "說明：\n\t當戰機被敵人的子彈火球擊中時，戰機有機率發出藍色的光芒，並啟動防禦機制在短時間內不受敵人的攻擊，防禦時間和光芒出現的機率與戰機所點的能力值＂抵擋及移動＂有關係。";

            E_DESC.Text = "說明：\n\t收集的星星越多則戰機所發射的武器、能力值、得分數將會增加，而當戰機被敵人子彈火球擊中損血中時，戰機有機率掉一枚勳章，而戰機若是被敵人衝撞損血時，則百分之百扣掉一枚勳章。";
        }





        public void mytime_Tick(object sender, EventArgs e)
        {
            if (A_ptr == A_array.Count() - 1)
                A_ptr = 0;
            else
                A_ptr++;

            //---------------------


            Uri dir = new Uri("Images/" + A_array[A_ptr] + ".png", UriKind.Relative);
            ImageSource source = new System.Windows.Media.Imaging.BitmapImage(dir);
            A.Source = source; 


        }
    }



}