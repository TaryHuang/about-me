using System;
using System.Windows.Media;
using Microsoft.Xna.Framework;
using Microsoft.Xna.Framework.Content;
using Microsoft.Xna.Framework.Graphics;
using TARY_Library;

namespace hero
{
    public class MONSTER6 : MONSTER
    {
        public Vector2 targetLoc;
        public TARY_TIMER Timer;//發動時間點
        public int n;//保護時間
        public TARY_RANDOM randObj;
        public int sec;//幾秒發動


        public MONSTER6(Vector2 loc)
            : base(loc)
        {
            V = new TARY_VIMG(GamePage.picMONSTER3_B, loc);
            V.stop();
            V.CenterPoint = true;
        }


        public override void info()
        {
            //＊＊父類別基礎屬性＊＊＊＊
            SCORE = 20;//擊倒分數
            HP = 6;//怪物血量
            ADD_X = 0f;//物件位移
            ADD_Y = 0f;//物件位移
            //＊＊＊＊＊＊＊＊＊＊＊＊＊
            randObj = GamePage.randObj;
            n = 60; //出現後 保護怪獸時間 並且怪獸要閃閃的
            sec = 60;//幾秒發動射擊
        }


        public override void update()
        {
            V.Rotation += 0.05f;

            //凸然出現的怪獸  出現後 鎖定英雄身捨攻擊

            BOB_update();

            //第一階段＊＊＊＊＊保護怪獸 並且閃閃怪獸
            if (n >= 0)
            {
                n--;
                if(n%2==1){
                    V.Alpha = 0f;
                }else{
                    V.Alpha = 1000f;
                }
                return;
            }


            //第二階段＊＊＊＊＊停止並計算英雄目標，＂準備＂開始衝刺
            if (Timer == null)
            {
                Timer = new TARY_TIMER(0, sec);
                targetLoc = GamePage.R_HERO.centerLoc;
                targetLoc.X -= V.Width / 2;
                targetLoc.X += randObj.Next(-100, 100);
                targetLoc.Y = 850;

                Timer.start();
                V.imgptr++;
            }


            if (Timer.getT)
            {
                Timer.UPDATE();
                return;
            }



            //第三階段＊＊＊＊＊開始衝刺
            X += (targetLoc.X - X) / 16;
            Y += (targetLoc.Y - Y) / 16;
        }



        public override bool  isLossHP()
        {
          if (n >= 0)
          {
              //保護怪獸 不扣血
               return false;
          }
            return true;
        }



        public override void Event_Dead()
        {

            //10分之1的機率有東西領
            if (GamePage.randObj.Next(0, 10) == 0)
                GamePage.R_MonsterThg.Add(new OnePiece(new Vector2(V.X, V.Y)));

        }
    }
}
