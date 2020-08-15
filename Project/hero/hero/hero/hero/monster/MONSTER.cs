using System;
using System.Windows.Media;
using Microsoft.Xna.Framework;
using Microsoft.Xna.Framework.Content;
using Microsoft.Xna.Framework.Graphics;
using TARY_Library;

namespace hero
{
    public class MONSTER :MONSTER_IF
    {
        public TARY_VIMG V;//實體
        public int HP;//怪物血量
        public int SCORE;//分數
        public float ADD_X;//怪物前進位移
        public float ADD_Y;//怪物前進位移
        public Vector2 LOC;
        public TARY_BOB BOB;//怪物死亡爆炸效果
        public bool Dead = false;
        public bool BOB_END = false;
        public Texture2D ColorStar;


        public bool Mtype = true;//如果是王死的話 煙火的聲音較大聲


        public MONSTER(Vector2 loc)
        {
            this.V = new TARY_VIMG(GamePage.picMONSTER1_A, loc);
            info();
        }




        public virtual void info()
        {
            //＊＊父類別基礎屬性＊＊＊＊
            SCORE = 0;//擊倒分數
            HP = 0;//怪物血量
            ADD_X = 0;//物件位移
            ADD_Y = 0;//物件位移
            //＊＊＊＊＊＊＊＊＊＊＊＊＊
        }




        public virtual void Draw(SpriteBatch P)
        {
            BOB_Draw(P);

            
        }



        public virtual void update()
        {
            BOB_update();



        }



        public bool life()
        {

            if (Mtype)
            {
            //＊＊一般怪＊＊
                    //判定生命是否存在~包含作標及生命值
                    if (V.Y >= 830 || V.X >= 520 || V.X <= -50)
                    {
                        SCORE = 0;
                        Dead = true;
                        return false;
                    }
                    else if (HP <= 0)
                    {
                        //待加上 爆炸或失效果
                        ADD_X = 0;
                        ADD_Y = 0;
                        Dead = true;//怪已經死了


                        if (BOB==null)
                        {


                    
                            switch(GamePage.randObj.Next(1,8)){
                                case 1: ColorStar = GamePage.picStar7; break;//白色為6   star1為背景色
                                case 2: ColorStar = GamePage.picStar2; break;
                                case 3: ColorStar = GamePage.picStar3; break;
                                case 4: ColorStar = GamePage.picStar4; break;
                                case 5: ColorStar = GamePage.picStar5; break;
                                case 6: ColorStar = GamePage.picStar6; break;
                                case 7: ColorStar = GamePage.picStar8; break;
                            }

                            BOB = new TARY_BOB(ColorStar, V.centerLoc, (int)(V.Width / 2));
                            BOB.start();


                            Event_Dead();//怪物死掉之後事件
                            GamePage.effectMonsterDead.Play(0.6f, 0f, 0f);


                            //將怪的分數加到看板中
                            GamePage.R_BAR.addScore(SCORE);
                        }


                        return !BOB_END;
                    }
                    else
                    {
                        return true;
                    }//end if
            }else{
            //＊＊ＢＯＳＳ＊＊
                    //判定生命是否存在~包含作標及生命值
                    if (V.Y >= 1000)
                    {
                        SCORE = 0;
                        Dead = true;
                        return false;
                    }
                    else if (HP <= 0)
                    {
                        //待加上 爆炸或失效果
                        ADD_X = 0;
                        ADD_Y = 0;
                        Dead = true;//怪已經死了


                        if (BOB == null)
                        {



                            switch (GamePage.randObj.Next(1, 6))
                            {
                                case 1: ColorStar = GamePage.picStar7; break;//白色為6   star1為背景色
                                case 2: ColorStar = GamePage.picStar2; break;
                                case 3: ColorStar = GamePage.picStar3; break;
                                case 4: ColorStar = GamePage.picStar4; break;
                                case 5: ColorStar = GamePage.picStar5; break;
                                case 6: ColorStar = GamePage.picStar6; break;
                            }

                            BOB = new TARY_BOB(ColorStar, V.centerLoc, (int)(V.Width / 2));
                            BOB.RANGE = 600;
                            BOB.v = 90;
                            BOB.CancelNum = 80;
                            BOB.start();

                            Event_Dead();//怪物死掉之後事件

                            GamePage.effectMonsterDead.Play(1f, 0f, 0f);

                            if(ClearMonster())
                                GamePage.R_LV.ClearMonster();//BOSS死了~要求所有怪物自殺
                        }


                        return !BOB_END;
                    }
                    else
                    {
                        return true;
                    }


            }//end if

        }//END 



        public int hp
        {
            get
            {
                return HP;
            }

            set
            {
                if (isLossHP())
                {
                    HP = value;
                    Event_lossHP();

                    if (Mtype)
                    {
                        //一般怪物
                        GamePage.effectMonsterfired.Play(0.4f, 0f, 0f);
                    }
                    else
                    {
                        //Boss
                        GamePage.effectMonsterfired.Play(1f, 0f, 0f);
                    }

                }

                
            }
        }



        public BoundingSphere H
        {
            get
            {
                if (Dead)
                {
                    V.H.Radius = 0;
                    V.H.Center = new Vector3(0f, 0f, 0f);
                }

                return V.H;
            }
        }


        public int Score
        {
            get { return SCORE; }
            set { SCORE = value; }
        }


        public void BOB_update()
        {
            if (BOB != null)
            {
                BOB.update();

                if (!BOB.T)
                {
                    BOB_END = true;//爆炸效果結束
                }
                return;
            }
        }



        public void BOB_Draw(SpriteBatch P)
        {
            if (BOB != null)
            {
                BOB.Draw(P);
                return;
            }
            else
            {
                V.draw(P);
            }
        }


        public float X
        {
            get { return V.X; }
            set { V.X=value;}
        }

        public float Y
        {
            get { return V.Y; }
            set { V.Y = value; }
        }

        //設定圖片
        public void setIMG(Texture2D img)
        {
            this.V.setIMG(img);
        }

        //設定圖片
        public void setIMG(Texture2D[] img)
        {
            this.V.setIMG(img);
        }




        public float Width
        {
            get{
                return V.Width;
            }
        }


        public float Height
        {
            get
            {
                return V.Height;
            }
        }




        public void fired()
        {
            //怪物開火 - 直線
            GamePage.R_MFired.Add(new ball_M1(this.V.centerLoc));
        }

        public void firedX()
        {
            //怪物開火 - 對準英雄開火
            ball_M1 ballX = new ball_M1(this.V.centerLoc);
            ballX.ADD_X = (GamePage.R_HERO.centerLoc.X - this.V.centerLoc.X) / ((GamePage.R_HERO.centerLoc.Y - this.V.centerLoc.Y) / 2);
            GamePage.R_MFired.Add(ballX);
        }


        public void firedF3()
        {

            ball_M1 ballX1 = new ball_M1(this.V.centerLoc);
            GamePage.R_MFired.Add(ballX1);


            ball_M1 ballX2 = new ball_M1(this.V.centerLoc);
            ballX2.ADD_X -= 0.5f;
            GamePage.R_MFired.Add(ballX2);



            ball_M1 ballX3 = new ball_M1(this.V.centerLoc);
            ballX3.ADD_X += 0.5f;
            GamePage.R_MFired.Add(ballX3);
        }







        public void firedF5()
        {
            //怪物開火 - 直線
            ball_M1 ballX1 = new ball_M1(this.V.centerLoc);
            GamePage.R_MFired.Add(ballX1);


            ball_M1 ballX2 = new ball_M1(this.V.centerLoc);
            ballX2.ADD_X -= 0.5f;
            GamePage.R_MFired.Add(ballX2);


            ball_M1 ballX3 = new ball_M1(this.V.centerLoc);
            ballX3.ADD_X += 0.5f;
            GamePage.R_MFired.Add(ballX3);




            ball_M1 ballX4 = new ball_M1(this.V.centerLoc);
            ballX4.ADD_X += 1.2f;
            GamePage.R_MFired.Add(ballX4);



            ball_M1 ballX5 = new ball_M1(this.V.centerLoc);
            ballX5.ADD_X -= 1.2f;
            GamePage.R_MFired.Add(ballX5);
        }








        public void firedRn(int n)
        {
            //怪物爆炸 - 隨機朝著四面八方 

            for (int i = 0; i < n;i++ )
            {
                int p=GamePage.randObj.Next(0, 5);
                ball_M1 ballX1 = new ball_M1(this.V.centerLoc);



                if (p == 0  || p == 1 )
                {
                    ballX1.ADD_Y = -3.5f;
                    ballX1.ADD_X = GamePage.randObj.Next(-30, 30) * 0.1f;
                }
                else if (p == 2 || p == 3)
                {
                    ballX1.ADD_Y = 3.5f;
                    ballX1.ADD_X = GamePage.randObj.Next(-30, 30) * 0.1f;
                }
                else
                {


                        if (GamePage.randObj.Next(0, 2) == 0)
                        {
                            ballX1.ADD_X = GamePage.randObj.Next(30, 35) * 0.1f;
                        }
                        else
                        {
                            ballX1.ADD_X = GamePage.randObj.Next(30, 35) * -0.1f;
                        }

                        ballX1.ADD_Y = 0;

                }

                GamePage.R_MFired.Add(ballX1);
            }//for


        }


        public void firedM3Rn(int n)
        {
            //怪物爆炸 - 隨機朝著四面八方 

            for (int i = 0; i < n; i++)
            {
                int p = GamePage.randObj.Next(0, 5);
                ball_M3 ballX1 = new ball_M3(this.V.centerLoc);



                if (p == 0 || p == 1)
                {
                    ballX1.ADD_Y = -3.5f;
                    ballX1.ADD_X = GamePage.randObj.Next(-30, 30) * 0.1f;
                }
                else if (p == 2 || p == 3)
                {
                    ballX1.ADD_Y = 3.5f;
                    ballX1.ADD_X = GamePage.randObj.Next(-30, 30) * 0.1f;
                }
                else
                {


                    if (GamePage.randObj.Next(0, 2) == 0)
                    {
                        ballX1.ADD_X = GamePage.randObj.Next(30, 35) * 0.1f;
                    }
                    else
                    {
                        ballX1.ADD_X = GamePage.randObj.Next(30, 35) * -0.1f;
                    }

                    ballX1.ADD_Y = 0;

                }

                GamePage.R_MFired.Add(ballX1);
            }//for
        }



        //BOSS專用
        public void firedM2()
        {
            //怪物開火 - 對準英雄開火
            ball_M2 ballX = new ball_M2(this.V.centerLoc);
            ballX.ADD_X = (GamePage.R_HERO.centerLoc.X - this.V.centerLoc.X) / ((GamePage.R_HERO.centerLoc.Y - this.V.centerLoc.Y) / 2);
            GamePage.R_MFired.Add(ballX);
        }




        //禿然出現用
        public void firedR2()
        {
            //怪物開火 - 對準英雄開火
            ball_M2 ballX = new ball_M2(new Vector2(GamePage.randObj.Next(20, 460), GamePage.randObj.Next(-240, -20)));
            GamePage.R_MFired.Add(ballX);
        }
        public void firedR3()
        {
            //怪物開火 - 對準英雄開火
            ball_M3 ballX = new ball_M3(new Vector2(GamePage.randObj.Next(20, 460), GamePage.randObj.Next(-240, -5)));
            GamePage.R_MFired.Add(ballX);
        }




        //小怪專用
        public void firedM3()
        {
            //怪物開火 - 對準英雄開火
            ball_M3 ballX = new ball_M3(this.V.centerLoc);
            ballX.ADD_X = (GamePage.R_HERO.centerLoc.X - this.V.centerLoc.X) / ((GamePage.R_HERO.centerLoc.Y - this.V.centerLoc.Y) / 2);
            GamePage.R_MFired.Add(ballX);
        }




        public void firedM3x3()
        {

            ball_M3 ballX1 = new ball_M3(this.V.centerLoc);
            GamePage.R_MFired.Add(ballX1);


            ball_M3 ballX2 = new ball_M3(this.V.centerLoc);
            ballX2.ADD_X -= 0.5f;
            GamePage.R_MFired.Add(ballX2);



            ball_M3 ballX3 = new ball_M3(this.V.centerLoc);
            ballX3.ADD_X += 0.5f;
            GamePage.R_MFired.Add(ballX3);
        }





        public void firedM3x5()
        {

            //怪物開火 - 直線
            ball_M3 ballX1 = new ball_M3(this.V.centerLoc);
            GamePage.R_MFired.Add(ballX1);


            ball_M3 ballX2 = new ball_M3(this.V.centerLoc);
            ballX2.ADD_X -= 0.5f;
            GamePage.R_MFired.Add(ballX2);


            ball_M3 ballX3 = new ball_M3(this.V.centerLoc);
            ballX3.ADD_X += 0.5f;
            GamePage.R_MFired.Add(ballX3);




            ball_M3 ballX4 = new ball_M3(this.V.centerLoc);
            ballX4.ADD_X += 1.2f;
            GamePage.R_MFired.Add(ballX4);



            ball_M3 ballX5 = new ball_M3(this.V.centerLoc);
            ballX5.ADD_X -= 1.2f;
            GamePage.R_MFired.Add(ballX5);
        }





        public void callMonster(string CTYPE,int N)
        {

            if (CTYPE == "MONSTER1")
            {
                for (int i = 0; i < N; i++)
                {
                    GamePage.R_LV.addMonster(new MONSTER1(new Vector2(GamePage.randObj.Next(20, 470), GamePage.randObj.Next(-500, 0))));
                }
                return;
            }

            if (CTYPE == "MONSTER1_A")
            {
                for (int i = 0; i < N; i++)
                {
                    GamePage.R_LV.addMonster(new MONSTER1_A(new Vector2(GamePage.randObj.Next(20, 470), GamePage.randObj.Next(-500, 0))));
                }
                return;
            }

            if (CTYPE == "MONSTER1_B")
            {
                for (int i = 0; i < N; i++)
                {
                    GamePage.R_LV.addMonster(new MONSTER1_B(new Vector2(GamePage.randObj.Next(20, 470), GamePage.randObj.Next(-500, 0))));
                }
                return;
            }

            if (CTYPE == "MONSTER1_C")
            {
                for (int i = 0; i < N; i++)
                {
                    GamePage.R_LV.addMonster(new MONSTER1_C(new Vector2(GamePage.randObj.Next(20, 470), GamePage.randObj.Next(-500, 0))));
                }
                return;
            }




            if (CTYPE == "MONSTER2")
            {
                for (int i = 0; i < N; i++)
                {
                    GamePage.R_LV.addMonster(new MONSTER2(new Vector2(GamePage.randObj.Next(20, 470), GamePage.randObj.Next(-500, 0))));
                }
                return;
            }

            if (CTYPE == "MONSTER2_A")
            {
                for (int i = 0; i < N; i++)
                {
                    GamePage.R_LV.addMonster(new MONSTER2_A(new Vector2(GamePage.randObj.Next(20, 470), GamePage.randObj.Next(-500, 0))));
                }
                return;
            }

            if (CTYPE == "MONSTER2_B")
            {
                for (int i = 0; i < N; i++)
                {
                    GamePage.R_LV.addMonster(new MONSTER2_B(new Vector2(GamePage.randObj.Next(20, 470), GamePage.randObj.Next(-500, 0))));
                }
                return;
            }

            if (CTYPE == "MONSTER2_C")
            {
                for (int i = 0; i < N; i++)
                {
                    GamePage.R_LV.addMonster(new MONSTER2_C(new Vector2(GamePage.randObj.Next(20, 470), GamePage.randObj.Next(-500, 0))));
                }
                return;
            }




            if (CTYPE == "MONSTER3")
            {
                for (int i = 0; i < N; i++)
                {
                    GamePage.R_LV.addMonster(new MONSTER3(new Vector2(GamePage.randObj.Next(20, 470), GamePage.randObj.Next(-200, 0))));
                }
                return;
            }


            if (CTYPE == "MONSTER3_A")
            {
                for (int i = 0; i < N; i++)
                {
                    GamePage.R_LV.addMonster(new MONSTER3_A(new Vector2(GamePage.randObj.Next(20, 470), GamePage.randObj.Next(-200, 0))));
                }
                return;
            }


            if (CTYPE == "MONSTER3_B")
            {
                for (int i = 0; i < N; i++)
                {
                    GamePage.R_LV.addMonster(new MONSTER3_B(new Vector2(GamePage.randObj.Next(20, 470), GamePage.randObj.Next(-200, 0))));
                }
                return;
            }


            if (CTYPE == "MONSTER3_C")
            {
                for (int i = 0; i < N; i++)
                {
                    GamePage.R_LV.addMonster(new MONSTER3_C(new Vector2(GamePage.randObj.Next(20, 470), GamePage.randObj.Next(-200, 0))));
                }
                return;
            }

            if (CTYPE == "MONSTER4")
            {
                for (int i = 0; i < N; i++)
                {
                    GamePage.R_LV.addMonster(new MONSTER4(new Vector2(GamePage.randObj.Next(20, 470), GamePage.randObj.Next(-200, 0))));
                }
                return;
            }


            if (CTYPE == "MONSTER4_A")
            {
                for (int i = 0; i < N; i++)
                {
                    GamePage.R_LV.addMonster(new MONSTER4_A(new Vector2(GamePage.randObj.Next(20, 470), GamePage.randObj.Next(-200, 0))));
                }
                return;
            }


            if (CTYPE == "MONSTER4_B")
            {
                for (int i = 0; i < N; i++)
                {
                    GamePage.R_LV.addMonster(new MONSTER4_B(new Vector2(GamePage.randObj.Next(20, 470), GamePage.randObj.Next(-200, 0))));
                }
                return;
            }

            if (CTYPE == "MONSTER4_C")
            {
                for (int i = 0; i < N; i++)
                {
                    GamePage.R_LV.addMonster(new MONSTER4_C(new Vector2(GamePage.randObj.Next(20, 470), GamePage.randObj.Next(-200, 0))));
                }
                return;
            }





            if (CTYPE == "MONSTER5")
            {
                for (int i = 0; i < N; i++)
                {
                    GamePage.R_LV.addMonster(new MONSTER5(new Vector2(GamePage.randObj.Next(20, 470), GamePage.randObj.Next(-200, 0))));
                }
                return;
            }

            if (CTYPE == "MONSTER5_A")
            {
                for (int i = 0; i < N; i++)
                {
                    GamePage.R_LV.addMonster(new MONSTER5_A(new Vector2(GamePage.randObj.Next(20, 470), GamePage.randObj.Next(-200, 0))));
                }
                return;
            }

            if (CTYPE == "MONSTER5_B")
            {
                for (int i = 0; i < N; i++)
                {
                    GamePage.R_LV.addMonster(new MONSTER5_B(new Vector2(GamePage.randObj.Next(20, 470), GamePage.randObj.Next(-200, 0))));
                }
                return;
            }

            if (CTYPE == "MONSTER5_C")
            {
                for (int i = 0; i < N; i++)
                {
                    GamePage.R_LV.addMonster(new MONSTER5_C(new Vector2(GamePage.randObj.Next(20, 470), GamePage.randObj.Next(-200, 0))));
                }
                return;
            }








            if(CTYPE=="MONSTER6"){
                for (int i = 0; i < N;i++ )
                {
                    GamePage.R_LV.addMonster(new MONSTER6(new Vector2(GamePage.randObj.Next(20, 470), GamePage.randObj.Next(0, 500))));
                }
                return;
            }


            if (CTYPE == "MONSTER6_A")
            {
                for (int i = 0; i < N; i++)
                {
                    GamePage.R_LV.addMonster(new MONSTER6_A(new Vector2(GamePage.randObj.Next(20, 470), GamePage.randObj.Next(0, 500))));
                }
                return;
            }



            if (CTYPE == "MONSTER6_B")
            {
                for (int i = 0; i < N; i++)
                {
                    GamePage.R_LV.addMonster(new MONSTER6_B(new Vector2(GamePage.randObj.Next(20, 470), GamePage.randObj.Next(0, 500))));
                }
                return;
            }



            if (CTYPE == "MONSTER6_C")
            {
                for (int i = 0; i < N; i++)
                {
                    GamePage.R_LV.addMonster(new MONSTER6_C(new Vector2(GamePage.randObj.Next(20, 470), GamePage.randObj.Next(0, 500))));
                }
                return;
            }





            if (CTYPE == "MONSTER7")
            {
                for (int i = 0; i < N; i++)
                {
                    GamePage.R_LV.addMonster(new MONSTER7(new Vector2(GamePage.randObj.Next(20, 470), GamePage.randObj.Next(-100, 0))));
                }
                return;
            }



            if (CTYPE == "MONSTER7_A")
            {
                for (int i = 0; i < N; i++)
                {
                    GamePage.R_LV.addMonster(new MONSTER7_A(new Vector2(GamePage.randObj.Next(20, 470), GamePage.randObj.Next(-100, 0))));
                }
                return;
            }


            if (CTYPE == "MONSTER7_B")
            {
                for (int i = 0; i < N; i++)
                {
                    GamePage.R_LV.addMonster(new MONSTER7_B(new Vector2(GamePage.randObj.Next(20, 470), GamePage.randObj.Next(-100, 0))));
                }
                return;
            }


            if (CTYPE == "MONSTER7_C")
            {
                for (int i = 0; i < N; i++)
                {
                    GamePage.R_LV.addMonster(new MONSTER7_C(new Vector2(GamePage.randObj.Next(20, 470), GamePage.randObj.Next(-100, 0))));
                }
                return;
            }






            if (CTYPE == "MONSTER71")
            {
                for (int i = 0; i < N; i++)
                {
                    GamePage.R_LV.addMonster(new MONSTER71(new Vector2(GamePage.randObj.Next(30, 450), GamePage.randObj.Next(80, 500))));
                }
                return;
            }





            if (CTYPE == "BOSS5_G")
            {
                for (int i = 0; i < N; i++)
                {
                    GamePage.R_LV.addMonster(new BOSS5_G(new Vector2(GamePage.randObj.Next(30, 460), GamePage.randObj.Next(100, 400))));
                }
                return;
            }


            if (CTYPE == "BOSS51_G")
            {
                for (int i = 0; i < N; i++)
                {
                    GamePage.R_LV.addMonster(new BOSS51_G(new Vector2(GamePage.randObj.Next(30, 460), GamePage.randObj.Next(100, 400))));
                }
                return;
            }
        }













        //判定是否為魔王還是一般怪物  介面用的
        public bool Mtypes
        {
            get
            {
                return Mtype;
            }
        }

        public virtual void Event_lossHP(){
            //當損血時 這個可以作為判斷怪物暴怒特性

        }


        public virtual void Event_Dead()
        {
            //當怪物要死之前..

        }

        public virtual bool isLossHP()
        {
            //怪物是否可以損血 TRUE代表可以損血    用於被保護怪模式

            return true;
        }






        public virtual bool ClearMonster()
        {
            //boss專用
            //殺死怪物後 是否清掉所有怪物
            return true;
        }


    }
}
