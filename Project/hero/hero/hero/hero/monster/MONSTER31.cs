﻿using System;
using System.Windows.Media;
using Microsoft.Xna.Framework;
using Microsoft.Xna.Framework.Content;
using Microsoft.Xna.Framework.Graphics;
using TARY_Library;

namespace hero
{
    public class MONSTER31 : MONSTER
    {
        Vector2 targetLoc;
        TARY_TIMER Timer;//發動時間點
        public int n;//何時觸發時間點
        public TARY_RANDOM randObj;
        public int sec;//幾秒發動


        public MONSTER31(Vector2 loc) : base(loc)
        {
            V = new TARY_VIMG(GamePage.picMONSTER31_D, loc);
            V.stop();
            V.CenterPoint = true;
        }


        public override void info()
        {
            //＊＊父類別基礎屬性＊＊＊＊
            SCORE = 98;//擊倒分數
            HP = 4;//怪物血量
            ADD_X = 0f;//物件位移
            ADD_Y = 2;//物件位移
            //＊＊＊＊＊＊＊＊＊＊＊＊＊
            randObj = GamePage.randObj;
            n = randObj.Next(400, 500);//y前進多少 開始發動捨身攻擊
            sec = 60;//幾秒發動射擊
        }


        public override void update()
        {


            V.Rotation += 0.05f;

            //亂槍射擊的怪物 若怪被擊中就觸發亂鎖定發射

            BOB_update();

            //第一階段＊＊＊＊＊前進觸發範圍
            if (Y <= n)
            {
                Y += ADD_Y;
                return;
            }


            //第二階段＊＊＊＊＊停止並計算英雄目標，＂準備＂開始衝刺
            if (Timer == null)
            {
                Timer = new TARY_TIMER(0, sec);
                targetLoc.X = randObj.Next(-20, 480);
                targetLoc.Y = 850;

                Timer.start();
                V.imgptr++;
            }
            if (Timer.getT)
            {
                Timer.UPDATE();
                return;
            }



            //第三階段＊＊＊＊＊開始衝刺
            X += (targetLoc.X - X) / 16;
            Y += (targetLoc.Y - Y) / 16;
        }



        public override void Event_lossHP()
        {
            n = 0;
        }




        public override void Event_Dead()
        {

            //10分之1的機率有東西領
            if (GamePage.randObj.Next(0, 10) == 0)
                GamePage.R_MonsterThg.Add(new OnePiece(new Vector2(V.X, V.Y)));

        }


    }
}
