using System;
using System.Windows.Media;
using Microsoft.Xna.Framework;
using Microsoft.Xna.Framework.Content;
using Microsoft.Xna.Framework.Graphics;
using TARY_Library;

namespace hero
{
    public class BOSS5 : MONSTER
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

        bool leave = false;//落跑訊號

        public BOSS5(Vector2 loc)
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
            SCORE = 5300;//擊倒分數
            if(GamePage.HERO_LV!=21){
                HP = 1000;//怪物血量
            }else{
                HP = 5000;//怪物血量
            }
            ADD_X = 0;//物件位移
            ADD_Y = 1f;//物件位移
            //＊＊＊＊＊＊＊＊＊＊＊＊＊
            randObj = GamePage.randObj;
            n = 50; //前進多少 才開始觸發事件
            MinY = 0; //飄移最小值
            MaxY = 150;//飄移最大值
        }




        public override void update()
        {
            //飄移怪物 血厚為防禦型怪獸  具備攻擊子彈功能 只會往前發射
            RunTime++;
            BOB_update();
            if (Dead) { return; }

            //開始烙跑了!
            if (leave)
            {

                Y -= 0.5f;

                if(this.Y<=-50){
                    this.Y = 1000;//使自身離開消失
                }

                return;
            }



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
                if (RunTime % 40 == 0)
                {
                    this.firedM3();
                    RunPtr = (RunPtr == 3) ? 0 : RunPtr;
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
            base.Event_lossHP();
            

            if(this.hp<=800 && !leave){
                leave = true;
                GamePage.Thunder = true;//閃光效果
                this.callMonster("BOSS5_G", 2);
            }
        }

        public override bool isLossHP()
        {
            if (leave)
            {
                return false;//不扣血狀態
            }
            else
            {
                return true;

            }
        }

    }
}









