using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using Microsoft.Xna.Framework;
using Microsoft.Xna.Framework.Input.Touch;



namespace BOBO
{
    public class Board
    {

        int M = 0,V=15;
        bool MT = false; //是否開始拖曳
        float Mpos = 0;
        float Mpos2 = 0;
        float Mpos3 = 0;

        int locX = 150, locY = 90;
        int M2 = 0;//滑動的速度
        int[] timerF=new int[20];
        int[] timerS=new int[20];
        mytimer[] myTimerF = new mytimer[20];
        mytimer[] myTimerS = new mytimer[20];
        TouchLocation touchLocation;

        public Board()
        {
            settimer();//將資料庫資料轉為陣列


            for (int i = 0; i < timerF.Length;i++ )
            {
                myTimerF[i] = new mytimer();
                myTimerF[i].setN(timerF[i]);
                myTimerF[i].setPos(locX, locY + 50 * i);
                myTimerS[i] = new mytimer();
                myTimerS[i].setN(timerS[i]);
                myTimerS[i].setPos(locX + 200, locY + 50 * i); 
            }
        }




        public void UPDATE()
        {

            for (int i = 0; i < Game1.touchState.Count; i++)
            {
                touchLocation = Game1.touchState[i];

                if (Game1.touchState[i].State == TouchLocationState.Pressed)
                {
                    M2 = 0;
                    MT = true;
                    Mpos2 = 0;
                    Mpos = touchLocation.Position.Y;
                }
                else if (Game1.touchState[i].State == TouchLocationState.Released)
                {
                    if (MT)
                    {

                        M2 = (int)(Mpos3 - touchLocation.Position.Y);
                        MT = false;
                    }
                }
                else if (Game1.touchState[i].State == TouchLocationState.Moved)
                {
                    if (MT)
                    {
                        if (Mpos > touchLocation.Position.Y)
                        {
                            M -= (int)(Mpos - touchLocation.Position.Y) / 8;
                        }
                        else if (Mpos < touchLocation.Position.Y)
                        {
                            M -= (int)(Mpos - touchLocation.Position.Y) / 8;
                        }
                        Mpos3 = Mpos2;
                        Mpos2 = Mpos;
                        Mpos = touchLocation.Position.Y;
                    }

                }

            }//for






            if(M2!=0){
                if(M2>0){
                    M -= M2 / V;
                    if (M2 - M2 / V > 0)
                    {
                        M2 -= M2 / V;
                    }
                    else
                    {
                        M2 = 0;
                    }
                }else if(M2< 0){
                    M -= M2 / V;

                    if (M2 - M2 / V < 0)
                    {
                        M2 -= M2 / V;
                    }
                    else
                    {
                        M2 = 0;
                    }
                }

            }

            if(M<-80){
                M = -80;
            }
            if (M >= 0)
            {
                M = 0;
            }
            for (int i = 0; i < timerF.Length; i++)
            {
                myTimerF[i].setPos(locX+120, locY + 50 * i + M * 10);
                myTimerS[i].setPos(locX+320, locY + 50 * i + M * 10);
            }


        }


        public void Draw()
        {

            string str;

            for (int i = 0; i < timerF.Length; i++)
            {
                myTimerF[i].Draw();
                myTimerS[i].Draw();
                Game1.P.Draw(Game1.picS1, new Vector2(locX, locY + 50 * i + M * 10), Color.White);


                if (i < 9)
                {
                    Game1.P.Draw(myTimerF[i].changeImg((i + 1).ToString()), new Vector2(locX+30, locY + 50 * i + M * 10), Color.White);
                }
                else
                {
                    str = (i + 1).ToString();
                    Game1.P.Draw(myTimerF[i].changeImg(str[0].ToString()), new Vector2(locX-5+30, locY + 50 * i + M * 10), Color.White);
                    Game1.P.Draw(myTimerF[i].changeImg(str[1].ToString()), new Vector2(locX + 5 + 30, locY + 50 * i + M * 10), Color.White);
                }
            }


            Game1.P.Draw(Game1.picS2, new Vector2(locX, locY - 50 + M * 10), Color.White);

        }






        public void settimer(){
            //將資料庫資料回寫各個關卡中
            DBHandler tDBHandler = new DBHandler(DBHandler.DBConnection);

            for (int i = 0; i < timerF.Length;i++ )
            {
                var tContacts2 = from Contacts2 in tDBHandler.Contacts2
                                where Contacts2.LVNO == (i+1) && Contacts2.T==1
                                orderby Contacts2.Timer descending
                                select Contacts2;

                bool T=true;
                timerF[i] = -1;
                timerS[i] = -1;
                foreach(Contacts2 AAA in tContacts2){
                    //資料庫中有資料了!
                    if (T)
                    {
                        timerF[i] = AAA.Timer;//最快的時間
                        timerS[i] = AAA.Timer;//最慢的時間
                        T = false;
                    }
                    else
                    {
                        timerF[i] = AAA.Timer;//最快的時間
                    }
                }//foreach
            }//for end 
        }
    }
}
