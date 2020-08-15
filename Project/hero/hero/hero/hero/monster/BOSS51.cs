using System;
using System.Windows.Media;
using Microsoft.Xna.Framework;
using Microsoft.Xna.Framework.Content;
using Microsoft.Xna.Framework.Graphics;
using TARY_Library;

namespace hero
{
    public class BOSS51 : MONSTER
    {
        public Vector2 targetLoc;
        public int n;//何時觸發時間點
        public int Rn = 0, Rn2 = 0;
        public TARY_RANDOM randObj;
        public int MinY, MaxY;

        int RunTime = 0;//計時器

        bool Angry = false;//如果生氣會放大決
        int RunPtr = 0;//控制圖片用

        TARY_TIMER FRIED = new TARY_TIMER(1, 300);



        public BOSS51(Vector2 loc)
            : base(loc)
        {
            V = new TARY_VIMG(GamePage.picBOSS5, loc);
            V.stop();

            V.imgptr = RunPtr;

            V.H.Radius = (V.Height / 2) - 10;
            FRIED.start();
            Mtype = false;//代表為boss 分貝變高
        }


        public override void info()
        {
            //＊＊父類別基礎屬性＊＊＊＊
            SCORE = 5000;//擊倒分數
            HP = 12000;//怪物血量
            ADD_X = 0;//物件位移
            ADD_Y = 2f;//物件位移
            //＊＊＊＊＊＊＊＊＊＊＊＊＊
            randObj = GamePage.randObj;
            n = 50; //前進多少 才開始觸發事件
            MinY = 0; //飄移最小值
            MaxY = 100;//飄移最大值
        }




        public override void update()
        {
            //飄移怪物 血厚為防禦型怪獸  具備攻擊子彈功能 只會往前發射
            RunTime++;
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



            if (!Angry)
            {
                if (RunTime % 50 == 0)
                {
                    this.firedM3x3();
                    RunPtr = (RunPtr == 3) ? 0 : RunPtr;
                    V.imgptr = RunPtr;
                    RunPtr++;
                }
            }else{
                if (RunTime % 70 == 0)
                {
                    this.firedM2();
                    this.firedM3Rn(5);
                    RunPtr = (RunPtr == 6) ? 3 : RunPtr;
                    V.imgptr = RunPtr;
                    RunPtr++;
                }
            }




            Rn--;
            if (Rn <= 0)
            {
                this.firedM3();
                setTarget();
            }

            X += (targetLoc.X - X) / Rn2;
            Y += (targetLoc.Y - Y) / Rn2;


            //boss的攻擊＊＊＊＊＊＊＊＊＊＊＊＊＊

            if (FRIED.Time == 0)
            {
                this.firedM3();
                FRIED.start();
            }

            FRIED.UPDATE();
        }




        public virtual void setTarget()
        {
            targetLoc = new Vector2(0, randObj.Next(MinY, MaxY));

            targetLoc.X = (GamePage.R_HERO.centerLoc.X - randObj.Next(-120, 120));
            targetLoc.X -= (V.Width / 2);
            Rn = randObj.Next(30, 150);
            Rn2 = Rn;

        }


        public override void Event_lossHP()
        {
            if(!Angry && hp <=6000){
                GamePage.Thunder = true;//閃光效果
                Angry = true;
                callMonster("BOSS5_G", 3);
            }
        }

        public override void Event_Dead()
        {
            GamePage.R_MonsterThg.Add(new OnePiece("武器"));
            GamePage.R_MonsterThg.Add(new OnePiece("武器"));

            GamePage.R_MonsterThg.Add(new OnePiece("金幣"));
            GamePage.R_MonsterThg.Add(new OnePiece("金幣"));


            if (GamePage.HERO_S == 0)
            {
                GamePage.R_MonsterThg.Add(new OnePiece("HP"));
                GamePage.R_MonsterThg.Add(new OnePiece("HP"));
            }
            else if (GamePage.HERO_S == 1)
            {
                GamePage.R_MonsterThg.Add(new OnePiece("HP"));
            }


            callMonster("BOSS51_G", 4 + GamePage.HERO_S);
 
        }

    }
}









