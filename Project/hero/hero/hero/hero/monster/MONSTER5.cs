using System;
using System.Windows.Media;
using Microsoft.Xna.Framework;
using Microsoft.Xna.Framework.Content;
using Microsoft.Xna.Framework.Graphics;
using TARY_Library;

namespace hero
{
    public class MONSTER5 : MONSTER
    {
        public Vector2 targetLoc;
        public int n;//何時觸發時間點
        public int Rn = 0, Rn2 = 0;
        public TARY_RANDOM randObj;
        public int MinY, MaxY;
        public bool Auto = true;//若為TRUE  X軸會跟隨著HERO行走

        public MONSTER5(Vector2 loc) : base(loc)
        {
            V = new TARY_VIMG(GamePage.picMONSTER5_D, loc);
        }


        public override void info()
        {
            //＊＊父類別基礎屬性＊＊＊＊
            SCORE = 43;//擊倒分數
            HP = 30;//怪物血量
            ADD_X = 0;//物件位移
            ADD_Y = 3f;//物件位移
            //＊＊＊＊＊＊＊＊＊＊＊＊＊
            randObj = GamePage.randObj;
            n = 450; //前進多少開始觸發事件
            MinY = 350; 
            MaxY = 500;
        }


        public override void update()
        {
            //飄移怪物 血厚為防禦型怪獸 [移動速度較快]
            //且具備了自動跟隨HERO人物的行為 刻意檔住英雄的子彈用

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
            if (Rn <= 0 || X + V.Width >= 480 || X <= 0)
            {
                setTarget();
            }


            X += (targetLoc.X - X) / Rn;//跟著隨機目標跑
            

            Y += (targetLoc.Y - Y) / Rn;

        }




        public void setTarget()
        {

            targetLoc = new Vector2(randObj.Next(0, (int)(480-V.Width)), randObj.Next(MinY, MaxY));

            if (Auto)
                targetLoc.X = (GamePage.R_HERO.centerLoc.X - randObj.Next(-150, 150));


            Rn = randObj.Next(30, 90);
            Rn2 = Rn;

        }



        public override void Event_Dead()
        {

            //20分之1的機率有東西領
            if (GamePage.randObj.Next(0, 20) == 0)
                GamePage.R_MonsterThg.Add(new OnePiece(new Vector2(V.X, V.Y)));

        }

    }
}
