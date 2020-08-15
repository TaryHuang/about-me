using System;
using System.Windows.Media;
using Microsoft.Xna.Framework;
using Microsoft.Xna.Framework.Content;
using Microsoft.Xna.Framework.Graphics;
using TARY_Library;

namespace hero
{
    public class MONSTER2_C : MONSTER2
    {

        public MONSTER2_C(Vector2 loc) : base(loc)
        {
            V = new TARY_VIMG(GamePage.picMONSTER1_C, loc);
            V.CenterPoint = true;
        }


        public override void info()
        {
            //＊＊父類別基礎屬性＊＊＊＊
            SCORE = 121;//擊倒分數
            HP = 20;//怪物血量
            ADD_X = 0.8f;//物件位移
            ADD_Y = 1.8f;//物件位移
            //＊＊＊＊＊＊＊＊＊＊＊＊＊
            V.H.Radius -= 4;//縮減感應範圍
            R_ADD = 0.1f;//選轉速度
            n = 70;//走多少才切換方向
        }

    }
}
