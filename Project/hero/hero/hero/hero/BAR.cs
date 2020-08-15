using System;
using System.Net;
using System.Windows;
using System.Windows.Controls;
using System.Windows.Shapes;
using Microsoft.Xna.Framework;
using Microsoft.Xna.Framework.Content;
using Microsoft.Xna.Framework.Graphics;
using Microsoft.Xna.Framework.Input.Touch;
using System.Diagnostics;
using TARY_Library;
namespace hero
{
    public class BAR
    {

        TARY_VIMG[] StarBar =new TARY_VIMG[10];
        TARY_VIMG LeftFire, RightFire;//左邊右邊開火感應器
        TARY_SCORE SCORE;
        
        int TempMove = 15, TempMove2 = 0;//一秒幾發子彈
        int Double = 1;//得分數*數
        int TempMoveLv = 0;//發射速度
        int powerLv = 0;//武器種型等級
        public int bulletLv = 0;//球的數量增加
        public int ATKLv = 0;//攻擊力


        int[] power = new int[] { 1, 1, //0
                                  1, 3, //1 改變
                                  1, 3, //2
                                  2, 3, //3 改變
                                  2, 3, //4
                                  2, 3, //5
                                  2, 5, //6 改變
                                  2, 5, //7
                                  2, 7, //8 改變
                                  2, 7,  //9 
                                  2, 7  };
        


        public BAR(){
            LeftFire = new TARY_VIMG(new Texture2D[] { GamePage.picBAR, GamePage.picBAR2}, new Vector2(0, 799 - GamePage.picBAR.Height));
            RightFire = new TARY_VIMG(new Texture2D[] { GamePage.picBAR, GamePage.picBAR2 }, new Vector2(480 - GamePage.picBAR.Width, 799 - GamePage.picBAR.Height));

            LeftFire.stop();
            RightFire.stop();


            SCORE = new TARY_SCORE(GamePage.picNum,new Vector2(480,0));
            SCORE.ScoreV = 7;//多少位數
            SCORE.Score = 0;
            SCORE.X -= SCORE.Width;
           


            //＊＊＊＊＊＊＊＊＊＊＊＊＊＊
            StarBar[0] = new TARY_VIMG(GamePage.picStarBar, new Vector2(160, 740));
            StarBar[1] = new TARY_VIMG(GamePage.picStarBar, new Vector2(190, 740));
            StarBar[2] = new TARY_VIMG(GamePage.picStarBar, new Vector2(220, 740));
            StarBar[3] = new TARY_VIMG(GamePage.picStarBar, new Vector2(250, 740));
            StarBar[4] = new TARY_VIMG(GamePage.picStarBar, new Vector2(280, 740));
            StarBar[5] = new TARY_VIMG(GamePage.picStarBar, new Vector2(160, 700));
            StarBar[6] = new TARY_VIMG(GamePage.picStarBar, new Vector2(190, 700));
            StarBar[7] = new TARY_VIMG(GamePage.picStarBar, new Vector2(220, 700));
            StarBar[8] = new TARY_VIMG(GamePage.picStarBar, new Vector2(250, 700));
            StarBar[9] = new TARY_VIMG(GamePage.picStarBar, new Vector2(280, 700));


            for (int i = 0; i < StarBar.Length;i++ )
            {
                StarBar[i].stop();
            }

        }


        public void Draw(SpriteBatch P)
        {
            LeftFire.draw(P);
            RightFire.draw(P);
            SCORE.draw(P);

            for (int i = 0; i < StarBar.Length; i++)
            {
                StarBar[i].draw(P);
            }

        }



        
        
        public void update(){


            for (int i = 0; i < GamePage.touchState.Count; i++)
            {
                GamePage.touchLocation = GamePage.touchState[i];





                if (GamePage.touchState[i].State == TouchLocationState.Released)
                {
                    LeftFire.imgptr = 0;
                    RightFire.imgptr = 0;
                }


                //＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊
                if (GamePage.R_LV.T_ScoreChgMoney)
                {

                    if (GamePage.touchState[i].State == TouchLocationState.Pressed)
                    {
                        if (LeftFire.touchXY(GamePage.touchLocation.Position.X, GamePage.touchLocation.Position.Y))
                        {
                            //執行跳過 分數計算
                            GamePage.R_LV.ScoreChgMoney.auto();
                            LeftFire.imgptr = 1;
                            RightFire.imgptr = 0;

                        }else if(RightFire.touchXY(GamePage.touchLocation.Position.X, GamePage.touchLocation.Position.Y)){
                            GamePage.R_LV.ScoreChgMoney.auto();
                            LeftFire.imgptr = 0;
                            RightFire.imgptr = 1;
                        }



                    }

                    return;//若是過關就不發射攻擊
                }
                //＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊



                if (GamePage.touchState[i].State == TouchLocationState.Moved)
                {

                   // Debug.WriteLine("  X:"+GamePage.touchLocation.Position.X.ToString() + "  Y:" + GamePage.touchLocation.Position.Y);


                    if (TempMove2 > TempMove - TempMoveLv)
                    {
                        TempMove2 = 0;

                    

                        if ( LeftFire.touchXY(GamePage.touchLocation.Position.X, GamePage.touchLocation.Position.Y))
                        {
                            GamePage.R_HERO.Mainfire(power[(powerLv * 2)]);
                            LeftFire.imgptr = 1;
                            //RightFire.imgptr = 0;

                            for (int j = i; j < GamePage.touchState.Count; j++)
                            {
                                GamePage.touchLocation = GamePage.touchState[j];
                                if ( RightFire.touchXY(GamePage.touchLocation.Position.X, GamePage.touchLocation.Position.Y))
                                {
                                    GamePage.R_HERO.Secondfire(power[(powerLv * 2) + 1]);
                                    //LeftFire.imgptr = 0;
                                    RightFire.imgptr = 1;
                                    break;
                                }
                            }
                            return;
                        }



                        if (RightFire.touchXY(GamePage.touchLocation.Position.X, GamePage.touchLocation.Position.Y))
                        {

                            GamePage.R_HERO.Secondfire(power[(powerLv * 2) + 1]);
                            //LeftFire.imgptr = 0;
                            RightFire.imgptr = 1;
                            for (int j = i; j < GamePage.touchState.Count; j++)
                            {
                                GamePage.touchLocation = GamePage.touchState[j];
                                if (LeftFire.touchXY(GamePage.touchLocation.Position.X, GamePage.touchLocation.Position.Y))
                                {
                                    GamePage.R_HERO.Mainfire(power[(powerLv * 2)]);
                                    LeftFire.imgptr = 1;
                                    //RightFire.imgptr = 0;
                                    break;
                                }
                            }
                            return;
                        }


                    }
                    else
                    {
                        TempMove2++;
                    }
                    return;
                }


                



            }
        }


        public int Score
        {
            get{ return SCORE.Score;}

            set{

                if (value>=9999999)
                {
                    value = 9999999;
                }

                SCORE.Score = value;
                GamePage.HERO_SCORE = SCORE.Score;
            }
        }

        public void  addScore(int num)
        {
            Score += num * (Double + (GamePage.HERO_S * 2) + 1);//分數*加倍數
        }


        public void changeStarBar(){

                    for (int i = 0; i < StarBar.Length;i++ )
                    {   
                        if(PowerLv>i){
                            StarBar[i].imgptr = 1;
                        }else{
                            StarBar[i].imgptr = 0;
                        }
                    }
        }


        public int tempMove
        {
            //連續發射子彈的速度
            get { return TempMove; }
            set { TempMove = value; }
        }



        public void ResetBtn()
        {
            RightFire.imgptr = 0;
            LeftFire.imgptr = 0;
        }


        public int PowerLv
        {
            get
            {
                return powerLv;
            }

            set
            {
                if (value < 0)
                {
                    powerLv = 0;
                }else if(value > 10){
                    powerLv = 10;
                }
                else
                {
                    powerLv = value;
                }



                changeStarBar();


                switch (powerLv)
                {
                    case 0:
                         Double = 1;//得分數*數
                         TempMoveLv = 0;//發射速度
                         bulletLv = 0;//球的數量增加
                         ATKLv = 0;//攻擊力
                         break;
                    case 1://武器變強了
                         Double = 1;//得分數*數
                         TempMoveLv = 0;//發射速度
                         bulletLv = 0;//球的數量增加
                         ATKLv = 0;//攻擊力
                         break;
                    case 2:
                         Double = 1;//得分數*數
                         TempMoveLv = 0;//發射速度
                         bulletLv = 1;//球的數量增加
                         ATKLv = 0;//攻擊力
                         break;
                    case 3://武器變強了
                         Double = 1;//得分數*數
                         TempMoveLv = 0;//發射速度
                         bulletLv = 1;//球的數量增加
                         ATKLv = 0;//攻擊力
                         break;
                    case 4:
                         Double = 2;//得分數*數
                         TempMoveLv = 0;//發射速度
                         bulletLv = 1;//球的數量增加
                         ATKLv = 0;//攻擊力
                         break;
                    case 5:
                         Double = 2;//得分數*數
                         TempMoveLv = 0;//發射速度
                         bulletLv = 1;//球的數量增加
                         ATKLv = 1;//攻擊力
                         break;
                    case 6://武器變強了
                         Double = 2;//得分數*數
                         TempMoveLv = 0;//發射速度
                         bulletLv = 1;//球的數量增加
                         ATKLv = 1;//攻擊力
                         break;
                    case 7:
                         Double = 3;//得分數*數
                         TempMoveLv = 0;//發射速度
                         bulletLv = 1;//球的數量增加
                         ATKLv = 1;//攻擊力
                         break;
                    case 8://武器變強了
                         Double = 3;//得分數*數
                         TempMoveLv = 1;//發射速度
                         bulletLv = 1;//球的數量增加
                         ATKLv = 1;//攻擊力
                         break;
                    case 9:
                         Double = 3+GamePage.HERO_S;//得分數*數
                         TempMoveLv = 1;//發射速度
                         bulletLv = 1;//球的數量增加
                         ATKLv = 1;//攻擊力
                         break;
                    case 10:
                         Double = 4+GamePage.HERO_S;//得分數*數
                         TempMoveLv = 1;//發射速度
                         bulletLv = 2;//球的數量增加
                         ATKLv = 1;//攻擊力
                         break;
                }//switch
            }
        }
    }
}
