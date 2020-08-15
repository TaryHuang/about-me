using System;
using System.Windows.Media;
using Microsoft.Xna.Framework;
using Microsoft.Xna.Framework.Content;
using Microsoft.Xna.Framework.Graphics;
using TARY_Library;

namespace hero
{
    public class MONSTER21_A : MONSTER21
    {


        public MONSTER21_A(Vector2 loc) : base(loc)
        {
            V = new TARY_VIMG(GamePage.picMONSTER1_A, loc);
            V.CenterPoint = true;
        }


        public override void info()
        {
            //＊＊父類別基礎屬性＊＊＊＊
            SCORE = 141;//擊倒分數
            HP = 250;//怪物血量
            ADD_X = 1.2f;//物件位移
            ADD_Y = 2.2f;//物件位移
            //＊＊＊＊＊＊＊＊＊＊＊＊＊
            V.H.Radius -= 3;//縮減感應範圍
            R_ADD = 0.5f;//選轉速度
            n = 75;//走多少才切換方向
        }


        public override void Event_Dead()
        {
            //當怪物要死之前..
            base.Event_Dead();
            this.firedRn(3);
        }
    }
}
