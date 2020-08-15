using System;
using System.Windows.Media;
using Microsoft.Xna.Framework;
using Microsoft.Xna.Framework.Content;
using Microsoft.Xna.Framework.Graphics;
using TARY_Library;

namespace hero
{
    public class MONSTER31_A : MONSTER31
    {


        public MONSTER31_A(Vector2 loc)
            : base(loc)
        {
            V = new TARY_VIMG(GamePage.picMONSTER31_A, loc);
            V.stop();
            V.CenterPoint = true;
        }


        public override void info()
        {
            //＊＊父類別基礎屬性＊＊＊＊
            SCORE = 128;//擊倒分數
            HP = 170;//怪物血量
            ADD_X = 0f;//物件位移
            ADD_Y = 3f;//物件位移
            //＊＊＊＊＊＊＊＊＊＊＊＊＊
            randObj = GamePage.randObj;
            n = randObj.Next(100,400);//y前進多少 開始發動捨身攻擊
            sec = 40;//幾秒發動射擊
        }


        public override void Event_Dead()
        {
            base.Event_Dead();
            this.firedRn(3);
        } 



    }
}
