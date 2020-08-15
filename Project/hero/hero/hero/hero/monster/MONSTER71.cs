using System;
using System.Windows.Media;
using Microsoft.Xna.Framework;
using Microsoft.Xna.Framework.Content;
using Microsoft.Xna.Framework.Graphics;
using TARY_Library;

namespace hero
{
    //說明：直線行走  使用身體撞擊當作攻擊
    public class MONSTER71 : MONSTER7
    {

        public MONSTER71(Vector2 loc)
            : base(loc)
        {
            this.V = new TARY_VIMG(GamePage.picMONSTER7_B, loc);
            this.V.ImgNum = 3;
            this.V.stop();
            V.CenterPoint = true;
        }


        public override void info()
        {
            //＊＊父類別基礎屬性＊＊＊＊
            SCORE = 20;//擊倒分數
            HP = 5;//怪物血量  被打到只會扣一滴血
            ADD_X = 0;//物件位移
            ADD_Y = 0f;//物件位移
            //＊＊＊＊＊＊＊＊＊＊＊＊＊

            n = 1.2f;//被攻擊到多久後爆炸  
            Pnum = 5;//爆炸子彈數量
        }


        public override void Event_Dead()
        {
            base.Event_Dead();
            this.firedM3Rn(1);
        }
    }
}
