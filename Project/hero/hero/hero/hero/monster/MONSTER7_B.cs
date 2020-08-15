using System;
using System.Windows.Media;
using Microsoft.Xna.Framework;
using Microsoft.Xna.Framework.Content;
using Microsoft.Xna.Framework.Graphics;
using TARY_Library;

namespace hero
{
    //說明：直線行走  使用身體撞擊當作攻擊
    public class MONSTER7_B : MONSTER7
    {

        public MONSTER7_B(Vector2 loc) : base(loc)
        {
            this.V = new TARY_VIMG(GamePage.picMONSTER7_B, loc);
            this.V.ImgNum = 3;
            this.V.stop();
            V.CenterPoint = true;
        }


        public override void info()
        {
            //＊＊父類別基礎屬性＊＊＊＊
            SCORE = 100;//擊倒分數
            HP = 5;//怪物血量  被打到只會扣一滴血
            ADD_X = 0;//物件位移
            ADD_Y = 2.2f;//物件位移
            //＊＊＊＊＊＊＊＊＊＊＊＊＊

            n = 1.6f;//被攻擊到多久後爆炸  
            Pnum = 15;//爆炸子彈數量
        }

        public override void Event_Dead()
        {
            base.Event_Dead();
            this.firedM3();
        }
    }
}
