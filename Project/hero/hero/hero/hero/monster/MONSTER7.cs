using System;
using System.Windows.Media;
using Microsoft.Xna.Framework;
using Microsoft.Xna.Framework.Content;
using Microsoft.Xna.Framework.Graphics;
using TARY_Library;

namespace hero
{
    //說明：直線行走  使用身體撞擊當作攻擊
    public class MONSTER7 : MONSTER
    {

        public float R_ADD=0.03f;//選轉速度

        public bool HitT = false;//判定是否被打到
        public float n = 2f;
        public int Pnum = 0;
        public MONSTER7(Vector2 loc) : base(loc)
        {
            this.V = new TARY_VIMG(GamePage.picMONSTER7_C, loc);
            this.V.ImgNum = 3;
            this.V.stop();
            V.CenterPoint = true;
        }


        public override void info()
        {
            //＊＊父類別基礎屬性＊＊＊＊
            SCORE = 80;//擊倒分數
            HP = 10;//怪物血量  被打到只會扣一滴血
            ADD_X = 0;//物件位移
            ADD_Y = 1.5f;//物件位移
            //＊＊＊＊＊＊＊＊＊＊＊＊＊

            n = 2f;//被攻擊到多久後爆炸  
            Pnum = 10;//爆炸子彈數量
        }


        public override void update()
        {
            //單純直線行走
            BOB_update();





            if (HitT)
            {
                R_ADD += 0.01f;
            }else{
                Y += ADD_Y;
                X += ADD_X;
            }

            if (R_ADD>=n)
            {
                //自爆
                this.HP = 0;
            }




            V.Rotation += R_ADD;
        }




        public override bool isLossHP()
        {
            if (!HitT)
            {
                HitT = !HitT;
                this.V.start();
            }

            X -= GamePage.randObj.Next(0,2);
            Y -= 5;
            HP -= 1;
            return false;
        }



        public override void Event_Dead()
        {
            this.firedRn(Pnum);



            //30分之1的機率有東西領
            if (GamePage.randObj.Next(0, 30) == 0)
                GamePage.R_MonsterThg.Add(new OnePiece(new Vector2(V.X, V.Y)));

        } 

    }
}
