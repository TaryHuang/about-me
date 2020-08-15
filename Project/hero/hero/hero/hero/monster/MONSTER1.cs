using System;
using System.Windows.Media;
using Microsoft.Xna.Framework;
using Microsoft.Xna.Framework.Content;
using Microsoft.Xna.Framework.Graphics;
using TARY_Library;

namespace hero
{
    //說明：直線行走  使用身體撞擊當作攻擊
    public class MONSTER1 : MONSTER
    {

        public float R_ADD=0.03f;//選轉速度

        public MONSTER1(Vector2 loc) : base(loc)
        {
            this.V = new TARY_VIMG(GamePage.picMONSTER1_D, loc);
            V.CenterPoint = true;
        }


        public override void info()
        {
            //＊＊父類別基礎屬性＊＊＊＊
            SCORE = 111;//擊倒分數
            HP = 6;//怪物血量
            ADD_X = 0;//物件位移
            ADD_Y = 2;//物件位移
            //＊＊＊＊＊＊＊＊＊＊＊＊＊
            V.H.Radius -= 5;//縮減感應範圍
            R_ADD = 0.03f;//選轉速度
        }


        public override void update()
        {
            //單純直線行走
            BOB_update();
            Y += ADD_Y;
            X += ADD_X;


            V.Rotation += R_ADD;
        }


        public override void Event_Dead()
        {
           GamePage.R_MonsterThg.Add(new OnePiece(new Vector2(V.X,V.Y)));
        }
    }
}
