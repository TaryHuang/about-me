using System;
using System.Windows.Media;
using Microsoft.Xna.Framework;
using Microsoft.Xna.Framework.Content;
using Microsoft.Xna.Framework.Graphics;
using TARY_Library;

namespace hero
{
    public class BOSS3 : MONSTER
    {
        public Vector2 targetLoc;
        public int n;//何時觸發時間點
        public int Rn = 0, Rn2 = 0;
        public TARY_RANDOM randObj;
        public int MinY, MaxY;


        TARY_TIMER FRIED = new TARY_TIMER(1,100);

        public BOSS3(Vector2 loc)
            : base(loc)
        {
            V = new TARY_VIMG(GamePage.picBOSS3, loc);

            V.H.Radius = (V.Height / 2)-15;
            FRIED.start();
            Mtype = false;//代表為boss 分貝變高
        }


        public override void info()
        {
            //＊＊父類別基礎屬性＊＊＊＊
            SCORE = 1500;//擊倒分數
            HP = 1350 + (GamePage.HERO_S*300);//怪物血量
            ADD_X = 0;//物件位移
            ADD_Y = 0.8f;//物件位移
            //＊＊＊＊＊＊＊＊＊＊＊＊＊
            randObj = GamePage.randObj;
            n = 0; //前進多少 才開始觸發事件
            MinY = 0; //飄移最小值
            MaxY = 200;//飄移最大值
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

            
            X += (targetLoc.X - X) / Rn;
            Y += (targetLoc.Y - Y) / Rn;



            //boss的攻擊＊＊＊＊＊＊＊＊＊＊＊＊＊
            if (FRIED.Time%20==0)
            {
                this.firedM3();

            }

            if (FRIED.Time==0)
            {

                this.firedRn(10);

                //該BOSS特殊攻擊位置
                ball_M2 ballX = new ball_M2(new Vector2(this.V.centerLoc.X, this.V.centerLoc.Y + 60));
                ballX.ADD_X = (GamePage.R_HERO.centerLoc.X - this.V.centerLoc.X) / ((GamePage.R_HERO.centerLoc.Y - this.V.centerLoc.Y) / 2);
                GamePage.R_MFired.Add(ballX);
                GamePage.effectballM2.Play(1f,-0.5f,0f);

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





        public override void Event_Dead()
        {
            GamePage.R_MonsterThg.Add(new OnePiece("武器"));
            GamePage.R_MonsterThg.Add(new OnePiece("武器"));
            GamePage.R_MonsterThg.Add(new OnePiece("金幣"));
        }







    }
}
