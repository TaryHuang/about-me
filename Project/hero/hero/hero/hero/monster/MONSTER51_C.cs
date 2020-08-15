using System;
using System.Windows.Media;
using Microsoft.Xna.Framework;
using Microsoft.Xna.Framework.Content;
using Microsoft.Xna.Framework.Graphics;
using TARY_Library;

namespace hero
{
    public class MONSTER51_C : MONSTER51
    {

        public MONSTER51_C(Vector2 loc)
            : base(loc)
        {
            V = new TARY_VIMG(GamePage.picMONSTER5_C, loc);
        }


        public override void info()
        {
            //＊＊父類別基礎屬性＊＊＊＊
            SCORE = 53;//擊倒分數
            HP = 65;//怪物血量
            ADD_X = 0;//物件位移
            ADD_Y = 2.5f;//物件位移
            //＊＊＊＊＊＊＊＊＊＊＊＊＊
            randObj = GamePage.randObj;
            n = 300; //前進多少開始觸發事件
            MinY = 450;
            MaxY = 580;
        }

    }
}
