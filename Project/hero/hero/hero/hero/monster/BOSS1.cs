using System;
using System.Windows.Media;
using Microsoft.Xna.Framework;
using Microsoft.Xna.Framework.Content;
using Microsoft.Xna.Framework.Graphics;
using TARY_Library;

namespace hero
{
    public class BOSS1 : MONSTER
    {
        public Vector2 targetLoc;
        public int n;//何時觸發時間點
        public int Rn = 0, Rn2 = 0;
        public int MinY, MaxY;


        TARY_TIMER FRIED = new TARY_TIMER(1, 101);

        public BOSS1(Vector2 loc)
            : base(loc)
        {
            V = new TARY_VIMG(GamePage.picBOSS1, loc);

            V.H.Radius = (V.Width / 2) - 10;
            FRIED.start();
            Mtype = false;//代表為boss 分貝變高
        }


        public override void info()
        {
            //＊＊父類別基礎屬性＊＊＊＊
            SCORE = 1000;//擊倒分數
            HP = 350;//怪物血量
            ADD_X = 0;//物件位移
            ADD_Y = 0.8f;//物件位移
            //＊＊＊＊＊＊＊＊＊＊＊＊＊
            n = 0; //前進多少 才開始觸發事件
            MinY = 0; //飄移最小值
            MaxY = 300;//飄移最大值
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
                this.firedX();
                setTarget();
            }


            X += (targetLoc.X - X) / Rn;
            Y += (targetLoc.Y - Y) / Rn;



            //boss的攻擊＊＊＊＊＊＊＊＊＊＊＊＊＊

            if (FRIED.Time == 0)
            {
                callMonster("MONSTER6", 1);
                this.firedF3();
                this.firedX();
                FRIED.start();
            }

            FRIED.UPDATE();
        }




        public virtual void setTarget()
        {
            targetLoc = new Vector2(GamePage.randObj.Next(0 - (int)(V.Width / 2), 480 - (int)(V.Width / 2)), GamePage.randObj.Next(MinY, MaxY));

            Rn = GamePage.randObj.Next(30, 180);
            Rn2 = Rn;

        }



        public override void Event_Dead()
        {
            GamePage.R_MonsterThg.Add(new OnePiece("武器"));
            GamePage.R_MonsterThg.Add(new OnePiece("金幣"));
        }
    }
}









