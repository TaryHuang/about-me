using System;
using System.Net;
using System.Windows;
using System.Windows.Controls;
using System.Windows.Documents;
using System.Windows.Ink;
using System.Windows.Input;
using System.Windows.Media;
using System.Windows.Media.Animation;
using System.Windows.Shapes;
using TARY_Library;
using Microsoft.Xna.Framework;
using Microsoft.Xna.Framework.Content;
using Microsoft.Xna.Framework.Graphics;
namespace hero
{
    public class OnePiece
    {
        string CTYPE;//寶物種類
        public TARY_VIMG IMG;//寶物圖片
        int Value;
        public bool T = false;//是否觸發事件

        int LifeSec = 600;//多久寶物會消失

        int  EndSec = 35;//觸發後 播放特效時間
        bool End = false;//播完後 為true

        public float ADD_X = 0, ADD_Y = 0;//寶物位移

        TARY_SCORE money;


        public OnePiece()
        {
            //系統自動給定寶物
            int n = GamePage.randObj.Next(0, 10);
            Vector2 loc = new Vector2(GamePage.randObj.Next(50, 430), GamePage.randObj.Next(20, 550));


                if (n == 0)
                {
                    CTYPE = "HP";
                    Value = 4;
                    IMG = new TARY_VIMG(GamePage.picOneP[0], loc);
                }


                if (n >= 1 && n <= 3)
                {
                    CTYPE = "閃電";
                    Value = (int)(18 * GamePage.HERO_LV / GamePage.randObj.Next(1, 3)) + GamePage.HERO_A;
                    IMG = new TARY_VIMG(GamePage.picOneP4, loc);
                }



                if (n >= 4 && n <= 10)
                {
                    CTYPE = "武器";
                    Value = GamePage.randObj.Next(1, 3);
                    IMG = new TARY_VIMG(GamePage.picOneP2, loc);
                }


                fupdate();
        }





        public OnePiece(string str)
        {
            //BOSS專用

            Vector2 loc = new Vector2(GamePage.randObj.Next(50, 430), GamePage.randObj.Next(20, 550));
            if (str == "武器")
            {
                CTYPE = "武器";

                if (GamePage.HERO_LV >= 10)
                {
                    Value = GamePage.randObj.Next(1, 3);
                }
                else
                {
                    Value = 1;
                }


                IMG = new TARY_VIMG(GamePage.picOneP2, loc);
            }




            if (str == "金幣")
            {
                CTYPE = "金幣";
                Value = GamePage.HERO_LV * 100;
                IMG = new TARY_VIMG(GamePage.picOneP[2], loc);
            }


            if (str == "HP")
            {
                CTYPE = "HP";
                Value = 3;
                IMG = new TARY_VIMG(GamePage.picOneP[0], loc);
            }

            fupdate();

        }



        public OnePiece(Vector2 loc)
        {
            //打怪物的



            int n = GamePage.randObj.Next(0, 100);
            if(GamePage.HERO_LV <= 6){


                 if (n==0)
                 {
                     CTYPE = "HP";
                     Value = 2;
                     IMG = new TARY_VIMG(GamePage.picOneP[0],loc);
                 }


                 if (n >= 1 && n <= 3)
                 {
                     CTYPE = "閃電";
                     Value = 35 + GamePage.HERO_A;
                     IMG = new TARY_VIMG(GamePage.picOneP4, loc);
                 }



                 if (n >= 4 && n <= 17)
                 {
                     CTYPE = "武器";
                     
                     //三分之一的機率可以得到2能量
                     if(GamePage.randObj.Next(1, 4)%2==0){
                        Value = 2;
                     }else{
                        Value = 1;
                     }


                     IMG = new TARY_VIMG(GamePage.picOneP2, loc);
                 }


                 if (n >= 18 && n <= 100)
                 {
                     CTYPE = "金幣";
                     Value = GamePage.randObj.Next(3, 9) * 10;
                     IMG = new TARY_VIMG(GamePage.picOneP[2], loc);
                 }
            }
            else if (GamePage.HERO_LV >= 7 && GamePage.HERO_LV <= 12)
            {

                if (n == 0)
                {
                    CTYPE = "HP";
                    Value = 3;
                    IMG = new TARY_VIMG(GamePage.picOneP[0], loc);
                }

                if (n >= 1 && n <= 3)
                {
                    CTYPE = "閃電";
                    Value = 50 + GamePage.HERO_A;
                    IMG = new TARY_VIMG(GamePage.picOneP4, loc);
                }

                if (n >= 4 && n <= 12)
                {
                    CTYPE = "武器";
                    Value = GamePage.randObj.Next(1, 3);
                    IMG = new TARY_VIMG(GamePage.picOneP2, loc);
                }


                if (n >= 13 && n <= 100)
                {
                    CTYPE = "金幣";
                    Value = GamePage.randObj.Next(5, 15) * 10;
                    IMG = new TARY_VIMG(GamePage.picOneP[2], loc);
                }             
                
            }else{

                if (n == 0)
                {
                    CTYPE = "HP";
                    Value = GamePage.randObj.Next(4, 6);
                    IMG = new TARY_VIMG(GamePage.picOneP[0], loc);
                }


                if (n >= 1 && n <= 5)
                {
                    CTYPE = "閃電";
                    Value = 120 + GamePage.HERO_A;
                    IMG = new TARY_VIMG(GamePage.picOneP4, loc);
                }


                if (n >= 6 && n <= 15)
                {
                    CTYPE = "武器";
                    Value = GamePage.randObj.Next(2, 4);
                    IMG = new TARY_VIMG(GamePage.picOneP2, loc);
                }


                if (n >= 16 && n <= 100)
                {
                    CTYPE = "金幣";
                    Value = GamePage.randObj.Next(8, 20) * 10;
                    IMG = new TARY_VIMG(GamePage.picOneP[2], loc);
                }             
            }//if




            fupdate();
        }


        public void Draw(SpriteBatch P)
        {
            if (T)
            {
                if (CTYPE == "金幣")
                {
                    money.draw(P);
                }
            }
            else
            {
                IMG.draw(P);
            }
        }



        public void UPDATE(){

            if(CTYPE != "金幣"){
                IMG.X += ADD_X;
                IMG.Y += ADD_Y;
            }

           

            //寶物生命週期
            LifeSec--;
            if (LifeSec <= 90)
            {
                if (IMG.Alpha == 1000)
                {
                    IMG.Alpha = 0;
                }
                else
                {
                    IMG.Alpha = 1000;
                }
            }

            if (LifeSec<=0)
            {
                End = true;
            }
            



            //是否已經按下寶物觸發事件
            if (!T)
            {
                return;
            }

            EndSec--;

            if (EndSec == 0)
            {
                End = true;
            }

        }


        public void Event_GetOneP()
        {
            //執行特效

            if (CTYPE == "HP")
            {
                GamePage.R_HERO.addHP(Value);
                GamePage.effectgetHP.Play(0.7f,1,0);
            }else 
            if (CTYPE == "閃電")
            {
                GamePage.R_LV.allMLoss(Value);
                GamePage.Thunder = true;
            }
            else
            if (CTYPE == "武器")
            {
                GamePage.R_BAR.PowerLv += Value;
                GamePage.effectgetPower.Play(0.7f, 0, 0);
            }else
            if (CTYPE == "金幣")
            {
                GamePage.HERO_Money2 += Value;//破關後 才將金錢加起來
            }


            //如果計分看板出現 就不得分
            if(CTYPE != "金幣" && !GamePage.R_LV.T_ScoreChgMoney){
                GamePage.R_BAR.addScore(300+(GamePage.HERO_S*100));
            }

            T = true;
        }



        public bool Life()
        {
            return !End;
        }






        public void fupdate()
        {


            if (CTYPE == "金幣")
            {
                money = new TARY_SCORE(GamePage.picNum2, IMG.centerLoc);

                money.X -= 80;


                money.Score = Value;
                money.Prefix = "$";
                Event_GetOneP();
            }


            if (CTYPE == "閃電")
            {
                IMG.ImgNum = 4;
            }


            if (CTYPE == "武器")
            {
                IMG.ImgNum = 4;
            }
            //使得原點為中心 再將感應器縮小
            IMG.CenterPoint = true;
            IMG.H.Radius -= 5;
        }
    }
}
