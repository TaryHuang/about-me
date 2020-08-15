using System;
using System.Windows.Media;
using Microsoft.Xna.Framework;
using Microsoft.Xna.Framework.Content;
using Microsoft.Xna.Framework.Graphics;
using TARY_Library;

namespace hero
{
    public class MONSTER5_C : MONSTER5
    {

        public MONSTER5_C(Vector2 loc)
            : base(loc)
        {
            V = new TARY_VIMG(GamePage.picMONSTER5_C, loc);
        }


        public override void info()
        {
            //＊＊父類別基礎屬性＊＊＊＊
            SCORE = 53;//擊倒分數
            HP = 70;//怪物血量
            ADD_X = 0;//物件位移
            ADD_Y = 3f;//物件位移
            //＊＊＊＊＊＊＊＊＊＊＊＊＊
            randObj = GamePage.randObj;
            n = 450; //前進多少開始觸發事件
            MinY = 350; 
            MaxY = 550;
        }

    }
}
