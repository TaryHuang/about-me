using System;
using System.Windows.Media;
using Microsoft.Xna.Framework;
using Microsoft.Xna.Framework.Content;
using Microsoft.Xna.Framework.Graphics;
using TARY_Library;

namespace hero
{
    //說明：直線行走  使用身體撞擊當作攻擊
    public class MONSTER11_B : MONSTER11
    {



        public MONSTER11_B(Vector2 loc)
            : base(loc)
        {
            this.V = new TARY_VIMG(GamePage.picMONSTER1_B, loc);
            V.CenterPoint = true;

        }


        public override void info()
        {
            //＊＊父類別基礎屬性＊＊＊＊
            SCORE = 131;//擊倒分數
            HP = 125;//怪物血量
            ADD_X = 0;//物件位移
            ADD_Y = 2;//物件位移
            //＊＊＊＊＊＊＊＊＊＊＊＊＊
            V.H.Radius -= 3;//縮減感應範圍
            R_ADD = 0.3f;//選轉速度


            Yn = 300;//行走多少到Y時  開始啟動第二次行走模式
            N2 = 0;//多久切換N3
            ADD_X2 = 0;
            ADD_Y2 = 0;

            N3 = 0;//多久切換N4
            ADD_X3 = 0;
            ADD_Y3 = 0;

            N4 = 0;//多久切換N5
            ADD_X4 = 0;
            ADD_Y4 = 0;

            N5 = 0;//多久切換N6
            ADD_X5 = 0;
            ADD_Y5 = 0;
        }

    }
}
