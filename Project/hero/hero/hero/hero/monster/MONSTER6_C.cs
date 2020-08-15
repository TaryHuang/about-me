using System;
using System.Windows.Media;
using Microsoft.Xna.Framework;
using Microsoft.Xna.Framework.Content;
using Microsoft.Xna.Framework.Graphics;
using TARY_Library;

namespace hero
{
    public class MONSTER6_C : MONSTER6
    {

        public MONSTER6_C(Vector2 loc)
            : base(loc)
        {
            V = new TARY_VIMG(GamePage.picMONSTER3_B, loc);
            V.stop();
            V.CenterPoint = true;
        }


        public override void info()
        {
            //＊＊父類別基礎屬性＊＊＊＊
            SCORE = 30;//擊倒分數
            HP = 18;//怪物血量
            ADD_X = 0f;//物件位移
            ADD_Y = 0f;//物件位移
            //＊＊＊＊＊＊＊＊＊＊＊＊＊
            randObj = GamePage.randObj;
            n = 60; //出現後 保護怪獸時間 並且怪獸要閃閃的
            sec = 50;//幾秒發動射擊
        }

    }
}
