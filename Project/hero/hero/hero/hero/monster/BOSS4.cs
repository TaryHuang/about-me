using System;
using System.Windows.Media;
using Microsoft.Xna.Framework;
using Microsoft.Xna.Framework.Content;
using Microsoft.Xna.Framework.Graphics;
using TARY_Library;

namespace hero
{
    public class BOSS4 : MONSTER
    {
        public Vector2 targetLoc;
        public int n;//何時觸發時間點
        public int Rn = 0, Rn2 = 0;
        public TARY_RANDOM randObj;
        public int MinY, MaxY;
        float M = 0.5f;//左手武器
        bool M2 = true;//切換器

        public TARY_VIMG LeftHand, RightHand;//左右手武器

        TARY_TIMER FRIED = new TARY_TIMER(1, 270);

        public BOSS4(Vector2 loc)
            : base(loc)
        {
            V = new TARY_VIMG(GamePage.picBOSS4, loc);
            LeftHand = new TARY_VIMG(GamePage.picBOSS4_LEFT, new Vector2(0, 0));
            RightHand = new TARY_VIMG(GamePage.picBOSS4_RIGHT, new Vector2(0, 0));
            LeftHand.CenterPoint = true;
            V.H.Radius = 60;
            FRIED.start();
            Mtype = false;//代表為boss 分貝變高
        }


        public override void info()
        {
            //＊＊父類別基礎屬性＊＊＊＊
            SCORE = 3000;//擊倒分數
            HP = 8000+(1000*GamePage.HERO_S);//怪物血量
            ADD_X = 0;//物件位移
            ADD_Y = 0.8f;//物件位移
            //＊＊＊＊＊＊＊＊＊＊＊＊＊
            randObj = GamePage.randObj;
            n = 0; //前進多少 才開始觸發事件
            MinY = -50; //飄移最小值
            MaxY = 50;//飄移最大值
        }



        public override void Draw(SpriteBatch P)
        {
            base.Draw(P);

            if (!Dead)
            {
                LeftHand.draw(P);
                RightHand.draw(P);
            }
        }







        public override void update()
        {

            BOB_update();
            if (Dead) { return; }


            if (Y <= n)
            {
                Y += ADD_Y;
                return;
            }
            else
            {
                n = -500;
            }


            Rn--;
            if (Rn <= 0)
            {

                setTarget();
            }


            X += (targetLoc.X - X) / Rn;
            Y += (targetLoc.Y - Y) / Rn;

            //＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊
            //左手右手一起移動

            RightHand.X = X + 315;
            RightHand.Y = Y + 120;

            LeftHand.X = X + 35;
            LeftHand.Y = Y + 170;

            if (LeftHand.Rotation >= M || LeftHand.Rotation <= -M)
            {
                M2 = !M2;
            }

            if (M2)
            {
                LeftHand.Rotation += 0.005f;
            }
            else
            {
                LeftHand.Rotation -= 0.005f;

            }

            //boss的攻擊＊＊＊＊＊＊＊＊＊＊＊＊＊
            if (FRIED.Time % 100 == 0)
            {
                if (GamePage.randObj.Next(0, 3)%2 == 1)
                {
                    firedM3x3();
                }
                else
                {
                   this.firedM3Rn(8);
                }


                
            }



            if (FRIED.Time == 0)
            {

                this.callMonster("MONSTER1_A", 4+GamePage.HERO_S);
                this.callMonster("MONSTER5", 3 + GamePage.HERO_S);
                this.callMonster("MONSTER51", 3 + GamePage.HERO_S);
                this.callMonster("MONSTER5_C", 2 + GamePage.HERO_S);
                //該BOSS特殊攻擊位置
                ball_M2 ballX = new ball_M2(new Vector2(this.V.centerLoc.X, this.V.centerLoc.Y + 60));
                ballX.ADD_X = (GamePage.R_HERO.centerLoc.X - this.V.centerLoc.X) / ((GamePage.R_HERO.centerLoc.Y - this.V.centerLoc.Y) / 2);
                GamePage.R_MFired.Add(ballX);
                GamePage.effectballM2.Play(1f, -0.5f, 0f);

                FRIED.start();

                hp += 5 + (20 * GamePage.HERO_S);//回血機制
            }

            FRIED.UPDATE();

        }




        public virtual void setTarget()
        {
            targetLoc = new Vector2(0, randObj.Next(MinY, MaxY));

            targetLoc.X = (randObj.Next(0, (int)(480 - V.Width)));
            Rn = randObj.Next(30, 150);
            Rn2 = Rn;

        }


        public override void Event_lossHP()
        {
            base.Event_lossHP();
            this.firedM3Rn(2);
        }





        public override void Event_Dead()
        {
            GamePage.R_MonsterThg.Add(new OnePiece("武器"));
            GamePage.R_MonsterThg.Add(new OnePiece("武器"));
            GamePage.R_MonsterThg.Add(new OnePiece("武器"));
            GamePage.R_MonsterThg.Add(new OnePiece("金幣"));
            GamePage.R_MonsterThg.Add(new OnePiece("金幣"));

           
        }

    }
}
