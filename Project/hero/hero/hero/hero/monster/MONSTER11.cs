using System;
using System.Windows.Media;
using Microsoft.Xna.Framework;
using Microsoft.Xna.Framework.Content;
using Microsoft.Xna.Framework.Graphics;
using TARY_Library;

namespace hero
{
    //說明：多次路線行走  給英雄得分用
    //＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊
    //使用ＭＯＮＳＴＥＲ１１的時候

    public class MONSTER11 : MONSTER
    {

        public float R_ADD=0.03f;//選轉速度

        public bool S = false;//是否已經到起始位子點
        public float Yn;//走多少之後 改成ADD2 
        public float ADD_X2, ADD_Y2;
        public float ADD_X3, ADD_Y3;
        public float ADD_X4, ADD_Y4;
        public float ADD_X5, ADD_Y5;//五次型走法

        public int N2, N3, N4,N5;//多久切換行走

        public MONSTER11(Vector2 loc) : base(loc)
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


            Yn = 300;//行走多少到Y時  開始啟動第二次行走模式
            N2 = 0;//多久切換N3
            ADD_X2 = 0;
            ADD_Y2 = 0;

            N3 = 0;//多久切換N4
            ADD_X3 = 0;
            ADD_Y3 = 0;

            N4 = 0;//多久切換N5
            ADD_X4 = 0;
            ADD_Y4 = 0;

            N5 = 0;//多久切換N6
            ADD_X5 = 0;
            ADD_Y5 = 0;
        }


        public override void update()
        {
            //單純直線行走
            BOB_update();

            if(Y>=Yn){
                S = true;
            }

            if (!S)
            {
                //初始
                Y += ADD_Y;
                X += ADD_X;
            }
            else if (N2>=0)
            {
                Y += ADD_Y2;
                X += ADD_X2;
                N2--;
            }
            else if (N3 >= 0)
            {
                Y += ADD_Y3;
                X += ADD_X3;
                N3--;
            }
            else if (N4 >= 0)
            {
                Y += ADD_Y4;
                X += ADD_X4;
                N4--;
            }
            else if (N5 >= 0)
            {
                Y += ADD_Y5;
                X += ADD_X5;
                N5--;
            }
            else
            {
                Y += 1;
            }

            V.Rotation += R_ADD;
        }





        public override void Event_Dead()
        {
            GamePage.R_MonsterThg.Add(new OnePiece(new Vector2(V.X, V.Y)));
        }
    }
}
