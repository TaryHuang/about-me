﻿using System;
using System.Windows.Media;
using Microsoft.Xna.Framework;
using Microsoft.Xna.Framework.Content;
using Microsoft.Xna.Framework.Graphics;
using TARY_Library;

namespace hero
{
    public class BOSS2 : MONSTER
    {
        public Vector2 targetLoc;
        public int n;//何時觸發時間點
        public int Rn = 0, Rn2 = 0;
        public int MinY, MaxY;


        TARY_TIMER FRIED = new TARY_TIMER(1,271);

        public BOSS2(Vector2 loc)
            : base(loc)
        {
            V = new TARY_VIMG(GamePage.picBOSS2, loc);


            V.H.Radius = (V.Width / 2)-45;
            FRIED.start();
            Mtype = false;//代表為boss 分貝變高
        }


        public override void info()
        {
            //＊＊父類別基礎屬性＊＊＊＊
            SCORE = 1250;//擊倒分數
            HP = 550;//怪物血量
            ADD_X = 0;//物件位移
            ADD_Y = 0.8f;//物件位移
            //＊＊＊＊＊＊＊＊＊＊＊＊＊
            n = 0; //前進多少 才開始觸發事件
            MinY = 50; //飄移最小值
            MaxY = 350;//飄移最大值
        }




        public override void update()
        {
            //飄移怪物 血厚為防禦型怪獸  具備攻擊子彈功能 只會往前發射

            BOB_update();
            if (Dead) { return; }


            if (Y <= n)
            {
                Y += ADD_Y;
                return;
            }
            else
            {
                n = -50;
            }


            Rn--;
            if (Rn <= 0)
            {
                
                setTarget();
            }

            
            X += (targetLoc.X - X) / Rn2;
            Y += (targetLoc.Y - Y) / Rn2;



            //boss的攻擊＊＊＊＊＊＊＊＊＊＊＊＊＊
            if (FRIED.Time%80==0)
            {
                this.firedRn(12);
            }

            if (FRIED.Time==0)
            {
                callMonster("MONSTER7_C", 3);
                FRIED.start();
            }

            FRIED.UPDATE();
        }




        public virtual void setTarget()
        {
            targetLoc = new Vector2(0, GamePage.randObj.Next(MinY, MaxY));

            targetLoc.X = (GamePage.R_HERO.centerLoc.X - GamePage.randObj.Next(-120, 120));
            targetLoc.X -= (V.Width / 2);
            Rn = GamePage.randObj.Next(30, 150);
            Rn2 = Rn;

        }






        public override void Event_Dead()
        {
            GamePage.R_MonsterThg.Add(new OnePiece("武器"));
            GamePage.R_MonsterThg.Add(new OnePiece("武器"));
            GamePage.R_MonsterThg.Add(new OnePiece("金幣"));
        }



    }
}
