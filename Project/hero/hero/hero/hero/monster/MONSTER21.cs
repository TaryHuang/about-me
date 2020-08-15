using System;
using System.Windows.Media;
using Microsoft.Xna.Framework;
using Microsoft.Xna.Framework.Content;
using Microsoft.Xna.Framework.Graphics;
using TARY_Library;

namespace hero
{
    public class MONSTER21 : MONSTER
    {
        public int n;
        public bool t = false;//方向
        public int tempN = 0;
        public float R_ADD = 0.03f;//選轉速度

        public MONSTER21(Vector2 loc) : base(loc)
        {
            V = new TARY_VIMG(GamePage.picMONSTER1_D, loc);
            V.CenterPoint = true;
        }


        public override void info()
        {
            //＊＊父類別基礎屬性＊＊＊＊
            SCORE = 111;//擊倒分數
            HP = 5;//怪物血量
            ADD_X = 0.8f;//物件位移
            ADD_Y = 1.5f;//物件位移
            //＊＊＊＊＊＊＊＊＊＊＊＊＊
            V.H.Radius -= 5;//縮減感應範圍
            R_ADD = 0.03f;//選轉速度
            n = 70;//走多少才切換 方向
        }


        public override void update()
        {
            //左右左右..行走
            BOB_update();

            if (tempN > n)
            {
                tempN = 0;
                t = !t;//左右切換
            }

            if (t)
                X += ADD_X;
            else
                X -= ADD_X;


            Y += ADD_Y;
            tempN++;

            V.Rotation += R_ADD;
        }


        public override void Event_Dead()
        {
            GamePage.R_MonsterThg.Add(new OnePiece(new Vector2(V.X, V.Y)));
        }
    }
}
