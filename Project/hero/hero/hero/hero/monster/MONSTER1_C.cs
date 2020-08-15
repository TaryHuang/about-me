using System;
using System.Windows.Media;
using Microsoft.Xna.Framework;
using Microsoft.Xna.Framework.Content;
using Microsoft.Xna.Framework.Graphics;
using TARY_Library;

namespace hero
{
    //說明：直線行走  使用身體撞擊當作攻擊
    public class MONSTER1_C : MONSTER1
    {



        public MONSTER1_C(Vector2 loc)
            : base(loc)
        {
            this.V = new TARY_VIMG(GamePage.picMONSTER1_C, loc);
            V.CenterPoint = true;

        }


        public override void info()
        {
            //＊＊父類別基礎屬性＊＊＊＊
            SCORE = 121;//擊倒分數
            HP = 25;//怪物血量
            ADD_X = 0;//物件位移
            ADD_Y = 3;//物件位移
            //＊＊＊＊＊＊＊＊＊＊＊＊＊
            V.H.Radius -= 4;//縮減感應範圍
            R_ADD = 0.1f;//選轉速度
        }

    }
}
