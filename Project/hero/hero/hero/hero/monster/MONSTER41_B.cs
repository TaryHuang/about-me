﻿using System;
using System.Windows.Media;
using Microsoft.Xna.Framework;
using Microsoft.Xna.Framework.Content;
using Microsoft.Xna.Framework.Graphics;
using TARY_Library;

namespace hero
{
    public class MONSTER41_B : MONSTER41
    {

        public MONSTER41_B(Vector2 loc)
            : base(loc)
        {
            V = new TARY_VIMG(GamePage.picMONSTER41_B, loc);
        }


        public override void info()
        {
            //＊＊父類別基礎屬性＊＊＊＊
            SCORE = 71;//擊倒分數
            HP = 100;//怪物血量
            ADD_X = 0;//物件位移
            ADD_Y = 2f;//物件位移
            //＊＊＊＊＊＊＊＊＊＊＊＊＊
            randObj = GamePage.randObj;
            n = 15; //前進多少 才開始觸發事件

            Nmin = 90;//發射延遲時間最少
            Nmax = 150;//發射延遲時間最多

            MinY = 0;//飄移最小值
            MaxY = 300;//飄移最大值
        }




        public override void update()
        {
            //飄移怪物 血厚為防禦型怪獸  具備攻擊子彈功能 對準英雄發射

            BOB_update();
            if (Dead) { return; }


            if (Y <= n)
            {
                Y += ADD_Y;
                return;
            }
            else
            {
                n = 0;
            }


            Rn--;
            if (Rn <= 0)
            {
                this.firedM3();
                setTarget();
            }


            X += (targetLoc.X - X) / Rn2;
            Y += (targetLoc.Y - Y) / Rn2;

        }

    }
}
