using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using Microsoft.Devices.Sensors;
using Microsoft.Xna.Framework;
using Microsoft.Xna.Framework.Input;
using Microsoft.Xna.Framework.Input.Touch;
using Microsoft.Xna.Framework.Graphics;
namespace BOBO
{
    public class Lv
    {
        Accelerometer gSensor;
        Lvalue Lvalue;
        ball ball;
        Pass pass;
        passed passed;
        string str;

        float eN = 0.4f;
        TouchLocation touchLocation;

        int SORT=0;//代表功能

        bool stop = false;//停止&&緩速控制器


        mytimer MYtimer, Fasttimer,nowtimer;

        int MYLV = 0;

        float sense = 0.005f;
        float eY = 0f,tempeY;
        float eX = 0f,tempeX;
        int F = 16;
        int F_DOWN = 10;//當啟動時 緩速緩多少
        int F_UP = 16;//當關閉時 速度回多少
        public Lv(int LV)
        {
            MYLV = LV;
            Lvalue = new Lvalue(LV);




            ball = new ball(setBall(), Lvalue.ballPos);
            


            pass = new Pass(Game1.picP1, Lvalue.passPos);
            passed = new passed();
            gSensor = new Accelerometer();//建立 Accelerometer 類別的物件
            gSensor.ReadingChanged += new EventHandler<AccelerometerReadingEventArgs>(gSensor_ReadingChanged);	//處理 Accelerometer 類別的物件的 ReadingChanged 事件
            gSensor.Start();



            MYtimer = new mytimer(LV);
            MYtimer.setPos(450, 410);
            MYtimer.start();


            nowtimer = new mytimer();
            nowtimer.setPos(400, 195);

            Fasttimer = new mytimer();
            Fasttimer.setPos(400, 195+60);



        }



        void gSensor_ReadingChanged(object sender, AccelerometerReadingEventArgs e)
        {
            tempeX = (float)e.X;
            tempeY = (float)e.Y;

            //若破關就不偵測
            if (pass.passT)
            {
                gSensor.Stop();
                return;
            }


            if (stop && SORT==2)
            {
                return;//user觸控螢幕  將停止動作
            }



            if (tempeY > eN || tempeY < -eN)
            {
                if (tempeY > 0)
                {
                    eY = eN;
                }else{
                    eY = -eN;
                }
            }
            else
            {
                eY = tempeY;
            }






            if (tempeX > eN  || tempeX < -eN)
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






            //取用 e.X, e.Y, e.Z
            if (eY > sense)
            {
                ball.setAddY((int)(F * eY));
            }else if (eY < sense * -1)
            {
                ball.setAddY((int)(F * eY));
            }




            if (eX  > sense)
            {
                ball.setAddX((int)(F * eX));

            }
            else if (eX  < (sense) * -1)
            {
                ball.setAddX((int)(F * eX));
            }
            
        }




        public void UPDATE()
        {
            MYtimer.UPDATE();
            //判斷是否超過地圖位置
            if (ball.banGround())
            {
                ball.setPos(Lvalue.ballPos);
                return;
            }



            if (!pass.passT)
            {
                Lvalue.UPDATE();//若不明物,可以移動的畫 就直接update物體移動



                if (pass.H.Intersects(ball.H))
                {
                    pass.setP(Game1.Lv, MYtimer.getTime());//破關將破關資料  回寫資料庫 並且紀錄破關秒數
                    pass.passT = true;
                    MYtimer.stop();


                    //將 最快時間及目前時間 顯示出來
                    Fasttimer.setN(Fasttimer.fast(MYLV));
                    nowtimer.setN(MYtimer.getTime());
                    return;
                }

                if (Lvalue.match(ball.H))
                {
                    ball.setPos(Lvalue.ballPos);
                }



                for (int i = 0; i < Game1.touchState.Count; i++)
                {
                    touchLocation = Game1.touchState[i];


                    if (Game1.touchState[i].State == TouchLocationState.Pressed)
                    {
                        if(SORT==1){
                            F=F_DOWN; //緩速啟動
                        }

                        stop = true;
                    }
                    if (Game1.touchState[i].State == TouchLocationState.Released)
                    {
                        if(SORT==1){
                            F = F_UP;//緩速關閉
                        }
                        stop = false ;
                    }

                }//for




            }
            else
            {
                for (int i = 0; i < Game1.touchState.Count; i++)
                {
                    touchLocation = Game1.touchState[i];


                    if (Game1.touchState[i].State == TouchLocationState.Pressed)
                    {
                        if (passed.L1.touchXY(touchLocation.Position.X, touchLocation.Position.Y))
                        {
                            //重新挑戰
                            Game1.Game = new Lv(Game1.Lv);
                        }
                        if (!passed.L2.Stop && passed.L2.touchXY(touchLocation.Position.X, touchLocation.Position.Y))
                        {
                            //下一關
                            Game1.Lv += 1;
                            Game1.Game = new Lv(Game1.Lv);
                        }
                    }
                }//for
            }
        }



        public void Draw(){
            for(int i=0;i<Lvalue.boxMax;i++){
                Lvalue.box[i].Draw();
            }
            pass.Draw();
            ball.Draw();






            Game1.P.Draw(Game1.picBar,new Vector2(0,400),Color.White);
            MYtimer.Draw();


            //＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊
            if (MYLV <= 9)
            {
                Game1.P.Draw(MYtimer.changeImg(MYLV.ToString()), new Vector2(80+10, 430), Color.White);
            }
            else
            {
                
                str = MYLV.ToString();
                Game1.P.Draw(MYtimer.changeImg(str[0].ToString()), new Vector2(80, 430), Color.White);
                Game1.P.Draw(MYtimer.changeImg(str[1].ToString()), new Vector2(80 + 20, 430), Color.White);
            }
            //＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊


            //破關就顯示破關畫面
            if (pass.passT)
            {
                passed.Draw();
                Fasttimer.Draw();//最高紀錄
                nowtimer.Draw();//目前紀錄
            }


        }




        public void save()
        {
            MYtimer.saveTimer(MYLV);
        }



        Texture2D setBall()
        {

            DBHandler tDBHandler = new DBHandler(DBHandler.DBConnection);

            var tContacts = from Contacts in tDBHandler.Contacts
                            where Contacts.ERI == "SYSTEM"
                            select Contacts;


            Contacts DATA = tContacts.First();





            SORT = DATA.SORT;//球的煞車及緩速功能



            //普通----------------------------
            if (DATA.SIZE == 0 && DATA.SORT == 0)
            {
                return Game1.picA25;
            }

            if(DATA.SIZE==1 && DATA.SORT==0){
                return Game1.picA20;
            }

            if (DATA.SIZE == 2 && DATA.SORT == 0)
            {
                return Game1.picA15;
            }


            //緩速----------------------------
            if (DATA.SIZE == 0 && DATA.SORT == 1)
            {
                return Game1.picB25;
            }

            if (DATA.SIZE == 1 && DATA.SORT == 1)
            {
                return Game1.picB20;
            }

            if (DATA.SIZE == 2 && DATA.SORT == 1)
            {
                return Game1.picB15;
            }




            //煞車----------------------------
            if (DATA.SIZE == 0 && DATA.SORT == 2)
            {
                return Game1.picC25;
            }

            if (DATA.SIZE == 1 && DATA.SORT == 2)
            {
                return Game1.picC20;
            }

            if (DATA.SIZE == 2 && DATA.SORT == 2)
            {
                return Game1.picC15;
            }



            return Game1.picA25;
        }

    }
}
