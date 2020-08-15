using System;
using System.Windows.Media;
using Microsoft.Xna.Framework;
using Microsoft.Xna.Framework.Content;
using Microsoft.Xna.Framework.Graphics;
using TARY_Library;

namespace hero
{
    public class BOSS51_G : MONSTER
    {
        public Vector2 targetLoc;
        public int n;//何時觸發時間點
        public int Rn = 0, Rn2 = 0;
        public TARY_RANDOM randObj;
        public int MinY, MaxY;
        public int powerNum;
        TARY_BOB MISS_BOB;

        int RunTime = 0;//計時器
        bool Angry = false;//如果生氣會放大決
        int RunPtr = 1;//控制圖片用


        TARY_TIMER FRIED = new TARY_TIMER(1, 420);

        public BOSS51_G(Vector2 loc)
            : base(loc)
        {
            V = new TARY_VIMG(GamePage.picBOSS51_G, loc);
            V.stop();

            V.imgptr = RunPtr;

            V.H.Radius = (V.Height / 2) - 10;
            FRIED.start();
            Mtype = false;//代表為boss 分貝變高
        }


        public override void info()
        {
            //＊＊父類別基礎屬性＊＊＊＊
            SCORE = 400;//擊倒分數
            HP = GamePage.HERO_LV * 100;//怪物血量
            ADD_X = 0;//物件位移
            ADD_Y = 0.8f;//物件位移
            //＊＊＊＊＊＊＊＊＊＊＊＊＊
            randObj = GamePage.randObj;
            n = GamePage.randObj.Next(250,400); //多久之後 開始覺醒觸發攻擊
            powerNum = 20;//越低連發越多
            MinY = 0; //飄移最小值
            MaxY = 400;//飄移最大值
        }




        public override void update()
        {
            //飄移怪物 血厚為防禦型怪獸  具備攻擊子彈功能 只會往前發射
            RunTime++;
            BOB_update();
            if (Dead) { return; }


            if (RunTime <= n)
            {
                return;
            }



            if (!Angry)
            {
                if (RunTime % 60 == 0)
                {
                    RunPtr = (RunPtr == 0) ? 1 : 0;
                }
            }
            else
            {
                if (RunTime % 50 == 0)
                {
                    Angry = !Angry;
                    RunPtr = 0;
                }
                else
                {
                    RunPtr = 2;
                    if (RunTime % powerNum == 0)
                    {
                        this.firedM2();
                        GamePage.effectballM2.Play(1f, -0.5f, 0f);
                    }
                }
            }

            V.imgptr=RunPtr;





            Rn--;
            if (Rn <= 0)
            {
                this.firedX();
                setTarget();
            }

            X += (targetLoc.X - X) / Rn2;
            Y += (targetLoc.Y - Y) / Rn2;


            //boss的攻擊＊＊＊＊＊＊＊＊＊＊＊＊＊

            if (FRIED.Time == 0)
            {
                Angry = true;
                FRIED.start();
            }

            FRIED.UPDATE();
        }



        public override void Draw(SpriteBatch P)
        {
            base.Draw(P);
            if (MISS_BOB!=null)
            {
                MISS_BOB.Draw(P);
                MISS_BOB.update();
            }
        }


        public virtual void setTarget()
        {
            targetLoc = new Vector2(0, randObj.Next(MinY, MaxY));

            targetLoc.X = (GamePage.R_HERO.centerLoc.X - randObj.Next(-120, 120));
            targetLoc.X -= (V.Width / 2);
            Rn = randObj.Next(30, 150);
            Rn2 = Rn;


            RunTime += GamePage.randObj.Next(0, 15);
        }





        public override bool isLossHP()
        {


            if (V.imgptr == 0 || V.imgptr == 2)
            {
                return true;
            }
            else
            {


                MISS_BOB = new TARY_BOB(GamePage.picStar6, V.centerLoc, 10);
                MISS_BOB.start();
                GamePage.effectgetPower.Play();


                if (GamePage.HERO_LV >= 10 && GamePage.R_MFired.Count() <= 72)
                    this.firedM3Rn(2);

                return false;
            }
        }


        public override void Event_Dead()
        {
            GamePage.R_MonsterThg.Add(new OnePiece("武器"));
            GamePage.R_MonsterThg.Add(new OnePiece("武器"));
        }



        public override bool ClearMonster()
        {
            return false;//不清除其他怪物
        }
    }
}









