using System;
using System.Collections.Generic;
using System.Linq;
using System.Windows.Controls;
using Microsoft.Phone.Controls;
using Microsoft.Xna.Framework;
using Microsoft.Xna.Framework.Content;
using Microsoft.Xna.Framework.Graphics;
using TARY_Library;
using Microsoft.Devices.Sensors;


namespace hero
{
    public class HERO
    {


        Accelerometer gSensor;
        TARY_VIMG hero,hero_dead;
        HPBAR Hp;
        List<ball_IF> balls = new List<ball_IF>();
        TARY_SCORE BulletBAR;//子彈數量顯示
        TARY_VIMG BulletImg;//子彈顯示
        int bulletMax = 8;//子彈最大值
        int ATK = 1; //攻擊力
        float sense = 0.03f;
        float eX = 0f, tempeX, tempeY1=0f, tempeY2=0f;
        float eN = 0.4f,F=5; //eN代表斜度大於何種程度時 最大值就是如此

        int L;//計算人物撞擊扣血量用 
        int L2;//計算怪物攻擊英雄用
        int deadSec=80;//紀錄英雄死後爆炸效果要幾秒 才切換換面
        public bool dead = false;//英雄是否死亡 死亡播放特效用

        TARY_TIMER ProHero = new TARY_TIMER(0,30);//英雄被擊到時 保護英雄機制
        TARY_BOB MISS_BOB;//抵擋特效

        float leftBan = 0f, rightBan = 480f;//飛行器飛行限制區域
        public HERO(Vector2 loc)
        {

            

            hero = new TARY_VIMG(GamePage.picHERO,loc);
            hero.H.Radius -= 3.5f;
            hero_dead = new TARY_VIMG(GamePage.picHERO_DEAD, loc);
            hero_dead.Size = hero.Size;
            hero_dead.ImgNum=4;
            Hp = new HPBAR(3,3);
            BulletBAR = new TARY_SCORE(GamePage.picNum, new Vector2(470, 50));
            BulletImg = new TARY_VIMG(GamePage.picBallA[1], new Vector2(412, 65));
            BulletBAR.Score = bulletMax + GamePage.R_BAR.bulletLv;
            BulletBAR.ScoreV = 2;
            BulletBAR.X -= BulletBAR.Width;


            leftBan -= GamePage.picHERO.Width / 2 -18;
            rightBan -= GamePage.picHERO.Width / 2 +18;

            //數位羅盤事件
            gSensor = new Accelerometer();//建立 Accelerometer 類別的物件
            gSensor.CurrentValueChanged += new EventHandler<SensorReadingEventArgs<AccelerometerReading>>(gSensor_CurrentValueChanged);
            gSensor.Start();


        }

        void gSensor_CurrentValueChanged(object sender, SensorReadingEventArgs<AccelerometerReading> e)
        {
            if (dead) return;//腳色已死亡
            if (GamePage.LOCAL!="遊戲") return;

            tempeY2 = tempeY1;
            tempeY1 = e.SensorReading.Acceleration.Y;
            tempeX = e.SensorReading.Acceleration.X;


            if (Math.Abs(tempeY2 - tempeY1)>0.14f)
            {
                GamePage.R_MonsterThg.move();
            }

            if (tempeX > eN ||tempeX < -eN)
            {
                if (tempeX > 0)
                {
                    eX = eN;
                }
                else
                {
                    eX = -eN;
                }
            }
            else
            {
                eX = tempeX;
            }




            if (eX > sense)
            {
                if (hero.X <= rightBan)
                {
                    hero.X += F * eX;
                }
            }
            else if (eX < (sense) * -1)
            {
                if (hero.X >= leftBan)
                {
                    hero.X += F * eX;
                }
            }

        }



        public void update()
        {
            ballsUpdate();
            heroUpdate();
            MfiredBall();//怪物子彈是否碰到英雄
            BulletBAR.Score = bulletMax+GamePage.R_BAR.bulletLv -balls.Count;//更新子彈數量看板
        }




        public void Secondfire(int myPower)
        {
            //副 武器


            //int myPower 發射哪種子彈
            if (dead) return;//腳色已死亡


            if (balls.Count < bulletMax+GamePage.R_BAR.bulletLv)
            {
                switch(myPower){
                    case 1: balls.Add(new ball_Sec(centerLoc, 1)); break;
                    case 3: balls.Add(new ball_Sec(centerLoc, 3)); break;
                    case 5: balls.Add(new ball_Sec(centerLoc, 5)); break;
                    case 7: balls.Add(new ball_Sec(centerLoc, 7)); break;
                }

                if (myPower >= 5)
                {
                    GamePage.effectHerofires.Play(0.6f, -0.2f, 0f);
                }
                else
                {
                    GamePage.effectHerofires.Play(0.6f, -0.6f, 0f);
                }
            }
        }



        public void Mainfire(int myPower)
        {
            //主要武器
            //int myPower 發射哪種子彈
            if (dead) return;//腳色已死亡



            if (balls.Count < bulletMax + GamePage.R_BAR.bulletLv)
            {
                switch (myPower)
                {
                    case 1: balls.Add(new ball_Main(centerLoc, 1)); break;
                    case 2: balls.Add(new ball_Main(centerLoc, 2)); break;
                    case 3: balls.Add(new ball_Main(centerLoc, 3)); break;
                    case 4: balls.Add(new ball_Main(centerLoc, 4)); break;
                }
                if (myPower >= 2)
                {
                    GamePage.effectHerofires.Play(0.6f, -0.2f, 0f);
                }
                else
                {
                    GamePage.effectHerofires.Play(0.6f, -0.6f, 0f);
                }
            }
        }










        protected void heroUpdate()
        {
            if (ProHero.getT)
            {
                //英雄被擊中~ 保護英雄秒數
                ProHero.UPDATE();

                if(ProHero.Time % 2==1){
                    hero.Alpha = 0f;
                }else{
                    hero.Alpha = 1000f;
                }

                return;
            }


            L = GamePage.R_LV.HPlossX(hero.H, 50);

            if (L!=0)
            {
                //人物被擊中 人扣血、怪扣血

                Hp.hp -= L;


                //被怪擊中  星星徽章消失
                GamePage.R_BAR.PowerLv--;



                GamePage.effectHerofired.Play();
                ProHero.start();//啟動防護機制
            }


            if (Hp.hp<=0)
            {
                dead = true;//腳色死亡
            }
        }


        protected void ballsUpdate()
        {
            for (int i = balls.Count()-1; i >=0 ; i--)
            {
                balls[i].update();



                if (!balls[i].life())
                {
                    balls.RemoveAt(i);
                }
                else
                {
                    //多顆子彈發射
                    bool[] tempBL = GamePage.R_LV.HPloss(balls[i].H3, ATK + GamePage.R_BAR.ATKLv);

                    //代表有擊中怪物
                    if (tempBL[0])
                    {

                        if (balls[i].deleteBall(tempBL))
                        {
                            balls.RemoveAt(i);//球全部擊中消失、怪扣血
                        }
                    }//if


                    /*
                    if (balls[i].Ctype==1)
                    {
                        if (GamePage.R_LV.HPloss(balls[i].H, ATK + GamePage.R_BAR.ATKLv))
                            balls.RemoveAt(i);//球擊中怪物  球消失、怪扣血
                    }
                    else
                    {

                    }//if else
                     */
                }
            }
        }

        protected void ballsDraw(SpriteBatch P){
            for (int i = 0; i < balls.Count; i++)
            {
                balls[i].Draw(P);
            } 
        }


        public void Draw(SpriteBatch P)
        {
            ballsDraw(P);
            hero.draw(P);
            Hp.Draw(P);
            BulletBAR.draw(P);
            BulletImg.draw(P);
            if (dead)
            {


                //英雄死亡 爆炸特效
                if (deadSec == 75)
                {
                    GamePage.effectHeroDead.Play(0.8f, 1f, 0f);
                }
                else if (deadSec == 60 || deadSec == 50 || deadSec == 40 || deadSec == 30 || deadSec == 20)
                {
                    GamePage.effectHeroDead.Play(0.7f, 0.5f, 0f);
                }
                else if (deadSec == 15)
                {
                    GamePage.effectHeroDead.Play(1f, -0.5f, 0f);
                }


                hero.Y += 2.5f;
                hero_dead.X = hero.X;
                hero_dead.Y = hero.Y;
                hero_dead.draw(P);

                if (deadSec == 0)
                {
                    GamePage.R_MENU_DEAD = new MENU_DEAD(GamePage.R_LV.getGP());
                    GamePage.LOCAL = "死亡";
                }
                deadSec--;
            }
            else
            {
                if (MISS_BOB != null)
                {
                    MISS_BOB.Draw(P);
                    MISS_BOB.update();
                }
            }
            
        }



        public void setbullet(int num)
        {
            //設定英雄的子彈數量
            bulletMax = num;
            balls.Clear();
        }

        public void setHP(int num)
        {
            //設定英雄HP
            Hp.setHPtotal(num);
        }


        public void addHP(int num)
        {
            //吃到加血
            Hp.hp+=num;
        }



        public void setF(int num)
        {
            //設定英雄移動速度
            if (num >= 16)
            {
                F = 16;
            }
            else
            {
                F = num;
            }

            ProHero = new TARY_TIMER(0, 30 + num*2);//延長被保護的效果
        }



        public void setATK(int num)
        {
            //設定武器攻擊力
            ATK = num;
        }








        //取得英雄中心點位置
        public Vector2 centerLoc
        {
            get
            {
                return hero.centerLoc;
            }
        }


        void MfiredBall()
        {
            if (ProHero.getT)
            {
                return;//英雄被保護中
            }
            L2=GamePage.R_MFired.Heroloss(hero.H);
            if (L2 != 0)
            {


                Hp.hp -= L2;


                //被球擊中 有三分之二的機率  星星徽章消失
                if (!dead && GamePage.randObj.Next(1, 4) != 1)
                    GamePage.R_BAR.PowerLv--;
                
                

                GamePage.effectHerofired.Play();
                if (Hp.hp>=1)
                {
                    ProHero.start();//啟動防護機制
                }
            }
        }
    
    


        public bool touchOnePiece(BoundingSphere H)
        {
            if (H.Intersects(hero.H))
            {
                return true;
            }
            else
            {
                return false;
            }
        }



        public void Withstand()
        {
            if (dead) return;



            //被怪的子彈攻擊到時 可做抵擋

            MISS_BOB = new TARY_BOB(GamePage.picStar3, hero.centerLoc,50);
            MISS_BOB.RANGE = 80;
            MISS_BOB.v = 60;
            MISS_BOB.CancelNum = 50;

            MISS_BOB.start();
            GamePage.effectgetPower.Play(0.5f, 0.7f, 0f);
            ProHero.start();//啟動防護機制
        }
    }
}
