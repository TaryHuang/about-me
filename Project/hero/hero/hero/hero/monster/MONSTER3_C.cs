using System;
using System.Windows.Media;
using Microsoft.Xna.Framework;
using Microsoft.Xna.Framework.Content;
using Microsoft.Xna.Framework.Graphics;
using TARY_Library;

namespace hero
{
    public class MONSTER3_C : MONSTER3
    {

        public MONSTER3_C(Vector2 loc)
            : base(loc)
        {
            V = new TARY_VIMG(GamePage.picMONSTER3_C, loc);
            V.stop();
            V.CenterPoint = true;
        }


        public override void info()
        {
            //＊＊父類別基礎屬性＊＊＊＊
            SCORE = 108;//擊倒分數
            HP = 15;//怪物血量
            ADD_X = 0f;//物件位移
            ADD_Y = 2.5f;//物件位移
            //＊＊＊＊＊＊＊＊＊＊＊＊＊
            randObj = GamePage.randObj;
            n = randObj.Next(250, 400);//y前進多少 開始發動捨身攻擊
            sec = 50;//幾秒發動射擊
        }
    }
}
